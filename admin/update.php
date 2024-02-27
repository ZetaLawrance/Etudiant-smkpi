<?php 
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_menu = $_POST['id_menu'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$soldout = $_POST['soldout'];
$gambar = $_POST['gambar'];

// header("location:index.php");

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
    $gambar = $rand.'_'.$filename;
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar_menu/'.$rand.'_'.$filename);
	if(empty($filename)){		
		mysqli_query($koneksi,"update menu set nama='$nama', keterangan='$keterangan', harga ='$harga', soldout='$soldout' where id_menu='$id_menu'");
		header("location:index.php?alert=berhasil");
	}else{
        mysqli_query($koneksi,"update menu set nama='$nama', keterangan='$keterangan', harga ='$harga', soldout='$soldout', gambar='$gambar' where id_menu='$id_menu'");
		header("location:index.php?alert=gagak_ukuran");
	}


?>
