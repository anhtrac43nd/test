<?php
class DataAccess {
	private $connInfo;
	private $mysqli;

	public static function Instance()
    {
    	global $config;
        static $inst = null;
        if ($inst === null) {
            $inst = new DataAccess($config["db_conn"]);
        }
        return $inst;
    }

	public function __construct($connInfo) {
		$this->connInfo = $connInfo;
	}

	public function query($str) {
		$this->lazyConnect();
		$res = $this->mysqli->query(mysql_real_escape_string($str));
		$this->disconnect();
		return $res;
	}

	private function lazyConnect() {	
		$this->mysqli = new mysqli($this->connInfo["server"], $this->connInfo["username"],$this->connInfo["password"],$this->connInfo["db"]);
		if($this->mysqli->connect_errno) {
			die("Could not connect to db {$this->mysqli->connect_error}");
		}
	}

	private function disconnect() {
		if($this->mysqli != null) { 
			$this->mysqli->close();
		}
	}
}

?>