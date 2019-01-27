<?php
	$con = mysql_connect("localhost", "std_wggpetra_it", "Martabakmanis15");
	mysql_select_db("std_wggpetra_2017", $con);
	$nrp = $_POST['nrp'];
	if (isset ($_POST['jaket'])) {
		$x = 1;
	} else {
		$x = 0;
	}
	if (isset ($_POST['muts'])) {
		$y = 1;
	} else {
		$y = 0;
	}
	$kueri = mysql_query("UPDATE almamuts SET _jaket = '$x' WHERE nrp = '$nrp'");
	$kueri = mysql_query("UPDATE almamuts SET _muts = '$y' WHERE nrp = '$nrp'");
	header("location:form_alma_muts.php");
?>