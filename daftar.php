<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LAPOR! - Masuk</title>
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
              <p class="text-center">Daftar Akun</p>
            </div>

            <form action="proses_daftar.php" method="post">

              <div class="form-group">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap Anda">
              </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukan Username Anda">
                </div>

                <div class="form-group">
                    <label for="email">E-Mail :</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukan E-Mail Anda">
                </div>
                
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                    <label for="jk">Jenis Kelamin :</label>
                    <select name="jk" class="form-control">
                        <option value="l">Laki-Laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_telp">No. Telp :</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="Masukan no_telp Anda">
                </div>
              </div>
                
              </div>

              <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password Anda">
              </div>

              <input type="hidden" name="stat" value="1">
              
              
              <div class="text-right">
                <a href="daftar.php">Sudah memilikin akun? Masuk</a> | 
                <button type="submit" class="btn btn-primary" name="submit">Daftar</button>
                
              </div>
              <a href="index.php" class="btn btn-primary">Kembali</a>

            </form>
          </div>
        </div>

        <div class="col-lg-2 col-md-4">
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

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