<?php 
		$title = "Lab #4: Comparison Operators";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page provides a variety of tests to determine the truthiness of different values in relation to each other - in this case the relationship between variable $a and variable $b.</p>
    
    <table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>if...else statement</td>
            <td>if(condition)<br /> {if statement is true, do this} <br />else <br /> {do this if the condition is not met} </td>
            <td>A basic logical statement used for selecting a path based on whether or not a logical/comparison operation returns true or false.</td>
        </tr>
    </table>

    <?php      
        $a = 21;
        $b = 15;
        echo "<p>Original value of \$a is $a and \$b is $b</p>";

        // Test 1
        if ($a == $b) {
            echo "<P>TEST 1: \$a equals \$b</p>";
        } else {
            echo "<p>TEST 1: \$a is not equal to \$b</p>";
        }

        // Test 2
        if($a != $b) {
            echo "<p>TEST 2: \$a is not equal to \$b</p>";
        } else {
            echo "<p>TEST 2: \$a is equal to \$b</p>";
        }

        // Test 3
        if($a > $b) {
            echo "<p>TEST 3: \$a is greater than \$b</p>";
        } else {
            echo "<p>TEST 3: \$a is not greater than \$b</p>";
        }

        // Test 4
        if($a < $b) {
            echo "<p>TEST 4: \$a is less than \$b</p>";
        } else {
            echo "<p>TEST 4: \$a is not less than \$b</p>";
        }

        // Test 5
        if($a >= $b) {
            echo "<p>TEST 5: \$a is greater than or equal to \$b</p>";
        } else {
            echo "<p>TEST 5: \$a is not greater than or equal to \$b</p>";
        }

        // Test 6
        if($a <= $b) {
            echo "<p>TEST 6: \$a is less than or equal to \$b</p>";
        } else {
            echo "<p>TEST 6: \$a is not less than or equal to \$b</p>";
        }
    ?>
</div>

<?php include '../footer.php'; ?>
