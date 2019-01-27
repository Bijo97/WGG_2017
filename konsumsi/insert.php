<?php
	include "connection.php";

	$nama = $_POST['txtnama'];
	$nrp = $_POST['txtnrp'];
	$keterangan= $_POST['keterangan'];
	$alergi = $_POST['txtalergi'];

	
	$hasil = "INSERT INTO vege_vegan values('".$nama."','".$nrp."','".$alergi."','".$keterangan."')";

	mysql_query($hasil);
	header("Location: home.php");
	
?>