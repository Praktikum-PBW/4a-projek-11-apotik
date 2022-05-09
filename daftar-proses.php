<?php
include 'lib/koneksi.php';
if (isset($_POST['daftar'])) {
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));

    $password = sha1($password);

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES(null,'$nama','$username','$password',default)");

    if ($query) {
        header("index.php?page=login");
    } else {
        $_SESSION['error'] = "Daftar Gagal";
        header("Location:index.php?page=daftar-akun");
    }
}
