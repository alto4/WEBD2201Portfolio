<?php

// Header Variable Declarations
$title = "Lab #7: Bond Movies";
$file = "lab7_bond_info.php";
$description = "Lab #7 is captured in this page and, using the course textbook as a reference, demonstrates the basic use of PHP and PostGresSQL to pull data from a database using various PHP functions. This shows the retrieving of all James Bond movies from a PostgresSQL database. ";
$date = "March 17, 2020";
$banner = "Lab #7: Database Intro";	
include '../header.php';

?>

<div class="container">
	<p>Lab #7 is captured in this page and, using the course textbook as a reference, demonstrates the basic use of PHP and PostGresSQL to pull data from a database using various PHP functions.</p>
	
    
    <p>
    This page utilizes several postgreSQL method calls. such as pg_connect(),
    pg_query(), and pg_fetch_result() to fetch data from a table documenting the various actors who portray James Bond, as well as an archive of all James Bond films that have been released to date. 
    </p>
    <!-- setup the table -->
    <table border="1" width="75%">
        <tr><th>Movie</th><th>Year</th><th>Actor</th></tr>

    <?php
    $output = ""; //Set up a variable to store the output of the loop 
    //connect
    $conn = pg_connect("host=127.0.0.1 dbname=altons_db user=altons password=100762638" );  
    //N.B. replace the YOUR variables with your specific information
    //NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead

    //issue the query
    $sql = "SELECT movies.title, movies.year, actors.name
                FROM movies, actors
                WHERE movies.actor=actors.id
                ORDER BY movies.year ASC";
        $result = pg_query($conn, $sql);
        $records = pg_num_rows($result);

    //generate the table
        for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
            $output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
            $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
            $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>\n\t</tr>"; 
        }

        echo $output; //display the output
    ?>
    </table>
 </div>

<?php 
	include '../footer.php'; 
?>