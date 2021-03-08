<?php
echo $_SESSION["count"];
// check to see if this is a newly logged in session to fire login event
if (isset($_GET['loggedin']) && $_SESSION["count"]==0) {
?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
	'event' : 'login',
	'loginMethod' : 'email', // this should be replaced with an actual login method (when others are added)
	'utm_acct_type':'<?php echo $_SESSION["utm_acct_type"]; ?>', // this shows whether the account is enabled for basic or custom UTMs
	'business_type':'<?php echo $_SESSION["business_type"]; ?>' // this shows whether the account is NFP, Superuser, business or agency
});
</script>
<?php
    $_SESSION["count"]=1;
} ?>