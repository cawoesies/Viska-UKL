<style>
    body{
    background-image: linear-gradient(rgba(1,1,1,0.1),rgba(1,1,1,0.1)), url(LitaraKu.jpg);
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
   .content h1{
    margin-top: 80px;
    font-size: 90px;
    font-weight: 800;
   }
   button{
    width: 200px;
    padding: 15px;
    margin: 20px 5px;
    text-align: center;
    border-radius: 25px;
    color: black;
    border: 2px;
    font-size: 20px;
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
   .banner {
    position: absolute;
    right: 0;
    bottom: 0;
   }

</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>landing page</title>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img class="logo" src="">
                <ul>
                    <li><a href="user_page.php">Home</a></li>
                    <li><a href="Kuliner.php">Kuliner</a></li>
                    <li><a href="Sejarah.php">Sejarah</a></li>
                    <li><a href="Near me.php">Near Me</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>EXPLORE THE FOOD</h1>
                <div>
                    <button type="button">Profile</button>
                </div>
            </div>
        </div>
    </body>
</html>