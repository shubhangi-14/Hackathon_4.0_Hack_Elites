<?php
class DB_connect{
	private $conn;
	public function connect(){
		require_once 'Config.php';
		$this->conn = new mysqli('localhost', 'root', 'upIebQIbhggUU6XM', 'criminal');
		return $this->conn;
	}
}
?>