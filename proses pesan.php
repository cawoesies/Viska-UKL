<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_kuliner";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_makanan = $_POST['nama_makanan'];
    $jumlah = $_POST['jumlah'];
    $id_user = $_POST['id_user'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO pesan (nama_makanan, jumlah, id_user, alamat, harga) VALUES ('$nama_makanan', '$jumlah', 1, '$alamat', '$harga')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
