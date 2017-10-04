<?php 
	
	$host = "localhost";
	$username = "externe";
	$password = "09WO03YE";
	$database = "ethik_services";
	
	$conn = mysql_connect($host, $username, $password);
	if (!$conn) {
    die('Connexion impossible : ' . mysql_error());
	}
	
	mysql_select_db($database, $conn);
	
?>