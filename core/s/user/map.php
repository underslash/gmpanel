<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
		$this->maps = [1 => [409600,896000,"Villaggio Rosso 1"], 3 => [307200,819200,"Villaggio Rosso 2"], 4 => [128000,0,"Zona Maledetti Rosso"], 21 => [0,102400,"Villaggio Giallo 1"], 23 => [102400,204800,"Villaggio Giallo 2"], 24 => [179200,0,"Zona Maledetti Giallo"], 41 => [921600,204800,"Villaggio Blu 1"], 43 => [819200,204800,"Villaggio Blu 2"], 44 => [230400,0,"Zona Maledetti Blu"], 61 => [358400,153600,"Monte"], 62 => [588800,614400,"Carta Doyum"], 63 => [204800,486400,"Deserto"], 65 => [537600,51200,"Tempio"], 67 => [281600,0,"Bosco Fantasma"], 103 => [0,25600,"Trigrammi"], 105 => [6400,0,"Imsha"], 110 => [32000,0,"Guerra tra Gilde 1"], 111 => [57600,0,"Guerra tra Gilde 2"]];
    }
	public function content() {
		$text = '<form><div class="input-group"><select name="map_id" class="form-control input-default">';		
		foreach($this->maps as $key=>$name) $text .= '<option value='.$key.'>'.$name[2].'</option>';
		$text .= '</select><span class="input-group-btn"><input class="btn btn-default" type="submit" value="Mostra"></span></div></form>';
		return $text;
	}
	public function response() {
		if(!isset($_POST['map_id']) || !is_numeric($_POST['map_id'])) exit(Messaggio("Dati mancanti.", "danger"));
		if(!isset($this->maps[$_POST['map_id']])) exit(Messaggio("Mappa non trovata.", "danger"));

		$db = new db;
		$pgs = $db->query([  
			'sql' => "SELECT x,y,name, level FROM player.player WHERE DATE_SUB(NOW(), INTERVAL 70 MINUTE) < last_play AND map_index = :ind",
			'par' => ['ind' => $_POST['map_id']],
			'ret' => 'fetch-all'
		]);
		unset($db);
		$text = '<script type=\'text/javascript\'>$(\'#map\').modal(\'show\');$(".pg_in_map").hover(
   function() {
      $("#map .nomepg").html($(this).data("name") + "<span class=\"badge pull-right\" style=\"margin-left:20px\">Lv " + $(this).data("lv") + "</span>");
   }
);</script><map name="map_pg">';
		$im=imagecreatefromjpeg("core/s/user/maps/".$_POST['map_id'].".jpg");     
		$white = ImageColorAllocate($im, 122, 227, 93);
		foreach($pgs as $pg){
			$pg['x']=round(((($pg['x']-$this->maps[$_POST['map_id']][0])/200)/0.5)/5.29,0);
			$pg['y']=round(((($pg['y']-$this->maps[$_POST['map_id']][1])/200)/0.5)/5.29,0);
			imagefilledrectangle($im,$pg['x'],$pg['y']+3,$pg['x']+3,$pg['y']+6,$white);
			$text .= '<area shape="rect" class="pg_in_map" coords="'.($pg['x']).','.($pg['y']+3).','.($pg['x']+3).','.($pg['y']+6).'" data-name="'.$pg['name'].'" data-lv="'.$pg['level'].'">';
		}
		$text .='</map>';
		ob_start (); 
		imagejpeg($im);
		$image_data = ob_get_contents (); 
		ob_end_clean (); 
		$text .= '<div class="modal fade" id="map" tabindex="-1" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">Mappa</h4></div><div class="modal-body"><div style="display: inline-block;"><img src="data:image/jpg;base64,' . base64_encode($image_data).'" usemap="#map_pg"></div><div class="scheda_pg" style="display: inline-block; margin-left:20px;"><h4 class="nomepg"></h4></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button></div></div></div></div>';
		return $text;
	}
    public function __destruct() {}
}
?>
