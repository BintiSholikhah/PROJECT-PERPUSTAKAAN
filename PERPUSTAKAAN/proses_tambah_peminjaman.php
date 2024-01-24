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

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim= $_POST['nim'];
    $id_buku = $_POST['id_buku'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $max_pengembalian = $_POST['max_pengembalian'];
    $keterangan = $_POST['keterangan'];
    $tanggal_dikembalikan = $_POST['tanggal_dikembalikan'];
    $denda = $_POST['denda'];

    $result = mysqli_query($con, "INSERT INTO peminjaman SET id='', nama='$nama', nim='$nim', id_buku='$id_buku', tanggal_pinjam='$tanggal_pinjam', max_pengembalian='$max_pengembalian', keterangan='$keterangan', tanggal_dikembalikan='$tanggal_dikembalikan', denda='$denda'");
    
    header("Location: admin.php");
}

?>