<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id_pesan=$_GET["id_pesan"];

$result= mysqli_query($mysqli,"DELETE FROM pesan WHERE id_pesan='$id_pesan'");
header('location:crud pesan.php');
