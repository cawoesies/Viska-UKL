<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_pesan = $_POST['id'];
    $kuliner = $_POST['kuliner'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];

    //buat query update
    // $mysqli_query = ($conn, "UPDATE pesan 
    // SET jumlah='$jumlah',alamat='$alamat',kuliner='$kuliner' WHERE id_pesan=$id_pesan");
    $query = "UPDATE pesan SET jumlah='$jumlah', alamat='$alamat', kuliner='$kuliner' WHERE id_pesan=$id_pesan";
    $result = mysqli_query($conn, $query);
    header('location: edit_user pesan.php');
} else {
    die("Akses dilarang");
}
