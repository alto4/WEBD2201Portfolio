<?php 
		$title = "Lab #5: Remote Address";
		$file = "lab5remoteaddress.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: Remote";	
		include '../header.php';
?>

<div class="container">
	<p>Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook</p>

	<?php
		$address = getenv("REMOTE_ADDR");
		echo "Your IP address is $address.";
	?>
	
</div>
<?php include '../footer.php'; ?>