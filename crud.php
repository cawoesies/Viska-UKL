<DOCTYPE html>
<html>
<head>
    <title>Kuliner</title>
</head>
<body>
<h1>Data User & Admin</h1>
<table border="1" cellspacing="0" width="50%">
    <tr style="text-align:center;font-weight:bold;background-color:#FFCAD4;">
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
    </tr>

<?php
//select tabel user dari database
$nomor = 1;
//echo $nomor;
include 'config.php';
$query_mysql = mysqli_query($conn, "SELECT * FROM user_form ")or die(mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr style="text-align:center;">
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['user_type']; ?></td>
        
<?php } ?>
    </tr>
    </table>