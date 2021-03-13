<!-- Scripts -->
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="<?php echo $site_URL; ?>assets/js/purpose.core.js"></script>
  <!-- Page JS -->
  <script src="<?php echo $site_URL; ?>assets/libs/swiper/dist/js/swiper.min.js"></script>
  <!-- Purpose JS -->
  <script src="<?php echo $site_URL; ?>assets/js/purpose.js"></script>
  <!-- UTMBUilder JS -->
  <?php
  if(strpos($_SERVER['REQUEST_URI'],'dashboard.php') !==false) {
  ?>
  <script src="<?php echo $site_URL; ?>assets/js/utmbuilder.js" onload="getGreeting()"></script>
  <?php
  }else {
  ?>
  <script src="<?php echo $site_URL; ?>assets/js/utmbuilder.js"></script>
  <?php
  }
  ?>

  <!-- Fire events -->
  <?php
  // check to see if this is a newly logged in session to fire login event
  if(isset($_GET['loggedin']) && $_SESSION["count"]==0) {
  ?>
  <script>
      window.dataLayer.push({
        'event' : 'login',
        'loginMethod' : 'email', // this should be replaced with an actual login method (when others are added)
        'utm_acct_type':'<?php echo $_SESSION["utm_acct_type"]; ?>', // this shows whether the account is enabled for basic or custom UTMs
        'business_type':'<?php echo $_SESSION["business_type"]; ?>' // this shows whether the account is NFP, Superuser, business or agency
      });

      // Set storage for account types
      if (storageAvailable('localStorage')) {
        // Yippee! We can use localStorage awesomeness
        localStorage.setItem('utm_acct_type','<?php echo $_SESSION["utm_acct_type"]; ?>');
        localStorage.setItem('business_type','<?php echo $_SESSION["business_type"]; ?>');
      }
  </script>
  <?php
      $_SESSION["count"]=1;
  }
  // Check to see if the recover password event is required
  else if(isset($_GET['recovered'])) {
  ?>
  <script>
    window.dataLayer.push({
    	'event' : 'password',
    	'password_action' : 'recover' // this should be replaced with an actual login method (when others are added)
    });
  </script>
  <?php
  }
  // Check to see if the reset password event is required
  else if(isset($_GET['reset'])) {
  ?>
  <script>
      window.dataLayer.push({
      	'event' : 'password',
      	'password_action' : 'reset' // this should be replaced with an actual login method (when others are added)
      });
  </script>
  <?php
  }
  ?>
</body>

</html>