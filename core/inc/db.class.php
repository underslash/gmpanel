<?php
class db
{
    private $db = NULL;
    public function __construct()
    {
        global $db;
        try
        {
            $this->db = new PDO('mysql:dbname=account;charset=utf8;host='.$db['host'], $db['user'], $db['pwd']);
        }
        catch (Exception $e) 
        {
            exit('Errore.');
        }
    }
    public function query($array)
    {
        $sql = $array['sql'];
        $par = (isset($array['par'])) ? $array['par'] : [];
        $ret = (isset($array['ret'])) ? $array['ret'] : 'res';
		/* $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); */
        $obj = $this->db->prepare($sql);
		$result = $obj->execute($par);
        switch ($ret)
        {
            case 'object':
                return $obj;
            break;

            case 'fetch-assoc':
                return $obj->fetch(PDO::FETCH_ASSOC);
            break;

            case 'fetch-all':
                return $obj->fetchAll(PDO::FETCH_ASSOC);
            break;

            case 'result':
                return $result;
            break;

            default:
                return $result;
            break;
        }
    }
	public function select_db ($db){
		return $this->db->query(["sql" => "use :db", "par" => ["db" => $db]]);
	}
    public function __destruct() { $this->db = NULL; }
}
?>