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
