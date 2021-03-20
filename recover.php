<?php

 // Include config file
 require_once "includes/config/config.php";

// Set Page meta data
$pName = 'Recover password - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';
global $emailType;
$emailType = 'recover';
// Define variables and initialize with empty values
$email = "";
$email_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter the email address you would like to reset the password for.";
    }else{
        global $email;
        $email = trim($_POST["email"]);
    }


    // Validate credentials
    if(empty($email_err) ){
        // Prepare a select statement to confirm email is an active user
        $sql = "SELECT id, EMAIL, IS_ACTIVE FROM users WHERE EMAIL = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = $email;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){

                    $stmt->bind_result($id, $email, $active);
                    if($stmt->fetch()){
                        if($active==0) {
                            $email_err = "This account is no longer active. Please <a href='mailto:utmbuilderspace@gmail.net'>contact us</a> if you believe you have received this message in error.";
                        }else{

                            // Set token and Expiry
                            $token = md5($id).rand(10,9999);
                            $expFormat = mktime(
                                 date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
                                 );
                            $expDate = date("Y-m-d H:i:s",$expFormat);

                            // Prepare an update statement to reset password and set token
                            $usql = "UPDATE users SET reset_token_link = ?, exp_date = ? WHERE ID = ?";

                            if($stmt2 = $mysqli->prepare($usql)){
                                // Bind variables to the prepared statement as parameters
                                $stmt2->bind_param("sss", $param_token, $param_expdate, $param_id);

                                // Set parameters
                                $param_token = $token;
                                $param_expdate = $expDate;
                                $param_id = $id;

                                echo $param_id.'sfaf';

                                // Attempt to execute the prepared statement
                                if($stmt2->execute()){
                                    // Set link for password reset email
                                    global $link;
                                    $link = "<a href='".$site_URL."/reset-password.php?key=".$email."&amp;token=".$token."'>reset password</a>";

                                    include('includes/email.php');

                                    // Redirect user to welcome page
                                    header("location: login.php?recovered=true");

                                }else{
                                    echo $stmt2->error;
                                }
                            }else{
                             echo $mysqli->error;
                            }
                        }
                    }
                }
            }
        }

        $stmt->close();
    }else{
        echo 'err';
    }
    // Close connection
    $mysqli->close();
}

 ?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/account/recover.php'); ?>
<?php include ('includes/footer.php'); ?>