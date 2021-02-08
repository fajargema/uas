<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/user/img/favicon.png" rel="icon">
  <link href="assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/user/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/user/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/user/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/user/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">OnePage</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-11 text-center">
          <h3><b>Layanan Aspirasi dan Pengaduan Online Rakyat</b></h3>
          <h2>Sampaikan laporan Anda langsung kepada Pemerintah Desa</h2>
        </div>
      </div>

      <div class="row icon-boxes">
        <div class="col-lg-2 col-md-4">
        </div>

        <div class="col-lg-8 col-md-10 mt-4 mt-md-0">
          <div class="icon-box">
            <div class="bage">
              <p>Sampaikan Laporan Anda</p>
            </div>
            <p>Pilih Tipe Laporan</p>
              <div class="row">
                <div class="col-6 col-md-4">
                    <a href="/" class="btn-aktip">PENGADUAN</a>
                </div>
                <div class="col-6 col-md-4">
                    <a href="aspirasi.php" class="btn-tiga">ASPIRASI</a>
                </div>
                <div class="col-6 col-md-4">
                    <a href="informasi.php" class="btn-tiga">INFORMASI</a>
                </div>
              </div>

            <form action="proses_pengaduan.php" method="post" enctype="multipart/form-data">

              <div class="form-group pt-5">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" name="judul" placeholder="Ketik Judul Laporan Anda">
              </div>

              <div class="form-group">
                <label for="isi">Isi :</label>
                <textarea class="form-control" name="isi" rows="6" placeholder="Ketik Isi Laporan Anda"></textarea>
              </div>

              <div class="form-group">
                <label for="tgl_terjadi">Tanggal Kejadian :</label>
                <input type="date" class="form-control" name="tgl_terjadi">
              </div>

              <div class="form-group">
                <label for="lokasi">Lokasi Kejadian :</label>
                <input type="text" class="form-control" name="lokasi" placeholder="Ketik Lokasi Kejadian">
              </div>

              <div class="form-group">
                <label for="kategori">Kategori :</label>
                <select name="id_kategori" class="form-control">
                  <option value="">Pilih Kategori Laporan Anda</option>
                  <?php
                      include 'config.php';
                      $data=mysqli_query($db,"SELECT * FROM kategori");
                      while ($r=mysqli_fetch_array($data)) {
                  ?>
                  <option value="<?php echo $r['id']; ?>"><?php echo $r['nama']; ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                  <label for="gambar_produk">Upload Lampiran</label>
                  <input type="file" class="form-control" name="gambar_produk" id="gambar_produk">
              </div>
              
              <input type="hidden" name="tgl_dikirim" value="<?php echo date("Y-m-d"); ?>"">
              <input type="hidden" name="stat" value="0"">

              <button type="submit" class="btn btn-primary" name="simpan">LAPOR!</button>

            </form>

          </div>
        </div>

        <div class="col-lg-2 col-md-4">
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">65</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">85</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">12</span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">15</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>LAPOR!</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/user/vendor/jquery/jquery.min.js"></script>
  <script src="assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/user/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/user/vendor/php-email-form/validate.js"></script>
  <script src="assets/user/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/user/vendor/counterup/counterup.min.js"></script>
  <script src="assets/user/vendor/venobox/venobox.min.js"></script>
  <script src="assets/user/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/user/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/user/js/main.js"></script>

</body>

</html>