<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id=$_GET["id"];

$result= mysqli_query($mysqli,"DELETE FROM kuliner WHERE id_kuliner='$id'");
header('location:crud kuliner.php');
?>