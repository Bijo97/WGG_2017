<?php
session_start();
include "connect.php";

$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT COUNT(*) AS jumlah FROM user WHERE username = '".$username."' AND password = md5('".$password."')";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

if ($row['jumlah'] >= 1){
	$_SESSION['username'] = $username;
	$_SESSION['user'] = "koor";
	header("Location: list_contact.php");
} else if ($username == "bph" && $password == "survivor"){
	$_SESSION['user'] = "bph";
	header("Location: list_contact.php");
} else {
	header("Location: index.php");
}

?>