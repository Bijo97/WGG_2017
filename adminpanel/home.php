<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Welcome Grateful Generation - 2017</a>
    </ivd>
  </div>
</nav>
<form class="form-horizontal" action="process.php" method="POST">
  <fieldset style="width:400px; padding-left:5px; padding-bottom:5px;  border-radius:10px; margin:100px auto; background:white; margin-top:100px;">
    <legend> <center><h3> LOGIN </h3></center></legend> <!-- -->
    <div class="form-group">
      <label for="nrp" class="col-lg-2 control-label">NRP</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nrp" name="nrp" placeholder="12416122">
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="password" name ="password" placeholder="Masukkan Password SIM">
      </div>
    </div>
	<div class="form-group">
		<div class="g-recaptcha" data-sitekey="6LdjwSAUAAAAAGeVMXiqV8xbcxJEIn2kh4Wl2Pwd" style="transform:scale(0.85);transform-origin:0 0;"></div>
	</div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary" id="submit" name="submit" style="float: right;">Login</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>
