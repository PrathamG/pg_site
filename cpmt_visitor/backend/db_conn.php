<?php
	//db_conn.php
	//File contains script to connect to DB. $mydb is the mysqli object.
	header('Content-Type: text/html; charset=utf-8');
    $server = '';
	$user = '';
    $password = "DkP0ttqCQBN7t";
	$dbname = 'epiz_25595508_db1';

	$mydb = new mysqli($server, $user, $password, $dbname);

	if($mydb->connect_error)
	{
		die("Connection failed: " . $mydb->connect_error);
	}

	$mydb->set_charset("utf8mb4");

	if(!isset($_SESSION['location'])) //Set DB time zone according to user location
	{
		date_default_timezone_set('Asia/Hong_Kong');
	}
	elseif($_SESSION['location'] == 1)
	{
		date_default_timezone_set('Asia/Hong_Kong');
	}
	elseif($_SESSION['location'] == 2)
	{
		date_default_timezone_set('Asia/Taipei');
	}
	elseif($_SESSION['location'] == 3)
	{
		date_default_timezone_set('Asia/Kuala_Lumpur');
	}
	elseif($_SESSION['location'] == 4)
	{
		date_default_timezone_set('Asia/Singapore');
	}
	
?>


