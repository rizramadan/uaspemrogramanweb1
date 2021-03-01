<?php
require_once "koneksi.php";

$id_pendaftar = $_POST["id_reg"];
$id = $_POST["id_reg"];
$nama_depan = $_POST["namadepan"];
$nama_belakang = $_POST["namabelakang"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$username = $_POST["username"];
$q = $database_connection->prepare(
    "UPDATE data_pendaftar SET 
        nama_depan= ?, 
        nama_belakang= ?,
        email= ?,
        username= ?
        WHERE id = ?;
    UPDATE biodata SET
    alamat= ?,
    telp =?
    WHERE id_pendaftar = ?;"
);
$q->execute([$nama_depan, $nama_belakang, $email, $username, $id, $alamat, $telp, $id_pendaftar]);
echo "<script>
alert('Informasi berhasil dirubah');
window.location.href='../halaman_setelah_login.php';
</script>";

// header("Location: ../halaman_setelah_login.php");
