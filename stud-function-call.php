<?php
	require "functions.php";

	$student = new owntasks ();
		
	if(isset($_POST["func_name"])){
		if($_POST['func_name']=="alltasks"){
			echo '<script type="text/javascript">alert("Go ahead")</script>';
			$student->alltasks($_POST["parameter"]);
		}
	}


?>