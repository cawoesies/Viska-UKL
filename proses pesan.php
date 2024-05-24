<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_kuliner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kuliner = $_POST['kuliner'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO pesan (kuliner, jumlah, alamat, harga) VALUES ('$kuliner', $jumlah, '$alamat', '$harga')";

    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
