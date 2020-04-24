<?php 
		$title = "Lab #4: Using Constants - Part 2";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates the use of constants to output information about the file and version of PHP being run. These constants are automatically set when running PHP.</p>
	
	<table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>__FILE__</td>
            <td>echo "This file is ".__FILE__;</td>
            <td>The file constant provides the files details.</td>
		</tr>
		<tr>
            <td>__LINE__</td>
            <td>echo "This is line number  ".__LINE__;</td>
            <td>The line constant provides the line number that it is placed on.</td>
		</tr>
		<tr>
            <td>.PHP_VERSION</td>
            <td> echo "I am using ".PHP_VERSION;</td>
            <td>The .PHP_VERSION constant provides the current version of PHP being used.</td>
		</tr>
		<tr>
            <td>.PHP_OS</td>
            <td> echo "This test is being run on ".PHP_OS;</td>
            <td>The .PHP_OS constant provides the current operating system that is being used.</td>
        </tr>
	</table>
	
	<?php      
        echo "<br/>This file is ".__FILE__;
        echo "<br/>This is line number ".__LINE__;
        echo "<br/>I am using ".PHP_VERSION;
        echo "<br/>This test is being run on ".PHP_OS;
    ?>
</div>

<?php include '../footer.php'; ?>