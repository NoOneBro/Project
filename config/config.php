<?php

session_start();

	$siteurl = 'http://'.$_SERVER['HTTP_HOST'].'/Project';
	// $siteTitle = 'www.myProject.com | welcome to My Project';

	// Database Connection

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'skit_db';


	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$conn) {
		echo "Database Connection Error";
	}










































?>