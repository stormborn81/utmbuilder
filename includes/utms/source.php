<?php
// Initialize the session
session_start();

// Include config file
require_once "../config/config.php";

// Get the selected Channel Var
$choice = $_GET['choice'];
global $sources;
$sources = '';


if($_SESSION["utm_acct_type"] == 'Basic - Universal') {
    $sourceSQL = "SELECT ID, NAME FROM basic_general_source WHERE UNIVERSAL_ID = ? AND ACCOUNT_ID = 0 UNION ALL SELECT ID, NAME FROM basic_general_source WHERE UNIVERSAL_ID = ? AND ACCOUNT_ID = ?";
}else if($_SESSION["utm_acct_type"] == 'Basic - GA4') {
     $sourceSQL = "SELECT ID, NAME FROM basic_general_source WHERE GA4_ID = ? AND ACCOUNT_ID = 0 UNION ALL SELECT ID, NAME FROM basic_general_source WHERE GA4_ID = ? AND ACCOUNT_ID = ?";
}

if($stmt = $mysqli->prepare($sourceSQL)){

    $stmt->bind_param("sss", $param_uid, $param_uid2, $param_acctID);

    // Set parameters
    $param_uid = $choice;
    $param_uid2 = $choice;
    $param_acctID = $_SESSION['acct_id'];

    // execute our query
    if($stmt->execute()) {
        $stmt->store_result();
        // this is how to get number of rows returned
        $num = $stmt->num_rows;

        $sources = '<option>Select the source</option>';

        $stmt->bind_result($sid,$sname);
        while($stmt->fetch()) {
        $sources .= '<option ';
        if(!empty($_POST['source']) && $_POST['source'] == $sname ) {
            $sources .= ' SELECTED ';
        }
        $sources .= ' value="'.$sid.'"';
        $sources .= '>'.$sname.'</option>';
        }

        echo $sources;
    }else{
        echo $stmt->error;
    }

}else{
    echo $mysqli->error;
}




?>