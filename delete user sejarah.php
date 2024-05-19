<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id=$_GET["id"];

$result= mysqli_query($mysqli,"DELETE FROM sejarah WHERE id_sejarah='$id'");
header('location:crud sejarah.php');
?>