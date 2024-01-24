<?php
	include('koneksi.php');

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nim= $_POST['nim'];
        $id_buku = $_POST['id_buku'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $max_pengembalian = $_POST['max_pengembalian'];
        $keterangan = $_POST['keterangan'];
        $tanggal_dikembalikan = $_POST['tanggal_dikembalikan'];
        $denda = $_POST['denda'];
        
        $result = mysqli_query($con, "UPDATE peminjaman SET nama='$nama', nim='$nim', id_buku='$id_buku', tanggal_pinjam='$tanggal_pinjam', max_pengembalian='$max_pengembalian', keterangan='$keterangan', tanggal_dikembalikan='$tanggal_dikembalikan', denda='$denda' WHERE id='$id'");

        header("Location: admin.php");
    }
    if (isset($_POST['kembali'])) {
        header("Location: admin.php");
    }
?>