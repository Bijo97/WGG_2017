<?php
	if (isset($_GET['err'])){
		if ($_GET['err'] == 1){
			echo "<script>alert('Username atau password anda salah...');</script>";
		} else if ($_GET['err'] == 2){
			echo "<script>alert('Captcha yang anda masukkan salah...');</script>";
		} else if ($_GET['err'] == 3){
			echo "<script>alert('Mohon masukkan captcha terlebih dahulu...');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function validate()
{
	 var error="";
	 var name = document.getElementById( "username" );
	 if( name.value == "" )
	 {
	  error = "Harap isi m + NRP anda ";
	  alert(error);
	  return false;
	 }
	 var no = document.getElementById( "password" );
	 if( no.value == "" )
	 {
	  error = "Harap isi password SIM anda ";
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
html{
    padding-top : 20px;
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
	<title>Login Divisi Kesehatan Kesehatan WGG 2017</title>
	<meta name="theme-color" content="#1A47C4">
</head>
<body>
<div id="formku" class="container-fluid">
<center><h2>Login Panel Divisi Kesehatan<br> Welcome Grateful Generation 2017</h2></center><br><br>
	<div class="container">
			<div class="panel-body">
			<div class="panel panel-default">
				<form method="post" class="col-6" action="cek.php" onsubmit = "return validate();">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="username">Password:</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" name="submit" id="submit">Login</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>