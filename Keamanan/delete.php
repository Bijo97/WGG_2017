<?php
include "connect.php";
$id = $_GET['id'];
$sql = mysql_query("DELETE FROM Keamanan WHERE id = ".$id);
	if ($sql){
		header("Location: view.php");
	} else {
		echo "Gagal...";
	}
?>