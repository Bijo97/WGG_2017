<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:../login/login.php");
}
header("Location: home.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../images/logowgg.png" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Form Kesehatan WGG 2017</title>
	<meta name="theme-color" content="#1A47C4">
</head>
<body>
<?php
	$user = $_SESSION['user'];
	$F_Name=mysql_query( "SELECT * FROM pac where username = '".$user."'" );
	$row = mysql_fetch_array($F_Name);
	$nama = $row['nama'];

$query = "SELECT nrp FROM form_kesehatan WHERE nrp = '".$_SESSION['nrp']."'"; 

		$result = mysql_query($query); 
		if (!$result) { die(mysql_errno()." : ".mysql_error()); } 

		/* Now lets check to see if we got any results back */ 

		if (mysql_num_rows($result) > 0) 
		{
		  echo "<center>Maaf, Anda telah mengisi form kesehatan sebelumnya.</center>";
		  echo "<center><a href=index.php>Kembali ke halaman sebelumnya</a></center>";

		}
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      	<li class="nav-item active">
				<a class="nav-link" href="../login/home.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../kesehatan/home.php">Form Kesehatan<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../konsumsi/home.php">Form Konsumsi</a>
			</li>
	    </ul>
	    <ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Selamat datang, <?php echo $nama;?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="../login/logout.php">Logout</a>
		        </div>
		    </li>
		</ul>
	  </div>
	</nav>
<center><h1>Form Kesehatan WGG 2017</h1></center>
	<div class="container" col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="insert.php" method="post">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama ?>" disabled>
					</div>
					<div class="form-group">
						<label>No Ujian</label>
						<input type="number" id="No" class="form-control" placeholder="No Ujian" name="No">
					</div>
					<div class="form-group">
						<label>NRP</label>
						<input type="text" id="NRP" class="form-control" placeholder="NRP" name="NRP">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<div class="radio">
							<label>
								<input type="radio" name="jeniskelamin" id="jenis1" value="P">
								Perempuan
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="jeniskelamin" id="jenis2" value="L">
								Laki-laki
							</label>
						</div>
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" id="Tempat" class="form-control" placeholder="Tempat Lahir" name="tll">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="text" id="Tanggal" class="form-control" placeholder="Tanggal Lahir" name="tgl">
					</div>
					<div class="form-group">
						<label>Berat Badan</label>
						<input type="number" id="Berat" class="form-control" placeholder="Berat Badan" name="bb">
					</div>
					<div class="form-group">
						<label>Tinggi Badan</label>
						<input type="number" id="Tinggi" class="form-control" placeholder="Tinggi Badan" name="tb">
					</div>
					<div class="form-group">
						<label>Alamat Asal</label>
						<input type="text" id="alamat" class="form-control" placeholder="Alamat Asal" name="alamat">
					</div>
					<div class="form-group">
						<label>No Telepon</label>
						<input type="number" id="telp" class="form-control" placeholder="No Telepon" name="no_telp">
					</div>
					<div class="form-group">
						<label>No Hp</label>
						<input type="number" id="hp" class="form-control" placeholder="No Hp" name="no_hp">
					</div>
					<div class="form-group">
						<label>Alamat di Surabaya</label>
						<input type="text" id="alamatsby" class="form-control" placeholder="Alamat di Surabaya" name="alamat_sby">
					</div>
					<label>
						<br><br>Orang Tua/Wali (yang dapat dihubungi jika terjadi keadaan mendesak/darurat) <br><br><br>
					</label>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" id="namaWali" class="form-control" placeholder="Nama Wali" name="nama_wali">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" id="alamatWali" class="form-control" placeholder="Alamat Wali" name="alamat_wali">
					</div>
					<div class="form-group">
						<label>No Telepon</label>
						<input type="number" id="telpWali" class="form-control" placeholder="No Telepon Wali" name="telp_wali">
					</div>
					<div class="form-group">
						<label>No Hp</label>
						<input type="number" id="hpWali" class="form-control" placeholder="No Hp Wali" name="hp_wali">
					</div>
					<div class="table-responsive" col-sm-6">
						<table class="table table-striped">
							<tr>
								<th> NO. </th>
								<th> Nama Penyakit </th>
								<th></th>
							</tr>
							<tr>
								<td>1</td>
								<td>Sejarah keluarga: sakit jantung atau stroke</td>
								<td><input type="checkbox" value="1" name="p1"></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Reaksi atas obat, makanan, sengatan</td>
								<td><input type="checkbox" value="0" name="p2"></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Penyakit kelamin</td>
								<td><input type="checkbox" value="0" name="p3"></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Masalah kulit (psoriasis, eczema/dermatitis)</td>
								<td><input type="checkbox" value="0" name="p4"></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Alergi musiman (hay fever/seasonal allergies)</td>
								<td><input type="checkbox" value="0" name="p5"></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Tekanan darah tinggi atau stroke</td>
								<td><input type="checkbox" value="0" name="p6"></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Sering sakit kepala atau Sakit Kepala parah</td>
								<td><input type="checkbox" value="0" name="p7"></td>
							</tr>
							<tr>
								<td>8</td>
								<td>Migrain</td>
								<td><input type="checkbox" value="0" name="p8"></td>
							</tr>
							<tr>
								<td>9</td>
								<td>Masalah gigi dan/atau gusi</td>
								<td><input type="checkbox" value="0" name="p9"></td>
							</tr>
							<tr>
								<td>10</td>
								<td>Epilepsy (ayan), kejang-kejang</td>
								<td><input type="checkbox" value="0" name="p10"></td>
							</tr>
							<tr>
								<td>11</td>
								<td>Kehilangan kesadaran, pingsan</td>
								<td><input type="checkbox" value="0" name="p11"></td>
							</tr>
							<tr>
								<td>12</td>
								<td>Tumor/ kista/ benjolan abnormal / kanker</td>
								<td><input type="checkbox" value="0" name="p12"></td>
							</tr>
							<tr>
								<td>13</td>
								<td>Luka pada kepala, gegar otak</td>
								<td><input type="checkbox" value="0" name="p13"></td>
							</tr>
							<tr>
								<td>14</td>
								<td>Mengunjungi cardiologist (spesialis jantung)</td>
								<td><input type="checkbox" value="0" name="p14"></td>
							</tr>
							<tr>
								<td>15</td>
								<td>Sakit di dada (chest pain), Dada terasa ditekan (chest pressure), Atau palpitations (berdebar-debar)</td>
								<td><input type="checkbox" value="0" name="p15"></td>
							</tr>
							<tr>
								<td>16</td>
								<td>Masalah Jantung (bising jantung, kelainan irama, peredaran darah, dll)</td>
								<td><input type="checkbox" value="0" name="p16"></td>
							</tr>
							<tr>
								<td>17</td>
								<td>Nafas pendek saat olahraga/latihan</td>
								<td><input type="checkbox" value="0" name="p17"></td>
							</tr>
							<tr>
								<td>18</td>
								<td>Asma / Kesulitan bernafas</td>
								<td><input type="checkbox" value="0" name="p18"></td>
							</tr>
							<tr>
								<td>19</td>
								<td>Batuk kronis, sakit paru-paru, TBC</td>
								<td><input type="checkbox" value="0" name="p19"></td>
							</tr>
							<tr>
								<td>20</td>
								<td>Diabetes atau masalah gula darah</td>
								<td><input type="checkbox" value="0" name="p20"></td>
							</tr>
							<tr>
								<td>21</td>
								<td>Masalah pencernaan, liver (hepatitis) atau kandung empedu</td>
								<td><input type="checkbox" value="0" name="p21"></td>
							</tr>
							<tr>
								<td>22</td>
								<td>Penyakit Usus (Crohns, UC, reflux, dll)</td>
								<td><input type="checkbox" value="0" name="p22"></td>
							</tr>
							<tr>
								<td>23</td>
								<td>Muntah darah</td>
								<td><input type="checkbox" value="0" name="p23"></td>
							</tr>
							<tr>
								<td>24</td>
								<td>Wasir, berak darah, sakit usus besar</td>
								<td><input type="checkbox" value="0" name="p24"></td>
							</tr>
							<tr>
								<td>25</td>
								<td>Gangguan pada ginjal, kandung kemih, Infeksi saluran kencing, tdk bisa tahan kencing/berak</td>
								<td><input type="checkbox" value="0" name="p25"></td>
							</tr>
							<tr>
								<td>26</td>
								<td>Gangguan keseimbangan / koordinasi</td>
								<td><input type="checkbox" value="0" name="p26"></td>
							</tr>
							<tr>
								<td>27</td>
								<td>Vertigo atau claustrophobia (phobia ruang sempit & tertutup)</td>
								<td><input type="checkbox" value="0" name="p27"></td>
							</tr>
							<tr>
								<td>28</td>
								<td>Gangguan Makan (anorexia, bulimia, dll)</td>
								<td><input type="checkbox" value="0" name="p28"></td>
							</tr>
							<tr>
								<td>29</td>
								<td>Gangguan pada mata</td>
								<td><input type="checkbox" value="0" name="p29"></td>
							</tr>
							<tr>
								<td>30</td>
								<td>Menggunakan kacamata / lensa kontak</td>
								<td><input type="checkbox" value="0" name="p30"></td>
							</tr>
							<tr>
								<td>31</td>
								<td>Gangguan pendengaran, Infeksi telinga</td>
								<td><input type="checkbox" value="0" name="p31"></td>
							</tr>
							<tr>
								<td>32</td>
								<td>Gagap</td>
								<td><input type="checkbox" value="0" name="p32"></td>
							</tr>
							<tr>
								<td>33</td>
								<td>Infeksi sinus</td>
								<td><input type="checkbox" value="0" name="p33"></td>
							</tr>
							<tr>
								<td>34</td>
								<td>Menggunakan penyangga tulang/sendi, atau menggunakan Splint</td>
								<td><input type="checkbox" value="0" name="p34"></td>
							</tr>
							<tr>
								<td>35</td>
								<td>Gangguan tenggorokan atau gondok</td>
								<td><input type="checkbox" value="0" name="p35"></td>
							</tr>
							<tr>
								<td>36</td>
								<td>Laki-laki: Gangguan testis, zakar, penis</td>
								<td><input type="checkbox" value="0" name="p36"></td>
							</tr>
							<tr>
								<td>37</td>
								<td>Perempuan: Gangguan mens, payudara, paps</td>
								<td><input type="checkbox" value="0" name="p37"></td>
							</tr>
							<tr>
								<td>38</td>
								<td>Lemah otot, lumpuh</td>
								<td><input type="checkbox" value="0" name="p38"></td>
							</tr>
							<tr>
								<td>39</td>
								<td>Pernah operasi / konsultasi operasi</td>
								<td><input type="checkbox" value="0" name="p39"></td>
							</tr>
							<tr>
								<td>40</td>
								<td>Ganggunan Sendi (dislokasi, terkilir, rematik)</td>
								<td><input type="checkbox" value="0" name="p40"></td>
							</tr>
							<tr>
								<td>41</td>
								<td>Gangguan tulang (termasuk pernah terjadi retak dalam 5 tahun terakhir)</td>
								<td><input type="checkbox" value="0" name="p41"></td>
							</tr>
							<tr>
								<td>42</td>
								<td>Pemakaian pin besi, pelat atau kawat yang terpasang pada tulang yang patah</td>
								<td><input type="checkbox" value="0" name="p42"></td>
							</tr>
							<tr>
								<td>43</td>
								<td>Gangguan pada mulut atau hidung</td>
								<td><input type="checkbox" value="0" name="p43"></td>
							</tr>
							<tr>
								<td>44</td>
								<td>Sakit punggung / leher (parah / berulang)</td>
								<td><input type="checkbox" value="0" name="p44"></td>
							</tr>
							<tr>
								<td>45</td>
								<td>Percobaan atau pemikiran untuk bunuh diri</td>
								<td><input type="checkbox" value="0" name="p45"></td>
							</tr>
							<tr>
								<td>46</td>
								<td>Pendarahan /memar abnormal /kelainan darah</td>
								<td><input type="checkbox" value="0" name="p46"></td>
							</tr>
							<tr>
								<td>47</td>
								<td>Gangguan kejiwaan (bipolar disorder, schizophrenia, psychosis)</td>
								<td><input type="checkbox" value="0" name="p47"></td>
							</tr>
							<tr>
								<td>48</td>
								<td>Depresi</td>
								<td><input type="checkbox" value="0" name="p48"></td>
							</tr>
							<tr>
								<td>49</td>
								<td>Mengunjungi psikolog atau psikiatris</td>
								<td><input type="checkbox" value="0" name="p49"></td>
							</tr>
							<tr>
								<td>50</td>
								<td>Polio</td>
								<td><input type="checkbox" value="0" name="p50"></td>
							</tr>
							<tr>
								<td>51</td>
								<td>ADD (attention Deficit disorder = tdk bisa fokus), kesulitan belajar</td>
								<td><input type="checkbox" value="0" name="p51"></td>
							</tr>
							<tr>
								<td>52</td>
								<td>Ada luka yang baru didapat</td>
								<td><input type="checkbox" value="0" name="p52"></td>
							</tr>
							<tr>
								<td>53</td>
								<td>Penyakit lain yang TIDAK tercantum diatas</td>
								<td><input type="checkbox" value="0" name="p53"></td>
							</tr>
						</table>
					</div>
					<center><button type="submit" class="btn btn-primary" >Submit</button></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>