<?php
	session_start();
	require "conn.php";
	require "functions.php";
	
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION["fullname"]; ?>\'s page </title>
	<script src="jquery.js"></script>
</head>

<body>
	<div id = "big-container">
		<div id="header">
			<button class="selection-tabs" id="Home">Home</button>
			<button class="selection-tabs" id="AllTasks">All Tasks</button>
		</div>
		
		<p>WELCOME <?php echo $_SESSION["fullname"]; ?></p>

		<div id="content">
			
		</div>

	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			alert("Fuck Off");
			var functionname = "alltasks";			
			$.ajax({
				url: "stud-function-call.php",
				type:"post",
				data:{func_name:functionname,parameter:<?php echo $_SESSION["userid"] ?>},
				datatype:"html",
				success:function(response){
					$("#content").html(response);
				}
			});
		});	
	</script>
		





</body>			