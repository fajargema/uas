<?php
// membuat koneksi 
include 'config.php';

// Deklarasi variable
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$no_telp = $_POST['no_telp'];
$stat = $_POST['stat'];
$submit = $_POST['submit'];

if(isset($submit)){

	if(empty($username) or empty($password)){

		echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('daftar.php') </script>";
	}else{

		$ins = mysqli_query($db,"INSERT into user(user_login,pass_login,nama,email,no_telp,jk,stat) values ('$username','$password','$nama','$email','$no_telp','$jk','$stat')");
		echo "<script>alert('Data berhasil di Tambah'); window.location=('masuk.php');</script>";
	}
}
?>