<?php
$server   = "wgg.petra.ac.id";
$username = "wggpetraac";
$password = "martabakmanis15";
$database = "wggpetra_2017";

$koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');

if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');	
}

?>