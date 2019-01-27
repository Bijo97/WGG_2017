<?php
	include "connect.php";

	$id = $_POST['id'];
	$sql = "SELECT * FROM news WHERE id = ".$id;
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	echo $row['isi'];
?>