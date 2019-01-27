<?php
if (isset($_GET['status'])){
	if ($_GET['status'] == 3){
		echo "<script>alert('Pesan anda sudah terkirim...');</script>";
	} else if ($_GET['status'] == 4){
		echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
	}
}
session_start();
$_SESSION['page'] = "navcommittee";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<link rel="shortcut icon" href="../images/logowgg.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome Grateful Generation 2017</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/siteplan_style.css">
</head>
<body>
	<?php include "navbar.php";?>
	<br>
	<br>
	<h3><p align="center"><br><br><b> COMMITTEE BOARD </b></p></h3>
	<div class="container">
		<div class="row">
				<div class="col-12">
					<p>Ketua: Kevin Merco // 11414014</p>
					<p>Kepala Bidang 1: Randy // 24414039</p>
					<ul>
						<li>Koordinator Divisi Acara: Oktavianus Filemon // 51414004</li>
						<li>Koordinator Divisi Pubdekdok: Jessenia Kolin // 33414051</li>
						<li>Koordinator Divisi Peran: Bintoro Gustanto H. // 21414007</li>
					</ul>
					<p>Kepala Bidang 2: Victor Winata Pranoto // 21414020</p>
					<ul>
						<li>Koordinator Tim Keamanan: Ricky Setiawan // 25414058</li>
						<li>Koordinator Divisi Perlengkapan: Nathanael Adi // 26414104</li>
					</ul>
					<p>Kepala Bidang 3: Yonathan Said // 37414089</p>
					<p>Sekretaris Umum: Natasah Bunardi // 25414007</p>
					<ul>
						<li>Koordinator Divisi Sekretariat: Peter Christian Budiono // 21414133</li>
						<li>Koordinator Divisi IT: Kevin Nyoto Susanto // 26415039</li>
					</ul>
					<p>Bendahara Umum 1: Septianda Angelica // 25414060<br>
					Bendahara Umum 2: Hananiel Vincent // 25414097<br>
					Bendahara Umum 3: Marcelina Yang // 37415088</p>
					<ul>
						<li>Koordinator Divisi Konsumsi: Joan Jesslyn // 32415046</li>
						<li>Koordinator Divisi Kesehatan: Ellen Calista // 22414147</li>
					</ul>
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
	$(function() {
		$('a[href*=#]').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		});
	});
	</script>
</body>
</html>