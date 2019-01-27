<?php
	include "connect.php";

	$idpesan = $_POST['idpesan'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$balasan = $_POST['balasan'];

	date_default_timezone_set('Asia/Jakarta');
  	$dats = date("Y-m-d H:i:s");

	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();
								                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'kandangmonyet16@gmail.com';            // SMTP username
	$mail->Password = 'kapokmukapan';                        // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('kandangmonyet16@gmail.com', 'Raja Monyet');
	$mail->addAddress($email);             // Name is optional
	$mail->addReplyTo('kandangmonyet16@gmail.com', 'Raja Monyet');
	$mail->isHTML(true);                                  // Set email format to HTML

	//$base_url = "http://ic.petra.ac.id/sysd/confirm.php";

	$mail->Subject = $subject;
	$mail->Body = $balasan;

	if(!$mail->send()) {
	    echo "Can't send email... ";
	} else {
		$kueri = mysql_query("UPDATE contact SET status = 2 WHERE id = ".$idpesan);

		header("Location: list_contact.php");
	}
?>