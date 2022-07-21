<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "rfid";

    $conn = mysqli_connect($hostname,$username,$password,$database);
	if(!$conn)
	{
		die();
	}	

?>