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

if (isset($_POST['Submit']) && isset($_SESSION['id_user'])) {
    $id_makanan = $_POST['id_makanan'];
    $jumlah = $_POST['jumlah'];
    $id_user = $_POST['id_user'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];
    

    $sql = "INSERT INTO pesan (id_makanan, jumlah, id_user, alamat, harga) VALUES ('$id_makanan', '$jumlah','$id_user' , '$alamat', '$harga')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
