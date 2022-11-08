<?php

if ($_POST) {

    $id_outlet = $_POST['id_outlet'];
    $nama_outlet = $_POST['nama_outlet'];
    $alamat = $_POST['alamat'];
    $fasilitas = $_POST['fasilitas'];
    $tlp = $_POST['tlp'];

    if (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');location.href='outlet.php';</script>";
    } elseif (empty($fasilitas)) {
        echo "<script>alert('Fasilitas tidak boleh kosong');location.href='outlet.php';</script>";
    } elseif (empty($nama_outlet)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='outlet.php';</script>";
    } elseif (empty($tlp)) {
        echo "<script>alert('No Telepon tidak boleh kosong');location.href='outlet.php';</script>";
    } else {
        include "../../login/koneksi.php";
        $update = mysqli_query($koneksi, "update outlet set alamat='" . $alamat . "',fasilitas='" . $fasilitas . "',tlp='" . $tlp . "',nama_outlet='" . $nama_outlet . "' where id_outlet= '" . $id_outlet . "' ") or die(mysqli_error($koneksi));
        if ($update) {
            echo "<script>alert('Sukses update outlet');location.href='outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal update outlet');location.href='outlet.php;</script>";
        }
    }
}
