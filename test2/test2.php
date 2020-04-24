<?php 
		$title = "Test #2: PHP Basics";
		$file = "test2.php";
		$description = "This is the practical component for Test #2, for partial completion of WEBD2201";
		$date = "March 25, 2020";
		$banner = "Test #2: PHP Basics";	
		include '../header.php';
?>

<div class="container">
	<p>Ths page will demonstrate 10 important PHP fundamental concepts and will also include a function that outputs a temperature conversion table, 
    converting Celsius to Farenheight.</p>

    <!-- 1. PHP Start and End Tags -->
    <h1>1.  Start and End Tags</h1>
    <table>
        <tr>
            <th>Opening Tag</th>
            <th>Closing Tag</th>
        </tr>
        <tr>
            <td>&lt;?php</td>
            <td>?&gt;</td>
        </tr>
        <tr>
            <td>&lt;?</td>
            <td>?&gt;</td>
       </tr>
        <tr>
            <td>&lt;script language="php"&gt;</td>
            <td>N/A</td>
    	</tr>
    </table>

    <!-- 2. Code Cohabitation -->
    <h1>2. Code Cohabitation</h1>
    <?php              
        echo "<p>If you view my source code, you will see that I am using PHP to <b>echo</b> this statement as an HTML paragraph! AKA 'Code Cohabitation'.</p>";
	?>

    <!-- 3. Escaping Code -->
    <h1>3. Escaping Code</h1>
    <p>Below an escape character is demonstrated using the backslah (\).</p>
    <?php      
        echo "<p>I am presenting an \"escape character\" in PHP. See source code for proof!</p>";
    ?>

    <!-- 4. Commenting Your Code -->
    <h1>4. Commenting Your Code</h1>
    <p>Below are several comments in PHP that you can check in the source code, using three different syntaxes.</p>
    <ul>
        <li>//</li>
        <li>/* */</li>
        <li>An HTML comment (which you will see in the source code!)</li>
    </ul>
   
	<!-- This is an HTML comment. -->

    <?php
       // This is a simple PHP comment.
        /* This is a C-style, multiline comment. You can make this as long as you'd like. */
		
	?>

    <!-- 5. Variables and Value Types/ 6. Constant -->
    <h1>5 & 6. Variable Types and Constant Declaration</h1>
    <p>Below is a simple demonstration of different variable types as well as the syntax to declare a constant using define().</p>
    <?php                    
        // Variable declarations
        $int = "42";
        $float = "4444.444444";
        $string = "String.";

        // Constant declaration     
        define("CONSTANT", "Look at me, I am a constant!");

        // Echo each variable
        echo "<p>integer: $int, float: $float, string: $string</p>";
        echo CONSTANT;
    ?>

    <!-- 7 & 8.  Assignment and Arithmetic Operators -->
    <h1>7 & 8.  Assignment and Arithmetic Operators</h1>
    <p>Below you will find various assignment and arithmetic operators used in PHP.</p>
 
    <?php
        $val = 1;
        echo "<p>Original number is $val</p>";
        $val += 1;
        echo "<p>Add 1 to it, amd now it's $val</p>";
        $val -= 1;
        echo "<p>Subtract 1 from it and we're back to $val</p>";
        $val .= " of something!";
        echo "<p>After concatenating a string to it, we are left with $val</p>";
       
        $num1 = 1;
        $num2 = 2;

        $answer = $num1 + $num2;
        echo "<p>\$num1 and \$num2 equals $answer</p>";

        $answer = $num1 - $num2;
        echo "<p>\$num1 subtract \$num2 equals $answer</p>";

        $answer = $num1 * $num2;
        echo "<p>\$num1 times \$num2 equals $answer</p>";

        $answer = $num1 / $num2;
        echo "<p>\$num1 divided by \$num2 equals $answer</p>";

        $answer = $num1 % $num2;
        echo "<p>\$num1 mod \$num2 equals $answer</p>";
      
      ?>

      <!-- 9. Comparison Operators -->
    <h1>9. Comparison Operators</h1>
    <p>Below you will find various comparison operators.</p>

    <?php
    $num1 = 1;
    $num2 = 2;

    if ($num1 != $num2) {
            echo "<p>These are not the same</p>";
    } else if ($num1 != $num2) {
            echo "<p>These are not the same</p>";
    } else if ($num1 >= $num2) {
            echo "<p>The first number is greater than or equal to the second number</p>";
    } else if ($num1 <= $num2) {
            echo "<p>The first number is greater than or equal to the second number</p>";
    } else if ($num1 > $num2) {
        echo "<p>The first number is greater than the second number</p>";
    } else if ($num1 < $num2) {
        echo "<p>The first number is less than the second number</p>";
}  
    ?>

    <!-- 10. Logical Operators -->
    <h1>10. Logical Operators</h1>
    <p>Below you see the use of the &&(AND) and ||(OR) logical operators.</p>

    <?php            
        $temp = "99";
        $fever = "no";

        if (($temp >= 100) || ($fever == "yes")) {
            echo "<p>You may be sick! Get some rest.</p>";
        } else {
            echo "<p>You seem healthy - keep it that way!</p>";
        }

        if (($temp > 100) && ($fever == "yes")) {
            echo "<p>You should really see a doctor!</p>";
        } else {
            echo "<p>Stay healthy!</p>";
        }
    ?>

    <hr />

    <!-- Part 2: Conversion Function -->
    <h1>Part 2: Conversion Function</h1>
    <p>Below you see the use of a temperature conversion function that outputs data in a table format, using a for loop.</p>

    <table class="temperatures">
		<tr>
			<th>Celcius</th>
			<th>Farenheight</th>
		</tr>

		<?php
			for($tempCelsius = 0; $tempCelsius <= 50; $tempCelsius+=10){
				$tempFarenheight = convertToFarenheight($tempCelsius);
				echo "<tr>
						<td>$tempCelsius&deg;</td>
						<td>$tempFarenheight&deg;</td>
					  </tr>";
			} 		
		?>

	</table>	
</div>

<?php 
		function convertToFarenheight($tempCelsius) {
			$tempFarenheight = 9/5 * $tempCelsius + 32;
			return $tempFarenheight;
		}
	?>

<?php include '../footer.php'; ?>
