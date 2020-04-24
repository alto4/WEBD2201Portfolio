<?php 
		$title = "Lab #5: Calculate";
		$file = "calculate.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: Calculate";	
		include '../header.php';
?>

<div class="container">
	<p>Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook</p>
</div>

<?php 
if (($_POST[val1] =="") || ($_POST[val2] == "") || ($_POST[calculate] == "")){
	header("Location: lab5calculate_form.php");
	exit;
}

if ($_POST[calc] == "add") {
	$result = $_POST[val1] + $_POST[val2];
} else if ($_POST[calc] == "subtract") {
	$result = $_POST[val1] - $_POST[val2];
} else if ($_POST[calc] == "multiply") {
	$result = $_POST[val1] * $_POST[val2];
} else if ($_POST[calc] == "divide"){
	$result = $_POST[val1] / $_POST[val2];
}
?>

<p>The result of the calculation is: <?php echo "$result"; ?></p>
<?php include '../footer.php'; ?>