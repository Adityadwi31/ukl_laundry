<?php

if ($_POST) {

    $id_member = $_POST['id_member'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];

    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='member.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='member.php';</script>";
    } elseif (empty($jenis_kelamin)) {
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='member.php';</script>";
    } elseif (empty($tlp)) {
        echo "<script>alert('no telepon tidak boleh kosong');location.href='member.php';</script>";
    } else {
        include "../../login/koneksi.php";
        $update = mysqli_query($koneksi, "update member set nama='" . $nama . "',alamat='" . $alamat . "', jenis_kelamin='" . $jenis_kelamin . "', tlp='" . $tlp. "' where id_member= '" . $id_member . "' ") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update siswa');location.href='member.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='member.php;</script>";
            }
        }
    }

