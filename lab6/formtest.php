<?php

$title = "Lab #6: Self-Referring Forms";
$file = "lab6.php";
$description = "Lab #6 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
$date = "March 11, 2020";
$banner = "Lab #6: Self-Referring Forms";	
include '../header.php';

// Variable Declarations
$start = "";
$stop = "";
$incr = "";
$error = "";
$output = "";       

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = validate_form_input($POST["startingTemp"]);
    $stop = validate_form_input($POST["endingTemp"]);
    $incr = validate_form_input($POST["increment"]);
};

function validate_form_input($input) {
    if(empty($_POST["$input"])){
        $error = "This field is required.";
        return $error;
    }
    
    
    
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
//NOTE: 
//the first two echos below show the errors or the result (these are empty the first time the page loads)
//the third of the following echo'es makes this page self-referring
//the name of the current file is outputted placed in the action of the form
//and the fourth of the following echo'es is what makes the form sticky, the
//number previously entered on the form, is automatically displayed in the value of the text input box
?>
<h2><?php echo $result; ?></h2>
<h3><?php echo $error; ?></h3>

<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" >
    <label>Starting Temperature: </label><input type="text" name="startingTemp" />
    <br/><label>Ending Temperature: </label><input type="text" name="endingTemp" />
    <br/><label>Temperature Increment: </label><input type="text" name="increment" />
	<br/><input type="submit" value="Submit" />
</form>

<?php
	include "../footer.php";
?>