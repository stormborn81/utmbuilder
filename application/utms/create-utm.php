
<?php
// Check logged in status
 include ('../../includes/account/status.php');
 include ('../../includes/config/config.php');

 // Set Page meta data
 $pName = 'Create UTM - UTMBuilder.space';
 $pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';

 // Define variables and initialize with empty values
 $url = $channel = $source = $campaign = $content = $urlcomplete = $utm = "";
 $url_err = $channel_err = $source_err = $campaign_err = $content_err = "";

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
                                $utm .= '&utm_campaign='.urlencode($campaign);
                                //if content is set add utm content with encoding for spacing
                                if(!empty(trim($_POST["content"]))){
                                    $utm .= '&utm_content='.urlencode(trim($_POST["content"]));
                                }

                                // Insert URL/UTM record
                                $urlSQL = 'INSERT INTO urlutm (URL, CREATED_BY, ACCOUNT_ID, CHANNEL_ID) VALUES (?, ?, ?, ?)';

                                if($ustmt = $mysqli->prepare($urlSQL)){

                                    $ustmt->bind_param("ssss", $param_url, $param_uID, $param_aID, $param_cID);

                                    // Set Parameter
                                    $param_url = $utm;
                                    $param_uID = $_SESSION["user_id"];
                                    $param_aID = $_SESSION['acct_id'];
                                    $param_cID = $channel;

                                    if($ustmt->execute()){
                                        $ustmt->store_result();
                                        $urlcomplete = "true";

                                    } else {
                                        echo 'error inserting URL';
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

// Get Account details to set correct Channel vars
global $chanOptions;
global $sourceOptions;
global $channels;
$chanOptions = '';
$sourceOptions = '';
if($_SESSION["utm_acct_type"] == 'Basic - Universal') {
    $channelSQL = "SELECT ID, NAME FROM channel_universal";
}else if($_SESSION["utm_acct_type"] == 'Basic - GA4') {
    $channelSQL = "SELECT ID, NAME FROM channel_ga4";
}

// Setting variables for dynamic content on page
// Prepare an insert statement to store the UTM
if($chanstmt = $mysqli->prepare($channelSQL)){
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

 include ('../../includes/header.php'); ?>
<?php include ('../../includes/dashboard/dashboard-common-head.php'); ?>
<?php include ('../../includes/utms/create.php'); ?>
<?php include ('../../includes/dashboard/dashboard-common-foot.php'); ?>
<?php include ('../../includes/footer.php'); ?>