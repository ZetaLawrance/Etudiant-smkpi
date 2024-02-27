<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $no_wa = $_POST['noWa'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $message = $_POST['message'];
    header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama Pemesan:%20$nama%20%0DNoTelepon: $no_telp%20%0DAlamat: $alamat%20%0DTanggal: $tanggal%20%0DCatatan: $message%20%0D");
} else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
        ";
}
