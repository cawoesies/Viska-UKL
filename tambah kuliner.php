<h3> Tambah kuliner</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode kuliner</td>
            <td><input type="text" name="id_kuliner"></td>
        </tr>
        <tr>
            <td>Nama Kuliner</td>
            <td><input type="text" name="nama_kuliner"></td>
        </tr>
        <tr>
            <td>Asal Kuliner</td>
            <td><input type="text" name="asal_kuliner"></td>
        </tr>
        <tr>
            <td>Informasi</td>
            <td><input type="text" name="informasi_kuliner"></td>
        </tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </table>
</form>

<?php
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($conn,"INSERT INTO kuliner set
    id_kuliner = '$_POST[id_kuliner]',
    nama_kuliner = '$_POST[nama_kuliner]',
    asal_kuliner = '$_POST[asal_kuliner]',
    informasi_kuliner = '$_POST[informasi_kuliner]'");

    echo "Data kuliner baru telah tersimpan";
}

?>