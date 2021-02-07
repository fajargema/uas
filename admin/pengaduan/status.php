<?php 
include '../../config.php';

$id = $_POST['id_pengaduan'];
$stat = $_POST['stat'];
 
mysqli_query($db, "UPDATE pengaduan SET stat=1 WHERE id_pengaduan='$id'");
 
header("location:index.php");
?>