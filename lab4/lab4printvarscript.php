<?php 
		$title = "Lab #4: PHP Variables and Value Types";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates different variable types used in PHP programming, and outputs them in the page's body as text.</p>
    
    <table>
        <tr>
            <th>Data Type Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>Integer</td>
            <td>$intVar = "9554215464"</td>
            <td>An integer is a whole number (aka has no decimal points).</td>
        </tr>
        <tr>
            <td>Float</td>
            <td>$floatVar = "1542.2232235"</td>
            <td>A float is a number with decimal points.</td>
        </tr>
        <tr>
            <td>String</td>
            <td>$stringVar = "This is a string.";</td>
            <td>A string represents a series a letter and numeric characters.</td>
		</tr>
	</table>
    <?php                    
        // Variable declarations
        $intVar = "9554215464";
        $floatVar = "1542.2232235";
        $stringVar = "This is a string.";

        // Echo each variable 
        echo "<p>integer: $intVar</p>";
        echo "<p>float: $floatVar</p>";
        echo "<p>string: $stringVar</p>";
    ?>
</div>
<?php include '../footer.php'; ?>



