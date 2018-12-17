-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2018 pada 07.39
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `judul`, `pengarang`, `penerbit`, `created_at`, `updated_at`) VALUES
(1, 'basis data', 'fadil', 'ebut', '2017-04-25 22:47:28', '2017-05-07 21:25:35'),
(2, 'matematika', 'yono', 'dody', '2017-05-06 20:15:07', '2017-05-06 20:15:07'),
(20123, 'b.indonesia', 'yayan subandi', 'maman ah''madi', '2017-05-06 20:16:13', '2017-05-06 20:16:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_04_25_105021_create_siswa_table', 1),
(2, '2017_04_26_050431_create_buku_table', 2),
(3, '2017_04_27_032659_create_pinjam_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(10) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_balik` date NOT NULL,
  `nis` int(255) NOT NULL,
  `isbn` int(255) NOT NULL,
  `keterangan` enum('belum','kembali') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `tanggal_pinjam`, `tanggal_balik`, `nis`, `isbn`, `keterangan`, `created_at`, `updated_at`) VALUES
(567788, '2017-05-02', '2017-05-12', 101515921, 20123, 'belum', NULL, NULL),
(1234568, '2017-05-19', '2017-05-31', 101515925, 1, 'belum', '2017-05-11 21:36:55', '2017-05-11 21:36:55'),
(1234569, '2017-05-20', '2017-05-27', 101515925, 2, 'belum', '2017-05-11 21:37:25', '2017-05-11 21:37:25'),
(1234570, '2017-05-06', '2017-05-04', 101515920, 1, 'kembali', '2017-05-11 21:42:23', '2017-05-11 21:42:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `alamat`, `created_at`, `updated_at`) VALUES
(101515920, 'agung', 'XI RPL 2', 'kota bandung', '2017-05-08 03:11:22', '2017-05-08 03:11:22'),
(101515921, 'balqis', 'XI RPL 2', 'bandung timur', '2017-05-08 03:12:14', '2017-05-08 03:12:14'),
(101515922, 'bayu', 'XI RPL 2', 'kircon', '2017-05-08 03:13:40', '2017-05-08 03:13:40'),
(101515923, 'dewi', 'XI RPL 2', 'bandung', '2017-05-08 03:14:00', '2017-05-08 03:14:00'),
(101515924, 'fahmi', 'XI RPL 2', 'ci biru', '2017-05-08 03:15:41', '2017-05-08 03:15:41'),
(101515925, 'fendi doang', 'XI RPL 2', 'Kota Bandung', '2017-05-08 03:16:09', '2017-05-08 03:17:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'fendi', 'ifen12', '$2y$10$jYw2QB2UB9JwGX.tHGQYeeqaNnjINcBYUwiwFieHKWkq/WSbXDnXK', 'TRvpP4PKetYM2DoYru9qAy7jyGtFusnnEvFs9sAzEBsIwqibI4K93KsoNQiF', '2018-02-08 23:35:53', '2018-02-08 23:35:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `isbn` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20124;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234571;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101515926;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
