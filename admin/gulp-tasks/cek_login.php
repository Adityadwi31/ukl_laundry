<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan passwaord yang sesuai 
$login = mysqli_query($koneksi, "select * from user where username='$username'and password='$password'");

// menghitung jumlah data yang ditemukan 
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['role'] == "admin") {
        session_start();
        // buat session login username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        $_SESSION['status_login'] = true;

        // alihkan ke halaman dashboard admin
        header("location:../admin/admindashboard.php");


        // cek jika user login sebagai kasir
    } else if ($data['role'] == "kasir") {
        session_start();
        // buat session login usernamen
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "kasir";
        $_SESSION['status_login'] = true;
        // alihkan ke halaman dashboard kasir
        header("location:../transaksi/kasir.php");


        // cek juka user login sebagai owner 
    } else if ($data['role'] == "owner") {
        session_start();
        // buat session login username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "owner";
        $_SESSION['status_login'] = true;
        // alihkan ke halaman dashboard admin
        header("location:../owner/owner.php");
        // alihkan ke halam login kembali
    } else {
        echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
}
