<?php
	if (isset($_GET['status'])){
		if ($_GET['status'] == 3){
			echo "<script>alert('Pesan anda sudah terkirim...');</script>";
		} else if ($_GET['status'] == 4){
			echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
		}
	}
	session_start();
	$_SESSION['page'] = "navtimeline";
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
	<div id="timeline">
		<div class="container">
			<h4>Timeline</h4>
			<div class="row">
				<div class="col">
					<h5>Welcome Grateful Generation 2017</h5>
					<h5 style="color: red;">Wajib untuk seluruh mahasiswa baru</h5>
				</div>
			</div>
			<div class="col-12">
				<table>
					<!-- KTM -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">03</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2"> - </td>
						<td style="font-size: 50px;" rowspan="2">14</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Pemotretan Mahasiswa Baru untuk Kartu Tanda Mahasiswa (KTM).<br/>Untuk pembagian jadwal pemotretan silahkan dilihat <a href="http://definitif-online.petra.ac.id/JadwalMahasiswaBaru/tabid/72/Default.aspx" target="_blank">disini</a></td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Tes Kesehatan -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">29</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juni</td>
						<td style="font-size: 50px;" rowspan="2"> - </td>
						<td style="font-size: 50px;" rowspan="2">20</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Tes Kesehatan Mahasiswa Baru di Laboratorium PARAHITA.<br/>Untuk mendownload surat pengantar tes kesehatan, silahkan login <a href="http://definitif-online.petra.ac.id/PengumumanPenerimaan/tabid/36/ctl/Login/Default.aspx?returnurl=%2fJadwalMahasiswaBaru%2ftabid%2f72%2fDefault.aspx" target="_blank">disini</a><br>
						Untuk keterangan lebih lanjut mengenai tes kesehatan, silahkan klik <a href="#" data-toggle="modal" data-target="#myModal">disini</a></td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Jadwal Tes Kesehatan Mahasiswa Baru 2017 Di LABORATORIUM PARAHITA (http://www.labparahita.com)</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
						      <b>PERSYARATAN</b> Mahasiswa <b>WAJIB</b>:
						      <ol>
						      	<li>Menunjukkan KTP / Kartu Pelajar / Kartu Definitif.</li>
						      	<li>Menyerahkan "Surat Pengantar Tes Kesehatan" kepada petugas Laboratorium yang bertugas. Surat Pengantar dapat dicetak melalui situs Definitif Mahasiswa Baru UK Petra.</li>
						      	<li>TIDAK PERLU MEMBAYAR biaya tes kepada Laboratorium.</li>
						      	<li>Hasil tes kesehatan dalam bentuk HARDCOPY (tercetak) adalah milik Mahasiswa, untuk itu boleh diambil oleh Mahasiswa. Hasil tes kesehatan berupa SOFTCOPY akan dikirimkan ke UK Petra.</li>
						      </ol>
						      <b>Catatan Penting!</b>
						      <ol>
						      	<li>Tes Kesehatan ini WAJIB dilakukan oleh Mahasiswa Baru 2017 di Laboratorium PARAHITA;  UK Petra tidak menerima hasil tes kesehatan yang dilakukan oleh Mahasiwa Baru 2017 diluar ketentuan yang sudah ditetapkan dengan alasan apapun; Jenis tes kesehatan yang akan dilakukan adalah Hematologi Lengkap, Urine Lengkap, Fungsi Liver, Fungsi Ginjal, ECG dan Thorax.</li>
						      	<li>Mahasiswa Baru 2017 melakukan Tes Kesehatan pada jadwal yang telah ditentukan yaitu: 
						      		<ul>
						      			<li>29 Juni s/d 16 Juli 2017 (untuk mahasiswa yang di kotanya ada cabang Lab. PARAHITA)</li>
						      				<ul>
						      					<li>SURABAYA, BANYUWANGI, JEMBER, SOLO, TANGERANG, BANDUNG, JAKARTA, YOGYAKARTA, MAKASSAR, BEKASI, SIDOARJO, GRESIK, MALANG, TUBAN (untuk alamat lengkap, silahkan melihat situs resmi LABORATORIUM PARAHITA)</li>
						      					<li>Disarankan agar mahasiswa mengatur waktu untuk melakukan tes kesehatan ini memperhatikan kapasitas laboratorium per hari dan banyaknya mahasiswa yang perlu tes.</li>
						      				</ul>
						      			<li>17 - 20 Juli 2017 (untuk mahasiswa yang di kotanya tidak ada cabang Laboratorium) sehingga mahasiswa dapat melakukan tes kesehatan di Surabaya, menjelang Orientasi Mahasiswa Baru UK Petra.</li>
						      			<li>Di LUAR dari batas waktu yang ditentukan, Mahasiswa Baru tidak diperkenankan melakukan Tes Kesehatan untuk keperluan Orientasi Mahasiswa Baru, sesuai dengan nota kerjasama antara Laboratorium Parahita dengan UK Petra, kecuali untuk kepentingan pribadi.</li>
						      		</ul>
						      	</li>
						      	<li>Setiap lokasi Laboratorium memiliki kapasitas layanan per hari. Untuk itu diharapkan mahasiswa dapat berkoordinasi dengan Laboratorium PARAHITA setempat untuk mengatur waktu melakukan tes kesehatan sehingga tidak berbenturan dengan peserta lainnya (bisa di telpon terlebih dahulu untuk janjian waktu).</li>
						      	<li>Hasil tes pemeriksaan laboratorium <b>TIDAK MEMPENGARUHI</b> proses penerimaan Mahasiswa, karena anda yang sudah memiliki NRP (Nomor Registrasi Pokok), berarti SUDAH diterima menjadi mahasiswa UK Petra.</li>
						      	<li>Mahasiswa baru juga diminta untuk mengisi Form Catatan Kesehatan yang akan disiapkan oleh panitia di situs WGG 2017 (http://wgg.petra.ac.id) . Form Catatan Kesehatan tersebut harap dibawa dan dikumpulkan saat Pertemuan Orang Tua atau Briefing Mahasiswa.</li>
						      </ol>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- RC -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2"> - </td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Remidial Courses (RC) - Bridging Program</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Sarasehan -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">21</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">22</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Pertemuan Orang Tua Mahasiswa Baru<br/>Untuk melihat <b>pembagian shift hari pertama dan kedua</b>, silahkan klik <a href="#" data-toggle="modal" data-target="#pembagian">disini</a></td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Briefing -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">24</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Briefing Welcome Grateful Generation 2017 </br>(disertai pembagian jas almamater dan kelengkapannya)</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Pra -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">25</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Juli</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">28</td>
						<td style="vertical-align: bottom;">Juli</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Pra Welcome Grateful Generation 2017<br/>Pengenalan Perpus, Pengenalan Sistem Informasi Mahasiswa, dan Tes Kepribadian & Tes Potensi Karir</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<?php
						$tgl = array(31,1,2,3,4);
						for ($i = 0; $i < 5; $i++) {
					?>
					<!-- H -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2"><?php echo $tgl[$i];?></td>
					<?php if ($i == 0) { ?>
						<td style="vertical-align: bottom;">Juli</td>
					<?php } else { ?>
						<td style="vertical-align: bottom;">Agustus</td>
					<?php } ?>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Day <?php echo $i+1; ?> Welcome Grateful Generation 2017</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<?php } ?>
					<!-- H -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">7</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Day 6 Welcome Grateful Generation 2017</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Freshmen -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">08</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Agustus</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">10</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">"<i><b>Freshmen Welcome Gathering</b></i>" tiap Prodi/Program</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Lat -->
					<tr>
						<td style="font-size: 50px;" rowspan="2">11</td>
						<td style="vertical-align: bottom; padding-top: 5px;">Agustus</td>
						<td style="font-size: 50px;" rowspan="2">-</td>
						<td style="font-size: 50px;" rowspan="2">12</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Latihan Upacara Bendera</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;">2017</td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Kul -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">14</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Masuk Perkuliahan</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
					<!-- Upacara -->
					<tr>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="vertical-align: bottom; padding-top: 5px;"></td>
						<td style="font-size: 50px;" rowspan="2"></td>
						<td style="font-size: 50px;" rowspan="2">17</td>
						<td style="vertical-align: bottom;">Agustus</td>
						<td style="padding-left: 20px; vertical-align: middle;" rowspan="2">Upacara Bendera</td>
					</tr>
					<tr>
						<td style="vertical-align: top; padding:0;"></td>
						<td style="vertical-align: top; padding:0;">2017</td>
					</tr>
				</table>
				<div class="modal fade" id="pembagian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Pembagian Shift Pertemuan Orang Tua Mahasiswa Baru</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<b>Keterangan:</b>
				      	<p>Baju bebas berkerah, rapi, sopan, dan bersepatu</p>
				        <table class="table table-bordered text-center shiftbriefing" style="font-size: 15px;" border="1">
				        	<tr>
				        		<td colspan="3" style="background-color: grey;"><b>JUMAT, 21 JULI 2017</b></td>
				        	</tr>
				        	<tr>
				        		<td>Program Studi</td>
				        		<td>Waktu</td>
				        		<td>Tempat</td>
				        	</tr>
				        	<tr>
				        		<td>DESAIN KOMUNIKASI VISUAL - DIGITAL MEDIA</td>
				        		<td rowspan="4" style="vertical-align: middle;">08.00 - 10.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK MESIN - OTOMOTIF</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>ILMU KOMUNIKASI</td>
				        		<td>T - 501</td>
				        	</tr>
				        	<tr>
				        		<td>DESAIN INTERIOR</td>
				        		<td>P - 703-704</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK SIPIL</td>
				        		<td rowspan="4" style="vertical-align: middle;">12.00 - 14.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>SASTRA INGGRIS - ENGLISH FOR CREATIVE INDUSTRY</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN KEPARIWISATAAN</td>
				        		<td>T - 501</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK ELEKTRO</td>
				        		<td>P-709</td>
				        	</tr>
				        	<tr>
				        		<td>ARSITEKTUR</td>
				        		<td rowspan="4" style="vertical-align: middle;">15.30 - 17.30</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN PEMASARAN</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>PENDIDIKAN GURU SEKOLAH DASAR</td>
				        		<td>Ruang Konferensi III</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK INFORMARTIKA - SISTEM INFORMASI BISNIS</td>
				        		<td>T - 502</td>
				        	</tr>
				        	<tr>
				        		<td colspan="3" style="background-color: grey;"><b>SABTU, 22 JULI 2017</b></td>
				        	</tr>
				        	<tr>
				        		<td>Program Studi</td>
				        		<td>Waktu</td>
				        		<td>Tempat</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN PERHOTELAN</td>
				        		<td rowspan="5" style="vertical-align: middle;">08.00 - 10.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>TEKNIK INDUSTRI</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>AKUNTANSI PAJAK</td>
				        		<td>T - 502</td>
				        	</tr>
				        	<tr>
				        		<td>INTERNATIONAL BUSINESS MANAGEMENT</td>
				        		<td>T - 503</td>
				        	</tr>
				        	<tr>
				        		<td>SASTRA TIONGHOA</td>
				        		<td>T - 418</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN BISNIS</td>
				        		<td rowspan="5" style="vertical-align: middle;">12.00 - 14.00</td>
				        		<td>AUDITORIUM</td>
				        	</tr>
				        	<tr>
				        		<td>MANAJEMEN KEUANGAN</td>
				        		<td>Ruang Konferensi IV</td>
				        	</tr>
				        	<tr>
				        		<td>INTERNATIONAL BUSINESS ENGINEERING</td>
				        		<td>Ruang Konferensi III</td>
				        	</tr>
				        	<tr>
				        		<td>AKUNTANSI BISNIS</td>
				        		<td>T - 502</td>
				        	</tr>
				        	<tr>
				        		<td>INTERNATIONAL BUSINESS ACCOUNTING</td>
				        		<td>T - 503</td>
				        	</tr>
				        </table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
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
    <script src="js/animasi.js"></script>
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