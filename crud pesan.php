<style>
    button {
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

    button:hover {
        background: #FFCAD4;
        transition: 0.5s;
    }

    button:hover {
        color: white;
    }

    .btn {
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

    .btn:hover {
        background: #FFCAD4;
        transition: 0.5s;
    }

    .btn:hover {
        color: white;
    }
</style>
<DOCTYPE html>
    <html>

    <head>
        <title>CRUD Pesan</title>
    </head>

    <body>
        <a href="Tabel View.php"><button type="button">Back</button></a>
        <h1>Data pesan</h1>
        <table border="1" cellspacing="0" width="50%">
            <tr style="text-align:center;font-weight:bold;background-color:#FFCAD4;">
                <th>No</th>
                <th>Makanan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
            //select tabel user dari database
            $nomor = 1;
            //echo $nomor;
            include 'config.php';
            $query_mysql = mysqli_query($mysqli, "SELECT pesan.id_pesan, pesan.alamat, pesan.jumlah, pesan.harga, pesan.id_makanan, pesan.id_user, makanan.nama_makanan, makanan.harga, makanan.foto FROM pesan JOIN makanan ON pesan.id_makanan = makanan.id_makanan;") or die(mysqli_error($mysqli));

            while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <tr style="text-align:center;">
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['id_makanan']; ?></td>
                    <td><?php echo $data['id_user']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['harga']; ?></td>

                    <td><span><a href='delete user pesan.php?id=<?php echo $data["id_pesan"]; ?>'>Hapus</a><span></td>
                    <td><span><a href='edit_user pesan.php?id_pesan=<?php echo $data["id_pesan"]; ?>'>Edit</a><span></td>

                <?php } ?>
                </tr>
        </table>
        <div class="btn">
            <a href="pesan.php">
                <btn type="btn">Tambahkan</btn>
            </a>
        </div>