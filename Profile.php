<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <button class="back-button"><a href="user_page.php">Back</a></button>
        <div class="main">
            <div class="img"></div>
            <h1>Viska Atalia Ramadhani</h1>
            <div class="text">Student from <strong>SMK Telkom Sidoarjo</strong></div>
            <p>Haloo, Selamat datang di halaman website saya. This is my first website project. Jika ada masukan silahkan berikan di sosial media saya.</p>
            <ul>
                <li><a href="https://www.instagram.com/viskawaii?igsh=MXFxY3diYWNxbnkwMA=="><img src="ig.png" width="45px" height="45px"></a></li>
                <li><a href="https://www.facebook.com/share/D4TLDvj6BjWd63Ww/?mibextid=qi2Omg"><img src="fb.png" width="65px" height="35px"></a></li>
                <li><a href="https://www.linkedin.com/in/viska-atalia-0894b72a9?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img src="linkedin.png" width="50px" height="50px"></a></li>
            </ul>
        </div>
    </body>
</html>
<style>
    body{
        padding : 100px;
        background : #FFB1B1;
        text-align : center;
        font-family : 'quicksand', sans-serif;
    }
    .back-button {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #AD88C6;
        color: #000;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        }
    ul {
        padding: 0;
        margin: 20px 0;
    }
    li {
        list-style : none;
        display: inline-block;
        margin:0 10px;
    }
    .main {
        width : 800px;
        height : 520px;
        background-color :#fafafa;
        margin : 0 auto;
        padding-top : 20px;
        border-radius : 10px;
        border : 1px solid #eeeeee;
        position: relative;
    }
    .img {
        background-image : url(foto.jpg);
        background-color : #eaeaea;
        background-size : cover;
        border-radius : 100px;
        width : 150px;
        height : 150px;
        margin : 0 auto;
        border : 1px solid #eaeaea;
    }
    h1 {
        text-align : center;
        font-size : 30px;
        margin : 0;
        font-weight : bold;
        color : #000000;
    }
    .text {
        text-align : center;
        font-size : 15px;
        margin : 0;
        color : #324e63;
    }
    p {
        margin : 0 auto;
        padding-top : 20px;
        width : auto;
        color : #324e32;
    }
</style>