<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: crud makanan.php');
}
$id = $_GET['id'];

//fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM makanan WHERE id_makanan=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id_makanan = $user_data['nama_makanan'];
    $nama_makanan = $user_data['nama_makanan'];
    $harga = $user_data['harga'];
    $foto = $user_data['foto'];
}?>
<style>
    .order{
        width: 100%;
        height: 100vh;
        padding: 70px 0;
    }
    .back-btn {
        position: absolute;
        top: 20px;
        left: 20px;
    }
    .back-btn a {
        text-decoration: none;
        color: #fac031;
        font-size: 20px;
        font-weight: bold;
        background: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        border: 2px solid #fac031;
        transition: background 0.3s, color 0.3s;
    }
    .back-btn a:hover {
        background: #fac031;
        color: #ffffff;
    }
    .order h1{
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
        font-size: 55px;
    }
    .order h1 span{
        color: #fac031;
        margin-right: 15px;
        font-family: mv boli;
    }
    .order h1 span:after{
        content: '';
        width: 100%;
        height: 2px;
        background: #fac031;
        display: block;
        position: relative;
        bottom: 15px;
    }
    .order .order_main{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    .order .order_main .order_image img{
        width: 500px;
        position: relative;
        right: 100px;
    }
    .order .order_main form{
        display: grid;
        grid-template-columns: lfr lfr;
        grid-gap: 0 10px;
    }
    .order .order_main form .input p{
        line-height: 5px;
        font-size: 30px;
    }
    .order .order_main form .input{
        margin: 5px;
    }
    .order .order_main form .input input{
        width: 300px;
        height: 35px;
        padding: 0 10px;
        border: 2px solid #cccccc;
        background: #eeeeee;
        outline: none;
        border-radius: 3px;
    }
    .order .order_main form .input input:focus{
        border: 2px solid #fac031;
    }
    .order .order_main form .order_btn{
        padding: 0 2px;
        height: 30px;
        background: #fac031;
        color: white;
        width: 30%;
        text-align: center;
        margin-top: 20px;
        text-decoration: none;
        font-size: 25px;
    }
    </style>
<div class="order" id="id_pesan">
<div class="back-btn">
    <a href="pesan.php">Back</a>
        </div>
    <h1><span>Order</span>now<h1>
    
    <div class="order_main">
        <div class="order_image">
            <img src="gambar.png">
        </div>
        
        <form action="proses_pesan.php" method="POST">
            <div class="input">
                <p>Makanan</p>
                <input type="hidden" name="id_makanan" value="<?php echo $id_makanan ?>">
                <input type="text" name="nama_makanan" value="<?php echo $nama_makanan ?>">
            </div>
            
            <div class="input">
                <p>Jumlah</p>
                <input type="number" name="jumlah">
            </div>

            <div class="input">
                <p>Nama</p>
                <input type="text" name="id_user">
            </div>
            
            <div class="input">
                <p>Alamat</p>
                <input type="text" name="alamat">
            </div>

            <div class="input">
                <p>Harga</p>
                <input type="text" name="harga" value="<?php echo $harga ?>">
            </div>
            
            <input type="submit" name="submit" value="order" class="order_btn">
        </form>
    </div>
</div>
