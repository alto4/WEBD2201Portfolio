<?php 
		$title = "Lab #5: User Agent";
		$file = "lab5useragent.php";
		$description = "Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook";
		$date = "March 2, 2020";
		$banner = "Lab #5: User Agent";	
		include '../header.php';
?>

<div class="container">
	<p>Lab #5 is captured in this page, and acts demonstrates the use of basic PHP scripting skills used to create a temperature converter, as described in Chapter 6 of our course textbook</p>

	<?php
		$agent = getenv("HTTP_USER_AGENT");
		echo "You are using $agent.";
	?>
	
</div>
<?php include '../footer.php'; ?>