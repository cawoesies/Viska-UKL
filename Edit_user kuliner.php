<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: crud kuliner.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM kuliner WHERE id_kuliner=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_kuliner = $user_data['nama_kuliner'];
    $asal_kuliner = $user_data['asal_kuliner'];
    $informasi_kuliner = $user_data['informasi_kuliner'];
}

?>

<body>
    <header>
        <h3>Formulir Edit Kuliner</h3>
    </header>
    <form method="POST" action="proses_edit_user kuliner.php">
        <table>
            <tr>
                <td>Nama Kuliner</td>
                <td><input type="text" name="nama_kuliner" value="<?php echo $nama_kuliner ?>"></td>
            </tr>
            <tr>
                <td>Asal Kuliner</td>
                <td><input type="text" name="asal_kuliner" value="<?php echo $asal_kuliner ?>"></td>
            </tr>    
            <tr>
                <td>informasi</td>
                <td><input type="text" name="informasi_kuliner" value="<?php echo $informasi_kuliner ?>"></td>
            </tr>    
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
