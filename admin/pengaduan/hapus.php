<?php 
include '../../config.php';
$id = $_GET['id_pengaduan'];
mysqli_query($db, "DELETE FROM pengaduan WHERE id_pengaduan='$id'")
or die;
 
header("location:index.php");
?>