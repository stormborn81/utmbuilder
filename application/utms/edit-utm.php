<?php
// Check logged in status
 include ('../../includes/account/status.php');
 include ('../../includes/config/config.php');

 // Set Page meta data
 $pName = 'Edit UTM - UTMBuilder.space';
 $pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';

 // Define variables and initialize with empty values
 $url = $channel = $source = $campaign = $content = $urlcomplete = $utm = $utmID = $pageS = "";
 $url_err = $channel_err = $source_err = $campaign_err = $content_err = "";

 //Check if UTM is set and exists - Otherwise redirect user
 if(isset($_GET['utm']) && $_SERVER["REQUEST_METHOD"] != "POST") {
    $utmID = $_GET['utm'];
    if(isset($_GET['source'])) {
        $pageS = $_GET['source']; // if listing this will be populated otherwise dashboard is source
    }

    $usql = "SELECT ID, URL, CHANNEL_ID, SOURCE_ID, CAMPAIGN, CONTENT, BASE_URL FROM urlutm WHERE ID = ?";

    if($ustmt = $mysqli->prepare($usql)){
        $ustmt->bind_param("s", $param_utmID);

        // Set parameters
        $param_utmID = $utmID;
        // Attempt to execute the prepared statement
        if($ustmt->execute()){
            // Store result
            $ustmt->store_result();
            $ustmt->bind_result($uID, $uURL, $uCID, $uSID, $uCampaign, $uContent, $uBase);
            // Check if username exists, if yes then verify password
            if($ustmt->num_rows == 1){

            } else {
                // redirect with error
                if($pageS == 'listing' ) {
                   header("location: utm-listing.php?action=utm-edit-error&error=utm-not-exist");
                } else {
                   // default to dashboard
                   header("location: ../../dashboard.php?action=utm-edit-error&error=utm-not-exist");
                }
            }
        }
        $ustmt->close();
    }
 } else {
    //redirect with error
    header("location: ../../dashboard.php?action=utm-edit-error&error=no-utm");
 }


 // Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){

     //validate URL
     if(empty(trim($_POST["url"]))){
         $url_err = "Please enter URL you want to direct your traffic to.";
     } else{
         $url = trim($_POST["url"]);
     }

     //validate campaign
     if(empty(trim($_POST["campaign"]))){
         $campaign_err = "Please enter your campaign name.";
     } else{
         $campaign = trim($_POST["campaign"]);
     }

     // validate source
     if(empty(trim($_POST["source"]))){
         $source_err = "Please select a source. Use the Add source link above if the source you want does not exist.";
     } else{
         $source = trim($_POST["source"]);
     }

     // validate channel
     if(empty(trim($_POST["channel"]))){
         $channel_err = "Please select a Channel for your traffic. Use the <a href='".$site_URL."blog/universal-GA-channel-definitions.php' target='_blank'>handy resource here</a> to find out more about Google Analytics channel definitions";
     } else{
         $channel = trim($_POST["channel"]);
     }

     // Check input errors before inserting in database
     if(empty($url_err) && empty($channel_err) && empty($source_err) && empty($campaign_err)){

         //prepare URL + UTM
         // get Medium from channel ID
         if($_SESSION["utm_acct_type"] == 'Basic - Universal') {
             $channelSQL = "SELECT MEDIUM FROM channel_universal WHERE ID = ?";
         }else if($_SESSION["utm_acct_type"] == 'Basic - GA4') {
             $channelSQL = "SELECT MEDIUM FROM channel_ga4 WHERE ID = ?";
         }

         if($stmt = $mysqli->prepare($channelSQL)){
                     // Bind variables to the prepared statement as parameters
             $stmt->bind_param("s", $param_chanID);

             // Set Parameter
             $param_chanID = $channel;

             // Attempt to execute channel query
             if($stmt->execute()){

                 $stmt->store_result();

                 $stmt->bind_result($medium);
                 if($stmt->fetch()){

                     $sourceSQL = 'SELECT VALUE FROM basic_general_source WHERE ID = ? ';

                     if($sstmt = $mysqli->prepare($sourceSQL)){

                         $sstmt->bind_param("s", $param_sID);

                         // Set Parameter
                         $param_sID = $_POST['source'];

                         if($sstmt->execute()){

                             $sstmt->store_result();

                             $sstmt->bind_result($sourceVal);
                             if($sstmt->fetch()){
                                 // set up UTM
                                 $utm = $url;
                                 // check if URL already has a ?
                                 if(strpos($url,'?') !== false) {
                                     $utm .= '&';
                                 }else{
                                     $utm .= '?';
                                 }
                                 // add utm medium
                                 $utm .= 'utm_medium='.$medium;
                                 // add utm source
                                 $utm .= '&utm_source='.$sourceVal;
                                 // add utm campaign with encoding for spacing
                                 $utm .= '&utm_campaign='.str_replace(strtolower(trim($campaign)),"-"," ");
                                 //if content is set add utm content with encoding for spacing
                                 if(!empty(trim($_POST["content"]))){
                                     $utm .= '&utm_content='.str_replace(trim(strtolower($_POST["content"])),"-"," ");
                                 }

                                 // Insert URL/UTM record
                                 $urlSQL = 'UPDATE urlutm SET URL =?, CREATED_BY =?, ACCOUNT_ID =?, CHANNEL_ID =?, SOURCE_ID =?, DATE_UPDATED=? WHERE ID = ?';

                                 if($ustmt = $mysqli->prepare($urlSQL)){

                                     $ustmt->bind_param("sssssss", $param_url, $param_uID, $param_aID, $param_cID, $param_sID, $param_time, $param_urlID);

                                     // Set Parameter
                                     $param_url = $utm;
                                     $param_uID = $_SESSION["user_id"];
                                     $param_aID = $_SESSION['acct_id'];
                                     $param_cID = $channel;
                                     $param_sID = $source;
                                     $param_time = date('Y-m-d H:i:s');
                                     $param_urlID = $urlID;


                                     if($ustmt->execute()){
                                         $ustmt->store_result();
                                         $urlcomplete = "true";

                                     } else {
                                         echo 'error updating URL';
                                     }

                                 }
                             }

                         }
                     } else {
                         echo "Something went wrong with Source query. Please try again later.";
                     }

                 }
             }else{
                 echo "Something went wrong with Medium query. Please try again later.";
             }
         }

     }

  }