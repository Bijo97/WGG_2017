<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm-3" style='position: absolute; left:50%; top:50%; transform:translate(-50%, -50%);'>
      <div class="well">
        <h1 class="text-center">Welcome!</h1>
        <form method="POST" action="check_login.php">
          <div class="form-group">
            <label for="username">NRP : </label>
            <input type="text" name="nrp" id="username" class="form-control" placeholder="NRP" required>
          </div>
          <div class="form-group">
            <label for="password">Password : </label>
            <input type="password" name="pass" id="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>