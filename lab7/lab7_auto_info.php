<?php

// Header Variable Declarations
$title = "Lab #7: Automobiles";
$file = "lab7_bond_info.php";
$description = "Lab #7 is captured in this page and, using the course textbook as a reference, demonstrates the basic use of PHP and PostGresSQL to pull data from a database using various PHP functions. This shows the retrieving of all James Bond movies from a PostgresSQL database. ";
$date = "March 27, 2020";
$banner = "Lab #7: Automobiles";	
include '../header.php';

?>

<div class="container">
	<p>Lab #7 is captured in this page and, using the course textbook as a reference, demonstrates the basic use of PHP and PostGresSQL to pull data from a database using various PHP functions.</p>
	
    <p>
    This page utilizes several postgreSQL method calls, such as pg_connect(),
    pg_query(), and pg_fetch_result() to fetch data regarding automobile specifications from a table created using basic SQL commands.
    </p>
    <!-- setup the table -->
    <table border="1" width="75%">
        <tr><th>Make</th><th>Model</th><th>Year</th><th>MSRP</th></tr>

    <?php
    $output = ""; //Set up a variable to store the output of the loop 
    //connect
    $conn = pg_connect("host=127.0.0.1 dbname=altons_db user=altons password=100762638");  
    //N.B. replace the YOUR variables with your specific information
    //NOTE: "host=localhost..." SHOULD work, but there is a problem with the config on opentech, use 127.0.0.1 instead

    //issue the query
    $sql = "SELECT make, model, year, owner, msrp, purchase_date
		FROM automobiles
		ORDER BY msrp DESC";
        $result = pg_query($conn, $sql);
        $records = pg_num_rows($result);

    //generate the table
    for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
        $output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>";
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "msrp")."</td>\n</tr>";  
    }

        echo $output; //display the output
    ?>
    </table>
</div>

<?php 
	include '../footer.php'; 
?>