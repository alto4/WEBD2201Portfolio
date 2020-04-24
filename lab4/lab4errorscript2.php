<?php 
		$title = "Lab #4: Escaping Your Code";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates the use of escape characters to produce the desired output.</p>
	
	<table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>\</td>
            <td> echo "I think this is really \"cool\"!"</td>
            <td>The escape character is useful when you want certain characters, in this case the double quotation marks, to appear in an echo statement without being interpreted as part of the echo statement..</td>
		</tr>
	</table>
	
	<?php      
        echo "<p>I think this is really \"cool\"!</p>";
    ?>
</div>

<?php include '../footer.php'; ?>
