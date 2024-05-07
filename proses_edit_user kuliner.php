<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_kuliner = $_POST['id_kuliner'];
    $nama_kuliner = $_POST['nama_kuliner'];
    $asal_kuliner = $_POST['asal_kuliner'];
    $informasi_kuliner = $_POST['informasi_kuliner'];

    //buat query update
    $result = mysqli_query($conn, "UPDATE kuliner SET nama='$nama_kuliner',asal='$asal_kuliner',informasi='$informasi_kuliner', WHERE id=$id_kuliner");
    header('location: Edit_user kuliner.php');
} else {
    die("Akses dilarang");
}
?>