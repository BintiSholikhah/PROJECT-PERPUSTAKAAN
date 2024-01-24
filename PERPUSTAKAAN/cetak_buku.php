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

$pdf->Cell(275, 7, 'DATA BUKU', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(100, 6, 'JUDUL', 1, 0, 'C');
$pdf->Cell(50, 6, 'PENULIS', 1, 0, 'C');
$pdf->Cell(50, 6, 'PENERBIT', 1, 0, 'C');
$pdf->Cell(25, 6, 'TAHUN', 1, 0, 'C');
$pdf->Cell(30, 6, 'KATEGORI', 1, 1, 'C');
$pdf->SetFont('Times', '', 10);

include 'koneksi.php';
$no=1;
$mahasiswa = mysqli_query($con, $sql1 = "SELECT * FROM buku");

while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(10, 6, $no++, 1, 0);
    $pdf->Cell(100, 6, $row['judul'], 1, 0, 'C');
    $pdf->Cell(50, 6, $row['penulis'], 1, 0, 'C');
    $pdf->Cell(50, 6, $row['penerbit'], 1, 0, 'C');
    $pdf->Cell(25, 6, $row['tahun'], 1, 0, 'C');
    $pdf->Cell(30, 6, $row['id_kategori'], 1, 1, 'C');
}
$pdf->Output();
