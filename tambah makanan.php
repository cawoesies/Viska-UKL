<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode Makanan</td>
            <td><input type="text" name="id_makanan"></td>
        </tr>
        <tr>
            <td>Nama Makanan</td>
            <td><input type="text" name="nama_makanan"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="text" name="foto"></td>
        </tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </table>
</form>

<?php
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($mysqli,"INSERT INTO makanan set
    id_makanan = '$_POST[id_makanan]',
    nama_makanan = '$_POST[nama_makanan]',
    harga = '$_POST[harga]',
    foto = '$_POST[foto]'");

    echo "Data makanan baru telah tersimpan";
}

?>

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