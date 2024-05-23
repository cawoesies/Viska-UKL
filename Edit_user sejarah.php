<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: crud sejarah.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM sejarah WHERE id_sejarah=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_sejarah = $user_data['nama_sejarah'];
    $informasi_sejarah = $user_data['informasi_sejarah'];
}

?>

<body>
    <header>
        <h3>Formulir Edit Sejarah</h3>
    </header>
    <form method="POST" action="proses_edit_user sejarah.php">
        <table>
            <tr>
                <td>Nama Sejarah</td>
                <td><input type="text" name="nama_sejarah" value="<?php echo $nama_sejarah ?>"></td>
            </tr>
            <tr>
                <td>informasi</td>
                <td><input type="text" name="informasi_sejarah" value="<?php echo $informasi_sejarah ?>"></td>
            </tr>    
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

h3 {
    margin: 0;
}

form {
    background: white;
    padding: 20px;
    max-width: 600px;
    margin: 30px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
}

td {
    padding: 10px;
}

input[type="text"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #333;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #555;
}    
</style>