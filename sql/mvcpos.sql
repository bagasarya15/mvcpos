-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Mar 2022 pada 09.32
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
(1, 'Pembeli Umum', '-', ''),
(2, 'Bagas', '', ''),
(3, 'Oki', '', ''),
(4, 'Maul', '', ''),
(5, 'Faizal', '', ''),
(6, 'Irsyad', '', ''),
(7, 'Rakha', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tgl_input` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `tgl_input`) VALUES
(5, '-', '5 March 2022, 13:24'),
(6, 'Snack', '5 March 2022, 13:24'),
(7, 'Minuman', '5 March 2022, 13:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `kodeBarang` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `tgl_input` text NOT NULL,
  `periode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kodeBarang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `hargaBeli` varchar(100) NOT NULL,
  `hargaJual` varchar(100) NOT NULL,
  `satuanBarang` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `tgl_input` text NOT NULL,
  `tgl_update` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kodeBarang`, `id_kategori`, `namaBarang`, `hargaBeli`, `hargaJual`, `satuanBarang`, `stok`, `tgl_input`, `tgl_update`) VALUES
(7, 'BR001', 7, 'Energen', '1500', '2500', 'PCS', '20', '06 March 2022, 10:13', '06 March 2022, 11:03'),
(8, 'BR002', 6, 'Taro', '1000', '2000', 'PCS', '15', '06 March 2022, 10:19', '06 March 2022, 10:19'),
(9, 'BR003', 5, 'Gas Elpiji', '20000', '24000', 'Kg', '8', '06 March 2022, 10:19', '06 March 2022, 10:19'),
(10, 'BR004', 7, 'Susu Ultra', '4800', '6000', 'PCS', '10', '06 March 2022, 10:25', '06 March 2022, 10:25'),
(11, 'BR005', 7, 'Barang Halal', '5000', '10000', 'PCS', '10', '11 March 2022, 19:56', '11 March 2022, 19:56');

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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kodeBarang` varchar(100) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kodeBarang`, `namaBarang`, `jumlah`, `total`) VALUES
(1, 'BR001', 'Energen', '5', '12500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'Admin', '202cb962ac59075b964b07152d234b70', 'Administrator'),
(6, 'admin', 'Bagas', '202cb962ac59075b964b07152d234b70', 'Bagas Arya'),
(7, 'user', 'Udin', '202cb962ac59075b964b07152d234b70', 'Rafly'),
(11, 'user', 'Okisan', '202cb962ac59075b964b07152d234b70', 'Oki Tora W');

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
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

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
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
