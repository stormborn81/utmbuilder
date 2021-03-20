
<?php
// Check logged in status
 include ('includes/account/status.php');
  include ('includes/config/config.php');

 // Set Page meta data
 $pName = 'Dashboard - UTMBuilder.space';
 $pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';
 $page = 'home';

 $error = '';

 // error handling
 if(isset($_GET['action']) && isset($_GET['error'])) {
    // delete errors
    if($_GET['action']=='utm-delete-error') {
        if($_GET['error'] == 'no-utm' || $_GET['error'] == 'no-source') {
            $error = 'delete-no-utm';
        }else if($_GET['error'] == 'delete-error-mysqli' || $_GET['error'] == 'delete-error-stmt') {
            $error = 'delete-general';
        }
    }
 }

// Get UTMs

 $sql = "SELECT u.ID, u.URL, DATE_FORMAT(u.DATE_CREATED, '%d %M %Y'), c.NAME, c.ICON_SOURCE, s.NAME, us.FNAME, us.LNAME, a.COMPANY_NAME FROM urlutm AS u LEFT JOIN channel_universal AS c ON c.ID = u.CHANNEL_ID LEFT JOIN users AS us ON us.ID = u.CREATED_BY LEFT JOIN accounts a ON u.ACCOUNT_ID = a.ID LEFT JOIN basic_general_source s ON s.ID = u.SOURCE_ID WHERE a.ID = ?  ORDER BY u.DATE_CREATED DESC LIMIT 10";
 $list = '';
 if($stmt = $mysqli->prepare($sql)){

    $stmt->bind_param("s", $param_AID);

    // Set parameters
    $param_AID = $_SESSION["acct_id"];

    // Attempt to execute the prepared statement
    if($stmt->execute()){
        // Store result
        $stmt->store_result();
        $filrows = $stmt->num_rows;
        if($stmt->num_rows >= 1){

            $stmt->bind_result($id, $url, $date, $channel, $icon, $source, $fname, $lname, $account);
            while($stmt->fetch()){

                // Add table rows to list
                $list .= '<tr class="utm">';
                $list .= '<th scope="row">';
                    //channel information
                    $list .= '<div class="media align-items-center">';
                        $list .= '<img alt="'.$channel.'" src="'.$site_URL.'assets/img/icons/channels/'.$icon.'" class="avatar avatar-xs">';
                    $list .= '</div>';
                $list .= '</th>';
                $list .= '<td>';
                //source info
                $list .= $source;
                $list .= '</td>';
                $list .= '<td class="wrappable">';
                //url info
                $list .= '<div id="url-'.$id.'">';
                $list .= $url;
                $list .= '</div>';
                $list .= '</td>';
                $list .= '<td>';
                //date info
                $list .= $date;
                $list .= '</td>';
                $list .= '<td>';
                //created by info
                if(!empty($fname)) {
                $list .= $fname.' '.$lname;
                }else {
                $list .= $account;
                }
                $list .= '</td>';
                $list .= '<td>';
                //action info
                $list .= '<a data-clipboard-text="'.$url.'" class="action-item copy" data-toggle="tooltip" data-placement="top" title="Copy URL with UTM"><i class="far fa-copy"></i></a>';
                //$list .= '<a href="'.$site_URL.'application/utms/edit-utm.php?utm='.$id.'" class="action-item" data-toggle="tooltip" data-placement="top" title="Edit URL with UTM"><i class="fas fa-edit"></i></a>';
                $list .= '<a href="'.$site_URL.'application/utms/delete-utm.php?source=list&utm='.$id.'" class="action-item text-danger" data-toggle="tooltip" data-placement="top" title="Delete URL with UTM"><i class="fas fa-trash-alt"></i></a>';
                $list .= '</td>';

                $list .= '</tr>';

            }
        }
    }
 }

include ('includes/header.php');
include ('includes/dashboard/dashboard-common-head.php');
include ('includes/dashboard/basic_dashboard.php');
include ('includes/dashboard/dashboard-common-foot.php');
include ('includes/footer.php'); ?>