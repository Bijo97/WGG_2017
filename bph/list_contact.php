<?php
session_start();
include "connect.php";

if (!isset($_SESSION['admin'])){
	header("Location: index.php");
}

$sql = "SELECT * FROM contact ORDER BY id DESC";
$result = mysql_query($sql);
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List Contact | LKMM-TD XXVII</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <div class="col-sm-5">
      <h1>List Contact</h1><br>
    </div>
    <div class="col-sm-1 col-sm-offset-5" style="margin-top: 2%;">
    	<a href="logout.php"><button type="button" class="btn btn-danger" name="logout" id="logout">Log Out</button></a>
    </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <td>No.</td>
            <td>No. PAC</td>
            <td>Nama</td>
            <td>Subject</td>
            <td>Status</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
            <?php
             while ($row = mysql_fetch_array($result)){
                echo "<tr>
                        <td>".$i."</td>
                        <td>".$row['pac']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['subject']."</td>";
                if ($row['status'] == 2){
                  echo "<td style='color: blue;'>Sudah Dikirim</td>";
                } else if ($row['status'] == 1){
                  echo "<td style='color: green;'>Sudah Dibalas</td>";
                } else if ($row['status'] == 0){
                  echo "<td style='color: red;'>Belum Dibalas</td>";
                }
                echo "<td><a href='detail.php?id=".$row['id']."'><button type='button' class='btn btn-primary'>Read Message</button></a></td>
                      </tr>";
                $i++;
              }
            ?>
        </tbody>
      </table>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>