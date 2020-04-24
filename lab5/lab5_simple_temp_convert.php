<?php 
		$title = "Lab #5: Simple Temperature Converter";
		$file = "lab5_simple_temperature_convert.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: Simple Temperature Converter";	
		include '../header.php';
		include 'lab5_function_temp_convert.php';
?>

<div class="container">
	<p>Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook</p>

	<table class="temperatures">
		<tr>
			<th>Celsius</th>
			<th>Farenheight</th>
		</tr>

		<?php
			for($tempCelsius = -40; $tempCelsius <= 100; $tempCelsius+=10){
				$tempFarenheight = convertToFarenheight($tempCelsius);
				echo "<tr>
						<td>$tempCelsius&deg;</td>
						<td>$tempFarenheight&deg;</td>
					  </tr>";
			} 		
		?>

	</table>	
</div>
<?php include '../footer.php'; ?>