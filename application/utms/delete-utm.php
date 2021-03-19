<?php
// Check logged in status
 include ('../../includes/account/status.php');
 include ('../../includes/config/config.php');

 if(!isset($_GET['utm'])) {
    if(!isset($_GET['source'])) {
        // redirect to Dashboard with error
        header("location: ../../dashboard.php?action=utm-delete-error&error=no-source-utm");
    }else{
        // redirect to source page with error
        if($sourceLoc == 'list') {
            header("location: utm-listing.php?action=utm-delete-error&error=no-utm");
        } else {
            // default to dashboard
            header("location: ../../dashboard.php?action=utm-delete-error&error=no-utm");
        }
    }
 } else {
    if(!isset($_GET['source'])) {
            // redirect to Dashboard with error
            header("location: ../../dashboard.php?action=utm-delete-error&error=no-source");
    }else{
        $sourceLoc = $_GET['source'];
        // statement SQL
        $sql = "DELETE FROM urlutm WHERE ID = ?";

        //prepare statement
         if($stmt = $mysqli->prepare($sql)){
             $stmt->bind_param("s", $param_uID);

             // Set parameters
             $param_uID = $_GET['utm'];

             if($stmt->execute()){
                // redirect to source with success message
                if($sourceLoc == 'list') {
                    header("location: utm-listing.php?action=utm-delete");
                } else {
                    // default to dashboard
                    header("location: ../../dashboard.php?action=utm-delete");
                }

             } else {
               // redirect to source with error
               if($sourceLoc == 'list') {
                   header("location: utm-listing.php?action=utm-delete-error&error=delete-error-stmt");
               } else {
                   // default to dashboard
                   header("location: ../../dashboard.php?action=utm-delete-error&error=delete-error-stmt");
               }
             }

         } else {
            // redirect to source with error
            if($sourceLoc == 'list') {
                   header("location: utm-listing.php?action=utm-delete-error&error=delete-error-mysqli");
               } else {
                   // default to dashboard
                   header("location: ../../dashboard.php?action=utm-delete-error&error=delete-error-mysqli");
               }
         }
    }


 }