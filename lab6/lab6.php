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
	// Verify starting temp has been entered
	if(!isset($start) || ($start=="")){
		$error .= "<br/>You must enter something into the starting temperature field. It is currently empty.";
	}
	// Verify ending temp has been entered
	if(!isset($stop) || ($stop=="")){
		$error .= "<br/>You must enter something into the ending temperature field. It is currently empty.";
	}
	// Verify starting temp has been entered
	if(!isset($incr) || ($incr=="")){
		$error .= "<br/>You must enter something into the temperature increment field. It is currently empty.";
	}

	// Verify that all fields contain only numeric data 
	// Verify starting temp is numeric
	if ((!is_numeric($start)) && (!($start==""))){
		// Display an error message if any of the three fields contain non-numeric data
		$error .= "<br/>The value entered for the starting temperature MUST be a numeric value. You entered \"$start\".";
		$start = "";
	}
	// Verify ending temp is numeric
	if ((!is_numeric($stop)) && (!($stop==""))){
		// Display an error message if any of the three fields contain non-numeric data
		$error .= "<br/>The value entered for the ending temperature MUST be a numeric value. You entered \"$stop\".";
		$stop = "";
	}
	// Verify temperature increment is numeric
	if ((!is_numeric($incr)) && (!($incr==""))){
		// Display an error message if any of the three fields contain non-numeric data
		$error .= "<br/>The value entered for the temperature increment MUST be a numeric value. You entered \"$incr\".";
		$incr = "";
	}

	// Verify that the starting temperature is less than the end temperature
	if (($start > $stop) && (is_numeric($stop)) && (is_numeric($stop))) {
		// Display an error message requiring the starting temperature to be less than the ending temperature
		$error .= "<br/>The starting temperature MUST be less than the ending temperature.";
	}  
	// Verify that increment is the a positive integer > 0
	if (($incr <= 0) && (is_numeric($incr))) {
		// Displan an error message requiring the increment to be a value greater than 0
		$error .= "<br/>The temperature increment MUST be greater than 0 for the calculation to proceed.";
	}
	// Verify that there will not be more than MAX_ITERATIONS number of loops, based on the conditions set by the user 
	if (((($stop - $start)/$incr) >= MAX_ITERATIONS)  && (is_numeric($start))  && (is_numeric($stop))  && (is_numeric($incr))) {
		// Display an error message requiring a new set of conditions to ensure less than 100 iterations are neccessary 
		// to calculate entire range
		$error .= "<br/>These conditions will result in too many rows of data, as only up to 100 are allowed. Please try again with a higher increment, or a lower ending temperature. ";
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
	<p>Lab #6 is captured in this page and demonstrates the use of self-referring form techniques and data input validation in PHP. This form is "sticky", meaning that even 
	when the page is reloaded, or not all validation checks are passed, the data placed in each field by the user will remain in place to improve user experience.</p>

	<p>Various 
	methods are used to perform these validations, including the isset(), trim(), and is_numeric() functions that are built into PHP, as well as range validation to ensure that 
	inputted data is logical to perform a temperature conversion. Once all validations are passed, a function will be called that will output the entered Celsius value, alongside 
	the converted Farenheight value, which are displayed in a table format.</p>

	<p>Various built-in PHP functions used for validation, and a brief description of each, are provided below: </p>
	<table>
		<tr>
			<th>Function</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>isset()</td>
			<td>This function verifies whether a field has been set with data or not.</td>	
		</tr>
		<tr>
			<td>is_numeric()</td>
			<td>This functions determines if a numeric entry has been entered in a given field.</td>	
		</tr>
		<tr>
			<td>trim()</td>
			<td>This function removes any white space at the beginning and end of a field. </td>	
		</tr>
		<tr>
			<td>define()</td>
			<td>This is the syntax used to define a constant in PHP.</td>
		</tr>
	</table>
	
	<div class="output-message">
		<!-- Output Messages - results or error messages stored as variables -->
		 <h3><?php echo $error; ?></h3>
		<div class="temp-table"><?php echo $output; ?></div>
	</div>
    <!-- Form -->
	<form class="input-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
	<div>	
	<h3>Temperature Converter Form</h3>
	<br/><label>Starting Temperature: </label><input type="text" name="startingTemp" value="<?php echo $start; ?>" size="10"/>
        <br/><label>Ending Temperature: </label><input type="text" name="endingTemp" value="<?php echo $stop; ?>" size="10"/>
	<br/><label>Temperature Increment: </label><input type="text" name="increment" value="<?php echo $incr; ?>" size="10"/>
        <br/><input type="submit" value="Submit" />
</div>
    </form>

</div>

<?php 
        
    function convertToFarenheight($tempCelsius) {
		$tempFarenheight = 9/5 * $tempCelsius + 32;
		return $tempFarenheight;
	}

	include '../footer.php'; 
?>