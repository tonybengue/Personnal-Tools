<?php
class DatabaseConnect {
	//INSERT INTO crud VALUES(NULL, 'Tony', 'tonybengue@hotmail.fr', '0643148466', 'uploads/');
	
	private static $PDOInstance = null;

	private const DB_HOST = 'localhost';
	private const DB_NAME = 'ajax_app';
	private const DB_USERNAME = 'root';
	private const DB_PASSWORD = '';
	
	/**
	 * The instance is from the class (self::$PDOInstance) and accessible from outside
	 */
	private function __construct() {
		try {
			self::$PDOInstance = new PDO('mysql:dbhost='.self::DB_HOST.';dbname='.self::DB_NAME,self::DB_USERNAME ,self::DB_PASSWORD);
			self::$PDOInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		} catch(PDOException $e) {
			echo "Une erreur est apparue pendant la connection". $e->getMessage();
		}
	}

	/**
	 * Create the only instance of the class
	 */
	public static function getInstance() {  
	  if(is_null(self::$PDOInstance)) {
			new DatabaseConnect();
			
		//echo 'initialisé';
	  } else {
		//echo 'reutilise';
	  }
	  return self::$PDOInstance;
	}
   
	/*
	public function execute($statement) {
        return self::$PDOInstance->execute($statement);
    }
   
    public function prepare($statement) {
        return $this->PDOInstance->prepare($statement);
    }
   
    public function query($statement) {
        try {
          return $this->PDOInstance->query($statement);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
   
    public function queryFetchAllAssoc($statement) {
        return $this->PDOInstance->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }
   
    public function queryFetchAllObj($statement) {
        return $this->PDOInstance->query($statement)->fetchAll(PDO::FETCH_OBJ);
    }
   
    public function queryFetchAllBoth($statement) {
        return $this->query($statement)->fetchAll(PDO::FETCH_BOTH);
    }
   
    public function close() {
        $this->PDOInstance = null;
	}
	*/
}


class DatabaseConfig {
	private static $_instance = NULL;
	private $PDOInstance = NULL;

	private static $db_host;
	private static  $db_name;
	private static  $db_username;
	private static  $db_password;
	
/*
	public function __construct($host, $dbName, $username, $password) {
		$this->host = $host;
		$this->dbName = $dbName;
        $this->username = $username;
		$this->password = $password;
	}
*/
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
	
	/*
	private static $_classInstance;
        private $_PDOinstance;
         
        private function __construct() {
            try {
                $this->_PDOinstance = new PDO(DB_DSN, DB_NAME, DB_PASS);
                $this->_PDOinstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->_PDOinstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $this->_PDOinstance->query('SET NAMES utf8');
            } catch(PDOException $e) {
                die('Erreur ! ' . $e->getMessage());
            }
        }
         
        public static function getInstance() {
            if (!isset(self::$_classInstance))
                self::$_classInstance = new self();
            return self::$_classInstance;
        }
         
        public function getPDO() {
            return $this->_PDOinstance;
        }
         
	*/
}
