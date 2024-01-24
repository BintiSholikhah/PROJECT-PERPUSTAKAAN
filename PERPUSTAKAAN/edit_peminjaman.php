<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $r = mysqli_query($con, "SELECT * FROM peminjaman WHERE id='$id'");
    $d = mysqli_fetch_array($r);
    $nama = $d['nama'];
    $nim = $d['nim'];
    $id_buku = $d['id_buku'];
    $tanggal_pinjam = $d['tanggal_pinjam'];
    $max_pengembalian = $d['max_pengembalian'];
    $keterangan = $d['keterangan'];
    $tanggal_dikembalikan = $d['tanggal_dikembalikan'];
    $denda = $d['denda']; 
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
                <input type="hidden" name="id" value="<?php echo $id?>">
              <p class="kk">EDIT PEMINJAMAN</p>
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
                      <label for="nama">Nama *</label>
                      <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value=<?php echo $nama; ?>>    
                    </div>

                    <div class="user-input-box">
                      <label for="nim">NIM *</label>
                      <input type="text" name="nim" id="nim" placeholder="Nim" value=<?php echo $nim; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="id_buku">Buku *</label>
                      <select id="id_buku" name="id_buku">
                          <option  value=<?php echo $id_buku; ?>> </option>
                          <?php 
                              $a = "SELECT id, judul FROM buku";
                              $r = mysqli_query($con, $a);
                              while ($aa = mysqli_fetch_assoc($r)) {
                                  echo "<option value='" . $aa['id'] . "'>" . $aa['judul'] . "</option>";
                              }
                          ?>
                      </select>
                    </div>

                    <div class="user-input-box">
                      <label for="tanggal_pinjam">Tanggal Pinjam *</label>
                      <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" placeholder="Tanggal Pinjam" value=<?php echo $tanggal_pinjam; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="max_pengembalian">Max Pengembalian *</label>
                      <input type="date" name="max_pengembalian" id="max_pengembalian" placeholder="Max Pengembalian" value=<?php echo $max_pengembalian; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="keterangan">Keterangan *</label>
                      <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" value=<?php echo $keterangan; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="tanggal_dikembalikan">Max Pengembalian *</label>
                      <input type="date" name="tanggal_dikembalikan" id="tanggal_dikembalikan" placeholder="Tanggal Dikembalikan" value=<?php echo $tanggal_dikembalikan; ?>>
                    </div>

                    <div class="user-input-box">
                      <label for="denda">Denda *</label>
                      <input type="text" name="denda" id="denda" placeholder="Denda" value=<?php echo $denda; ?>>
                    </div>

                    <div class="user-input-box"> </div>
                    <div class="form-submit-btn">
                      <input type="submit" class= "btn" name="kembali" value="Kembali">
                      <input type="submit" class= "btn" name="edit" value="Edit">
                    </div>
                </div>
              </form>
            </div>
        </div>
</body>
</html>

