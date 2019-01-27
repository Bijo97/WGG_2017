<?php
if (isset($_GET['status'])){
	if ($_GET['status'] == 3){
		echo "<script>alert('Pesan anda sudah terkirim...');</script>";
	} else if ($_GET['status'] == 4){
		echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
	}
}
session_start();
$_SESSION['page'] = "navnews";

include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<link rel="shortcut icon" href="../images/logowgg.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>News | Welcome Grateful Generation 2017</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		#hp{
			display: none;
		}

		@media screen and (max-width: 768px) {
		    #pc{
		    	display: none;
		    }
		    #hp{
		    	display: block;
		    }
		}
	</style>
	<script>
		function getBerita(x){
			$("#berita").fadeOut(100);
			$('.aktif').removeClass('aktif');

			$.ajax({
				type: "POST",
				url: "getberita.php",
				data: {
					id: x
				},
				success: function(result){
					$("#berita").html(result);
				}
			});

			$("#berita").fadeIn(100);
			$('#'+x).parent().addClass('aktif');
		}

		function getBeritaHP(x){
			$("#beritaHP").fadeOut(100);

			$.ajax({
				type: "POST",
				url: "getberita.php",
				data: {
					id: x
				},
				success: function(result){
					$("#beritaHP").html(result);
				}
			});

			$("#beritaHP").fadeIn(100);
		}
	</script>
</head>
<body>
	<?php include "navbar.php";?>
	<div id="header"><center><h3>NEWS</h3></center></div>
	<br>
	<br>
	<div class="container" id="content">
		<div id="pc">
			<center><p style="font-size: 16pt;">Klik judul di samping kiri untuk melihat isi berita.</p></center>
			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					<?php
						$sql = "SELECT * FROM news WHERE status = 0 ORDER BY id DESC";
						$result = mysql_query($sql);
						$i = 1;
						while ($row = mysql_fetch_array($result)){
							if ($i == 1){
								if ($row['prioritas'] == 2){
									echo "<div class='news aktif'>";
									echo "<button id='".$row['id']."' onclick='getBerita(this.id)' style='color: black;'>".$row['judul']."</button>";
									echo "</div><br/>";
								} else if ($row['prioritas'] == 1){
									echo "<div class='news aktif'>";
									echo "<button id='".$row['id']."' onclick='getBerita(this.id)' style='color: red;'>".$row['judul']."</button>";
									echo "</div><br/>";
								}
							} else {
								if ($row['prioritas'] == 2){
									echo "<div class='news'>";
									echo "<button id='".$row['id']."' onclick='getBerita(this.id)' style='color: black;'>".$row['judul']."</button>";
									echo "</div><br/>";
								} else if ($row['prioritas'] == 1){
									echo "<div class='news'>";
									echo "<button id='".$row['id']."' onclick='getBerita(this.id)' style='color: red;'>".$row['judul']."</button>";
									echo "</div><br/>";
								}
							}
							$i++;
						}
					?>
				</div>
				<div class="col-md-8" style="border-left: 3px solid black;">
					<div id="berita">
						<?php
							$sql = "SELECT isi FROM news WHERE status = 0 ORDER BY id DESC LIMIT 1";
							$result = mysql_query($sql);
							$row = mysql_fetch_array($result);
							echo $row['isi'];
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="hp">
			<center><p style="font-size: 14pt;">Pilih judul di bawah ini untuk melihat isi berita.</p></center>
			<div class="container">
				<select class="form-control" onchange="getBeritaHP(this.value)">
					<?php
							$sql = "SELECT * FROM news WHERE status = 0 ORDER BY id DESC";
							$result = mysql_query($sql);
							while ($row = mysql_fetch_array($result)){
								if ($row['prioritas'] == 2){
									echo "<option value='".$row['id']."' style='color: black;'>".$row['judul']."</option>";
								} else if ($row['prioritas'] == 1){
									echo "<option value='".$row['id']."' style='color: red;'>".$row['judul']."</option>";
								}
							}
						?>
				</select><br/>
				<div id="beritaHP">
					<?php
						$sql = "SELECT isi FROM news WHERE status = 0 ORDER BY id DESC LIMIT 1";
						$result = mysql_query($sql);
						$row = mysql_fetch_array($result);
						echo $row['isi'];
					?>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="js/animasi.js"></script> -->
	<script src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#<?php echo $_SESSION['page'];?>').addClass('active');
		$("#click").click(function (){
	        $('html, body').animate({
	            scrollTop: $("#content").offset().top - 90
	        }, 500);
	    });
	    if ($( window ).width() <= 500) {
			$('#desktop').hide();
			$('#mobile').show();
		} else {
			$('#desktop').show();
			$('#mobile').hide();
		}
		$("html").niceScroll({
        	zindex: 5
        });
	});
	$(window).on('resize', function(){
		if ($( window ).width() <= 500) {
			$('#desktop').hide();
			$('#mobile').show();
		} else {
			$('#desktop').show();
			$('#mobile').hide();
		}
	});
	// $(function() {
	// 	$('a[href*=#]').on('click', function(e) {
	// 		e.preventDefault();
	// 		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
	// 	});
	// });
	</script>
</body>
</html>