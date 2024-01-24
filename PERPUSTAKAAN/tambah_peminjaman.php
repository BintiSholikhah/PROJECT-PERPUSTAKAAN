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
            <form action="proses_tambah_peminjaman.php" method="POST">
               <p class="kk">TAMBAH PEMINJAMAN</p>
              <div class="main-user-info">
                <div class="user-input-box">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" oninput="validasiNama(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="nim">NIM</label>
                  <input type="text" name="nim" id="nim" placeholder="nim" oninput="validasiNim(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="id_buku">Buku</label>
                  <select id="id_buku" name="id_buku" required oninput="validateKategori()">
                      <option disabled selected value="">Pilih Buku</option>
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
                  <label for="tanggal_pinjam">Tanggal Pinjam</label>
                  <input class="ddate" type="date" name="tanggal_pinjam" id="tanggal_pinjam" placeholder="Tanggal Pinjam" required />
                </div>

                <div class="user-input-box">
                  <label for="max_pengembalian">Max Pengembalian</label>
                  <input class="ddate" type="date" name="max_pengembalian" placeholder="Max Pengembalian" required>
                </div>

                <div class="user-input-box">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" name="keterangan" placeholder="Keterangan" required>
                </div>

                <div class="user-input-box">
                  <label for="tanggal_dikembalikan">Tanggal Dikembalikan</label>
                  <input class="ddate" type="date" name="tanggal_dikembalikan" placeholder="Tanggal Dikembalikan">
                </div>

                <div class="user-input-box">
                  <label for="denda">Denda</label>
                  <input type="text" name="denda" placeholder="Isi dengan angka 0 pada saat peminjaman" required>
                </div>

                  <div class="user-input-box">
                    <div class="form-submit-btn">
                      <input type="reset" class= "btn" name="kembali" value="Hapus">
                    </div>
                    <div class="form-submit-btn">
                      <input type="submit" class= "btn" id="submit" name="submit" value="Tambah">
                    </div>
                </div>
              </form>
            </div>
        </div>
</body>
</html>

