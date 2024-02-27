<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_menu'];


// menghapus data dari database
mysqli_query($koneksi,"delete from menu where id_menu='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>