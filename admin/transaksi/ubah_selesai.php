<?php
include "../../login/koneksi.php";
$tgl = date('Y-m-d');
$id_transaksi = $_GET['id_transaksi'];
$update=mysqli_query($koneksi,"update transaksi set status = 'Selesai',dibayar='belum bayar',tgl_bayar='$tgl' where id_transaksi='".$id_transaksi."'") or die(mysqli_error($koneksi));
header('location:histori_transaksi.php')
?>