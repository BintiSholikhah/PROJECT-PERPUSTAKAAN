<?php  
	// menghubungkan dengan kpassksi
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
        <div class="containerr">
              <form action="proses_tambah_kategori.php" method="post">
              <p class="kk">TAMBAH KATEGORI</p>
                <div>
          					<?php if (isset($_GET['error'])) { ?>
          					<p class="errorr"><?php echo $_GET['error']; ?></p>
          					<?php } ?>
                    <?php if (isset($_GET['berhasil'])) { ?>
          					<p class="berhasill"><?php echo $_GET['berhasil']; ?></p>
          					<?php } ?>
          				</div>
                <div class="main-user-info">
                  <div class="user-input-box">
                    <label for="nama">Nama Kategori *</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Kategori"/>
                  </div>
                </div>
                    <div class="main-user-info">
                      <div class="form-submit-btn">
                        <input type="submit" class= "btn" id="submit" name="submit" value="Tambah">
                        <input type="submit" class= "btn" id="kembali" name="kembali" value="Kembali">
                      </div>
                    </div>
                  </div>
              </form>
            </div>
        </div>
</body>
</html>

