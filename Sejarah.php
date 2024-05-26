<style>
    body{
    background: #FFE0B5;
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
   .content{
    width: 100%;
    position: absolute;
    color: white;
    top: 45%;
    transform: translateY(-50%);
    text-align: center;
   }
   button{
    width: 100px;
    padding: 10px;
    margin: 5px 5px;
    text-align: center;
    border-radius: 15px;
    color: black;
    border: 2px;
    font-size: 10px;
    cursor: pointer;
    font-weight: 500;
   }
   button:hover{
    background: #FFCAD4;
    transition: 0.5s;
   }
   button:hover{
    color: white;
   }
   .banner {
    position: absolute;
    right: 0;
    bottom: 0;
   }
  .box {
    width: 250px;
    height: 330px;
    background-color: #DEAC80;
    text-align: center;
    padding: 70px 70px;
    margin: 50px 30px 30px 50px;
    border-radius: 10px;
    float: left;
  }
  .box:hover {
    background-color: #FFF6F6;
    color: solid black;
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
            $result = mysqli_query($mysqli, "SELECT * FROM sejarah") or die (mysqli_error());

            while($data = mysqli_fetch_array($result)){
                ?>
                    <div class="box">
                        <h2><?php echo $data['nama_sejarah']; ?></h2>
                        <p><?php echo $data['informasi_sejarah']; ?></p>

                    </div>
                <?php } ?>
        </div>