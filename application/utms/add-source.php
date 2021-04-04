<?php
// Check logged in status
include ('../../includes/account/status.php');
include ('../../includes/config/config.php');

// Set Page meta data
$pName = 'Create UTM - UTMBuilder.space';
$pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';
$page = 'create-source';

$channel = $source = "";
$channel_err = $source_err = $sourcecomplete = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //validate campaign
    if(empty(trim($_POST["source"]))){
        $source_err = "Please enter your source name.";
    } else{
        $source = trim($_POST["source"]);
    }

    // validate channel
    if(empty(trim($_POST["channel"])) || trim($_POST["channel"]) == 'Select the default channel grouping'){
        $channel_err = "Please select a Channel for your source to sit under. Use the <a href='".$site_URL."articles/universal-GA-channel-definitions.php' target='_blank'>handy resource here</a> to find out more about Google Analytics channel definitions";
    } else{
        $channel = trim($_POST["channel"]);
    }

    // Check input errors before inserting in database
    if(empty($channel_err) && empty($source_err)){

        if($_SESSION["utm_acct_type"] == 'Basic - Universal') {
            $channelSQL = "INSERT INTO basic_general_source (UNIVERSAL_ID, GA4_ID , NAME, VALUE, ACCOUNT_ID) VALUES (?, 0, ?, ?, ?)";
        }else if($_SESSION["utm_acct_type"] == 'Basic - GA4') {
            $channelSQL = "INSERT INTO basic_general_source (UNIVERSAL_ID, GA4_ID , NAME, VALUE, ACCOUNT_ID) VALUES (0, ?, ?, ?, ?)";
        }

        if($stmt = $mysqli->prepare($channelSQL)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_chanID, $param_name, $param_value, $param_acctID);

            // Set Parameter
            $param_chanID = $channel;
            $param_name = $source;
            $param_value = trim(strtolower(str_replace(" ","-",$source)));
            $param_acctID = $_SESSION['acct_id'];

            // Attempt to execute channel query
            if($stmt->execute()){
                $stmt->store_result();
                $sourcecomplete = "true";

            } else {
                echo 'error inserting Source'.$stmt->error;
            }

        } else {
            echo $mysqli->error;
        }




    }



}

// Get Account details to set correct Channel vars
global $chanOptions;
global $channels;
$chanOptions = '';
if($_SESSION["utm_acct_type"] == 'Basic - Universal') {
    $channelSQL = "SELECT ID, NAME FROM channel_universal";
}else if($_SESSION["utm_acct_type"] == 'Basic - GA4') {
    $channelSQL = "SELECT ID, NAME FROM channel_ga4";
}

// Setting variables for dynamic content on page
// Prepare an insert statement to store the UTM
if($chanstmt = $mysqli->prepare($channelSQL)){
//nothing to bind
}else{
    echo $mysqli->error;
}
// Attempt to execute account creation
if($chanstmt->execute()){
    // prepare channel dropdown for presentation
    $channels = '';

    $chanstmt->bind_result($cid,$cname);
    while($chanstmt->fetch()) {
    $channels .= '<option ';
    if(!empty($_POST['channel']) && $_POST['channel'] == $cname ) {
        $channels .= ' SELECTED ';
    }
        $channels .= ' value="'.$cid.'"';
        $channels .= '>'.$cname.'</option>';
    }
}else{

    echo "Something went wrong. Please try again later.";
}
//close connection
$chanstmt->close();
$mysqli->close();

 include ('../../includes/header.php');
include ('../../includes/dashboard/dashboard-common-head.php');
include ('../../includes/utms/source-add.php');
include ('../../includes/dashboard/dashboard-common-foot.php');
include ('../../includes/footer.php');
