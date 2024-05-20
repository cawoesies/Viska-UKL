<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id=$_GET["id"];

$result= mysqli_query($mysqli,"DELETE FROM pesan WHERE id_pesan='$id'");
header('location:crud pesan.php');
?>