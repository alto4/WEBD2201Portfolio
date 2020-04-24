<?php

// Header Variable Declarations
$title = "Lab #7: Database Intro";
$file = "lab7.php";
$description = "Lab #7 is captured in this page and, using the course textbook as a reference, demonstrates the basic use of PHP and PostGresSQL to pull data from a database using various PHP functions.";
$date = "March 17, 2020";
$banner = "Lab #7: Database Intro";	
include '../header.php';

?>

<div class="container">
	<p>Lab #7 is captured in this page and, using the course textbook as a reference, demonstrates the basic use of PHP and PostGresSQL to pull data from a database using various PHP functions.</p>
	
    <ul class="page-links">
		    <li><a href="lab7_bond_info.php">Bond Info</a></li>
        <li><a href="lab7_auto_info.php">Auto Info</a></li>
        <li><a href="../sql/lab7_bond_movies.sql">Bond Movies</a></li>
        <li><a href="../sql/lab7_auto_records.sql">Auto Records</a></li>
	</ul>

</div>

<?php 
	include '../footer.php'; 
?>