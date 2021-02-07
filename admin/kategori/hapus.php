<?php 
include '../../config.php';

$id = $_GET['id'];
mysqli_query($db, "DELETE FROM kategori WHERE id='$id'")
or die;
 
header("location:index.php");
?>