<?php
	include "connect.php";

	$idpesan = $_POST['idpesan'];
	$balasan = $_POST['balasan'];

	$sql = "UPDATE contactbalas SET balasan = '".$balasan."' WHERE idpesan = ".$idpesan;
	$result = mysql_query($sql);

	header("Location: detail.php?id=".$idpesan);
?>