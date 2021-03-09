<?php

// Set up PHPMailer Function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    // Set up ability to use PHP Mailer
    /* Exception class. */
    require 'PHPMailer/src/Exception.php';

    /* The main PHPMailer class. */
    require 'PHPMailer/src/PHPMailer.php';

    /* SMTP class, needed if you want to use SMTP. */
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(TRUE);

    /* Open the try/catch block. */
    try {
       /* Set the mail sender. */
       $mail->setFrom('utmbuilderspace@gmail.com', 'UTMBuilder.Space');

       $mail->CharSet =  "utf-8";
       //Enable SMTP debugging.
       //$mail->SMTPDebug = 3;
       $mail->IsSMTP();
       // enable SMTP authentication
       $mail->SMTPAuth = true;
       // GMAIL username
       $mail->Username = "utmbuilderspace@gmail.com";
       // GMAIL password
       $mail->Password = "BluePlate5818!";
       $mail->SMTPSecure = "ssl";
       // sets GMAIL as the SMTP server
       $mail->Host = "smtp.gmail.com";
       // set the SMTP port for the GMAIL server
       $mail->Port = "465";

       /* Add a recipient. */
       $mail->addAddress($email, '');

       /* Set the subject. */
       $mail->Subject = 'This is your password reset for UTMBuilder.space';

       /* Set the mail message body. */
       $mail->isHTML(true);
       // Eventually change this to a variable so that multiple emails can be sent from this script
       $mail->Body = 'Click On This Link to '.$link.' at UTMBuilder.space';

       /* Finally send the mail. */
       $mail->send();

    }
    catch (Exception $e)
    {
       /* PHPMailer exception. */
       echo $e->errorMessage();
    }
    catch (\Exception $e)
    {
       /* PHP exception (note the backslash to select the global namespace Exception class). */
       echo $e->getMessage();
    }

?>