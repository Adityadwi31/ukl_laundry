<?php

if ($_POST) {

    $id_paket = $_POST['id_paket'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    if (empty($jenis)) {
        echo "<script>alert('jenis paket laundry tidak boleh kosong');location.href='paket.php';</script>";
    } elseif (empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='paket.php';</script>";
    } else {
        include "../../login/koneksi.php";
        $update = mysqli_query($koneksi, "update paket set jenis='" . $jenis . "',harga='" . $harga . "' where id_paket= '" . $id_paket . "' ") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update Paket');location.href='paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update Paket');location.href='paket.php;</script>";
            }
        }
    }

