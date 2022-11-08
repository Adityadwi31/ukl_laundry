<?php
$koneksi=mysqli_connect('localhost','root','','laundry');
if (mysqli_connect_error()) {
    printf("koneksi gagal : %s\n",mysqli_connect_error());
    exit();
}
?>