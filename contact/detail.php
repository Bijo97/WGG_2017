<?php
session_start();
include "connect.php";

if (!isset($_SESSION['user'])){
  header("Location: index.php");
}

  if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM contact WHERE id = ".$id;
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
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
    <title>Read Message | WGG 2017</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      function kirim(id, kat){
      	var y = confirm('Anda yakin mau mengirim sekarang?');
      	if (y == true){
	        var email = document.getElementById("email").value;
	        window.location.href = "send.php?idpesan="+id+"&email="+email+"&kategori="+kat;
	    }
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
              <label for="nrp">PAC: </label>
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
              <label for="kategori">Kategori: </label>
            </div>
            <div class="col-sm-11">
              <?php
                if ($row['kategori'] == 1){
                  echo "<input type='text' class='form-control' id='kategori' name='kategori' value='Jadwal Kegiatan' readonly>";
                } else if ($row['kategori'] == 2){
                  echo "<input type='text' class='form-control' id='kategori' name='kategori' value='Peraturan & Ketentuan' readonly>";
                } else if ($row['kategori'] == 3){
                  echo "<input type='text' class='form-control' id='kategori' name='kategori' value='Lain-lain' readonly>";
                }
              ?>
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
              if ($_SESSION['user'] == "koor"){
        ?>
                <form action="insert_balas.php" method="post" onsubmit="return confirm('Anda yakin mau mensubmit sekarang?');">
                	<input type="hidden" name="idpesan" value="<?php echo $id; ?>">
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
                      <input type="text" class="form-control" id="subject" name="subject" value="<?php echo 'Reply: '.$row['subject'].' (WGG 2017)'; ?>" readonly>
                    </div>
                  </div><br><br>
                  <div class="form-group">
                    <div class="col-sm-1">
                      <label for="message">Pertanyaan: </label>
                    </div>
                    <div class="col-sm-11">
                      <textarea class="form-control" rows="10" name="pertanyaan" id="pertanyaan" readonly><?php echo $row['message']; ?></textarea><br>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1">
                      <label for="balasan">Balasan: </label>
                    </div>
                    <div class="col-sm-11">
                      <textarea class="form-control" rows="10" name="balasan" id="balasan"></textarea><br>
                    </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-2 col-sm-offset-4">
        	          	<button type="submit" name="submit" id="submit" class="btn btn-success form-control">Submit</button>
        	          </div>
                    <?php
        	          if ($row['kategori'] == 1){
                      echo "<div class='col-sm-2'>
                          <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                       </div>";
                     } else if ($row['kategori'] == 2){
                      echo "<div class='col-sm-2'>
                          <a href='list_contact2.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                       </div>";
                     } else if ($row['kategori'] == 3){
                      echo "<div class='col-sm-2'>
                          <a href='list_contact3.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                       </div>";
                     }
                    ?>
                  </div>
                </form>
          <?php
            } else if ($_SESSION['user'] == "bph"){
              if ($row['kategori'] == 1){
                echo "<h4>Pesan belum dibalas...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               } else if ($row['kategori'] == 2){
                echo "<h4>Pesan belum dibalas...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact2.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               } else if ($row['kategori'] == 3){
                echo "<h4>Pesan belum dibalas...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact3.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               }
            }
          } else if ($row['status'] == 1){
            if ($_SESSION['user'] == "bph"){
              $sql = "SELECT balasan FROM contactbalas WHERE idpesan = ".$id;
              $kueri = mysql_query($sql);
              $fets = mysql_fetch_array($kueri);
          ?>
              <form action="update_balas.php" method="post">
                <input type="hidden" name="idpesan" value="<?php echo $id; ?>">
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
                    <input type="text" class="form-control" id="subject" name="subject" value="<?php echo 'Reply: '.$row['subject'].' (WGG 2017)'; ?>" readonly>
                  </div>
                </div><br><br>
                <div class="form-group">
                    <div class="col-sm-1">
                      <label for="message">Pertanyaan: </label>
                    </div>
                    <div class="col-sm-11">
                      <textarea class="form-control" rows="10" name="pertanyaan" id="pertanyaan" readonly><?php echo $row['message']; ?></textarea><br>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label for="balasan">Balasan: </label>
                  </div>
                  <div class="col-sm-11">
                    <textarea class="form-control" rows="10" name="balasan" id="balasan"><?php echo $fets['balasan']; ?></textarea><br>
                  </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-2 col-sm-offset-3">
                    <button type="submit" name="update" id="update" class="btn btn-primary form-control">Update</button>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" name="send" id="send" class="btn btn-success form-control" onclick="kirim('<?php echo $id; ?>', '<?php echo $row['kategori']; ?>')">Send Now</button>
                  </div>
                  <?php
                  if ($row['kategori'] == 1){
                    echo "<div class='col-sm-2'>
                        <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                     </div>";
                   } else if ($row['kategori'] == 2){
                    echo "<div class='col-sm-2'>
                        <a href='list_contact2.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                     </div>";
                   } else if ($row['kategori'] == 3){
                    echo "<div class='col-sm-2'>
                        <a href='list_contact3.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                     </div>";
                   }
                  ?>
                </div>
              </form>
          <?php
            } else if ($_SESSION['user'] == "koor"){
              if ($row['kategori'] == 1){
                echo "<h4>Pesan belum dikirim oleh BPH...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               } else if ($row['kategori'] == 2){
                echo "<h4>Pesan belum dikirim oleh BPH...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact2.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               } else if ($row['kategori'] == 3){
                echo "<h4>Pesan belum dikirim oleh BPH...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact3.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               }
            }
          } else if ($row['status'] == 2){
            if ($row['kategori'] == 1){
                echo "<h4>Pesan sudah terkirim...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               } else if ($row['kategori'] == 2){
                echo "<h4>Pesan sudah terkirim...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact2.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               } else if ($row['kategori'] == 3){
                echo "<h4>Pesan sudah terkirim...</h4>
                <div class='col-sm-2 col-sm-offset-5'>
                    <a href='list_contact3.php'><button type='button' class='btn btn-warning form-control' name='back' id='back'>Back</button></a><br><br>
                 </div>";
               }
             }
          ?>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>