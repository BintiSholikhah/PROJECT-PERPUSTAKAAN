<?php
// Variable untuk koneksi ke MySQL
$host = "localhost";
$username = "root";
$password = "";
$databasename = "perpustakaan";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($host, $username, $password, $databasename);

// Perkondisian jika gagal konek ke MySQL
if (!$con) {
    echo "Error: ".mysqli_connect_error();
     exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <script src="javascript.js"></script>
	<div class="container">
        <div class="containerr">
            <form action="proses_tambah_buku.php" method="POST">
               <p class="kk">TAMBAH BUKU</p>
              <div class="main-user-info">
                <div class="user-input-box">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" id="judul" placeholder="Judul" required />
                </div>

                <div class="user-input-box">
                  <label for="penulis">Penulis</label>
                  <input type="text" name="penulis" id="penulis" placeholder="Penulis" oninput="validasiNama(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="penulis">Penerbit</label>
                  <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit" required />
                </div>

                <div class="user-input-box">
                  <label for="tahun">Tahun</label>
                  <input type="text" name="tahun" id="tahun" placeholder="Tahun" required />
                </div>

                <div class="user-input-box">
                  <label for="id_kategori">Kategori</label>
                  <select id="id_kategori" name="id_kategori" required oninput="validateKategori()">
                      <option disabled selected value="">Pilih Kategori</option>
                      <?php 
                        $a = "SELECT * FROM kategori";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id'] . "'>" . $aa['nama'] . "</option>";
                        }
                      ?>
                  </select>
                </div>
                  <div class="user-input-box">
                    <div class="form-submit-btn">
                      <input type="reset" class= "btn" name="kembali" value="Hapus">
                    </div>
                    <div class="form-submit-btn">
                      <input type="submit" class= "btn" id="submit" name="submit" value="Tambah">
                    </div>
                <div>
                </div>
              </form>
            </div>
        </div>
</body>
</html>

