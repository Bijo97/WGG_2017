<?php
	include "connect.php";

	$id = $_POST['id'];
	$sql = "SELECT * FROM timeline WHERE id = ".$id;
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	echo $row['kegiatan'];
?>