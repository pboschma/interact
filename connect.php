<?php
/*
* Mysql database class - only one connection allowed
*/
if($_SERVER['SERVER_ADDR'] == 'vxtm.nl'){
	$username = 'u36244p31547_interact';
	$host     = 'vxtm.nl';
	$passwort = '12345';
}else{
	$username = 'root';
	$host     = '127.0.0.1';
	$passwort = 'root';
}

class Database {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = $host;
	private $_username = "root";
	private $_password = "root";
	private $_database = 'interact';
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }

	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}
?>