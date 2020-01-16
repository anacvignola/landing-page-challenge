<?php
require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');
require_once('PHPMailer/PHPMailerAutoload.php');

$name = $_POST["name"];   
$email = $_POST["email"]; 
$clinic = $_POST["clinic"]; 
$ddd = $_POST["ddd"];
$mobile = $_POST["mobile"];   // Get field values
$Submit = "Name: $name\n\n<br><br>E-mail: $email\n\n<br><br>Clinica mais proxima: $clinic\n\n<br><br>DDD: $ddd\n<br><br>Telemóvel: $mobile\n<br>";
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'email@gmail.com';                 // SMTP username
    $mail->Password = 'password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('sendemail@gmail.com', 'Sends');
    $mail->addAddress('email@gmail.com', 'receive');     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Detais download Ebook';
    $mail->Body    = $Submit;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo '<br><b>Form not sent :(<b>';
} else {
    echo '<br><b>Form sent successfully!<b>';
}