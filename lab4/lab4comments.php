<?php 
		$title = "Lab #4: Comments";
		$file = "lab4.php";
		$description = "Part of Lab #4 is captured in this page, and demonstrates the use of comments in PHP.";
		$date = "February 17, 2020";
		$banner = "Lab #4: PHP Chapter Files from Textbook";	
		include '../header.php';
?>

<div class="container">
	<p>This page demonstrates the use of comments in PHP. You can view these comments by inspecting the source contents using the Chrome Developer Tools.</p>

	<table>
        <tr>
            <th>Element Introduced</th>
            <th>Example</th>
            <th>Explanation</th>
        </tr>
        <tr>
            <td>// </td>
            <td>// Collect user name</td>
            <td>This is a simple PHP comment.</td>
        </tr>
        <tr>
            <td>/* This is a multiline comment.*/</td>
            <td>/* A multiline comment */</td>
            <td>This is a C-style, multiline comment. You can make this as long as you'd like. </td>
        </tr>
    </table>
    <!-- This is an HTML comment. -->

    <?php
       // This is a simple PHP comment.
    	/* This is a C-style, multiline comment. You can make this as long as you'd like. */
		
	?>
</div>

<?php include '../footer.php'; ?>

<!-- This is an HTML comment. -->
<?php 
// This is a simple PHP comment.
/* This is a C-style, multiline comment. You can make this as long as you'd like. */
?>
