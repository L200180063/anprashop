-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2020 pada 10.41
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_pwd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `id_jenis_barang` varchar(10) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar_barang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_jenis_barang`, `harga_barang`, `gambar_barang`) VALUES
('BRG001', 'T-Shirt 1', 'JNS005', 102000, '5fdd735221e02.jpg'),
('BRG002', 'T-Shirt 4', 'JNS001', 102000, '5fdd744380de9.jpg'),
('BRG009', 'No More Plastic Bag Enamel Pin', 'JNS007', 6000, '5fbd13ca65ce8.jpg'),
('BRG010', 'Camera Enamel Pin', 'JNS007', 6000, '5fbd13b9aa34a.jpg'),
('BRG011', 'Coffee Enamel Pin', 'JNS007', 6000, '5fbd13a33f511.jpg'),
('BRG013', 'Jaket 1', 'JNS003', 250000, '5fbd18460d53e.jpg'),
('BRG014', 'Jaket 2', 'JNS003', 256000, '5fbd165eb0c76.jpg'),
('BRG015', 'Jaket 3', 'JNS003', 263000, '5fbd16971c135.jpg'),
('BRG016', 'T-Shirt 3', 'JNS007', 99000, '5fdd6da6920d1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis_barang` varchar(10) NOT NULL,
  `warna_jenis_barang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis_barang`, `warna_jenis_barang`) VALUES
('JNS001', 'Sparkling Pink'),
('JNS002', 'Milk Glass'),
('JNS003', 'Snow Mint'),
('JNS004', 'Mint Macaron'),
('JNS005', 'White'),
('JNS006', 'Gray'),
('JNS007', 'Black'),
('JNS008', 'Gelang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_pembelian` int(11) NOT NULL,
  `nama_jenis_barang` varchar(45) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar_barang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `odersdetail`
--

CREATE TABLE `odersdetail` (
  `productid` int(11) NOT NULL,
  `ordersid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `odersdetail`
--

INSERT INTO `odersdetail` (`productid`, `ordersid`, `price`, `quantity`) VALUES
(1, 37, 100, 3),
(2, 36, 200, 1),
(3, 39, 300, 4),
(4, 40, 400, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `datecreation` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `datecreation`, `status`, `username`) VALUES
(16, 'New Order', '2016-03-03', 0, 'acc2'),
(17, 'New Order', '2016-03-03', 0, 'acc2'),
(18, 'New Order', '2016-03-03', 0, 'acc2'),
(19, 'New Order', '2016-03-03', 0, 'acc2'),
(20, 'New Order', '2016-03-03', 0, 'acc2'),
(21, 'New Order', '2016-03-03', 0, 'acc2'),
(22, 'New Order', '2016-03-03', 0, 'acc2'),
(23, 'New Order', '2016-03-03', 0, 'acc2'),
(24, 'New Order', '2016-03-03', 0, 'acc2'),
(25, 'New Order', '2016-03-03', 0, 'acc2'),
(26, 'New Order', '2016-03-03', 0, 'acc2'),
(27, 'New Order', '2016-03-03', 0, 'acc2'),
(28, 'New Order', '2016-03-03', 0, 'acc2'),
(29, 'New Order', '2016-03-03', 0, 'acc2'),
(30, 'New Order', '2016-03-03', 0, 'acc2'),
(31, 'New Order', '2016-03-03', 0, 'acc2'),
(32, 'New Order', '2016-03-03', 0, 'acc2'),
(33, 'New Order', '2016-03-03', 0, 'acc2'),
(34, 'New Order', '2016-03-03', 0, 'acc2'),
(35, 'New Order', '2016-03-03', 0, 'acc2'),
(36, 'New Order', '2016-03-03', 0, 'acc2'),
(37, 'New Order', '2016-03-03', 0, 'acc2'),
(38, 'New Order', '2016-03-03', 0, 'acc2'),
(39, 'New Order', '2016-03-03', 0, 'acc2'),
(40, 'New Order', '2016-03-03', 0, 'acc2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `warna_barang` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `gambar_barang` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_barang`, `nama_barang`, `harga_barang`, `quantity`, `warna_barang`, `gambar_barang`) VALUES
(1, 'T-Shirt 1', 99000, 12, 'White', '5fdffa0068691.jpg'),
(2, 'T-Shirt 2', 102000, 15, 'Hitam', '5fdf6ed38409a.jpg'),
(4, 'T-Shirt 4', 95000, 20, 'Pink', '5fdf6eab05f15.jpg'),
(6, 'T-Shirt 2', 22500, 3, 'Cyan', '5fdf696f25397.jpg'),
(8, 'T-Shirt 6', 57000, 4, 'Black', '5fe2dadb2bf7b.jpg'),
(9, 'T-Shirt 5', 47000, 5, 'White', '5fe2de2e3e7d5.jpg'),
(10, 'T-Shirt 7', 22500, 5, 'Gray', '5fe2de0ad0bf1.jpg'),
(11, 'T-Shirt 8', 22500, 4, 'Wisteria', '5fe2de4b460b4.jpg'),
(12, 'T-Shirt 9', 112000, 4, 'Maroon', '5fe2de6693990.jpg'),
(13, 'T-Shirt 10', 112000, 4, 'Green', '5fe2ddceca270.jpg'),
(14, 'T-Shirt 11', 22500, 5, 'Cookies', '5fe2f3615652d.jpg'),
(15, 'T-Shirt 12', 112000, 4, 'Navy', '5fe2f390205f2.jpg'),
(16, 'T-Shirt 13', 112000, 3, 'Blue Bird', '5fe303fae251b.jpg'),
(17, 'T-Shirt 14', 112000, 4, 'Tosca', '5fe4b0844c0d5.jpg'),
(18, 'Jaket 1', 112000, 4, 'Cyan', '5fe6ddc07c07b.jpg'),
(19, 'Jaket 2', 112000, 5, 'White', '5fe6ded261190.jpg'),
(20, 'Jaket 3', 112000, 8, 'Navy', '5fe6e6557a2a9.jpg'),
(21, 'Masker 1', 14000, 7, 'White', '5fe822f513d69.jpg'),
(22, 'Masker Kain 2', 22500, 7, 'Black', '5feab24dcd079.jpg');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tampilan1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampilan1` (
`nama_barang` varchar(45)
,`harga_barang` int(11)
,`gambar_barang` varchar(45)
,`id_jenis_barang` varchar(10)
,`id_barang` varchar(10)
,`warna_jenis_barang` varchar(45)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `status`) VALUES
(1, 'admin', '1234', 'Admin Satu', 'Administrator'),
(2, 'aannaanngg', '1111', 'Anang Prasetyo', 'Member'),
(3, 'anang', 'anang123', 'anang pra', 'Member'),
(4, 'budi123', 'budi123', 'Budi Satuduatiga', 'Member'),
(5, 'cacaaa', 'caca123', 'Acacia', 'Member'),
(6, 'zaza', 'zaza123', 'zaza', 'Member'),
(7, 'pras', 'pras123', 'pras', 'Member'),
(8, 'user1', 'user1', 'user satu', 'Member');

-- --------------------------------------------------------

--
-- Struktur untuk view `tampilan1`
--
DROP TABLE IF EXISTS `tampilan1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampilan1`  AS  select `barang`.`nama_barang` AS `nama_barang`,`barang`.`harga_barang` AS `harga_barang`,`barang`.`gambar_barang` AS `gambar_barang`,`barang`.`id_jenis_barang` AS `id_jenis_barang`,`barang`.`id_barang` AS `id_barang`,`jenis_barang`.`warna_jenis_barang` AS `warna_jenis_barang` from (`barang` join `jenis_barang`) where `barang`.`id_jenis_barang` = `jenis_barang`.`id_jenis_barang` order by `jenis_barang`.`warna_jenis_barang` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `Foreign Key` (`id_jenis_barang`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `odersdetail`
--
ALTER TABLE `odersdetail`
  ADD PRIMARY KEY (`productid`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`id_jenis_barang`) REFERENCES `jenis_barang` (`id_jenis_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`nama_jenis_barang`) REFERENCES `jenis_barang` (`id_jenis_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
