<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id=$_GET["id"];

$result= mysqli_query($mysqli,"DELETE FROM makanan WHERE id_makanan='$id'");
header('location:crud makanan.php');
