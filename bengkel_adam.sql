-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 05.21
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel_adam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `tanggal_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `isi_log`, `tanggal_log`, `id_user`) VALUES
(1, 'Menu dengan nama menu <b>Dimsum Sayur</b> berhasil diubah menjadi <b>Dimsum Sayur</b>', 1659741138, 1),
(2, 'Menu dengan nama menu <b>Dimsum Ayam</b> berhasil diubah menjadi <b>Dimsum Ayam</b>', 1659741142, 1),
(3, 'User baru dengan nama user <b>Anggi</b> berhasil ditambahkan', 1667699080, 1),
(4, 'Transaksi baru dengan kode invoice <b>061120220113T0001</b> berhasil ditambahkan', 1667699193, 13),
(5, 'Transaksi baru dengan kode invoice <b>061120220113T0002</b> berhasil ditambahkan', 1667699236, 13),
(6, 'Pembayaran baru dengan kode invoice <b>061120220113T0002</b> berhasil ditambahkan', 1667699289, 13),
(7, 'Print Pembayaran dengan kode invoice <b>061120220113T0002</b>', 1667699294, 13),
(8, 'Pengeluaran berhasil ditambahkan oleh <b>Anggi</b>', 1667699460, 13),
(9, 'User baru dengan nama user <b>Atalia</b> berhasil ditambahkan', 1667699608, 13),
(10, 'Print Pembayaran dengan kode invoice <b>061120220113T0002</b>', 1667868484, 1),
(11, 'Print Pembayaran dengan kode invoice <b>061120220113T0002</b>', 1667868515, 1),
(12, 'Pembayaran baru dengan kode invoice <b>061120220113T0001</b> berhasil ditambahkan', 1667868569, 1),
(13, 'Print Pembayaran dengan kode invoice <b>061120220113T0001</b>', 1667868576, 1),
(14, 'User dengan nama user <b>Dimas Ramadhan</b> berhasil diubah menjadi <b>Syehzadi Anggita</b>', 1667868941, 1),
(15, 'User baru dengan nama user <b>Coba</b> berhasil ditambahkan', 1667869012, 1),
(16, 'Transaksi baru dengan kode invoice <b>081120220115T0001</b> berhasil ditambahkan', 1667869105, 15),
(17, 'Pembayaran baru dengan kode invoice <b>081120220115T0001</b> berhasil ditambahkan', 1667869135, 15),
(18, 'Print Pembayaran dengan kode invoice <b>081120220115T0001</b>', 1667869162, 15),
(19, 'Transaksi dengan kode invoice <b>061120220113T0002</b> berhasil dihapus', 1667869197, 15),
(20, 'Pengeluaran berhasil ditambahkan oleh <b>Coba</b>', 1667869265, 15),
(21, 'Print Laporan Pengeluaran dari tanggal2022-11-01 sampai 2022-11-08', 1667869308, 15),
(22, 'Print profile', 1667872070, 15),
(23, 'Menu baru dengan nama menu <b>Bakso</b> berhasil ditambahkan', 1667873631, 15),
(24, 'User baru dengan nama user <b>Amelia</b> berhasil ditambahkan', 1667873715, 15),
(25, 'Print Laporan Pengeluaran dari tanggal2022-11-01 sampai 2022-11-08', 1667873808, 16),
(26, 'Print Laporan Pengeluaran dari tanggal2022-11-01 sampai 2022-11-08', 1667873858, 16),
(27, 'Print Laporan dari tanggal2022-11-01 sampai 2022-11-09, status bayar : sudah_dibayar', 1667998868, 1),
(28, 'Print Laporan dari tanggal2022-11-01 sampai 2022-11-09, status bayar : sudah_dibayar', 1667998914, 1),
(29, 'Print Laporan Pengeluaran dari tanggal2022-11-01 sampai 2022-11-09', 1667998935, 1),
(30, 'Print Pembayaran dengan kode invoice <b>081120220115T0001</b>', 1668002308, 1),
(31, 'Outlet dengan nama outlet <b>At Dymsum Aww</b> berhasil diubah menjadi <b>Adam Motor</b>', 1668003603, 1),
(32, 'Print Laporan dari tanggal2022-11-01 sampai 2022-11-10, status bayar : sudah_dibayar', 1668047202, 1),
(33, 'Print Laporan dari tanggal2022-11-01 sampai 2022-11-10, status bayar : sudah_dibayar', 1668081518, 1),
(34, 'Print Laporan Pengeluaran dari tanggal2022-11-01 sampai 2022-11-10', 1668081544, 1),
(35, 'Outlet baru dengan nama outlet <b>Abc</b> berhasil ditambahkan', 1668210307, 1),
(36, 'Menu baru dengan nama menu <b>Aaa</b> berhasil ditambahkan', 1668210348, 1),
(37, 'Menu dengan nama menu <b>Aaa</b> berhasil dihapus', 1668210357, 1),
(38, 'User baru dengan nama user <b>Aku</b> berhasil ditambahkan', 1668210738, 1),
(39, 'Print Pembayaran dengan kode invoice <b>061120220113T0001</b>', 1668211535, 1),
(40, 'Print Laporan dari tanggal2022-11-01 sampai 2022-11-12, status bayar : sudah_dibayar', 1668211740, 1),
(41, 'Print Pembayaran dengan kode invoice <b>081120220115T0001</b>', 1668212186, 1),
(42, 'Transaksi baru dengan kode invoice <b>161120220101T0001</b> berhasil ditambahkan', 1668598945, 1),
(43, 'Pembayaran baru dengan kode invoice <b>161120220101T0001</b> berhasil ditambahkan', 1668599206, 1),
(44, 'Print Laporan dari tanggal2022-11-15 sampai 2022-11-16, status bayar : sudah_dibayar', 1668600143, 1),
(45, 'Print Laporan dari tanggal2022-11-01 sampai 2022-11-16, status bayar : sudah_dibayar', 1668600179, 1),
(46, 'Print Laporan Pengeluaran dari tanggal2022-11-01 sampai 2022-11-16', 1668600283, 1),
(47, 'Transaksi dengan kode invoice <b>061120220113T0001</b> berhasil dihapus', 1668601947, 1),
(48, 'Transaksi baru dengan kode invoice <b>161120220101T0002</b> berhasil ditambahkan', 1668601973, 1),
(49, 'Pembayaran baru dengan kode invoice <b>161120220101T0002</b> berhasil ditambahkan', 1668602035, 1),
(50, 'Print Pembayaran dengan kode invoice <b>161120220101T0002</b>', 1668602040, 1),
(51, 'Transaksi dengan kode invoice <b>161120220101T0002</b> berhasil dihapus', 1670903946, 1),
(52, 'Transaksi baru dengan kode invoice <b>131220220101T0001</b> berhasil ditambahkan', 1670903957, 1),
(53, 'Print Pembayaran dengan kode invoice <b>161120220101T0001</b>', 1673659769, 1),
(54, 'Print Pembayaran dengan kode invoice <b>161120220101T0001</b>', 1673659810, 1),
(55, 'Print Laporan dari tanggal2022-11-08 sampai 2022-12-13, status bayar : sudah_dibayar', 1673661804, 1),
(56, 'Print Pembayaran dengan kode invoice <b>161120220101T0001</b>', 1673779388, 1),
(57, 'Print Pembayaran dengan kode invoice <b>161120220101T0001</b>', 1674177782, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log_pengeluaran`
--

CREATE TABLE `tb_log_pengeluaran` (
  `id_log_pengeluaran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log_pengeluaran`
--

INSERT INTO `tb_log_pengeluaran` (`id_log_pengeluaran`, `keterangan`, `tanggal`, `id_user`) VALUES
(1, 'Pengeluaran berhasil ditambahkan oleh <b>Anggi</b> dengan pengeluaran sebesar <b> Rp. 4,000</b>, Keterangan : <b>Kebutuhan dapur</b>', 1667699460, 13),
(2, 'Pengeluaran berhasil ditambahkan oleh <b>Coba</b> dengan pengeluaran sebesar <b> Rp. 5,000</b>, Keterangan : <b>membeli busi</b>', 1667869265, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `jml_uang_dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tgl_pembayaran` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `total_pembayaran`, `jml_uang_dibayar`, `kembalian`, `tgl_pembayaran`, `kode_invoice`, `id_user`, `id_outlet`) VALUES
(1, 6000, 10000, 4000, 1667699289, '061120220113T0002', 13, 1),
(2, 9000, 15000, 6000, 1667868569, '061120220113T0001', 1, 1),
(3, 8500, 20000, 11500, 1667869135, '081120220115T0001', 15, 1),
(4, 30000, 40000, 10000, 1668599206, '161120220101T0001', 1, 1),
(5, 3000, 15000, 12000, 1668602035, '161120220101T0002', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `keterangan_pengeluaran` text NOT NULL,
  `tanggal_pengeluaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`id_pengeluaran`, `jumlah_pengeluaran`, `keterangan_pengeluaran`, `tanggal_pengeluaran`, `id_user`) VALUES
(1, 4000, 'Kebutuhan dapur', 1667699460, 13),
(2, 5000, 'membeli busi', 1667869265, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `status_bayar` enum('belum_dibayar','sudah_dibayar') NOT NULL,
  `tgl_transaksi` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `kode_invoice`, `kuantitas`, `status_bayar`, `tgl_transaksi`, `keterangan`, `id_menu`, `id_user`, `id_outlet`) VALUES
(3, '081120220115T0001', 2, 'sudah_dibayar', 1667869105, 'Saos kecap', 3, 15, 1),
(4, '081120220115T0001', 1, 'sudah_dibayar', 1667869105, 'Saos kecap', 1, 15, 1),
(5, '161120220101T0001', 3, 'sudah_dibayar', 1668598945, '', 5, 1, 1),
(7, '131220220101T0001', 4, 'belum_dibayar', 1670903957, '', 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` enum('administrator','kasir') NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `jabatan`, `id_outlet`) VALUES
(1, 'Syehzadi Anggita', 'admin', '$2y$10$yICyAfAkWZDX2nGec2BwqOf2le4TAxGtjU53AKb0QeutbD7akJw92', 'administrator', 1),
(2, 'Haus Coding Dev', 'hako-975', '$2y$10$b4VVR0au7fQTJH8C/FKGL.WmpSja8TCTuWunQaQN0vYCu8WfHfxcO', 'administrator', 2),
(3, 'anggita', 'anggi', 'ang12', 'administrator', 24),
(12, 'Whiki', 'kasir01', '$2y$10$AjK7x3/4nCzMV/2GKJhk2.hadFXn34eplSw/bwzFvi8jo1H3W8VqG', 'kasir', 1),
(14, 'Atalia', 'putri', '$2y$10$Y/Yf6z6jLm9J8ssEYYa98eNEPEJkRNCfClHwN.azOc0pNtBugQCQS', 'kasir', 1),
(15, 'Coba', 'akucoba', '$2y$10$V30SLnBKxeaK5dyNLIkTeuoJ3x1/U51BopgJHOmnl8BPN2RSvw3.a', 'administrator', 1),
(16, 'Amelia', 'amel', '$2y$10$8d57yit0qNHjccebWzl7SeO/QzwIUtDmp0GDOdyRWnbMCd8K.sUx.', 'kasir', 1),
(17, 'Aku', 'akulagi', '$2y$10$XR6lalJjEmX2UKLMNR/TDOuqVUryi2jk3vfsYXxef31fyK/RyjJjG', 'kasir', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_log_pengeluaran`
--
ALTER TABLE `tb_log_pengeluaran`
  ADD PRIMARY KEY (`id_log_pengeluaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`kode_invoice`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_log_pengeluaran`
--
ALTER TABLE `tb_log_pengeluaran`
  MODIFY `id_log_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
