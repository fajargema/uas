<?php 
include '../../config.php';
$id = $_GET['id_aspirasi'];
mysqli_query($db, "DELETE FROM aspirasi WHERE id_aspirasi='$id'")
or die;
 
header("location:index.php");
?>