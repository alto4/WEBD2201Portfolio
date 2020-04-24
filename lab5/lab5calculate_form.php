<?php 
		$title = "Lab #5: Calculate Form";
		$file = "calculate_form.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: Calculate Form";	
		include '../header.php';
?>

<div class="container">
	<p>Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook</p>

	<form method="post" action="lab5calculate.php">
		<p>Value 1: <input type="text" name="val1"/></p>
		<p>Value 2: <input type="text" name="val2"/></p>
		
		<p>Calculation: <br/><br/>
			<input type="radio" name="calc" value="add"/> add<br/>
			<input type="radio" name="calc" value="subtract"/> subtract<br/>
			<input type="radio" name="calc" value=""/> multiply<br/>
			<input type="radio" name="calc" value=""/> divide<br/>
		</p>
		<p><input type="submit" name="submit" value="Calculate"/></p>

		<p>View the results of the calculation by clicking <a href="lab5calculate.php">here</a></p>

	</form>
	
</div>
<?php include '../footer.php'; ?>