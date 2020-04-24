<?php 
		$title = "Lab #5: Basic PHP Scripting";
		$file = "lab5.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: Basic PHP Scripting";	
		include '../header.php';
?>


<?php 
// Get Method - sends data in URL
// Post Method - sends data in a more secure manner, similar to an envelope protecting inner form concents

// Variable Declarations
$start = "";
$stop = "";
$incr = "";
$error = "";
$output = "";    

if(isset($_POST['increment'])){
    echo htmlentities($_POST['increment']);
}

// Filter numeric entries only
if(filter_var($incr, FILTER_VALIDATE_INT)){
    echo $incr .= " is a number";
} else {
    echo $incr .= " is NOT a number. Please try again.";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <label>Starting Temperature: </label>
    <input type="text" name="startingTemp" />
    <br/><label>Ending Temperature: </label>
    <input type="text" name="endingTemp" />
    <br/><label>Temperature Increment: </label>
    <input type="text" name="increment" />
	<br/><input type="submit" value="Submit" />
</form>

<?php include '../footer.php'; ?>