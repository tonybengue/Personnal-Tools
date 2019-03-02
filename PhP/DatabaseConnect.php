<?php
	class DatabaseConnect {

	private $conn;
	public $username = "root";
	public $dbname = "";
	public $password = "krd123";
	public $host = "localhost";

	public function getDbconnection(){
		$this->conn = null;
	
		try {
			$this->conn = new PDO("mysql:host=".$this->host. ";dbname=".$this->dbname, $this->username, $this->password);
		} catch(PDOException $e) {
			echo "Une erreur est apparue pendant la connection". $e->getMessage();
		}
	return $this->conn;
	}
}