<?php
$mysqli = new mysqli('localhost','root','','web_kuliner');
$id=$_GET["id"];

$result= mysqli_query($mysqli,"DELETE FROM user_form WHERE id='$id'");
header('location:crud.php');
