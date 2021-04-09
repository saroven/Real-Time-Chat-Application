<?php
class Database{
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $db = DB_NAME;

		public $link;
		public $error;

		public function __construct()
		{
			$this->conn();
		}


		private function conn()
		{
			$this->link = new mysqli($this->host, $this->user, $this->pass, $this->db);
			if (!$this->link) {
				$this->error = "Conection not established".$this->link->connect_error;
				return false;
			}
		}

		// select or read data
		public function select($q)
		{
			$result = $this->link->query($q) or die($this->link->error.__line__);
			if ($result->num_rows > 0) {
				return $result;
			}
			else
			{
				return false;
			}
		}
		// insert data
		public function insert($q)
		{
			$result = $this->link->query($q) or die($this->link->error.__line__);
			if ($result) {
				return $result;
				exit();
			} else {
				return false;
			}
		}
		// update data
		public function update($q)
		{
			$result = $this->link->query($q) or die($this->link->error.__line__);
			if ($result) {
				return $result;
				exit();
			} else {
				return false;
			}
		}
		// // delete data
		// public function delete($q)
		// {
		// 	$result = $this->link->query($q) or die($this->link->error.__line__);
		// 	if ($result) {
		// 		return $result;
		// 		exit();
		// 	} else {
		// 		return false;
		// 	}
		// }
	}
 ?>
