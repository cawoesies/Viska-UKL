<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id_kuliner=$_GET["id_kuliner"];

$result= mysqli_query($mysqli,"DELETE FROM kuliner WHERE id='$id_kuliner'");
header('location:crud kuliner.php');
?>