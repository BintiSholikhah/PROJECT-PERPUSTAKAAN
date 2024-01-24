<?php
    // Memanggil file koneksi.php
    include "koneksi.php";

    // Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
    if (isset($_POST['submit'])) {

        // Variable untuk menampung data $_POST yang dikirimkan melalui form.
        $nama = $_POST['nama'];

        if(empty($nama)){
            header("Location: tambah_kategori.php?error=Isi Nama Kategori");
            exit();
        } else if(strlen($nama) >= 50) {
            header("Location: tambah_kategori.php?error=Nama Lebih Dari 50 Karakter");
            exit();
        } else {
            $result = mysqli_query($con, "INSERT INTO payment VALUES('','$nama')");
            header("Location: tambah_kategori.php?berhasil=Data Berhasil Disimpan");
            exit();
        }
    }

    if (isset($_POST['kembali'])) {
        header("Location: admin.php");
    }
?>