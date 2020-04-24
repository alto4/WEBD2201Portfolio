<?php 
		$title = "Lab #4: Using Logical Operators";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates tests to determine a temperature level based on multiple conditions using AND and OR operators.</p>
    
    <table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>&#124;&#124;</td>
            <td> if (($degrees > 100) &#124;&#124; ($hot == "yes"))</td>
            <td>The OR logical operator compares multiple statements in a logical test, and if any of them are met/return true, the whole test will be determined as being true. This means that only one condition needs to be met to return true.</td>
        </tr>
        <tr>
            <td>&amp;&amp;</td>
            <td> if (($degrees > 100) &amp;&amp; ($hot == "yes"))</td>
            <td>The AND logical operator compares multiple statements in a logical test, and if all of them are met/return true, the test will be determined as being true. This means that every condition needs to be met to return true.</td>
		</tr>
    </table>
    
    <?php            
        $degrees = "95";
        $hot = "yes";

        // Test 1
        if (($degrees > 100) || ($hot == "yes")) {
            echo "<p>TEST 1: It's <strong>really</strong> hot!</p>";
        } else {
            echo "<p>TEST 1: It's bearable.</p>";
        }

        // Test 2
        if (($degrees > 100) && ($hot == "yes")) {
            echo "<p>TEST 2: It's <strong>really</strong> hot!</p>";
        } else {
            echo "<p>TEST 2: It's bearable.</p>";
        }
    ?>
</div>

<?php include '../footer.php'; ?>


