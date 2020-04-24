<?php

// Header Variable Declarations
$title = "Test #3: Reservation Form";
$file = "test3.php";
$description = "Test #3 is captured in this page.";
$date = "April 15, 2020";
$banner = "Test #3: Reservation Form";	
include '../header.php';

?>

<div class="container">

    <img src="./images/dc_logo.svg" style="width: 200px; height: 200px;">
	<img src="./images/airplane.png" style="width: 100px; height: 100px; float: right; margin-right: 100px;">
    <p>Test #3 is captured in this page and demonstrates basic skills in HTML, PHP, and CSS to create a basic reservation login system.</p>    

	<!-- Login Form -->
    <div id="form">

<?php 
    
    // When the page first loads or is reset, create empty variables that will attempt to collect user login and password that wil match with an entry in the database
    if($_SERVER["REQUEST_METHOD"]=="GET" || isset($_POST['rest']))
    {
        $id = "";
        $name = "";
		$age = "";
		$gender = "";
		$start = "";
        $dest = "";
        $airline = "";
        $date = "";
        $output = "Please register below.";
    }
    // If the user has tried to register after the page first loads, attemp to validate the provided information 
    else if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = trim($_POST["name"]);
		$age = trim($_POST["age"]);
		$gender = trim($_POST["gender"]);
		$start = trim($_POST["start"]);
		$dest = trim($_POST["dest"]);
		$airline  = trim($_POST["airline"]);
        $output = "";
        $date = date("Y-m-d", time()); 

        // Save the function that connects to the database as a variable
        $conn = db_connect();
   
    }
    
    // If there are no validation or errors and all input has been validated, proceed to add user information to the database to complete the registration process
    if($output == "")
    {
        $sql = "INSERT INTO users(name, age, gender, start_city, destination_city, airline, reservation_date) VALUES (
            '$name',
            '$age',
            '$gender',
            '$start',
            '$dest',
            '$airline',
            '$date'
        );
        ";

        pg_query($conn, $sql);

        // Push booking information into Finaltest SQL file
        $handle = fopen('./sql/final.sql','a');
        fwrite($handle, "$sql");
        fclose($handle);

        } 

    // Output messages guiding the user through the registration process to meet all validation requirements
    echo "<h3>" . $output . "</h3>";

	$output .= convertToFarenheight($tempCelsius);

?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
        <table id="registration-form">
        
            <tr>
                <td class="right" style="width: 25%;">Name: </td>
                <td><input type="text" name="name" size="15" value="<?php echo $name; ?>"/></td>
            </tr>
            <tr>
                <td class="right" style="width: 25%;">Age: </td>
                <td><input type="text" name="age" size="15" value="<?php echo $age; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Gender: </td>
                <td><input type="text" name="gender" size="15" value="<?php echo $gender; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Start city: </td>
                <td><input type="text" name="start" size="15" value="<?php echo $start; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Destination City: </td>
                <td><input type="text" name="dest" size="15" value="<?php echo $dest; ?>"/></td>
            </tr>
			<tr>
                <td class="right" style="width: 25%;">Airline: </td>
                <td><input type="email" name="airline" size="15" value="<?php echo $airline; ?>"/></td>
            </tr>
        </table>
    
        <button class="btn-register" type="submit" name="register" value="Register">Book Flight</button>
        <button class="btn-reset" type="reset" name="reset" value="Reset">Reset</button>
     
    </form>
    
    </div>

    <div class="output-message">
		<div class="temp-table"><?php echo $output; ?></div>
	</div>
    
    <!-- Form -->
	<form class="input-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
        <div>	
        <h3>Temperature Converter Form</h3>
        <br/><label>Celcius Temperature: </label><input type="text" name="startingTemp" value="<?php echo $start; ?>" size="10"/>
            <br/><input type="submit" value="Convert" />
        </div>
    </form>

</div>
</div>


<?php 

    function convertToFarenheight($tempCelsius) {
        $tempFarenheight = 9/5 * $tempCelsius + 32;
        return $tempFarenheight;
    }

	include '../footer.php'; 
?>