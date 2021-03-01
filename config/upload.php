<?php
require_once "koneksi.php";
$id_pendaftar = $_POST['id_pendaftar'];
$foto = $_POST['foto'];

if ($id_pendaftar == "") {
    echo "Tidak bisa melakukan upload file karena user tidak tersedia di tabel User Data";
} else {
    $q = $database_connection->prepare("UPDATE `biodata` SET `foto` = ? 
    WHERE `id_pendaftar`=?");
    $q->execute([$foto, $id_pendaftar]);
    echo "<script>
alert('Foto profil berhasil dirubah');
window.location.href='../halaman_setelah_login.php';
</script>";
    // header("Location: ../halaman_setelah_login.php");
}
