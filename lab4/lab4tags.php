<?php 
		$title = "Lab #4: PHP Start and End Tags";
		$file = "lab4.php";
		$description = "Lab #4 is captured in this page, and acts as a link to various PHP examples from our course textbook that render HTML is the browser using PHP variables and include statements.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates three different tags that will render PHP statements.</p>

    <table>
        <tr>
            <th>Opening Tag</th>
            <th>Closing Tag</th>
            <th>Notes</th>
        </tr>
        <tr>
            <td>&lt;?php</td>
            <td>?&gt;</td>
            <td>This type of PHP tag IS supported on the OpenTech Server used for this course.</td>
        </tr>
        <tr>
            <td>&lt;?</td>
            <td>?&gt;</td>
            <td>This type of PHP tag IS NOT supported on the OpenTech Server used for this course.</td>
        </tr>
        <tr>
            <td>&lt;script language="php"&gt;</td>
            <td>N/A</td>
            <td>This type of PHP tag IS NOT supported on the OpenTech Server used for this course.</td>
		</tr>
    </table>
    
    <?php                             
        echo "<p>This is a test using the first tag type.</p>";
    ?>
</div>

<?php include '../footer.php'; ?>




