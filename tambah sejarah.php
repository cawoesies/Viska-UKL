<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode Sejarah</td>
            <td><input type="text" name="id_sejarah"></td>
        </tr>
        <tr>
            <td>Nama Sejarah</td>
            <td><input type="text" name="nama_sejarah"></td>
        </tr>
        <tr>
            <td>Informasi</td>
            <td><input type="text" name="informasi_sejarah"></td>
        </tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </table>
</form>

<?php
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($conn,"INSERT INTO sejarah set
    id_sejarah = '$_POST[id_sejarah]',
    nama_sejarah = '$_POST[nama_sejarah]',
    informasi_sejarah = '$_POST[informasi_sejarah]'");

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