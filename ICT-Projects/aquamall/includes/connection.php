<?php
include 'config.php';
$conn = mysqli_connect(DBSERVER,DBUSER,DBPASSWORD,DBNAME);
	// check the connection
	if (!$conn) {
		die("cannot connect to server");
	}