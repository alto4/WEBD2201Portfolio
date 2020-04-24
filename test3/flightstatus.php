<?php

// Header Variable Declarations
$title = "Test #3: Flight Status Records";
$file = "test3.php";
$description = "Test #3 is captured in this page.";
$date = "April 15, 2020";
$banner = "Test #3: Flight Status Records";
include '../header.php';

?>

<div class="container">

    <!-- setup the table -->
    <table border="1" width="75%">
        <tr><th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Start</th><th>Destination</th><th>Airline</th><th>Reservation Date</th></tr>

    <?php
    $output = ""; //Set up a variable to store the output of the loop 
    //connect
    $conn = pg_connect("host=127.0.0.1 dbname=altons_db user=altons password=Toronto4");  
  
    //issue the query
    $sql = "SELECT reservation_id, name, age, gender, start_city, destination_city, airline, reservation_date
		FROM finaltest";
        $result = pg_query($conn, $sql);
        $records = pg_num_rows($result);

    //table
    for($i = 0; $i < $records; $i++){  
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "reservation_id")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "age")."</td>";
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "gender")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "start_city")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "destination_city")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "airline")."</td>"; 
        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "reservation_date")."</td>"; 
    }

        echo $output;
    ?>
    </table>

</div>

<?php 
	include '../footer.php'; 
?>