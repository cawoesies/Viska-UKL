<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing Page</title>
        <style>
            body {
                background-image: url('Litara 4.jpg');
                height: 100vh;
                background-size: cover;
                background-position: center;
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                box-sizing: border-box;
            }
            .banner {
                width: 100%;
                height: 100vh;
                background-position: center;
                background-size: center;
            }
            .navbar {
                width: 90%;
                padding: 30px;
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .logo {
                width: 160px;
                margin-top: -10px;
                cursor: pointer;
            }
            .navbar ul li {
                list-style: none;
                display: inline-block;
                margin: 20px;
            }
            .navbar ul li a {
                text-decoration: none;
                text-transform: uppercase;
                color: white;
                font-weight: 600;
            }
            li a:hover {
                background: white;
                transition: 0.5s;
            }
            .navbar a:hover {
                color: black;
            }
            .content {
                width: 100%;
                position: absolute;
                color: white;
                top: 45%;
                transform: translateY(-50%);
                text-align: center;
            }
            .content h1 {
                margin-top: 80px;
                font-size: 90px;
                font-weight: 800;
            }
            .footer {
                width: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                color: white;
                text-align: center;
                padding: 20px 0;
                position: absolute;
                bottom: 0;
                left: 0;
            }
            .footer p {
                margin: 0;
                font-size: 14px;
            }
            .footer a {
                color: white;
                text-decoration: none;
                margin: 0 10px;
            }
            .footer a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img class="logo" src="logo part 2.png">
                <ul>
                    <li><a href="login_form.php">Sign in</a></li>
                    <li><a href="register_form.php">Sign up</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>EXPLORE THE FOOD</h1>
            </div>
        </div>
    </body>
    <div class="footer">
            <p>&copy; 2024 Litara. All Rights Reserved.</p>
            <p>
                <a href="Profile.php">About Us</a> | 
                <a href="Profile.php">Contact Us</a> 
            </p>
        </div>
</html>
