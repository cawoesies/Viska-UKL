-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 05:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(100) NOT NULL,
  `nama_kuliner` varchar(100) NOT NULL,
  `asal_kuliner` varchar(100) NOT NULL,
  `informasi_kuliner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kuliner`, `asal_kuliner`, `informasi_kuliner`) VALUES
(1, 'Mie Aceh', 'Aceh', 'Masakan nusantara khas Aceh ini punya tekstur yang tebal dan dicampur dengan irisan daging serta bumbu rempah yang kuat. Mie Aceh biasa disajikan dengan digoreng, direbus atau ditumis. Tentunya, bisa juga disajikan dengan tambahan seafood seperti kepiting, udang dan cumi.'),
(2, 'Rendang', 'Sumatera Barat', 'Masakan nusantara dari Sumatera Barat ini pernah dinobatkan sebagai makanan terlezat di dunia. Makanan dari daging sapi yang dimasak menggunakan santan kelapa serta bumbu rempah selama berjam-jam ini memang begitu terkenal. Rasanya yang gurih dan juga nikmat, sukses membuat makanan khas daerah Sumatera Barat ini begitu disukai banyak orang.'),
(3, 'Gulai Belacan', 'Riau', 'Gulai Belacan adalah masakan nusantara dari Riau. Belacan sendiri adalah nama lain dari terasi yang begitu dikenal oleh orang Sumatera. Makanan khas Riau ini dibuat dari bahan dasar kuah yang dicampur terasi. Di dalamnya ada isian berupa daging, udang atau ikan.'),
(4, 'Bika ambon', 'Sumatera utara', 'Meski namanya Bika Ambon, tapi masakan nusantara ini bukan berasal dari Ambon. Kue ini berasal dari Sumatera Utara dan banyak dijual di Kota Medan sebagai oleh-oleh. Kue berwarna kuning ini punya tekstur yang lembut dan manis.'),
(5, 'Pempek', 'Sumatera selatan', 'Makanan khas Sumatera Selatan ini sudah dikenal dengan kelezatannya. Masakan nusantara ini dibuat dari olahan ikan yang dicampur dengan sagu. Dilengkapi kuah cuko atau cuka yang begitu menggoda selera membuat banyak orang menggemarinya.'),
(6, 'Kerak telor', 'Jakarta', 'Masakan nusantara ini sudah cukup terkenal, dan tentu sudah tak asing lagi. Kerak telor adalah salah satu makanan nusantara dari Jakarta yang selalu menggoda selera.'),
(7, 'Gudeg', 'Jogja', 'Masakan nusantara dari Jogja wajib dicicipi. Gudeg adalah sayur nangka muda yang dimasak dengan santan tapi melalui proses yang lama. Gudeg biasa disajikan dengan nasi panas, kuah santan kental (areh), ayam kampung, telur dan serta sambal krecek.'),
(8, 'Rujak Cingur', 'Jawa Timur', 'Masakan nusantara dari Jawa Timur, yaitu rujak cingur yang sangat terkenal. Rujak dibuat dari campuran cingur (mulut sapi), sayur dan buah-buahan yang disirami dengan bumbu petis.'),
(9, 'Ayam Betutu', 'Bali', 'Ayam Betutu adalah masakan nusantara dari Bali. Betutu sendiri adalah lauk yang terbuat dari ayam atau bebek utuh berisi bumbu, lalu dipanggang dengan api sekam.'),
(10, 'Rawon', 'Jawa Timur', 'Rawon merupakan masakan nusantara dari Jawa Timur yang paling terkenal. Makanan ini identik dengan kuah hitamnya. Warna hitam pada rawon tersebut tidak lain berasal dari bumbu khas yaitu kluwek. Rasa rawon sangat ramah bagi Anda yang tidak suka pedas. Masakan ini semakin nikmat disantap dengan nasi putih, kerupuk, serta lauk pelengkap seperti telur asin.'),
(11, 'Soto Banjar', 'Kalimantan Selatan', 'Soto Banjar adalah masakan nusantara dari daerah Kalimantan Selatan. Soto Banjar dibuat dari daging ayam yang dicampur dengan bumbu rempah-rempah, biasanya ditambah perkedel dan kentang rebus.'),
(12, 'Papeda', 'Papua', 'Papeda merupakan salah satu masakan nusantara dari Papua yang dibuat dari sagu. Papeda harus dimasak selama beberapa menit hingga tekstur makanan berubah jadi bubur. Bubur putih dengan tekstur lengket seperti itu akan terasa hambar. Sebagai pelengkap, masakan nusantara ini diberi ikan kuah pedas dan sayur-sayuran.'),
(13, 'Gohu ikan', 'Maluku Utara', 'Sedangkan di Maluku Utara, ada masakan nusantara yang khas yaitu Gohu Ikan. Masakan ini berbahan dasar ikan tuna mentah, yang dicampur dengan bumbu gohu.'),
(14, 'Kepiting Soka', 'Kalimantan Utara', 'Kepiting soka adalah makanan khas daerah Kalimantan Utara. Semua bagian kepiting ini bisa dimakan bahkan cangkangnya. Pasalnya, seluruh bagian tubuh kepiting soka ini sangat lunak.'),
(15, 'Binte Biluhuta', 'Gorontalo', 'Masakan ini khas dari daerah Gorontalo. Masakan ini dikenal dengan sebutan Milu Siram. Bahan utamanya dari jagung yang disiram dengan bumbu khas dan dicampur dengan udang, belimbing sayur dan juga topping pelengkap lainnya.'),
(16, 'Ayam Taliwang', 'Nusa Tenggara Barat', 'Masakan nusantara dari daerah Nusa Tenggara Barat ini berbahan dasar daging ayam. Daging ayam akan dibakar dan diberi bumbu cabai merah kering, bawang merah, bawang putih, tomat, terasi goreng, kencur, gula merah serta garam. Kemudian, ayam akan diberi bumbu tambahan, dan menu tambahan seperti plecing kangkung.'),
(17, 'Sop Konro', 'Sulawesi Selatan', 'Sop konro merupakan masakan nusantara dari daerah Sulawesi Selatan. Sup konro mirip sup iga sapi yang disajikan dengan kuah berwarna coklat.'),
(18, 'Serabi', 'Jawa Barat', 'Serabi adalah salah satu masakan nusantara dari Jawa Barat yang punya rasa manis. Dibuat dari tepung beras yang di panggang dan saat ini banyak dilengkapi aneka pilihan topping.');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(200) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga`, `foto`) VALUES
(1, 'Mie Aceh', 'Rp.25.000', 'Mie-aceh.jpg'),
(2, 'Rendang', 'Rp.25.000', 'Rendang.jpg'),
(3, 'Gulai Belacan', 'Rp.40.000', 'Gulai belacan.jpg'),
(4, 'Bika Ambon', 'Rp.110.000', 'Bika ambon.jpg'),
(5, 'Pempek', 'Rp.55.000', 'Pempek.jpg'),
(6, 'Kerak Telor', 'Rp.20.000', 'Kerak telor.jpg'),
(7, 'Gudeg', 'Rp.30.000', 'Gudeg.jpg'),
(8, 'Rujak Cingur', 'Rp.22.000', 'Rujak  cingur.jpg'),
(9, 'Ayam Betutu', 'Rp.55.000', 'Ayam betutu.jpg'),
(10, 'Rawon', 'Rp.35.000', 'Rawon.jpg'),
(11, 'Soto Banjar', 'Rp.19.000', 'Soto banjar.jpg'),
(12, 'Papeda', 'Rp.75.000', 'Papeda.jpg'),
(13, 'Gohu Ikan', 'Rp.55.000', 'Gohu ikan.jpg'),
(14, 'Kepiting Soka', 'Rp.105.000', 'Kepiting soka.jpg'),
(15, 'Binte Biluhuta', 'Rp.25.000', 'Binte biluhuta.jpg'),
(16, 'Ayam Taliwang', 'Rp.40.000', 'Ayam taliwang.jpg'),
(17, 'Sop Konro', 'Rp.55.000', 'Sop konro.jpg'),
(18, 'Serabi', 'Rp.15.000', 'Serabi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(100) NOT NULL,
  `kuliner` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `id_kuliner` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `kuliner`, `alamat`, `jumlah`, `id_kuliner`) VALUES
(1, 'Mie aceh', 'jl. ABC', 10, 1),
(4, 'Rendang', 'gebang', 90, NULL),
(5, 'Bika ambon', 'sedati', 7, NULL),
(6, 'Serabi', 'a', 10, NULL),
(7, 'Pempek', 'b', 32, NULL),
(8, 'Papeda', 'm', 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(100) NOT NULL,
  `nama_sejarah` varchar(100) NOT NULL,
  `informasi_sejarah` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `nama_sejarah`, `informasi_sejarah`) VALUES
(1, 'Mie Aceh', 'Mi Aceh mencerminkan sejarah budaya Aceh yang kaya, dipengaruhi oleh budaya asing seperti India dan Tiongkok. Pilihan daging mencerminkan nilai-nilai Islam, sementara seafood mencerminkan letak geografis Aceh yang kaya akan sumber daya laut. Mi Aceh kini telah menyebar luas, ditemukan di berbagai ko'),
(2, 'Rendang', 'Rendang berasal dari Minangkabau, Sumatera Barat, dan telah menjadi masakan tradisional bagi masyarakat Minang sejak lama. Menurut sejarawan, rendang mulai tersebar luas saat orang Minang mulai merantau dan berdagang ke Malaka pada abad ke-16. Masakan ini tahan lama disimpan, sehingga cocok dijadika'),
(3, 'Gulai Belacan', 'Gulai Belacan awalnya dipengaruhi gaya makanan gulai India, tapi mengalami adaptasi di Sumatra dan Jawa. Di Sumatra, gulai memiliki tekstur lebih kental, sementara di Jawa rasanya lebih encer dan manis. Meskipun berakar dari India, bumbu-bumbu gulai Belacan tetap khas Indonesia. Selain daging, hidan'),
(4, 'Bika Ambon', 'Asal usul nama \"ambon\" dalam bika ambon ternyata merupakan akronim dari \"Amplas-Kebon\", mengacu pada dua wilayah di Medan: wilayah \"pabrik\" dan \"kebon\". Sebuah versi menyebutkan bahwa kue ini diperkenalkan oleh seorang buruh transmigran dari Jawa, kemudian menjadi populer di kalangan masyarakat Bela'),
(5, 'Pempek', 'Pempek, dikenal di Palembang sejak abad ke-16, awalnya disebut \'kelesan\' dan dijual oleh penduduk asli Palembang kepada orang Tionghoa. Mulai tahun 1916, pempek mulai dijual berkeliling oleh orang Tionghoa, terutama di sekitar keraton Palembang. Nama \"pempek\" berasal dari panggilan \'empek\' atau \'ape'),
(6, 'Kerak telor', 'Kerak telor, kreasi masyarakat Betawi di Menteng pada 1920-an, dimulai dari penggunaan kelapa berlimpah di wilayah itu. Dipromosikan oleh Gubernur Jakarta Ali Sadikin pada 1970-an, makanan ini populer di sekitar Monas. Meskipun awalnya mewah, masyarakat Betawi menjadikannya terjangkau untuk semua ka'),
(7, 'Gudeg', 'Gudeg, makanan khas Yogyakarta, muncul pada abad ke-19 dan awalnya disajikan di acara keraton sebagai simbol kemewahan. Seiring waktu, gudeg merambah ke masyarakat umum dan menjadi hidangan sehari-hari.'),
(8, 'Rujak Cingur', 'Rujak cingur, makanan khas Surabaya, diyakini berasal dari Mesir. Legenda menyebutkan bahwa Raja Firaun Hanyokrowati mencicipi masakan yang dibawa oleh Abdul Rojak dengan bungkus pisang. Meskipun awalnya ragu, raja menyukainya dan mencicipi dengan lahap meski pedas.'),
(9, 'Ayam Betutu', 'Ayam Betutu pertama kali diciptakan pada tahun 1976 oleh Ni Wayan Tempeh, juga dikenal sebagai Men Tempeh, dari Abiansi, Gianyar. Bersama suaminya, I Nyoman Suratna dari Bangli, mereka mendirikan warung Ayam Betutu.'),
(10, 'Rawon', 'Rawon sebagai salah satu makanan khas asal Jawa Timur ternyata telah berusia lebih dari 1000 tahun. Hal ini terungkap dari Prasasti Taji yang dikeluarkan pada tahun 901 Masehi oleh Rakryan I Watu Tihang Pu Sanggramadurandara yang ditemukan di Ponorogo, tertulis dengan nama Rarawwan.'),
(11, 'Soto Banjar', 'Soto banjar sendiri diperkirakan ada sejak setelah tahun 1563, yaitu ketika para pedagang-pedagang Tiongkok banyak berdatangan ke Banjarmasin, yang pada akhir abad XVI itu dikenal sebagai daerah kerajaan penghasil lada.'),
(12, 'Papeda', 'Papeda adalah makanan penting dalam budaya Papua dan Maluku, dihormati dalam upacara adat seperti Watani Kame dan kelahiran anak pertama. Juga digunakan sebagai penahan sakit saat membuat tato.'),
(13, 'Gohu ikan', 'Gohu ikan kemungkinan muncul dari kebiasaan nelayan Ternate. Mereka pergi melaut mencari ikan selama berhari-hari ke berbagai perairan di sekitar Ternate seperti Laut Sulawesi di utara dan Laut Banda di selatan.'),
(14, 'Kepiting Soka', 'Sejak 2000, petani tambak di Desa Mojo, Kabupaten Pemalang, Jawa Tengah, telah berbudidaya kepiting penggemukan dengan karambah bamboo. Program penghijauan mangrove oleh LSM Jepang, OISCA, mendorong mereka beralih ke budidaya kepiting soka pada 2006 setelah kunjungan orang Jepang yang terkesan denga'),
(15, 'Binte Biluhuta', 'Binte biluhuta atau milu siram adalah makanan khas Gorontalo, Sulawesi, Indonesia. Terbuat dari jagung yang disiram dengan kuah. \"Binte\" berarti jagung, dan \"biluhuta\" artinya disiram dalam Bahasa Gorontalo.'),
(16, 'Ayam Taliwang', 'Ayam Taliwang terkenal sejak 1960-an. Jenderal Ahmad Yani pernah makan di warung Nini Manawiyah di Karang Taliwang, mengilhami banyak orang untuk mencicipi hidangan ini.'),
(17, 'Sop Konro', 'Kuliner tradisional Sulawesi Selatan, Sop Konro, mulai dikenal sejak 1960-an oleh Pak Hanafi, seorang guru. Usahanya dimulai sekitar tahun 1962 di dekat Lapangan Karebosi, Kota Makassar, di bawah sebuah tenda biru.'),
(18, 'Serabi', 'Serabi merupakan makanan kue khas Kota Solo. Asal-usulnya sendiri masih diperdebatkan. Pakar kuliner Bondan Winarno menyebut serabi sebagai modifikasi dari kue apem yang berasal dari India. Kue apem kemudian berkembang menjadi serabi yang lebih lembut karena menggunakan santan lebih banyak.');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'viska', 'viskaa@gmail.com', '456', 'admin'),
(4, 'aina', 'aina@gmail.com', '123', 'user'),
(7, 'viska', 'viska@gmail.com', '789', 'user'),
(8, 'efg', 'a@gmail.com', '678', 'admin'),
(9, 'viska', 'viskaa@gmail.com', '777', 'user'),
(10, 'v', 'v@gmail.com', '999', 'user'),
(11, 'yosi', 'b@gmail.com', '123', 'admin'),
(12, 'abc', 'abc@gmail.com', '666', 'user'),
(13, 's', 's@gmail.com', '888', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD UNIQUE KEY `id_kuliner` (`id_kuliner`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
