<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_pesan = $_POST['id_pesan'];
    $kuliner = $_POST['kuliner'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];

    //buat query update
    $result = mysqli_query($conn, "UPDATE pesan SET jumlah='$jumlah',alamat='$alamat',kuliner='$kuliner', WHERE id_pesan=$id_pesan");
    header('location: Edit_user pesan.php');
} else {
    die("Akses dilarang");
}
?>