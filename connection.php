<?php 
$user="root";
$pass="";
$server="localhost";
$db="bussiness";

$con = new MySQLi($server, $user, $pass, $db);
	
	if($con->connect_error)
		echo "Error: ".$con->connect_error;



?>