<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_sejarah = $_POST['id'];
    $nama_sejarah = $_POST['nama_sejarah'];
    $informasi_sejarah = $_POST['informasi_sejarah'];

    //buat query update
    $query = "UPDATE sejarah SET nama_sejarah='$nama_sejarah', informasi_sejarah='$informasi_sejarah' WHERE id_sejarah=$id_sejarah";
    $result = mysqli_query($conn, $query);
    header('location: Edit_user sejarah.php');
} else {
    die("Akses dilarang");
}
?>