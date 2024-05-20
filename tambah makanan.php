<h3> Tambah Makanan</h3>

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
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </table>
</form>

<?php
include "config.php";

if(isset($_POST['proses'])){
    mysqli_query($conn,"INSERT INTO makanan set
    id_makanan = '$_POST[id_makanan]',
    nama_makanan = '$_POST[nama_makanan]',
    harga = '$_POST[harga]'");

    echo "Data makanan baru telah tersimpan";
}

?>