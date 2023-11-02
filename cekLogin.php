<?php
include 'koneksi.php';

if (isset($_POST['btnlogin'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $query=mysqli_query($koneksi, "SELECT * FROM register WHERE email = '$Email'");
    $data=mysqli_fetch_array($query);

    if (mysqli_num_rowa($query == 1)) {
        if (password_verify($Password,$data('password'))) {
            // Login valid
            header('location:homepage.php');
        } else {
            // Password salah
            header('location: nyoba.php?pesan=Password Salah');
        }
    } else {
        // Email salah
        header('location: login.php?pesan=Email Salah');
    }
}
?>
