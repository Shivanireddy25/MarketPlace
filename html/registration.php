<?php
// Include configuration file for calling DB connection
require_once "configuration.php";

 
// Define variables for username and password store and initialize with empty values
$username = $password = $cfm_password = $firstname = $lastname = $email = $homeaddress = $homephone = $cellphone = "";
$username_err = $password_err = $cfm_password_err = $firstname_err = $lastname_err = $email_err = $homeaddress_err = $homephone_err = $cellphone_err = "";
 
// Process data form when posting form to server
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username inputting
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username to continue.";
    } else{
		$param_username = trim($_POST["username"]);

        // Prepare a sql statement to select user id from users table
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables into the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
                   
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already existed.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{ 
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password inputting
    if(empty(trim($_POST["password"]))){
        $password_err = "Please setting a password.";     
    } elseif((strlen(trim($_POST["password"])) < 6) or (strlen(trim($_POST["password"])) > 10)) {
        $password_err = "Password must have at least 6 characters and can not be longer than 10 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
	 // Validate confirm password to match with inputted password
    if(empty(trim($_POST["cfm_password"]))){
        $cfm_password_err = "Please confirm password.";     
    } else{
        $cfm_password = trim($_POST["cfm_password"]);
        if(empty($password_err) && ($password != $cfm_password)){
            $cfm_password_err = "Password does not match.";
        }
    }
    
	
	// Validate first name inputting
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please input your first name to continue.";     
    } elseif(!(preg_match("/^([a-zA-Z' ]+)$/",$_POST["firstname"]))){
    	$firstname_err = "First name must be in Alphabet.";
	} elseif((strlen(trim($_POST["firstname"])) > 50)) {
        $firstname_err = "First name can not be longer than 50 characters.";
    } else{
        $firstname = trim($_POST["firstname"]);
    }

	// Validate last name inputting
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please input your last name to continue.";     
    } elseif(!(preg_match("/^([a-zA-Z' ]+)$/",$_POST["lastname"]))){
    	$lastname_err = "Last name must be in Alphabet.";
	} elseif((strlen(trim($_POST["lastname"])) > 50)) {
        $lastname_err = "Last name can not be longer than 50 characters.";
    } else{
        $lastname = trim($_POST["lastname"]);
    }
	
	// Validate email inputting
    if(empty(trim($_POST["email"]))){
        $email_err = "Please input your email to continue.";     
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	  $email_err = "Invalid email format";
	} elseif((strlen(trim($_POST["email"])) > 50)) {
        $email_err = "Email can not be longer than 50 characters.";
    } else{
        $email = trim($_POST["email"]);
    }
	
	// Validate home address inputting
    if(empty(trim($_POST["homeaddress"]))){
        $homeaddress_err = "Please input your address to continue.";     
    } elseif((strlen(trim($_POST["homeaddress"])) > 100)) {
        $homeaddress_err = "Home address can not be longer than 50 characters.";
    } else{
        $homeaddress = trim($_POST["homeaddress"]);
    }
	
	// Validate home phone inputting
    if(empty(trim($_POST["homephone"]))){
        $homephone_err = "Please input your home phone to continue.";     
    } elseif(!(filter_var($_POST["homephone"], FILTER_SANITIZE_NUMBER_INT))){
    	$homephone_err = "We only accept numbers and +/- character.";
	} elseif((strlen(trim($_POST["homephone"])) < 10) or (strlen(trim($_POST["homephone"])) > 14)) {
        $homephone_err = "Home phone must have at least 10 characters and can not be longer than 14 characters.";
    } else{
        $homephone = trim($_POST["homephone"]);
    }
	
	// Validate cell phone inputting
    if(empty(trim($_POST["cellphone"]))){
        $cellphone_err = "Please input your cell phone to continue.";     
    } elseif(!(filter_var($_POST["cellphone"], FILTER_SANITIZE_NUMBER_INT))){
    	$cellphone_err = "We only accept numbers and +/- character.";
	} elseif((strlen(trim($_POST["cellphone"])) < 10) or (strlen(trim($_POST["cellphone"])) > 14)) {
        $cellphone_err = "Cell phone must have at least 10 characters and can not be longer than 14 characters.";
    } else{
        $cellphone = trim($_POST["cellphone"]);
    }
	
   
    // Check errors before inserting into DB
    if(empty($username_err) && empty($password_err) && empty($cfm_password_err) && empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($homeaddress_err) && empty($homephone_err) && empty($cellphone_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, firstname, lastname, email, homeaddress, homephone, cellphone, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables into the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_username, $param_firstname, $param_lastname, $param_email, $param_homeaddress, $param_homephone, $param_cellphone, $param_password);
            
            // Set parameters for username, password, first name, last name, email, home address, home phone and cell phone   to insert into the table
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$param_firstname = $firstname;
			$param_lastname = $lastname;
			$param_email = $email;
			$param_homeaddress = $homeaddress;
			$param_homephone = $homephone;
			$param_cellphone = $cellphone;
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: home.html");
            } else{
                echo "Something went wrong. Please try again later.";
				printf("Error: %s.\n", mysqli_stmt_error($stmt));
				 
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connection);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up to honviet.us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
            style="background-image: radial-gradient(lightblue, grey);
         }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill in this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($cfm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="cfm_password" class="form-control" value="<?php echo $cfm_password; ?>">
                <span class="help-block"><?php echo $cfm_password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label>Your first name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                <label>Your last name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                <span class="help-block"><?php echo $lastname_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($homeaddress_err)) ? 'has-error' : ''; ?>">
                <label>Home Address</label>
                <input type="text" name="homeaddress" class="form-control" value="<?php echo $homeaddress; ?>">
                <span class="help-block"><?php echo $homeaddress_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($homephone_err)) ? 'has-error' : ''; ?>">
                <label>Home phone</label>
                <input type="text" name="homephone" class="form-control" value="<?php echo $homephone; ?>">
                <span class="help-block"><?php echo $homephone_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($cellphone_err)) ? 'has-error' : ''; ?>">
                <label>Cell phone</label>
                <input type="text" name="cellphone" class="form-control" value="<?php echo $cellphone; ?>">
                <span class="help-block"><?php echo $cellphone_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
