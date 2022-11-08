<?php
if($_GET['id_paket']){
    include "../../login/koneksi.php";
    $qry_hapus=mysqli_query($koneksi,"delete from paket where id_paket='".$_GET['id_paket']."'");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus paket laundry');location.href='paket.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus paket laundry');location.href='paket.php';</script>";
    }
}
?>
