<?php 
include '../../config.php';

$id = $_POST['id_informasi'];
$stat = $_POST['stat'];
 
mysqli_query($db, "UPDATE informasi SET stat=1 WHERE id_informasi='$id'");
 
header("location:index.php");
?>