<?php 
		$title = "Lab #4: PHP Chapter Files from Textbook";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page provides links to a variety of different topics covered in Chapter 4 and Chapter 5 from our course textbook.</p>

	<ol class="text-example-links">
		<li><a href="lab4tags.php">PHP Start and End Tags (Chapter 4) </a></li>
		<li><a href="lab4codecohabitation.php">Code Cohabitation (Chapter 4) </a></li>
		<li><a href="lab4errorscript2.php">Escaping Your Code (Chapter 4)</a></li>
		<li><a href="lab4comments.php">Commenting Your Code (Chapter 4) </a></li>
		<li><a href="lab4printvarscript.php">PHP Variables and Value Types (Chapter 4) </a></li>
		<li><a href="lab4constants.php">Using Constants (Chapter 5)</a></li>
		<li><a href="lab4constants2.php">Using Constants - Part 2 (Chapter 5)</a></li>
		<li><a href="lab4assignscript.php">Assignment Operators (Chapter 5)</a></li>
		<li><a href="lab4arithmeticscript.php">Arithmetic Operators (Chapter 5)</a></li>
		<li><a href="lab4comparisonscript.php">Comparison Operators (Chapter 5)</a></li>
		<li><a href="lab4logicalscript.php">Logical Operators (Chapter 5) </a></li>		
		<li><a href="lab4errorscript.php">Making an Error - Part 1 (Chapter 4)</a></li>
	</ol>
</div>
<?php include '../footer.php'; ?>