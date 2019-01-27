<?php
	if (isset($_GET['status'])){
		if ($_GET['status'] == 3){
			echo "<script>alert('Pesan anda sudah terkirim...');</script>";
		} else if ($_GET['status'] == 4){
			echo "<script>alert('Maaf, ada kesalahan. Pesan anda tidak dapat dikirim...');</script>";
		}
	}
	session_start();
	$_SESSION['page'] = "navsiteplan";
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
    	body {
    		overflow: hidden;
    	}
    </style>
  </head>
  <body>
    <?php include "navbar.php";?>
	<div id="siteplan" style="height: 100%;">
		<div class="container">
			<h4>Siteplan</h4>
			<div class="row">
				<div class="col">
					<h5>Welcome Grateful Generation 2017</h5>
				</div>
			</div>
			<div class="col-12">
				<img src="images/siteplan_ukp.jpg" style="width: 100%;">
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
        })
    </script>
  </body>
</html>