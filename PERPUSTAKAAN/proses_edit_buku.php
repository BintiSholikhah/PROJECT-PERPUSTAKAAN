<?php
	include('koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit= $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $id_kategori = $_POST['id_kategori'];


        $result = mysqli_query($con, "UPDATE buku SET judul='$judul', penulis='penulis', penerbit='$penerbit', tahun='$tahun', id_kategori='$id_kategori' WHERE id='$id'");

        header("Location: admin.php");
    }
    if (isset($_POST['kembali'])) {
        header("Location: admin.php");
    }
?>