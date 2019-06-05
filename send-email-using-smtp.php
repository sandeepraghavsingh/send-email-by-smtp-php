<!DOCTYPE html>
<html>
<body>

<h2>Send Email Using SMTP</h2>

<form action="" method="POST"> 
<h3>Enter SMTP detials</h3>
<hr>
  Email User Name:<br>
  <input type="text" name="email_username" value="" placeholder="Enter SMTP Username">
  <br>
  Email Password:<br>
  <input type="text" name="email_pass" value="" placeholder="Enter SMTP email password">
  <h3>Email Address for which you want to send email</h3>
  Email To:<br>
  <input type="text" name="email_to" value="" placeholder="Enter Email address">   
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the Email will be sent to a page called "/action_page.php".</p>

</body>
</html>
<?php
if(isset($_POST['email_to'])){
    require_once('PHPMailer/class.phpmailer.php');
    $email_host = 'smtp.gmail.com';
    $email_username = $_POST['email_username'];
    $email_pass = $_POST['email_pass']; 
    $email_port = 587;
	
	
	
	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = $email_host;                       // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $email_username;      // SMTP username: 
	$mail->Password = $email_pass;               // SMTP password: 
	$mail->SMTPSecure = 'tls';
	$mail->Port = $email_port;
	$mail->setFrom('info@babasolution.com', 'BabaSolution');
	$mail->addAddress($_POST['email_to'],'Baba Solution');

	$mail->WordWrap = 50; 
	$mail->isHTML(false);                    // Set email format to HTML

    $mail->Subject = "Baba Solution :: Test Email";
    $mail->Body    = "Hi, Testing email";
   
    $mail->Send();
    echo "<h1 align='center;'>Email sent successfully. Please check email id ".$_POST['email_to']."</h1>";
}     

?>