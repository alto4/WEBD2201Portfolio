<?php

// Header Variable Declarations
$title = "Lab #10: Database/PHP Lab - User Registration";
$file = "lab10.php";
$description = "Lab #10 is captured in this page and demonstrates the use of PHP to register a new users account/login information into a PostGresSQL database after validating their input.";
$date = "April 1, 2020";
$banner = "Lab #10: Database/PHP Lab - User Registration";	
include '../header.php';

?>

<div class="container">
	<p>Lab #10 is captured in this page and demonstrates the use of PHP to register a new users account/login information into a PostGresSQL database after validating their input using constraints that are deifned 
	using PHP constants to ensure that data sent to the users table is validated as suitable for processing in the database while retaining integrity.</p>    

	<!-- Login Form -->
    <div id="form">

<?php 
    
    // When the page first loads or is reset, create empty variables that will attempt to collect user login and password that wil match with an entry in the database
    if($_SERVER["REQUEST_METHOD"]=="GET" || isset($_POST['rest']))
    {
        $id = "";
		$password = "";
		$firstname = "";
		$lastname = "";
		$email  = "";
        $output = "Please register below.";
    }
    // If the user has tried to register after the page first loads, attemp to validate the provided information 
    else if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id = trim($_POST["id"]);
		$password = trim($_POST["password"]);
		$passwordConfirm = trim($_POST["passwordConfirm"]);
		$firstname = trim($_POST["firstname"]);
		$lastname = trim($_POST["lastname"]);
		$email  = trim($_POST["email"]);
        $output = "";
        $date = date("Y-m-d", time()); 

        // Save the function that connects to the database as a variable
        $conn = db_connect();
        
        // USER ID VALIDATIONS
        // SQL Query to check if ID exists in the database records
        $sql = "SELECT ID FROM users WHERE id='$id'";

        $result = pg_query($conn, $sql);
        $records = pg_num_rows($result);

        // Verify that user id was entered, and if not, display an error message
        if(!isset($id) || $id == "")
        {
            $output .= "Please enter a User ID</br>";
        }
        // Check that ID meets minimum length requirement
        else if(strlen("$id") < MINIMUM_ID_LENGTH)
        {
            $output .= "The User ID must be at least " . MINUMUM_ID_LENGTH . " characters in length.<br/>";
            $id = "";
        }
        // Check that ID does not exceed maximum length requirement
        else if(strlen("$id") > MAXIMUM_ID_LENGTH)
        {
            $output .= "The User ID cannot be greater than " . MAXIMUM_ID_LENGTH . " characters in length.<br/>";
            $id = "";
        }
        // Check that the entered ID does not match any results form the SQL query to ensure the user ID is not already taken
        else if(pg_fetch_result($result, 0, "id") <> "")
        {
            $output .= $id . " is already associated with an existing account. Please select a different User ID.<br/>";
            $id = "";
        };

        // PASSWORD VALIDATIONS
        // Verify that user password was entered, and if not, display an error message
        if(!isset($password) || $password == "")
        {
            $output .= "You must enter your password to register.</br>";
        } 
        // Check that password meets minimum length requirements
        else if(strlen("$password") < MINUMUM_PASSWORD_LENGTH)
        {
            $output .= "The password must be greater than " . MINIMUM_PASSWORD_LENGTH . " characters in length.<br/>";
            $password = "";
        } 
        // Check that ID does not exceed maximum length requirement
        else if(strlen("$password") > MAXIMUM_PASSWORD_LENGTH)
        {
            $output .= "The password cannot be greater than " . MAXIMUM_PASSWORD_LENGTH . " characters in length.<br/>";
            $password = "";
        }
        // Make sure that confirm password input matches the first password input field to ensure that the user is setting the password that they intend without any typos
        else if(strcmp($passwordConfirm, $password))
        {
            $output .= "The password you entered does not match the password confirm field. Please try again and make sure that both passwords are entered exactly the same.<br/>";
        };     
        
        // FIRST NAME VALIDATIONS
		// Verify that user first name was entered, and if not, display an error message
        if(!isset($firstname) || $firstname == "")
        {
            $output .= "You must enter your first name to register.</br>";
        }
        // Check that the first name does not exceed the maximum file length requirements
        else if(strlen("$firstname") > MAX_FIRST_NAME_LENGTH)
        {
            $output .= "The first name entered cannot exceed " . MAX_FIRST_NAME_LENGTH . " characters in length.<br/>";
            $firstname = "";
        } 
        // Check that the first name does not contain any numeric entries
        else if(is_numeric($firstname))
        {
            $output .= "The first name entered may not contain any numeric characters. Please only enter letters from the alphabet.<br/>";
            $firstname = "";
        };

		// LAST NAME VALIDATIONS
		// Verify that user last name was entered, and if not, display an error message
        if(!isset($lastname) || $lastname == "")
        {
            $output .= "You must enter your last name to register.</br>";
        }
        // Check that the last name does not exceed the maximum file length requirements
        else if(strlen("$lastname") > MAX_LAST_NAME_LENGTH)
        {
            $output .= "The last name entered cannot exceed " . MAX_LAST_NAME_LENGTH . " characters in length.<br/>";
            $lastname = "";
        } 
        // Check that the last name does not contain any numeric entries
        else if(is_numeric($lastname))
        {
            $output .= "The last name entered may not contain any numeric characters. Please only enter letters from the alphabet.<br/>";
            $lastname = "";
        };

        // EMAIL VALIDATIONS
		// Verify that user email was entered, and if not, display an error message
        if(!isset($email) || $email == "")
        {
            $output .= "You must enter your email to register.</br>";
        }
        // Check that the email does not exceed the maximum file length requirements
        else if(strlen("$email") > MAXIMUM_EMAIL_LENGTH)
        {
            $output .= "Your email address may not exceed " . MAXIMUM_EMAIL_LENGTH . " characters in length.<br/>";
            $email = "";
        } 
        else if(!(filter_var($email, FILTER_VALIDATE_EMAIL)))
        {
            $output .= $email . " is not a valid email address. Please try again.<br/>";
            $email = "";
        }
        else if( pg_fetch_result($result, 0, "email") <> "" )
        {
            $output .= "This email address is already in use. Please try again or contact admin if you forgot your password.<br/>";
            $email = "";
        };
    // END OF VALIDATIONS        
    }
    
    // If there are no validation or errors and all input has been validated, proceed to add user information to the database to complete the registration process
    if($output == "")
    {
        $sql = "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES (
            '$id',
            '$password',
            '$firstname',
            '$lastname',
            '$email',
            '$date',
            '$date'
        );
        ";

        pg_query($conn, $sql);

        // Push validated user information into Lab 9 users SQL file
        $handle = fopen('./sql/lab9_users.sql','a');
        fwrite($handle, "$sql");
        fclose($handle);

        // Direct user to the Lab #9 page to try signing in with their newly validated and registered credentials
        ob_flush();
	header("Location: ../lab9/lab9.php");
    } 

    // Output messages guiding the user through the registration process to meet all validation requirements
    echo "<h3>" . $output . "</h3>";

?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
        <table id="registration-form">
        
            <tr>
                <td class="right" style="width: 25%;">User ID: </td>
                <td><input type="text" name="id" size="15" value="<?php echo $id; ?>"/></td>
            </tr>
            <tr>
                <td class="right" style="width: 25%;">Password: </td>
                <td><input type="password" name="password" size="15" value="<?php echo $password; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Confirm Password: </td>
                <td><input type="password" name="passwordConfirm" size="15" value="<?php echo $passwordConfirm; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">First Name: </td>
                <td><input type="text" name="firstname" size="15" value="<?php echo $firstname; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Last Name: </td>
                <td><input type="text" name="lastname" size="15" value="<?php echo $lastname; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Email: </td>
                <td><input type="text" name="email" size="15" value="<?php echo $email; ?>"/></td>
            </tr>
	</table>
    	<div>
        	<button class="btn-register" type="submit" name="register" value="Register">Register</button>
     	</div>
    </form>
    
    </div>
</div>

<?php 
	include '../footer.php'; 
?>