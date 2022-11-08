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
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
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
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <!-- tampil member -->
                                <div class="col-lg-20 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Laporan Data Transaksi Laundry</h3>
                                            <div class="table-responsive">
                                                <table class="table table-dark" style="width : 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Paket</th>
                                                            <th>Jumlah</th>
                                                            <th>Total Harga</th>
                                                            <th>Tanggal</th>
                                                            <th>Tanggal bayar</th>
                                                            <th>Outlet</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include "../../login/koneksi.php";
                                                        $qry_transaksi = mysqli_query($koneksi, "select * from transaksi");
                                                        $no = 0;
                                                        $qry_member = mysqli_query($koneksi, " select * from member");
                                                        $dt_member = mysqli_fetch_array($qry_member);
                                                        $qry_paket = mysqli_query($koneksi, " select * from paket");
                                                        $dt_paket = mysqli_fetch_array($qry_paket);
                                                        $qry_user = mysqli_query($koneksi, " select * from user");
                                                        $dt_user = mysqli_fetch_array($qry_user);
                                                        $qry_outlet = mysqli_query($koneksi, " select * from outlet");
                                                        $dt_outlet = mysqli_fetch_array($qry_outlet);
                                                        while ($data_transaksi = mysqli_fetch_array($qry_transaksi)) {
                                                            $no++;
                                                            $id = $data_transaksi['id_transaksi'];
                                                            $qry_member_kembali = mysqli_query($koneksi, "select * from transaksi inner join member on member.id_member = transaksi.id_member where transaksi.id_transaksi = '" . $data_transaksi['id_transaksi'] . "'");
                                                            $data_member = mysqli_fetch_array($qry_member_kembali);
                                                            $qry_paket_kembali = mysqli_query($koneksi, "select * from transaksi inner join paket on paket.id_paket = transaksi.id_paket where transaksi.id_transaksi = '" . $data_transaksi['id_transaksi'] . "'");
                                                            $data_paket = mysqli_fetch_array($qry_paket_kembali);
                                                            $qry_outlet_kembali = mysqli_query($koneksi, "select * from transaksi inner join outlet on outlet.id_outlet = transaksi.id_outlet where transaksi.id_transaksi = '" . $data_transaksi['id_transaksi'] . "'");
                                                            $data_outlet = mysqli_fetch_array($qry_outlet_kembali);
                                                            $total = $data_paket['harga'] * $data_transaksi['qty'];

                                                        ?>
                                                            <tr>
                                                                <td><?= $no ?></td>
                                                                <td><?= $data_member['nama'] ?></td>
                                                                <td><?= $data_paket['jenis'] ?></td>
                                                                <td><?= $data_transaksi['qty'] ?></td>
                                                                <td>Rp. <?= $total ?></td>
                                                                <td><?= $data_transaksi['tgl'] ?></td>
                                                                <td><?= $data_transaksi['tgl_bayar'] ?></td>
                                                                <td><?= $data_outlet['nama_outlet'] ?></td>
                                                                <td><?= $data_transaksi['status'] ?></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table><br>
                                                <a href="histori_transaksi.php" class="btn" style="background-color:#800080;">Selesai</a> <br><br>
                                            </div>
                                            <!-- akhir tampil -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                <script>
                    window.print();
                </script>
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