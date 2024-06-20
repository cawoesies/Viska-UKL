<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id_pesan']) ){
    header('location: crud pesan.php');
}
$id_pesan = $_GET['id_pesan'];

//fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesan WHERE id_pesan=$id_pesan");

while($user_data = mysqli_fetch_array($result))
{
    $id_makanan = $user_data['id_makanan'];
    $id_user = $user_data['id_user'];
    $alamat = $user_data['alamat'];
    $jumlah = $user_data['jumlah'];
    $harga = $user_data['harga'];
}

?>

<body>
    <header>
        <h3>Formulir Edit pesan</h3>
    </header>
    <form method="POST" action="proses_edit_user pesan.php">
        <table>
            <tr>
                <td>Kuliner</td>
                <td><input type="text" name="id_makanan" value="<?php echo $id_makanan ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="id_user" value="<?php echo $id_user ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
            </tr>    
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $jumlah?>"></td>
            </tr>  
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga?>"></td>
            </tr>   
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_pesan'];?>></td>
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