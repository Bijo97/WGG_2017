<?php
$pac = $_POST['pac'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$kategori = $_POST['kategori'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$pesan = $_POST['pesan'];

if ($pac == "" || $nama == "" || $nohp == "" || $kategori == "-" || $email == "" || $subject == "" || $pesan == "") {
  header("location: index.php?status=4");
  exit;
}

if(isset($_POST['g-recaptcha-response'])){
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  header("location: index.php?status=4");
  exit;
}

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdjwSAUAAAAAMFTm6abHWUh2ycvDcjTpItaWtqx&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

if($response.success==false)
{
  header("location: index.php?status=4");
}
else
{
  date_default_timezone_set('Asia/Jakarta');
  $dats = date("Y-m-d H:i:s");
  include 'connect.php';

  mysql_query("INSERT INTO contact VALUES('', '$pac', '$nama', '$email', '$nohp', $kategori, '$subject', '$pesan', 0, '$dats')");
  //mysqli_query($con, "insert into contact (nama, email, berita) values('".$nama."', '".$email."', '".$berita."')");
  //mail($email,'Pertanyaan WGG 2015', $berita, $nama." ".$email);

  //SMTP needs accurate times, and the PHP time zone MUST be set
  //This should be done in your php.ini, but this is how to do it if you don't have access to that
  

  // require 'lib/PHPMailerAutoload.php';

  // //Create a new PHPMailer instance
  // $mail = new PHPMailer;

  // //From email address and name
  // $mail->From = $email;
  // $mail->FromName = $nama;

  // //To address and name
  // //$mail->addAddress("wgg-ukp@petra.ac.id", "OA - Welcome Grateful Generation 2016");
  // $mail->addAddress("m26415058@john.petra.ac.id", "OA - LKMM-TD XXVII");

  // //Send HTML or Plain Text email
  // $mail->isHTML(true);

  // if($c == 1){
  //   $c = "Informasi WGG";
  // }
  // if($c == 2){
  //   $c = "Kritik dan Saran";
  // }
  // $mail->Subject = "[".$c."] ".$e;
  // $mail->Body = $f;
  // $mail->send();
  header("location: index.php?status=3");
}
//}
?>