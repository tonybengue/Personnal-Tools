<?php
class DatabaseConnect {
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
