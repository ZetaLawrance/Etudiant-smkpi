<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari permintaan POST
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $quantity = $_POST['quantity'];

    $quantity = (int)$quantity;

    if ($quantity == 1) {
        // Jika quantity adalah 1, lakukan update langsung ke 1
        $query = "UPDATE cart SET quantity = 1 WHERE name = '$nama'";
    } else {
        // Jika quantity bukan 1, lakukan update sesuai dengan nilai yang dikirim
        $query = "UPDATE cart SET quantity = '$quantity' WHERE name = '$nama'";
    }

    // Update quantity di database
    $result = mysqli_query($koneksi, $query);

    // Berikan tanggapan
    if ($result) {
        echo "Berhasil mengupdate quantity di database";
    } else {
        echo "Gagal mengupdate quantity di database";
    }
} else {
    // Tanggapan jika bukan metode POST
    echo "Metode tidak valid";
}
?>