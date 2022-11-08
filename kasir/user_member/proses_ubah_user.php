<?php

if ($_POST) {

    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='user.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='user.php';</script>";
    } elseif (empty($role)) {
        echo "<script>alert('role tidak boleh kosong');location.href='user.php';</script>";
    } else {
        include "../../login/koneksi.php";
        $update = mysqli_query($koneksi, "update user set nama='" . $nama . "',username='" . $username . "', role='" . $role. "' where id_user= '" . $id_user . "' ") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update siswa');location.href='user.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='user.php;</script>";
            }
        }
    }

