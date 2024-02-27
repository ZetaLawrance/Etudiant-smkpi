<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari permintaan POST
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);

    // Hapus data dari database
    $query = "DELETE FROM cart WHERE name = '$nama'";
    $result = mysqli_query($koneksi, $query);

    // Berikan tanggapan
    if ($result) {
        echo "Berhasil menghapus item dari database";
    } else {
        echo "Gagal menghapus item dari database";
    }
} else {
    // Tanggapan jika bukan metode POST
    echo "Metode tidak valid";
}
?>