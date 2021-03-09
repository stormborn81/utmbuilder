<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect them to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}

// Include config file
require_once "includes/config/config.php";

// Set Page meta data
$pName = 'Login - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter email address.";
    } else{
        $username = trim($_POST["email"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement - Future need to support different level types (basic or custom)
        $sql = "SELECT u.id, u.EMAIL, u.PASSWORD, u.ACCT_ID, a.COMPANY_NAME, u.IS_ACTIVE, a.IS_ACTIVE, a.NFP_STATUS FROM users u LEFT JOIN accounts a ON u.ACCT_ID = a.ID WHERE u.EMAIL = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();

                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password, $acct_id, $company_name, $user_active, $account_active, $nfp_status);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password) && $user_active == 1 && $account_active == 1){
                            // Password is correct, so start a new session
                            //session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $id;
                            $_SESSION["user_email"] = $username;
                            $_SESSION["acct_id"] = $acct_id;
                            $_SESSION["business_name"] = $company_name;
                            $_SESSION["count"] = 0;
                            $_SESSION["utm_acct_type"] = 'Basic - Universal'; // Need to update in the future to reflect account utm type
                            if($nfp_status==1) {
                                $_SESSION["business_type"] = 'NFP';
                            }else{
                                // Need to update in future to reflect non NFP user types
                                $_SESSION["business_type"] = 'SuperUser';
                            }



                            // Redirect user to welcome page
                           header("location: dashboard.php?loggedin=true");


                        } else{
                            if($user_active==0){
                                $password_err = "The account for this user has been deactivated. Please <a href='mailto:utmbuilderspace@gmail.net'>contact us</a> if you believe you have received this message in error";
                            }else if($account_active==0){
                                // Display an error message if password is not valid
                                $password_err = "The account for this business has been deactivated. Please <a href='mailto:utmbuilderspace@gmail.net'>contact us</a> if you believe you have received this message in error";
                            }else{
                                // Display an error message if password is not valid
                                $password_err = "The password you entered was not valid.";
                            }
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that email address.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            $stmt->close();

        }
    }

    // Close connection
    $mysqli->close();
}
?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/account/login.php'); ?>
<?php include ('includes/footer.php'); ?>