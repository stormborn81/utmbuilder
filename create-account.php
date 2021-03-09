<?php
// Include config file
require_once "includes/config/config.php";

// Set Page meta data
$pName = 'Create your account - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';

// Define variables and initialize with empty values
$businessname = $email = $password = $confirm_password = $check_terms = "";
$businessname_err = $email_err = $password_err = $confirm_password_err = $check_terms_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter a valid email address.";
    } else{
        // Prepare a select statement
        $sql = "SELECT ID FROM users WHERE EMAIL = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    //validate checkbox
    if(empty(trim($_POST["check_terms"]))){
        $check_terms_err = "Please confirm you agree to the terms and conditions and privacy policy.";
    } else{
        $check_terms = trim($_POST["check_terms"]);
    }

    // Validate business Name
    if(empty(trim($_POST["business"]))){
        $businessname_err = "Please enter a business name.";
    } else{

        // Prepare a select statement
        $sql = "SELECT ID FROM accounts WHERE COMPANY_NAME = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_business);

            // Set parameters
            $param_business = trim($_POST["business"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();

                if($stmt->num_rows == 1){
                    $businessname_err = "This business name already has an account.";
                } else{
                    $businessname = trim($_POST["business"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }


    // Check input errors before inserting in database
    if(empty($businessname_err) && empty($emailname_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement to create the account
        $bsql = "INSERT INTO accounts (COMPANY_NAME) VALUES (?)";

        if($stmt = $mysqli->prepare($bsql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_businessname);

            // Set Parameter
            $param_businessname = $businessname;
        }

        // Attempt to execute account creation
        if($stmt->execute()){
            $acct_ID =  $stmt->insert_id;

            // Prepare an insert statement for the User Account
            $sql = "INSERT INTO users (ACCT_ID, EMAIL, PASSWORD) VALUES (?, ?, ?)";

            if($stmt2 = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt2->bind_param("sss", $param_acctid, $param_email, $param_password);

                // Set parameters
                $param_acctid = $acct_ID;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                // Attempt to execute the prepared statement
                if($stmt2->execute()){
                    // Redirect to login page
                    header("location: login.php?signup=success");
                } else{
                    echo "Something went wrong. Please try again later.";
                }

                // Close statement2
                $stmt2->close();
            }

            // Close Statement
            $stmt->close();

        }else{

            echo "Something went wrong. Please try again later.";
        }
    }

    // Close connection
    $mysqli->close();
}
?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/account/create.php'); ?>
<?php include ('includes/footer.php'); ?>