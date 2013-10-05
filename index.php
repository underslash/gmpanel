<?php include 'core/inc/init.inc.php'; 
if(!isset($_GET['area'], $_GET['page'])) header("location: /user/index.html");
if(!isset($_SESSION['utente'])){ header('Location: /login.html'); exit; }
$utente = $_SESSION['utente'];
if(!in_array($_GET['area'],$utente['perm'])) exit("Non disponi di permessi sufficienti per aprire questa pagina.");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
    <title><?php echo $site['name']; ?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/core.css" rel="stylesheet">
  </head>
  <body>
		<div class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Metin2Nova</a>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav sub-nav">
				<?php 
				$plugins = new SimpleXMLElement(file_get_contents("core/s/".$_GET['area']."/plugins.xml"));
				foreach ($plugins->plugin as $plugin) {
					$id = $plugin->attributes()["id"];
					if(isset($plugin->subpages) && count($plugin->subpages) != 0){
						echo "<li class=\"dropdown". ($plugin->source == $_GET['page'] ? " active" : "")."\" data-id=\"".htmlentities($id)."\"><a href=\"".htmlentities($plugin->source)."/index.html\" >".htmlentities($plugin->name)." <b class=\"caret\"></b></a><ul class=\"dropdown-menu sub-nav\">";
						foreach($plugin->subpages->subpage as $sub_page)	echo "<li ". ((isset($_GET['subpage']) && $sub_page->source == $_GET['subpage']) ? "class=\"active\"" : "")." data-id=\"".htmlentities($id)."\"><a href=\"".htmlentities($plugin->source)."/".htmlentities($sub_page->source).".html\">".htmlentities($sub_page->name)."</a></li>";
						echo "</ul></li>";
					}else echo "<li ". ((!isset($_GET['subpage']) && $plugin->source == $_GET['page']) ? "class=\"active\"" : "")." data-id=\"".htmlentities($id)."\"><a href=\"".htmlentities($plugin->source).".html\">".htmlentities($plugin->name)."</a></li>";
				}
				?>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<?php if(in_array('admin',$utente['perm'])){ ?><li <?php if($_GET['area'] == 'admin') echo "class=\"active\""; ?>><a href="/admin/index.html">Admin</a></li><?php } ?>
				<?php if(in_array('mod',$utente['perm'])){ ?><li <?php if($_GET['area'] == 'mod') echo "class=\"active\""; ?>><a href="/mod/index.html">Mod</a></li><?php } ?>
				<?php if(in_array('user',$utente['perm'])){ ?> <li <?php if($_GET['area'] == 'user') echo "class=\"active\""; ?>><a href="/user/index.html">Utente</a></li><?php } ?>
			  </ul>
			</div>
		  </div>
		</div>
		<div id="loading" class="container"><div class="progress progress-striped active"><div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Caricamento...</span></div></div></div>
		<div id="response" class="container"></div>
		<div class="container" id="content"></div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery.validate.min.js"></script>
		<script type="text/javascript">
			jQuery.ajaxSetup({
			  beforeSend: function() {
				 $('#loading').fadeIn();
			  },
			  complete: function(){
				 $('#loading').fadeOut();
			  },
			  success: function() {},
			  cache: true
			});
		function CaricaPagina(e) {
				e = e.replace('.html', '');
				e = e.replace("/<?php echo $_GET['area']; ?>/", "");
				if (e != current) {
					current = e;
					$("ul.sub-nav li").removeClass("active");
					$("#content").slideUp("slow", function () {
						$("#content").load("/r.php?area=<?php echo $_GET['area']; ?>&token=<?php echo session_id(); ?>&action=loadpage&url=" + encodeURIComponent(e), function (t, n, r) {
							if (n == "error") $("#response").html("<div class=\"alert alert-danger\">Errore nel caricamento dei dati.</div>");
							else {
								history.pushState("", "", "/<?php echo $_GET['area']; ?>/" + e + ".html");
								$("#content").slideDown("slow");
								$("ul.sub-nav li a[href^='" + e + "']").parent().addClass("active");
							}
						})
					})
				}
			}
			$(document).on('click', 'input[type=submit]', function() {
				$(this).closest("form").validate({
					submitHandler: function(form) {
						(form).fadeOut;
						$.ajax({
						  type: "POST",
						  url: "/r.php?area=<?php echo $_GET['area']; ?>&token=<?php echo session_id(); ?>&action=eldata&url=" + encodeURIComponent(current),
						  data: $(form).serialize(),
						  dataType: "html",
						  success: function(msg)
						  {
							$("#response").html(msg);
						  },
						 error: function (xhr, ajaxOptions, thrownError) {
							alert("Errore " + xhr.status);
						  }
						});			
					},
					errorPlacement: function(error, element) {  
					}
				});
			});
		var current;
		window.onpopstate = function (e) {
			CaricaPagina(location.pathname)
		};
			$(function () {
				<?php if (isset($_GET['p'])) { ?> CaricaPagina("<?php echo addslashes(htmlentities($_GET['p'])); ?>.html"); <?php } ?>
				$("ul.sub-nav li a").click(function(e){ url=$(this).attr("href");CaricaPagina(url);e.preventDefault()});
				
			});
		</script>
	</body>
</html>