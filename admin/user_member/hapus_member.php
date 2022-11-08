<?php
if($_GET['id_member']){
    include "../../login/koneksi.php";
    $qry_hapus=mysqli_query($koneksi,"delete from member where id_member='".$_GET['id_member']."'");
    if($qry_hapus){
        echo"<script>alert('Sukses menghapus Member');location.href='member.php';</script>";
    }else{
        echo"<script>alert('Gagal menghapus Member');location.href='member.php';</script>";
    }
}
?>