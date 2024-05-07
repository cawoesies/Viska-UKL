<style>
     button{
    width: 70px;
    padding: 10px;
    margin: 20px 5px;
    text-align: center;
    border-radius: 15px;
    color: black;
    border: 2px;
    font-size: 15px;
    cursor: pointer;
    font-weight: 600;
   }
   button:hover{
    background: #FFCAD4;
    transition: 0.5s;
   }
   button:hover{
    color: white;
   }
    </style>
<DOCTYPE html>
<html>
<head>
    <title>Kuliner</title>
</head>
<body>
    <a href="Tabel View.php"><button type="button">Back</button></a>
<h1>Data pesan</h1>
<table border="1" cellspacing="0" width="50%">
    <tr style="text-align:center;font-weight:bold;background-color:#FFCAD4;">
        <th>No</th>
        <th>Kuliner</th>
        <th>Alamat</th>
        <th>Jumlah</th>
        <th colspan="2">Aksi</th>
    </tr>

<?php
//select tabel user dari database
$nomor = 1;
//echo $nomor;
include 'config.php';
$query_mysql = mysqli_query($conn, "SELECT * FROM pesan ")or die(mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr style="text-align:center;">
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['kuliner']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['jumlah']; ?></td>

        <td><span><a href='delete user pesan.php?id=<?php echo $data["id_pesan"];?>'>Hapus</a><span></td>
        <td><span><a href='Edit_user pesan.php?id=<?php echo $data["id_pesan"];?>'>Edit</a><span></td>

<?php } ?>
    </tr>
    </table>
</body>