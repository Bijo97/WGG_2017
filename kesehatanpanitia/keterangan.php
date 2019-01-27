<?php
session_start();
include 'connect.php';
if(!isset($_SESSION['user'])){
	header("Location:login.php");
}
$nrp = $_SESSION['user'];
$i = 0;
$sqll = mysql_query("SELECT * FROM pertanyaan ");
$pert = array();
$pertanyaan = array();
$i = 0;
while($row_pertanyaan = mysql_fetch_assoc($sqll))
	$pert[] = $row_pertanyaan;
foreach ($pert as $a){
	//echo "sakit = {$a[pertanyaan]} <br />";
	$pertanyaan[$i] = $a['pertanyaan'];
	$i++;
}

$sql = mysql_query("SELECT * FROM kesehatan_panitia WHERE nrp = '".$nrp."'") ;
$row = mysql_fetch_assoc($sql);
$p1 = $row['p1'];
$p2 = $row['p2'];
$p3 = $row['p3'];
$p4 = $row['p4'];
$p5 = $row['p5'];
$p6 = $row['p6'];
$p7 = $row['p7'];
$p8 = $row['p8'];
$p9 = $row['p9'];
$p10 = $row['p10'];
$p11 = $row['p11'];
$p12 = $row['p12'];
$p13 = $row['p13'];
$p14 = $row['p14'];
$p15 = $row['p15'];
$p16 = $row['p16'];
$p17 = $row['p17'];
$p18 = $row['p18'];
$p19 = $row['p19'];
$p20 = $row['p20'];
$p21 = $row['p21'];
$p22 = $row['p22'];
$p23 = $row['p23'];
$p24 = $row['p24'];
$p25 = $row['p25'];
$p26 = $row['p26'];
$p27 = $row['p27'];
$p28 = $row['p28'];
$p29 = $row['p29'];
$p30 = $row['p30'];
$p31 = $row['p31'];
$p32 = $row['p32'];
$p33 = $row['p33'];
$p34 = $row['p34'];
$p35 = $row['p35'];
$p36 = $row['p36'];
$p37 = $row['p37'];
$p38 = $row['p38'];
$p39 = $row['p39'];
$p40 = $row['p40'];
$p41 = $row['p41'];
$p42 = $row['p42'];
$p43 = $row['p43'];
$p44 = $row['p44'];
$p45 = $row['p45'];
$p46 = $row['p46'];
$p47 = $row['p47'];
$p48 = $row['p48'];
$p49 = $row['p49'];
$p50 = $row['p50'];
$p51 = $row['p51'];
$p52 = $row['p52'];
?>

<!DOCTYPE html>
<html>
<head>
<style>
	form {
		border: 3px solid #f1f1f1;
		padding-top: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		padding-left: 20px;
		margin: 0 auto;
	}
	html{
		padding-top : 0px;
	}
</style>
<link rel="shortcut icon" href="../images/logowgg.png" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<title>Form Keterangan WGG 2017</title>
<meta name="theme-color" content="#1A47C4">
</head>
<body>
	 <!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<div class="container">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="../login/panel.php">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item  active">
					<a class="nav-link" href="../kesehatan/">Form Kesehatan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../konsumsi/">Form Konsumsi</a>
				</li>
			</ul>
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item">
					<b><a class="nav-link" href="../login/logout.php">Logout</a></b>
				</li>
			</ul>
		</div>
	</nav> --> 
	<div id="formku">
		<center><h3 style="margin-top: 3%;">Form Keterangan<br>Welcome Grateful Generation 2017</h3></center>
	
		<br><br>
			<div class="container">
				<div class="panel-body">
					<div class="panel panel-default">
												<form method="post" class="col-10" action="update.php">
						<h5>Mohon berikan keterangan untuk setiap penyakit yang sudah anda pilih di halaman sebelumnya:</h5>
								<?php
									if($p1 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>1. Sejarah keluarga: sakit jantung atau stroke</b></label><br/>
									<input type="hidden" name="nomerp[]" value="1"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p2 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>2. Reaksi atas obat, makanan, sengatan</b></label><br/>
									<input type="hidden" name="nomerp[]" value="2"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p3 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>3. Penyakit kelamin</b></label><br/>
									<input type="hidden" name="nomerp[]" value="3"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p4 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>4. Masalah kulit (psoriasis, eczema/dermatitis)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="4"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p5 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>5. Alergi musiman (hay fever/seasonal allergies)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="5"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p6 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>6. Tekanan darah tinggi atau stroke</b></label><br/>
									<input type="hidden" name="nomerp[]" value="6"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p7 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>7. Sering sakit kepala atau Sakit Kepala parah</b></label><br/>
									<input type="hidden" name="nomerp[]" value="7"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p8 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>8. Migrain</b></label><br/>
									<input type="hidden" name="nomerp[]" value="8"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p9 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>9. Masalah gigi dan/atau gusi</b></label><br/>
									<input type="hidden" name="nomerp[]" value="9"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p10 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>10. Epilepsy (ayan), kejang-kejang</b></label><br/>
									<input type="hidden" name="nomerp[]" value="10"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p11 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>11. Kehilangan kesadaran, pingsan</b></label><br/>
									<input type="hidden" name="nomerp[]" value="11"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p12 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>12. Tumor/ kista/ benjolan abnormal / kanker</b></label><br/>
									<input type="hidden" name="nomerp[]" value="12"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p13 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>13. Luka pada kepala, gegar otak</b></label><br/>
									<input type="hidden" name="nomerp[]" value="13"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p14 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>14. Mengunjungi cardiologist (spesialis jantung)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="14"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p15 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>15. Sakit di dada (chest pain), Dada terasa ditekan (chest pressure), Atau palpitations (berdebar-debar)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="15"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p16 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>16. Masalah Jantung (bising jantung, kelainan irama, peredaran darah, dll)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="16"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p17 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>17. Nafas pendek saat olahraga/latihan</b></label><br/>
									<input type="hidden" name="nomerp[]" value="17"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p18 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>18. Asma / Kesulitan bernafas</b></label><br/>
									<input type="hidden" name="nomerp[]" value="18"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p19 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>19. Batuk kronis, sakit paru-paru, TBC</b></label><br/>
									<input type="hidden" name="nomerp[]" value="19"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p20 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>20. Diabetes atau masalah gula darah</b></label><br/>
									<input type="hidden" name="nomerp[]" value="20"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p21 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>21. Masalah pencernaan, liver (hepatitis) atau kandung empedu</b></label><br/>
									<input type="hidden" name="nomerp[]" value="21"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p22 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>22. Penyakit Usus (Crohns, UC, reflux, dll)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="22"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p23 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>23. Muntah darah</b></label><br/>
									<input type="hidden" name="nomerp[]" value="23"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p24 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>24. Wasir, berak darah, sakit usus besar</b></label><br/>
									<input type="hidden" name="nomerp[]" value="24"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p25 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>25. Gangguan pada ginjal, kandung kemih, Infeksi saluran kencing, tdk bisa tahan kencing/berak</b></label><br/>
									<input type="hidden" name="nomerp[]" value="25"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p26 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>26. Gangguan keseimbangan / koordinasi</b></label><br/>
									<input type="hidden" name="nomerp[]" value="26"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p27 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>27. Vertigo atau claustrophobia (phobia ruang sempit & tertutup)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="27"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p28 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>28. Gangguan Makan (anorexia, bulimia, dll)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="28"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p29 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>29. Gangguan pada mata</b></label><br/>
									<input type="hidden" name="nomerp[]" value="29"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p30 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>30. Menggunakan kacamata / lensa kontak</b></label><br/>
									<input type="hidden" name="nomerp[]" value="30"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p31 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>31. Gangguan pendengaran, Infeksi telinga</b></label><br/>
									<input type="hidden" name="nomerp[]" value="31"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p32 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>32. Gagap</b></label><br/>
									<input type="hidden" name="nomerp[]" value="32"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p33 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>33. Infeksi sinus</b></label><br/>
									<input type="hidden" name="nomerp[]" value="33"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p34 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>34. Menggunakan penyangga tulang/sendi, atau menggunakan Splint</b></label><br/>
									<input type="hidden" name="nomerp[]" value="34"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p35 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>35. Gangguan tenggorokan atau gondok</b></label><br/>
									<input type="hidden" name="nomerp[]" value="35"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p36 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>36. Laki-laki: Gangguan testis, zakar, penis</b></label><br/>
									<input type="hidden" name="nomerp[]" value="36"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p37 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>37. Perempuan: Gangguan mens, payudara, paps</b></label><br/>
									<input type="hidden" name="nomerp[]" value="37"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p38 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>38. Lemah otot, lumpuh</b></label><br/>
									<input type="hidden" name="nomerp[]" value="38"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p39 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>39. Pernah operasi / konsultasi operasi</b></label><br/>
									<input type="hidden" name="nomerp[]" value="39"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p40 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>40. Ganggunan Sendi (dislokasi, terkilir, rematik)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="40"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p41 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>41. Gangguan tulang (termasuk pernah terjadi retak dalam 5 tahun terakhir)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="41"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p42 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>42. Pemakaian pin besi, pelat atau kawat yang terpasang pada tulang yang patah</b></label><br/>
									<input type="hidden" name="nomerp[]" value="42"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p43 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>43. Gangguan pada mulut atau hidung</b></label><br/>
									<input type="hidden" name="nomerp[]" value="43"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p44 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>44. Sakit punggung / leher (parah / berulang)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="44"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p45 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>45. Percobaan atau pemikiran untuk bunuh diri</b></label><br/>
									<input type="hidden" name="nomerp[]" value="45"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p46 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>46. Pendarahan /memar abnormal /kelainan darah</b></label><br/>
									<input type="hidden" name="nomerp[]" value="46"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p47 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>47. Gangguan kejiwaan (bipolar disorder, schizophrenia, psychosis)</b></label><br/>
									<input type="hidden" name="nomerp[]" value="47"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p48 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>48. Depresi</b></label><br/>
									<input type="hidden" name="nomerp[]" value="48"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p49 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>49. Mengunjungi psikolog atau psikiatris</b></label><br/>
									<input type="hidden" name="nomerp[]" value="49"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p50 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>50. Polio</b></label><br/>
									<input type="hidden" name="nomerp[]" value="50"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p51 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>51. ADD (attention Deficit disorder = tdk bisa fokus), kesulitan belajar</b></label><br/>
									<input type="hidden" name="nomerp[]" value="51"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
								<?php
									if($p52 == 1)
									{	
								?>
								<div class="col-12">
									<label><b>52. Ada luka yang baru didapat</b></label><br/>
									<input type="hidden" name="nomerp[]" value="52"><textarea name="sakit[]" class="form-control" required></textarea>
								</div>
								<?php } ?>
							</div>
									
						</center>

	
							<center><button type="submit" name="submit" id="submit" class="btn btn-primary" >Submit</button></center>
				</form>			</div>
		
		</div>
	</div>
</div>
</body>
</html>