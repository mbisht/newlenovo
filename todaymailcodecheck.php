<?php
$to      = 'mayankbisht.com@gmail.com';
$subject = 'New sendmail test';
$message = 'If we can read this, it means that our fake Sendmail setup works!';
$headers = 'From: mayankbisht.com@gmail.com' . "\r\n" .
           'Reply-To: mayankbisht.com@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
	echo 'Mayank mail didnot sent';
} else {
	echo 'Hello mayank'; 
	echo '<br/>';
    die('Failure: Email was not sent!');
	//echo 'Not send now!';
}
?>