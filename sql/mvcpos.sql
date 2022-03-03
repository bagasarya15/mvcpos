-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Mar 2022 pada 14.20
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcpos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `namaCustomer` varchar(20) NOT NULL,
  `alamatCustomer` varchar(100) NOT NULL,
  `tlpCustomer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `namaCustomer`, `alamatCustomer`, `tlpCustomer`) VALUES
(3, 'Wardaya Pa', 'Ki. Soekarno Hatta No. 774, Cimahi 85529, SulBar', ''),
(4, 'Asmianto T', 'Jln. Nakula No. 542, Mataram 80011, Riau', ''),
(5, 'Jasmin Sar', 'Psr. Gedebage Selatan No. 951, Ambon 51142, KalTim', ''),
(6, 'Banawi Sim', 'Gg. Salatiga No. 497, Jayapura 14109, SumSel', ''),
(7, 'Amalia Dia', 'Dk. Sugiyopranoto No. 926, Jambi 61860, SumUt', ''),
(8, 'Abyasa Hut', 'Dk. Teuku Umar No. 824, Lhokseumawe 14676, MalUt', ''),
(9, 'Tina Nasyi', 'Ds. Bacang No. 28, Gorontalo 73123, DIY', ''),
(10, 'Dartono Sa', 'Gg. Kartini No. 647, Cimahi 94574, Banten', ''),
(11, 'Widya Suci', 'Kpg. Bahagia No. 878, Kotamobagu 98264, Lampung', ''),
(12, 'Akarsana H', 'Jln. Ki Hajar Dewantara No. 423, Bekasi 53736, NTT', ''),
(13, 'Titi Oktav', 'Jr. HOS. Cjokroaminoto (Pasirkaliki) No. 7, Bogor 39146, DKI', ''),
(14, 'Samiah Rah', 'Dk. Sumpah Pemuda No. 925, Administrasi Jakarta Selatan 22713, Riau', ''),
(15, 'Cinta Wula', 'Kpg. Suryo Pranoto No. 595, Administrasi Jakarta Barat 18262, KepR', ''),
(16, 'Tantri Pad', 'Kpg. Dewi Sartika No. 986, Kendari 88205, KalBar', ''),
(17, 'Bakda Sito', 'Dk. Basket No. 661, Banjarmasin 61607, BaBel', ''),
(18, 'Ophelia Nu', 'Jln. Peta No. 488, Semarang 68924, SumUt', ''),
(19, 'Taufan Pra', 'Jr. Ketandan No. 991, Palembang 26686, SumUt', ''),
(20, 'Safina Kas', 'Jr. Baranang Siang No. 801, Tidore Kepulauan 36022, KalUt', ''),
(21, 'Padmi Auro', 'Dk. Bakaru No. 833, Bima 63207, KalSel', ''),
(22, 'Yani Purna', 'Dk. Taman No. 47, Bogor 96969, PapBar', ''),
(23, 'Unjani Has', 'Jln. Suharso No. 381, Tanjung Pinang 68019, SumBar', ''),
(24, 'Yessi Muly', 'Kpg. Bara Tambar No. 849, Gunungsitoli 19942, Bali', ''),
(25, 'Hasna Kusm', 'Jln. Haji No. 970, Metro 83489, SulTeng', ''),
(26, 'Rafid Maul', 'Dk. Sutarto No. 761, Banda Aceh 83637, JaTim', ''),
(27, 'Rina Namag', 'Jr. Veteran No. 549, Sawahlunto 86698, NTB', ''),
(28, 'Tari Salsa', 'Ki. K.H. Wahid Hasyim (Kopo) No. 806, Subulussalam 67572, SulSel', ''),
(29, 'Karsa Tari', 'Psr. Bacang No. 897, Banjarmasin 55333, NTT', ''),
(30, 'Ilyas Zulk', 'Ki. Sumpah Pemuda No. 722, Madiun 84457, PapBar', ''),
(31, 'Ophelia Su', 'Gg. Monginsidi No. 423, Administrasi Jakarta Selatan 99826, Bali', ''),
(32, 'Edison Sin', 'Jr. Yap Tjwan Bing No. 280, Bontang 70691, JaTim', ''),
(33, 'Ghaliyati ', 'Psr. Otista No. 486, Pontianak 13616, Lampung', ''),
(34, 'Jamalia Pe', 'Jr. Mulyadi No. 793, Administrasi Jakarta Utara 96480, JaTeng', ''),
(35, 'Pardi Siho', 'Kpg. Baranang No. 155, Padangsidempuan 73382, SulTra', ''),
(36, 'Ihsan Arsi', 'Dk. Bara No. 905, Palembang 62740, KalSel', ''),
(37, 'Gada Narpa', 'Ki. Samanhudi No. 365, Pagar Alam 17531, SulBar', ''),
(38, 'Jaga Utama', 'Gg. Otto No. 10, Tidore Kepulauan 85647, KalTeng', ''),
(39, 'Prayitna K', 'Ki. Supono No. 618, Yogyakarta 60308, Banten', ''),
(40, 'Jelita Nam', 'Ds. Batako No. 115, Tanjungbalai 62921, NTT', ''),
(41, 'Tomi Sitom', 'Gg. Samanhudi No. 231, Balikpapan 35414, SumSel', ''),
(42, 'Malika Nur', 'Ds. Pacuan Kuda No. 851, Kupang 94061, KalTeng', ''),
(43, 'Dadi Lazua', 'Jr. Acordion No. 844, Cimahi 37923, KalBar', ''),
(44, 'Dacin Suwa', 'Jln. Basoka No. 188, Payakumbuh 34164, SulTeng', ''),
(45, 'Ibrani Sam', 'Ds. Radio No. 344, Semarang 15878, SumBar', ''),
(46, 'Iriana Sus', 'Jln. Barat No. 686, Batam 92165, Bengkulu', ''),
(47, 'Laras Hand', 'Ds. Tentara Pelajar No. 395, Pematangsiantar 25208, SulSel', ''),
(48, 'Halim Dadi', 'Kpg. Setia Budi No. 220, Tanjungbalai 46333, SulTra', ''),
(49, 'Nadia Novi', 'Psr. Kartini No. 179, Cimahi 52791, KalBar', ''),
(50, 'Zaenab Han', 'Psr. Gambang No. 784, Gunungsitoli 46085, SumUt', ''),
(51, 'Ajimat Nap', 'Kpg. Banal No. 84, Medan 72330, KepR', ''),
(52, 'Anastasia ', 'Psr. Dipenogoro No. 430, Jayapura 47483, KepR', ''),
(53, 'Olivia Yul', 'Ds. Baabur Royan No. 90, Singkawang 92485, Bali', ''),
(54, 'Devi Devi ', 'Gg. Lada No. 653, Tebing Tinggi 45925, SulSel', ''),
(55, 'Kenzie Nab', 'Dk. Bank Dagang Negara No. 948, Yogyakarta 80270, SulTra', ''),
(56, 'Agnes Zali', 'Dk. Muwardi No. 969, Padangpanjang 48439, JaBar', ''),
(57, 'Tiara Juli', 'Ds. M.T. Haryono No. 439, Binjai 32732, KalTeng', ''),
(58, 'Tedi Iswah', 'Jr. Suryo Pranoto No. 736, Tual 65156, SulSel', ''),
(59, 'Artawan Ca', 'Gg. Lada No. 186, Mojokerto 69259, KepR', ''),
(60, 'Aurora Kan', 'Gg. Agus Salim No. 652, Payakumbuh 32366, KalTeng', ''),
(61, 'Oskar Hida', 'Jln. Tubagus Ismail No. 886, Administrasi Jakarta Utara 53067, KalBar', ''),
(62, 'Maria Fuji', 'Kpg. Yoga No. 314, Pasuruan 43473, MalUt', ''),
(63, 'Muhammad S', 'Dk. Jaksa No. 423, Palembang 72779, Lampung', ''),
(64, 'Vicky Ayu ', 'Jln. Bagonwoto  No. 413, Denpasar 71467, KepR', ''),
(65, 'Hesti Raha', 'Kpg. Kiaracondong No. 813, Ambon 41846, KalUt', ''),
(66, 'Restu Ajen', 'Psr. Baabur Royan No. 186, Solok 39178, NTT', ''),
(67, 'Empluk Har', 'Ki. Basuki No. 485, Payakumbuh 80122, SulTeng', ''),
(68, 'Wulan Laks', 'Kpg. Salam No. 434, Bogor 50284, DIY', ''),
(69, 'Bahuraksa ', 'Ki. Zamrud No. 189, Binjai 78456, DIY', ''),
(70, 'Putri Wula', 'Jr. Salak No. 676, Kediri 15270, Bali', ''),
(71, 'Marsito Ar', 'Ki. K.H. Wahid Hasyim (Kopo) No. 604, Ambon 70950, MalUt', ''),
(72, 'Luthfi Kaw', 'Jln. Tambak No. 204, Padangsidempuan 90294, Riau', ''),
(73, 'Ciaobella ', 'Jr. Babadan No. 934, Medan 77373, SumBar', ''),
(74, 'Suci Yani ', 'Jln. Sukabumi No. 938, Solok 92218, KalTim', ''),
(75, 'Hamima Eka', 'Gg. Sutarto No. 289, Samarinda 60394, BaBel', ''),
(76, 'Satya Huta', 'Dk. Bak Air No. 879, Administrasi Jakarta Timur 51646, DIY', ''),
(77, 'Cinta Kani', 'Ki. Otto No. 221, Palu 72775, Papua', ''),
(78, 'Ismail Hut', 'Jr. Raden No. 112, Depok 28389, Papua', ''),
(79, 'Gilang Dar', 'Jln. Dago No. 831, Binjai 48400, PapBar', ''),
(80, 'Salimah Wu', 'Dk. Bahagia No. 763, Surabaya 60953, SulSel', ''),
(81, 'Clara Fari', 'Gg. Basuki Rahmat  No. 643, Pontianak 74357, SulTra', ''),
(82, 'Maimunah Y', 'Dk. Muwardi No. 499, Bandung 19816, KalSel', ''),
(83, 'Edison Nug', 'Dk. Baranang Siang Indah No. 841, Sibolga 33702, Banten', ''),
(84, 'Pranawa Ga', 'Kpg. Bakit  No. 71, Malang 38095, SumSel', ''),
(85, 'Puput Rahi', 'Jr. Jagakarsa No. 589, Malang 56511, DIY', ''),
(86, 'Bahuraksa ', 'Ds. Babadak No. 113, Tangerang 84089, Jambi', ''),
(87, 'Lantar Pan', 'Kpg. Basuki No. 296, Sabang 50042, NTT', ''),
(88, 'Rahmi Rahi', 'Jln. Abdullah No. 670, Dumai 62822, Lampung', ''),
(89, 'Surya Angg', 'Ki. Setia Budi No. 598, Administrasi Jakarta Selatan 19725, Banten', ''),
(90, 'Aditya Dar', 'Ki. Cikutra Barat No. 529, Dumai 49536, Riau', ''),
(91, 'Balangga D', 'Jln. Ekonomi No. 488, Pangkal Pinang 27486, SulSel', ''),
(92, 'Vera Astut', 'Gg. Pahlawan No. 797, Ambon 69504, KepR', ''),
(93, 'Banawa Mau', 'Dk. Supono No. 541, Jayapura 24658, SumUt', ''),
(94, 'Sarah Shak', 'Jln. Kusmanto No. 705, Sukabumi 47392, KalTeng', ''),
(95, 'Zizi Zalin', 'Dk. Aceh No. 531, Pangkal Pinang 48007, KepR', ''),
(96, 'Fitria Rah', 'Jln. W.R. Supratman No. 968, Padangpanjang 36910, SulUt', ''),
(97, 'Hendri Sih', 'Dk. W.R. Supratman No. 8, Banjar 88035, Riau', ''),
(98, 'Wirda Pert', 'Dk. Katamso No. 736, Banjarbaru 32227, KalTeng', ''),
(99, 'Mitra Adit', 'Jr. Tambak No. 625, Blitar 24392, KepR', ''),
(100, 'Karsa Lutf', 'Jln. Orang No. 445, Tanjung Pinang 88858, KalBar', ''),
(104, 'Bagas Arya Pradipta', 'Griya Sari Permai Blok C11, Depok', '081285711519'),
(105, 'Dragas Arya', 'Jalan Kepok', '085971711519');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `tgl_input`) VALUES
(11, 'Snack', '2 March 2022, 18:55'),
(12, 'Makanan', '2 March 2022, 18:59'),
(13, 'Minuman', '2 March 2022, 18:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kodeBarang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `namaBarang` varchar(255) NOT NULL,
  `hargaBeli` varchar(255) NOT NULL,
  `hargaJual` varchar(255) NOT NULL,
  `satuanBarang` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `tgl_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `ket`) VALUES
(1, 'admin'),
(2, 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `namaSupplier` varchar(100) NOT NULL,
  `alamatSupplier` varchar(20) NOT NULL,
  `tlpSupplier` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `namaSupplier`, `alamatSupplier`, `tlpSupplier`, `deskripsi`) VALUES
(1, 'Toko A', 'Kota Depok ', '08128571', 'Penjual Snack'),
(2, 'Mozarela Chese', 'Depok', '08128572', 'Penjual Keju Mozarela'),
(27, 'Sumber Rejeki', 'Depok', '081285711519', 'Toko Kelontongg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(14, 'Admin', '202cb962ac59075b964b07152d234b70'),
(16, 'Bagas', '202cb962ac59075b964b07152d234b70'),
(17, 'Fika', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
