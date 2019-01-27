<?php
	session_start();
	include "connect.php";

	$idpesan = $_GET['idpesan'];
	$email = $_GET['email'];
	$kategori = $_GET['kategori'];
	
	$sql = "SELECT * FROM contactbalas WHERE idpesan = ".$idpesan;
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();
								                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'welcomegratefulgeneration2017@gmail.com';            // SMTP username
	$mail->Password = 'wgg2017official';                        // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('welcomegratefulgeneration2017@gmail.com', 'Panitia WGG 2017');
	$mail->addAddress($email);             // Name is optional
	$mail->addReplyTo('welcomegratefulgeneration2017@gmail.com', 'Panitia WGG 2017');
	$mail->isHTML(true);                                  // Set email format to HTML

	//$base_url = "http://ic.petra.ac.id/sysd/confirm.php";

	$mail->Subject = $row['subject'];
	$mail->Body = $row['balasan'];

	if(!$mail->send()) {
	    echo "Can't send email... ";
	} else {
		$kueri = mysql_query("UPDATE contact SET status = 2 WHERE id = ".$idpesan);

		if ($kategori == 1){
			header("Location: list_contact.php");
		} else if ($kategori == 2){
			header("Location: list_contact2.php");
		} else if ($kategori == 3){
			header("Location: list_contact3.php");
		}
	}
?>