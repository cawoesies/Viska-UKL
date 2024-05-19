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
   .btn{
    width: 90px;
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
   .btn:hover{
    background: #FFCAD4;
    transition: 0.5s;
   }
   .btn:hover{
    color: white;
   }
    </style>
<DOCTYPE html>
<html>
<head>
    <title>CRUD Sejarah</title>
</head>
<body>
    <a href="Tabel View.php"><button type="button">Back</button></a>
<h1>Data Sejarah</h1>
<table border="1" cellspacing="0" width="50%">
    <tr style="text-align:center;font-weight:bold;background-color:#FFCAD4;">
        <th>No</th>
        <th>Sejarah</th>
        <th>Informasi</th>
        <th colspan="2">Aksi</th>
    </tr>

<?php
//select tabel user dari database
$nomor = 1;
//echo $nomor;
include 'config.php';
$query_mysql = mysqli_query($conn, "SELECT * FROM sejarah ")or die(mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr style="text-align:center;">
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama_sejarah']; ?></td>
        <td><?php echo $data['informasi_sejarah']; ?></td>

        <td><span><a href='delete user sejarah.php?id=<?php echo $data["id_sejarah"];?>'>Hapus</a><span></td>
        <td><span><a href='Edit_user sejarah.php?id=<?php echo $data["id_sejarah"];?>'>Edit</a><span></td>

<?php } ?>
    </tr>
    </table>
    <div class="btn">
    <a href="tambah sejarah.php"><btn type="btn">Tambahkan</btn></a>
    </div>
</body>