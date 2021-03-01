<?php
require_once "koneksi.php";
// $id_register = $_POST["id_reg"];
// echo $id_register;
$nama_depan = $_POST["namadepan"];
$nama_belakang = $_POST["namabelakang"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

// $q = $database_connection->prepare("INSERT INTO `data_pendaftar` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`) VALUES (NULL, ?, ?, ?, ?, SHA1(?)) INSERT INTO `biodata` (`id_pendaftar`) VALUES (LAST_INSERT_ID());");
$q = $database_connection->prepare("INSERT INTO data_pendaftar VALUES (NULL, ?, ?, ?, ?, SHA1(?)); INSERT INTO biodata (id_pendaftar) VALUES (LAST_INSERT_ID());");
$q->execute([$nama_depan, $nama_belakang, $email, $username, $password]);
echo "<script>
alert('Akun baru telah dibuat');
window.location.href='../login.php';
</script>";
// header("Location: ../halaman_setelah_login.php");
