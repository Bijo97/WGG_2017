<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];
if ($username == "bph" && $password == "survivor"){
	$_SESSION['admin'] = "bph";
	header("Location: list_contact.php");
} else {
	header("Location: index.php");
}

?>