<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="../css/webd2201.css" /> 
	<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"/>
	<title>WEBD2201 - <?php echo $title; ?></title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
	<!--
		Author: Scott Alton
		Filename: <?php echo $file . "\n"; ?>
		Date: <?php echo $date . "\n"; ?>
		Description: <?php echo $description . "\n"; ?>
	-->

	<?php
		require("../includes/functions.php");
		ob_start();
	?>

</head>
<body>
<div id="container">
	<!--Header-->
    <div id="header">
				<img src="images/logo.png" class="logo" alt="A logo displaying a guitar and the initials S.A."/>
				<h1 class="title"><?php echo $title; ?></h1>
	<div id="sites">
		<ul>
			<li><a href="http://opentech.durhamcollege.org/pufferd/webd2201/">WEBD2201</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>			
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>
			
		</ul>
	</div>
</div>
	<div id="content-container">
		<div id="navigation">
			<h3>
				Local Navigation Bar
			</h3>
			<ul >
				<li><a href="../index.php">WEBD2201 Home Page</a></li>
				<li><a href="../lab1/lab1.php">Lab 1: Basic XHTML pages</a></li>
				<li><a href="../lab2/lab2.php">Lab 2: Working with HTML Tables</a></li>
				<li><a href="../lab3/lab3.php">Lab 3: Formatting and Layout with Styles</a></li>
				<li><a href="../lab4/lab4.php">Lab 4: PHP Chapter Files from textbook</a></li>
				<li><a href="../lab5/lab5.php">Lab 5: Basic PHP Scripting</a></li>
				<li><a href="../lab6/lab6.php">Lab 6: Self-Referring Forms</a></li>
				<li><a href="../lab7/lab7.php">Lab 7 and 8: Database Intro</a></li>
				<li><a href="../lab9/lab9.php">Lab 9: User Login</a></li>
				<li><a href="../lab10/lab10.php">Lab 10: User Registration</a></li>
				<li><a href="../test1/test1.html">Test #1: Basic HTML and CSS</a></li>
				<li><a href="../test2/test2.php">Test #2: PHP Fundamentals</a></li>
				<li><a href="../test3/test3.php">Test #3: Final Test</a></li>


			</ul>
		</div>
		<div id="content">
		<!-- start of main page content. --> 