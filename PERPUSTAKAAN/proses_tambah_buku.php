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
    $judul= $_POST['judul'];
    $penulis= $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $id_kategori = $_POST['id_kategori'];

    $result = mysqli_query($con, "INSERT INTO buku SET id='', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun='$tahun', id_kategori='$id_kategori'");
    
    header("Location: admin.php");
}

?>