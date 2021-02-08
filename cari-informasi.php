
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

      <h1 class="logo mr-auto"><a href="index.html">LAPOR!</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="">Lacak Laporan</a>
            <ul>
              <li><a href="cari-pengaduan.php">Pengaduan</a></li>
              <li><a href="cari-aspirasi.php">Aspirasi</a></li>
              <li><a href="cari-informasi.php">Permintaan Informasi</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#inti" class="get-started-btn scrollto">Mulai</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Permintaan Informasi</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Permintaan Informasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <form method="GET" action="cari-pengaduan.php" style="text-align: center;">
            <label>Kata Pencarian : </label>
            <input type="text" class="form-control" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
            <button type="submit" class="btn btn-primary">Cari</button>
	    </form>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Kode Permintaan Informasi</th>
                    <th>Judul Permintaan Informasi</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                //untuk meinclude kan koneksi
                include('config.php');
                $batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

				$previous = $halaman - 1;
				$next = $halaman + 1;
                

                    //jika kita klik cari, maka yang tampil query cari ini
                    if(isset($_GET['kata_cari'])) {
                        //menampung variabel kata_cari dari form pencarian
                        $kata_cari = $_GET['kata_cari'];

                        //jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
                        //jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
                        $query = "SELECT * FROM informasi WHERE kode like '%".$kata_cari."%' ORDER BY id_informasi ASC";
                    } else {
                        //jika tidak ada pencarian, default yang dijalankan query ini
                        $query = "SELECT * FROM informasi limit $halaman_awal, $batas";
                    }
                    

                    $result = mysqli_query($db, $query);
                    $jumlah_data = mysqli_num_rows($result);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($db)." - ".mysqli_error($db));
                    }
                    //kalau ini melakukan foreach atau perulangan
                    $total_halaman = ceil($jumlah_data / $batas);
                    $nomor = $halaman_awal+1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['kode']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td>
                        <?php
                            if($row['stat'] == 0){
                                echo '<span class="badge badge-warning">Proses</span>';
                            } else if ($row['stat'] == 1) {
                                echo '<span class="badge badge-success">Selesai</span>';
                            } else {
                                echo 'Tidak di ketahui';
                            }
                        ?>
                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

        <nav>
			<ul class="pagination justify-content-end">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>

      </div>
    </section>

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
          Template by <a href="https://bootstrapmade.com/">BootstrapMade</a> Redesigned by Fajar Gema
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://fajargema.my.id/" rel="" class="twitter"><i class="bx bxl-wordpress"></i></a>
        <a href="https://github.com/fajargema/" class="facebook"><i class="bx bxl-github"></i></a>
        <a href="https://instagram.com/fajargema" class="instagram"><i class="bx bxl-instagram"></i></a>
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