<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){
    // Retrieve and sanitize user input
    $id_makanan = mysqli_real_escape_string($mysqli, $_POST['id_makanan']);
    $nama_makanan = mysqli_real_escape_string($mysqli, $_POST['nama_makanan']);
    $jumlah = mysqli_real_escape_string($mysqli, $_POST['jumlah']);
    $id_user = mysqli_real_escape_string($mysqli, $_SESSION['user_id']);
    $alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
   
    // Insert order data into the orders table including total price
    $query = "INSERT INTO pesan (id_makanan, jumlah, id_user, alamat) VALUES ('$id_makanan', '$jumlah', '$id_user', '$alamat')";

    if(mysqli_query($mysqli, $query)){
        // Redirect to a confirmation page or display a success message
        header('Location: success.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
?>
