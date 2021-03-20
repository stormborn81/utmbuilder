<?php

 // Include config file
 require_once "../../includes/config/config.php";

// Set Page meta data
$pName = 'Support - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';
global $emailType;
$emailType = 'support';
global $sendStatus;
$sendStatus = '';
// Define variables and initialize with empty values
$email = $name = $message = "";
$email_err = $name_err = $message_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email address.";
    }else{
        global $email;
        $email = trim($_POST["email"]);
    }
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";
    }else{
        $name = trim($_POST["name"]);
    }
    if(empty(trim($_POST["email"]))){
        $message_err = "Please enter your message.";
    }else{
        global $message;
        $message = trim($_POST["message"]);
    }

    // Send email to support
    if(empty($email_err) && empty($name_err)  && empty($message_err)  ){
        include('../../includes/email.php');
    }
 }

 ?>
<?php include ('../../includes/header.php'); ?>
<?php include ('../../includes/other/support.php'); ?>
<?php include ('../../includes/footer.php'); ?>