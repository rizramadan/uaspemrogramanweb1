<?php 
session_start();
require_once 'koneksi.php'; // panggil perintah koneksi database 

if(!isset($_SESSION['username'] )== 0) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: ../login.php');
}

if(isset($_POST['login'])) { // mengecek apakah form pada login.php variabelnya ada isinya
    $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
    $password = $_POST['password'];
    // echo $username;
    // echo $password; // isi variabel dengan mengambil data password pada form

    try {
        $sql = "SELECT * FROM `data_pendaftar` WHERE username = ? AND password = SHA1(?)"; // buat queri select
        $q = $database_connection->prepare($sql);
        $q->execute([$username, $password]); // jalankan query

        $count = $q->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['username'] = $username; // set sesion dengan variabel username
            header("Location: ../halaman_setelah_login.php"); // lempar variabel ke tampilan index.php
            return;
        }else{
            header("Location: ../error.php");
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>