<style>
    body {
    background: linear-gradient(135deg, #FAD0C4 0%, #FFD1FF 100%);
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    font-family: 'Helvetica Neue', sans-serif;
    box-sizing: border-box;
    color: #333;
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
    .content {
    width: 100%;
    position: absolute;
    color: #fff;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    padding-top: 100px; 
    }
    button {
    width: 120px;
    padding: 10px 20px;
    margin: 10px;
    text-align: center;
    border-radius: 20px;
    color: #fff;
    background: #FFB6C1;
    border: none;
    font-size: 14px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s, color 0.3s;
    }
    button:hover {
    background: #FF69B4;
    }
    .jenis {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 150px 0 50px 0; 
    }
    .box {
    width: 350px;
    height: 450px;
    background-color: #FFE4E1;
    text-align: center;
    padding: 30px; 
    margin: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, background 0.3s;
    }
    .box h2 {
    font-size: 26px;
    margin-top: 10px;
    margin-bottom: 5px; 
    }
    .box p {
    font-size: 18px;
    line-height: 1.6;
    }
    .box:hover {
    background-color: #FFB6C1;
    transform: translateY(-10px);
    }
    .box:hover h2, .box:hover p {
    color: #fff;
    }
  </style>
<html>
    <head>
        <title>Sejarah</title>
    </head>
    <body>
        <div class="navbar">
        <img class="logo" src="logo part 2.png">
            <ul>
                <li><a href="user_page.php">Home</a></li>
                <li><a href="Kuliner.php">Kuliner</a></li>
                <li><a href="Sejarah.php">Sejarah</a></li>
                <li><a href="pesan.php">Pesan</a></li>
                <li><a href="Profile.php">Profile</a></li>
            </ul>
        </div>
    </body>
    <div class="jenis">
            <?php
            // select tabel user dari database
            include 'config.php';
            $result = mysqli_query($mysqli, "SELECT * FROM sejarah") or die (mysqli_error($mysqli));

            while($data = mysqli_fetch_array($result)){
                ?>
                    <div class="box">
                        <h2><?php echo $data['nama_sejarah']; ?></h2>
                        <p><?php echo $data['informasi_sejarah']; ?></p>

                    </div>
                <?php } ?>
        </div>