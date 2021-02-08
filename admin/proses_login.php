<?php
session_start();
// membuat koneksi 
include '../config.php';

// Deklarasi variable
$username = $_POST['username'];
$password = md5($_POST['password']);
$login =$_POST['login'];

if(isset($login)){

	if(empty($username) or empty($password)){

		echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); </script>";
		header('location:login.php');
	}else{

		$query = mysqli_query($db,"SELECT * from user where user_login = '$username' and pass_login = '$password'");
		if(mysqli_num_rows($query) > 0){

			$r = mysqli_fetch_array($query);
			$_SESSION['nama'] = $r['nama'];
			$_SESSION['username'] = $r['user_login'];

			header("location:index.php");
		}else{

			header("location:login.php");
		}
	}
}

?>