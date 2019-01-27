<?php

include "connect.php";
$nrp = $_POST['nrp'];
$password = $_POST['password'];

$login  = mysql_query("SELECT * FROM adminpanel WHERE nrp_user='".$nrp."' AND password_user='".$password."'");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['nrp_user']=$r['nrp'];
  $_SESSION['password_user']=$r['password'];
  if($r['id_divisi']==1){
  header('location:../adminpanel/1.php');
  }
  else if($r['id_divisi']==2){
  echo"A";
  }
}
else{
  echo "<center>Login gagal! Username & password salah<br>";
  echo "<a href=home.php><b>ULANGI LAGI</b></a></center>";
  echo $nrp;
}
?>