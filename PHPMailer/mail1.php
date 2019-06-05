<?php  
 
require("class.phpmailer.php"); // path to the PHPMailer class
 
$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
//$mail->Mailer = "smtp";
$mail->Mailer = "telnet";
$mail->Host = "ssl://smtp.gmail.com";
//$mail->Port = 465;
$mail->Port = 25;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "debal.chakr@gmail.com"; // SMTP username
$mail->Password = "enuke123321"; // SMTP password 
 
$mail->From     = "debal.chakr@gmail.com";
//$mail->AddAddress("mukesh.kumar@enukesoftware.com");  
$mail->AddAddress("mukesh.yngmedia@gmail.com");   

$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi!This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>
