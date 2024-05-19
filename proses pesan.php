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

    $sql = "INSERT INTO pesan (kuliner, jumlah, alamat) VALUES ('$kuliner', $jumlah, '$alamat')";

    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
