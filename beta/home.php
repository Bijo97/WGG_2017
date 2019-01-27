<?php
if (isset($_GET['status'])){
	if ($_GET['status'] == 3){
		echo "<script>alert('Pesan anda sudah terkirim...');</script>";
	} else if ($_GET['status'] == 4){
		echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
	}
}
session_start();
$_SESSION['page'] = "navhome";
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
	<style>
	.demo button {
		position: absolute;
		bottom: -30px;
		left: 90%;
		z-index: 2;
		display: inline-block;
		-webkit-transform: translate(0, -90%);
		transform: translate(0, -90%);
		color: red;
		font : normal 400 20px/1 'Josefin Sans', sans-serif;
		letter-spacing: .1em;
		text-decoration: none;
		transition: opacity .3s;
	}
	.demo button:hover {
		opacity: .5;
	}
	#section07 button {
		padding-top: 60px;
	}
	#section07 button span {
		position: absolute;
		top: 0;
		left: 50%;
		width: 24px;
		height: 24px;
		margin-left: -12px;
		border-left: 1px solid red;
		border-bottom: 1px solid red;
		-webkit-transform: rotate(-45deg);
		transform: rotate(-45deg);
		-webkit-animation: sdb07 2s infinite;
		animation: sdb07 2s infinite;/*
		border: 1px solid red;*/
		opacity: 0;
		box-sizing: border-box;
	}
	#section07 button span:nth-of-type(1) {
		-webkit-animation-delay: 0s;
		animation-delay: 0s;
	}
	#section07 button span:nth-of-type(2) {
		top: 16px;
		-webkit-animation-delay: .15s;
		animation-delay: .15s;
	}
	#section07 button span:nth-of-type(3) {
		top: 32px;
		-webkit-animation-delay: .3s;
		animation-delay: .3s;
	}
	@-webkit-keyframes sdb07 {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 1;
		}
		100% {
			opacity: 0;
		}
	}
	@keyframes sdb07 {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 1;
		}
		100% {
			opacity: 0;
		}
	}
	#click:hover {
	    background-color:transparent;
	}
	#click:active {
	   fill:transparent;
	   background-color:transparent;
	}
	#click:focus {
		outline:0;
	}
	@media screen and (max-width: 480px) {
	    .demo button {
	    	left: 70%;
	    	-webkit-transform: translate(0, -70%);
			transform: translate(0, -70%);
	    }
	}
	/*#section03 a span::after {
		position: absolute;
		top: 50%;
		left: 50%;
		content: '';
		width: 16px;
		height: 16px;
		margin: -12px 0 0 -8px;
		border-left: 1px solid #fff;
		border-bottom: 1px solid #fff;
		-webkit-transform: rotate(-45deg);
		transform: rotate(-45deg);
		box-sizing: border-box;
	}
	#section03 a span::before {
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
		content: '';
		width: 44px;
		height: 44px;
		box-shadow: 0 0 0 0 rgba(255,255,255,.1);
		border-radius: 100%;
		opacity: 0;
		-webkit-animation: sdb03 3s infinite;
		animation: sdb03 3s infinite;
		box-sizing: border-box;
	}
	@-webkit-keyframes sdb03 {
		0% {
			opacity: 0;
		}
		30% {
			opacity: 1;
		}
		60% {
			box-shadow: 0 0 0 60px rgba(0,0,0,.1);
			opacity: 0;
		}
		100% {
			opacity: 0;
		}
	}
	@keyframes sdb03 {
		0% {
			opacity: 0;
		}
		30% {
			opacity: 1;
		}
		60% {
			box-shadow: 0 0 0 60px rgba(255,0,0,0.5);
			opacity: 0;
		}
		100% {
			opacity: 0;
		}
	}*/
	</style>
</head>
<body>
	<?php include "navbar.php";?>
	<div id="gambar">
		<section id="section07" class="demo">
			<button style="background: transparent; border: 0;" id="click"><span></span><span></span><span></span><br/><div style="font-size: 12px;">Click to <br/>scroll down</div></button>
		</section>
	</div>
	<br>
	<br>
	<div class="container" id="content">
		<div class="text-center"> 
			<h5><b>Welcome</h5> 
			Mahasiswa Baru 2017!
			<br>
			Pelatihan menjadi Mahasiswa dimulai SEKARANG ini, masa-masa persiapan kegiatan Orientasi Mahasiswa Baru.</b>
			<br>
			<br>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6" style = "margin-bottom : 5% ;">
				<h4><b>About</b></h4>
				<div style = "margin-top : 3% ;">
					<b>Welcome Grateful Generation 2017</b> adalah kegiatan untuk mahasiswa baru Universitas Kristen Petra yang terdiri atas proses penyambutan
					,
					pengenalan, dan pembekalan mengenai kehidupan dan lingkungan universitas
				</div> 
			</div>
			<div class ="col-sm-12 col-md-6">
				<h4><b>Tujuan WGG</b></h4>
				<ul>
					<li style ="padding-top : 0 ; ">
						<p>
							<h5>Tujuan Umum: </h5>
							Menyambut, membekali dan memperlengkapi para mahasiswa baru agar dapat lebih cepat beradaptasi untuk mempersiapkan diri menjadi mahasiswa baru yang maksimal dengan mengingatkan potensi dan keberhargaan diri, mengenal kondisi kampus dan kehidupan akademik serta mengenal lingkungan kampus (Siwalankerto dan Surabaya).
						</p>
					</li>
					<li>
						<p>
							<h5>Tujuan Khusus: </h5>
							<ul>
								<li>
									Mahasiswa terarah dan termotivasi untuk menemukan keunikan diri:
									<ol>
										<li>Mahasiswa mencoba memikirkan dan menemukan keunikan diri.</li>
										<li>Mahasiswa mampu melihat keunikan diri sebagai potensi unik untuk berdampak bagi kota dan bangsa di bidang ilmu masing-masing.</li>
										<li>Mahasiswa berani mempresentasikan keunikan dirinya.</li>
										<li>Menghargai keunikan orang lain.</li>
										<li>Mahasiswa mengetahui value kampus UK Petra (LIGHT).</li>
									</ol>
								</li>
								<li>
									Mahasiswa diperkenalkan dengan dunia perkuliahan dan mengetahui pola pikir dan perilaku secara umum sebagai seorang mahasiswa yang bertanggung jawab:
									<ol>
										<li>Mahasiswa yang aktif, disiplin, dan bersedia terlibat.</li>
										<li>Mahasiswa yang kritis dan kreatif.</li>
										<li>Mahasiswa yang beretika.</li>
										<li>Mahasiswa yang mengusahakan prestasi.</li>
										<li>Mahasiswa yang aktif mengikuti pergerakan kampus (green campus, mahasiswa menulis, mahasiswa aktif berprestasi).</li>
										<li>Mahasiswa yang berwawasan kebangsaan dan dampak bagi masyarakat, masyarakat ilmiah.</li>
									</ol>
								</li>
								<li>
									Mahasiswa mengetahui dan memahami karakter dari bidang ilmu Program Studi (Prodi) yang akan dijalani selama masa perkuliahan:
									<ol>
										<li>Gaya belajar selama menjadi mahasiswa Prodi.</li>
										<li>Jenis dan karakter tugas dan materi pembelajaran.</li>
										<li>Tantangan dan permasalahan yang perlu dihadapi.</li>
										<li>Profil lulusan dan karir untuk perencanaan strategi belajar.</li>
									</ol>
								</li>
								<li>
									Mahasiswa mengetahui dan dapat memanfaatkan semua fasilitas dan layanan yang disediakan kampus UK Petra.
								</li>
								<li>
									Mahasiswa disambut dan dapat menjalin keakraban dalam proses awal perkuliahan ini, menjalin hubungan persahabatan, kerjasama dan keakraban antar mahasiswa baru, dengan mahasiswa senior dan sivitas akademika lainnya.
								</li>
								<li>
									Mahasiswa baru memahami dan mengenali organisasi kemahasiswaan dan struktur perguruan tinggi.
								</li>
							</ul>
						</p>
					</li>
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