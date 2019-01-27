<?php
include "connection.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:https://wgg.petra.ac.id/login/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function validate()
{
	 var error="";
	 var alergi = document.getElementById( "alergi" );
	 if( alergi.value == "" )
	 {
	  error = "Harap isi kolom alergi ";
	  alert(error);
	  return false;
	 }
	 
	 
 // var email = document.getElementById( "email_of_user" );
 // if( email.value == "" || email.value.indexOf( "@" ) == -1 )
 // {
  // error = " You Have To Write Valid Email Address. ";
  // document.getElementById( "error_para" ).innerHTML = error;
  // return false;
 // }

 // var password = document.getElementById( "password_of_user" );
 // if( password.value == "" || password.value >= 8 )
 // {
  // error = " Password Must Be More Than Or Equal To 8 Digits. ";
  // document.getElementById( "error_para" ).innerHTML = error;
  // return false;
 // }

 else
 {
  return true;
 }
}

</script>

<style>
form {
    border: 3px solid #f1f1f1;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    margin: 0 auto;
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
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Form Konsumsi WGG 2017</title>
	<meta name="theme-color" content="#1A47C4">
</head>
<body>
<?php
	$user = $_SESSION['user'];
	//$F_Name=mysql_query( "SELECT * FROM pac where username = '".$user."'" );
	//$row = mysql_fetch_array($F_Name);
	$nama = $_SESSION['nama'];
	$nrp = $_SESSION['nrp'];
?>
<?php
	$kueri=mysql_query( "SELECT * FROM vege_vegan where nrp = '".$_SESSION['nrp']."'" );
	$row = mysql_fetch_array($kueri);
	$namamhs = $row['nama'];
	$nrpmhs = $row['nrp'];
	$keterangan = $row['keterangan'];
	$alergi = $row['alergi'];
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      	<li class="nav-item">
				<a class="nav-link" href="../login/home.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../kesehatan/home.php">Form Kesehatan</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="../konsumsi/home.php">Form Konsumsi<span class="sr-only">(current)</span></a>
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
<?php
$query = "SELECT nrp FROM vege_vegan WHERE nrp = '".$nrp."'"; 

		$result = mysql_query($query); 
		if (!$result) { die(mysql_errno()." : ".mysql_error()); } 

		/* Now lets check to see if we got any results back */ 

		if (mysql_num_rows($result) > 0) 
		{
		  echo "<div style='position: absolute; left:50%; top:50%; transform:translate(-50%, -50%); font-size: 20px;'>";
		  echo "<center>Anda Telah Mengisi Form Konsumsi. <br>";
		  echo "Nama : "; echo $namamhs; echo "<br>";
		  echo "NRP : "; echo $nrpmhs; echo "<br>";
		  echo "Alergi : "; echo $keterangan; echo "<br>";
		  echo "Keterangan : "; echo $alergi; echo "</center></div>";
		}
		else { ?>
<div id="formku" class="container-fluid">
<center><h3 style="margin-top: 30px;">Form Konsumsi Mahasiswa Baru<br> Welcome Grateful Generation 2017</h3></center><br><br>
	<div class="container">
			<div class="panel-body">
			<div class="panel panel-default">
				<form method="POST" class="col-8" action="insert.php">
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" name="txtnama" id="nama" class="form-control" value="<?php echo $nama;?>" readonly="true">
					</div>
					<div class="form-group">
						<label for="nrp">NRP :</label>
						<input type="text" name="txtnrp" id="nrp" class="form-control" value="<?php echo $nrp; ?>" readonly="true">
					</div>
					<div class="">
						<label for="nrp">Alergi (Pilih Salah Satu) :</label>
					</div>
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-primary active">
					    <input type="radio" name="txtalergi" id="normal" value="Normal" autocomplete="on" checked> Normal
					  </label>
					  <label class="btn btn-primary">
					    <input type="radio" name="txtalergi" id="vege" value="Vege" autocomplete="off"> Vege
					  </label>
					  <label class="btn btn-primary">
					    <input type="radio" name="txtalergi" id="vegan" value="Vegan" autocomplete="off"> Vegan
					  </label>
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan :</label>
						<input type="text" name="keterangan" id="keterangan" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	</div>
	<?php } ?>
</body>
</html>
