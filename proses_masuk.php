<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db,"select * from user where user_login='$username' and pass_login='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['stat']== 1){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['stat'] = 1;
		// alihkan ke halaman dashboard admin
		header("location:index.php");

	}else{

		// alihkan ke halaman login kembali
		// header("location:index.php?pesan=gagal");
	}	
}else{
	// header("location:index.php?pesan=gagal");
}

?>