<?php
if($_GET['id_transaksi']){
    include "../login/koneksi.php";
    $qry_hapus=mysqli_query($koneksi,"delete from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus Histori transaksi');location.href='histori_transaksi.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus Histori transaksi');location.href='histori_transaksi.php';</script>";
    }
}
