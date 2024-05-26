<?php

include("config.php");

// cek apakah tombol simpan diklik atau belum?
if(isset($_POST['Simpan'])){

    $id_makanan = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto'];

    //buat query update
    $query = "UPDATE makanan SET nama_makanan='$nama_makanan', harga='$harga', foto='$foto' WHERE id_makanan=$id_makanan";
    $result = mysqli_query($mysqli, $query);
    header('location: Edit_user makanan.php');
} else {
    die("Akses dilarang");
}
