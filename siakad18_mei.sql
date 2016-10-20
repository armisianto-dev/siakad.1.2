-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Mei 2015 jam 18:26
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `id_agama` int(1) NOT NULL AUTO_INCREMENT,
  `agama` varchar(20) NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `agama`
--

INSERT IGNORE INTO `agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(7, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek`
--

CREATE TABLE IF NOT EXISTS `aspek` (
  `id_aspek` int(1) NOT NULL AUTO_INCREMENT,
  `aspek` varchar(15) NOT NULL,
  `kkm` double(3,2) NOT NULL,
  PRIMARY KEY (`id_aspek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `aspek`
--

INSERT IGNORE INTO `aspek` (`id_aspek`, `aspek`, `kkm`) VALUES
(1, 'pengetahuan', 2.66),
(2, 'ketrampilan', 2.66),
(3, 'sikap', 2.66);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagi_kelas`
--

CREATE TABLE IF NOT EXISTS `bagi_kelas` (
  `id_bagikelas` int(10) NOT NULL AUTO_INCREMENT,
  `NIS` int(6) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  PRIMARY KEY (`id_bagikelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `bagi_kelas`
--

INSERT IGNORE INTO `bagi_kelas` (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES
(1, 5680, 1, 2),
(2, 5681, 1, 2),
(3, 5682, 6, 2),
(4, 5683, 1, 2),
(5, 5686, 5, 2),
(6, 5678, 2, 2),
(7, 5684, 3, 2),
(8, 5685, 3, 2),
(9, 5687, 3, 2),
(11, 5689, 3, 2),
(12, 5691, 1, 2),
(13, 5690, 1, 2),
(14, 5692, 5, 2),
(15, 5693, 5, 2),
(16, 5695, 5, 2),
(17, 5696, 5, 2),
(18, 5694, 6, 2),
(19, 5697, 3, 2),
(20, 5698, 6, 2),
(21, 5699, 6, 2),
(22, 5700, 6, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
  `id_bobot` int(3) NOT NULL AUTO_INCREMENT,
  `id_aspek` int(1) NOT NULL,
  `nama_bobot` varchar(20) NOT NULL,
  `bobot` double(1,0) NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `bobot`
--

INSERT IGNORE INTO `bobot` (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES
(1, 1, 'NH', 3),
(2, 1, 'UTS', 1),
(3, 1, 'UAS', 1),
(4, 2, 'UJK', 2),
(5, 2, 'PROYEK', 1),
(6, 2, 'PORTOFOLIO', 1),
(7, 3, 'OBS', 2),
(8, 3, 'P.DIRI', 1),
(9, 3, 'P.TEMAN', 1),
(10, 3, 'JURNAL', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_aspek`
--

CREATE TABLE IF NOT EXISTS `catatan_aspek` (
  `id_catatanaspek` int(6) NOT NULL AUTO_INCREMENT,
  `id_aspek` int(1) NOT NULL,
  `id_mengajar` int(4) NOT NULL,
  `nis` int(6) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `catatan` varchar(160) NOT NULL,
  PRIMARY KEY (`id_catatanaspek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- Dumping data untuk tabel `catatan_aspek`
--

INSERT IGNORE INTO `catatan_aspek` (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES
(1, 1, 7, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(2, 1, 7, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(3, 1, 7, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(4, 1, 7, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(5, 1, 7, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(6, 2, 7, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(7, 2, 7, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(8, 2, 7, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(9, 2, 7, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(10, 2, 7, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(11, 1, 4, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(12, 1, 4, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten'),
(13, 1, 4, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten'),
(14, 1, 4, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten'),
(15, 1, 4, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten'),
(16, 2, 4, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(17, 2, 4, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(18, 2, 4, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(19, 2, 4, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(20, 2, 4, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(21, 3, 4, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(22, 3, 4, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(23, 3, 4, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(24, 3, 4, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(25, 3, 4, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(26, 1, 1, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(27, 1, 1, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(28, 1, 1, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(29, 1, 1, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(30, 1, 1, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(31, 2, 1, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(32, 2, 1, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(33, 2, 1, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(34, 2, 1, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(35, 2, 1, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(36, 3, 1, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(37, 3, 1, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(38, 3, 1, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(39, 3, 1, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(40, 3, 1, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(41, 1, 2, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(42, 1, 2, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(43, 1, 2, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(44, 1, 2, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(45, 1, 2, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(46, 2, 2, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(47, 2, 2, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(48, 2, 2, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(49, 2, 2, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(50, 2, 2, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(51, 3, 2, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(52, 3, 2, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(53, 3, 2, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(54, 3, 2, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(55, 3, 2, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(56, 1, 3, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(57, 1, 3, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(58, 1, 3, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(59, 1, 3, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(60, 1, 3, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(61, 2, 3, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(62, 2, 3, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(63, 2, 3, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(64, 2, 3, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(65, 2, 3, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(66, 3, 3, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(67, 3, 3, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(68, 3, 3, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(69, 3, 3, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(70, 3, 3, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(71, 1, 6, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(72, 1, 6, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(73, 1, 6, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(74, 1, 6, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(75, 1, 6, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(76, 2, 6, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(77, 2, 6, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(78, 2, 6, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(79, 2, 6, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(80, 2, 6, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(81, 3, 6, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(82, 3, 6, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(83, 3, 6, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(84, 3, 6, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(85, 3, 6, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(86, 3, 7, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru'),
(87, 3, 7, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru'),
(88, 3, 7, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru'),
(89, 3, 7, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru'),
(90, 3, 7, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru'),
(91, 1, 5, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(92, 1, 5, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(93, 1, 5, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(94, 1, 5, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(95, 1, 5, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(96, 2, 5, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(97, 2, 5, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(98, 2, 5, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(99, 2, 5, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(100, 2, 5, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(101, 3, 5, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(102, 3, 5, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(103, 3, 5, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(104, 3, 5, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(105, 3, 5, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(106, 1, 8, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(107, 1, 8, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(108, 1, 8, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(109, 1, 8, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(110, 1, 8, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(111, 2, 8, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(112, 2, 8, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(113, 2, 8, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(114, 2, 8, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(115, 2, 8, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(116, 3, 8, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(117, 3, 8, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(118, 3, 8, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(119, 3, 8, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(120, 3, 8, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(121, 1, 9, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(122, 1, 9, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(123, 1, 9, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(124, 1, 9, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(125, 1, 9, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(126, 2, 9, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(127, 2, 9, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(128, 2, 9, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(129, 2, 9, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(130, 2, 9, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(131, 3, 9, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(132, 3, 9, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(133, 3, 9, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(134, 3, 9, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(135, 3, 9, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(136, 1, 10, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(137, 1, 10, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(138, 1, 10, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(139, 1, 10, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(140, 1, 10, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y'),
(141, 2, 10, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(142, 2, 10, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(143, 2, 10, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(144, 2, 10, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(145, 2, 10, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas'),
(146, 3, 10, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(147, 3, 10, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(148, 3, 10, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(149, 3, 10, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(150, 3, 10, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.'),
(151, 1, 16, 5680, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1'),
(152, 1, 16, 5681, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1'),
(153, 1, 16, 5690, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1'),
(154, 1, 16, 5683, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1'),
(155, 1, 16, 5691, '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1'),
(156, 2, 16, 5680, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan '),
(157, 2, 16, 5681, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan '),
(158, 2, 16, 5690, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan '),
(159, 2, 16, 5683, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan '),
(160, 2, 16, 5691, '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan '),
(161, 3, 16, 5680, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok'),
(162, 3, 16, 5681, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok'),
(163, 3, 16, 5690, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok'),
(164, 3, 16, 5683, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok'),
(165, 3, 16, 5691, '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok'),
(166, 1, 17, 5684, '1', 'baik, lanjutkan dalami materi tentang lensa.'),
(167, 1, 17, 5689, '1', 'baik, lanjutkan dalami materi tentang lensa.'),
(168, 1, 17, 5687, '1', 'baik, lanjutkan dalami materi tentang lensa.'),
(169, 1, 17, 5685, '1', 'baik, lanjutkan dalami materi tentang lensa.'),
(170, 1, 17, 5697, '1', 'baik, lanjutkan dalami materi tentang lensa.'),
(171, 2, 17, 5684, '1', 'Baik, namun perlu peningkatan keterampilan .....'),
(172, 2, 17, 5689, '1', 'Baik, namun perlu peningkatan keterampilan .....'),
(173, 2, 17, 5687, '1', 'Baik, namun perlu peningkatan keterampilan .....'),
(174, 2, 17, 5685, '1', 'Baik, namun perlu peningkatan keterampilan .....'),
(175, 2, 17, 5697, '1', 'Baik, namun perlu peningkatan keterampilan .....');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_eskul`
--

CREATE TABLE IF NOT EXISTS `catatan_eskul` (
  `id_catatan` int(8) NOT NULL AUTO_INCREMENT,
  `id_siswaeskul` int(6) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `nilai` enum('A','B','C') NOT NULL,
  PRIMARY KEY (`id_catatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `catatan_eskul`
--

INSERT IGNORE INTO `catatan_eskul` (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES
(27, 6, '1', 'A'),
(28, 7, '1', 'A'),
(29, 8, '1', 'B'),
(30, 16, '1', 'C'),
(31, 9, '1', 'A'),
(32, 10, '1', 'B'),
(33, 11, '1', 'A'),
(34, 12, '1', 'A'),
(35, 13, '1', 'A'),
(36, 14, '1', 'A'),
(37, 1, '1', 'B'),
(38, 2, '1', 'A'),
(39, 3, '1', 'B'),
(40, 4, '1', 'A'),
(41, 5, '1', 'C'),
(42, 15, '1', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eskul`
--

CREATE TABLE IF NOT EXISTS `eskul` (
  `id_eskul` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_eskul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `eskul`
--

INSERT IGNORE INTO `eskul` (`id_eskul`, `nama`, `NIP`, `aktif`) VALUES
(1, 'Seni Tari', '196303041984122003', 'Y'),
(2, 'Basket', '195704031984011001', 'Y'),
(3, 'Pramuka', 'EKSTRA1', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `NIP` varchar(18) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kota_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `pend_terakhir` enum('SD','SMP','SMA','SMK','D3','S1','S2','S3') NOT NULL,
  `riwayat_pend` text,
  `jabatan` enum('Kepsek','Guru','TU') NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT IGNORE INTO `guru` (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES
('1', 'Kamdiyo', 'L', 'Kulon Progo', '1962-03-06', 2, 'Kulon Progo', '081999999999', 'D3', '', 'Guru', 'no_image_male.jpg', 'Y'),
('195208201984012001', 'Dra. Sri Sudarmi', 'P', 'Bantul', '1952-08-20', 1, 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('195308011982031017', 'Rusgiyanto, S.Pd', 'L', 'Solo', '1953-08-01', 3, 'Jogja', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y'),
('195607151977112002', 'Maria Lucia Dri Handayani, S.P ', 'P', 'Sleman', '1956-07-15', 3, 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('195704031984011001', 'Slamet Raharjo, B.A', 'L', 'Klaten', '1957-04-03', 1, 'Jogja', '081999999999', 'D3', '', 'Guru', 'no_image_male.jpg', 'Y'),
('19571224198031002', 'Warjiyo, S.Pd', 'L', 'Sleman', '1957-12-24', 1, 'Godean,Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y'),
('195808011989032003', 'Partini, S.Pd', 'P', 'Bantul', '1961-03-01', 1, 'Sewon, Bantul', '08909999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('195902091984122001', 'Siti Dayu Utami, S.Pd', 'P', 'Yogyakarta', '1959-02-09', 1, 'Kotagede, Yogyakarta', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('195904131981111002', 'Sukarja B', 'L', 'Sleman', '1959-04-13', 1, 'Sleman', '081999999999', 'SMA', '', 'TU', 'no_image_male.jpg', 'Y'),
('195908111984032005', 'Sri Sartiningsih, S.Pd', 'P', 'Wonosobo', '1959-08-11', 1, 'Jogja', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('195909151979031001', 'Drs. Sri Indra Dwiyatno, M.Pd', 'L', 'Bantu', '1959-09-15', 1, 'Bantul', '0909090909', 'S2', '', 'Kepsek', 'no_image_male.jpg', 'Y'),
('195912101986031015', 'Raden Hertoto Krishandoyo', 'L', 'Yogyakarta', '1959-12-01', 1, 'Yogyakarta', '1234567890', 'SMA', '', 'TU', 'amcc.jpg', 'Y'),
('196011201984032004', 'Pudji Rahayu, S.Pd', 'P', 'Ponorogo', '1960-11-20', 1, 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196201151981032001', 'Surti Irianingsih', 'P', 'Yogyakarta', '1962-01-15', 1, 'Yogyakarta', '081999999999', 'SMA', '', 'TU', 'no_image_female.jpg', 'Y'),
('196204181994122002', 'L.Prikasih Rita Setiati, S.Pd', 'P', 'Yogyakarta', '1962-04-18', 3, 'Yogyakarta', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196206171986032005', 'Endang Yuni Kusmarwati, SE', 'P', 'Yogyakarta', '1962-06-17', 1, 'Yogyakarta', '081999999999', 'S1', '', 'TU', 'no_image_female.jpg', 'Y'),
('196303041984122003', 'F. Romana Sumarjiati, S.Pd', 'P', 'Sleman', '1963-03-04', 3, 'Mejing Kulon, Ambarketawang, Gamping, Sleman', '1234567', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196401091986022001', 'Eka Triwahmiskiatun', 'P', 'Yogyakarta', '1964-01-09', 1, 'Yogyakarta', '081999999999', 'SMA', '', 'TU', 'no_image_female.jpg', 'Y'),
('196410181986031010', 'Suhariya, S.Pd', 'L', 'Bantul', '1964-11-18', 1, 'Soboman, Ngestiharjo,Kasihan,Bantul', '434343434', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y'),
('196411061986012001', 'Sriyanti, S.Pd', 'P', 'Bantul', '1964-11-06', 1, 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196501211995122002', 'Dra. Riyanti Puji Nurweni', 'P', 'Sleman', '1965-01-21', 1, 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196512021993022001', 'Sri Zaniyanti, S.Ag', 'P', 'Bantul', '1965-12-02', 1, 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196702021989022001', 'Suhatni, S.Pd', 'P', 'Bantul', '1967-02-02', 1, 'Perum Jati Mas', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196809102007012015', 'Kembariyana, S.Pd', 'P', 'Sleman', '1968-09-10', 1, 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('196903151995122006', 'Muslimah, S.Pd', 'P', 'Prembun', '1974-06-11', 1, 'Sewon, Bantul', '87878787878', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('197010251997022003', 'Maria Susanti, S.Pd', 'P', 'Yogyakarta', '1970-11-25', 2, 'Sleman', '08998888', 'S1', '<p>- SD</p>\r\n<p>- SMP</p>\r\n<p>- SMA</p>\r\n<p>- UNY</p>', 'Guru', 'bu_maria_susanti.jpg', 'Y'),
('197105022006041014', 'Alfahmi, S.Pd', 'L', 'Bantul', '1971-05-02', 1, 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y'),
('197202011998022001', 'Dwi Hartati Ariyani, S.Pd', 'P', 'Banjarnegara', '1972-02-01', 1, 'Gamol, Balecatur,Gamping,Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('197207052006042024', 'Giarti Puspa Ningrum, S.Pd', 'P', 'Pagar Alam', '1972-07-05', 1, 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('197502252005011008', 'Garis Gunarto, S.Pd', 'L', 'Bantul', '1975-02-25', 1, 'Pundong,Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y'),
('198108252006042014', 'Fithria Futhihati Agustin, S.Pd', 'P', 'Yogyakarta', '1981-08-25', 1, 'Kotagede, Yogyakarta', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y'),
('2', 'Eko Nurhidayat, S.Sn', 'L', 'Yogyakarta', '1969-03-01', 1, 'Bantul', '081999999999', 'SMA', '', 'Guru', 'no_image_male.jpg', 'Y'),
('20084', 'Budoyo', 'L', 'Bantul', '1977-02-09', 1, 'Bantul', '081999999999', 'SMA', '', 'TU', 'no_image_male.jpg', 'Y'),
('3', 'Geovani Akbar, S.Pd', 'L', 'Salatiga', '1983-07-31', 1, 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y'),
('6', 'Siti Rahayu', 'P', 'Sleman', '1970-07-21', 1, 'Sleman', '081999999999', 'SMA', '', 'TU', 'no_image_female.jpg', 'Y'),
('7', 'Erfan Heri Jatmika, A.Md', 'L', 'Bantul', '1985-08-21', 1, 'Bantul', '081999999999', 'D3', '', 'Guru', 'no_image_male.jpg', 'Y'),
('EKSTRA1', 'Safari', 'L', 'Bantul', '1969-02-04', 1, 'Bantul', '0909090909', 'SMA', '', 'Guru', 'no_image_male.jpg', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(2) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(6) NOT NULL,
  `jenjang` enum('7','8','9') NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT IGNORE INTO `kelas` (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES
(1, 'VII A', '7', 'Y'),
(2, 'VIII A', '8', 'Y'),
(3, 'VII B', '7', 'Y'),
(4, 'VIII B', '8', 'Y'),
(5, 'VII C', '7', 'Y'),
(6, 'VII D', '7', 'Y'),
(7, 'VII E', '7', 'Y'),
(8, 'VIII C', '8', 'Y'),
(9, 'VIII D', '8', 'Y'),
(10, 'VIII E', '8', 'Y'),
(11, 'IX A', '9', 'Y'),
(12, 'IX B', '9', 'Y'),
(13, 'IX C', '9', 'Y'),
(14, 'IX D', '9', 'Y'),
(15, 'IX E', '9', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_keluar`
--

CREATE TABLE IF NOT EXISTS `ket_keluar` (
  `nis` int(6) NOT NULL,
  `stts_keluar` enum('do','keluar') NOT NULL,
  `tgl_keluar` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ket_keluar`
--

INSERT IGNORE INTO `ket_keluar` (`nis`, `stts_keluar`, `tgl_keluar`, `alasan`) VALUES
(5678, 'keluar', '2015-04-13', 'pindah ke luar kota, karna ikut orang tua dinas kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(2) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(50) NOT NULL,
  `kelompok` enum('A','B') NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `mapel`
--

INSERT IGNORE INTO `mapel` (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES
(1, 'Matematika', 'A', 'Y'),
(2, 'Bahasa Indonesia', 'A', 'Y'),
(3, 'Prakarya', 'B', 'Y'),
(4, 'Ilmu Pengetahuan Alam', 'A', 'Y'),
(5, 'Seni Budaya', 'B', 'Y'),
(6, 'Bahasa Inggris', 'A', 'Y'),
(7, 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'B', 'Y'),
(8, 'Ilmu Pengetahuan Sosial', 'A', 'Y'),
(9, 'Pendidikan Agama dan Budi Pekerti', 'A', 'Y'),
(10, 'Pendidikan Pancasila dan Kewarganegaraan', 'A', 'Y'),
(11, 'Bahasa Jawa', 'B', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `id_mengajar` int(4) NOT NULL AUTO_INCREMENT,
  `NIP` varchar(18) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_mapel` int(2) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  `jml_jam` int(2) NOT NULL,
  PRIMARY KEY (`id_mengajar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `mengajar`
--

INSERT IGNORE INTO `mengajar` (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES
(1, '197010251997022003', 1, 4, 2, 5),
(2, '195704031984011001', 1, 7, 2, 3),
(3, '197202011998022001', 1, 6, 2, 4),
(4, '196702021989022001', 1, 1, 2, 5),
(5, '196903151995122006', 1, 8, 2, 4),
(6, '197502252005011008', 1, 3, 2, 2),
(7, '198108252006042014', 1, 5, 2, 3),
(8, '196501211995122002', 1, 2, 2, 6),
(9, '195908111984032005', 1, 10, 2, 3),
(10, '196512021993022001', 1, 9, 2, 3),
(11, '196809102007012015', 3, 2, 2, 2),
(12, '196303041984122003', 3, 5, 2, 3),
(13, '196702021989022001', 3, 1, 2, 5),
(14, '195909151979031001', 5, 1, 2, 5),
(15, '196410181986031010', 3, 10, 2, 4),
(16, '196303041984122003', 1, 11, 2, 2),
(17, '197010251997022003', 3, 4, 2, 5),
(18, '197010251997022003', 5, 4, 2, 5),
(19, '197010251997022003', 6, 4, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_subaspek` int(2) NOT NULL,
  `id_mengajar` int(4) NOT NULL,
  `nis` int(6) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `ke` int(2) NOT NULL,
  `nilai` double(5,2) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=826 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT IGNORE INTO `nilai` (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES
(61, 7, 1, 5680, '1', 1, 78.00),
(62, 7, 1, 5681, '1', 1, 87.00),
(63, 7, 1, 5690, '1', 1, 89.00),
(64, 7, 1, 5683, '1', 1, 88.00),
(65, 7, 1, 5691, '1', 1, 90.00),
(66, 7, 1, 5680, '1', 2, 98.00),
(67, 7, 1, 5681, '1', 2, 88.00),
(68, 7, 1, 5690, '1', 2, 78.00),
(69, 7, 1, 5683, '1', 2, 98.00),
(70, 7, 1, 5691, '1', 2, 88.00),
(86, 6, 1, 5680, '1', 1, 98.00),
(87, 6, 1, 5681, '1', 1, 89.00),
(88, 6, 1, 5690, '1', 1, 87.00),
(89, 6, 1, 5683, '1', 1, 89.00),
(90, 6, 1, 5691, '1', 1, 99.00),
(91, 6, 1, 5680, '1', 2, 88.00),
(92, 6, 1, 5681, '1', 2, 89.00),
(93, 6, 1, 5690, '1', 2, 97.00),
(94, 6, 1, 5683, '1', 2, 85.00),
(95, 6, 1, 5691, '1', 2, 96.50),
(116, 5, 1, 5680, '1', 1, 90.00),
(117, 5, 1, 5681, '1', 1, 77.00),
(118, 5, 1, 5690, '1', 1, 76.00),
(119, 5, 1, 5683, '1', 1, 89.00),
(120, 5, 1, 5691, '1', 1, 90.00),
(121, 5, 1, 5680, '1', 2, 87.00),
(122, 5, 1, 5681, '1', 2, 77.00),
(123, 5, 1, 5690, '1', 2, 76.00),
(124, 5, 1, 5683, '1', 2, 79.00),
(125, 5, 1, 5691, '1', 2, 89.00),
(141, 2, 1, 5680, '1', 1, 87.00),
(142, 2, 1, 5681, '1', 1, 89.00),
(143, 2, 1, 5690, '1', 1, 88.00),
(144, 2, 1, 5683, '1', 1, 76.00),
(145, 2, 1, 5691, '1', 1, 89.00),
(146, 2, 1, 5680, '1', 2, 87.00),
(147, 2, 1, 5681, '1', 2, 98.00),
(148, 2, 1, 5690, '1', 2, 76.00),
(149, 2, 1, 5683, '1', 2, 88.00),
(150, 2, 1, 5691, '1', 2, 80.00),
(151, 2, 1, 5680, '1', 3, 90.00),
(152, 2, 1, 5681, '1', 3, 98.00),
(153, 2, 1, 5690, '1', 3, 99.00),
(154, 2, 1, 5683, '1', 3, 87.00),
(155, 2, 1, 5691, '1', 3, 89.00),
(156, 2, 1, 5680, '1', 4, 87.00),
(157, 2, 1, 5681, '1', 4, 79.00),
(158, 2, 1, 5690, '1', 4, 88.00),
(159, 2, 1, 5683, '1', 4, 88.00),
(160, 2, 1, 5691, '1', 4, 90.00),
(161, 2, 1, 5680, '1', 5, 98.00),
(162, 2, 1, 5681, '1', 5, 90.00),
(163, 2, 1, 5690, '1', 5, 99.00),
(164, 2, 1, 5683, '1', 5, 95.50),
(165, 2, 1, 5691, '1', 5, 97.50),
(166, 4, 1, 5680, '1', 1, 98.00),
(167, 4, 1, 5681, '1', 1, 99.00),
(168, 4, 1, 5690, '1', 1, 90.00),
(169, 4, 1, 5683, '1', 1, 87.00),
(170, 4, 1, 5691, '1', 1, 89.00),
(171, 3, 1, 5680, '1', 1, 90.00),
(172, 3, 1, 5681, '1', 1, 99.00),
(173, 3, 1, 5690, '1', 1, 97.00),
(174, 3, 1, 5683, '1', 1, 90.00),
(175, 3, 1, 5691, '1', 1, 88.00),
(176, 1, 1, 5680, '1', 1, 100.00),
(177, 1, 1, 5681, '1', 1, 99.00),
(178, 1, 1, 5690, '1', 1, 100.00),
(179, 1, 1, 5683, '1', 1, 96.00),
(180, 1, 1, 5691, '1', 1, 87.00),
(181, 1, 1, 5680, '1', 2, 79.00),
(182, 1, 1, 5681, '1', 2, 83.00),
(183, 1, 1, 5690, '1', 2, 78.50),
(184, 1, 1, 5683, '1', 2, 81.00),
(185, 1, 1, 5691, '1', 2, 80.00),
(186, 1, 1, 5680, '1', 3, 99.00),
(187, 1, 1, 5681, '1', 3, 100.00),
(188, 1, 1, 5690, '1', 3, 98.00),
(189, 1, 1, 5683, '1', 3, 98.00),
(190, 1, 1, 5691, '1', 3, 96.50),
(191, 1, 1, 5680, '1', 4, 98.00),
(192, 1, 1, 5681, '1', 4, 99.00),
(193, 1, 1, 5690, '1', 4, 99.75),
(194, 1, 1, 5683, '1', 4, 90.00),
(195, 1, 1, 5691, '1', 4, 94.00),
(196, 1, 1, 5680, '1', 5, 87.00),
(197, 1, 1, 5681, '1', 5, 79.00),
(198, 1, 1, 5690, '1', 5, 78.00),
(199, 1, 1, 5683, '1', 5, 82.00),
(200, 1, 1, 5691, '1', 5, 84.00),
(201, 11, 1, 5680, '1', 1, 4.00),
(202, 11, 1, 5681, '1', 1, 3.00),
(203, 11, 1, 5690, '1', 1, 4.00),
(204, 11, 1, 5683, '1', 1, 4.00),
(205, 11, 1, 5691, '1', 1, 4.00),
(206, 11, 1, 5680, '1', 2, 3.00),
(207, 11, 1, 5681, '1', 2, 3.00),
(208, 11, 1, 5690, '1', 2, 4.00),
(209, 11, 1, 5683, '1', 2, 4.00),
(210, 11, 1, 5691, '1', 2, 4.00),
(211, 8, 1, 5680, '1', 1, 2.00),
(212, 8, 1, 5681, '1', 1, 3.00),
(213, 8, 1, 5690, '1', 1, 4.00),
(214, 8, 1, 5683, '1', 1, 3.00),
(215, 8, 1, 5691, '1', 1, 3.00),
(216, 8, 1, 5680, '1', 2, 2.00),
(217, 8, 1, 5681, '1', 2, 3.00),
(218, 8, 1, 5690, '1', 2, 3.00),
(219, 8, 1, 5683, '1', 2, 4.00),
(220, 8, 1, 5691, '1', 2, 3.00),
(221, 10, 1, 5680, '1', 1, 3.00),
(222, 10, 1, 5681, '1', 1, 4.00),
(223, 10, 1, 5690, '1', 1, 3.00),
(224, 10, 1, 5683, '1', 1, 4.00),
(225, 10, 1, 5691, '1', 1, 4.00),
(226, 10, 1, 5680, '1', 2, 4.00),
(227, 10, 1, 5681, '1', 2, 4.00),
(228, 10, 1, 5690, '1', 2, 4.00),
(229, 10, 1, 5683, '1', 2, 3.00),
(230, 10, 1, 5691, '1', 2, 3.00),
(231, 9, 1, 5680, '1', 1, 3.00),
(232, 9, 1, 5681, '1', 1, 3.00),
(233, 9, 1, 5690, '1', 1, 4.00),
(234, 9, 1, 5683, '1', 1, 4.00),
(235, 9, 1, 5691, '1', 1, 3.00),
(236, 9, 1, 5680, '1', 2, 4.00),
(237, 9, 1, 5681, '1', 2, 4.00),
(238, 9, 1, 5690, '1', 2, 3.00),
(239, 9, 1, 5683, '1', 2, 4.00),
(240, 9, 1, 5691, '1', 2, 2.00),
(241, 7, 2, 5680, '1', 1, 89.00),
(242, 7, 2, 5681, '1', 1, 99.00),
(243, 7, 2, 5690, '1', 1, 90.00),
(244, 7, 2, 5683, '1', 1, 86.00),
(245, 7, 2, 5691, '1', 1, 78.00),
(246, 7, 2, 5680, '1', 2, 76.00),
(247, 7, 2, 5681, '1', 2, 89.00),
(248, 7, 2, 5690, '1', 2, 89.00),
(249, 7, 2, 5683, '1', 2, 77.00),
(250, 7, 2, 5691, '1', 2, 84.00),
(251, 6, 2, 5680, '1', 1, 89.00),
(252, 6, 2, 5681, '1', 1, 92.00),
(253, 6, 2, 5690, '1', 1, 78.00),
(254, 6, 2, 5683, '1', 1, 82.00),
(255, 6, 2, 5691, '1', 1, 77.00),
(256, 6, 2, 5680, '1', 2, 88.00),
(257, 6, 2, 5681, '1', 2, 83.00),
(258, 6, 2, 5690, '1', 2, 81.00),
(259, 6, 2, 5683, '1', 2, 78.00),
(260, 6, 2, 5691, '1', 2, 88.00),
(261, 5, 2, 5680, '1', 1, 85.00),
(262, 5, 2, 5681, '1', 1, 78.00),
(263, 5, 2, 5690, '1', 1, 77.00),
(264, 5, 2, 5683, '1', 1, 89.00),
(265, 5, 2, 5691, '1', 1, 75.00),
(266, 5, 2, 5680, '1', 2, 78.00),
(267, 5, 2, 5681, '1', 2, 77.00),
(268, 5, 2, 5690, '1', 2, 79.00),
(269, 5, 2, 5683, '1', 2, 75.00),
(270, 5, 2, 5691, '1', 2, 73.00),
(271, 2, 2, 5680, '1', 1, 88.00),
(272, 2, 2, 5681, '1', 1, 79.00),
(273, 2, 2, 5690, '1', 1, 97.00),
(274, 2, 2, 5683, '1', 1, 89.00),
(275, 2, 2, 5691, '1', 1, 86.00),
(276, 2, 2, 5680, '1', 2, 70.00),
(277, 2, 2, 5681, '1', 2, 75.00),
(278, 2, 2, 5690, '1', 2, 77.00),
(279, 2, 2, 5683, '1', 2, 78.00),
(280, 2, 2, 5691, '1', 2, 71.00),
(281, 2, 2, 5680, '1', 3, 97.00),
(282, 2, 2, 5681, '1', 3, 90.75),
(283, 2, 2, 5690, '1', 3, 98.00),
(284, 2, 2, 5683, '1', 3, 94.00),
(285, 2, 2, 5691, '1', 3, 99.00),
(286, 2, 2, 5680, '1', 4, 86.00),
(287, 2, 2, 5681, '1', 4, 87.00),
(288, 2, 2, 5690, '1', 4, 83.00),
(289, 2, 2, 5683, '1', 4, 88.00),
(290, 2, 2, 5691, '1', 4, 82.00),
(291, 2, 2, 5680, '1', 5, 98.00),
(292, 2, 2, 5681, '1', 5, 97.00),
(293, 2, 2, 5690, '1', 5, 98.00),
(294, 2, 2, 5683, '1', 5, 94.00),
(295, 2, 2, 5691, '1', 5, 95.00),
(296, 4, 2, 5680, '1', 1, 89.00),
(297, 4, 2, 5681, '1', 1, 85.00),
(298, 4, 2, 5690, '1', 1, 86.00),
(299, 4, 2, 5683, '1', 1, 84.00),
(300, 4, 2, 5691, '1', 1, 87.00),
(301, 3, 2, 5680, '1', 1, 94.00),
(302, 3, 2, 5681, '1', 1, 93.00),
(303, 3, 2, 5690, '1', 1, 97.00),
(304, 3, 2, 5683, '1', 1, 95.00),
(305, 3, 2, 5691, '1', 1, 91.00),
(306, 1, 2, 5680, '1', 1, 87.00),
(307, 1, 2, 5681, '1', 1, 89.00),
(308, 1, 2, 5690, '1', 1, 88.00),
(309, 1, 2, 5683, '1', 1, 84.00),
(310, 1, 2, 5691, '1', 1, 86.00),
(311, 1, 2, 5680, '1', 2, 89.00),
(312, 1, 2, 5681, '1', 2, 90.00),
(313, 1, 2, 5690, '1', 2, 91.00),
(314, 1, 2, 5683, '1', 2, 92.00),
(315, 1, 2, 5691, '1', 2, 88.00),
(316, 1, 2, 5680, '1', 3, 96.00),
(317, 1, 2, 5681, '1', 3, 97.00),
(318, 1, 2, 5690, '1', 3, 95.00),
(319, 1, 2, 5683, '1', 3, 94.00),
(320, 1, 2, 5691, '1', 3, 98.00),
(321, 1, 2, 5680, '1', 4, 76.00),
(322, 1, 2, 5681, '1', 4, 75.00),
(323, 1, 2, 5690, '1', 4, 77.00),
(324, 1, 2, 5683, '1', 4, 73.00),
(325, 1, 2, 5691, '1', 4, 78.00),
(326, 1, 2, 5680, '1', 5, 95.00),
(327, 1, 2, 5681, '1', 5, 90.00),
(328, 1, 2, 5690, '1', 5, 96.00),
(329, 1, 2, 5683, '1', 5, 99.00),
(330, 1, 2, 5691, '1', 5, 93.00),
(331, 11, 2, 5680, '1', 1, 3.40),
(332, 11, 2, 5681, '1', 1, 3.50),
(333, 11, 2, 5690, '1', 1, 3.00),
(334, 11, 2, 5683, '1', 1, 3.80),
(335, 11, 2, 5691, '1', 1, 4.00),
(336, 11, 2, 5680, '1', 2, 3.50),
(337, 11, 2, 5681, '1', 2, 3.00),
(338, 11, 2, 5690, '1', 2, 4.00),
(339, 11, 2, 5683, '1', 2, 3.90),
(340, 11, 2, 5691, '1', 2, 3.75),
(341, 8, 2, 5680, '1', 1, 3.00),
(342, 8, 2, 5681, '1', 1, 3.60),
(343, 8, 2, 5690, '1', 1, 4.00),
(344, 8, 2, 5683, '1', 1, 3.80),
(345, 8, 2, 5691, '1', 1, 3.50),
(346, 8, 2, 5680, '1', 2, 3.00),
(347, 8, 2, 5681, '1', 2, 3.00),
(348, 8, 2, 5690, '1', 2, 3.60),
(349, 8, 2, 5683, '1', 2, 3.80),
(350, 8, 2, 5691, '1', 2, 3.10),
(351, 9, 2, 5680, '1', 1, 3.80),
(352, 9, 2, 5681, '1', 1, 3.70),
(353, 9, 2, 5690, '1', 1, 3.50),
(354, 9, 2, 5683, '1', 1, 3.60),
(355, 9, 2, 5691, '1', 1, 3.10),
(356, 9, 2, 5680, '1', 2, 3.50),
(357, 9, 2, 5681, '1', 2, 3.70),
(358, 9, 2, 5690, '1', 2, 3.60),
(359, 9, 2, 5683, '1', 2, 4.00),
(360, 9, 2, 5691, '1', 2, 3.30),
(361, 10, 2, 5680, '1', 1, 4.00),
(362, 10, 2, 5681, '1', 1, 3.40),
(363, 10, 2, 5690, '1', 1, 3.30),
(364, 10, 2, 5683, '1', 1, 3.80),
(365, 10, 2, 5691, '1', 1, 3.90),
(366, 7, 4, 5680, '1', 1, 89.00),
(367, 7, 4, 5681, '1', 1, 87.00),
(368, 7, 4, 5690, '1', 1, 86.00),
(369, 7, 4, 5683, '1', 1, 88.00),
(370, 7, 4, 5691, '1', 1, 87.00),
(371, 7, 4, 5680, '1', 2, 96.00),
(372, 7, 4, 5681, '1', 2, 98.00),
(373, 7, 4, 5690, '1', 2, 97.50),
(374, 7, 4, 5683, '1', 2, 99.00),
(375, 7, 4, 5691, '1', 2, 95.00),
(376, 6, 4, 5680, '1', 1, 89.00),
(377, 6, 4, 5681, '1', 1, 90.00),
(378, 6, 4, 5690, '1', 1, 91.00),
(379, 6, 4, 5683, '1', 1, 87.00),
(380, 6, 4, 5691, '1', 1, 88.00),
(381, 6, 4, 5680, '1', 2, 78.00),
(382, 6, 4, 5681, '1', 2, 76.00),
(383, 6, 4, 5690, '1', 2, 77.00),
(384, 6, 4, 5683, '1', 2, 79.00),
(385, 6, 4, 5691, '1', 2, 80.00),
(386, 6, 4, 5680, '1', 3, 89.00),
(387, 6, 4, 5681, '1', 3, 88.00),
(388, 6, 4, 5690, '1', 3, 89.00),
(389, 6, 4, 5683, '1', 3, 88.00),
(390, 6, 4, 5691, '1', 3, 87.00),
(391, 5, 4, 5680, '1', 1, 90.00),
(392, 5, 4, 5681, '1', 1, 91.00),
(393, 5, 4, 5690, '1', 1, 93.00),
(394, 5, 4, 5683, '1', 1, 89.00),
(395, 5, 4, 5691, '1', 1, 91.00),
(396, 5, 4, 5680, '1', 2, 89.00),
(397, 5, 4, 5681, '1', 2, 90.00),
(398, 5, 4, 5690, '1', 2, 92.00),
(399, 5, 4, 5683, '1', 2, 91.00),
(400, 5, 4, 5691, '1', 2, 93.00),
(401, 5, 4, 5680, '1', 3, 96.00),
(402, 5, 4, 5681, '1', 3, 97.00),
(403, 5, 4, 5690, '1', 3, 98.00),
(404, 5, 4, 5683, '1', 3, 94.00),
(405, 5, 4, 5691, '1', 3, 90.00),
(406, 2, 4, 5680, '1', 1, 87.00),
(407, 2, 4, 5681, '1', 1, 88.00),
(408, 2, 4, 5690, '1', 1, 86.00),
(409, 2, 4, 5683, '1', 1, 85.00),
(410, 2, 4, 5691, '1', 1, 83.00),
(411, 2, 4, 5680, '1', 2, 87.00),
(412, 2, 4, 5681, '1', 2, 88.00),
(413, 2, 4, 5690, '1', 2, 85.00),
(414, 2, 4, 5683, '1', 2, 89.00),
(415, 2, 4, 5691, '1', 2, 80.00),
(416, 1, 4, 5680, '1', 1, 90.00),
(417, 1, 4, 5681, '1', 1, 98.00),
(418, 1, 4, 5690, '1', 1, 95.00),
(419, 1, 4, 5683, '1', 1, 97.00),
(420, 1, 4, 5691, '1', 1, 91.00),
(421, 1, 4, 5680, '1', 2, 89.00),
(422, 1, 4, 5681, '1', 2, 88.00),
(423, 1, 4, 5690, '1', 2, 87.00),
(424, 1, 4, 5683, '1', 2, 86.00),
(425, 1, 4, 5691, '1', 2, 89.00),
(426, 3, 4, 5680, '1', 1, 98.00),
(427, 3, 4, 5681, '1', 1, 99.00),
(428, 3, 4, 5690, '1', 1, 96.00),
(429, 3, 4, 5683, '1', 1, 97.50),
(430, 3, 4, 5691, '1', 1, 97.00),
(431, 4, 4, 5680, '1', 1, 89.00),
(432, 4, 4, 5681, '1', 1, 88.00),
(433, 4, 4, 5690, '1', 1, 87.50),
(434, 4, 4, 5683, '1', 1, 86.00),
(435, 4, 4, 5691, '1', 1, 89.00),
(436, 11, 4, 5680, '1', 1, 4.00),
(437, 11, 4, 5681, '1', 1, 3.00),
(438, 11, 4, 5690, '1', 1, 3.50),
(439, 11, 4, 5683, '1', 1, 3.30),
(440, 11, 4, 5691, '1', 1, 3.00),
(441, 11, 4, 5680, '1', 2, 3.40),
(442, 11, 4, 5681, '1', 2, 4.00),
(443, 11, 4, 5690, '1', 2, 3.80),
(444, 11, 4, 5683, '1', 2, 3.00),
(445, 11, 4, 5691, '1', 2, 3.30),
(446, 8, 4, 5680, '1', 1, 4.00),
(447, 8, 4, 5681, '1', 1, 3.90),
(448, 8, 4, 5690, '1', 1, 3.80),
(449, 8, 4, 5683, '1', 1, 3.90),
(450, 8, 4, 5691, '1', 1, 4.00),
(451, 8, 4, 5680, '1', 2, 3.50),
(452, 8, 4, 5681, '1', 2, 3.30),
(453, 8, 4, 5690, '1', 2, 3.20),
(454, 8, 4, 5683, '1', 2, 3.00),
(455, 8, 4, 5691, '1', 2, 3.10),
(456, 9, 4, 5680, '1', 1, 3.50),
(457, 9, 4, 5681, '1', 1, 3.30),
(458, 9, 4, 5690, '1', 1, 3.70),
(459, 9, 4, 5683, '1', 1, 4.00),
(460, 9, 4, 5691, '1', 1, 3.00),
(461, 9, 4, 5680, '1', 2, 3.40),
(462, 9, 4, 5681, '1', 2, 3.50),
(463, 9, 4, 5690, '1', 2, 3.80),
(464, 9, 4, 5683, '1', 2, 3.90),
(465, 9, 4, 5691, '1', 2, 4.00),
(466, 10, 4, 5680, '1', 1, 3.40),
(467, 10, 4, 5681, '1', 1, 3.30),
(468, 10, 4, 5690, '1', 1, 3.20),
(469, 10, 4, 5683, '1', 1, 3.00),
(470, 10, 4, 5691, '1', 1, 4.00),
(471, 7, 3, 5680, '1', 1, 97.00),
(472, 7, 3, 5681, '1', 1, 96.00),
(473, 7, 3, 5690, '1', 1, 89.00),
(474, 7, 3, 5683, '1', 1, 92.00),
(475, 7, 3, 5691, '1', 1, 88.00),
(476, 6, 3, 5680, '1', 1, 89.00),
(477, 6, 3, 5681, '1', 1, 87.00),
(478, 6, 3, 5690, '1', 1, 90.00),
(479, 6, 3, 5683, '1', 1, 91.00),
(480, 6, 3, 5691, '1', 1, 88.00),
(481, 5, 3, 5680, '1', 1, 97.00),
(482, 5, 3, 5681, '1', 1, 96.00),
(483, 5, 3, 5690, '1', 1, 99.00),
(484, 5, 3, 5683, '1', 1, 93.00),
(485, 5, 3, 5691, '1', 1, 95.00),
(486, 2, 3, 5680, '1', 1, 89.00),
(487, 2, 3, 5681, '1', 1, 88.00),
(488, 2, 3, 5690, '1', 1, 86.00),
(489, 2, 3, 5683, '1', 1, 87.00),
(490, 2, 3, 5691, '1', 1, 90.00),
(491, 4, 3, 5680, '1', 1, 78.00),
(492, 4, 3, 5681, '1', 1, 77.00),
(493, 4, 3, 5690, '1', 1, 79.00),
(494, 4, 3, 5683, '1', 1, 80.00),
(495, 4, 3, 5691, '1', 1, 81.00),
(496, 1, 3, 5680, '1', 1, 90.00),
(497, 1, 3, 5681, '1', 1, 91.00),
(498, 1, 3, 5690, '1', 1, 94.00),
(499, 1, 3, 5683, '1', 1, 92.00),
(500, 1, 3, 5691, '1', 1, 89.00),
(501, 3, 3, 5680, '1', 1, 82.00),
(502, 3, 3, 5681, '1', 1, 85.00),
(503, 3, 3, 5690, '1', 1, 89.00),
(504, 3, 3, 5683, '1', 1, 85.00),
(505, 3, 3, 5691, '1', 1, 81.00),
(506, 11, 3, 5680, '1', 1, 3.50),
(507, 11, 3, 5681, '1', 1, 4.00),
(508, 11, 3, 5690, '1', 1, 3.80),
(509, 11, 3, 5683, '1', 1, 3.00),
(510, 11, 3, 5691, '1', 1, 3.70),
(511, 8, 3, 5680, '1', 1, 3.40),
(512, 8, 3, 5681, '1', 1, 3.00),
(513, 8, 3, 5690, '1', 1, 4.00),
(514, 8, 3, 5683, '1', 1, 3.20),
(515, 8, 3, 5691, '1', 1, 3.90),
(516, 9, 3, 5680, '1', 1, 3.00),
(517, 9, 3, 5681, '1', 1, 3.00),
(518, 9, 3, 5690, '1', 1, 3.80),
(519, 9, 3, 5683, '1', 1, 3.20),
(520, 9, 3, 5691, '1', 1, 3.10),
(521, 10, 3, 5680, '1', 1, 3.10),
(522, 10, 3, 5681, '1', 1, 3.80),
(523, 10, 3, 5690, '1', 1, 3.30),
(524, 10, 3, 5683, '1', 1, 3.60),
(525, 10, 3, 5691, '1', 1, 3.40),
(526, 7, 6, 5680, '1', 1, 89.00),
(527, 7, 6, 5681, '1', 1, 88.00),
(528, 7, 6, 5690, '1', 1, 86.00),
(529, 7, 6, 5683, '1', 1, 88.00),
(530, 7, 6, 5691, '1', 1, 93.00),
(531, 6, 6, 5680, '1', 1, 98.00),
(532, 6, 6, 5681, '1', 1, 96.00),
(533, 6, 6, 5690, '1', 1, 97.00),
(534, 6, 6, 5683, '1', 1, 95.00),
(535, 6, 6, 5691, '1', 1, 99.00),
(536, 5, 6, 5680, '1', 1, 79.00),
(537, 5, 6, 5681, '1', 1, 80.00),
(538, 5, 6, 5690, '1', 1, 82.00),
(539, 5, 6, 5683, '1', 1, 84.00),
(540, 5, 6, 5691, '1', 1, 81.00),
(541, 2, 6, 5680, '1', 1, 89.00),
(542, 2, 6, 5681, '1', 1, 93.00),
(543, 2, 6, 5690, '1', 1, 88.00),
(544, 2, 6, 5683, '1', 1, 87.00),
(545, 2, 6, 5691, '1', 1, 82.00),
(546, 4, 6, 5680, '1', 1, 92.00),
(547, 4, 6, 5681, '1', 1, 88.00),
(548, 4, 6, 5690, '1', 1, 85.00),
(549, 4, 6, 5683, '1', 1, 90.00),
(550, 4, 6, 5691, '1', 1, 91.00),
(551, 1, 6, 5680, '1', 1, 92.00),
(552, 1, 6, 5681, '1', 1, 87.00),
(553, 1, 6, 5690, '1', 1, 89.00),
(554, 1, 6, 5683, '1', 1, 88.00),
(555, 1, 6, 5691, '1', 1, 83.00),
(556, 3, 6, 5680, '1', 1, 75.00),
(557, 3, 6, 5681, '1', 1, 77.00),
(558, 3, 6, 5690, '1', 1, 71.00),
(559, 3, 6, 5683, '1', 1, 73.00),
(560, 3, 6, 5691, '1', 1, 70.00),
(561, 11, 6, 5680, '1', 1, 2.50),
(562, 11, 6, 5681, '1', 1, 3.00),
(563, 11, 6, 5690, '1', 1, 3.20),
(564, 11, 6, 5683, '1', 1, 2.00),
(565, 11, 6, 5691, '1', 1, 3.00),
(566, 8, 6, 5680, '1', 1, 2.30),
(567, 8, 6, 5681, '1', 1, 3.00),
(568, 8, 6, 5690, '1', 1, 2.90),
(569, 8, 6, 5683, '1', 1, 3.10),
(570, 8, 6, 5691, '1', 1, 3.60),
(571, 9, 6, 5680, '1', 1, 2.60),
(572, 9, 6, 5681, '1', 1, 3.00),
(573, 9, 6, 5690, '1', 1, 3.40),
(574, 9, 6, 5683, '1', 1, 3.10),
(575, 9, 6, 5691, '1', 1, 2.30),
(576, 10, 6, 5680, '1', 1, 2.90),
(577, 10, 6, 5681, '1', 1, 2.70),
(578, 10, 6, 5690, '1', 1, 3.10),
(579, 10, 6, 5683, '1', 1, 2.70),
(580, 10, 6, 5691, '1', 1, 3.00),
(591, 7, 7, 5680, '1', 1, 92.00),
(592, 7, 7, 5681, '1', 1, 98.00),
(593, 7, 7, 5690, '1', 1, 89.00),
(594, 7, 7, 5683, '1', 1, 87.00),
(595, 7, 7, 5691, '1', 1, 88.00),
(596, 6, 7, 5680, '1', 1, 97.00),
(597, 6, 7, 5681, '1', 1, 91.00),
(598, 6, 7, 5690, '1', 1, 89.00),
(599, 6, 7, 5683, '1', 1, 90.00),
(600, 6, 7, 5691, '1', 1, 93.00),
(601, 5, 7, 5680, '1', 1, 89.00),
(602, 5, 7, 5681, '1', 1, 88.00),
(603, 5, 7, 5690, '1', 1, 91.00),
(604, 5, 7, 5683, '1', 1, 90.00),
(605, 5, 7, 5691, '1', 1, 79.00),
(606, 2, 7, 5680, '1', 1, 89.00),
(607, 2, 7, 5681, '1', 1, 87.00),
(608, 2, 7, 5690, '1', 1, 88.00),
(609, 2, 7, 5683, '1', 1, 90.00),
(610, 2, 7, 5691, '1', 1, 92.00),
(611, 4, 7, 5680, '1', 1, 96.00),
(612, 4, 7, 5681, '1', 1, 94.00),
(613, 4, 7, 5690, '1', 1, 98.00),
(614, 4, 7, 5683, '1', 1, 91.00),
(615, 4, 7, 5691, '1', 1, 93.00),
(616, 1, 7, 5680, '1', 1, 88.00),
(617, 1, 7, 5681, '1', 1, 89.00),
(618, 1, 7, 5690, '1', 1, 91.00),
(619, 1, 7, 5683, '1', 1, 82.00),
(620, 1, 7, 5691, '1', 1, 92.00),
(621, 3, 7, 5680, '1', 1, 92.00),
(622, 3, 7, 5681, '1', 1, 89.00),
(623, 3, 7, 5690, '1', 1, 91.00),
(624, 3, 7, 5683, '1', 1, 94.00),
(625, 3, 7, 5691, '1', 1, 91.00),
(626, 11, 7, 5680, '1', 1, 3.40),
(627, 11, 7, 5681, '1', 1, 3.20),
(628, 11, 7, 5690, '1', 1, 3.30),
(629, 11, 7, 5683, '1', 1, 3.00),
(630, 11, 7, 5691, '1', 1, 3.10),
(631, 8, 7, 5680, '1', 1, 3.50),
(632, 8, 7, 5681, '1', 1, 3.90),
(633, 8, 7, 5690, '1', 1, 3.40),
(634, 8, 7, 5683, '1', 1, 3.70),
(635, 8, 7, 5691, '1', 1, 3.20),
(636, 9, 7, 5680, '1', 1, 3.80),
(637, 9, 7, 5681, '1', 1, 3.70),
(638, 9, 7, 5690, '1', 1, 3.60),
(639, 9, 7, 5683, '1', 1, 3.10),
(640, 9, 7, 5691, '1', 1, 3.20),
(641, 10, 7, 5680, '1', 1, 3.60),
(642, 10, 7, 5681, '1', 1, 3.80),
(643, 10, 7, 5690, '1', 1, 3.10),
(644, 10, 7, 5683, '1', 1, 3.50),
(645, 10, 7, 5691, '1', 1, 3.00),
(646, 7, 5, 5680, '1', 1, 89.00),
(647, 7, 5, 5681, '1', 1, 88.00),
(648, 7, 5, 5690, '1', 1, 85.00),
(649, 7, 5, 5683, '1', 1, 91.00),
(650, 7, 5, 5691, '1', 1, 86.00),
(651, 6, 5, 5680, '1', 1, 91.00),
(652, 6, 5, 5681, '1', 1, 94.00),
(653, 6, 5, 5690, '1', 1, 87.00),
(654, 6, 5, 5683, '1', 1, 96.00),
(655, 6, 5, 5691, '1', 1, 90.00),
(656, 5, 5, 5680, '1', 1, 88.00),
(657, 5, 5, 5681, '1', 1, 82.00),
(658, 5, 5, 5690, '1', 1, 87.00),
(659, 5, 5, 5683, '1', 1, 93.00),
(660, 5, 5, 5691, '1', 1, 81.00),
(661, 2, 5, 5680, '1', 1, 97.00),
(662, 2, 5, 5681, '1', 1, 93.00),
(663, 2, 5, 5690, '1', 1, 92.00),
(664, 2, 5, 5683, '1', 1, 96.00),
(665, 2, 5, 5691, '1', 1, 90.00),
(666, 4, 5, 5680, '1', 1, 86.00),
(667, 4, 5, 5681, '1', 1, 82.00),
(668, 4, 5, 5690, '1', 1, 88.00),
(669, 4, 5, 5683, '1', 1, 93.00),
(670, 4, 5, 5691, '1', 1, 83.00),
(671, 1, 5, 5680, '1', 1, 90.00),
(672, 1, 5, 5681, '1', 1, 87.00),
(673, 1, 5, 5690, '1', 1, 93.00),
(674, 1, 5, 5683, '1', 1, 96.00),
(675, 1, 5, 5691, '1', 1, 97.00),
(676, 3, 5, 5680, '1', 1, 89.00),
(677, 3, 5, 5681, '1', 1, 87.00),
(678, 3, 5, 5690, '1', 1, 92.00),
(679, 3, 5, 5683, '1', 1, 81.00),
(680, 3, 5, 5691, '1', 1, 79.00),
(681, 11, 5, 5680, '1', 1, 3.80),
(682, 11, 5, 5681, '1', 1, 3.10),
(683, 11, 5, 5690, '1', 1, 3.30),
(684, 11, 5, 5683, '1', 1, 2.90),
(685, 11, 5, 5691, '1', 1, 3.70),
(686, 8, 5, 5680, '1', 1, 3.00),
(687, 8, 5, 5681, '1', 1, 3.00),
(688, 8, 5, 5690, '1', 1, 3.20),
(689, 8, 5, 5683, '1', 1, 3.80),
(690, 8, 5, 5691, '1', 1, 3.90),
(691, 9, 5, 5680, '1', 1, 3.10),
(692, 9, 5, 5681, '1', 1, 3.80),
(693, 9, 5, 5690, '1', 1, 3.00),
(694, 9, 5, 5683, '1', 1, 3.00),
(695, 9, 5, 5691, '1', 1, 3.40),
(696, 10, 5, 5680, '1', 1, 3.70),
(697, 10, 5, 5681, '1', 1, 3.60),
(698, 10, 5, 5690, '1', 1, 3.57),
(699, 10, 5, 5683, '1', 1, 3.20),
(700, 10, 5, 5691, '1', 1, 3.90),
(701, 7, 8, 5680, '1', 1, 87.00),
(702, 7, 8, 5681, '1', 1, 83.00),
(703, 7, 8, 5690, '1', 1, 96.00),
(704, 7, 8, 5683, '1', 1, 93.00),
(705, 7, 8, 5691, '1', 1, 91.00),
(706, 2, 9, 5680, '1', 1, 89.00),
(707, 2, 9, 5681, '1', 1, 87.00),
(708, 2, 9, 5690, '1', 1, 92.00),
(709, 2, 9, 5683, '1', 1, 85.00),
(710, 2, 9, 5691, '1', 1, 78.00),
(711, 1, 9, 5680, '1', 1, 88.00),
(712, 1, 9, 5681, '1', 1, 90.00),
(713, 1, 9, 5690, '1', 1, 94.00),
(714, 1, 9, 5683, '1', 1, 92.00),
(715, 1, 9, 5691, '1', 1, 95.00),
(716, 11, 10, 5680, '1', 1, 3.80),
(717, 11, 10, 5681, '1', 1, 3.60),
(718, 11, 10, 5690, '1', 1, 3.90),
(719, 11, 10, 5683, '1', 1, 3.00),
(720, 11, 10, 5691, '1', 1, 3.50),
(721, 8, 10, 5680, '1', 1, 3.10),
(722, 8, 10, 5681, '1', 1, 3.50),
(723, 8, 10, 5690, '1', 1, 2.90),
(724, 8, 10, 5683, '1', 1, 3.30),
(725, 8, 10, 5691, '1', 1, 3.00),
(726, 9, 10, 5680, '1', 1, 3.00),
(727, 9, 10, 5681, '1', 1, 3.50),
(728, 9, 10, 5690, '1', 1, 3.20),
(729, 9, 10, 5683, '1', 1, 3.30),
(730, 9, 10, 5691, '1', 1, 3.75),
(731, 10, 10, 5680, '1', 1, 3.80),
(732, 10, 10, 5681, '1', 1, 3.60),
(733, 10, 10, 5690, '1', 1, 3.67),
(734, 10, 10, 5683, '1', 1, 3.20),
(735, 10, 10, 5691, '1', 1, 3.90),
(736, 2, 4, 5680, '1', 3, 90.00),
(737, 2, 4, 5681, '1', 3, 98.00),
(738, 2, 4, 5690, '1', 3, 99.00),
(739, 2, 4, 5683, '1', 3, 97.00),
(740, 2, 4, 5691, '1', 3, 97.00),
(741, 7, 16, 5680, '1', 1, 89.00),
(742, 7, 16, 5681, '1', 1, 87.00),
(743, 7, 16, 5690, '1', 1, 88.00),
(744, 7, 16, 5683, '1', 1, 86.00),
(745, 7, 16, 5691, '1', 1, 78.00),
(746, 12, 16, 5680, '1', 1, 92.00),
(747, 12, 16, 5681, '1', 1, 93.00),
(748, 12, 16, 5690, '1', 1, 95.00),
(749, 12, 16, 5683, '1', 1, 90.00),
(750, 12, 16, 5691, '1', 1, 89.00),
(751, 1, 17, 5684, '1', 1, 80.00),
(752, 1, 17, 5689, '1', 1, 78.00),
(753, 1, 17, 5687, '1', 1, 83.00),
(754, 1, 17, 5685, '1', 1, 76.00),
(755, 1, 17, 5697, '1', 1, 73.00),
(756, 1, 17, 5684, '1', 2, 77.00),
(757, 1, 17, 5689, '1', 2, 76.00),
(758, 1, 17, 5687, '1', 2, 78.00),
(759, 1, 17, 5685, '1', 2, 75.00),
(760, 1, 17, 5697, '1', 2, 74.00),
(761, 2, 17, 5684, '1', 1, 87.00),
(762, 2, 17, 5689, '1', 1, 88.00),
(763, 2, 17, 5687, '1', 1, 86.00),
(764, 2, 17, 5685, '1', 1, 89.00),
(765, 2, 17, 5697, '1', 1, 92.00),
(766, 3, 17, 5684, '1', 1, 88.00),
(767, 3, 17, 5689, '1', 1, 89.00),
(768, 3, 17, 5687, '1', 1, 93.00),
(769, 3, 17, 5685, '1', 1, 86.00),
(770, 3, 17, 5697, '1', 1, 80.00),
(771, 4, 17, 5684, '1', 1, 90.00),
(772, 4, 17, 5689, '1', 1, 91.00),
(773, 4, 17, 5687, '1', 1, 89.00),
(774, 4, 17, 5685, '1', 1, 93.00),
(775, 4, 17, 5697, '1', 1, 90.00),
(776, 1, 17, 5684, '1', 3, 91.00),
(777, 1, 17, 5689, '1', 3, 92.00),
(778, 1, 17, 5687, '1', 3, 91.00),
(779, 1, 17, 5685, '1', 3, 89.00),
(780, 1, 17, 5697, '1', 3, 90.00),
(781, 1, 17, 5684, '1', 4, 87.00),
(782, 1, 17, 5689, '1', 4, 86.00),
(783, 1, 17, 5687, '1', 4, 88.00),
(784, 1, 17, 5685, '1', 4, 92.00),
(785, 1, 17, 5697, '1', 4, 93.00),
(786, 2, 18, 5692, '1', 1, 88.00),
(787, 2, 18, 5695, '1', 1, 89.00),
(788, 2, 18, 5696, '1', 1, 80.00),
(789, 2, 18, 5693, '1', 1, 87.00),
(790, 2, 18, 5686, '1', 1, 91.00),
(791, 2, 13, 5684, '1', 1, 80.00),
(792, 2, 13, 5689, '1', 1, 82.00),
(793, 2, 13, 5687, '1', 1, 83.00),
(794, 2, 13, 5685, '1', 1, 81.00),
(795, 2, 13, 5697, '1', 1, 78.00),
(796, 2, 1, 5680, '2', 1, 93.00),
(797, 2, 1, 5681, '2', 1, 91.00),
(798, 2, 1, 5690, '2', 1, 94.00),
(799, 2, 1, 5683, '2', 1, 90.00),
(800, 2, 1, 5691, '2', 1, 99.00),
(801, 12, 1, 5680, '1', 1, 88.00),
(802, 12, 1, 5681, '1', 1, 87.00),
(803, 12, 1, 5690, '1', 1, 89.00),
(804, 12, 1, 5683, '1', 1, 92.00),
(805, 12, 1, 5691, '1', 1, 91.00),
(806, 13, 17, 5684, '1', 1, 80.00),
(807, 13, 17, 5689, '1', 1, 78.00),
(808, 13, 17, 5687, '1', 1, 79.00),
(809, 13, 17, 5685, '1', 1, 83.00),
(810, 13, 17, 5697, '1', 1, 81.00),
(811, 8, 17, 5684, '1', 1, 4.00),
(812, 8, 17, 5689, '1', 1, 3.00),
(813, 8, 17, 5687, '1', 1, 3.00),
(814, 8, 17, 5685, '1', 1, 4.00),
(815, 8, 17, 5697, '1', 1, 2.00),
(816, 11, 17, 5684, '1', 1, 4.00),
(817, 11, 17, 5689, '1', 1, 3.00),
(818, 11, 17, 5687, '1', 1, 3.00),
(819, 11, 17, 5685, '1', 1, 4.00),
(820, 11, 17, 5697, '1', 1, 3.00),
(821, 1, 17, 5684, '1', 5, 92.50),
(822, 1, 17, 5689, '1', 5, 90.00),
(823, 1, 17, 5687, '1', 5, 89.00),
(824, 1, 17, 5685, '1', 5, 93.00),
(825, 1, 17, 5697, '1', 5, 90.75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortu`
--

CREATE TABLE IF NOT EXISTS `ortu` (
  `nis` int(11) NOT NULL,
  `ayah` varchar(40) NOT NULL,
  `ibu` varchar(40) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(25) NOT NULL,
  `telp_ayah` varchar(12) NOT NULL,
  `telp_ibu` varchar(12) NOT NULL,
  `agama_ayah` int(1) NOT NULL,
  `agama_ibu` int(1) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ortu`
--

INSERT IGNORE INTO `ortu` (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES
(5678, 'Ayah 1', 'Ibu 1', 'alamt ayah', 'alamat ibu', 'PNS', 'PNS', '898989898', '89898989', 1, 1),
(5680, 'Ayah 2a', 'Ibu 2a', 'alamt ayah', 'alamat ibu', 'PNS', 'PNS', '898989898', '89898989', 1, 1),
(5681, 'Ayah 3', 'Ibu 3', 'alamt ayah', 'alamat ibu', 'PNS', 'PNS', '898989898', '89898989', 1, 1),
(5682, 'Ayah 4a', 'Ibu 4a', 'alamat ayah', 'alamat ibu', 'PNS', 'PNS', '5454545', '545454', 1, 2),
(5683, 'Ayah 5', 'Ibu 5', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 1, 1),
(5684, 'Ayah 6', 'Ibu 6', 'Alamat ayah', 'Alamat Ibu', 'TNI', 'IRT', '08967555555', '08187878787', 1, 1),
(5685, 'Ayah 7', 'Ibu 7', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5686, 'Irawan', 'Saginem', 'Kwaron, Ngestiharjo, Kasihan, Bantul', 'Kwaron, Ngestiharjo, Kasihan, Bantul', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5687, 'Ayah 8', 'Ibu 8', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 2, 2),
(5688, 'Ayah 9', 'Ibu 9', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 2, 2),
(5689, 'Ayah 10', 'Ibu 10', 'Alamat ayah', 'Alamat ibu', 'Buruh', 'Buruh', '08967555555', '08187878787', 2, 2),
(5690, 'Ayah 10', 'Ibu 10', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5691, 'Ayah 11', 'Ibu 11', 'Alamat ayah', 'Alamat ibu', 'POLRI', 'IRT', '08967555555', '08187878787', 1, 1),
(5692, 'Ayah 12', 'Ibu 12', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 3, 3),
(5693, 'Ayah 13', 'Ibu 13', 'Alamat ayah', 'Alamat Ibu', 'Wiraswasta', 'Wiraswasta', '08967555555', '08187878787', 3, 3),
(5694, 'Ayah 14', 'Ibu 14', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'PNS', '08967555555', '08187878787', 1, 1),
(5695, 'Ayah 15', 'Ibu 15', 'Alamat ayah', 'Alamat Ibu', 'TNI', 'IRT', '08967555555', '08187878787', 1, 1),
(5696, 'Ayah 16', 'Ibu 16', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 1, 1),
(5697, 'Ayah 17', 'Ibu 17', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5698, 'Ayah 18', 'Ayah 18', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'Swasta', '08967555555', '08187878787', 1, 1),
(5699, 'Ayah 19', 'Ibu 19', 'Alamat ayah', 'Alamat Ibu', 'Buruh', 'IRT', '08967555555', '08187878787', 1, 1),
(5700, 'Ayah 20', 'Ibu 20', 'Alamat ayah', 'Alamat Ibu', 'Buruh', 'IRT', '08967555555', '08187878787', 1, 1),
(5701, 'Ayah 21', 'Ibu 21', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'PNS', '08967555555', '08187878787', 1, 1),
(5702, 'Ayah 22', 'Ibu 22', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 1, 1),
(5703, 'Ayah 23', 'Ibu 23', 'Alamat ayah', 'Alamat Ibu', 'POLRI', 'IRT', '08967555555', '08187878787', 1, 1),
(5704, 'Ayah 24', 'Ibu 24', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5705, 'Ayah 25', 'Ibu 25', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 1, 1),
(5706, 'Ayah 26', 'Ibu 26', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', 1, 1),
(5707, 'Ayah 29', 'Ibu 29', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5708, 'Ayah 30', 'Ibu 30', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', 1, 1),
(5709, 'Ayah 31', 'Ibu 31', 'Alamat ayah', 'Alamat Ibu', 'POLRI', 'IRT', '08967555555', '08187878787', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `id_pelanggaran` int(3) NOT NULL AUTO_INCREMENT,
  `nama_pelanggaran` varchar(160) NOT NULL,
  `point` decimal(10,0) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_pelanggaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT IGNORE INTO `pelanggaran` (`id_pelanggaran`, `nama_pelanggaran`, `point`, `aktif`) VALUES
(1, 'Berkelahi di lingkungan sekolah', 120, 'Y'),
(2, 'Mengikuti gank atau organisasi terlarang ', 100, 'Y'),
(3, 'Membolos sekolah', 10, 'Y'),
(4, 'Tidak Mengerjakan PR dari guru', 5, 'Y'),
(5, 'Moncoret dinding sekolahan', 5, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_siswa`
--

CREATE TABLE IF NOT EXISTS `pelanggaran_siswa` (
  `id_pointsiswa` int(6) NOT NULL AUTO_INCREMENT,
  `nis` int(6) NOT NULL,
  `id_pelanggaran` int(3) NOT NULL,
  `tgl_point` date NOT NULL,
  `ket` varchar(160) NOT NULL,
  PRIMARY KEY (`id_pointsiswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `pelanggaran_siswa`
--

INSERT IGNORE INTO `pelanggaran_siswa` (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES
(2, 5681, 1, '2015-04-18', '                                            '),
(3, 5681, 3, '2015-04-18', ''),
(4, 5680, 4, '2015-04-18', 'PR Matematika Guru Ibu Maria'),
(5, 5680, 2, '2015-04-23', ''),
(6, 5682, 4, '2015-04-23', ''),
(7, 5692, 2, '2015-04-23', 'ikut vozter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE IF NOT EXISTS `presensi` (
  `id_presensi` int(4) NOT NULL AUTO_INCREMENT,
  `nis` int(6) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  `semester` int(1) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `status` enum('S','I','T') NOT NULL,
  `ket` varchar(160) NOT NULL,
  PRIMARY KEY (`id_presensi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `presensi`
--

INSERT IGNORE INTO `presensi` (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES
(9, 5681, 2, 1, '2015-04-18', 'S', 'Patah hati'),
(10, 5690, 2, 1, '2015-04-18', 'I', 'Ijin kondangan mantan yg nikah'),
(11, 5682, 2, 1, '2015-04-18', 'T', 'Gagal move on gak masuk sekolah tanpa keterangan'),
(12, 5688, 2, 1, '2015-04-18', 'I', ''),
(13, 5689, 2, 1, '2015-04-18', 'T', ''),
(15, 5687, 2, 1, '2015-04-18', 'S', 'Sakit hati'),
(17, 5680, 2, 1, '2015-04-17', 'S', ''),
(18, 5681, 2, 1, '2015-04-23', 'I', 'Surat menyusul'),
(19, 5680, 2, 1, '2015-04-24', 'I', ''),
(20, 5680, 2, 1, '2015-04-25', 'I', ''),
(21, 5681, 2, 1, '2015-04-27', 'S', 'sakit maag'),
(22, 5690, 2, 1, '2015-04-27', 'I', 'ijin gak masuk'),
(23, 5684, 2, 1, '2015-05-15', 'I', ''),
(24, 5680, 2, 1, '2015-05-18', 'I', ''),
(25, 5690, 2, 1, '2015-05-18', 'S', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `npsn` varchar(8) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `waktu_kbm` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT IGNORE INTO `profil` (`id_profil`, `nama`, `npsn`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `status`, `waktu_kbm`, `telp`, `email`, `website`) VALUES
(1, 'SMP N 1 KASIHAN', '20400298', 'Jl.Wates Nomor 62 Yogyakarta', '55182', 'Ngestiharjo', 'Kasihan', 'Bantul', 'D.I.Yogyakarta', 'NEGERI', 'PAGI', '(0274) 618847', 'smp1kasihan_yk@yahoo.com', 'smpn1kasihan.sch.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `raport`
--

CREATE TABLE IF NOT EXISTS `raport` (
  `id_raport` int(6) NOT NULL AUTO_INCREMENT,
  `nis` int(6) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tgl_raport` date NOT NULL,
  `keputusan` enum('belum','naik','tinggal','lulus') NOT NULL,
  PRIMARY KEY (`id_raport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `raport`
--

INSERT IGNORE INTO `raport` (`id_raport`, `nis`, `id_thnajaran`, `semester`, `catatan`, `nip`, `tgl_raport`, `keputusan`) VALUES
(1, 5680, 2, '1', 'Kesimpulan dari sikap keseluruhan dalam mapel diputuskan melalui rapat koordinasi  bersama dengan guru mapel dan wali kelas.', '195909151979031001', '2015-04-27', 'tinggal'),
(2, 5681, 2, '1', 'jjkgjgjgjhg jhghjghj jhghjgh jhghjghjg hghjgjhg', '195909151979031001', '2015-04-25', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_groups`
--

CREATE TABLE IF NOT EXISTS `rc_groups` (
  `id` mediumint(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `rc_groups`
--

INSERT IGNORE INTO `rc_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Merupakan akun Super Admin, bisa akses semua'),
(3, 'super_admin', 'Untuk developer'),
(6, 'kepala_sekolah', ''),
(7, 'guru', ''),
(8, 'Siswa', ''),
(9, 'Guru_BK', ''),
(10, 'Wali_Kelas', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_login_attempts`
--

CREATE TABLE IF NOT EXISTS `rc_login_attempts` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `rc_login_attempts`
--

INSERT IGNORE INTO `rc_login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'super', 1431959320);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_options`
--

CREATE TABLE IF NOT EXISTS `rc_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `rc_options`
--

INSERT IGNORE INTO `rc_options` (`id`, `name`, `value`) VALUES
(1, 'site_title', 'SMP Negeri 1 Kasihan'),
(2, 'site_tagline', 'Sistem Informasi Akademik SMP Negeri 1 Kasihan'),
(3, 'site_desc', 'Sistem Informasi Akademik SMP Negeri 1 Kasihan'),
(4, 'admin_email', 'armisianto@gmail.com'),
(5, 'super_admin_group', 'super_admin'),
(6, 'admin_group', 'admin'),
(7, 'default_group', 'Siswa'),
(8, 'identity', 'username'),
(9, 'ta', '2'),
(10, 'semester', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_permissions`
--

CREATE TABLE IF NOT EXISTS `rc_permissions` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `rule` char(4) NOT NULL DEFAULT '0000',
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1804 ;

--
-- Dumping data untuk tabel `rc_permissions`
--

INSERT IGNORE INTO `rc_permissions` (`id`, `group_id`, `role_id`, `rule`) VALUES
(1276, 10, 87, '0100'),
(1277, 10, 88, '1110'),
(1345, 8, 77, '0100'),
(1346, 8, 61, '0100'),
(1347, 8, 78, '0100'),
(1348, 8, 79, '0100'),
(1349, 8, 89, '0100'),
(1707, 7, 57, '0100'),
(1708, 7, 84, '0100'),
(1709, 7, 59, '0100'),
(1710, 7, 87, '0100'),
(1711, 7, 74, '0100'),
(1712, 7, 81, '0100'),
(1713, 7, 82, '1110'),
(1714, 7, 72, '0100'),
(1715, 7, 83, '1111'),
(1716, 7, 85, '1110'),
(1717, 7, 93, '1110'),
(1718, 6, 54, '0110'),
(1719, 6, 56, '0110'),
(1720, 6, 57, '0100'),
(1721, 6, 76, '0100'),
(1722, 6, 84, '1111'),
(1723, 6, 59, '0100'),
(1724, 6, 61, '0100'),
(1725, 6, 77, '0100'),
(1726, 6, 74, '0100'),
(1727, 6, 80, '0100'),
(1728, 6, 87, '0100'),
(1729, 6, 68, '0100'),
(1730, 6, 81, '0100'),
(1731, 6, 72, '0100'),
(1732, 6, 78, '0100'),
(1733, 6, 79, '01'),
(1734, 6, 85, '1110'),
(1735, 6, 93, '1110'),
(1736, 6, 83, '1111'),
(1737, 3, 46, '0100'),
(1738, 3, 47, '0100'),
(1739, 3, 48, '0100'),
(1740, 3, 49, '0100'),
(1741, 3, 50, '0100'),
(1742, 3, 45, '0100'),
(1743, 3, 41, '1111'),
(1744, 3, 51, '1111'),
(1745, 3, 53, '1111'),
(1746, 3, 60, '1110'),
(1747, 3, 69, '1110'),
(1748, 3, 70, '1110'),
(1749, 3, 71, '0110'),
(1750, 3, 52, '1111'),
(1751, 3, 54, '0110'),
(1752, 3, 56, '0110'),
(1753, 3, 57, '1110'),
(1754, 3, 58, '1110'),
(1755, 3, 76, '1110'),
(1756, 3, 84, '1110'),
(1757, 3, 59, '1110'),
(1758, 3, 61, '1110'),
(1759, 3, 77, '1111'),
(1760, 3, 87, '1110'),
(1761, 3, 74, '1110'),
(1762, 3, 80, '1110'),
(1763, 3, 68, '1110'),
(1764, 3, 81, '1111'),
(1765, 3, 72, '1110'),
(1766, 3, 78, '1111'),
(1767, 3, 79, '1111'),
(1768, 3, 90, '1110'),
(1769, 3, 86, '1111'),
(1770, 3, 88, '0100'),
(1771, 9, 57, '0100'),
(1772, 9, 61, '1110'),
(1773, 9, 77, '1111'),
(1774, 9, 87, '0100'),
(1775, 9, 74, '0100'),
(1776, 9, 80, '0100'),
(1777, 9, 81, '1110'),
(1778, 9, 82, '1110'),
(1779, 9, 78, '1111'),
(1780, 9, 79, '1111'),
(1781, 9, 90, '1110'),
(1782, 9, 83, '1110'),
(1783, 9, 85, '1110'),
(1784, 1, 70, '1110'),
(1785, 1, 71, '1110'),
(1786, 1, 52, '1111'),
(1787, 1, 53, '1111'),
(1788, 1, 60, '1110'),
(1789, 1, 69, '1110'),
(1790, 1, 57, '1110'),
(1791, 1, 58, '1110'),
(1792, 1, 76, '1110'),
(1793, 1, 59, '1110'),
(1794, 1, 77, '0100'),
(1795, 1, 74, '1110'),
(1796, 1, 80, '1110'),
(1797, 1, 87, '1110'),
(1798, 1, 68, '1110'),
(1799, 1, 81, '1111'),
(1800, 1, 72, '1110'),
(1801, 1, 78, '0100'),
(1802, 1, 79, '0100'),
(1803, 1, 86, '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_roles`
--

CREATE TABLE IF NOT EXISTS `rc_roles` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(3) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `desc` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `parent` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

--
-- Dumping data untuk tabel `rc_roles`
--

INSERT IGNORE INTO `rc_roles` (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES
(41, 16, 'Barang', 'master_barang', 'Master Data Barang', '0'),
(45, 10, 'Forms', 'forms', 'Desain form general', '0'),
(46, 10, 'Radio Checkboxes', 'radio_checks', 'Desain Radio Button dan Checkbox', '0'),
(47, 10, 'Buttons', 'buttons', 'Desain berbagai macam tombol', '0'),
(48, 10, 'Tables', 'tables', 'Desain berbagai macam tabel', '0'),
(49, 10, 'Icons', 'icons', 'Desain berbagai macam ikon', '0'),
(50, 10, 'Designs', 'designs', 'Variety of design', '1'),
(51, 16, 'Contoh Ajax', 'master_pesan', 'Contoh CRUD menggunakan Ajax', '0'),
(52, 19, 'Data Agama', 'agama', 'Mengelola data agama', '0'),
(53, 19, 'Profil Sekolah', 'profil_sekolah', '', '0'),
(54, 20, 'Aspek Penilaian', 'aspek', '', '0'),
(56, 20, 'Bobot Penilaian', 'bobot', '', '0'),
(57, 21, 'Data Guru & Karyawan', 'guru_karyawan', '', '0'),
(58, 22, 'Data Kelas', 'kelas', '', '0'),
(59, 23, 'Data Mata Pelajaran', 'mapel', '', '0'),
(60, 19, 'Data Tahun Ajaran', 'thn_ajaran', '', '0'),
(61, 24, 'Data Jenis Pelanggaran', 'pelanggaran', '', '0'),
(68, 26, 'Data Ekstrakurikuler', 'eskul', '', '0'),
(69, 19, 'Setting Tahun Ajaran', 'options/ta', '', '0'),
(70, 19, 'Setting Semester', 'options/semester', '', '0'),
(71, 19, 'options', 'options', '', '1'),
(72, 27, 'Data Mengajar', 'mengajar', '', '0'),
(74, 25, 'Siswa Aktif', 'siswa', '', '0'),
(76, 22, 'Pembagian Kelas', 'bagikelas', '', '0'),
(77, 24, 'Data Pelanggaran Siswa', 'pelanggaransiswa', '', '0'),
(78, 28, 'Presensi Siswa', 'presensi', '', '1'),
(79, 28, 'Data Presensi Siswa', 'presensi/arsip', '', '0'),
(80, 25, 'Siswa Keluar', 'siswa/keluar', '', '0'),
(81, 26, 'Siswa Ekstrakurikuler', 'siswaeskul', '', '0'),
(82, 26, 'Catatan Ekstrakulikuler', 'catataneskul', '', '0'),
(83, 29, 'Input Nilai', 'nilai', '', '0'),
(84, 22, 'Wali Kelas', 'walikelas', '', '0'),
(85, 29, 'Catatan Aspek', 'catatanaspek', '', '0'),
(86, 30, 'Data Users', 'auth/users', '', '0'),
(87, 25, 'Siswa Per Kelas', 'siswa/kelas', '', '0'),
(88, 31, 'Buat Raport', 'raport', '', '0'),
(89, 32, 'Profil', 'profilsiswa', '', '0'),
(90, 28, 'Input Presensi', 'presensi/index', '', '0'),
(93, 29, 'Rekap Nilai', 'rekapnilai', '', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_roles_category`
--

CREATE TABLE IF NOT EXISTS `rc_roles_category` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `icon_code` varchar(50) NOT NULL,
  `order_number` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `rc_roles_category`
--

INSERT IGNORE INTO `rc_roles_category` (`id`, `category`, `icon_code`, `order_number`) VALUES
(10, 'Designs', 'fa fa-leaf', 8),
(16, 'Masters', 'fa fa-bars', 8),
(18, 'Mainan', 'fa fa-anchor', 8),
(19, 'Setup Data', 'glyphicon glyphicon-cog', 1),
(20, 'Instrumen Penilaian', 'glyphicon glyphicon-list-alt', 2),
(21, 'Guru & Karyawan', 'fa fa-users', 3),
(22, 'Kelas', 'fa fa-sitemap', 5),
(23, 'Mata Pelajaran', 'glyphicon glyphicon-book', 6),
(24, 'Pelanggaran Siswa', 'glyphicon glyphicon-warning-sign', 14),
(25, 'Siswa', 'glyphicon glyphicon-user', 4),
(26, 'Ekstrakurikuler', 'fa  fa-trophy', 7),
(27, 'Mengajar', 'fa  fa-comments', 13),
(28, 'Presensi Siswa', 'fa  fa-check-square', 8),
(29, 'Nilai ', 'glyphicon glyphicon-edit', 9),
(30, 'Users', 'fa fa-users', 10),
(31, 'Raport', 'fa fa-book', 11),
(32, 'Menu Siswa', 'fa  fa-user', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_users`
--

CREATE TABLE IF NOT EXISTS `rc_users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tbl_asal` enum('siswa','guru','super') NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(4) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data untuk tabel `rc_users`
--

INSERT IGNORE INTO `rc_users` (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(1, 'Armisianto', '127.0.0.1', 'Armi', 'super_admin', '$2y$08$toHLx3wJBs57J8EalFFXoep4A.JVMCJb4JCn1jHySQ4HZw4FkkPSG', '', 'armisianto@gmail.com', 'super', NULL, 'kNx6Lnfs7271YD56IpdRme0c8f544add9f05c491', 1421251700, 'IdEFjATQ7irgV27f2CWoOO', 1268889823, 1431962323, 1),
(27, 'Maria', '127.0.0.1', 'Susanti', '197010251997022003', '$2y$08$vShPnVWPU8A10O8jIObCnuCdvyG4j7OHi9/d0UNsU5b71gxMg.3q.', NULL, 'maria.susanti@gmail.com', 'guru', NULL, 'ATOw8KDI9fngupFNZYWNnub9b7b58e58d5503f33', 1429717109, NULL, 1422287134, 1431931144, 1),
(29, '0', '::1', '0', '195912101986031015', '$2y$08$.nMfD.JPnQOqBu0DS78ELO3BJa611Sy3nYZRvFHjUPRqcVqbCnoMK', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, 'dhvGxOWaK7s23I8jjWDf2e', 1428499305, 1431964806, 1),
(30, 'Armisianto', '::1', 'Armi', '5682', '$2y$08$9KeVr.HZ48dxWd1HeetOc.ZPaJgSosdXHt2Tuul67sW2/aVoFp61q', NULL, 'armisianto@gmail.com', 'siswa', NULL, NULL, NULL, NULL, 1428678546, 1428678620, 1),
(31, '', '::1', '', '196303041984122003', '$2y$08$JkEZrJQaqn3nRWw9ezW25ukdXGHMjW6Pb8HnwMMjfHiTEKY.bbwXa', NULL, 'fr.romana@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429535775, 1431929368, 1),
(32, '0', '::1', '0', '5680', '$2y$08$DYZN2O7nePnhMjOGsFhcWeefZHR2NhjhpfIACzh2IKHi2VMEibfiG', NULL, 'armisianto@gmail.com', 'siswa', NULL, NULL, NULL, NULL, 1429759550, 1430376742, 1),
(33, '0', '::1', '0', '197202011998022001', '$2y$08$Sx80WatKvfOauKnOJdWpD.gnNRi6PAR6rXejQ3xIPo5Vq57O8evdm', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429760625, 1430061968, 1),
(34, '0', '::1', '0', '196410181986031010', '$2y$08$dm0qPFZrXlFgfXwnvEghI.Wi7ZcuSbkad31I45mfAyc7qnq0SK2JC', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429765531, 1431929779, 1),
(39, '0', '::1', '0', '197502252005011008', '$2y$08$m.n3SceOsJ3ki64XCkehROlcKtsdVxtJZaOr07WDmbu7q/dwCcrBq', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429766521, 1430062087, 1),
(40, '0', '::1', '0', '195704031984011001', '$2y$08$nG6AsDkf9h96UHpLny9OTu4vlxzFJ/IkO4ynf0dg4CBqzmy1TRqfq', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429770718, 1430557782, 1),
(41, '0', '::1', '0', '196702021989022001', '$2y$08$Dayc6f6/NYKQz3vph59sNuCJBnG9mJKAd18J7nSY20dtXCut3IPnu', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, 'gpnU0i0EQnU3nLKj617FC.', 1429770746, 1431964769, 1),
(42, '0', '::1', '0', '196903151995122006', '$2y$08$3jRQ6aXBjaqcKbfOD6Qej.nH/GAyZZAVxjBNtYMwWoJIOo17.xb9m', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429770767, 1430067233, 1),
(43, '0', '::1', '0', '196501211995122002', '$2y$08$81KGJyKvLmMoeU/I1f.Adu6xEcaMJ.FriOHjl74L/UTmSsrEXiHd.', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429770804, 1430067799, 1),
(44, '0', '::1', '0', '195908111984032005', '$2y$08$gKr32aqkwvB9SEo31p2QLO.Q2wdflurGOeU.N6cMBhhSG61MeqrzG', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429770820, 1430068137, 1),
(45, '0', '::1', '0', '196512021993022001', '$2y$08$PjHtvHozaiGF8Qjq.hM16.3hJM8fsMvuCh3q3Nu/NS90gk7J0oOHe', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1429770841, 1430068257, 1),
(46, NULL, '::1', NULL, 'EKSTRA1', '$2y$08$ugZiLorVVFxP1J/pos62XObjuBeDvKlK3Grwh4G8z42uLcINKnrfy', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1430068623, 1431882726, 1),
(47, '0', '::1', '0', '195909151979031001', '$2y$08$OQUjVzxnteCWC5bIYyGV2.dE8L9wEV1lapDvhrh9/X8luRJxA9JSe', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1430099707, 1431930131, 1),
(48, '0', '::1', '0', '195308011982031017', '$2y$08$LpoezvTZkpKFlFqe.FP4GOSgl3Jk72oFqqlD3.fOiRKT3/DSA9dRK', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1430556043, 1430556091, 1),
(49, '0', '::1', '0', '198108252006042014', '$2y$08$vYsq9OPE1Foj8CbUBQEA8e1Wup2D1fxeKLa9wl2ths/J4c.hfKUVm', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, 1430570345, 1430570402, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_users_groups`
--

CREATE TABLE IF NOT EXISTS `rc_users_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=233 ;

--
-- Dumping data untuk tabel `rc_users_groups`
--

INSERT IGNORE INTO `rc_users_groups` (`id`, `user_id`, `group_id`) VALUES
(167, 1, 3),
(182, 27, 7),
(217, 29, 1),
(187, 30, 8),
(188, 31, 7),
(193, 32, 8),
(196, 33, 7),
(198, 34, 9),
(204, 39, 7),
(211, 40, 7),
(218, 41, 7),
(219, 41, 10),
(213, 42, 7),
(214, 43, 7),
(215, 44, 7),
(216, 45, 7),
(221, 46, 7),
(232, 47, 6),
(227, 48, 7),
(229, 49, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah_asal`
--

CREATE TABLE IF NOT EXISTS `sekolah_asal` (
  `nis` int(6) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah_asal`
--

INSERT IGNORE INTO `sekolah_asal` (`nis`, `nama_sekolah`, `alasan_pindah`) VALUES
(5678, 'SMP N 3 Kasihan', ' Ikut ortu dinas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(6) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kota_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jml_saudara` int(2) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `status_anak` enum('kandung','tiri','angkat') NOT NULL,
  `asal_sd` varchar(25) NOT NULL,
  `no_sttb` varchar(18) NOT NULL,
  `tahun_sttb` year(4) NOT NULL,
  `kls_diterima` int(1) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `tingkat` int(1) NOT NULL,
  `status` enum('aktif','alumni','keluar') NOT NULL,
  `foto` varchar(25) DEFAULT NULL,
  `pindahan` enum('Y','T') NOT NULL,
  `thn_lulus` year(4) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5710 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT IGNORE INTO `siswa` (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES
(5678, '1234567890', 'Siswa 1', 'L', 'Bantul', '2001-01-01', 1, 'Kwaron, Ngestiharjo, Kasihan, Bantul', 3, 1, 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', 0000, 8, '2015-04-10', 8, 'keluar', 'no_image_male.jpg', 'Y', NULL),
(5680, '9981210705', 'ADHE EKA RETMA YANABUDI', 'L', 'Bantul', '2001-01-18', 1, 'Bantul', 9, 1, 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'aku.jpg', 'T', NULL),
(5681, '9991171904', 'AKHID HAEFANI HILAL', 'L', 'Bantul', '2001-03-02', 1, 'Kwaron, Ngestiharjo, Kasihan, Bantul', 3, 1, 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5682, '9991176655', 'ALFIA NOORSYANA', 'P', 'Bantul', '2001-08-09', 1, 'Jalan Magelang', 2, 2, 'kandung', 'SD 2 Sleman', 'Dn 1 Dd 0819876544', 2012, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5683, '9992090033', 'ARDHA NURUL AZIZAH', 'P', 'Sleman', '2001-03-01', 1, 'Jl. Wates Km.5', 1, 2, 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5684, '9992076516', 'ARLITA LISTYOWATI', 'P', 'Bantul', '2001-04-05', 1, 'Sonopakis Lor, Ngestiharjo Kasihan Bantul', 2, 2, 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5685, '9991176799', 'MUHAMMAD GUNTUR SATRIO WIBOWO', 'L', 'Bantul', '2001-06-06', 1, 'Ngewotan, Ngestiharjo, Kasihan, Bantul', 3, 1, 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5686, '9991397045', 'YUSTINA DHAMAYANTI', 'P', 'Bantul', '2001-06-06', 1, 'Kwaron, Ngestiharjo, Kasihan, Bantul', 2, 3, 'kandung', 'SD Muhamadiyah Tegarejo', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5687, '0004163742', 'MERCELLIUS JANU ARDIAN TURNIP', 'L', 'Sleman', '2001-02-14', 2, 'Sleman', 2, 1, 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5688, '0002318416', 'AGNES JANU DWI WIDAYANTI', 'P', 'Yogyakarta', '2001-11-22', 2, 'Kleben, Wirobrajan, Yogyakarta', 1, 2, 'kandung', 'SDN 1 Tegalrejo', 'Dn 1 Dd 0819876544', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5689, '0000759811', 'AURELIA RETTA', 'P', 'Sleman', '2001-08-10', 2, 'Sleman', 2, 2, 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5690, '9993182301', 'ALFI AINURRAHMA ARIF', 'P', 'Bantul', '2001-04-12', 1, 'Bantul', 1, 2, 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876544', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5691, '0001414269', 'BAHARUDDIN RAMADHAN', 'L', 'Bantul', '2001-01-02', 1, 'Kalibayem, Ngestiharjo, Kasihan, Bantul', 1, 1, 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2015-04-15', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5692, '9991397444', 'MICHAEL YEREMIA ANTONIO SUSANTO', 'L', 'Bantul', '2001-04-21', 3, 'Bantul', 2, 2, 'kandung', 'SD Kanisius Jomegatan', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5693, '9991399085', 'YOSUA FERDIANTO MAHARDIKA', 'L', 'Yogyakarta', '2001-09-17', 3, 'Kleben, Wirobrajan, Yogyakarta', 2, 1, 'kandung', 'SD Kanisius Wirobrajan', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5694, '9992075970', 'MUHAMMAD DIEFA ABDUL AZIZ', 'L', 'Jepara', '2001-11-16', 1, 'Bantul', 1, 2, 'kandung', 'SD N 2 Sonesewu', 'Dn 1 Dd 0819876544', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5695, '0000756836', 'RYAAS SINTA AINURROHMAH', 'P', 'Kediri', '2000-06-16', 1, 'Sleman', 2, 1, 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5696, '0001416038', 'SASQIA ANNISA BASTIAN', 'P', 'Sleman', '2000-04-08', 1, 'Sleman', 1, 1, 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876544', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5697, '9992277458', 'PUJI PUTRI NURANI', 'P', 'Bantul', '2000-09-12', 1, 'Bantul', 1, 2, 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5698, '0001414277', 'NURUL QOMARIYAH MAULANI', 'P', 'Sleman', '2000-06-08', 1, 'Sleman', 2, 2, 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5699, '0000899487', 'IRFAN DWIYOGA YULIAN', 'L', 'Bantul', '2000-07-20', 1, 'Ngewotan, Ngestiharjo, Kasihan, Bantul', 2, 2, 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5700, '0000772726', 'AJENG KAROLINA', 'P', 'Bantul', '2000-01-30', 1, 'Snosewu, Ngestiharjo,Kasihan,Bantul', 2, 3, 'kandung', 'SDN 1 Sonosewu', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5701, '0000759164', 'GALANG SETIA BUDI', 'L', 'Bantul', '2000-06-09', 1, 'Bantul', 1, 2, 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5702, '9993293766', 'ILHAM PRADANA KUSUMA', 'L', 'Yogyakarta', '2001-11-07', 1, 'Singosaren,Wirobrajan,Yogyakarta', 2, 2, 'kandung', 'SDN 1 Wirobrajan', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5703, '9991174057', 'ANGGRAENI PUTRI WIDYANINGRUM', 'P', 'Bantul', '2000-10-04', 1, 'Sonopakis Kidul, Ngestiharjo Kasihan Bantul', 1, 1, 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2015-04-16', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5704, '0004921701', 'NADIA FITRI WIJAYANINGSIH', 'P', 'Sleman', '2000-03-10', 1, 'Dukuh,Banyuraden,Gamping,Sleman', 2, 2, 'kandung', 'SD Muhamadiyah Banyuraden', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5705, '9991171266', 'GUNTUR BAGUS YOGA AJITAMA', 'L', 'Yogyakarta', '2000-05-31', 1, 'Singosaren,Wirobrajan,Yogyakarta', 0, 1, 'kandung', 'SD Muhamadiyah 3 Wirobraj', 'Dn 1 Dd 0819876543', 2014, 7, '2015-04-16', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5706, '0000772235', 'MEI WARDAH PUJI ASTUTI', 'P', 'Bantul', '2000-05-14', 1, 'Soragan,Ngestiharjo,Kasihan,Bantul', 3, 2, 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5707, '0002317519', 'SYAHARANI KUSUMANINGTYAS', 'P', 'Bantul', '2000-01-09', 1, 'Soboman, Ngestiharjo,Kasihan,Bantul', 1, 1, 'kandung', 'SDN 1 Sonosewu', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_female.jpg', 'T', NULL),
(5708, '9991399882', 'RUDI NUR SETIAWAN', 'L', 'Sleman', '2000-12-09', 1, 'Dukuh,Banyuraden,Gamping,Sleman', 2, 1, 'kandung', 'SD Muhamadiyah Banyuraden', 'Dn 1 Dd 0819876543', 2014, 7, '2015-04-16', 7, 'aktif', 'no_image_male.jpg', 'T', NULL),
(5709, '9992799594', 'DIAH PARAMITHA', 'P', 'Gunugkidul', '2000-01-31', 1, 'Ngewotan, Ngestiharjo, Kasihan, Bantul', 3, 2, 'kandung', 'SDN 1 Tepus', 'Dn 1 Dd 0819876543', 2014, 7, '2014-07-07', 7, 'aktif', 'no_image_male.jpg', 'T', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_eskul`
--

CREATE TABLE IF NOT EXISTS `siswa_eskul` (
  `id_siswaeskul` int(6) NOT NULL AUTO_INCREMENT,
  `id_eskul` int(2) NOT NULL,
  `nis` int(6) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  PRIMARY KEY (`id_siswaeskul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `siswa_eskul`
--

INSERT IGNORE INTO `siswa_eskul` (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES
(1, 1, 5688, 2),
(2, 1, 5700, 2),
(3, 1, 5690, 2),
(4, 1, 5682, 2),
(5, 1, 5703, 2),
(6, 2, 5680, 2),
(7, 2, 5688, 2),
(8, 2, 5681, 2),
(9, 2, 5692, 2),
(10, 2, 5694, 2),
(11, 2, 5685, 2),
(12, 2, 5708, 2),
(13, 2, 5693, 2),
(14, 2, 5686, 2),
(15, 1, 5684, 2),
(16, 2, 5690, 2),
(17, 3, 5680, 2),
(18, 3, 5688, 2),
(19, 3, 5700, 2),
(20, 3, 5681, 2),
(21, 3, 5690, 2),
(22, 3, 5682, 2),
(23, 3, 5703, 2),
(24, 3, 5683, 2),
(25, 3, 5684, 2),
(26, 3, 5689, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_aspek`
--

CREATE TABLE IF NOT EXISTS `sub_aspek` (
  `id_subaspek` int(2) NOT NULL AUTO_INCREMENT,
  `id_aspek` int(1) NOT NULL,
  `sub_aspek` varchar(35) NOT NULL,
  `max_nilai` double(5,2) NOT NULL,
  PRIMARY KEY (`id_subaspek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `sub_aspek`
--

INSERT IGNORE INTO `sub_aspek` (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES
(1, 1, 'Nilai Ulangan Harian', 100.00),
(2, 1, 'Nilai Tugas / PR', 100.00),
(3, 1, 'Nilai UTS', 100.00),
(4, 1, 'Nilai UAS', 100.00),
(5, 2, 'Unjuk Kerja', 100.00),
(6, 2, 'Proyek', 100.00),
(7, 2, 'Portofolio', 100.00),
(8, 3, 'Observasi', 4.00),
(9, 3, 'Penilaian Diri', 4.00),
(10, 3, 'Penilaian Teman', 4.00),
(11, 3, 'Jurnal', 4.00),
(12, 2, 'Praktik', 100.00),
(13, 2, 'Tulis', 100.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
  `id_thnajaran` int(2) NOT NULL AUTO_INCREMENT,
  `thn_ajaran` varchar(9) NOT NULL,
  PRIMARY KEY (`id_thnajaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tahun`
--

INSERT IGNORE INTO `tahun` (`id_thnajaran`, `thn_ajaran`) VALUES
(1, '2011/2012'),
(2, '2012/2013');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_kelas`
--

CREATE TABLE IF NOT EXISTS `wali_kelas` (
  `id_walikelas` int(3) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  PRIMARY KEY (`id_walikelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `wali_kelas`
--

INSERT IGNORE INTO `wali_kelas` (`id_walikelas`, `nip`, `id_kelas`, `id_thnajaran`) VALUES
(1, '196702021989022001', 1, 2),
(2, '196903151995122006', 3, 2),
(3, '195902091984122001', 5, 2),
(4, '19571224198031002', 6, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_siswa`
--

CREATE TABLE IF NOT EXISTS `wali_siswa` (
  `nis` int(6) NOT NULL,
  `nama_wali` varchar(40) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(25) NOT NULL,
  `telp_wali` varchar(12) NOT NULL,
  `agama_wali` int(1) NOT NULL,
  `status_wali` enum('ayah','ibu','ol') NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wali_siswa`
--

INSERT IGNORE INTO `wali_siswa` (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES
(5678, 'wali 1', 'alamat wali', 'PNS', '0', 1, 'ol'),
(5680, 'Ayah 2a', 'alamt ayah', 'PNS', '898989898', 1, 'ayah'),
(5681, 'Ibu 3', 'alamat ibu', 'PNS', '89898989', 1, 'ibu'),
(5682, 'Ayah 4a', 'alamat ayah', 'PNS', '5454545', 1, 'ayah'),
(5683, 'Ayah 5', 'Alamat ayah', 'Swasta', '08967555555', 1, 'ayah'),
(5684, 'Ayah 6', 'Alamat ayah', 'TNI', '08967555555', 1, 'ayah'),
(5685, 'Ayah 7', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5686, 'Irawan', 'Kwaron, Ngestiharjo, Kasihan, Bantul', 'PNS', '08967555555', 1, 'ayah'),
(5687, 'Ayah 8', 'Alamat ayah', 'Swasta', '08967555555', 2, 'ayah'),
(5688, 'Ayah 9', 'Alamat ayah', 'PNS', '08967555555', 2, 'ayah'),
(5689, 'Ayah 10', 'Alamat ayah', 'Buruh', '08967555555', 2, 'ayah'),
(5690, 'Ayah 10', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5691, 'Ayah 11', 'Alamat ayah', 'POLRI', '08967555555', 1, 'ayah'),
(5692, 'Ayah 12', 'Alamat ayah', 'Swasta', '08967555555', 3, 'ayah'),
(5693, 'Ayah 13', 'Alamat ayah', 'Wiraswasta', '08967555555', 3, 'ayah'),
(5694, 'Ayah 14', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5695, 'Ayah 15', 'Alamat ayah', 'TNI', '08967555555', 1, 'ayah'),
(5696, 'Ayah 16', 'Alamat ayah', 'Swasta', '08967555555', 1, 'ayah'),
(5697, 'Ayah 17', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5698, 'Ayah 18', 'Alamat ayah', 'Swasta', '08967555555', 1, 'ayah'),
(5699, 'Ayah 19', 'Alamat ayah', 'Buruh', '08967555555', 1, 'ayah'),
(5700, 'Ayah 20', 'Alamat ayah', 'Buruh', '08967555555', 1, 'ayah'),
(5701, 'Ayah 21', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5702, 'Ayah 22', 'Alamat ayah', 'Swasta', '08967555555', 1, 'ayah'),
(5703, 'Ayah 23', 'Alamat ayah', 'POLRI', '08967555555', 1, 'ayah'),
(5704, 'Ayah 24', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5705, 'Ayah 25', 'Alamat ayah', 'Swasta', '08967555555', 1, 'ayah'),
(5706, 'Ayah 26', 'Alamat ayah', 'Swasta', '08967555555', 1, 'ayah'),
(5707, 'Ayah 29', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5708, 'Ayah 30', 'Alamat ayah', 'PNS', '08967555555', 1, 'ayah'),
(5709, 'Wali 31', 'Ngewotan, Ngestiharjo, Kasihan, Bantul', 'PNS', '08967555555', 1, 'ol');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ket_keluar`
--
ALTER TABLE `ket_keluar`
  ADD CONSTRAINT `ket_keluar_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ortu`
--
ALTER TABLE `ortu`
  ADD CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rc_permissions`
--
ALTER TABLE `rc_permissions`
  ADD CONSTRAINT `rc_permissions_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `rc_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rc_permissions_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `rc_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rc_roles`
--
ALTER TABLE `rc_roles`
  ADD CONSTRAINT `rc_roles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `rc_roles_category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rc_users_groups`
--
ALTER TABLE `rc_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `rc_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `rc_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
  ADD CONSTRAINT `sekolah_asal_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wali_siswa`
--
ALTER TABLE `wali_siswa`
  ADD CONSTRAINT `wali_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
