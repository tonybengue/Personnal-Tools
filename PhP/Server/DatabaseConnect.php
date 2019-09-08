<?php

class DatabaseConfig {
	private static $_instance = null;
	private $PDOInstance = null;

	private static $db_host;
	private static $db_name;
	private static $db_username;
	private static $db_password;

	private function __construct($db_host, $db_name, $db_username, $db_password) {
		self::$db_host = $db_host;
		self::$db_name = $db_name;
		self::$db_username = $db_username;
		self::$db_password = $db_password;

		try {
			$this->PDOInstance = new PDO("mysql:host=".self::$db_host. ";dbname=".self::$db_name, self::$db_username, self::$db_password);
		} catch(PDOException $e) {
			echo "Une erreur est apparue pendant la connection". $e->getMessage();
		}
	}

	/**
	 * 
	 */
	public static function getInstance() {  
	  if(is_null(self::$_instance)) {
		new DatabaseConfig();
	  }
	  return self::$_instance;
	}
  
	private function makePDOMySQL(Configuration $conf) {
        // database properties
        $expectedKeys = ['db_host', 'db_login', 'db_password', 'db_base'];

        // Keys verifications
        foreach($expectedKeys as $key) {
            if(!isset($conf->$key)) {
                die("Database : missing $key in the .ini file");
            }
        }

        // Connect to Database
        try {
            self::$_pdo = new \PDO(
                "mysql:host={$conf->db_host};dbname={$conf->db_base};charset=utf8", 
                $conf->db_login, 
                $conf->db_password
            );
        } catch (\PDOException $exception) {
            die("Database : error mySQL $exception->getMessage()");
        }
	}
	
	/**
	 * Exécute une requête SQL avec PDO
	 *
	 * @param string $query La requête SQL
	 * @return PDOStatement Retourne l'objet PDOStatement
	 */
	public function query($query) {
	  return $this->PDOInstance->query($query);
	}
/*
	public function getDbconnection(){
		try {
			//$this->conn = new PDO("mysql:host=".$this->host. ";dbname=".$this->dbname, $this->username, $this->password);
			//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Une erreur est apparue pendant la connection". $e->getMessage();
		}
		return $this->conn;
	}
*/
	public function fetch($resultat) { 
        return $resultat->fetch();
    }
 
    public function close($resultat) {
        return $resultat->closeCursor();
	}  
	

}
