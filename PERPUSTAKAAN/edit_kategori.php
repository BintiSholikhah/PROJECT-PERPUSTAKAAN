<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $r = mysqli_query($con, "SELECT * FROM kategori WHERE id='$id'");
    $d = mysqli_fetch_array($r);
    $nama = $d['nama'];
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
              <form action="proses_edit_kategori.php" method="post">
              <p class="kk">EDIT KATEGORI</p>
                <div>
					<?php if (isset($_GET['error'])) { ?>
						<p class="errorr"><?php echo $_GET['error']; ?></p>
					<?php } ?>
                    <?php if (isset($_GET['berhasil'])) { ?>
						<p class="berhasill"><?php echo $_GET['berhasil']; ?></p>
					<?php } ?>
				</div>
          <div>
                <div class="main-user-info">
                  <div class="user-input-box">
                    <label for="">Nama *</label>
                    <input type="text" name="nama" placeholder="Nama Kategori" value=<?php echo $nama; ?>>
                  </div>
                </div>
              <div>
                <div class="main-user-info">
                  <div class="form-submit-btn">
                    <input type="submit" class= "btn" name="kembali" value="Kembali">
                  </div>
                  <div class="form-submit-btn">
                     <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" class= "btn" name="edit" value="Edit">
                  </div>
                </div>
              </div>
              </form>
            </div>
        </div>
</body>
</html>

