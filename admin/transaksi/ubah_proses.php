<?php
include "../../login/koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$update=mysqli_query($koneksi,"update transaksi set status = 'Proses',dibayar='belum bayar' where id_transaksi='".$id_transaksi."'") or die(mysqli_error($koneksi));
header('location:histori_transaksi.php')
?>