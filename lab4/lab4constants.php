<?php 
		$title = "Lab #4: Using Constants - Part 1";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">	
	<p>This page demonstrates the declaration of a constant that is outputted in the body.</p>
	
	<table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>Constant</td>
            <td>define("MYCONSTANT", "This is a test of defining constants.");</td>
            <td>The constant represents a value that will not be altered throughout the program, and remains the same throughout. Below this table you may see this constant being echoed in an output statement.</td>
        </tr>
	</table>
	<?php      
        define("MYCONSTANT", "This is a test of defining constants.");
        echo MYCONSTANT;
    ?>
</div>

<?php include '../footer.php'; ?>