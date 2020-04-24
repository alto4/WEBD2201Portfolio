<?php

// Header Variable Declarations
$title = "Lab #9: Database/PHP Lab - User Login";
$file = "lab9.php";
$description = "Lab #9 is captured in this page and demonstrates the use of PHP to match login information against a PostGresSQL database to check whether the user
 information is valid or inauthentic.";
$date = "April 1, 2020";
$banner = "Lab #8: 3-Tier Configuring Laptops to Run Apache, PHP and PostgreSQL";	
include '../header.php';

?>

<div class="container">
	<p>Lab #9 is captured in this page and demonstrates the use of PHP to match login information against a PostGresSQL database to check whether the user
 information is valid or inauthentic.</p>
	
    <!-- Login Form -->
    <div id="form">

    <?php 
    
    // When the page first loads or is reset, create empty variables that will attempt to collect user login and password that wil match with an entry in the database
     
    if($_SERVER["REQUEST_METHOD"]=="GET" || isset($_POST['rest']))
    {
        $id = "";
        $password = "";
        $output = "Please login below.";
    }
    // If the user has tried to login after the page first loads, compare entered password and id against the database 
    else if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id = trim($_POST["id"]);
        $password = $_POST["password"];
        $output = "";
        $date = "date(\"Y-m-d\", time())"; 

        // Save the function that connects to the database as a variable
        $conn = db_connect();
        
        // Verify that user id was entered, and if not, display an error message
        if(!isset($id) || $id == "")
        {
            $output .= "Please enter a User ID</br>";
        };

        // Verify that user password was entered, and if not, display an error message
        if(!isset($password) || $password == "")
        {
            $output .= "You must enter your password to login</br>";
        };

        // If both a login and a password have been set by the user, proceed to compare them to the database entries of user info
        if($output == "")
        {
            // Query the database
            $sql = "SELECT * FROM users WHERE id ='$id'";
            $result = pg_query($conn, $sql);
            $records = pg_num_rows($result);

            // Match entered id against ids that exist in the database - suppress warning message that pg_fetch_result will return if 0 rows found in query
            if(@pg_fetch_result($result, 0, "id") <> "" )
            {
                // Check entered password against the password associated with the entered id that exists in the database
                if( $password == pg_fetch_result($result, 0, "password"))
                {
                    // If id and password are authenticated, output a welcome message to the user with a brief summary of their account activity
                    $output .= "<h3>Welcome " . pg_fetch_result($result, "first_name") . " " . pg_fetch_result($result, 0, "last_name");
                    $output .= "<br/> Your account is associated with the email address " . pg_fetch_result($result, 0, "email_address") . " and you were last logged in on " . pg_fetch_result($result, 0, "last_access"). "</h3>";

                    // Update the records of when the user has last logged in
                    $sql = "UPDATE users SET last_access = '" .date("Y-m-d", time()) . "' WHERE id='$id'";

                    pg_query($conn, $sql);

                    // Clear input from form fields
                    $password = "";
                }
                // If password does not match the corresponding id, output an error message
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
	    <tr>
		<td></td>
		<td>
			<div class="login-buttons">
       				<button class="btn-login" type="submit" name="login" value="Login">Login</button>
      				<button class="btn-reset" type="submit" name="reset" value="Reset">Reset</button>
			</div>
		</td>
	    </tr>
        </table>
    </form>
    
    </div>

</div>

<?php 
	include '../footer.php'; 
?>