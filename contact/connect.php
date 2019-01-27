<?php
$server   = "localhost";
$username = "std_wggpetra_it";
$password = "Martabakmanis15";
$database = "std_wggpetra_2017";

$koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');

if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');	
}

?>