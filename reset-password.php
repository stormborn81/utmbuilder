<?php
// Include config file
require_once "includes/config/config.php";

// Set Page meta data
$pName = 'Reset password - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';

// Define variables and initialize with empty values
global $status;
$new_password = $confirm_new_password = $status = $email = "";
$new_password_err = $confirm_new_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter a new password.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have at least 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_new_password"]))){
        $confirm_new_password_err = "Please confirm new password.";
    } else{
        $confirm_new_password = trim($_POST["confirm_new_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_new_password)){
            $confirm_new_password_err = "Password did not match.";
        }
    }

    $email = trim($_POST["email"]);

    // Validate credentials
    if(empty($new_password_err) && empty($confirm_new_password_err) ){

        $sql = "UPDATE users SET PASSWORD = ?, reset_token_link = NULL, exp_date = NULL WHERE EMAIL = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_password, $param_email);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                header("location: login.php?reset=success");
            } else{
                echo "Something went wrong. Please try again later.";
            }

        }

        // Redirect back to login with reset=true
    }
}

// Determine what content to display
if($_GET['key'] && $_GET['token']) {
    //prepare statement to confirm if user is active and token is still valid
    $sql = "SELECT id, EMAIL, exp_date FROM users WHERE reset_token_link = ? AND EMAIL = ?";

    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ss", $param_token, $param_email);

        // Set parameters
        $param_token = trim($_GET['token']);
        $param_email = trim($_GET['key']);

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Store result
            $curDate = date("Y-m-d H:i:s");
            $stmt->store_result();
            // Check if username exists, if yes then verify password
            if($stmt->num_rows == 1){
                $stmt->bind_result($id, $email, $expDate);
                if($stmt->fetch()){
                    if($expDate >= $curDate) {
                        $status = 'reset';
                    } else {
                        $status = 'expired';
                    }
                }

            }

        }
        $stmt->close();
    }
    $mysqli->close();
}else{
    $status = 'error';
}
?>

<?php include ('includes/header.php'); ?>
<?php include ('includes/account/reset.php'); ?>
<?php include ('includes/footer.php'); ?>
