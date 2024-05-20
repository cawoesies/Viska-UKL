<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: crud makanan.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM makanan WHERE id_makanan=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_makanan = $user_data['nama_makanan'];
    $harga = $user_data['harga'];
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
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
