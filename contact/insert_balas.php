<?php
	session_start();
	include "connect.php";

	$idpesan = $_POST['idpesan'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$pertanyaan = $_POST['pertanyaan'];
	$balasan = $_POST['balasan'];

	date_default_timezone_set('Asia/Jakarta');
  	$dats = date("Y-m-d H:i:s");

  	$abc = "SELECT nama FROM user WHERE username = '".$_SESSION['username']."'";
  	$def = mysql_query($abc);
  	$ghi = mysql_fetch_assoc($def);

	$sql = "INSERT INTO contactbalas VALUES ('', ".$idpesan.", '".$subject."', '".$pertanyaan."', '".$balasan."', '$dats', '".$ghi['nama']."')";
	$result = mysql_query($sql);

	$kueri = mysql_query("UPDATE contact SET status = 1 WHERE id = ".$idpesan);

	header("Location: list_contact.php");
?>