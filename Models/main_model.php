<?php 


class Connection_Mysql {
	//Atributos
	private static $db_host = 'localhost';
	private static $db_user = 'root';
	private static $db_pass = '';
	private static $db_name = 'pacvi';
	private static $db_charset = 'utf8';
	private $conn;
	
	protected $query;
	protected $rows = array();

	//método privado para conectarse a la base de datos
	private function db_open() {

		$this->conn = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			self::$db_name
		);
		$this->conn->set_charset(self::$db_charset);
		if($this->conn->connect_errno){
			die("We have an error to connect with the database: (".$this->conn->connect_errno.")");
		}
	}
	//método privado para desconectarse de la base de datos
	protected function db_close() {
		$this->conn->close();
	}

	//establecer un query que afecte datos (INSERT, DELETE o UPDATE)
	protected function set_query($query) {
		$this->db_open();
		$this->result = $this->conn->query($query);
		return $this->result;
		
	}

}