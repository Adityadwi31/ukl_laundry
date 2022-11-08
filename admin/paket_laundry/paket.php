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
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../admindashboard.php"><img src="../assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="../admindashboard.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"><?=$_SESSION['nama']?></h5>
                <span>role <?=$_SESSION['role']?></span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../admindashboard.php">
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
          <a class="nav-link" href="../user_member/user.php">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Data User</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../paket_laundry/paket.php">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Paket Laundry</span>
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
        <li class="nav-item menu-items">
          <a class="nav-link" href="../outlet/outlet.php">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Outlet</span>
          </a>
        </li>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="../admindashboard.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
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
            <li class="nav-item dropdown border-left">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
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

                    <!-- tampil-->
                    <div class="col-lg-20 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">jenis Paket</h4>
                          <div class="table-responsive">
                            <table class="table table-dark">
                              <a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_paket">Tambah Paket</button></a><br><br>
                              <thead>
                                <tr>
                                  <th>NO</th>
                                  <th>Jenis Paket laundry</th>
                                  <th>Harga</th>
                                  <th>AKSI</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                include "../../login/koneksi.php";
                                $qry_paket = mysqli_query($koneksi, "select * from paket ");
                                $no = 0;
                                while ($data_paket = mysqli_fetch_array($qry_paket)) {
                                  $no++;
                                  $id = $data_paket['id_paket'];
                                ?>
                                  <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data_paket['jenis'] ?></td>
                                    <td><?= $data_paket['harga'] ?></td>
                                    <td>
                                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubah_paket<?php echo $data_paket['id_paket'] ?>">
                                        Ubah
                                      </button> |
                                      <a href="hapus_paket.php?id_paket=<?= $data_paket['id_paket'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                    </td>
                                  </tr>
                                  <!-- form ubah -->
                                  <div class="modal fade" id="ubah_paket<?php echo $data_paket['id_paket'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">ubah Paket</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p class="card-description"> </p>
                                          <?php
                                          include "../../login/koneksi.php";
                                          $id_paket = $data_paket['id_paket'];
                                          $qry_get_paket = mysqli_query($koneksi, "select * from paket where
                                          id_paket = '$id_paket'");
                                          $data_paket = mysqli_fetch_array($qry_get_paket);
                                          ?>
                                          <h3>Ubah Paket Laundry</h3>
                                          <form action="proses_ubah_paket.php" method="post">
                                            Jenis Paket Laundry :
                                            <?php
                                            $arr_jenis = array('kiloan' => 'kiloan', 'selimut' => 'selimut', 'bed_cover' => 'bed_cover', 'kaos' => 'kaos');
                                            ?>
                                            <select name="jenis" class="form-control text-light">
                                              <option></option>
                                              <?php foreach ($arr_jenis as $key_jenis => $val_jenis) :
                                                if ($key_jenis == $data_jenis['jenis']) {
                                                  $selek = "selected";
                                                } else {
                                                  $selek = "";
                                                }
                                              ?>
                                                <option value="<?= $key_jenis ?>" <?= $selek ?>><?= $val_jenis ?></option>
                                              <?php endforeach ?>
                                            </select>
                                            Harga :
                                            <input type="text" name="harga" value="<?= $data_paket['harga'] ?>" class="form-control text-light">
                                            <br>
                                            <input type="hidden" name="id_paket" value="<?= $data_paket['id_paket'] ?>">
                                            <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
                                            <button class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- akhir form ubah -->
                                <?php
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>
                          <!-- akhir tampil -->

                          <!-- form tambah -->
                          <div class="modal fade" id="tambah_paket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p class="card-description"> </p>
                                  <form class="forms-sample" action="" method="POST">
                                    <div class="form-group">
                                      <label for="exampleSelectGender">Jenis</label>
                                      <select name="jenis" id="" class="form-control text-light">
                                        <option value="-">-</option>
                                        <option value="kiloan">Kiloan</option>
                                        <option value="selimut">Selimut</option>
                                        <option value="bed_cover">Bed Cover</option>
                                        <option value="kaos">kaos</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Harga</label>
                                      <input type="text" name="harga" class="form-control text-light" id="exampleInputName1" placeholder="Masukan Harga">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- akhir form tambah -->
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
        <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../assets/vendors/chart.js/Chart.min.js"></script>
        <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../assets/js/off-canvas.js"></script>
        <script src="../assets/js/hoverable-collapse.js"></script>
        <script src="../assets/js/misc.js"></script>
        <script src="../assets/js/settings.js"></script>
        <script src="../assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
</body>

</html>
<!-- proses tambah -->
<?php
if ($_POST) {
  $jenis = $_POST['jenis'];
  $harga = $_POST['harga'];

  if (empty($jenis)) {
    echo "<script>alert('jenis laundry tidak boleh kosong');location.href='paket.php';</script>";
  } elseif (empty($harga)) {
    echo "<script>alert('harga tidak boleh kosong');location.href='paket.php';</script>";
  } else {
    include "../login/koneksi.php";
    $insert = mysqli_query($koneksi, "insert into `paket` ( `jenis`, `harga`) 
        value ('" . $jenis . "','" . $harga .  "')") or die(mysqli_error($koneksi));
    if ($insert) {
      echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
    } else {
      echo "<script>alert('Gagal menambahkan paket');location.href='paket.php';</script>";
    }
  }
}
