<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
    }
	public function content() {
		$text = '<form><textarea class="form-control input-lg required" name="query" placeholder="Inserisci la tua query qui"></textarea><input class="btn btn-default pull-right" style="margin-top: 5px;" type="submit" value="Esegui Query"></form>';
		return $text;
	}
	public function response() {
		if (!isset($_POST['query'])) exit(Messaggio("Dati mancanti.", "danger"));
		$db = new db;
		$q = $db->query(['sql' => $_POST['query']]);
		unset($db);
		if (!$q) Messaggio("Query non eseguita", "warning");
		else Messaggio("Query eseguita", "success");
	}
    public function __destruct() {}
}
?>