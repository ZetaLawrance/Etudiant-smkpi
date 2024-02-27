<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_menu = $_POST['id_menu'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$soldout = $_POST['soldout'];

// menginput data ke database
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){
		$gambar = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar_menu/'.$rand.'_'.$filename);
        mysqli_query($koneksi,"INSERT INTO menu VALUES('','$nama','$keterangan','$harga','$soldout','$gambar')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=salah ukuran");
	}
}


// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>