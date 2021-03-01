<?php
require_once "koneksi.php";
$id_pendaftar = $_POST['id_pendaftar'];
$password = $_POST['password'];

if ($id_pendaftar == "") {
    echo "Tidak bisa melakukan upload file karena user tidak tersedia di tabel User Data";
} else {
    $q = $database_connection->prepare("UPDATE `data_pendaftar` SET password = SHA1(?) 
    WHERE `id`=?");
    $q->execute([$password, $id_pendaftar]);
    echo "<script>
alert('Password telah diganti');
window.location.href='../halaman_setelah_login.php';
</script>";
    // header("Location: ../halaman_setelah_login.php");
}
