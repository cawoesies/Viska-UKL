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
    // $id_pesan = $_POST['id_pesan']; // Remove this line if id_pesan is not needed
    $kuliner = $_POST['kuliner'];
    $jumlah = $_POST['jumlah'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO pesan (kuliner, jumlah, nama, alamat, harga) VALUES ('$kuliner', '$jumlah', '$nama', '$alamat', '$harga')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
