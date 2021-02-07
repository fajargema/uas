<?php
// membuat koneksi 
include 'config.php';

// Deklarasi variable
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$submit = $_POST['submit'];

if(isset($submit)){

	if(empty($username) or empty($password)){

		echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('tambah.php') </script>";
	}else{

		$ins = mysqli_query($db,"INSERT into user(user_login,pass_login,nama) values ('$username','$password','$nama')");
		echo "<script>alert('Data berhasil di Tambah'); window.location=('login.php');</script>";
	}
}
?>