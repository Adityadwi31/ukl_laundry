<?php
if($_GET['id_user']){
    include "../../login/koneksi.php";
    $qry_hapus=mysqli_query($koneksi,"delete from user where id_user='".$_GET['id_user']."'");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus user');location.href='user.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus user');location.href='user.php';</script>";
    }
}
?>