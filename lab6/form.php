<?php

// Header Variable Declarations
$title = "Lab #6: Self-Referring Forms";
$file = "lab6.php";
$description = "Lab #6 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
$date = "March 11, 2020";
$banner = "Lab #6: Self-Referring Forms";	
include '../header.php';

// Define constant that provides the maximum number of iterations in upcoming loop, based on user input
define("MAX_ITERATIONS", 100);

// Form Variable Declarations
$start = "";
$stop = "";
$incr = "";
$error = "";
$output = "";

if($_SERVER["REQUEST_METHOD"] == "GET"){
	// Default page load - initializes variables
	$output = "";
	$error = "";
} else if ($_SERVER["REQUEST_METHOD"] == "POST"){
	// The form submission went through - proceed to validation and then processing
	$start = trim($_POST["startingTemp"]); 
	$stop = trim($_POST["endingTemp"]); 
	$incr = trim($_POST["increment"]); 

	// Data Validation 

	// Verify that all fields were entered
	if((!isset($start)) || (!isset($stop)) || (!isset($incr))){
		// Display an error message if any of the three fields were not completed before submission
		$error .= "You must enter something into the text box.";
	// Verify that all fields contain only numeric data 
	} else if ((!is_numeric($start)) || (!is_numeric($stop)) || (!is_numeric($incr))){
		// Display an error message if any of the three fields contain non-numeric data
		$error .= "The value entered MUST be a numeric value.";
	// Verify that the starting temperature is less than the end temperature
	} else if ($start > $stop) {
		// Display an error message requiring the starting temperature to be less than the ending temperature
		$error .= "The starting temperature MUST be less than the ending temperature.";
	// Verify that increment is the a positive integer > 0
	} else if ($incr <= 0) {
		// Displan an error message requiring the increment to be a value greater than 0
		$error .= "The temperature increment MUST be greater than 0 for the calculation to proceed.";
	// Verify that there will not be more than MAX_ITERATIONS number of loops, based on the conditions set by the user
	} else if ((($stop - $start)/$incr) >= MAX_ITERATIONS) {
		// Display an error message requiring a new set of conditions to ensure less than 100 iterations are neccessary 
		// to calculate entire range
		$error .= "These conditions will result in too many rows of data, as only up to 100 are allowed. Please try again with a higher increment, or a lower ending temperature. ";
	}
?>



<?php
	// If no errors were present, proceed with data processing and output
	if($error == "") {  
		// Process the data by calling the ConvertToFarenheight function
		echo "
		<table>
			<tr>
				<th>Celcius</th>
				<th>Farenheight</th>
			</tr>
		";
		
		for($tempCelsius = $start; $tempCelsius <= $stop; $tempCelsius+=$incr){
			$tempFarenheight = convertToFarenheight($tempCelsius);
			echo "
				<tr>
					<td>$tempCelsius&deg;</td>
					<td>$tempFarenheight&deg;</td>
				</tr>
				";
		};
		
		echo "</table>";

		
	// If errors were present, prompt user to enter new input
	} else {
		$error .= "<br/>Please try again with new data, or by fixing these errors.";
	}
	
}
?>

<div class="container">
	<p>Lab #6 is captured in this page and, using the course textbook as a reference, demonstrates the use of self-referring form techniques and data input validation in PHP.</p>
	
	<!-- Output Messages - results or error messages stored as variables -->
    <h2><?php echo $output; ?></h2>
    <h3><?php echo $error; ?></h3>

    <!-- Form -->
	<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" >
		<br/><label>Starting Temperature: </label><input type="text" name="startingTemp" value="<?php echo $start; ?>" size="10"/>
        <br/><label>Ending Temperature: </label><input type="text" name="endingTemp" value="<?php echo $stop; ?>" size="10"/>
		<br/><label>Temperature Increment: </label><input type="text" name="increment" value="<?php echo $incr; ?>" size="10"/>
        <br/><input type="submit" value="Submit" />
    </form>

</div>

<?php 
		function convertToFarenheight($tempCelsius) {
			$tempFarenheight = 9/5 * $tempCelsius + 32;
			return $tempFarenheight;
		}
?>
<?php 
	include '../footer.php'; 
?>