<?php
class DatabaseConfig {
	// Instance of the class
	private static $_instance = null;
	// Connection of PDO
	private $pdoConn = null;

	// Datas for the connexion
	private const DB_HOST = "localhost";
	private const DB_NAME = "ruches";
	private const DB_USERNAME = "root";
	private const DB_PASSWORD = "";

	/**
	 * Not allow access from outside
	 */
	private function __construct() {
		try {
			$this->pdoConn = new PDO("mysql:host=".self::DB_HOST. ";dbname=".self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
			$this->pdoConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			echo "Connected<br>";
		} catch(PDOException $e) {
			echo "Une erreur est apparue pendant la connection : ". $e->getMessage();
		}
	}
	private function __clone() {}
	private function __wakeup() {}

	/**
	 * Create the instance of the class if it not already exists
	 */
	public static function getInstance() {  
	  if(is_null(self::$_instance)) {
			self::$_instance = new self();
	  }
	  return self::$_instance;
	}
	
	/**
	 * Query to the database
	 */
	public function queryStatement($statement) {
		try {
			return $this->pdoConn->query($statement);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/**
	 * Fetch :
	 * 	BOTH (par défaut)
	 * 	ASSOC (tableau associatif)
	 * 	OBJ (obj)
	 * We can modify with setFetchMode() too
	 */
	public function displayResults($results) {
		while($res = $results->fetch(PDO::FETCH_ASSOC) ) {
			echo '<pre>';
			print_r($res);
			echo '</pre>';
		}
	}

	public function displayAllResults($results) { 
		echo '<pre>';
		print_r($results->fetchAll(PDO::FETCH_ASSOC));
		echo '</pre>';
	}
	  
	private function closePdo() {
		echo "echdddddddddddddddddo";
		// closeCursor();
	}
}
   
$db = DatabaseConfig::getInstance();
// var_dump($db);

$results = $db->queryStatement('SELECT * FROM users');
// $db->displayResults($results);
$db->displayAllResults($results);

// foreach ($db->query('SELECT * FROM users m') as $user) {
//   echo '<pre>', print_r($user) ,'</pre>';
// }

