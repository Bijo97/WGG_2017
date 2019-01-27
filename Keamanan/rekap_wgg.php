<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:https://wgg.petra.ac.id/loginkeamanan/login.php");
}
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title> Input Data Rekap </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script>
	function show_maba(_nrp)
	{
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("nama_maba").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "show_nama.php?nrp="+_nrp, true);
        xmlhttp.send();
	}
	</script>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      	<li class="nav-item active">
				<a class="nav-link" href="rekap_wgg.php">Rekap Keamanan WGG</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view.php">View Data</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view_total.php">View Total Rekap<span class="sr-only">(current)</span></a>
			</li>
	    </ul>
	    <ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Selamat datang, <?php echo $nama;?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="../loginkeamanan/logout.php">Logout</a>
		        </div>
		    </li>
		</ul>
	  </div>
	</nav>
<center><h3 style="margin-top: 3%;">Rekap Keamanan<br>Welcome Grateful Generation 2017</h3></center>
	<div class="container">
		<form action = "submit.php" method ="post"> 
		<br>
		<div class="row">
			<div class="col-md-1">Nrp : </div>
			<div class="col-md-2"><input type="text" pattern=".{8,9}" name="nrp" id="nrp" placeholder="Nrp" size="35" required  onchange="show_maba(this.value)" class="form-control"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-1">Nama : </div>
			<div class="col-md-2" id="nama_maba"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-1">Tanggal : </div>
			<div class="col-md-2"><input type="date" name="tanggal" id="tanggal" size = "35" required class="form-control"></div>
			<div class="col-md-6">Bila tanggal tidak bisa diselect, mohon masukan dalam format : YYYY-MM-DD</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">Pelanggaran :</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalA">Pasal A</button>
				<div id ="pasalA" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="1-Atribut Wajib">Atribut Wajib</label>
						<label><input type="checkbox" name="pasal[]" value="1-KTM">KTM</label>
						<label><input type="checkbox" name="pasal[]" value="1-Welcome Book">Welcome Book</label>
						<label><input type="checkbox" name="pasal[]" value="1-Buku Tatib">Buku Tatib</label>
						<label><input type="checkbox" name="pasal[]" value="1-Alat Tulis">Alat Tulis</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalB">Pasal B</button>
				<div id ="pasalB" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="2-Pakaian">Pakaian</label>
						<label><input type="checkbox" name="pasal[]" value="2-Almamater">Almamater</label>
						<label><input type="checkbox" name="pasal[]" value="2-Pin">Pin</label>
						<label><input type="checkbox" name="pasal[]" value="2-Topi">Topi</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalC">Pasal C</button>
				<div id ="pasalC" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="3-Penampilan">Penampilan</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalD">Pasal D</button>
				<div id ="pasalD" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="4-Barang Bawaan">Barang Bawaan</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalE">Pasal E</button>
				<div id ="pasalE" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="5-Sikap">Sikap</label>
						<label><input type="checkbox" name="pasal[]" value="5-Tepat Waktu">Tepat Waktu</label>
						<label><input type="checkbox" name="pasal[]" value="5-Gadget">Gadget</label>
						<label><input type="checkbox" name="pasal[]" value="5-Komunikasi">Komunikasi</label>
						<label><input type="checkbox" name="pasal[]" value="5-Transaksi">Transaksi</label>
						<label><input type="checkbox" name="pasal[]" value="5-Bicara Kotor">Bicara Kotor</label>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalF">Pasal F</button>
				<div id ="pasalF" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="6-Kebersihan">Kebersihan</label>
						<label><input type="checkbox" name="pasal[]" value="6-Fasilitas Kampus">Fasilitas Kampus</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalG">Pasal G</button>
				<div id ="pasalG" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="7-Berkendara">Berkendara</label>
						<label><input type="checkbox" name="pasal[]" value="7-Walking Area">Walking Area</label>
						<label><input type="checkbox" name="pasal[]" value="7-Walking Area">Dropping</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalH">Pasal H</button>
				<div id ="pasalH" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="8-Kerja Sama">Kerja Sama</label>
					</div>
				</div>
			</div>
			<div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#pasalI">Pasal I</button>
				<div id ="pasalI" class="collapse">
					<div class="checkbox">
						<label><input type="checkbox" name="pasal[]" value="9-Kerja Sama">Anarkis</label>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>
		<div class="row">
			<div class="col-md-2"><button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button></div>
		</div>
		</form>
		<br>
	</div>
</body>
</html>
	