<?php 
		$title = "Lab #5: Function to Convert Temperatures";
		$file = "lab5_function_temp_convert.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: Function to Convert Temperatures";	
		include '../header.php';
?>

<div class="container">
	<p>Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook</p>
	
		$tempFarenheight = 9/5 * $tempCelsius + 32;
	<?php 
		function convertToFarenheight($tempCelsius) {
			$tempFarenheight = 9/5 * $tempCelsius + 32;
			return $tempFarenheight;
		}
	?>
	
</div>
<?php include '../footer.php'; ?>