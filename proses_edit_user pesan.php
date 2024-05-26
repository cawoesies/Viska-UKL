<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_pesan = $_POST['id'];
    $kuliner = $_POST['kuliner'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    //buat query update
    // $mysqli_query = ($conn, "UPDATE pesan 
    // SET jumlah='$jumlah',alamat='$alamat',kuliner='$kuliner' WHERE id_pesan=$id_pesan");
    $query = "UPDATE pesan SET harga='$harga', jumlah='$jumlah', alamat='$alamat', nama='$nama', kuliner='$kuliner' WHERE id_pesan=$id_pesan";
    $result = mysqli_query($mysqli, $query);
    header('location: edit_user pesan.php');
} else {
    die("Akses dilarang");
}
