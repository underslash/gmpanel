<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
			if(!isset($_SESSION['utente']['infopg'])){
				$db = new db;
				$_SESSION['utente']['infopg'] = $db->query([  
					'sql' => "SELECT level, id, name, gold FROM `player`.`player` WHERE `account_id` = :acc_id",
					'par' => ['acc_id' => $_SESSION['utente']['id']],
					'ret' => 'fetch-all'
				]);
				unset($db);
			}
    }
	public function content() {
		$text = '';
		if($_SESSION['utente']['infopg'] !== false){
			$text .= '<ul class="list-group" style="width: 30%;float: left;">';
			foreach($_SESSION['utente']['infopg'] as $pg) $text .= '<li class="list-group-item"><span class="badge">Lv. '.$pg['level'].'</span>'.htmlentities($pg['name']).' <span class="label label-warning">'.$pg['gold'].' Yang</span></li>';
			$text .= '</ul>';
		}
		$text .= '<div class="jumbotron" style="width: 68%;float: right;"><h1>Area Utente</h1></div>';
		return $text;
	}
/*	public function response() {
	
	}*/
    public function __destruct() {}
}
?>