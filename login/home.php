<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user'])){
	header("Location:../login/login.php");
}
$query1 = "SELECT nrp FROM vege_vegan WHERE nrp = '".$_SESSION['nrp']."'"; 
$hasil1 = mysql_query($query1);
$query2 = "SELECT nrp FROM form_kesehatan WHERE nrp = '".$_SESSION['nrp']."'"; 
$hasil2 = mysql_query($query2);

?>
<html>
<head>
	<link rel="shortcut icon" href="../images/logowgg.png" />
	<title>Panel Maba WGG 2017</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function validate(){
			return confirm('Apakah anda yakin ingin logout?');
		}
	</script>
</head>
<?php
	//$user = $_SESSION['user'];
	//$F_Name=mysql_query( "SELECT * FROM pac where username = '".$user."'" );
	//$row = mysql_fetch_array($F_Name);
	//$nama = $row['nama'];
	$nama = $_SESSION['nama'];
?>
<body>
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      	<li class="nav-item active">
				<a class="nav-link" href="../login/home.php">Beranda<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../kesehatan/home.php">Form Kesehatan</a>
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
	<center><h3 style="margin-top: 3%;">Berita<br>Welcome Grateful Generation 2017</h3></center>
	<?php if (mysql_num_rows($hasil1) > 0){
		$status1 = "Sudah terisi";
	} else {
		$status1 = "Belum terisi";
	}
	?>
	<?php if (mysql_num_rows($hasil2) > 0){
		$status2 = "Sudah terisi";
	} else {
		$status2 = "Belum terisi";
	}
	?>
	<div class="container">
		<!--<div class="col-md-8" style="margin-top:13%;border:0px solid red;border-radius:10px;">-->
		<div class="col-10 offset-1">
		<center><p><h6>Klik judul berita untuk melihat detail berita</h6></p></center>
			<?php
			include "connect.php";
			$query = mysql_query("SELECT * FROM news WHERE prioritas <> 0 AND status = 1 order by prioritas, id DESC");
			echo "<ul>";
            while ($row = mysql_fetch_assoc($query)) {
            	echo "<p><li><div class='news'>
               		<a data-toggle='collapse' href='#berita".$row['id']."'><i class='fa fa-caret-down fa-lg' aria-hidden='true'></i>";
               	if ($row['prioritas'] == 1) {
               		echo "<span style='color: red; font-size:16pt;'><b>";
               	} else if ($row['prioritas'] == 2) {
               		echo "<span style='color: black; font-size:16pt;'><b>";
               	}
            	echo $row['judul']."</b></span>";
            	echo "</a><div>";
            	echo "<div id='berita".$row['id']."' class='panel-collapse collapse'>";
            	if($row['id'] == 102){
            	echo "<div class='news2'>";
            	echo "Untuk mengisi form konsumsi klik <a href='../konsumsi/home.php'>disini</a>.<br>";
				echo "Untuk mengisi form kesehatan klik <a href='../kesehatan/home.php'>disini</a>.<br>";

				echo "Status pengisian :<br>";
				echo "Form Konsumsi --> <b>"; echo $status1; echo "</b><br>";
				echo "Form Kesehatan --> <b>"; echo $status2; echo "</b>";
				echo "</div></div></li></p>";
            	} else {
            		echo "<div class='news2'>".$row['isi']."</div></div></li></p>";
            	}
            }
            echo "</ul>";
			?>

			<!-- <table border=0 align=center style="margin-top:4%;">
				<tr >
					<td colspan=3 style="text-align:center;">

						<br>
					</td>
				</tr>
				<tr>
					<td width="20%">
						<h4>Selamat datang, <?php echo $nama; ?></h4>
						<h4>Silahkan mengisi form yang ada dibawah ini.</h4>
						<h4>Form hanya bisa diisi <b><u>1 (satu) kali</u></b>, pastikan form terisi dengan data yang <b><u>benar.</u></b></h4>

					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td>
						<h4><a href="../kesehatan">Form Kesehatan</h4></a>
						<h5>Status : <?php echo $status2;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h4><a href="../konsumsi">Form Konsumsi</h4></a>
						<h5>Status : <?php echo $status1;?></h5>
					</td>

				</tr>
			</table> -->
		</div>
	</center>	

</div>

</body>
</html>
