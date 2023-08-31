<?php // Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
 
// Create an instance of PHPMailer class 
$mail = new PHPMailer;





// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'onscreeniit@gmail.com';
$mail->Password = 'onscreen@iit20';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;






// Sender info 
$mail->setFrom('onscreeniit@gmail.com', 'SenderName'); 
// $mail->addReplyTo('onscreeniit@gmail.com', 'SenderName'); 
 
// Add a recipient 
$mail->addAddress('anujan.20200047@iit.ac.lk'); 
 
// // Add cc or bcc  
// $mail->addCC('cc@example.com'); 
// $mail->addBCC('bcc@example.com'); 
 
// Email subject 
$mail->Subject = 'Send Email via SMTP using PHPMailer'; 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Email body content 
$mailContent = ' 
    <h2>Send HTML Email using SMTP Server in PHP</h2> 
    <p>It is a test email by CodexWorld, sent via SMTP server with PHPMailer using PHP.</p> 
    <p>Read the tutorial and download this script from <a href="https://www.codexworld.com/">CodexWorld</a>.</p>'; 
$mail->Body = $mailContent; 
 
// Send email 
if(!$mail->send()){ 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
}else{ 
    echo 'Message has been sent.'; 
}




?>