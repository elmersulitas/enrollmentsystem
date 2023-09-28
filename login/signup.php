<?php
	session_start();

		include("connection.php");
		include("connection.php");
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{	
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			if(!empty($user) && !empty($pass) && !is_numeric($user))
			{
				$query = "insert into login (user, pass) value ('$user', '$pass')";
				mysqli_query($con, $query);
				header("location: login.php");
				die;
			}else
			{
				echo " please enter some valid information! ";
			}
		}


?>

<!DOCTYPE html>
<html>
<head>
	
	<title>signin</title>
</head>
<body>
	<style type="text/css">
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 80%;
		}

		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}
		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
		}
	</style>
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">SignUP</div>
			<input id="text" type="text" name="user"><br><br>
			<input id="text" type="password" name="pass"><br><br>
			<input id="button" type="submit" name="Login"><br><br>
			<a href="signup.php">Sign Up</a>

</body>
</html>