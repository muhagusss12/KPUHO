<?php
include 'koneksi.php';
if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($konek, "SELECT * FROM tb_admin WHERE username='$username' and password='$password'");
    $data = mysqli_fetch_array($query);


    if (mysqli_num_rows($query) == 1) {
        header('location:index.php');
    } else{
        header('location:login.php?pesan=Username atau Password Anda Salah');
    }
}

?>