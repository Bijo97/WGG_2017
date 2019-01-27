<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page | WGG 2017</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>Login Page</h1><br>
      <div class="row">
        <form action="cek.php" method="post">
          <div class="form-group">
            <div class="col-sm-1">
              <label for="nrp">Username: </label>
            </div>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="user" name="user">
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="pass">Password: </label>
            </div>
            <div class="col-sm-11">
              <input type="password" class="form-control" id="pass" name="pass">
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-5">
              <button type="submit" name="submit" id="submit" class="btn btn-primary form-control">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>