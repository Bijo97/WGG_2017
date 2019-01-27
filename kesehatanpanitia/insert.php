<?php
	session_start();
	include "connect.php";

	
	if(isset($_POST['submit']))
	{
		function validate_data($data)
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = strip_tags($data);
		  $data = htmlspecialchars($data);
		  $data = strtoupper($data);
		  return $data;    
		}
		 
		$nama = validate_data($_POST['nama']);
		$nrp = $_POST['NRP'];
		$jk = $_POST['jeniskelamin'];
		$tll = validate_data($_POST['tll']);
		$tgl = validate_data($_POST['tgl']);
		$bb = $_POST['bb'];
		$tb = $_POST['tb'];
		$alamat = validate_data($_POST['alamat']);
		$no_hp = $_POST['no_hp'];
		$alamat_sby = validate_data($_POST['alamat_sby']);
		$nama_wali = validate_data($_POST['nama_wali']);
		$alamat_wali = validate_data($_POST['alamat_wali']);
		$no_hp_wali = $_POST['hp_wali'];
		
		//$_SESSION['nrp'] =  $nrp;
		
		$query = "SELECT nrp FROM kesehatan_panitia WHERE nrp = '".$nrp."'"; 

		$result = mysql_query($query); 
		if (!$result) { die(mysql_errno()." : ".mysql_error()); } 

		/* Now lets check to see if we got any results back */ 

		if (mysql_num_rows($result) > 0) 
		{
		  echo "<center>Maaf, Anda telah mengisi form kesehatan sebelumnya.</center>";
		  echo "<center><a href=index.php>Kembali ke halaman sebelumnya</a></center>";

		}  
		if(isset($_POST['p1'])){
			$p1 = 1;
		}
		else{
			$p1 = 0;
		}
		if(isset($_POST['p2'])){
			$p2 = 1;
		}
		else{
			$p2 = 0;
		}
		if(isset($_POST['p3'])){
			$p3 = 1;
		}
		else{
			$p3 = 0;
		}
		if(isset($_POST['p4'])){
			$p4 = 1;
		}
		else{
			$p4 = 0;
		}
		if(isset($_POST['p5'])){
			$p5 = 1;
		}
		else{
			$p5 = 0;
		}
		if(isset($_POST['p6'])){
			$p6 = 1;
		}
		else{
			$p6 = 0;
		}
		if(isset($_POST['p7'])){
			$p7 = 1;
		}
		else{
			$p7 = 0;
		}
		if(isset($_POST['p8'])){
			$p8 = 1;
		}
		else{
			$p8 = 0;
		}
		if(isset($_POST['p9'])){
			$p9 = 1;
		}
		else{
			$p9 = 0;
		}
		if(isset($_POST['p10'])){
			$p10 = 1;
		}
		else{
			$p10 = 0;
		}
		if(isset($_POST['p11'])){
			$p11 = 1;
		}
		else{
			$p11 = 0;
		}
		if(isset($_POST['p12'])){
			$p12 = 1;
		}
		else{
			$p12 = 0;
		}
		if(isset($_POST['p13'])){
			$p13 = 1;
		}
		else{
			$p13 = 0;
		}
		if(isset($_POST['p14'])){
			$p14 = 1;
		}
		else{
			$p14 = 0;
		}
		if(isset($_POST['p15'])){
			$p15 = 1;
		}
		else{
			$p15 = 0;
		}
		if(isset($_POST['p16'])){
			$p16 = 1;
		}
		else{
			$p16 = 0;
		}
		if(isset($_POST['p17'])){
			$p17 = 1;
		}
		else{
			$p17 = 0;
		}
		if(isset($_POST['p18'])){
			$p18 = 1;
		}
		else{
			$p18 = 0;
		}
		if(isset($_POST['p19'])){
			$p19 = 1;
		}
		else{
			$p19 = 0;
		}
		if(isset($_POST['p20'])){
			$p20 = 1;
		}
		else{
			$p20 = 0;
		}
		if(isset($_POST['p21'])){
			$p21 = 1;
		}
		else{
			$p21 = 0;
		}
		if(isset($_POST['p22'])){
			$p22 = 1;
		}
		else{
			$p22 = 0;
		}
		if(isset($_POST['p23'])){
			$p23 = 1;
		}
		else{
			$p23 = 0;
		}
		if(isset($_POST['p24'])){
			$p24 = 1;
		}
		else{
			$p24 = 0;
		}
		if(isset($_POST['p25'])){
			$p25 = 1;
		}
		else{
			$p25 = 0;
		}
		if(isset($_POST['p26'])){
			$p26 = 1;
		}
		else{
			$p26 = 0;
		}
		if(isset($_POST['p27'])){
			$p27 = 1;
		}
		else{
			$p27 = 0;
		}		
		if(isset($_POST['p28'])){
			$p28 = 1;
		}
		else{
			$p28 = 0;
		}
		if(isset($_POST['p29'])){
			$p29 = 1;
		}
		else{
			$p29 = 0;
		}
		if(isset($_POST['p30'])){
			$p30 = 1;
		}
		else{
			$p30 = 0;
		}
		if(isset($_POST['p31'])){
			$p31 = 1;
		}
		else{
			$p31 = 0;
		}
		if(isset($_POST['p32'])){
			$p32 = 1;
		}
		else{
			$p32 = 0;
		}
		if(isset($_POST['p33'])){
			$p33 = 1;
		}
		else{
			$p33 = 0;
		}
		if(isset($_POST['p34'])){
			$p34 = 1;
		}
		else{
			$p34 = 0;
		}
		if(isset($_POST['p35'])){
			$p35 = 1;
		}
		else{
			$p35 = 0;
		}
		if(isset($_POST['p36'])){
			$p36 = 1;
		}
		else{
			$p36 = 0;
		}
		if(isset($_POST['p37'])){
			$p37 = 1;
		}
		else{
			$p37 = 0;
		}
		if(isset($_POST['p38'])){
			$p38 = 1;
		}
		else{
			$p38 = 0;
		}
		if(isset($_POST['p39'])){
			$p39 = 1;
		}
		else{
			$p39 = 0;
		}
		if(isset($_POST['p40'])){
			$p40 = 1;
		}
		else{
			$p40 = 0;
		}
		if(isset($_POST['p41'])){
			$p41 = 1;
		}
		else{
			$p41 = 0;
		}
		if(isset($_POST['p42'])){
			$p42 = 1;
		}
		else{
			$p42 = 0;
		}
		if(isset($_POST['p43'])){
			$p43 = 1;
		}
		else{
			$p43 = 0;
		}
		if(isset($_POST['p44'])){
			$p44 = 1;
		}
		else{
			$p44 = 0;
		}
		if(isset($_POST['p45'])){
			$p45 = 1;
		}
		else{
			$p45 = 0;
		}
		if(isset($_POST['p46'])){
			$p46 = 1;
		}
		else{
			$p46 = 0;
		}
		if(isset($_POST['p47'])){
			$p47 = 1;
		}
		else{
			$p47 = 0;
		}
		if(isset($_POST['p48'])){
			$p48 = 1;
		}
		else{
			$p48 = 0;
		}
		if(isset($_POST['p49'])){
			$p49 = 1;
		}
		else{
			$p49 = 0;
		}
		if(isset($_POST['p50'])){
			$p50 = 1;
		}
		else{
			$p50 = 0;
		}
		if(isset($_POST['p51'])){
			$p51 = 1;
		}
		else{
			$p51 = 0;
		}
		if(isset($_POST['p52'])){
			$p52 = 1;
		}
		else{
			$p52 = 0;
		}
		$p53 = $_POST['p53'];
		if(isset($_POST['nama']))
		{
			$sql = "INSERT INTO `kesehatan_panitia` VALUES ('','".$nama."','".$nrp."','".$jk."','".$tll."',
			'".$tgl."','.$bb.','.$tb.','".$alamat."','".$no_hp."','".$alamat_sby."','".$nama_wali."','".$alamat_wali."','".$no_hp_wali."','".$p1."','".$p2."','".$p3."','".$p4."','".$p5."','".$p6."','".$p7."','".$p8."',
			'".$p9."','".$p10."','".$p11."','".$p12."','".$p13."','".$p14."','".$p15."','".$p16."','".$p17."','".$p18."','".$p19."',
			'".$p20."','".$p21."','".$p22."','".$p23."','".$p24."','".$p25."','".$p26."','".$p27."','".$p28."','".$p29."',
			'".$p30."','".$p31."','".$p32."','".$p33."','".$p34."','".$p35."','".$p36."','".$p37."','".$p38."','".$p39."',
			'".$p40."','".$p41."','".$p42."','".$p43."','".$p44."','".$p45."','".$p46."','".$p47."','".$p48."','".$p49."',
			'".$p50."','".$p51."','".$p52."','".$p53."',NULL)";
			$result = mysql_query($sql);
				header("Location: keterangan.php");	
		} else {
			header("Location: home.php?err=1");
		}
	}	
	
?>


