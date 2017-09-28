<?php
	require_once "conn.php";

	class owntasks{

		private $pdo;
	
		public function __construct()
			{
				$db = new databaseconnect ();
				//$db = $databasedecl->dbConnection();
				$this->pdo = $db;
		    }
		
		public function alltasks($studid){
			$status=1;		//Status is 1 for completed tasks and 0 for incomplete works....
			$stmt=$this->pdo->prepare("select * from taskrecord WHERE Stud_id=:studid AND Status=:status");
			$stmt->execute(['studid'=>$studid,'status'=>$status]);
			if($stmt){
				echo "<h2>Completed Tasks</h2>";
				echo "<table id='completedtasks'>";	
				foreach($stmt as $row){		
					echo "<tr>";
					echo "<td>".$row["Task_desc"]."</td>";
					echo "<td>".$row["Prof_id"]."</td>";  //FETCH THE PROF NAME FROM USERS TABLE AND ECHO OUT INSTEAD OF ID 	
					echo "<td>".$row["time_stamp"]."</td>";
					echo "</tr>";
				}

			}

			$status=0;
			$stmt=$this->pdo->prepare("select * from taskrecord WHERE Stud_id=? AND Status=?");
			$stmt->execute([$studid,$status]);
			echo "<h2>Pending Tasks</h2>";
			if($stmt){
				echo "<table id='pendingtasks'>";
				foreach($stmt as $row){
					echo "<tr>";
					echo "<td>".$row["Task_desc"]."</td>";
					echo "<td>".$row["Prof_id"]."</td>";
					echo "<td>".$row["time_stamp"]."</td>";
					echo "<td><button class='taskcompletedbutton' id='";
					echo $studid."'";
					echo " value='Completed'></button></td>";
					echo "</tr>";
				}		
			}	
	
		}

	}
	
?>