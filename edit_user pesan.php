<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id_pesan']) ){
    header('location: crud pesan.php');
}
$id_pesan = $_GET['id_pesan'];

//fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pesan WHERE id_pesan=$id_pesan");

while($user_data = mysqli_fetch_array($result))
{
    $kuliner = $user_data['kuliner'];
    $alamat = $user_data['alamat'];
    $jumlah = $user_data['jumlah'];
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
                <td><input type="text" name="kuliner" value="<?php echo $kuliner ?>"></td>
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
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_pesan'];?>></td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>