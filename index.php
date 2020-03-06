<?php
if($_POST['submit']){

	$to = $_POST['email'];
	$subject="Caterplace Greeting";


	$headers  = "From: info@caterplace.com\n";
	$headers .= "X-Mailer: PHP/" . phpversion()."\n"; // mailer
	$headers .= "Content-Type: text/html; charset=iso-8859-1\n";


	$mail_body = "Hi, This is  a test PHP mail from caterplace";

	echo mail($to,$subject,$mail_body,$headers);
}

?>


<html>
<form method="POST">
<input type="email" name="email" placeholder="enter your email address" />
<input type="submit"  name="submit"/>
</form>
</html>
