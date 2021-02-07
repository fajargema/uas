<?php
// membuat koneksi 
include '../../config.php';

// Deklarasi variable
$nama = $_POST['nama'];
$submit =$_POST['submit'];

if(isset($submit)){

	if(empty($nama)){

		echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('tambah.php') </script>";
	}else{

		$ins = mysqli_query($db,"INSERT into kategori(nama) values ('$nama')");
		echo "<script>alert('Data berhasil di Tambah'); window.location=('index.php');</script>";
	}
}
?>