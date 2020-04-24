<?php 
		$title = "Lab #4: Making An Error - Part 1";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates an attempt to make an error occur. Although it was an example in the textbook, this section was not accounted for in the Lab #4 Requirement Specifications, so I included at the end of the list.</p>
    <?php      
        echo "<p>I am trying to produce an error</p>";
        echo "<p>Was I successful?</p>";
    ?>
</div>

<?php include '../footer.php'; ?>

