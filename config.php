<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Sparks_Foundation_Bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to error --> ".mysqli_connect_error());
	}

?>
