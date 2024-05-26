<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: crud makanan.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM makanan WHERE id_makanan=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_makanan = $user_data['nama_makanan'];
    $harga = $user_data['harga'];
    $foto = $user_data['foto'];
}

?>

<body>
    <header>
        <h3>Formulir Edit Makanan</h3>
    </header>
    <form method="POST" action="proses_edit_user makanan.php">
        <table>
            <tr>
                <td>Nama Makanan</td>
                <td><input type="text" name="nama_makanan" value="<?php echo $nama_makanan ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
            </tr> 
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto" value="<?php echo $foto ?>"></td>
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