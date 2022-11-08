<?php
include "../../login/koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$tgl = date('Y-m-d');
$update=mysqli_query($koneksi,"update transaksi set status = 'Diambil',dibayar='belum bayar',tgl_bayar='$tgl' where id_transaksi='".$id_transaksi."'") or die(mysqli_error($koneksi));
header('location:histori_transaksi.php')
?>