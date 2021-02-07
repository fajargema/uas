<?php 
include '../../config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
 
mysqli_query($db, "UPDATE kategori SET nama='$nama' WHERE id='$id'");
 
header("location:index.php");
?>