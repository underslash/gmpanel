<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
    }
	public function content() {
		$text = '<div class="panel panel-info"><div class="panel-heading"><h3 class="panel-title">Giocatore</h3></div><div class="panel-body"><form><div class="row"><div class="col-md-6"><input class="form-control input-lg required" name="nome_pg" placeholder="Nome del Giocatore"></div><div class="col-md-4"><select name="sub_azione" class="form-control input-lg"><option value="0">Info</option><option value="1">Banna</option><option value="2">Sbanna</option><option value="3">Elimina</option><option value="4">Elimina Account</option></select></div><div class="col-md-2">
        <input type="submit" class="btn btn-lg btn-info" value="Vai"></div></div></form></div></div>';
		return $text;
	}
	public function response() {
		if (isset($_POST['nome_pg'], $_POST['sub_azione'])){
			$db = new db;
			$id = $db->query(['sql' => 'SELECT `account_id`, `id` FROM `player`.`player` WHERE `name` = :name', 'par' => ['name' => $_POST['nome_pg']], 'ret' => 'fetch-assoc']);
			if ($id === false) exit(Messaggio("Personaggio non trovato", "warning"));
			$id_acc = $id['account_id'];
			$id_pg = $id['id'];
			if($_POST['sub_azione'] == 0){
				$account = $db->query(['sql' => 'SELECT `login`, `last_play`, `status` FROM `account`.`account` WHERE `id` = :id', 'par' => array('id' => $id_acc), 'ret' => 'fetch-assoc']);
				$personaggi = $db->query(['sql' => 'SELECT * FROM `player`.`player` WHERE `account_id` = :name', 'par' => ['name' => $id_acc], 'ret' => 'fetch-all']);
			?>
			<div class="panel panel-default">
  <div class="panel-heading">Risultati</div>
  <div class="panel-body">
<ul class="nav nav-tabs" id="myTab" style="margin-bottom:20px;">
				<li class="active"><a href="#home" data-toggle="tab">Account</a></li>
				<li><a href="#log" data-toggle="tab">Log</a></li>
				<?php foreach($personaggi as $pg) echo '<li><a href="#',$pg['id'],'" data-toggle="tab">',htmlentities($pg['name']),'</a></li>'; ?>
				</li>
			</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="home"><p><div class="row"><div class="col-xs-6"><b>Nome Account: </b> <?php echo htmlentities($account['login']); if($account['status'] == 'OK') echo ' <span class="label label-success">Attivo</span>'; else echo ' <span class="label label-danger">Non Attivo</span>';?></div><div class="col-xs-6"><b>Ultimo Login: </b> <?php echo htmlentities($account['last_play']); ?></div></div></p></div>
			  <div class="tab-pane" id="log"><p>asdsdasd</p></div>
				<?php foreach($personaggi as $pg) echo '<div class="tab-pane" id=',$pg['id'],'><p><div class="row"><div class="col-xs-6"><b>Yang: </b> ',$pg['gold'],'</div><div class="col-xs-6"><b>Ultima Partita: </b>',$pg['last_play'],'</div></div><div class="row"><div class="col-xs-6"><b>Livello: </b> ',$pg['level'],'</div><div class="col-xs-6"><b>Karma: </b>',$pg['alignment'],'</div></div><div class="row"><div class="col-xs-6"><b>Livello Cavallo: </b> ',$pg['horse_level'],'</div><div class="col-xs-6"><b>Indirizzo IP: </b>',$pg['ip'],'</div></div></p></div>'; ?>
  </div>
</div>
			<script type="text/javascript">
				$('#myTab a').click(function (e) {
				  e.preventDefault()
				  $(this).tab('show')
				})
			</script>
			<?php
			}else if($_POST['sub_azione'] == 1){
				$q = $db->query(['sql' => 'UPDATE `account`.`account` SET `status`=\'BANNED\' WHERE `id` = :id', 'par' => ['id' => $id_pg]]);
				if($q) exit(Messaggio("Account bannato con successo", "success"));
				else exit(Messaggio("Account non bannato.", "warning"));
			}else if($_POST['sub_azione'] == 2){
				$q = $db->query(['sql' => 'UPDATE `account`.`account` SET `status`=\'OK\' WHERE `id` = :id', 'par' => ['id' => $id_pg]]);
				if($q) exit(Messaggio("Account sbannato con successo", "success"));
				else exit(Messaggio("Account non sbannato.", "warning"));
			}else if($_POST['sub_azione'] == 3){
				$id = $db->query(['sql' => 'SELECT `login` FROM `account`.`account` WHERE `id` = :id', 'par' => ['id' => $id_pg], 'ret' => 'fetch-assoc']);			
			}
			/* if($_POST['sub_azione'] == 4){
				$db->query(["sql" => "INSERT INTO player_deleted( select * from player WHERE iD = :id)", "par" => ["id" => ]
			}*/
			unset($db);
		}
	}
    public function __destruct() {}
}
?>