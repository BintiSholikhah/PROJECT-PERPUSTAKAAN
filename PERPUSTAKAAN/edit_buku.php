<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $r = mysqli_query($con, "SELECT * FROM buku WHERE id='$id'");
    $d = mysqli_fetch_array($r);
    $judul = $d['judul'];
    $penulis = $d['penulis'];
    $penerbit = $d['penerbit'];
    $tahun = $d['tahun'];
    $id_kategori = $d['id_kategori']; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>PERPUSTAKAAN</title>
  <link rel="stylesheet" type="text/css" href="style6.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
        <div class="containerr">
              <form action="proses_edit_peminjaman.php" method="post">
              <p class="kk">EDIT BUKU</p>
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
                      <label for="judul">Judul Buku *</label>
                      <input type="text" name="judul" id="judul" placeholder="Judul Buku" value=<?php echo $judul; ?>>    
                    </div>

                    <div class="user-input-box">
                      <label for="judul">Penulis *</label>
                      <input type="text" name="penulis" id="penulis" placeholder="Penulis" value=<?php echo $penulis; ?>>    
                    </div>

                    <div class="user-input-box">
                      <label for="penerbit">Penerbit *</label>
                      <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit" value=<?php echo $penerbit; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="tahun">Tahun *</label>
                      <input type="text" name="tahun" id="tahun" placeholder="Tahun" value=<?php echo $tahun; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="id_kategori">Kategori *</label>
                      <select id="id_kategori" name="id_kategori">
                          <option  value=<?php echo $id_kategori; ?>> </option>
                          <?php 
                              $a = "SELECT id, nama FROM kategori";
                              $r = mysqli_query($con, $a);
                              while ($aa = mysqli_fetch_assoc($r)) {
                                  echo "<option value='" . $aa['id'] . "'>" . $aa['nama'] . "</option>";
                              }
                          ?>
                      </select>
                    </div>
                  
                    <div class="user-input-box"> </div>
                    <div class="form-submit-btn">
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

