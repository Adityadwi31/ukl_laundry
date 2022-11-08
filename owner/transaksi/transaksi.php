<?php
include "../../header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laundry</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../admin/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="../kasirdashboard.php"><img src="../../admin/assets/images/logo.svg" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="../kasirdashboard.php"><img src="../../admin/assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="../../admin/assets/images/faces/face15.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?=$_SESSION['nama']?></h5>
                                <span>role <?=$_SESSION['role']?></span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../kasirdashboard.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../user_member/member.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Data Member</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../transaksi/transaksi.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../transaksi/histori_transaksi.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Histori Transaksi</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="../kasirdashboard.php"><img src="../../admin/assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="../../admin/assets/images/faces/face15.jpg" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?=$_SESSION['nama']?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0"><code>Yakin?</code></h6>
                                <div class="dropdown-divider"></div>
                                <p class="nav-item"> <a class="nav-link" href="../../login/logout.php">Log out <code></code></a></p>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- awal form transaksi -->
                                        <div class="col-lg-20 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Transaksi Member</h4>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" action="proses_transaksi.php" method="POST">
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Nama :</label>
                                                                <select name="id_member" class="text-light form-control">
                                                                    <option>-</option>
                                                                    <?php
                                                                    include "../../login/koneksi.php";
                                                                    $qry_member = mysqli_query($koneksi, "select * from member");
                                                                    while ($data_member = mysqli_fetch_array($qry_member)) {
                                                                        echo '<option value="' . $data_member['id_member'] . '">' . $data_member['nama'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleSelectGender">Jenis Paket :</label>
                                                                <select name="id_paket" class=" text-light form-control">
                                                                    <option>-</option>
                                                                    <?php
                                                                    include "../../login/koneksi.php";
                                                                    $qry_paket = mysqli_query($koneksi, "select * from paket");
                                                                    while ($data_paket = mysqli_fetch_array($qry_paket)) {
                                                                        echo '<option value="' . $data_paket['id_paket'] . '">' . $data_paket['jenis'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleSelectGender">Outlet :</label>
                                                                <select name="id_outlet" class=" text-light form-control">
                                                                    <option>-</option>
                                                                    <?php
                                                                    include "../../login/koneksi.php";
                                                                    $qry_outlet = mysqli_query($koneksi, "select * from outlet");
                                                                    while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
                                                                        echo '<option value="' . $data_outlet['id_outlet'] . '">' . $data_outlet['nama_outlet'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Jumlah :</label>
                                                                <input type="number" class=" text-light form-control" name="qty" value="1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleSelectGender">Status :</label>
                                                                <select name="status" id="" class="text-light form-control">
                                                                    <option value="-">-</option>
                                                                    <option value="baru">baru</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleSelectGender">Status Pembelian :</label>
                                                                <select name="dibayar" id="" class="text-light form-control">
                                                                    <option value="-">-</option>
                                                                    <option value="dibayar">dibayar</option>
                                                                    <option value="belum_dibayar">belum dibayar</option>
                                                                </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary me-2">Selanjutnya -></button>
                                                        </form>
                                                    </div>
                                                    <!-- akhir form transaksi-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- content-wrapper ends -->
                            <!-- partial:partials/_footer.html -->
                            <footer class="footer">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                                </div>
                            </footer>
                            <!-- partial -->
                        </div>
                        <!-- main-panel ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->
                <!-- plugins:js -->
                <script src="../../admin/assets/vendors/js/vendor.bundle.base.js"></script>
                <!-- endinject -->
                <!-- Plugin js for this page -->
                <script src="../../admin/assets/vendors/chart.js/Chart.min.js"></script>
                <script src="../../admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
                <script src="../../admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
                <script src="../../admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                <script src="../../admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
                <script src="../../admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
                <!-- End plugin js for this page -->
                <!-- inject:js -->
                <script src="../../admin/assets/js/off-canvas.js"></script>
                <script src="../../admin/assets/js/hoverable-collapse.js"></script>
                <script src="../../admin/assets/js/misc.js"></script>
                <script src="../../admin/assets/js/settings.js"></script>
                <script src="../../admin/assets/js/todolist.js"></script>
                <!-- endinject -->
                <!-- Custom js for this page -->
                <script src="../../admin/assets/js/dashboard.js"></script>
                <!-- End custom js for this page -->
</body>

</html>