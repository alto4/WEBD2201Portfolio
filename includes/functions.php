<?php
	/* 
		Title: PHP Functions
		Author: Scott Alton
		Filename: functions.php
		Date: April 5, 2020
		Description: PHP Functions are captured in this page that are reused in various instances accross the pages that are members of this site.";
	*/



	// Test that this required resource connects to the header.php file properly
	// echo "This is a test...of the PHP function connection.";


	// Define constants that will be used in validation of user registration info	
	define("MINIMUM_ID_LENGTH", 5);
	define("MAXIMUM_ID_LENGTH", 20);
	define("MINIMUM_PASSWORD_LENGTH", 6);
	define("MAXIMUM_PASSWORD_LENGTH", 15);
	define("MAX_FIRST_NAME_LENGTH", 20);
	define("MAX_LAST_NAME_LENGTH", 30);
	define("MAXIMUM_EMAIL_LENGTH", 255);

	 // Function 1: db_connect() 
	 function db_connect() {
		return pg_connect("host=127.0.0.1 dbname=altons_db user=altons password=100762638");
	}

	// Function 2: displayCopyrightInfo() 
	function displayCopyrightInfo() {
		$year = date('Y');
		echo "&copy; Scott Alton, $year";
	}

?>

