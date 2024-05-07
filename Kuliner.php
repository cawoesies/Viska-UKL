<style>
    body{
    background-image: linear-gradient(rgba(1,1,1,0.1),rgba(1,1,1,0.1)), url();
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
   .box-kiri,
  .box-tengah,
  .box-kanan,
  .box-kiri,
  .box-tengah,
  .box-kanan {
    width: 250px;
    height: 330px;
    background-color: hotpink;
    text-align: center;
    padding: 70px 70px;
    margin: 50px 30px 30px 50px;
    border-radius: 10px;
    float: left;
  }
  
  .box-kiri:hover,
  .box-tegah:hover,
  .box-kanan:hover,
  .box-kiri:hover,
  .box-tengah:hover {
    background-color: #FFF6F6;
    color: hotpink;
  }
  </style>
<html>
    <head>
        <title>Kuliner</title>
    </head>
    <body>
        <div class="navbar">
        <img class="logo" src="logo part 2.png">
            <ul>
                <li><a href="user_page.php">Home</a></li>
                <li><a href="Kuliner.php">Kuliner</a></li>
                <li><a href="Sejarah.php">Sejarah</a></li>
                <li><a href="Near me.php">Near Me</a></li>
            </ul>
        </div>
    </body>
    <div class="jenis">
          <div class="box-kiri" align="center">
            <p><h3>Mie Aceh</h3></p>
            <hr>
            <br>
            <p>Masakan nusantara khas Aceh ini punya tekstur yang tebal dan dicampur dengan irisan daging serta bumbu rempah yang kuat. Mie Aceh biasa disajikan dengan digoreng, direbus atau ditumis. Tentunya, bisa juga disajikan dengan tambahan seafood seperti kepiting, udang dan cumi.</p>
            <br>
            <a href="Mie aceh.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>
      
          <div class="box-tengah" align="center">
            <p><h3>Rendang</h3></p>
            <hr>
            <br>
            <p>Masakan nusantara dari Sumatera Barat ini pernah dinobatkan sebagai makanan terlezat di dunia. Makanan dari daging sapi yang dimasak menggunakan santan kelapa serta bumbu rempah selama berjam-jam ini memang begitu terkenal. Rasanya yang gurih dan juga nikmat, sukses membuat makanan khas daerah Sumatera Barat ini begitu disukai banyak orang.</p>
            <br>
            <a href="Rendang.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>
      
          <div class="box-kanan" align="center">
            <p><h3>Gulai Belacan</h3></p>
            <hr>
            <br>
            <p>Gulai Belacan adalah masakan nusantara dari Riau. Belacan sendiri adalah nama lain dari terasi yang begitu dikenal oleh orang Sumatera. Makanan khas Riau ini dibuat dari bahan dasar kuah yang dicampur terasi. Di dalamnya ada isian berupa daging, udang atau ikan.</p>
            <br>
            <a href="Gulai belacan.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>
      
            <div class="box-kiri" align="center">
              <p><h3>Bika Ambon</h3></p>
              <hr>
              <br>
              <p>Meski namanya Bika Ambon, tapi masakan nusantara ini bukan berasal dari Ambon. Kue ini berasal dari Sumatera Utara dan banyak dijual di Kota Medan sebagai oleh-oleh. Kue berwarna kuning ini punya tekstur yang lembut dan manis.</p>
              <br>
              <a href="Bika ambon.jpg" class="cta-button"><button> Klik Disini</button></a>
            </div>
      
            <div class="box-tengah" align="center">
              <p><h3>Pempek</h3></p>
              <hr>
              <br>
              <p>Makanan khas Sumatera Selatan ini sudah dikenal dengan kelezatannya. Masakan nusantara ini dibuat dari olahan ikan yang dicampur dengan sagu. Dilengkapi kuah cuko atau cuka yang begitu menggoda selera membuat banyak orang menggemarinya.</p> 
              <br>
              <a href="Pempek.jpg" class="cta-button"><button> Klik Disini</button></a>
           </div>
  
           <div class="box-kanan" align="center">
            <p><h3>Kerak telor</h3></p>
            <hr>
            <br>
            <p>Masakan nusantara ini sudah cukup terkenal, dan tentu sudah tak asing lagi. Kerak telor adalah salah satu makanan nusantara dari Jakarta yang selalu menggoda selera.</p>
            <br>
            <a href="Kerak telor.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kiri" align="center">
            <p><h3>Gudeg</h3></p>
            <hr>
            <br>
            <p>Masakan nusantara dari Jogja wajib dicicipi. Gudeg adalah sayur nangka muda yang dimasak dengan santan tapi melalui proses yang lama. Gudeg biasa disajikan dengan nasi panas, kuah santan kental (areh), ayam kampung, telur dan serta sambal krecek.</p>
            <br>
            <a href="Gudeg.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-tengah" align="center">
            <p><h3>Rujak Cingur</h3></p>
            <hr>
            <br>
            <p>Masakan nusantara dari Jawa Timur, yaitu rujak cingur yang sangat terkenal. Rujak dibuat dari campuran cingur (mulut sapi), sayur dan buah-buahan yang disirami dengan bumbu petis.</p>
            <br>
            <a href="Rujak cingur.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kanan" align="center">
            <p><h3>Ayam Betutu</h3></p>
            <hr>
            <br>
            <p>Ayam Betutu adalah masakan nusantara dari Bali. Betutu sendiri adalah lauk yang terbuat dari ayam atau bebek utuh berisi bumbu, lalu dipanggang dengan api sekam.</p>
            <br>
            <a href="Ayam betutu.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kiri" align="center">
            <p><h3>Rawon</h3></p>
            <hr>
            <br>
            <p>Rawon merupakan masakan nusantara dari Jawa Timur yang paling terkenal. Makanan ini identik dengan kuah hitamnya. Warna hitam pada rawon tersebut tidak lain berasal dari bumbu khas yaitu kluwek. Rasa rawon sangat ramah bagi Anda yang tidak suka pedas. Masakan ini semakin nikmat disantap dengan nasi putih, kerupuk, serta lauk pelengkap seperti telur asin.</p>
            <br>
            <a href="Rawon.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-tengah" align="center">
            <p><h3>Soto Banjar</h3></p>
            <hr>
            <br>
            <p>Soto Banjar adalah masakan nusantara dari daerah Kalimantan Selatan. Soto Banjar dibuat dari daging ayam yang dicampur dengan bumbu rempah-rempah, biasanya ditambah perkedel dan kentang rebus.</p>
            <br>
            <a href="Soto banjar.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kanan" align="center">
            <p><h3>Papeda</h3></p>
            <hr>
            <br>
            <p>Papeda merupakan salah satu masakan nusantara dari Papua yang dibuat dari sagu. Papeda harus dimasak selama beberapa menit hingga tekstur makanan berubah jadi bubur. Bubur putih dengan tekstur lengket seperti itu akan terasa hambar. Sebagai pelengkap, masakan nusantara ini diberi ikan kuah pedas dan sayur-sayuran.</p>
            <br>
            <a href="Papeda.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kiri" align="center">
            <p><h3>Gohu ikan</h3></p>
            <hr>
            <br>
            <p>Sedangkan di Maluku Utara, ada masakan nusantara yang khas yaitu Gohu Ikan. Masakan ini berbahan dasar ikan tuna mentah, yang dicampur dengan bumbu gohu.</p>
            <br>
            <a href="Gohu ikan.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-tengah" align="center">
            <p><h3>Kepiting Soka</h3></p>
            <hr>
            <br>
            <p>Kepiting soka adalah makanan khas daerah Kalimantan Utara. Semua bagian kepiting ini bisa dimakan bahkan cangkangnya. Pasalnya, seluruh bagian tubuh kepiting soka ini sangat lunak.</p>
            <br>
            <a href="Kepiting soka.jpg" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kanan" align="center">
            <p><h3>Binte Biluhuta</h3></p>
            <hr>
            <br>
            <p>Masakan ini khas dari daerah Gorontalo. Masakan ini dikenal dengan sebutan Milu Siram. Bahan utamanya dari jagung yang disiram dengan bumbu khas dan dicampur dengan udang, belimbing sayur dan juga topping pelengkap lainnya.</p>
            <br>
            <a href="" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kiri" align="center">
            <p><h3>Ayam Taliwang</h3></p>
            <hr>
            <br>
            <p>Masakan nusantara dari daerah Nusa Tenggara Barat ini berbahan dasar daging ayam. Daging ayam akan dibakar dan diberi bumbu cabai merah kering, bawang merah, bawang putih, tomat, terasi goreng, kencur, gula merah serta garam. Kemudian, ayam akan diberi bumbu tambahan, dan menu tambahan seperti plecing kangkung.</p>
            <br>
            <a href="" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-tengah" align="center">
            <p><h3>Sop Konro</h3></p>
            <hr>
            <br>
            <p>Sop konro merupakan masakan nusantara dari daerah Sulawesi Selatan. Sup konro mirip sup iga sapi yang disajikan dengan kuah berwarna coklat.</p>
            <br>
            <a href="" class="cta-button"><button> Klik Disini</button></a>
          </div>

          <div class="box-kanan" align="center">
            <p><h3>Serabi</h3></p>
            <hr>
            <br>
            <p>Serabi adalah salah satu masakan nusantara dari Jawa Barat yang punya rasa manis. Dibuat dari tepung beras yang di panggang dan saat ini banyak dilengkapi aneka pilihan topping.</p>
            <br>
            <a href="" class="cta-button"><button> Klik Disini</button></a>
          </div>
  
</html>