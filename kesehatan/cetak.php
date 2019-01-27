<?php
session_start();
$nrp = $_SESSION['nrp'];
?>
<?php include 'connect.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>WGG 2017: FORM KESEHATAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include 'db_config.php';
		$K_Name=mysql_query("SELECT * FROM Tbl_Config" ); 
		$row6 = mysql_fetch_array($K_Name);
		$gTitle=$row6['W_Title'];
		$gFavicon=$row6['W_Favicon'];
		
		echo '<link rel="shortcut icon" href="';echo $gFavicon; echo '" type="image/x-icon" />';
		echo '<title>';echo $gTitle; echo'</title>';
		?>
<script>
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<font color='000000' face='Orator std'> "+daym+" "+montharray[month]+" "+year+" </font>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}
</script>

<style type="text/css">
#paperx{
	background:url('!eric/paper.png');
	background-size:cover;
	background-repeat:no-repeat;
	opacity:0.4;
filter:alpha(opacity=40); /* For IE8 and earlier */
}
#clean{
	
}
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	width:190px;
	height:24px;
	z-index:1;
	left: 693px;
	top: 741px;
}
#foto{
	position:absolute;
	margin-right: 15px;
	top: 115px;
	float:right;
	align:right;
}
#bd-bottom{
	border-bottom : 2px solid black;
}

td{
	font-size:large;
	padding:1px;
	font-face:Orator std;
}
table{
	font-face:Orator std;
}
#layers{
margin-top:20px;
margin-right:20px;
}
#apDiv3 {
	position:absolute;
	width:240px;
	height:104px;
	z-index:2;
	right: 15px;
	top: 100px;
float:right;
}
hr { 
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: 100px;
    margin-right: 100px;
    border-bottom: solid black 5px;
} 
#isi{
  font-size: 12pt;
}
</style>
</head>

<body onLoad="goforit()"><div id="layers">

<?php
$F_Name=mysql_query( "SELECT * FROM form_kesehatan where nrp = '".$nrp."'" );
$row = mysql_fetch_array($F_Name);
$Name_F =  $row['nama'];
$NO_UJIAN_F =  $row['no_ujian'];
$NRP_F =  $row['nrp'];
$JenisKelamin_F =  $row['jenis_kelamin'];
$ADD_F = $row['alamat_asal'];
$TL_F =  $row['tempat_lahir'];
$TGL_F =  $row['tanggal_lahir'];
$TELP_F =  $row['no_telp'];
$HP_F =  $row['no_hp'];
$BB = $row['berat_badan'];
$TB = $row['tinggi_badan'];
$AAS_F =  $row['alamat_surabaya'];
$NameWali_F = $row['nama_wali'];
$ADDW_F = $row['alamat_wali'];
$TelpWali_F = $row['no_telp_wali'];
$HpWali_F = $row['no_hp_wali'];
$time_F = '<span id="clock"></span>';
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
$p53 = $row['p53'];
$ket = $row['keterangan'];
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:20px; font-size: 16pt;" align="center"><b><img src="logo_petra.jpg" style="width:120px; height:120px;"></b></td>
  </tr>
  <tr>
    <td style="margin-top:20px; font-size: 18pt;" align="center"><b>UNIVERSITAS KRISTEN PETRA</b></td>
  </tr>
  <tr>
 	 <td style="margin-top:20px; font-size: 10pt;" align="center">Jl. Siwalankerto 121-131, Surabaya 60236. Email: admisi@petra.ac.id</td>
  </tr>
</table>

<hr>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:20px; font-size: 18pt;" align="center"><b id="bd-bottom">FORMULIR CATATAN KESEHATAN</b></td>
    </tr>
  <tr>
    <td style="margin-top:7px; font-size: 14pt;" align="center">UNTUK KEGIATAN KEMAHASISWAAN</td>
  </tr>
</table>
<br/><br/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:30px; font-size: 12pt;" align="justify">Yang terkasih, para mahasiswa UK Petra dan Orang tua/Wali,</td>
  </tr>
  <tr>
	<td style="padding-left:20px; font-size:12pt;" align="justify" >Mohon mengisi <b>Formulir Catatan Kesehatan</b> ini dengan lengkap dan akurat,
	sesuai dengan KONDISI SAAT INI. Untuk setiap jawaban "Ya", dapat dilampirkan copy keterangan dokter untuk membantu pihak poliklinik
	memahami kondisi mahasiswa saat dibutuhkan. Apabila masih dalam perawatan berkelanjutan wajib menyertakan surat keterangan dari dokter yang merawat.
	Formulir Catatan Kesehatan ini akan menjadi informasi, data dan acuan bagi PANITIA DIVISI KESEHATAN dalam memberikan layanan kesehatan dalam berkegiatan.</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> </tr>
</table>
<table style="font-size: 12pt;" width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="32%">&nbsp;</td>
    <td width="0%">&nbsp;</td>
    <td width="68%">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td>:&nbsp;</td>
    <td><?php echo $Name_F;?></td>
  </tr>
  <tr>
    <td>No Ujian / NRP</td>
    <td>:&nbsp;</td>
    <td><?php echo $NO_UJIAN_F;?> / <?php echo $NRP_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:&nbsp;</td>
    <td><?php echo $JenisKelamin_F;?></td>
    <td></td>
  </tr>
  <tr>
  <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>:&nbsp;</td>
    <td><?php echo $TL_F;?> , <?php echo $TGL_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Berat Badan</td>
    <td>:&nbsp;</td>
    <td><?php echo $BB;?></td>
    </tr>
    <tr>
    <td>Tinggi Badan</td>
    <td>:&nbsp;</td>
    <td><?php echo $TB;?></td>
  </tr>
  <tr>
    <td>Alamat Asal</td>
    <td>:&nbsp;</td>
    <td><?php echo $ADD_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>No. Telepon</td>
    <td>:&nbsp;</td>
    <td><?php echo $TELP_F;?>]</td>
    <td></td>
  </tr>
  <tr>
  	<td>No. Hp</td>
  	<td>:&nbsp;</td>
  	<td><?php echo $HP_F; ?> </td>
  	<td></td>
  </tr>
  <tr>
    <td>Alamat di Surabaya</td>
    <td>:&nbsp;</td>
    <td><?php echo $AAS_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Nama Wali</td>
    <td>:</td>
    <td><?php echo $NameWali_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Alamat Wali</td>
    <td>:</td>
    <td><?php echo $ADDW_F;?></td>
    <td></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:5px; font-size: 12pt;" align="justify">Orang tua/ Wali (yang dapat dihubungi apabila terjadi keadaan mendesak / darurat)</td>
  </tr>
</table>

<table style="font-size: 12pt;" width="98%" border="0" cellspacing="0" cellpadding="0">
	 <tr>
    <td width="32%">&nbsp;</td>
    <td width="0%">&nbsp;</td>
    <td width="68%">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td>:&nbsp;</td>
    <td><?php echo $NameWali_F;?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:&nbsp;</td>
    <td><?php echo $ADDW_F;?></td>
    <td></td>
  </tr>
  <tr>
    <td>No. Telepon</td>
    <td>:&nbsp;</td>
    <td><?php echo $TelpWali_F;?>]</td>
    <td></td>
  </tr>
  <tr>
  	<td>No. Hp</td>
  	<td>:&nbsp;</td>
  	<td><?php echo $HpWali_F; ?> </td>
  	<td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br/><br/><br/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:5px; font-size: 12pt;" align="justify">Mahasiswa <b>pernah</b> mempunyai, atau <b>sedang</b> mengalami sakit atau kondisi berikut</td>
  </tr>
</table>

<table style="font-size: 11pt;border-collapse:collapse;" width="98%" border="1" cellspacing="0" >
	<tr>
		<td width="10%" align="center">Ya</td>
		<td width="10%" align="center">Tidak</td>
		<td width="28%" align="center">Keterangan</td>
		<td width="10%" align="center">Ya</td>
		<td width="10%" align="center">Tidak</td>
		<td width="30%" align="center">Keterangan</td>
	</tr>
	<tr>
		<?php if($p1==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;"> Sejarah keluarga: sakit jantung atau stroke </td>';
		?>
		
		<?php if($p27==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;"> Vertigo atau claustrophobia (phobia ruang sempit & tertutup) </td>';
		?>

	</tr>
	<tr>
		<?php if($p2==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Reaksi atas obat, makanan, sengatan </td>';
		?>
		<?php if($p28==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan Makan (anorexia, bulimia, dll) </td>';
		?>
	</tr>
	<tr>	
		<?php if($p3==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Penyakit kelamin </td>';
		?>
		<?php if($p29==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan pada mata </td>';
		?>
	</tr>
	<tr>
		<?php if($p4==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Masalah kulit (psoriasis, eczema/dermatitis) </td>';
		?>
		<?php if($p30==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;"> Menggunakan kacamata / lensa kontak </td>';
		?>
	</tr>
	<tr>
		<?php if($p5==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Alergi musiman (hay fever/seasonal allergies) </td>';
		?>
		<?php if($p31==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<<td style="padding-left:5px;"> Gangguan pendengaran, Infeksi telinga</td>';
		?>
	</tr>
	<tr>
		<?php if($p6==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Tekanan darah tinggi atau stroke </td>';
		?>
		<?php if($p32==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;"> Gagap</td>';
		?>
	</tr>
	<tr>
		<?php if($p7==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Sering sakit kepala atau Sakit Kepala parah </td>';
		?>
		<?php if($p33==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Infeksi sinus </td>';
		?>
	</tr>
	<tr>
		<?php if($p8==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Migrain </td>';
		?>
		<?php if($p34==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Menggunakan penyangga tulang/sendi, atau menggunakan Splint </td>';
		?>
	</tr>
	<tr>
		<?php if($p9==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Masalah gigi dan/atau gusi </td>';
		?>
		<?php if($p35==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan tenggorokan atau gondok </td>';
		?>
	</tr>
	<tr>
		<?php if($p10==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Epilepsy (ayan), kejang-kejang </td>';
		?>
		<?php if($p36==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Laki-laki: Gangguan testis, zakar, penis </td>';
		?>
	</tr>
	<tr>
		<?php if($p11==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Kehilangan kesadaran, pingsan </td>';
		?>
		<?php if($p37==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Perempuan: Gangguan mens, payudara, paps </td>';
		?>
	</tr>
	<tr>
		<?php if($p12==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Tumor/ kista/ benjolan abnormal / kanker </td>';
		?>
		<?php if($p38==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Lemah otot, lumpuh </td>';
		?>
	</tr>
	<tr>
		<?php if($p13==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Luka pada kepala, gegar otak </td>';
		?>
		<?php if($p39==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Pernah operasi / konsultasi operasi </td>';
		?>
	</tr>
	<tr>
		<?php if($p14==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Mengunjungi cardiologist (spesialis jantung) </td>';
		?>
		<?php if($p40==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Ganggunan Sendi (dislokasi, terkilir, rematik) </td>';
		?>
	</tr>
	<tr>
		<?php if($p15==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Sakit di dada (chest pain), Dada terasa ditekan (chest pressure), Atau palpitations (berdebar-debar) </td>';
		?>
		<?php if($p41==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan tulang (termasuk pernah terjadi retak dalam 5 tahun terakhir) </td>';
		?>
	</tr>
	<tr>
		<?php if($p16==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Masalah Jantung (bising jantung, kelainan irama, peredaran darah, dll) </td>';
		?>
		<?php if($p42==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Pemakaian pin besi, pelat atau kawat yang terpasang pada tulang yang patah </td>';
		?>
	</tr>
	<tr>
		<?php if($p17==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Nafas pendek saat olahraga/latihan </td>';
		?>
		<?php if($p43==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan pada mulut atau hidung </td>';
		?>
	</tr>
	<tr>
		<?php if($p18==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Asma / Kesulitan bernafas </td>';
		?>
		<?php if($p44==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Sakit punggung / leher (parah / berulang) </td>';
		?>
	</tr>
	<tr>
		<?php if($p19==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Batuk kronis, sakit paru-paru, TBC </td>';
		?>
		<?php if($p45==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Percobaan atau pemikiran untuk bunuh diri </td>';
		?>
	</tr>
	<tr>
		<?php if($p20==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Diabetes atau masalah gula darah </td>';
		?>
		<?php if($p46==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Pendarahan /memar abnormal /kelainan darah </td>';
		?>
	</tr>
	<tr>
		<?php if($p21==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Masalah pencernaan, liver (hepatitis) atau kandung empedu </td>';
		?>
		<?php if($p47==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan kejiwaan (bipolar disorder, schizophrenia, psychosis) </td>';
		?>
	</tr>
	<tr>
		<?php if($p22==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Penyakit Usus (Crohns, UC, reflux, dll) </td>';
		?>
		<?php if($p48==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Depresi </td>';
		?>
	</tr>
	<tr>
		<?php if($p23==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Muntah darah </td>';
		?>
		<?php if($p49==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Mengunjungi psikolog atau psikiatris </td>';
		?>
	</tr>
	<tr>
		<?php if($p24==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Wasir, berak darah, sakit usus besar </td>';
		?>
		<?php if($p50==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Polio </td>';
		?>
	</tr>
	<tr>
		<?php if($p25==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan pada ginjal, kandung kemih, Infeksi saluran kencing, tdk bisa tahan kencing/berak </td>';
		?>
		<?php if($p51==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  ADD (attention Deficit disorder = tdk bisa fokus), kesulitan belajar </td>';
		?>
	</tr>
	<tr>
		<?php if($p26==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Gangguan keseimbangan / koordinasi </td>';
		?>
		<?php if($p52==1)
		{
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
			echo '<td> &nbsp;</td>';
		}
		else
		{
			echo '<td> &nbsp;</td>';
			echo '<td align="center"> <img src="tick.png" style="width:10px; height:10px;"></td>';
		}
		echo '<td style="padding-left:5px;">  Ada luka yang baru didapat </td>';
		?>
	</tr>
</table>
<br/> <br/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:15px; font-size: 12pt;" align="justify">Penyakit lain yang <b>TIDAK</b> tercantum diatas : </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="margin-top:5px; font-size: 12pt;margin-left:35pt;" align="justify"><?php echo $p53; ?></td>
  </tr>
</table>
<br/><br/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="35%"></td>
    <td width="10%"></td>
    <td width="10%"></td>
    <td width="10%"></td>
    <td width="35%" align="center"><p style="font-size: 12pt;">Surabaya, <?php echo date("d/m/Y", time());    ?></p><?php //echo $Name_F;?></td
  >
  </tr>
  <tr>
    <td width="35%" align="center"><p style="font-size: 12pt;">Mengetahui,</p></td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="35%" align="center"><p style="font-size: 12pt;">Yang menyatakan,</p></td>
  </tr>
  <tr>
    <td width="35%" align="center"><p style="font-size: 12pt;">Orang Tua / Wali <br/><br/><br/></p></td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="35%">&nbsp;</td>
  </tr>
  <tr>
    <td width="35%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="35%" align="center"><img src = "materai.png" style="width=100px; heigh =80px;"><br/><br/><br/></td>
  </tr>
  <tr>
    <td width="35%" align="center"><p style="font-size: 12pt;"><?php echo $NameWali_F?></p></td>
    <td width="10%"></td>
    <td width="10%"></td>
    <td width="10%"></td>
    <td width="35%" align="center"><span style="font-size: 12pt;"><?php echo $Name_F; ?></span></td>
  </tr>
</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
	<tr>
		<td><b>Keterangan untuk setiap jawaban Ya: </b></td>
	</tr>
	<tr>
		<td><?php echo $ket; ?></td>
	</tr>
</table>

<div id="paperx clean">
</div>
</body>



</html>