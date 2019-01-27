<?php
	include "connect.php";
	$nrp = $_GET['nrp'];
	$sql = "select * from pac where nrp = '".$nrp."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	echo $row['nama'];
?>