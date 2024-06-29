<?php

//$email = "hubertithug@gmail.com";
//$names = "Hubert IT";
//$price = "$500.00";
//$pass  = "VIP Pass" ;
//$date = date("M d, Y");

$subject = "Your trace tour pass";

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
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
$mail->Host = 'business72.web-hosting.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "itike@itike.io";

//Password to use for SMTP authentication
$mail->Password = "WSr-FhtfN,@M";

//Set who the message is to be sent from
$mail->setFrom('itike@itike.io', 'Trace tour');

//Set an alternative reply-to address
$mail->addReplyTo('support@itike.io', 'Itike Support Team');

//Set who the message is to be sent to
$mail->addAddress("hubert@devslab.io", "$name");

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('../libs/PHPMailer/contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->Body = "<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Trace Awards Tour Kigali Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
          .content p {
            margin-bottom: 15px;
            line-height: 1.8; /* Adjust line spacing for paragraphs */
        }

        .content ul {
            margin-bottom: 15px;
        }

        .main-container{
            background: #F4F4F4;
            padding:20px !important;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #000000;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            color: #f2f2f2;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 200px;
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
<div class='main-container'>

    <div class='container'>
        <div class='header' style='color: #B18333'>
            <img  class='logo' src='https://tracetour.tarama.ai/assets/img/newlogo.png' alt='Trace tour Rwanda'>
            <h1>  Trace Awards Tour Kigali <br> Registration Confirmation</h1>
        </div>
        
        <div class='content'>
            <p>Hello " . $first_name . ",</p>
            <p>Thank you for registering for the Trace Awards Tour Kigali.  We are delighted that you are able to join us for this thrilling celebration of Rwandan music and talent, in the presence of the Rwandan nominees for the Trace Awards.</p>
            <p>Event Details:</p>
            <ul>
                <li><strong>Event:</strong> Trace Awards Tour  Kigali,</li>
                <li><strong>Date:</strong> Friday 25 August 2023</li>
                <li><strong>Time:</strong> 6pm</li>
                <li><strong>Location:</strong> Pili Pili, 12 KG 303 St, Kigali</li>
            </ul>
            <p>
                Kindly present this QR code at the entrance for seamless verification. We look forward to celebrating with you.
            </p>
            <p>
            <center>
                <img src=" . $cleanedUrl . " alt='QR'  id='qr' width='50%'>
            </center>
            
            </p>
            <b>NB: Please do not share this confirmation email with anyone, once the QR above is used, you will no longer be able to use it.</b>
            <p>We look forward to seeing you on the 25th. <br>
                In the meantime, Please do not hesitate to contact us if you require any further information.  Alistair or Joanna from our team will be happy to answer any of your questions </p>
            <p>
                <br>
                               <!--<b>Alistair</b> :  +250 792401177
//                <br>-->
                                <!--<b>Joanna:</b> +250 782 293 341-->
            </p>
            <p>Best regards,<br>The Trace Awards Tour Team</p>

            <b>
                #TRACEAWARDSTOUR <br> #TRACEAWARDSANDFESTIVAL
            </b>
            
             <br>

            <img src='https://tracetour.tarama.ai/assets/img/sponsors.png' width='100%'>
            <hr>

        </div>
        <div class='footer'>
            <p>&copy; 2023 Trace. All rights reserved.</p>
        </div>
    </div>
</div><!---->
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

