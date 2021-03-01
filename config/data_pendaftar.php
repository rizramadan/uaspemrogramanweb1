<?php
require_once 'koneksi.php';
$username = $_SESSION['username'];

try {
    $sql = 'SELECT * FROM  `data_pendaftar` WHERE username = ? ';
    $q = $database_connection->prepare($sql);
    $q->execute([$username]); // jalankan query
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name:" . $e->getMessage());
}
