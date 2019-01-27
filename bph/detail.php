<?php
session_start();
include "connect.php";

if (!isset($_SESSION['admin'])){
  header("Location: index.php");
}

  if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM contact WHERE id = ".$id;
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);

    $kueri = mysql_query("SELECT balasan FROM contactbalas WHERE idpesan = ".$id);
    $fets = mysql_fetch_array($kueri);
  } else {
    header("Location: list_contact.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Read Message | LKMM-TD XXVII</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      function simpan(){
        var idpesan = document.getElementById("idpesan").value;
        var balasan = document.getElementById("balasan").value;
        window.location.href = "update_balas.php?idpesan="+idpesan+"&balasan="+balasan;
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h1>Read Message</h1><br>
      <div class="row">
        <form>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="pac">No. PAC: </label>
            </div>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="pac" name="pac" value="<?php echo $row['pac']; ?>" readonly>
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="nama">Nama: </label>
            </div>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" readonly>
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="mail">Email: </label>
            </div>
            <div class="col-sm-11">
              <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $row['email']; ?>" readonly>
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="telp">Telpon: </label>
            </div>
            <div class="col-sm-11">
              <input type="number" class="form-control" id="telp" name="telp" value="<?php echo $row['telpon']; ?>" readonly>
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="tgl">Tanggal: </label>
            </div>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo $row['tgl']; ?>" readonly>
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="subjects">Subject: </label>
            </div>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="subjects" name="subjects" value="<?php echo $row['subject']; ?>" readonly>
            </div>
          </div><br><br>
          <div class="form-group">
            <div class="col-sm-1">
              <label for="message">Message: </label>
            </div>
            <div class="col-sm-11">
              <textarea class="form-control" rows="10" name="message" id="message" readonly><?php echo $row['message']; ?></textarea>
            </div>
          </div><br><br>
        </form>
      </div>
      <hr>

      <h1>Reply Message</h1><br>
      <div class="row">
        <?php
            if ($row['status'] == 0){
              echo "<h4>Pesan belum dibalas oleh Divisi Sekretariat....</h4>
            <div class='col-sm-2 col-sm-offset-5'>
                <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
             </div>";
          } else if ($row['status'] == 1){
        ?>
          <form action="insert_balas.php" method="post">
              <input type="hidden" name="idpesan" id="idpesan" value="<?php echo $id; ?>">
              <div class="form-group">
                <div class="col-sm-1">
                  <label for="email">Kirim ke: </label>
                </div>
                <div class="col-sm-11">
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>
                </div>
              </div><br><br>
              <div class="form-group">
                <div class="col-sm-1">
                  <label for="subject">Subject: </label>
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="subject" name="subject" value="<?php echo 'Reply: '.$row['subject'].' (LKMM-TD XXVII)'; ?>" readonly>
                </div>
              </div><br><br>
              <div class="form-group">
                <div class="col-sm-1">
                  <label for="balasan">Balasan: </label>
                </div>
                <div class="col-sm-11">
                  <textarea class="form-control" rows="10" name="balasan" id="balasan"><?php echo $fets['balasan']; ?></textarea><br>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2 col-sm-offset-4">
                  <button type="button" name="save" id="save" class="btn btn-primary form-control" onclick="simpan()">Save</button>
                </div>
                <div class="col-sm-2">
                  <button type="submit" name="send" id="send" class="btn btn-success form-control">Send Now</button>
                </div>
                <div class="col-sm-2">
                  <a href="list_contact.php"><button type="button" class="btn btn-warning form-control" name="back" id="back">Back</button></a><br><br>
                </div>
              </div>
            </form>
        <?php  
          } else if ($row['status'] == 2){
            echo "<h4>Pesan sudah dikirim lewat email...</h4>
            <div class='col-sm-2 col-sm-offset-5'>
                <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
             </div>";
            }
          ?>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>