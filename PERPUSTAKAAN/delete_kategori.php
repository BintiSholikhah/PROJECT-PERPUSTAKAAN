<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "perpustakaan";

    // Syntax untuk koneksi ke MySQL
    $con = mysqli_connect($host, $username, $password, $databasename);

    $id = $_GET['id'];
    $sql = "DELETE FROM kategori WHERE id = '$id'";
    
    if ($con->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Tutup koneksi ke database
    $con->close();

    header("Location: admin.php");
?>