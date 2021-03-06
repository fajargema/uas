<?php
	session_start();
	include '../../config.php';
	if(isset($_SESSION['username'])){

		$username = $_SESSION['username'];
		$nama = $_SESSION['nama'];
	}else{
		header("location:../../login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaduan</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lapor!</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../kategori/index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengaduan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../aspirasi/index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Aspirasi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../informasi/index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Permintaan Informasi</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nama; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../../assets/img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a href="../logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Pengaduan</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pengaduan</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $data=mysqli_query($db,"SELECT * FROM pengaduan, kategori where pengaduan.id_kategori=kategori.id");
                                        // $ambildata=mysqli_query($conect, "SELECT * FROM pengaduan, kategori where pengaduan.id_kategori=kategori.id order by id desc");
                                        $no=1;
                                        while ($r=mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $r['judul']; ?></td>
                                            <td>
                                                <?php
                                                    if (strlen($r["isi"])<=1) {
                                                        echo $r["isi"];
                                                    } else{
                                                        $y=substr($r["isi"],0,20) . '...';
                                                        echo $y;
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if (strlen($r["nama"])<=1) {
                                                        echo $r["nama"];
                                                    } else{
                                                        $y=substr($r["nama"],0,20) . '...';
                                                        echo $y;
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if($r['stat'] == 0){
                                                        echo '<span class="badge badge-warning">Proses</span>';
                                                    } else if ($r['stat'] == 1) {
                                                        echo '<span class="badge badge-success">Selesai</span>';
                                                    } else {
                                                        echo 'Tidak di ketahui';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <form action="status.php" method="post">
                                                    <input type="hidden" name="id_pengaduan" value="<?php echo $r['id_pengaduan']; ?>">
                                                    <input type="hidden" name="stat" value="<?php echo $r['stat']; ?>">
                                                    <?php
                                                    if($r['stat'] == 0){
                                                        echo '<button type="submit" class="btn btn-sm btn-success" name="submit"> <i class="fas fa-check-square"></i> </button> |';  
                                                    } else {
                                                        echo ' ';
                                                    }
                                                    ?>
                                                    <a class="btn btn-primary btn-sm" href="detail.php?id_pengaduan=<?php echo $r['id_pengaduan']; ?>"> <i class="fas fa-info"></i></a>
                                                     | 
                                                    <a class="btn btn-danger btn-sm" href="hapus.php?id_pengaduan=<?php echo $r['id_pengaduan']; ?>"> <i class="fas fa-trash"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Lapor! 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../assets/js/demo/datatables-demo.js"></script>
</body>

</html>