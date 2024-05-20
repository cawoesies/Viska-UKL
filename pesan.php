<style>
body{
    background: #F3CA52;
    height: 100vh;
    background-size: cover;
    background-position: center;
    }
    {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
    }
   .banner{
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: center;
   }
   .navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
   }
   .logo{
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
   }
   .navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 20px;
   }
   .navbar ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    font-weight: 600;
   }
   li a:hover{
    background: white;
    transition:0.5s;
   }
   .navbar a:hover{
    color: black;
   }

.box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    padding: 20px;
    justify-content: center;
}

.box {
    padding: 10px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 8px;
    text-align: center;
    flex: 1 1 calc(25% - 24px);
    position: relative;
    max-width: calc(25% - 24px);
}

.box img {
    height: 120px;
    object-fit: cover;
    width: 100%;
    border-radius: 8px;
}

.box .price {
    position: absolute;
    top: 10px; 
    left: 10px;
    background: #FF847C;
    color: #fff;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 8px;
}

.box h3 {
    color: #333;
    font-size: 18px;
    margin: 10px 0;
}

.box a {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background: #FF847C;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
}

.box a:hover {
    background: #FF6347;
}
</style>
<html>
    <head>
        <title>Makanan</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="navbar">
            <img class="logo" src="logo part 2.png" alt="Logo">
            <ul>
                <li><a href="user_page.php">Home</a></li>
                <li><a href="Kuliner.php">Kuliner</a></li>
                <li><a href="Sejarah.php">Sejarah</a></li>
                <li><a href="pesan.php">Pesan</a></li>
                <li><a href="Profile.php">Profile</a></li>
            </ul>
        </div>

        <div class="box-container">
            <?php
                // select tabel user dari database
                include 'config.php';
                $result = mysqli_query($conn, "SELECT * FROM makanan") or die (mysqli_error());

                while($data = mysqli_fetch_array($result)){
            ?>
                <div class="box">
                    <img src="<?php echo $data['foto'] ?>" alt="Makanan">
                    <span class="price"><?php echo $data['harga']; ?></span>
                    <h3><?php echo $data['nama_makanan']; ?></h3>
                    <a href="order.php" class="btn">Order Now</a>
                </div>
            <?php } ?>
        </div>
    </body>
