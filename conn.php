<?php
	class databaseconnect{

		private $host = 'localhost';
		private $db = 'taskportal';
		private $user = 'root';
		private $pass = '';
		private $charset = 'utf8';
		
		//private $dsn = ("mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset);
		private $dsn = ("mysql:host=localhost;dbname=taskportal;charset=utf8");
		private $opt = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
			];

		public $pdo;	
		
		public function __construct(){
			$this->pdo = null;

			try
			{
	            $this->pdo = new PDO($this->dsn,$this->user,$this->pass,$this->opt);	
	        }
			catch(PDOException $exception)
			{
	            echo "Connection error: " . $exception->getMessage();
	        }
	         
	        return $this->pdo;
	    }

		

	}
?>