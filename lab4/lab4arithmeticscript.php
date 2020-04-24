<?php 
		$title = "Lab #4: Using Arithmetic Operators";
		$file = "lab4arithmeticscript.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements. Symbols used include the addition, subtraction, multiplication, division, and mdodulus operators, which here are used with variable values x and y.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates the use of various arithmetic operators that can be applied to variables to alter their values. Symbols used include the addition, subtraction, multiplication, division, and mdodulus operators, which here are used with variable values a and b.</p>

    <table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>+</td>
            <td>$a + $b</td>
            <td>Addition operator</td>
        </tr>
        <tr>
            <td>*</td>
            <td>$a * $b</td>
            <td>Multiplication operator</td>
        </tr>
        <tr>
            <td>/</td>
            <td>$a / $b</td>
            <td>Division operator</td>
        </tr>
        <tr>
            <td>%</td>
            <td>$a % $b</td>
            <td>Modulus operator</td>
        </tr>
    </table>
    <?php
        $a = 85;
        $b = 24;
        echo "<p>Original value of \$a is $a and \$b is $b</p>";

        $c = $a + $b;
        echo "<p>Added \$a and \$b and got $c</p>";

        $c = $a * $b;
        echo "<p>Multiplied \$a and \$b and got $c</p>";

        $c = $a / $b;
        echo "<p>Divided \$a and \$b and got $c</p>";

        $c = $a % $b;
        echo "The modulus of \$a and \$b is $c";
    ?>
</div>

<?php include '../footer.php'; ?>