<?php
	if (isset($_GET['status'])){
		if ($_GET['status'] == 3){
			echo "<script>alert('Pesan anda sudah terkirim...');</script>";
		} else if ($_GET['status'] == 4){
			echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
		}
	}
	session_start();
	$_SESSION['page'] = "navabout";
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
  </head>
  <body>
    <?php include "navbar.php";?>
	<div id="news" style="height: 100%;">
		<div class="container">
			<h4>About</h4>
			<div class="row">
				<div class="col">
					<h5>Welcome Grateful Generation 2017</h5>
				</div>
				<div class="col-8">
					<p><b>Welcome Grateful Generation 2017</b> adalah kegiatan untuk mahasiswa baru Universitas Kristen Petra yang terdiri atas proses penyambutan, pengenalan, dan pembekalan mengenai kehidupan dan lingkungan universitas.</p>
					<h5>Tujuan: </h5>
					<ul>
						<li>
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
	</div>
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
    </script>
  </body>
</html>