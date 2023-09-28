<?php
	session_start();

		include("connection.php");
		include("connection.php");




?>


<!DOCTYPE html>
<html>
<head>
	
	<title>LOGIN</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<input id="text" type="text" name="user"> <br><br>
			<input id="text" type="password" name="pass"> <br><br>
			<input id="button" type="submit" name="Login"><br><br>
			<a href="signup.php">Sign Up</a>

</body>
</html>