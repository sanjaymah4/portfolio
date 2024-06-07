<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['submit']))
{
    $name = $_POST['name'])
    $email = $_POST['email'])
    $subject = $_POST['subject'])
    $message = $_POST['message'])

    <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'awtmail.awt.cloud';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@awtmail.awt.cloud';                     //SMTP username
    $mail->Password   = 'Info@12345#####';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@sanjaymaharjann.com.np', 'Contact Form');
    $mail->addAddress('accessworldtec@outlook.com', 'Accessworldtec');     //Add a recipient
    

        //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>