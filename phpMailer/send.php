<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rana.mardikhi@gmail.com';             //SMTP username
        $mail->Password   = 'dqep xcqa bddf qsbx';           //App-specific SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption (SSL)
        $mail->Port       = 465;                                    //TCP port to connect to

        //Recipients
        $mail->setFrom('ranamardikhi74@gmail.com', 'Rana');
        $mail->addAddress($email);                                  //Add a recipient    

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $key = mt_rand(99999,999999);                              
        $mail->Subject = 'Your code is: '.$key;
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        // Send email
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
