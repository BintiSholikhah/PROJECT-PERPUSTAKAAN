<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times', 'B', 16);
// mencetak string
$pdf->Cell(275, 7, 'PERPUSTAKAAN UAD', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);

$pdf->Cell(275, 7, 'DATA PEMINJAMAN', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(30, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(20, 6, 'NIM', 1, 0, 'C');
$pdf->Cell(70, 6, 'JUDUL', 1, 0, 'C');
$pdf->Cell(25, 6, 'PINJAM', 1, 0, 'C');
$pdf->Cell(30, 6, 'MAX KEMBALI', 1, 0, 'C');
$pdf->Cell(40, 6, 'KET', 1, 0, 'C');
$pdf->Cell(40, 6, 'DIKEMBALIKAN', 1, 0, 'C');
$pdf->Cell(20, 6, 'DENDA', 1, 1, 'C');
$pdf->SetFont('Times', '', 10);

include 'koneksi.php';
$no=1;
$mahasiswa = mysqli_query($con, $sql1 = "SELECT peminjaman.nama, peminjaman.nim, buku.judul, peminjaman.tanggal_pinjam, peminjaman.max_pengembalian, peminjaman.keterangan, peminjaman.tanggal_dikembalikan, peminjaman.denda FROM peminjaman, buku WHERE peminjaman.id_buku = buku.id");

while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(10, 6, $no++, 1, 0);
    $pdf->Cell(30, 6, $row['nama'], 1, 0, 'C');
    $pdf->Cell(20, 6, $row['nim'], 1, 0, 'C');
    $pdf->Cell(70, 6, $row['judul'], 1, 0, 'C');
    $pdf->Cell(25, 6, $row['tanggal_pinjam'], 1, 0, 'C');
    $pdf->Cell(30, 6, $row['max_pengembalian'], 1, 0, 'C');
    $pdf->Cell(40, 6, $row['keterangan'], 1, 0, 'C');
    $pdf->Cell(40, 6, $row['tanggal_dikembalikan'], 1, 0, 'C');
    $pdf->Cell(20, 6, $row['denda'], 1, 1, 'C');
}
$pdf->Output();
