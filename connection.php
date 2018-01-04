<?php

function Connect()
{
	$servername = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "ramkiran13";
	


	$conn = new mysqli($servername, $dbuser, $dbpass);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	

	return $conn;
}

?>