<?php
	include "connect.php";

	$idpesan = $_GET['idpesan'];
	$balasan = $_GET['balasan'];

	date_default_timezone_set('Asia/Jakarta');
  	$dats = date("Y-m-d H:i:s");

	$kueri = mysql_query("UPDATE contactbalas SET balasan = '".$balasan."' WHERE idpesan = ".$idpesan);

	header("Location: detail.php?id=".$idpesan);
?>