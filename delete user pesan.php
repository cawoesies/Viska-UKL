<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id_pesan=$_GET["id_pesan"];

$result= mysqli_query($conn,"DELETE FROM pesan WHERE id='$id_pesan'");
header('location:crud pesan.php');
?>