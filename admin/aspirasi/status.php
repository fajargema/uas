<?php 
include '../../config.php';

$id_aspirasi = $_POST['id_aspirasi'];
$stat = $_POST['stat'];

$sql = mysqli_query($db, "UPDATE aspirasi SET stat=1 WHERE id_aspirasi='$id_aspirasi'");
// var_dump($id);

header("location:index.php");
?>