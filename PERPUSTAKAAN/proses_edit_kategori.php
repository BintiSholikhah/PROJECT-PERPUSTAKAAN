<?php
	include('koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $result = mysqli_query($con, "UPDATE kategori SET nama='$nama' WHERE id='$id'");
        header("Location: admin.php");
        exit();
    }
    
    if (isset($_POST['kembali'])) {
        header("Location: admin.php");
    }

?>