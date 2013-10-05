<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
    }
	public function content() {
		$db = new db;
		$ls_gm = $db->query(['sql' => 'SELECT `mID`, `mAccount`, `mName`, `mAuthority` FROM `common`.`gmlist`', 'ret' => 'fetch-all']);
        unset($db);
		$text = '';
		if(count($ls_gm) > 0){
			$text .= '<script type="text/javascript">$(\'form[name=lista_gm] input:checkbox\').click(function() {var $this = $(this);if ($this.is(\':checked\')) $this.parent().parent().addClass("danger");else  $this.parent().parent().removeClass("danger");});</script><form name="lista_gm"><div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title pull-left" style="padding-top:8px;">Lista GM</h3><input type="submit" class="btn btn-danger btn-sm pull-right" value="Elimina GM selezionato"><div class="clearfix"></div></div><div class="panel-body"><table class="table"><thead><tr><th>Nome Account</th><th>Nome Giocatore</th><th>Grado</th><th></th></tr></thead><tbody>';
			foreach($ls_gm as $gm) $text .= '<tr><td>'.$gm['mAccount'].'</td><td>'.$gm['mName'].'</td><td>'.$gm['mAuthority'].'</td><td><input type="radio" name="el_gm" value="'.$gm['mID'].'"></td></tr>';
			$text .= '</tbody></table></div></div></form>';
		}
		$text .= '<div class="panel panel-info"><div class="panel-heading"><h3 class="panel-title">Aggiungi GM</h3></div><div class="panel-body"><form><div class="row"><div class="col-md-6"><input class="form-control input-lg required" name="nome_gm" placeholder="Nome del Giocatore"></div><div class="col-md-4"><select name="grado" class="form-control input-lg"><option value="1">IMPLEMENTOR</option><option value="2">HIGH_WIZARD</option><option value="3">LOW_WIZARD</option><option value="4">GOD</option></select></div><div class="col-md-2"><input class="btn btn-default btn-lg pull-right" type="submit" value="Aggiungi GM"></div></div></form></div></div>';
		return $text;
	}
	public function response() {
		if (isset($_POST['nome_gm'], $_POST['grado'])){
			$db = new db;
			$q = $db->query(['sql' => 'SELECT `login` FROM `account`.`account` WHERE `id` = (SELECT `account_id` FROM `player`.`player` WHERE `name` = :name)', 'par' => ['name' => $_POST['nome_gm']], 'ret' => 'fetch-assoc']);
			if ($q === false) exit(Messaggio("Personaggio non trovato", "warning"));
			switch ($_POST['grado']) {
				case 1:
					$grado = "IMPLEMENTOR";
					break;
				case 2:
					$grado = "HIGH_WIZARD";
					break;
				case 3:
					echo "LOW_WIZARD";
					break;
				case 4:
					echo "GOD";
					break;
				default:
					exit(Messaggio("Grado non valido", "warning"));
					break;
			}
			$q_2 = $db->query([
				'sql' => 'INSERT INTO `common`.`gmlist`(`mAccount`, `mName`, `mContactIP`, `mServerIP`, `mAuthority`) VALUES (:n_acc,:nome_pg,\'\',\'ALL\',:grado)',
				'par' => ['n_acc' => $q['login'], 'nome_pg' => $_POST['nome_gm'], 'grado' => $grado]
			]);
			if ($q_2) Messaggio("GM aggiunto con successo", "success");
			else Messaggio("GM non aggiunto", "warning");
			unset($db);
		}else if(isset($_POST['el_gm'])){
			$db = new db;
			$q = $db->query([
				'sql' => 'DELETE FROM `common`.`gmlist` WHERE `mID` = :mid',
				'par' => ['mid' => $_POST['el_gm']]
			]);
			unset($db);
			if ($q) Messaggio("GM rimosso con successo", "success");
			else Messaggio("GM non rimosso", "warning");
		}
	}
    public function __destruct() {}
}
?>