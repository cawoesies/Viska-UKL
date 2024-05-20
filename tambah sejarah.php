<h3> Tambah Sejarah</h3>

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