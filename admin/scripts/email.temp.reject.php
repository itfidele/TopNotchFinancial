<?php

//$email = "hubertithug@gmail.com";
//$names = "Hubert IT";
//$price = "$500.00";
//$pass  = "VIP Pass" ;
//$date = date("M d, Y");

$subject = "TARAMA EVENT";

date_default_timezone_set('Etc/UTC');

require '../libs/PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'devslab.io';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "notifications@devslab.io";

//Password to use for SMTP authentication
$mail->Password = "Us)ZpH1LpMh1"; 

//Set who the message is to be sent from
$mail->setFrom('notifications@devslab.io', 'TARAMA EVENT');

//Set an alternative reply-to address
$mail->addReplyTo('notifications@devslab.io', 'TARAMA EVENT');

//Set who the message is to be sent to
$mail->addAddress("$email", "$first_name");

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('../libs/PHPMailer/contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->Body = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Event Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 100px;
            height: auto;
        }

        .content {
            padding: 20px;
            border-top: 1px solid #ccc;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class='container'>
    <div class='header'>
        <img class='logo' src='https://tarama.ai/images/favicon.png' alt='Event Logo'>
        <h1>Event Registration Confirmation</h1>
    </div>
    <div class='content'>
        <p>Hello " . $first_name . ",</p>
        <p>We regret to inform you that your registration application has been declined. Thank you for your interest.</p>
        <br/>
        <p>If you have any questions, feel free to contact us.</p>
        <p>Best regards,<br>Your Event Team</p>
    </div>
    <div class='footer'>
        <p>&copy; 2023 Your Event Company. All rights reserved.</p>
    </div>
</div>
</body>
</html>

";

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
//    $alert  = "success";
//    $msg    = $message;
//    require("templates/alert.php");
}

?>

