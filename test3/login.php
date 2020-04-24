<?php

// Header Variable Declarations
$title = "Test #3: Login Form";
$file = "test3.php";
$description = "Test #3 is captured in this page.";
$date = "April 15, 2020";
$banner = "Test #3: Login Form";	
include '../header.php';

?>

<div class="container">
	<p>Test #3 is captured in this page and demonstrates basic skills in HTML, PHP, and CSS to create a basic reservation login system.</p>    

	<!-- Login Form -->
    <div id="form">

    <?php 
    
    // 
     
    if($_SERVER["REQUEST_METHOD"]=="GET" || isset($_POST['rest']))
    {
        $id = "";
        $password = "";
        $output = "Please login below.";
    }
    // 
    else if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id = trim($_POST["id"]);
        $password = $_POST["password"];
        $output = "";

        // Function to connect to the database 
        $conn = db_connect();
        
        // Validate user id 
        if(!isset($id) || $id == "")
        {
            $output .= "Please enter a User ID</br>";
        };

        // Verify that user password was entered, and if not, display an error message
        if(!isset($password) || $password == "")
        {
            $output .= "You must enter your password to login</br>";
        };

        // Query the database after both fields are validated
        if($output == "")
        {
            // Query the database
            $sql = "SELECT * FROM Login WHERE id ='$id'";
            $result = pg_query($conn, $sql);
            $records = pg_num_rows($result);

            // Match entered id against ids that exist in the database - suppress warning message that pg_fetch_result will return if 0 rows found in query
            if(@pg_fetch_result($result, 0, "id") <> "" )
            {
                // Check entered password against the password associated with the entered id that exists in the database
                if( $password == pg_fetch_result($result, 0, "password"))
                {
                    // If id and password are authenticated, output a welcome message to the user with a brief summary of their account activity
                    $output .= "<h3>Welcome - you have successfully logged in!";

                    pg_query($conn, $sql);

                    // Clear are input from form fields
                    $password = "";
                }
                // output an error message if the password does not match
                else                 
                {
                    $output .= "The password you have entered is incorrect. Please try again.";
                    $password = "";
                }
            }

            // If the user id is not found in the database records, display an error message and clear form fields
            else
            {
                $output .= $id . " was not found in our records as a valid username. Please try again or register <a href='../lab10/lab10.php'>here</a>.";
                $id = "";
                $password = "";
            }
        }
    }
    
    // Display the results of the above authentication and valdiation tests
    echo "<h3>" . $output . "</h3>";

    ?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
        <table id="login-form">
        
            <tr>
                <td class="right" style="width: 25%;">User ID: </td>
                <td><input type="text" name="id" size="15" value="<?php echo $id; ?>"/></td>
            </tr>
            <tr>
                <td class="right" style="width: 25%;">Password: </td>
                <td><input type="password" name="password" size="15" value="<?php echo $password; ?>"/></td>
            </tr>
        </table>
    
        <button class="btn-login" type="submit" name="login" value="Login">Login</button>
        <button class="btn-reset" type="submit" name="reset" value="Reset">Reset</button>

    </form>
    
    </div>

</div>

<?php 
	include '../footer.php'; 
?>


<?php 
	include '../footer.php'; 
?>