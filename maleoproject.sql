-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Agu 2020 pada 11.56
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maleoproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` bigint(20) NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `name_id`, `alamat_id`, `jabatan_id`, `no_hp`, `ktp`, `created_at`, `updated_at`) VALUES
(1, '1', 'Jl. Kepodang', 1, '081275079272', '2101060801980001', '2020-08-11 06:40:58', '2020-08-08 14:41:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(2, 'Designer'),
(1, 'Web Programmer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jeniskelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`id`, `jeniskelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_30_104236_add_roles_field_to_users_table', 1),
(4, '2020_07_30_114704_create_pegawais_table', 2),
(5, '2020_07_31_150009_create_jabatans_table', 3),
(8, '2020_08_04_055722_create_jeniskelamins_table', 6),
(9, '2020_08_07_075802_create_data_penggunas_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllhr` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `alamat`, `tgllhr`, `created_at`, `updated_at`) VALUES
(15, 'Agus Ramuhfit', '827819281', 'Jl adi sucipto', '1996-06-04', '2020-08-12 01:50:05', '2020-08-12 01:50:05'),
(16, 'Maya', '37491807', 'Jl Pisang', '2002-06-13', '2020-08-11 08:14:57', '2020-08-11 08:14:57'),
(17, 'Agung', '86957869', 'Jl Kepodang', '2020-08-01', '2020-08-10 13:32:58', '2020-08-10 13:32:58'),
(19, 'Walen', '46375837', 'ewa fwdfefv sdvd', '2020-08-01', '2020-08-11 13:57:42', '2020-08-11 13:57:42'),
(20, 'awe fe rg', '17584768', 'e sgawegawe', '2020-08-01', '2020-08-10 13:32:58', '2020-08-10 13:32:58'),
(22, 'awe tgnserds', '28596870', 'gwsergsexdfg', '2020-08-01', '2020-08-10 13:32:58', '2020-08-10 13:32:58'),
(29, 'Agus', '82738298', 'siofehevionfioesd', '2020-08-10', '2020-08-10 06:42:22', '2020-08-10 06:42:22'),
(30, 'Romantica', '7384968789', 'alelo', '2020-08-11', '2020-08-11 08:25:24', '2020-08-11 08:25:24'),
(34, 'Wahyu', '75894786', 'eiyfvnosefjoisd', '2020-08-11', '2020-08-11 08:03:54', '2020-08-11 08:03:54'),
(35, 'anhyar', '75869780', 'se hfkshfsidk', '2020-08-11', '2020-08-11 08:04:29', '2020-08-11 08:04:29'),
(36, 'Angga mahmud', '82764789', 'hajlueit', '1998-06-11', '2020-08-11 08:30:33', '2020-08-11 08:30:33'),
(37, 'Maria', '75869589', 'rghebiogor', '1999-06-11', '2020-08-11 13:53:12', '2020-08-11 13:53:12'),
(38, 'PoH', '75860289', 'dkhgk hger', '2020-08-11', '2020-08-11 13:53:58', '2020-08-11 13:53:58'),
(39, 'ANDIKA', '85746895', 'hjhfjsh fhisfvsdv', '2020-08-12', '2020-08-11 13:55:23', '2020-08-11 13:55:23'),
(40, 'mawar', '74859687', 'f iushefisjclksmkl', '1998-10-12', '2020-08-12 01:03:58', '2020-08-12 01:03:58'),
(42, '128743892749234', '2343545', 'dfg dgdgsd', '2020-08-12', '2020-08-12 01:38:53', '2020-08-12 01:38:53'),
(43, 'manda', '7893578937594', 'efvhishd fijlskd', '2020-08-12', '2020-08-12 01:39:55', '2020-08-12 01:39:55'),
(44, 'mahiru', '75847895', 'sdijhfldknvkjdndf', '2020-08-12', '2020-08-12 01:45:19', '2020-08-12 01:45:19'),
(45, 'angga', '74856781', 'hfjtipyo', '2020-08-12', '2020-08-12 01:47:34', '2020-08-12 01:47:34'),
(46, 'ahmadi', '17586978', 'sudhfkjs rngkles', '1982-06-12', '2020-08-12 02:00:09', '2020-08-12 02:00:09'),
(47, 'maru', '748596879', 'hdjfhtioyp', '2003-06-12', '2020-08-12 02:09:37', '2020-08-12 02:09:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'Agus Ramufhit', 'agusramufhit50@gmail.com', NULL, '$2y$10$1ZuQEjUhoa6Crjx/ZkdMquCqni.v3LWkwQP3J9BuxIt4wbdnOWg06', NULL, '2020-07-30 04:36:53', '2020-07-30 04:36:53', 'ADMIN'),
(7, 'Angga Rahmat', 'anggarahmat5@gmail.com', NULL, '$2y$10$nq4gV7QSZpZIlxl1JtcEFeDrqfSDE1Twi821tk22DBAOdqRRXczrq', NULL, '2020-08-11 07:00:07', '2020-08-11 07:00:07', 'USER'),
(8, 'Ilham', 'ilham5@gmail.com', NULL, '$2y$10$6UT/zhDFXz325dRiMk4tz.M.IQrrPr/rk9Wk5qhzfA1aBqb9IWDKu', NULL, '2020-08-12 06:52:36', '2020-08-12 06:52:36', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_id` (`name_id`),
  ADD KEY `alamat_id` (`alamat_id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan` (`jabatan`);

--
-- Indeks untuk tabel `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jeniskelamin` (`jeniskelamin`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
