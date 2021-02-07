<?php 
include '../../config.php';
$id = $_GET['id_informasi'];
mysqli_query($db, "DELETE FROM informasi WHERE id_informasi='$id'")
or die;
 
header("location:index.php");
?>