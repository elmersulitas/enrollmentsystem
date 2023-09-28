<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "enrollment_system";


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
	die("failed to connect!");
}




