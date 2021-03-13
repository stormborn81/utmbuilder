
<?php
// Check logged in status
 include ('includes/account/status.php');
  include ('includes/config/config.php');

 // Set Page meta data
 $pName = 'Dashboard - UTMBuilder.space';
 $pDesc = 'UTM Builder is a tool to support marketing teams in building UTM tagging links for optimal analysis of performance.';

 include ('includes/header.php'); ?>
<?php include ('includes/dashboard/dashboard-common-head.php'); ?>
<?php include ('includes/dashboard/basic_dashboard.php'); ?>
<?php include ('includes/dashboard/dashboard-common-foot.php'); ?>
<?php include ('includes/footer.php'); ?>