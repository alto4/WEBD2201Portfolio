<?php 
		$title = "Lab #4: Assignment Operators";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates the use of various assignment operators that alter the value stored in a declared variable.</p>

    <table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>=</td>
            <td>$origVar = 100</td>
            <td>The assignment operator assigns a value to a variable.</td>
        </tr><tr>
            <td>+=</td>
            <td>$origVar += 25;</td>
            <td>This adds the set value to the pre-existing value of the variable</td>
        </tr>
        
        <tr>
            <td>-=</td>
            <td>$a -= 12</td>
            <td>This subtracts the speicfied value from the variables assigned value.</td>
        </tr>
        <tr>
            <td>.=</td>
            <td>$origVar .= " chickens"</td>
            <td>This concatenates a string onto the assigned variable value.</td>
        </tr>
    </table>

    <?php
       $origVar = 100;
       echo "<p>Original value is $origVar</p>";
       $origVar += 25;
       echo "<p>Add a value, now it's $origVar</p>";
       $origVar -= 12;
       echo "<p>Subtracted a value, now it's $origVar</p>";
       $origVar .= " chickens";
       echo "<p>Final answer: $origVar</p>";
    ?>
</div>

<?php include '../footer.php'; ?>