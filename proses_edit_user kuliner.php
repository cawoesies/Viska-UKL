<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_kuliner = $_POST['id'];
    $nama_kuliner = $_POST['nama_kuliner'];
    $asal_kuliner = $_POST['asal_kuliner'];
    $informasi_kuliner = $_POST['informasi_kuliner'];

    //buat query update
    //$query = ($conn ,"UPDATE kuliner
    //SET nama_kuliner='$nama_kuliner',asal_kuliner='$asal_kuliner',informasi_kuliner='$informasi_kuliner' WHERE id='$id_kuliner'");
    //$query = "UPDATE kuliner SET nama_kuliner='$nama_kuliner', asal_kuliner='$asal_kuliner', informasi_kuliner='$informasi_kuliner' WHERE id=$id_kuliner";
    //$result = mysqli_query($conn, $query);
    $query = "UPDATE kuliner SET nama_kuliner='$nama_kuliner', asal_kuliner='$asal_kuliner', informasi_kuliner='$informasi_kuliner' WHERE id_kuliner=$id_kuliner";
    $result = mysqli_query($conn, $query);
    header('location: Edit_user kuliner.php');
} else {
    die("Akses dilarang");
}
