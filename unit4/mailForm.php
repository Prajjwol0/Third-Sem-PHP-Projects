<?php
// Include PHPMailer classes manually
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// User data (replace with dynamic values if needed)
$name='John Doe';
$email="user@example.com";
$comments = "Hello, this is a test message.";

$mail = new PHPMailer(true);

try{
    // SMTP settings (Gmail example)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com';
    $mail->Password = 'your_app_password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
     $mail->setFrom('your_email@gmail.com', 'Contact Form'); 
    $mail->addAddress('recipient@example.com') ; // Recipient email
    $mail->addReplyTo($email, $name); // Reply goes to user

    // Email content
    $mail->isHTML(false); // Plain text email
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body = "Name: $name\nEmail: $email\nComments:\n$comments";

    // Send email
    $mail->send();
    echo "Message sent successfully";
} catch (Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>