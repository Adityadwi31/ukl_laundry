<?php
if($_GET['id_outlet']){
    include "../../login/koneksi.php";
    $qry_hapus=mysqli_query($koneksi,"delete from outlet where id_outlet='".$_GET['id_outlet']."'");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus outlet');location.href='outlet.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus outlet');location.href='outlet.php';</script>";
    }
}
?>