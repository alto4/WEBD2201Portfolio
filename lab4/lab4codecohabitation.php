<?php 
		$title = "Lab #4: Code Cohabitation";
		$file = "lab4codecohabitation.php";
		$description = "This page demonstrates the basic pairing of PHP and HTML tags that are used to create my first script.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This example demonstrates the ability to pass HTML elements, in this case a paragraph element, with the echo tag in PHP, which outputs a string.</p>
	<table>
        <tr>
            <th>Command Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>echo</td>
            <td> echo "<p><em>Hello World! I'm using PHP!</em></p>"</td>
            <td>Produces a new paragraph that is emphasized in italics using HTML tabs, using the echo command. The echo command is used to output string values.</td>
        </tr>
    </table>
	
	<?php              
        echo "<p><em>Hello World! I'm using PHP!</em></p>";
	?> 
</div>

<?php include '../footer.php'; ?>
