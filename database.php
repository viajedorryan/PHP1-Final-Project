<?php
	class Database {
		public $numRow;
		public $conn;
		public $cmd;
		public $result;
		public function __contruct() {
			$this->cmd 		 ="";
			$this->conn 	 =NULL;
			$this->numRow 	 =-1;
			$this->result 	 =NULL;
		}
		public function connect() {
			$this->conn = new mysqli("localhost","root","","loan");
			return (isset($this->conn))?true:false;
		}
		public function checkConnection() {
			if(!$this->conn)
				return $this->getError();
			return true;
		}
		public function getConnection() {
			if(!$this->conn) {
				return $this->conn = new mysqli("localhost","root","","loan");
			}
			return $this->conn;
		}
		public function set_query($query_string) {
			$this->cmd = $query_string;
		}
		public function getQuery() {
			return $this->cmd;
		}
		public function insert() {
			if($this->conn->query($this->cmd)){
				return true;
			}
		}
		public function update() {
			return $this->conn->query($this->cmd);
		}
		public function exec_query() {
			$this->result = $this->conn->query($this->cmd);
			if($this->result)
				return true;
			return false;
		}
		public function getNumRows() {
			return $this->conn->affected_rows;
		}
		public function getResult() {
			return $this->result->fetch_assoc();
		}
		public function getError() {
			return $this->conn->connect_error;
		}
		public function closeConnection() {
			$this->conn->close();
		}
		
	}
?>
