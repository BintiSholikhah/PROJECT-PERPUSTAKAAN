<?php  
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@2"></script>
    <title>PERPUSTAKAAN</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <script src="js/script2.js"></script>
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
            <li><a href="#home" class="tomboll">Home</a></li>
            <li><a href="#aboutus" class="tomboll">About Us</a></li>
            <li><a href="#contact" class="tomboll">Contact</a></li>
            <li><a href="login.PHP" class="tombol">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="perpus_uad.mp4" type="video/mp4" />
        </video>
      </header>

      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <p class="ringkasan">
              SISTEM MANAJEMEN PERPUSTAKAAN
            </p>
            <div class="konten-isi">
              <p>
                Sistem Manajemen Perpustakaan adalah perangkat lunak atau sistem yang dirancang khusus untuk membantu dalam mengelola dan mengorganisir operasi perpustakaan. Tujuan utamanya adalah meningkatkan efisiensi, akurasi, dan keterampilan manajemen dalam pengelolaan sumber daya perpustakaan, termasuk koleksi buku, data anggota, dan transaksi peminjaman.
              </p>
            </div>
          </div>
        </section>

        <section class="abuabu" id="pricelist">
          <div class="layar-dalam">
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('images1.jpeg')"
                ></div>
                <div class="text">
                  <article>
                    <h4>SELAMAT DATANG</h4>
                    <p>
                      Catat hari dan tanggalnya, jangan sampai kelewatan. Info selengkapnya ada di <a href="https://www.instagram.com/uad_perpustakaan/">Instagram</a>
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('images3.jpeg')"
                ></div>
                <div class="text">
                  <article>
                    <h4>KHUSUS MABA 2023</h4>
                    <p>
                      Catat hari dan tanggalnya, jangan sampai kelewatan. Info selengkapnya ada di <a href="https://www.instagram.com/uad_perpustakaan/">Instagram</a>
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>

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
  </body>
</html>
