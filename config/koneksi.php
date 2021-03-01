<?php
$database_hostname="localhost";
$database_username="root";
$database_password="";
$database_name="uasweb1";

// $database_hostname="sql201.epizy.com"; db hostname sesudah di hosting
// $database_username="epiz_28045663"; db username sesudah di hosting
// $database_password="BC3sRzLMkX"; db password sesudah di hosting
// $database_name="epiz_28045663_uasweb1"; db name sesudah di hosting

try{
    //sintaks berhasil
    $database_connection= new PDO("mysql:host=$database_hostname;dbname=$database_name",
    $database_username,$database_password);
    $cek="Koneksi Berhasil";
    // echo $cek;
}catch(PDOException $x){
    die($x->getMessage());
}
?>