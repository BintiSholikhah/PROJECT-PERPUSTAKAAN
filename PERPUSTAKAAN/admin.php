<?php
	include "koneksi.php";

	session_start();
 
	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
		exit(); 
	}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERPUSTAKAAN</title>
    <link rel="stylesheet" href="style3.css" />
  </head>
  <body>
    
    <script src="javascript.js"></script>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="logo_perpus2.jpg"/></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
		  	<li><a href="#booking" class="tombol">Peminjaman</a></li>
            <li><a href="#kategori" class="tombol">Kategori</a></li>
            <li><a href="#payment" class="tombol">Buku</a></li>
            <li><a href="logout.PHP" class="tombol">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="layar-penuh">
      <main>
        <section id="booking">
          <div class="layar-dalam">
			<br>
            <h3>Peminjaman</h3>
			
				<table class="atas">
					<th><a href="tambah_peminjaman.PHP" class="tam">Tambah</a></th>
					<th><a href="cetak_peminjaman.PHP" class="tam">Cetak</a></th>
					<th></a></th>
					<th>
					<form class="xx" action="admin.php" method="GET" style="text-align: center">
						<input id="namanyay-search-box" name="cari1" type="text" placeholder="Cari Berdasarkan Nama" <?php if(isset($GET['cari1'])){echo $_GET['cari1']; }?>>
						<input id="namanyay-search-btn" value="Go" type="submit" name="go1"/>
					</form>	</th>
				</table>	
			<div class="contable">
				<table class="table1" cellpadding="10" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nim</th>
						<th>Judul Buku</th>
						<th>Tanggal Pinjam</th>
						<th>Maksimal Pengembalian</th>
						<th>Keterangan</th>
						<th>Tanggal Dikembalikan</th>
						<th>Denda</th>
						<th colspan="3" >Aksi</th>
					</tr>
					<?php 
							include "koneksi.php";
							if(isset($_GET['cari1'])){
								$pencarian = $_GET['cari1'];
								$sql1 = "SELECT peminjaman.id, peminjaman.nama, peminjaman.nim, buku.judul, peminjaman.tanggal_pinjam, peminjaman.max_pengembalian, peminjaman.keterangan, peminjaman.tanggal_dikembalikan, peminjaman.denda FROM peminjaman, buku WHERE peminjaman.id_buku = buku.id and peminjaman.nama LIKE '%".$pencarian."%'";
							}
							else
								$sql1 = "SELECT peminjaman.id, peminjaman.nama, peminjaman.nim, buku.judul, peminjaman.tanggal_pinjam, peminjaman.max_pengembalian, peminjaman.keterangan, peminjaman.tanggal_dikembalikan, peminjaman.denda FROM peminjaman, buku WHERE peminjaman.id_buku = buku.id ORDER BY id DESC;";


							$tampil1 = mysqli_query($con, $sql1);	
							if (mysqli_num_rows($tampil1) > 0) : 
            		$no1 = 1;
            		while ($row1 = mysqli_fetch_array($tampil1)) : 
            ?>
					<tr>
						<td><?= $no1++ ?></td>
						<td><?= $row1["nama"];?></td>
						<td><?= $row1["nim"];?></td>
						<td><?= $row1["judul"];?></td>
						<td><?= $row1["tanggal_pinjam"];?></td>
						<td><?= $row1["max_pengembalian"];?></td>
						<td><?= $row1["keterangan"];?></td>
						<td><?= $row1["tanggal_dikembalikan"];?></td>
						<td><?= $row1["denda"];?></td>
						<td>
							<a class="up" href= "edit_peminjaman.php?id=<?php echo $row1['id']; ?>">Edit</a> | 
							<a class="del" href= "delete_peminjaman.php?id=<?php echo $row1['id']; ?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
							<a class="print" href= "cetak_peminjaman-id.php?id=<?php echo $row1['id']; ?>">Cetak</a>
						</td>
					</tr>
					<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="10" align="center">Data tidak ditemukan!</td>
						</tr>
					<?php endif; ?>
				</table>
					</div>
            </div>
          </div>
        </section>

        <section id="kategori">
          <div class="layar-dalam">
            <h3>Kategori</h3>
			<table class="atas">
					<th><a href="tambah_kategori.PHP" class="tam">Tambah</a></th>
					<th><a href="cetak_kategori.PHP" class="tam">Cetak</a></th>
					<th></a></th>
					<th>
					<form class="xx" action="admin.php" method="GET">
						<input id="namanyay-search-box" name="cari2" type="text" placeholder="Cari Berdasarkan Nama" <?php if(isset($GET['cari2'])){echo $_GET['cari2']; }?>>
						<input id="namanyay-search-btn" value="Go" type="submit" name="go3"/>
					</form>	</th>
				</table>	
				<div class="contable">
				<table class="table1"  cellpadding="5" cellspacing="0">
					<tr>
						<th class="c1" >No</th>
						<th class="c2" >Nama</th>
						<th colspan="2" >Aksi</th>
					</tr>
					<?php 
						include "koneksi.php";
						if(isset($_GET['cari2'])){
							$pencarian2 = $_GET['cari2'];
							$sql2 = "SELECT * FROM kategori WHERE kategori.nama LIKE '%".$pencarian2."%' ";
						}
						else
							$sql2 = "SELECT * FROM kategori";
						
						$tampil2 = mysqli_query($con, $sql2);
						if (mysqli_num_rows($tampil2) > 0) :
            $no2 = 1;
           	while ($row2 = mysqli_fetch_array($tampil2)) : 
           ?>
					<tr>
						<td><?= $no2++ ?></td>
						<td><?= $row2["nama"];?></td>
						<td>
							<a class="up" href= "edit_kategori.php?id=<?php echo $row2['id']; ?>">Edit</a> | 
							<a class="del" href= "delete_kategori.php?id=<?php echo $row2['id']; ?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
						</td>
					</tr>
					<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="5" align="center">Data tidak ditemukan!</td>
						</tr>
					<?php endif; ?>
				</table>
					</div>
          </div>
        </section>

        <section id="payment">
          <div class="layar-dalam">
            <h3>Buku</h3>
				<table class="atas">
					<th><a href="tambah_buku.PHP" class="tam">Tambah</a></th>
					<th><a href="cetak_buku.PHP" class="tam">Cetak</a></th>
					<th></a></th>
					<th>
					<form class="xx" action="admin.php" method="GET">
						<input id="namanyay-search-box" name="cari3" type="text" placeholder="Cari Berdasarkan Judul" <?php if(isset($GET['cari3'])){echo $_GET['cari3']; }?>>
						<input id="namanyay-search-btn" value="Go" type="submit" name="go3"/>
					</form>	</th>
				</table>	
				<div class="contable">
				<table class="table1"  cellpadding="4" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tahun</th>
						<th>Kategori</th>

						<th colspan="2" >Aksi</th>
					</tr>

					<?php 
						include "koneksi.php";
						if(isset($_GET['cari3'])){
							$pencarian3 = $_GET['cari3'];
							$sql3 = "SELECT * FROM buku WHERE judul LIKE '%".$pencarian3."%' ";
						}
						else	
							$sql3 = "SELECT * FROM buku";


						$tampil3 = mysqli_query($con, $sql3);
						if (mysqli_num_rows($tampil3) > 0) :
            $no3 = 1;
           	while ($row3 = mysqli_fetch_array($tampil3)) : 
           ?>
					<tr>
						<td><?= $no3++ ?></td>
						<td><?= $row3["judul"];?></td>
						<td><?= $row3["penulis"];?></td>
						<td><?= $row3["penerbit"];?></td>
						<td><?= $row3["tahun"];?></td>
						<td><?= $row3["id_kategori"];?></td>
						<td>
							<a class="up" href= "edit_buku.php?id=<?php echo $row3['id']; ?>">Edit</a> | 
							<a class="del" href= "delete_buku.php?id=<?php echo $row3['id']; ?>" onclick="return confirm('Yakin data akan dihapus?');">Hapus</a>
						</td>
					</tr>
					<?php endwhile; ?>
					<?php else : ?>
						<tr>
							<td colspan="4" align="center">Data tidak ditemukan!</td>
						</tr>
					<?php endif; ?>
				</table><br>
				<div>
          </div>
        </section>
      </main>

      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Contact</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; BINTI SHOLIKHAH - 2100018299</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="js/script3.js"></script>
  </body>
</html>
