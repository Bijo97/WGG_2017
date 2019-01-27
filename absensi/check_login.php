<?php
	include "connect.php";
	session_start();
	$nrp = $_POST['nrp'];
	$pass = $_POST['pass'];
	$fetchdata = mysql_fetch_array(mysql_query("SELECT COUNT(*) as cek FROM user WHERE username = $nrp AND password LIKE '".$pass."'"));
	if ($fetchdata['cek'] == 1) {
		$_SESSION['nrp'] = $nrp;
		header("Location: index.php");
	} else {
		echo "<script>alert('NRP atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='0; url=https://wgg.petra.ac.id/absensi' />";
	}
?>