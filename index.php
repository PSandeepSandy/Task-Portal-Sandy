<?php
	session_start();
	require "conn.php";
?>

<!DOCTYPE html>

<html lang = "en">

<head>
	<meta charset = "UTF-8">
	<title>Task-Portal</title>
	<link rel="stylesheet" type="text/css" src="styles.css">
</head>

<body>
	<div id="container">
		<form class="login-port" action="index.php" method = "POST">
			<table id="login" cellspacing="20">
				<h1>Welcome !</h1>
				<p>Login in order to proceed</p>
				
				<tr>
					<td>Username</td>
					<td width="100%"><input class="credentials" type="text" name="username" value="" placeholder ="Type Your Username" required></input></td>					
				</tr>	

				<tr>
					<td>Password</td>
					<td width="100%"><input class="credentials" type="password" name="password" value="" placeholder="Type Your Password" required></input></td>  
				</tr>		

			</table>
			
			<input id="login_btn" type="submit" name="login" value="Login"></input>
		</form>
	</div>		

	<?php
		if(isset($_POST["login"])){
			$username=$_POST["username"];
			$password=$_POST["password"];

			$stmt = $pdo->prepare("select * from users WHERE user_name=? AND user_pass=?");
			$stmt->execute([$username,$password]);
			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$_SESSION["username"]=$username;
				$_SESSION["usertype"]=$row["type"];
				$_SESSION["userid"]=$row["user_id"];
				$_SESSION["fullname"]=$row["fullname"];
				if($_SESSION["usertype"]==s){
					header('location:stud-homepage.php');
				}else{
					header('location:prof-homepage.php');
				}
			}
			else{
				echo "Invalid Credentials. Please try again...";
			}

		}

	?>

</body>


