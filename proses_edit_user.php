<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    //buat query update
    $result = mysqli_query($conn, "UPDATE user_form SET name='$name',email='$email',password='$password', user_type='$user_type' WHERE id=$id");
    header('location: Edit_user.php');
} else {
    die("Akses dilarang");
}
?>