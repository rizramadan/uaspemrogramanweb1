<?php
require_once "koneksi.php";
$id_register = $_GET["id"];
$id_pendaftar = $_GET["id"];
// echo $id_register;
$q = $database_connection->prepare("DELETE FROM data_pendaftar WHERE id = ?; DELETE FROM biodata WHERE id_pendaftar = ?;");
$q->execute([$id_register, $id_pendaftar]);
echo "<script>
alert('Akun berhasil dihapus');
window.location.href='../login.php';
</script>";
// header("Location: ../login.php");
