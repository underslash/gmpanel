<?php
if(!isset($_GET['action'])) exit;
include 'core/inc/init.inc.php';
if($_GET['action'] == 'login' && isset($_POST['un'], $_POST['pw'])){
	if(isset($_SESSION['falliti'])){ if($_SESSION['falliti'] > 3)  exit(Messaggio("Accesso Negato.", "danger")); }
	if(isset($_COOKIE['falliti'])){	if(!is_numeric($_COOKIE['falliti']) || $_COOKIE['falliti'] > 3) exit(Messaggio("Accesso Negato.", "danger"));	}
	if(strlen($_POST['un']) == 0 || strlen($_POST['pw']) == 0 || strlen($_POST['un']) > 30) exit;
	$login = 1;
	$db = new db;
	$utente = $db->query([
		'sql' => "SELECT * FROM `account` WHERE `login` = :nomeutente AND `password` = PASSWORD(:password)",
		'par' => ['nomeutente' => $_POST['un'], 'password' => $_POST['pw']],
		'ret' => 'fetch-assoc'
	]);
	if(is_array($utente)){
		if($utente['status'] != "OK" || strtotime($utente['availDt']) > time()) Messaggio("Pare che tu sia stato bannato.", "danger");
		else{
			if($utente['web_admin'] == 2) $utente['perm'] = ["admin", "mod", "user"];
			else if($utente['web_admin'] == 1) $utente['perm'] = ["mod", "user"];
			else  $utente['perm'] = ["user"];
			unset($utente['web_admin']);
			$_SESSION['utente'] = $utente;
			Messaggio("Login effettuato con successo.<br/>Redirect in corso...<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"5; URL=index.php\">", "success");		
		}
	}else{
		sleep(5);
		if(!isset($_COOKIE['falliti'])) setcookie("falliti", 1, time()+3600);
		else setcookie("falliti", $_COOKIE['falliti'] +1, time()+3600);
		if(!isset($_SESSION['falliti'])) $_SESSION['falliti'] = 1;
		else $_SESSION['falliti']++;
		Messaggio("Dati errati.", "warning");
	}
	exit;
}
if(!isset($_GET['token']) OR $_GET['token'] != session_id() )	exit('Attacco CSRF: token inesistente o non valido!');
if(!isset($_SESSION['utente'])){ header('Location: login.php'); exit; }
$utente = $_SESSION['utente'];
if(isset($_GET['area'],$_GET['url'])){
	if(!in_array($_GET['area'],$utente['perm'])) exit(Messaggio("Non disponi di permessi sufficienti per aprire questa pagina.", "warning"));
	if (strpos($_GET['url'], "/") !== false) {
		$p_url = explode("/", $_GET['url']);
		if(count($p_url) != 2) exit(Messaggio("Errore, richiesta non valida.", "danger"));
		$file_pag = "core/s/".$_GET['area']."/".preg_replace('/[^a-z0-9_-]+/i', '', $p_url[0])."/".preg_replace('/[^a-z0-9_-]+/i', '', $p_url[1]).".php";
	} else $file_pag = "core/s/".$_GET['area']."/".preg_replace('/[^A-Za-z0-9_-]+/i', '', $_GET['url']).".php";
	if (strpos(pathinfo($file_pag)["dirname"], $_GET['area']) === false) exit(Messaggio("Non disponi di permessi sufficienti per aprire questa pagina.", "warning"));
	if(file_exists($file_pag)){
		include $file_pag;
		$plugin = new plugin;
		if($_GET['action'] == "loadpage"){
			header("Cache-Control: private");
			echo $plugin->content();
		}else if($_GET['action'] == "eldata" && method_exists('plugin', 'response')){
			header("Cache-Control: no-cache");
			header("Pragma: no-cache");
			echo $plugin->response();
		}
		unset($plugin);
	}else Messaggio("Pagina non trovata (404)", "warning");
}
function Messaggio($testo, $tipo){
?>
<script type="text/javascript">$(".alert").on("click",function(){$(this).animate({opacity:0},function(){$(this).slideUp("normal",function(){$(this).css("opacity","")})})})</script>
<?php
	echo "<div class=\"alert alert-",$tipo,"\">",$testo,"</div>";
}
?>