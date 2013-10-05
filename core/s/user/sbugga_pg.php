<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
    }
	public function content() {
		$text = '<form><div class="input-group"><input type="text" name="nomepg" class="form-control required" placeholder="Nome del Personaggio"><span class="input-group-btn"><input class="btn btn-default" type="submit" value="Sbugga"></span></div></form>';
		return $text;
	}
	public function response() {
		if (!isset($_POST['nomepg'])) exit(Messaggio("Dati mancanti.", "danger"));
		if(isset($_SESSION['chpw'])) exit(Messaggio("Hai già sbuggato questo personaggio", "danger"));
		$db = new db;
		$id = $db->query([  
			'sql' => "SELECT empire FROM player.player_index WHERE id = :acc_id",
			'par' => ['acc_id' => $_SESSION['utente']['id']],
			'ret' => 'fetch-assoc'
		]);
		if (!$id) exit(Messaggio("Errore, personaggio non trovato.", "danger"));
		$impero = $id['empire'];
		if ($impero == 1) $d = ['1', '469187', '964351'];
		else if ($impero == 2) $d = ['21', '55700', '157900'];
		else if ($impero == 3) $d = ['41', '969528', '278857'];
		$e = $db->query([
			'sql' => "UPDATE player.player SET x= :x, y=:y, map_index=:index, exit_x=:x, exit_y=:y, exit_map_index=:index WHERE name=:pg AND account_id= :acc_id",
			'par' => ['pg' => $_POST['nomepg'], 'x' => $d[0], 'y' => $d[1], 'index' => $d[2], 'acc_id' => $_SESSION['utente']['id']],
			'ret' => "result"
		]);
		unset($db);
		if (!$e) Messaggio("Nome personaggio non valido", "warning");
		else{
			$_SESSION['chpw'] = true;
			Messaggio("Utente teletrasportato al primo villaggio del regno di appartenenza, attendere 15 minuti prima di accedere nuovamente", "success");
		}
	}
    public function __destruct() {}
}
?>