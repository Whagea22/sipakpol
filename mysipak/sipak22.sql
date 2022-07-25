-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 06:15 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipak22`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin__formatsurat`
--

CREATE TABLE `admin__formatsurat` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file_word` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin__formatsurat`
--

INSERT INTO `admin__formatsurat` (`id`, `nama`, `file_word`, `created_at`, `updated_at`) VALUES
('9676696d-cbf7-4fc5-bce5-5200ce6d4f6c', 'JURNAL ILMIAH', 'app/FormatSuratWord/JURNAL ILMIAH W.docx-1654353191VWHcaxmiJA.docx', '2022-06-29 03:06:10', '2022-06-29 03:06:10'),
('967669a0-d922-4aa2-8ced-a9b09ef1ca8f', 'PROSIDING', 'app/FormatSuratWord/PROSIDING W.docx-1654353224W8jP7TM75k.docx', '2022-06-04 14:33:44', '2022-06-04 07:33:44'),
('967669e2-3a43-4c8c-b8c7-04bd6f50ef30', 'BUKU', 'app/FormatSuratWord/BUKU W.docx-1654353267iA99pTyqxq.docx', '2022-06-04 14:34:27', '2022-06-04 07:34:27'),
('96766a18-b0bf-4d86-894d-72c58c4712f2', 'PATEN', 'app/FormatSuratWord/PATEN W.docx-1654353303gOCAKjSf2Y.docx', '2022-06-04 14:35:03', '2022-06-04 07:35:03'),
('96766a66-9eff-4582-b23d-a66e11e32e6a', 'BOOK CHAPTER', 'app/FormatSuratWord/BOOK CHAPTER W.docx-1654353354WNymIlNAlg.docx', '2022-06-04 14:35:54', '2022-06-04 07:35:54'),
('96d81431-6e52-483c-adfb-0636796bcd77', 'Dokumen DUPAK', 'app/FormatSuratWord/DOKUMEN DUPAK.xls-1658547958SB9n5ecv5n.xls', '2022-07-22 20:45:58', '2022-07-22 20:45:58'),
('96d8161d-09cc-4a28-91b1-e0086173f475', 'Lembar pengesahan validasi karya ilmiah ( Tanda tangan Direktur )', 'app/FormatSuratWord/Lembar Pengesahan Validasi Karya Ilmiah_Direktur_2020.docx-16585482804YaRPuYKN3.docx', '2022-07-22 20:51:21', '2022-07-22 20:51:21'),
('96d81691-4071-495f-9982-412ddb1b5ec9', 'Lembar pengesahan validasi karya ilmiah ( Tanda tangan P3KM )', 'app/FormatSuratWord/Lembar Pengesahan Validasi Karya Ilmiah_P3KM.docx-1658548357rbOuQAZBC7.docx', '2022-07-22 20:52:37', '2022-07-22 20:52:37'),
('96d81709-fe32-44ef-b003-9d856d5552f9', 'Surat pernyataan keabsahan karya ilmiah', 'app/FormatSuratWord/Surat-Pernyataan Keabsahan Karya Ilmiah_Pengusul.docx-1658548436PS465tS29n.docx', '2022-07-22 20:53:56', '2022-07-22 20:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin__module`
--

CREATE TABLE `admin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin__module`
--

INSERT INTO `admin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `created_at`, `updated_at`, `url`) VALUES
('96536204-d6d0-4107-b69a-08ea8d32200f', 'www', 'Sipak-Pegawai', 'Sipak', 'SIPAK', 'Pegawai', '#dc3545', NULL, '2022-07-21 04:05:42', '2022-07-20 21:05:42', 'pegawai'),
('965e3542-a8eb-4111-9fd4-de6e02513499', 'Sipak Pol', 'Sipak-Admin', 'Admin-MasterData', 'SIPAK', 'Admin', '#b424e7', NULL, '2022-05-24 17:10:57', '2022-05-24 17:10:57', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pegawai`
--

CREATE TABLE `admin__pegawai` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gelar_depan` varchar(255) DEFAULT NULL,
  `gelar_belakang` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `nip` varchar(225) DEFAULT NULL,
  `nup` varchar(255) DEFAULT NULL,
  `nik_ktp` varchar(255) DEFAULT NULL,
  `tempatlahir` varchar(255) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin__pegawai`
--

INSERT INTO `admin__pegawai` (`id`, `nama`, `gelar_depan`, `gelar_belakang`, `nidn`, `nip`, `nup`, `nik_ktp`, `tempatlahir`, `tanggallahir`, `agama`, `jeniskelamin`, `profile`, `unitkerja`, `jabatan`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('96b9f49b-6389-42b3-9896-83139edbbc6d', 'WHAGEA SAPUTRA', NULL, NULL, '2001062207', '220620013042010022', NULL, NULL, 'Ketapang', '2001-06-22', 'islam', 'Laki-laki', 'app/image/profile/96b9f49b-6389-42b3-9896-83139edbbc6d-1658591217-1VxvE.jpg', 'Teknologi Informasi', 'Web Developer', NULL, NULL, '$2y$10$EB7XEyUJANH7glCPNa3dwO74FG7Yms6TtTp2CT/38joS62/IQp4Xq', 'E7ejZInu77DLMSAfvkwrIlrkhwKUvQyy8UbNjxowhTImRAKLPIMOEzAg1EgK', '2022-07-23 15:46:57', '2022-07-23 08:46:57'),
('96d60e44-ce35-4992-ad41-620815c73b60', 'Refid Ruhibnur', NULL, 'S.ST., M.M', '1121058202', '198205212021211003', NULL, NULL, 'Pontianak', '1982-05-21', 'islam', 'Laki-laki', 'app/image/profile/96d60e44-ce35-4992-ad41-620815c73b60-1658548781-VXgJ6.png', NULL, NULL, NULL, NULL, '$2y$10$m/IRm9EnSepJKW9wSJzYY.XIKZildNPTEcKUK94t8Vq8Au7A9okzK', 'RhDkr3rKsblxix9gVUvu6joJ1VVg3WfiCDgnMWcq2m7JQaq2ytDKNrdY3tBQ', '2022-07-23 03:59:41', '2022-07-22 20:59:41'),
('96d66438-7f46-4f8d-87d3-cfe79f3321f7', 'Ar-Razi Muhammad', NULL, 'S.T.', '9900007182', NULL, '19930128201609210', NULL, 'Pontianak', '1993-01-28', 'islam', 'Laki-laki', 'app/image/profile/-1658475485-ykCvm.png', NULL, NULL, NULL, NULL, '$2y$10$9fOERELoiJXC5P8gdeb7p.cFtzgKbx9LPcw8Bo0saRiR0VbI9Ja/C', NULL, '2022-07-22 00:38:05', '2022-07-22 00:38:05'),
('96d665b3-a69d-4128-a490-600e1f224f96', 'Eka Wahyudi', NULL, 'S.Pd.M.Cs', '0041018702', '198701142019031007', NULL, NULL, 'Mekar Asri', '1987-01-14', 'islam', 'Laki-laki', 'app/image/profile/-1658475734-S0VRj.png', NULL, NULL, NULL, NULL, '$2y$10$2fUSxPfHhwUeNnxgMWEyoelvC8I0j2B3i3/pbreDexs42OWb76YgK', NULL, '2022-07-22 00:42:14', '2022-07-22 00:42:14'),
('96d6673b-490d-4542-9d27-f8ee1658a174', 'Rizqia Lestika Atimi', NULL, 'S.T.,M.T', '0009118901', '198911092018032000', NULL, NULL, 'Pontianak', '1989-11-09', 'islam', 'Perempuan', 'app/image/profile/-1658475990-eeT5N.png', NULL, NULL, NULL, NULL, '$2y$10$NTcDttSvcM47YLqNnwmxe.3uYZyrdry/BQHkRTT9Z3NSX4YcgjdF6', NULL, '2022-07-22 00:46:31', '2022-07-22 00:46:31'),
('96d6684c-dd42-4090-b694-9d9850fa2218', 'Novi Indah Pradasari', NULL, 'S.Kom.,M.Kom', '0011119004', '199011112019032018', NULL, NULL, 'Ketapang', '1990-11-11', 'islam', 'Perempuan', 'app/image/profile/-1658476170-I58ct.png', NULL, NULL, NULL, NULL, '$2y$10$R8EEyhNICRCPVHT5qdPXMeCzN0BPFekl75Y75cOqOjK6jJ.XSBimy', NULL, '2022-07-22 00:49:30', '2022-07-22 00:49:30'),
('96d66946-a668-488e-8a8d-5d7e4c50cac6', 'Darmanto', NULL, 'M.Kom', '1104079101', '199107042019031015', NULL, NULL, 'Ngawi', '1991-07-04', 'islam', 'Laki-laki', 'app/image/profile/-1658476334-X2kOR.png', NULL, NULL, NULL, NULL, '$2y$10$DnI8uhvnUzHfAGCVRepqIO5ImzGM1b3btf7tAjaxSNaTqAWb5PsAq', NULL, '2022-07-22 00:52:14', '2022-07-22 00:52:14'),
('96d66a37-8e08-4145-930a-0927eb4b437e', 'Indra Pratiwi', NULL, 'M.Pd', '0024048901', NULL, '19890424201509165', NULL, 'Ketapang', '1989-04-24', 'islam', 'Perempuan', 'app/image/profile/-1658476491-V1cfQ.png', NULL, NULL, NULL, NULL, '$2y$10$XahANs9bjXzJIBB8DygrBeCw2VpClZFO1h2uQjk6ku7.Bci2OO9Gy', NULL, '2022-07-22 00:54:51', '2022-07-22 00:54:51'),
('96d6d24a-e3fb-4df9-8d8b-f48e6342f002', 'Muh Anhar', NULL, 'ST.,MT', '1122077403', '197407222021211005', NULL, NULL, 'Boyolali', '1974-07-24', 'islam', 'Laki-laki', 'app/image/profile/-1658493952-BrjsS.png', NULL, NULL, NULL, NULL, '$2y$10$fbcb2dt8ZPi5jzSE8vI5sOk/KCwHiqD6GXdWrV3wTjM.xAzRqzS5C', '79heHMm0GnAXceQPUKfPUAanStkhEvdLmpYIuoZxZkebOP2gOPWBBwGgu2YH', '2022-07-22 13:07:47', '2022-07-22 13:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pengaduan`
--

CREATE TABLE `admin__pengaduan` (
  `id` char(36) NOT NULL,
  `id_pegawai__pengaduan` char(36) NOT NULL,
  `id_admin__pegawai` char(36) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin__pengajuan`
--

CREATE TABLE `admin__pengajuan` (
  `id` char(36) NOT NULL,
  `id_admin__pegawai` char(36) NOT NULL,
  `nama_pengajuan` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin__pengajuan`
--

INSERT INTO `admin__pengajuan` (`id`, `id_admin__pegawai`, `nama_pengajuan`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
('96d91742-0e6b-497c-83a1-a2a44797952d', '96b9f49b-6389-42b3-9896-83139edbbc6d', 'Asisten Ahli', 'app/pengajuanbaru/file/PERSYARATAN PENGAJUAN PAK (1).pdf-16585914223oprAO5fYk.pdf', 'Success', '2022-07-23 08:50:22', '2022-07-23 08:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `admin__role`
--

CREATE TABLE `admin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin__role`
--

INSERT INTO `admin__role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('96b9f4ca-a84d-445f-9681-03d83c5bcd6e', '96b9f49b-6389-42b3-9896-83139edbbc6d', '965e3542-a8eb-4111-9fd4-de6e02513499', '2022-07-07 21:23:20', '2022-07-07 21:23:20'),
('96d2eea4-3cd3-49e7-9d62-e66047cc8c17', '96b9f49b-6389-42b3-9896-83139edbbc6d', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-20 07:21:50', '2022-07-20 07:21:50'),
('96d614a8-36d6-4ba4-b7cd-9e1bd77a2828', '96d60e44-ce35-4992-ad41-620815c73b60', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-21 20:55:37', '2022-07-21 20:55:37'),
('96d66af5-2744-4cd8-9a83-d8c3c56ef27b', '96d6684c-dd42-4090-b694-9d9850fa2218', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 00:56:56', '2022-07-22 00:56:56'),
('96d66b8e-4b9b-47b6-94a3-f60dd062ce34', '96d665b3-a69d-4128-a490-600e1f224f96', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 00:58:36', '2022-07-22 00:58:36'),
('96d66ba9-cdcb-4842-9b2f-9643d63069b2', '96d6673b-490d-4542-9d27-f8ee1658a174', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 00:58:54', '2022-07-22 00:58:54'),
('96d66bb4-73d9-4370-a1f8-19a2af5a78f6', '96d66946-a668-488e-8a8d-5d7e4c50cac6', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 00:59:01', '2022-07-22 00:59:01'),
('96d66bc9-e10b-47b0-9cd0-bdcf93be41f0', '96d66438-7f46-4f8d-87d3-cfe79f3321f7', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 00:59:15', '2022-07-22 00:59:15'),
('96d66bdf-e38f-436f-838f-a402fb50b721', '96d66a37-8e08-4145-930a-0927eb4b437e', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 00:59:30', '2022-07-22 00:59:30'),
('96d6d299-f170-4352-ad3b-da922ada4aa4', '96d6d24a-e3fb-4df9-8d8b-f48e6342f002', '96536204-d6d0-4107-b69a-08ea8d32200f', '2022-07-22 05:46:44', '2022-07-22 05:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai__pengaduan`
--

CREATE TABLE `pegawai__pengaduan` (
  `id` char(36) NOT NULL,
  `id_admin__pegawai` char(36) NOT NULL,
  `id_pegawai__pengajuan` char(36) NOT NULL,
  `id_pegawai__pengaduan` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai__pengaduan`
--

INSERT INTO `pegawai__pengaduan` (`id`, `id_admin__pegawai`, `id_pegawai__pengajuan`, `id_pegawai__pengaduan`, `nama`, `deskripsi`, `bukti`, `created_at`, `updated_at`) VALUES
('96d91474-f710-4e2c-b83b-86141bc39c8e', '96b9f49b-6389-42b3-9896-83139edbbc6d', '96b9f49b-6389-42b3-9896-83139edbbc6d', '96b9f49b-6389-42b3-9896-83139edbbc6d', 'Lektor 300', 'Belum Di tanggapi', 'app/Pengaduan//file surat lampiran.pdf-1658590952uOy6PrqdZj.pdf', '2022-07-23 15:42:32', '2022-07-23 08:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai__pengajuan`
--

CREATE TABLE `pegawai__pengajuan` (
  `id` char(36) NOT NULL,
  `id_admin__pegawai` char(36) NOT NULL,
  `nama_pengajuan` varchar(255) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `file_lampiran` varchar(255) DEFAULT NULL,
  `file_surat` varchar(255) DEFAULT NULL,
  `skpengangkatan` varchar(255) DEFAULT NULL,
  `fcijazah` varchar(255) DEFAULT NULL,
  `fctranskip` varchar(255) DEFAULT NULL,
  `skjabatan` varchar(255) DEFAULT NULL,
  `skpenyesuaian` varchar(255) DEFAULT NULL,
  `pernyataankarya` varchar(255) DEFAULT NULL,
  `pernyataanhasilkarya` varchar(255) DEFAULT NULL,
  `printoutnidn` varchar(255) DEFAULT NULL,
  `docdupak` varchar(255) DEFAULT NULL,
  `buktipenelitian` varchar(255) DEFAULT NULL,
  `linkkarya` varchar(255) DEFAULT NULL,
  `karyailmiah` varchar(255) DEFAULT NULL,
  `lembarreview` varchar(255) DEFAULT NULL,
  `buku` varchar(255) DEFAULT NULL,
  `prosiding` varchar(255) DEFAULT NULL,
  `paten` varchar(255) DEFAULT NULL,
  `jurnalilmiah` varchar(255) DEFAULT NULL,
  `bookchapter` varchar(255) DEFAULT NULL,
  `sasarankinerja` varchar(255) DEFAULT NULL,
  `status` int(5) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai__pengajuan`
--

INSERT INTO `pegawai__pengajuan` (`id`, `id_admin__pegawai`, `nama_pengajuan`, `tanggal_pengajuan`, `file_lampiran`, `file_surat`, `skpengangkatan`, `fcijazah`, `fctranskip`, `skjabatan`, `skpenyesuaian`, `pernyataankarya`, `pernyataanhasilkarya`, `printoutnidn`, `docdupak`, `buktipenelitian`, `linkkarya`, `karyailmiah`, `lembarreview`, `buku`, `prosiding`, `paten`, `jurnalilmiah`, `bookchapter`, `sasarankinerja`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
('96d910b1-745b-4a2e-bf49-e771ae2c4b11', '96b9f49b-6389-42b3-9896-83139edbbc6d', 'Asisten Ahli', '2022-07-23', 'app/pengajuanbaru/filelampiran/file surat lampiran.pdf-1658590321B9MIlEaxA1.pdf', 'app/pengajuanbaru/filesurat/file surat pengantar.pdf-16585903216ft3v59MhO.pdf', 'app/pengajuanbaru/skpengangkatan/file surat pengantar.pdf-1658590321RsHYhLbndg.pdf', 'app/pengajuanbaru/fcijazah/Fotocopy Ijazah.pdf-1658590321FhfwpEZzMw.pdf', 'app/pengajuanbaru/fctranskip/file surat lampiran.pdf-1658590321ycUSjIsCSb.pdf', 'app/pengajuanbaru/skjabatan/file surat pengantar.pdf-1658590321uFVIDqAzO4.pdf', 'app/pengajuanbaru/skpenyesuaian/file surat lampiran.pdf-1658590321o6R1WlIHDw.pdf', 'app/pengajuanbaru/pernyataankarya/file surat pengantar.pdf-16585903210iFk2UWbVo.pdf', 'app/pengajuanbaru/pernyataanhasilkarya/file surat lampiran.pdf-16585903218a3jRRGIVG.pdf', 'app/pengajuanbaru/printoutnidn/printout nidn.pdf-1658590321y5M3Ehafwq.pdf', 'app/pengajuanbaru/docdupak/DOKUMEN DUPAK.xls-1658590321xvjPmPooeo.xls', 'karya ilmiah saya', 'http://localhost/mysipak/pegawai/unit-kerja/pengajuan-baru/create', 'app/pengajuanbaru/karyailmiah/Fotocopy Ijazah.pdf-1658590321tg5brvPJmu.pdf', NULL, 'app/pengajuanbaru/lembarreview/Buku/file surat pengantar.pdf-16585903218iwsUdzmw2.pdf', NULL, NULL, 'app/pengajuanbaru/lembarreview/JurnalIlmiah/file surat pengantar.pdf-1658590321FUC76rSPV8.pdf', NULL, 'app/pengajuanbaru/sasarankinerja/Fotocopy Ijazah.pdf-1658590321HZqUgivEu6.pdf', 2, NULL, '2022-07-23 15:33:44', '2022-07-23 08:33:44'),
('96d913b4-33cb-47d3-bb65-7faf1930c156', '96b9f49b-6389-42b3-9896-83139edbbc6d', 'Lektor 200', '2022-07-22', 'app/pengajuanbaru/filelampiran/file surat lampiran.pdf-1658590826TQ19v0izcA.pdf', 'app/pengajuanbaru/filesurat/Fotocopy Ijazah.pdf-1658590826CY8MkkJRRQ.pdf', 'app/pengajuanbaru/skpengangkatan/Fotocopy SK Pengangkatan Dosen Tetap.pdf-16585908264GYkpBaCnH.pdf', 'app/pengajuanbaru/fcijazah/Fotocopy SK Pengangkatan Dosen Tetap.pdf-1658590826BboPwQMFO8.pdf', 'app/pengajuanbaru/fctranskip/Fotocopy Ijazah.pdf-1658590826YnnlkOZ78X.pdf', 'app/pengajuanbaru/skjabatan/file surat lampiran.pdf-1658590826Qii7DP8mBI.pdf', 'app/pengajuanbaru/skpenyesuaian/Fotocopy Ijazah.pdf-1658590826LyPxstTyzV.pdf', 'app/pengajuanbaru/pernyataankarya/file surat pengantar.pdf-1658590826NkGdTzT3ih.pdf', 'app/pengajuanbaru/pernyataanhasilkarya/file surat lampiran.pdf-1658590826XJKdL2plj7.pdf', 'app/pengajuanbaru/printoutnidn/fc Transkip.pdf-1658590826kFh1mAKhKy.pdf', 'app/pengajuanbaru/docdupak/DUPAK_LEKTOR_YUSUF.xls-1658590826Epv031LGB0.xls', 'karya ilmiah saya', 'http://localhost/mysipak/pegawai/unit-kerja/pengajuan-baru/create', 'app/pengajuanbaru/karyailmiah/Fotocopy Ijazah.pdf-1658590826n4R0pw3FQW.pdf', NULL, 'app/pengajuanbaru/lembarreview/Buku/Fotocopy SK Pengangkatan Dosen Tetap.pdf-1658590826yo0eP0j7E6.pdf', NULL, NULL, NULL, NULL, 'app/pengajuanbaru/sasarankinerja/Fotocopy Ijazah.pdf-1658590826BPxBdP5Cel.pdf', 1, NULL, '2022-07-23 15:40:26', '2022-07-23 08:40:26'),
('96d9143d-48d0-48d7-8ce0-d331e5f4b7cc', '96b9f49b-6389-42b3-9896-83139edbbc6d', 'Lektor 300', '2022-07-25', 'app/pengajuanbaru/filelampiran/Fotocopy SK Pengangkatan Dosen Tetap.pdf-1658590916SIbUq0TRzP.pdf', 'app/pengajuanbaru/filesurat/Fotocopy Ijazah.pdf-1658590916EKariZ6Iyc.pdf', 'app/pengajuanbaru/skpengangkatan/Fotocopy Ijazah.pdf-1658590916HBHtP0KUUT.pdf', 'app/pengajuanbaru/fcijazah/Fotocopy SK Pengangkatan Dosen Tetap.pdf-1658590916gls4i2BjGP.pdf', 'app/pengajuanbaru/fctranskip/file surat pengantar.pdf-16585909168PPdbkMqPY.pdf', 'app/pengajuanbaru/skjabatan/file surat pengantar.pdf-1658590916D7Yk0nyzgV.pdf', 'app/pengajuanbaru/skpenyesuaian/Fotocopy Ijazah.pdf-1658590916L8cu5ZV7jR.pdf', 'app/pengajuanbaru/pernyataankarya/file surat pengantar.pdf-1658590916qucxCGdDL0.pdf', 'app/pengajuanbaru/pernyataanhasilkarya/Fotocopy Ijazah.pdf-1658590916RlfpimcPqA.pdf', 'app/pengajuanbaru/printoutnidn/Fotocopy Ijazah.pdf-1658590916fKb9MIyW8y.pdf', 'app/pengajuanbaru/docdupak/DUPAK_LEKTOR_YUSUF.xls-1658590916dQZAMAgZLj.xls', 'karya ilmiah saya', 'http://localhost/mysipak/pegawai/unit-kerja/pengajuan-baru/create', 'app/pengajuanbaru/karyailmiah/Fotocopy SK Pengangkatan Dosen Tetap.pdf-1658590916h9CtsqTHg2.pdf', NULL, 'app/pengajuanbaru/lembarreview/Buku/Fotocopy Ijazah.pdf-1658590916YM6ds3yCkj.pdf', NULL, NULL, NULL, NULL, 'app/pengajuanbaru/sasarankinerja/Fotocopy SK Pengangkatan Dosen Tetap.pdf-1658590916vexQZN8BJp.pdf', 3, NULL, '2022-07-23 15:44:15', '2022-07-23 08:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `simadu__pegawai`
--

CREATE TABLE `simadu__pegawai` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `simadu__pegawai`
--

INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `foto`, `username`, `remember_token`, `created_at`, `updated_at`) VALUES
('02b2a632-7432-4eaa-9898-b2ea879ff373', NULL, '19780803 201509 168', NULL, NULL, 'Heri Darmawan', NULL, 'S.T', 'Ketapang', '1978-08-03', 'Laki-laki', '', '$2y$10$kOdndFxu1yyRqmz.4OWdCuzx9yi39DmWPzU1QWKINfv1MkHyH4MYu', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('02fb52d1-876d-4dca-83d5-a8d769842eb5', NULL, '19890614 201302 129', NULL, NULL, 'M. Riduan', NULL, 'A.Md', 'Ketapang', '1989-06-14', 'Laki-laki', 'Islam', '$2y$10$.4ZP0lz7VOtXmj0ZuqBx8ufjBcsiIapj7s91CWkssYEvtwNFqv08m', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '19850516 202121 2 004', NULL, NULL, NULL, 'Eva Susana', NULL, 'A.Md', 'Ketapang', '1985-05-16', 'Perempuan', '', '$2y$10$sz8QiV9FOB391f/ixvN6x.akNuEFqIDKMDZ4ejiqpFUWWYtxV97MG', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', NULL, NULL, NULL, NULL, 'Vensya Aswal Anugerah Panca Poetri', NULL, 'A.Md', 'Pontianak', '1993-03-31', 'Perempuan', 'Islam', '$2y$10$YRhJ1zkzE6QoEuHxcTIds.AbLDNg4Xem.ouFeGVAa0qJaxs8dPVFu', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('045cfd08-9a76-4c18-a1eb-b43a99f48c57', NULL, '19920717 201512 174', NULL, NULL, 'Devi Elvira', NULL, 'S.Pd', 'Ketapang', '1992-07-17', 'Perempuan', '', '$2y$10$.kJ8tR1eOnQckmbZ2y2gDeVuKj.3aKz6YqO/ybSAb4G4TrjUqIC9G', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('0854e795-2c48-484e-b919-675b7be7dc7c', '19830917 202121 1 001', NULL, NULL, NULL, 'Adha Panca Wardanu', NULL, 'S.TP.,M.P', 'Pontianak', '1983-09-17', 'Laki-laki', 'Islam', '$2y$10$YDjrHk54U6.Da4s3wYi.6upZEW7.n3KIXtt5fBlSpAq0Wn75/uKEm', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('093cca9b-a773-4867-a5f6-a665467f791b', NULL, '19890622 201601 95', NULL, NULL, 'Juniarti', NULL, 'A.Md', 'Ketapang', '1989-06-22', 'Perempuan', '', '$2y$10$kLM1j8yc6xyHeJM2EIjqne75AuBlcIjxCeaKsyqcS2rpDpWgfN4dO', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('0a89879b-7875-4420-ab42-4ec9cb00e86e', '19910217 202121 1 002', NULL, NULL, NULL, 'Fajar Pebriyono', NULL, 'A. Md', 'Ketapang', '1991-02-17', 'Laki-laki', '', '$2y$10$WyCQmpKxfhCB6L7UCq.N6uFmkyg/EDLHP1H3U77Qr3E.ykXIgBm6O', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('0d8bcf7b-fb92-11ec-a972-088fc330ed2d', '123456789123456789', '12345678901234567', NULL, NULL, 'fathur', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$LdgKwxXRtGi7ETgyKqjihuVHZmr4MBNpo/BctqZpO9yuzQob0.BW6', 'app/fotofoto/1657266515-foto-O73Ou.jpg', '', 'iXz3joPjwzLgBEpnb7tFYbt6PISNoRVZGRaGmdeNYz0AyospQSJQTztp47x1', NULL, '2022-07-08 00:49:38'),
('0ed02966-83fd-4b68-b3e6-077f75582dd2', NULL, '19961119 202107 260', '6171035911960020', NULL, 'Dyah Novia Nugraheni', NULL, 'S.Tr.Ak.,M.Ak.', 'pontianak', '1996-11-19', 'Perempuan', 'Islam', '$2y$10$HGz7K2R0yzXL4dOP7yxwmet.ANWeCd4f9cE42XOg7VckMXtfAWGI6', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('13c7279b-9d2e-4afa-a641-ca2ebc14f151', NULL, NULL, NULL, NULL, 'Moh Rokim', NULL, '', 'Purworejo', '1970-01-01', 'Laki-laki', '', '$2y$10$e4R2Al8BX4cOeThtqNb.Tu/4/d7sKj6/eMXlbC93hnXyofaKiv51m', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('13dd745d-221f-421f-b78b-138131893d28', NULL, NULL, NULL, NULL, 'Dedi Kurniadi', NULL, '', 'Ketapang', '1970-01-01', 'Laki-laki', '', '$2y$10$OLfkg6z/KvT1X5QLSuBvUuvFojKXW5Ap1pZk/bXKJmZjvd4T6/xgu', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('143f2dec-fc53-45e6-a700-989bdf50c019', '19851008 202121 1 005', NULL, NULL, NULL, 'Erick Radwitya', NULL, 'S.ST., MT', 'Ketapang', '1985-10-08', 'Laki-laki', 'Islam', '$2y$10$Yofa0q299j49phSMnsiAHeibFRiJXCQZRJ/8tMRE9vvHuki.RsIIi', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('14e636c6-3ca1-4e24-9072-3b0b707abc99', NULL, NULL, NULL, NULL, 'M. Randi Hardiyanto', NULL, '', 'Ketapang', '1993-05-25', 'Laki-laki', '', '$2y$10$eSLH2X7OdIuIcTkLaUHsmOCYw0TIHIV11kauv/5CEuZIruKz5MLDi', '', '', '', '2022-07-04 04:55:58', '2022-07-04 04:55:58'),
('15417e2f-797e-43fe-ac3f-54b550f683ad', '19710324 202121 1 001', NULL, NULL, NULL, 'Molyadi', NULL, 'A.Md', 'Ketapang', '1971-03-24', 'Laki-laki', 'Islam', '$2y$10$Is4Oz.JZIwXcPrge.Fl1D.cytwTrCotF/gB0Ul5EF.VbECIDoPPFO', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('159c1ff3-499e-4acc-84c2-bc844f8da135', '19820310 202121 1 003', NULL, NULL, NULL, 'Trian Adimarta', NULL, 'S.TP., M.Sc', 'Surabaya', '1982-03-10', 'Laki-laki', 'Islam', '$2y$10$ivky/vh0mz10jCZ5PjuxAO/S39R84E39WtMKm5zQgpHxson18R.jq', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('16cb2f5a-392a-48bf-b846-bcf548ded51f', NULL, '19920521 201512 175', NULL, NULL, 'Muhamad Reza Lukmana', NULL, 'A.Md', 'Ketapang', '1992-05-21', 'Laki-laki', 'Islam', '$2y$10$Z3X3Tt.t5nDOYwBStR.UreEV.mE4ar5lA0wjXBGvSQNp1SkLtGaNm', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', NULL, NULL, NULL, NULL, 'Supiandi', NULL, '', 'Ketapang', '1980-06-09', 'Laki-laki', '', '$2y$10$rEpz20Ku5ujehaQ.3yryROgyVXQkrP3Fq0zJ.2UjFza2annIyQfsC', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('18514bb6-0287-4061-b323-05247b4132c4', '19720918 202121 2 002', NULL, NULL, NULL, 'Heni Haryani', NULL, NULL, 'Ketapang', '1972-09-18', 'Perempuan', '', '$2y$10$cyZneKdW5rPt3eqA9fBu6e3DYulwt5vnIsg70pw5VZhjLea.JvsCm', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('189bd94f-5fd1-451a-8a00-031840e9a07a', NULL, NULL, NULL, NULL, 'Khairil', NULL, 'S.P.,M.P', 'Samili', '1981-09-17', 'Laki-laki', 'Islam', '$2y$10$ZlDZQHxiafsTs.8tViKSKu/y.p4cVmz0h0yfVAUnWEAIjNpaKmbdC', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('18eebaa7-84fd-48ac-9c61-81dfe56e8074', '19770221 200803 1 001', NULL, NULL, NULL, 'Uti Rustam Efendi', NULL, 'S.T., M.T', NULL, '1977-02-21', 'Laki-laki', 'Islam', '$2y$10$Wz2EnQSPVPJk6y7tK5Ayt.svlH7gAKH/VGAarvGpYbDxLBpZnOa1m', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('193ca687-65a0-4711-b0c0-1927043c277d', NULL, '19930528 201603 202', NULL, NULL, 'Fachrul Rozie', NULL, 'S.T, M.Tr.T', 'Ketapang', '1993-05-28', 'Laki-laki', 'Islam', '$2y$10$eMC7NnfkDruaGMroXhJzveHPSdMvutXReY4ZpDBARBVz3YC0iAsHK', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1a3344f4-7b24-487e-a9fb-5ad326c13fff', '19900802 201903 1 003', NULL, NULL, NULL, 'Kondhang Dhika Kusuma', NULL, 'A.Md', 'Surakarta', '1990-08-02', 'Laki-laki', 'Islam', '$2y$10$GQ1CssTjIV8Tip9tlBzJb.UVCq27m6Ry8Lixf/VbWiZCpSugv8Vya', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1a9c1f07-2017-4492-a4f6-0dc243e7d999', '19911112 201903 1 014', NULL, NULL, NULL, 'Kasrianto Wijaya', NULL, 'A.Md', 'Palopo', '1991-11-12', 'Laki-laki', 'Islam', '$2y$10$88Dj2ALMFaMFSYhdFA0Hf.dUKYtfstdhJgrzv3AVYdkGRbHFZZK8u', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1b0267f4-d517-4512-a4c3-301a96372d12', '19890623 201903 2 015', NULL, NULL, NULL, 'Syarifah Aqla', NULL, 'S.Pd.,M.T', 'Pontianak', '1989-06-23', 'Perempuan', 'Islam', '$2y$10$rXweNbPNP7/HbBcqzu1jeOXXgZ86bSBSsPgQug4EYkEy.2KP2jXJq', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1b0267f4-d517-4512-a4c3-301a96372d13', '111111111111111111', '11111111111111111', NULL, NULL, 'User', NULL, '', 'Ketapang', '1989-06-23', 'Laki-Laki', 'Islam', '$2y$10$UFTJkBWTxW7BudTlrdIvVuk9d10BHlRLOgG8.T.FmkugCXj0MdL5e', '', 'User', '', '2022-07-04 04:55:59', '2022-07-10 05:27:25'),
('1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '19780511 202121 1 003', NULL, NULL, NULL, 'Helanianto', NULL, 'S.T.,M.T', 'Randau', '1978-05-11', 'Laki-laki', 'Katholik', '$2y$10$ghU0LJhQp2neACGmDEL5UOA7Q3I5zU50HTQ50NhKOLk32uXsv7efS', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1ba7321f-8186-4fbb-8cff-ff1d597d4336', '19760921 202121 1 002', NULL, NULL, NULL, 'Normansyah', NULL, 'S.T.,M.T', 'Ketapang', '1976-09-21', 'Laki-laki', 'Islam', '$2y$10$yU1nnS8xq//9uG63eHw0DuLNYJhocnuE.TxL9C592jor5YPR1C6wG', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1d5b7688-73c1-4142-99f3-94bbae58ed79', '19880501 201903 1 007', NULL, NULL, NULL, 'Budi Pratomo Sibuea', NULL, 'S.ST.,M.ST', 'Tebing Karimun', '1988-05-01', 'Laki-laki', 'Kristen', '$2y$10$wx3dAoJxaVFLbv.7mE1.ROEoIhIZaHfdLk./mUOOM7UqIh7MoD54e', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', NULL, '19930128 201609 210', NULL, NULL, 'Ar-Razy Muhammad', NULL, 'S.T', 'Pontianak', '1993-01-28', 'Laki-laki', 'Islam', '$2y$10$vggAfTl61r0stc3eFW0izOMdB14G6.ZHSSI4ZJt74CNseRl354zy2', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1e9dc080-4487-494e-9225-72b737e726c3', NULL, '19880328 201802 230', NULL, NULL, 'Muhammad Fadli', NULL, 'A.Md', 'Semarang', '1988-03-28', 'Laki-laki', 'Islam', '$2y$10$c88e5Cd4z6h1hwGf3cFusedy./nsqRKRAfuSDhl5TfBNLnnRJVYG.', '', '', '', '2022-07-04 04:55:59', '2022-07-04 04:55:59'),
('1f160b23-2073-4ad4-9ffc-1e417dc85cc9', NULL, '19900109 201512 171', NULL, NULL, 'Sarwendah Ratnawati Hermanto', NULL, 'S.Pd., M.Sc', 'Surakarta', '1990-01-09', 'Perempuan', 'Islam', '$2y$10$nTsZsLS64jcLMaCPCSLuxO7JKUb/N/260Q/maeBQixsIhUDclE45O', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('20ab0593-f9f5-405f-86ff-a3f3c50d804b', NULL, '19910413 201509 161', NULL, NULL, 'Rika Fitry Ramanda', NULL, 'M.P', 'Ketapang', '1991-04-13', 'Perempuan', 'Islam', '$2y$10$rRykhevWNcwchhRJ8SVniumqFxwDJb3lhzLuvrHWPvKcVcPV3f.f6', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('20c6f98d-f528-4fc2-9016-ef526e32b7ba', NULL, '19830327 201701 215', NULL, NULL, 'Uray Sriyani', NULL, '', 'Balai Karangan', '1983-03-27', 'Perempuan', '', '$2y$10$3Hvc/HGrGPSEimyWLPjX0u8iICQJoCvKZpE2Z/C9tcQekH9KJL7oi', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('2189d7cd-773e-4845-84a5-fffaa1ea901f', '19880315 201903 2 011', NULL, NULL, NULL, 'Maya Santi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-03-15', 'Perempuan', 'Islam', '$2y$10$PtFRc8L0LJCZhXfSeTzu2.Qb8vAr/Nq7wrKHT8nbHiLQ9dfqldy2S', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('22bf31f9-6306-425e-9d54-89ace70ccda4', '19880424 201903 2 012', NULL, NULL, NULL, 'Hurul\'ain', 'Ir.', 'S.T.,M.T', 'Pemangkat', '1988-04-24', 'Perempuan', 'Islam', '$2y$10$u6WEB4SCEJSWbBXM0TSQoO7uL40f8HjctfsLxOEICjKiW0UZkbt1S', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('22e45ac1-e10f-4134-8739-23fd2faa507c', '19840605 202121 1 005', NULL, NULL, NULL, 'Effendi', NULL, ' A.Md', 'Ketapang', '1984-06-05', 'Laki-laki', '', '$2y$10$PYeHwwfFBkb3HPO6/cB3p.ShgT.C3axXE4mYusGKxh5Wrd.QYBSaC', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('252e762f-e81d-4c33-8aae-11b68c651c17', NULL, NULL, NULL, NULL, 'Ibnu Hajar', NULL, '', 'Ketapang', '1969-01-29', 'Laki-laki', '', '$2y$10$mSAbBUnPDmYmTeMhqu0PkenM.AjDQNhtS5TBR./Eum/3r5pxQIJKC', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('26f5893c-c355-4040-9ae4-6e53187c725f', '19740722 202121 1 005', NULL, NULL, NULL, 'Muh Anhar', NULL, 'S.T.,M.T', 'Boyolali', '1974-07-22', 'Laki-laki', 'Islam', '$2y$10$uPhNTJ/lyChRQZZn.plpaes5/nDn.h/yAG30NS9w5xtHL.Zdi3Hrm', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('28e2a56e-3c76-4d19-844f-a3092954f0b7', '19850217 201504 2 002', NULL, NULL, NULL, 'Encik Eko Rifkowaty', NULL, 'S.TP.,M.P', 'Pontianak', '1985-02-17', 'Perempuan', 'Islam', '$2y$10$RJ62m9hiZ2DTHtATP4HgT.6.li6y8MWSUk7khu9.VY0xxHdcSrurS', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('29157361-a115-43a4-86ed-fbe66964c0d7', '19810521 202121 1 006', NULL, NULL, NULL, 'Dedi Sartono', NULL, 'A.Md', 'Ketapang', '1981-05-21', 'Laki-laki', '', '$2y$10$s7LEo1MvE.1cGs9ZAmVfyOsWJTVh62nx5o8/M85yYK5aTwlD8pwDG', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('295e592a-3426-40a6-899c-8860e5929164', NULL, '19911010 201507 155', NULL, NULL, 'Lita Nurpuspita Sari', NULL, 'S.Sos.', 'Singkawang', '1991-10-10', 'Perempuan', 'Islam', '$2y$10$YTqhrr2j0LSy6seXd3yu4ezrKx/1YDPxXDfo6Eh1XBlxgJdrL0xqK', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('29cb26c6-4361-4341-971d-07be567f2a6f', NULL, '19820601 201602 198', NULL, NULL, 'Lusia Romana', NULL, 'S.IP', 'Pantan', '1982-06-01', 'Perempuan', '', '$2y$10$CXHLY.u4R.L7WdYXCx5svOWgV/n68CGGWsPpIAtbeu8nQABYsocwy', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('30ccea2e-48be-4213-ae9a-379abd41a42c', NULL, '19821217 201509 164', NULL, NULL, 'Beny Setiawan', NULL, 'S.TP.,M.P', 'Pontianak', '1982-12-17', 'Laki-laki', 'Islam', '$2y$10$3V4l8.cPPgUdasBjM6fyleMS3gvSdp.kNS6B2kLNCpLEgiFC4LDTW', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '19890705 202121 1 002', NULL, NULL, NULL, 'M. Iwan Toro', NULL, 'A.Md.', 'Pebihingan', '1989-07-05', 'Laki-laki', 'Islam', '$2y$10$z/df0KTe5QNsYLE6fdvYvO9VxGU0AL3UBtG.d2Ud4HX18D9xglsYm', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('31236e8b-5191-4433-95a9-0390e1e13ac1', NULL, '19931213 201601 183', NULL, NULL, 'Yunita', NULL, 'A.Md', 'Ketapang', '1993-12-13', 'Perempuan', 'Islam', '$2y$10$rQxzUlgU06/7cfWtNfUgj.km/Uz2L4RznjZ4AsGU9XZSwv44camLa', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('321326cb-17cd-4634-bdc8-619c26d4aea3', NULL, '19911112 201411 146', NULL, NULL, 'Winda Arlianty', NULL, 'S.Kom.', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$9HAeB64hJN0rFT.HTtfazuCy8p0Zl86DxzSsCrUac9ve89z2OmJIm', '', '', '', '2022-07-04 04:56:00', '2022-07-04 04:56:00'),
('32d16bd7-58b5-487a-aab3-66cbb4801605', '19761218 202121 1 004', NULL, NULL, NULL, 'Abang Suryadi', NULL, 'A.Md', 'Putussibau', '1976-12-18', 'Laki-laki', 'Islam', '$2y$10$oLUmUILbcKkJjrsEt9H08OdpMS/3d/EZLZ3uU3hBM9Fekxa7r4DMq', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('35a66251-da37-4d69-b652-7eee40512ca2', '19820521 202121 1 003', NULL, NULL, NULL, 'Refid Ruhibnur', NULL, 'S.ST., M.M.', 'Pontianak', '1982-05-21', 'Laki-laki', 'Islam', '$2y$10$tSsYVTvkwtYwRQoyl2pF2e1yQXmI.GIzwlxYmG45ypa2JaGMaCApy', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('384a1c52-c826-4a58-9dac-effcab2e701a', NULL, '19901117 201604 205', NULL, NULL, 'Uci Novianti', NULL, 'S.Pd', 'Ketapang', '1990-11-17', 'Perempuan', '', '$2y$10$ReWJLIORRFOaJ41rKRlUF.Pcpq/WrS9QR/tccRHfOC5DYFbFCizn.', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('38e42c98-b490-4f03-a289-35939e035cfa', NULL, '19900123 201601 178', NULL, NULL, 'Irfan Cholid', NULL, 'S.P.,M.MA', 'Ketapang', '1990-01-23', 'Laki-laki', 'Islam', '$2y$10$/NPgjX6/4FFyhGCjlQTrye7DBJSAPcmvQAZe.6W9EcfoauPE/n8n6', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', NULL, NULL, NULL, NULL, 'Agus Sudrajat', NULL, '', 'Banyumas', '1979-06-08', 'Laki-laki', '', '$2y$10$ebmRtOVs8GEIe8xJkVt2DemjAyem6hzyRdSCiD1kGdVRBcf/KYEjO', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', NULL, NULL, NULL, NULL, 'Rosnila', NULL, '', 'Sembelangaan', '1967-01-05', 'Perempuan', '', '$2y$10$mgC8pRBeK9n5QCoIKJpi9ePIOZthIgsaUb3bdVXFnqavst3IHKL1G', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '19640914 198601 1 003', NULL, NULL, NULL, 'Temy Akhyar', NULL, NULL, NULL, NULL, 'Laki-laki', 'Islam', '$2y$10$qENtXj82sPWdUbQvACt65eM9hPwyqtzztqpDNeS52To.g4xdL4/7i', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3c7a9d69-339d-4ee3-9943-b9acec923fc5', NULL, '19871107 201507 156', NULL, NULL, 'Lukman Faisal', NULL, 'S.H.', 'Singkawang', '1987-11-07', 'Laki-laki', 'Islam', '$2y$10$9xwsHPWClEuqjYJFQOmdeu8yYS7idpBSVF4dS7nZQfP7M1O2JxMDW', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3eeb6e49-8f87-483b-b811-e7b91dc94a8d', NULL, '19911121 201701 214', NULL, NULL, 'Anugrah Bayu Saputra', NULL, 'A.Md', 'Pontianak', '1991-11-21', 'Laki-laki', 'Islam', '$2y$10$gnUR5x5bonRFabw25udEDeD8IPFUkhWpUZZ8Cnd227jx4xmHimdKO', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('3f60bbb2-e5e2-4297-b003-62fe2ffebf43', NULL, '19980609 202104 252', '6104120906980003', 'junaidiju4109@gmail.com', 'Junaidi', NULL, 'A.Md.Kom', 'Ketapang', '1998-06-09', 'Laki-laki', 'Islam', '$2y$10$JTLOyXc6RD8ugx1ox83U/.f9g.z1.erJamuEjbibJRFa1GYDbZgtC', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('42e5ae5d-611b-4c00-833e-ea735145b325', NULL, '19930216 201809 240', NULL, NULL, 'Ira Arianti', NULL, 'S.P.,M.P', 'Ketapang', '1993-02-16', 'Perempuan', '', '$2y$10$PKez2u5j7yXKxJEw/q4oXu1W5j3AyYno6RxOA3xCvP81e8Hj4vFjq', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('436521dd-c443-4db6-89ae-9e237e349402', '19791002 202121 2 008', NULL, NULL, NULL, 'Erma Novita', NULL, 'A.Md', 'Ketapang', '1979-10-02', 'Perempuan', 'Islam', '$2y$10$j3dz9C3mwEJQiaazcEQNlewcoZHCEXAk/DQ44Uq//iC6pJ6XJbzb2', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('43a2c3e2-6794-4fe3-a410-260d71bec47d', NULL, '19840207 201001 092', NULL, NULL, 'M. Hanif Faisal', NULL, 'M.T.', 'Pontianak', '1984-02-07', 'Laki-laki', '', '$2y$10$LaEOuEk3ZBaj75R2sMjAS.qPwOFjcyJFdoQaR.5DhkNaaAGp9Xgz.', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('4408ed64-f04d-48df-ba7f-9b082c9438fc', NULL, NULL, NULL, NULL, 'Ary Rubiyanto', NULL, '', 'Ketapang', '1989-02-18', 'Laki-laki', '', '$2y$10$Ymz9./z5AC8kD4sX3E0OfuuhsnjaPCvhA675ncJLwaQTUtQPRU8Nm', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('44c7b811-eae2-42cb-b1d6-243f09822b99', '19890816 201903 1 002', NULL, NULL, NULL, 'Ahmad Ravi', NULL, 'S.Pd.,M.Pd', 'Masamba', '1989-08-16', 'Laki-laki', 'Islam', '$2y$10$QAsPq/0ZlP.y.lTOyOolbexflGH6xz7NMemwi3QdToatYuXIU7QgK', '', '', '', '2022-07-04 04:56:01', '2022-07-04 04:56:01'),
('458c592c-348c-46d1-b344-b792fb64d42c', NULL, '19980908 202008 241', '6104174809980004', NULL, 'Shela Krisdayanti', NULL, 'A.Md.P', NULL, '1998-09-08', 'Perempuan', 'Islam', '$2y$10$Rddj1eUCsRXG8yfNfVRqBuVMDzS2BtbZE7tYcrCbS9.Nyig9K44.u', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('47ceee1a-b33b-4239-9a46-1e58b5a672ad', NULL, '19830627 201512 176', NULL, NULL, 'Wienda Soesanti Putri', NULL, 'SE', 'Surabaya', '1983-06-27', 'Perempuan', 'Islam', '$2y$10$7/I8AfhRl35mQ04llnJXy.12oNyUXN/IpKS2cgTN6q2fmrluNwxeu', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4839ee6d-2c3e-426a-9354-7db9e48ae439', '19880808 202121 1 001', NULL, NULL, NULL, 'Erwin', NULL, 'A.Md', 'Ketapang', '1988-08-08', 'Laki-laki', 'Islam', '$2y$10$d1lu.yDFf0.W1Ls8aLvkLeuyllYIA6KgMoQQeK5eXdxgX6Ry2J4K2', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('488fb59f-f26b-48f9-96a9-fad9e800e4d1', '19891023 202121 1 001', NULL, NULL, NULL, 'A.Yani', NULL, 'SP', 'Ketapang', '1989-10-23', 'Laki-laki', 'Islam', '$2y$10$21.FFelL9HvCtHAl2kxap.U8ArCXMQrynlpk25SfDrEjYurRSqBZq', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('49ce6c30-837f-45c3-8e2c-6f9870ebc2e9', '19750116 202121 1 003', NULL, NULL, NULL, 'Tardi Kurniawan', NULL, 'S.Sos,.M.Si', 'Pontianak', '1975-01-16', 'Laki-laki', 'Islam', '$2y$10$Die/8szVsL2lHa0FX/u4hu911r3oluXK1nk7pOIHm2HJwi0fXLlgW', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4c3d0071-440e-4e4a-837f-59eea1cc348e', NULL, NULL, NULL, NULL, 'Sy. Adly', NULL, '', 'Ketapang', '1980-09-04', 'Laki-laki', '', '$2y$10$BZjOKpvwGF5mdrAwM1lf8uNVvSNcJWJDKO/nhsczp.TARpr6UnDhi', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4d744851-78a2-40b9-ada0-0a17f50d990e', '19790626 202121 1 006', NULL, NULL, NULL, 'Sy. Ishak Alkadri', NULL, 'S.ST., M.T', 'Pontianak', '1979-06-26', 'Laki-laki', 'Islam', '$2y$10$LiHyzCPvwj6W6DHboPRWv..ByHxArYWjs2s4bwLy1srNYNSGecQv.', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4e441045-7e87-46c6-8f0c-68298b2934ae', NULL, '19770627 201601 187', NULL, NULL, 'Masyhudi', NULL, 'SE', 'Jakarta', '1977-06-27', 'Laki-laki', 'Islam', '$2y$10$lUQcNrmDgLNIk.VMPyzga.tyT2DGEJBukhGjg4c3B6.IOBywudb1C', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '19880919 201903 1 014', NULL, NULL, NULL, 'Herman', NULL, 'S.Si.,M.T', 'Singkawang', '1988-09-19', 'Laki-laki', 'Budha', '$2y$10$ntg9L0EOc4RcZde.d56e.e00IWcHuhPPcpnbEZaQ9JZ9AvNpmf7pK', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('50660972-640c-49bd-b4f3-b988cfa241ec', '19910414 201903 1 008', NULL, NULL, NULL, 'Sy. Muhammad Zaki', NULL, 'SST', 'Ketapang', '1991-04-14', 'Laki-laki', 'Islam', '$2y$10$hnjauDojbxKC6BpwF9jXOOKtWvjLGVmCAJIwwmYdsFs28cuf.uT1a', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('509fcb0e-fb92-11ec-a972-088fc330ed2d', '12345678912345678', NULL, NULL, NULL, 'fathur rahman', NULL, NULL, NULL, NULL, NULL, NULL, '1234', '', '', '', NULL, NULL),
('509fd729-fb92-11ec-a972-088fc330ed2d', '12345678901234567', NULL, NULL, NULL, 'rahman', NULL, NULL, NULL, NULL, NULL, NULL, '1234', '', '', '', NULL, NULL),
('5123ac8d-c8fb-436a-b417-28a153cf6c16', '19921021 201903 2 017', NULL, NULL, NULL, 'Diani Dwi Oktavianti', NULL, 'S.ST', 'Putussibau', '1992-10-21', 'Perempuan', 'Islam', '$2y$10$Ka1q/MDZpu0ZZIpB0UBZaO4E7qlKB8fftq1oBou6TS/QKs7ieNFvq', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('51a80ae5-f512-4310-8243-2a4abe75a345', NULL, NULL, NULL, NULL, 'Sy. Abdurrahman', NULL, '', 'Pontianak', '1980-05-09', 'Laki-laki', '', '$2y$10$HG7EWyXfbJDDcRe.8KfpbezaZ/k99PgGU49SWI/tWHmU5GLMGWWiS', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('53765b6c-4322-4c67-956a-12f6b811fdbc', NULL, '19910102 201406 134', NULL, NULL, 'Januarso', NULL, 'S.P.', 'Ketapang', '1991-01-02', 'Laki-laki', 'Islam', '$2y$10$PgvI.PzbjQv4hwvy.24zZ.1QvENMi4dqCCXOsTNWzxyB/cBqq1pqy', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('54981c04-da78-4aa6-93db-6b30fb625794', NULL, NULL, NULL, NULL, 'Uti Nailul Auhar', NULL, '', 'Ketapang', '1983-06-16', 'Laki-laki', '', '$2y$10$xd9.rYjhNL01LAEi3i4PQ.hqc8v9D/KpMNioKir4F9JLG6DZgJYJ.', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('56391bb3-7220-4c57-97d8-c5e72987d775', NULL, NULL, NULL, NULL, 'Zulinda', NULL, '', 'Ketapang', '1979-09-28', 'Laki-laki', '', '$2y$10$7swREM/KBsShV.gJ1QvWYetDcm1VLs0wU8hgfihADn4bRDHEBod2a', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('56d27921-8de3-4a64-8db0-fa30ec6d9a85', '19820701 202121 2 009', NULL, NULL, NULL, 'Novia Dhian Yulita', NULL, 'A.Md', 'Ketapang', '1982-07-01', 'Perempuan', 'Islam', '$2y$10$KpNwuuklcL5QLUWU4Np5w.zLKverAd2j.c8HmEv/.kVeRBgbohBzS', '', '', '', '2022-07-04 04:56:02', '2022-07-04 04:56:02'),
('57e7dded-12ef-41c3-a728-71bee06f9526', NULL, '19941011 201803 239', NULL, NULL, 'Alan Purtanto', 'Ir.', 'M.T', 'Sintang', '1994-10-11', 'Laki-laki', 'Katholik', '$2y$10$4ueaJ/1Z1W/RBFkUMYJLEe9TV.fMeGhB0pigixJLHpGN0bkikuqxu', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('58563118-abc4-4d1b-93a4-58e327972409', NULL, NULL, NULL, NULL, 'Desy Putri Syafrianti', NULL, 'S.Kom', 'Sekadau', '1991-12-02', 'Perempuan', 'Islam', '$2y$10$bXX37s7B39F54ME/TJ0y6.TvZXx2axw5gLlJrmqAekK1B15cbH5py', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('589661c7-7bc4-4517-aeda-812297d91c0c', '19940812 201903 2 019', NULL, NULL, NULL, 'Fionna Araminta Fabiola', NULL, 'S.E', 'Ketapang', '1994-08-12', 'Perempuan', 'Islam', '$2y$10$ayZPVC/6deVPwkupETWYj.3ktZMAF76gBmLWHbUVXA3sUUtmd6BXi', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5997603c-54d6-4b59-bb77-0fda630ee588', NULL, '19910127 201509 166', NULL, NULL, 'Pusparini Akhmad', NULL, 'S.Si', 'Palembang', '1987-01-27', 'Perempuan', 'Islam', '$2y$10$VeyW6s7l01NtZKWAZcIKF.3K7KkrGFGxgNNUVyYzF8q1In5.nkEUC', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5cde66a2-643d-46ea-83b0-7b1de9399637', NULL, '19890404 201512 117', NULL, NULL, 'Irfan', NULL, 'A.Md', 'Teluk Melano', '1989-04-04', 'Laki-laki', '', '$2y$10$DRSWs020W4QMVMKA6wnF6OG1YBXYZwlz8tXPmvImDcL2LPO4KyOIO', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5e418a66-3916-43d2-aabb-6ff1908d25f4', '19741026 202121 2 003', NULL, NULL, NULL, 'Utin Ida Fitriana', NULL, 'SE', 'Ketapang', '1974-10-26', 'Perempuan', 'Islam', '$2y$10$CEMupoXhhzk6Wdwh3Cll3uY6UkB1G4hPjXlTwaLYr1Sf.X/8lyrY6', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5e636dc2-6006-420e-88ac-18b7521e50bb', NULL, '19961218 202008 250', '6104175812960003', NULL, 'AMANDA TIARA REZKI', NULL, 'SM', NULL, '1996-12-18', 'Perempuan', 'Islam', '$2y$10$GS4npQMH77TYuRHVv79greL6NO7k2URbnogDVu3Hmn3ueEP7g6Cvu', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', NULL, NULL, NULL, NULL, 'Suherman', NULL, '', 'Ketapang', '1988-10-12', 'Laki-laki', '', '$2y$10$tz55RyF0qQq5azD0RlpS0uiPRy3QllazUBXDTNm2AmlPw.C0fDwi6', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '19840105 202121 1 003', NULL, NULL, NULL, 'Epriyandi', NULL, 'S.T.,M.T', 'Ketapang', '1984-01-05', 'Laki-laki', 'Islam', '$2y$10$8o1hIqy7y.YQ012GrOHS5.k1EgwzYODbsO0n6uxY1.q814Hl1Oo0e', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('5ffd6435-601b-4276-8c73-53c7cecdd701', '19801126 202121 2 005', NULL, NULL, NULL, 'Novitawati', NULL, 'A.Md', 'Ketapang', '1980-11-26', 'Perempuan', 'Islam', '$2y$10$gyVb6H94zuZHhwRY8ti1b.OB3BC0.iNcToOV/cuWFvB6F0DAie72y', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6351842b-6db4-4549-94c6-587f7e8d3883', '19840425 202121 1 001', NULL, NULL, NULL, 'Khairul Muttaqin', NULL, 'S.Pd.I.,M.Ag.', 'Singkawang', '1984-04-25', 'Laki-laki', 'Islam', '$2y$10$dKCAm.UwYGA2orYGeuUjju0Xf9Xzvc/7mwibhCwucgAeLX7oqHrmu', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('643a252e-3129-4f67-aba4-8ad6cbaca0c8', '19930818 201903 2 026', NULL, NULL, NULL, 'Firmanilah Kamil', NULL, ' S.Pd.,M.Pd', 'Malang', '1993-08-18', 'Perempuan', '', '$2y$10$zdqKbB7RrdVtXdaVZFfJE.9CwpUKYuOz0FNCOrkwOu2qqjpcKdX9O', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('652d3790-71e1-449e-88fb-a380428c0135', '19900619 202121 1 001', NULL, NULL, NULL, 'Zulpandi', NULL, 'A.Md', 'Ketapang', '1990-06-19', 'Laki-laki', 'Islam', '$2y$10$/lLXorT3xvWxw.WsJG.yZ.7Np9xjo5ZP5zT4JgL454/DJJyvL1pMy', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('68117ca1-bd03-47f2-849f-08f9d7c0d593', NULL, '19870311 201601 179', NULL, NULL, 'Sopiana', NULL, 'S.P.,M.Si', 'Mentibar', '1987-03-11', 'Perempuan', 'Islam', '$2y$10$nmArG0UYoiCy2DFhCItf4.bpdg9rdcCO9SxtpEM7kNX1BohgE0cam', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6885f19d-bc29-4b2b-9062-c2fedf8efc79', NULL, '19820623 201509 169', NULL, NULL, 'Saifudin Usman', NULL, 'S.T., M.Tr.Kom', 'Pontianak', '1982-06-23', 'Laki-laki', 'Islam', '$2y$10$E8kY82p7jFGPbbsCiOsvHu0fySoiw6hr.oKwsaLLRhmy2ox0R4drW', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6c395ad5-e91f-47f3-aa21-bc294c185ada', '19880830 201803 2 001', NULL, NULL, NULL, 'Venti Jatsiyah', NULL, 'S.P.,M.Si', 'Sambas', '1988-08-30', 'Perempuan', '', '$2y$10$SwAMt/X2GDqG48aPWgt.y.zVy4rI0cdoV2OOgDzlmpBmv5ZKvP6LS', '', '', '', '2022-07-04 04:56:03', '2022-07-04 04:56:03'),
('6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', NULL, '19790731 201211 123', NULL, NULL, 'Henny Yulianti', NULL, 'A.Md.', 'Ketapang', '1979-07-31', 'Perempuan', 'Islam', '$2y$10$UAyc6OvMI3KNuT8Q/mMexemT8HRaFPhFrRLZjxKkqbE0ygMnkLdq.', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '19771006 199703 1 003', NULL, NULL, NULL, 'Untoro Budi Harjanto', NULL, NULL, 'Yogyakarta', '1977-10-06', 'Laki-laki', 'Islam', '$2y$10$oxcryA1QT5X8LZo7oP9DqOjqJw2WJOnXyrMgzMhyHzbG9813W1SIm', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '19721212 202121 2 006', NULL, NULL, NULL, 'Utin Aimanul Habasiah', NULL, 'S.Sos', 'Ketapang', '1972-12-12', 'Perempuan', 'Islam', '$2y$10$8aOluQYShax2in23i8KMHe.4A.F/BhfhVKaTNqdfyMXYePNzFUN06', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '19811225 201503 1 001', NULL, NULL, NULL, 'M. Rangga CH', NULL, 'S.Kom', 'Ketapang', '1981-12-25', 'Laki-laki', 'Islam', '$2y$10$eL.Xa4AfouAspQEPKD2Z4OEPFYX2Ap0UUecb7hYjNBdk1f.8r4DkS', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('709b3b4e-969a-4c04-9e92-5e5654ea1172', '19861031 202121 1 001', NULL, NULL, NULL, 'M. Jimi Rizaldi', NULL, 'S.ST.,M.T', 'Ketapang', '1986-10-31', 'Laki-laki', 'Islam', '$2y$10$G9B/Pp1ixaw20SRp9UpE0.yeSAqqQPE9yczxALGdEwcDSzymoljXu', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('71b2657e-188b-4504-b605-6a488d35875a', NULL, '19871218 201512 173', NULL, NULL, 'Assrorudin', NULL, 'S.Pd.,M.Pd', 'Sidoarejo', '1987-12-18', 'Laki-laki', 'Islam', '$2y$10$6LVCBu99TyI89m3GmiKG4u721adFvZP.xChYO7HaqKE5BrYcnEoei', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('73d67075-744c-43c1-b3db-90e635121b08', NULL, NULL, NULL, NULL, 'Almiana', NULL, '', 'Ketapang', '1974-05-07', 'Perempuan', '', '$2y$10$J8Fa6XqAhcXPR4PZBYGS8OjUSfgRExi7W1YPg9v6UhcCQmQCP7CfK', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('769cc3ea-a955-4af8-9d8b-1509351aded3', '19910704 201903 1 015', NULL, NULL, NULL, 'Darmanto', NULL, 'M.Kom', 'Ngawi', '1991-07-04', 'Laki-laki', 'Islam', '$2y$10$fvTTMDTxd9HExzgg7DE5o.9.wqEGs9Pdm2/vf.VAyniI2LdHkYfja', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('78b3c200-ec4f-427c-be1e-eb899e259673', '19810822 202121 1 002', NULL, NULL, NULL, 'Awang Roy Lesmana', NULL, 'A.Md', 'Pontianak', '1981-08-22', 'Laki-laki', '', '$2y$10$vt71cNlIuyJ8pwEjwnTPHuLZLprxYlNBc3XyqIYkapH1CvhPtm6SO', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '19900921 202203 1 005', '19900920 201603 201', NULL, NULL, 'Ivan Suwanda', NULL, 'M.T', 'Pontianak', '1990-09-20', 'Laki-laki', 'Islam', '$2y$10$JJyUlCG0IVJ6fOLPm862tuN7XWP0ZlnF4Ty2OBgqGKJ.znuMV7SEO', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('799b456b-0e87-49de-8367-d2e78e9e74ae', NULL, '19841114 200801 047', NULL, NULL, 'Ningrum Dwi Hastuti', NULL, 'S.TP.,M.P', 'Klaten', '1984-11-14', 'Perempuan', '', '$2y$10$7rJNgP.uPRt41NNh8Hk./OaFI8WFcWc3nspaEIJKlhXj.GBAORuIS', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('79ae72a0-23be-4b20-ba79-703fb35a5eca', '19840504 201903 1 007', NULL, NULL, NULL, 'AKHDIYATUL', NULL, 'S.ST.,M.T', 'Ketapang', '1984-05-04', 'Laki-laki', 'Islam', '$2y$10$Zjo9b9jEE12MxxvPMXrJC.uFsHTDZdg9.DHpd6MwXCKlbUM5y6AM.', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7a8c08a9-467b-4afe-8abf-07f6c2431afb', NULL, '19860615 200810 025', NULL, NULL, 'Endi', NULL, 'SE', 'Mambuk', '1986-07-15', 'Laki-laki', 'Islam', '$2y$10$lZCQEsKk3FRtWdSC79oLgeg/pPA2nIrx1/S1Xh3hEduvrKaO7xnUu', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7acb40e6-5725-40ae-a4ec-02f6ed63bd94', '19830526 201504 1 001', NULL, NULL, NULL, 'Anto Susanto', NULL, 'SST, M.P', 'Bandung', '1983-05-26', 'Laki-laki', 'Islam', '$2y$10$JeMtITaQsmKkDt.PKuVLWepxnnJ0iAL4BFoBjha0fhP5h6zOcKp7a', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7bd1033c-7dfe-4f83-9aad-e11c292b1d84', NULL, NULL, NULL, NULL, 'Satira', NULL, '', 'Ketapang', '1974-09-06', 'Perempuan', '', '$2y$10$Fvska0.vFynj9aqyt6IjEOVdB3z2LSbbEuTZtIEnIiJIG2RbBcJJO', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7bea437a-8777-4c94-bf63-8e0ca9651691', '19640610 202121 1 004', NULL, NULL, NULL, 'Uti Sahibul Hekmi', NULL, 'A.Md', 'Ketapang', '1964-06-10', 'Laki-laki', 'Islam', '$2y$10$vaBMffqMixIDCXy3HWdSrO1DeWMGpgnbjikve/DsCbyRbQAX4NDs.', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7c7c26c8-47b9-48b3-8499-7ef04f7564ec', '19831001 202121 2 004', NULL, NULL, NULL, 'Nely Kurnila', NULL, 'S.Pd., M.Pd', 'Ketapang', '1983-10-01', 'Perempuan', 'Katholik', '$2y$10$lb9kh3PwlDhdm03rMFpQO.uKYQ/UsSxVYeABHrPD7ybGnQCvuekMW', '', '', '', '2022-07-04 04:56:04', '2022-07-04 04:56:04'),
('7e03dfc9-498e-4b16-8bce-d4823ce87ba8', NULL, '19860710 201204 118', NULL, NULL, 'Mustapa', NULL, ' A. Md', 'Ketapang', '1986-07-10', 'Laki-laki', '', '$2y$10$beCVWCtXpaSvjv6QNhvgRueOcUts.bA5i3ZLwtaTWppt50ZjPERlS', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8084ae53-5ac6-40a7-9f5f-dea40fa2aab5', '19870114 201903 1 007', NULL, NULL, NULL, 'Eka Wahyudi', NULL, 'S.Pd., M.Cs', 'Mekar Asri', '1987-01-14', 'Laki-laki', 'Islam', '$2y$10$1HnsdveCEJPnntEfm5Pl3.coo7tTKoohSLfngPA4xaH1OxNPxogAy', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('86f15cfc-fcb7-47a6-ae81-5129f6ef4ddc', '19910310 202121 1 001', NULL, NULL, NULL, 'Sarijanto', NULL, 'A.Md', 'Ketapang', '1991-03-10', 'Laki-laki', '', '$2y$10$OQD.mTRUqdHyhfaiSB1CvuN0yQ9ciZqeLFQhHQ2nORjQHJfUGI3V.', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('87284e92-8239-44a0-86cd-2040f3406f47', '19870716 202121 1 001', NULL, NULL, NULL, 'Deden Nugraha', NULL, 'S.P', 'Sukaresmi', '1987-07-16', 'Laki-laki', 'Islam', '$2y$10$96kp7gIoGdKn2FhrCDQ7jOIRPoFVkjURjNCY9B.pSevsIpyHs2OpW', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8784ed8e-9d88-44a6-bb02-3f085de35b8c', NULL, '19890124 201512 172', NULL, NULL, 'Firman', NULL, 'S.Pd., M.P.Fis', 'Ketapang', '1989-01-24', 'Laki-laki', 'Islam', '$2y$10$hXhU369LYKFhT0d/P1Owju.nzjYkj3Cn8vTyqhdICQysyossQ/E4i', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('891f6a6b-8bd9-4ad4-bdd6-13c7b2d46782', NULL, '19950704 201708 222', NULL, NULL, 'Utin Kurnia Putri', NULL, 'A.Md', 'Semarang', '1995-07-04', 'Perempuan', 'Islam', '$2y$10$R6/Ri/tyF1enO7/ztHfvmOS6Q081UVdMsYkWtJPcGezJmE3fv0qNS', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('89286b3a-69ef-47dc-8038-34175938abbc', NULL, '19880611 201601 196', NULL, NULL, 'Maya Andriana', NULL, 'SE', 'Teluk Melano', '1988-06-11', 'Perempuan', '', '$2y$10$4ccRDCOTWgeqeO3nqs4B1Ojf94JiAZ4eziUiqjx/xPxhj1a1Ww5ca', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8961f1e3-2848-4d15-b6b9-d79fdaa8a107', NULL, NULL, NULL, NULL, 'Karmila', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$C0u3UkoSMqi4W/4APMEAYO8i1LnwuCSwPqyzBl/cBZuRkaZY7h7Ua', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8a2a0fc9-7adb-47bc-978f-a12b9db859aa', '19860414 201903 2 011', NULL, NULL, NULL, 'Rosmalinda', NULL, 'S.ST.,M.P', 'Karang Baru', '1986-04-14', 'Perempuan', 'Islam', '$2y$10$mfa5jOImLIJuXUgc.sVIBOVv3s94nlZU9wlVIXlkEbsi0G/d3GqBO', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8a593376-eea9-4931-b0d7-86b72fd79b74', NULL, NULL, NULL, NULL, 'Henni', NULL, '', 'Ketapang', '1985-07-05', 'Perempuan', '', '$2y$10$UQ3f.E5B6pSOVSWRidvUCeIRZKtHYExZ2tqjS2OhEXlmlWPKGo6z6', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8a75b21c-c073-4a58-8bf6-de1a0f9b5438', '19860125 201803 1 001', NULL, NULL, NULL, 'Yusuf', NULL, 'S.ST., M.T', 'Ketapang', '1986-01-25', 'Laki-laki', 'Islam', '$2y$10$p44Pfp0Y4EM3s4An7hxsRO2MQQyr5K6H7s/DExL.tJM8JqOChjvAO', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8c2e117d-01ad-4da2-a049-5490e078db83', '19770906 202121 1 003', NULL, NULL, NULL, 'Edi Rahmanto', NULL, ' SE', 'Kelampai', '1977-09-06', 'Laki-laki', '', '$2y$10$HoTLLlH6DRrtBMCIabJdNuYMvzrZghFY4JlxuJi6l5nWOuByN/s8e', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8c6fdd85-dccf-4df8-888d-61910ca28761', '19891028 201903 2 011', NULL, NULL, NULL, 'Roida Oktovia Sihombing', NULL, 'SE', 'Pontianak', '1989-10-28', 'Perempuan', 'Kristen', '$2y$10$Ebk9C4D/B6J.072CJb7ii.50xi74UaEMfr6z4KaZ9SZfhjZ8JKfOu', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8d1a9392-ee5b-4086-a103-c86dbf04d2c6', NULL, NULL, NULL, NULL, 'ADMIN EVENT', NULL, NULL, 'BUMI', '2021-01-01', 'Laki-laki', 'Islam', '$2y$10$s1.xv0UNIThA7RIut04H1.Sp6KJkVCn1/CbxDJLXOEycmaBZoUUFm', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8da944a0-f7df-43a4-8bda-cc6c2b01cb5f', '19841207 201903 1 005', NULL, NULL, NULL, 'Munawar Kholil', NULL, 'S.Si.,M.Pd', 'Pamekasan', '1984-12-07', 'Laki-laki', 'Islam', '$2y$10$4sbrP.XzccHDTcjca.0c6OtGMpDSW7mruw/KxP0OA17HJcKOAkFLC', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8dbaf7b4-fdc6-4664-ad8f-28925262baaf', NULL, '19900126 201409 141', NULL, NULL, 'Syarifah Mastura', NULL, 'S.Pd.', 'Ketapang', '1990-01-26', 'Perempuan', 'Islam', '$2y$10$tOZRZ6tIqDoSRe8ujsc.gOQJ/xfTeu.fWiBj.TRt8g8wsQt/DM4GO', '', '', '', '2022-07-04 04:56:05', '2022-07-04 04:56:05'),
('8e33ce55-5330-4cb2-836e-a22a0800b01c', '19890424 202121 1 002', NULL, NULL, NULL, 'Halimansyah', NULL, 'A.Md.', 'Kendawangan', '1989-04-24', 'Laki-laki', '', '$2y$10$jrclM24tOrIFIxIxRKD8P.pjEDfo7rkKghU3XYbf5FaFXS7xf1E.W', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('8eea1d3b-f883-435d-a8a9-453e46053607', '19831217 201903 2 008', NULL, NULL, NULL, 'Alfath Desita Jumiar', NULL, 'S.P.,M.Si', 'Pontianak', '1983-12-17', 'Perempuan', 'Islam', '$2y$10$1wJ0zr4vf8DYAqeWyj7A2uZDpXr.h07hfle2q1KfrEpgbfjFM.sHK', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('8fdecaee-a3ef-4096-9165-26476c4e4753', '19710814 200604 1 005', NULL, NULL, NULL, 'Hidayat', NULL, NULL, 'Ketapang', '1971-08-14', 'Laki-laki', 'Islam', '$2y$10$glHKfa9Am48TUz4mZC19AevF4uIvpF1ovJiC1NvL3JSNpGtan63FO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('8ffd423c-6a57-454d-b643-d1f134117073', NULL, '19780510 200801 055', NULL, NULL, 'Asep Ruchiyat', NULL, 'S.T.,M.T', 'Bengkayang', '1978-05-10', 'Laki-laki', 'Islam', '$2y$10$6KKD.Cfjs3uBbrbgeYVFP.9GfIDmgfvkq2GjMq1OevGMlji8hP54S', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('908b7dcc-8b5f-4d2a-b745-3caacb11c1c9', '19900614 202121 2 001', NULL, NULL, NULL, 'Kurnia Dewi Permata Sari', NULL, ' A.Md', 'Ketapang', '1990-06-14', 'Perempuan', '', '$2y$10$5jom6HH1QFQnwq0YWr5uLO006KDA3pyMgBgokBASGDbTkfVAbofCW', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('92408291-4e21-41bc-ba91-b632dbc03201', '19630804 198601 1 005', NULL, NULL, NULL, 'Safi\'ie', NULL, 'SE', NULL, '1963-08-04', 'Laki-laki', 'Islam', '$2y$10$mS2Gf3qukTq4vKqffUFxfOxYk0E5uAxM9yCLqnapYzFwG2oGDdgHS', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('966bb315-7f59-470d-aaae-c9a60336c823', NULL, NULL, '3318091606890003', NULL, 'Rois Indriawan', NULL, NULL, 'Pati', '1989-06-16', 'Laki-laki', 'Islam', '$2y$10$Eh4nyHnU8cQ3WkblbwPCiOCUy.lZkPreCmORnUtInW5bMJSsU61cW', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('966bb413-e9b5-46d7-9d60-6361134df0ea', NULL, NULL, '6172016207870003', NULL, 'Dewi Nurmayasari', NULL, NULL, NULL, NULL, 'Perempuan', '', '$2y$10$pzmdPyZ8CqzqP2oCLrw9vud3BHtFHSjAPkWNikktZAH3Z1AEzoxlW', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('968a0145-7799-46f2-b501-e4a26899ac9a', NULL, '19881026 201707 221', NULL, NULL, 'Redika Maulidya', NULL, 'ST', 'Ketapang', '1988-10-26', 'Perempuan', '', '$2y$10$jO87mktry9jB.c6AL2YnX.qNvHwA3M4dwfsArUDH1EiB1oKbXG6xq', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('97693558-91bc-4335-b3cb-0311f337a795', '19631008 199603 1 003', NULL, NULL, NULL, 'Suratmin', 'Ir.', 'M.T', 'Ketapang', '1963-10-08', 'Laki-laki', 'Islam', '$2y$10$kcpA430EPX3y3ZjSHnK4pO9dcKnyipI9oKueN3675VEEJNiUHz.8W', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('98ae6c59-c188-498e-83e4-e511251529b7', NULL, '19840310 200801 017', NULL, NULL, 'Rustiarni', NULL, 'M.H', 'Ketapang', '1984-03-10', 'Perempuan', 'Islam', '$2y$10$CReCHTwUEidgBl9lit4xN.CLsnb05xxZBgVgoHzeJWy4WTHep2Mmi', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('98baf7ed-28bf-4a5d-8f4b-c0e789081d91', NULL, NULL, NULL, NULL, 'Muhammad Sa\'ari', NULL, '', 'Ketapang', '1963-06-23', 'Laki-laki', '', '$2y$10$fwxPnWRvimUMjf7bu8CXLORLAVwPeDpXTXbS6iGgBmVDJ7io1roJO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('98db1f9b-7be6-446f-a5ab-46208a47867b', '19861109 201903 1 005', NULL, NULL, NULL, 'Rosi Arrasyid', NULL, 'A.Md', 'Sentebang', '1986-11-09', 'Laki-laki', 'Islam', '$2y$10$4pLeJ/3F6VvSRF57UTMQ4uWAed2E5mScYdtgf8BvMN94Ffu6mr0gO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('99bba172-f59c-4bf4-a7df-31b6d3b00050', '19860923 201903 1 005', NULL, NULL, NULL, 'Yudi Chandra', NULL, 'S.ST., M.T', 'Ketapang', '1986-09-23', 'Laki-laki', 'Islam', '$2y$10$MpLZfX.dw.eFurTcttg.keIehh0efoAJCFVv87SkPWHxL5Hp2Rafu', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9a8e0752-f115-4c47-a7bc-49f8c1a862b4', '19880901 201903 1 010', NULL, NULL, NULL, 'Sy. Indra Septiansyah', NULL, 'S.Si.,M.T', 'Pontianak', '1988-09-01', 'Laki-laki', 'Islam', '$2y$10$suykkLO3JZdyc/pqgiS35.mTrEs6YKH6.tbhC.XYhfSXilZfwO3BO', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9b26a021-e661-4f49-ab22-6f49afe9cd9b', NULL, '19790910 200801 058', NULL, NULL, 'Hairian Rahmadi', NULL, 'S.T.,M.T', 'Sungai Jaga B', '1979-09-10', 'Laki-laki', 'Islam', '$2y$10$EXxBk5DP/1CyaHaDPBGQhOGXBSE9mnKlf1sXWoDOWhxIG8YCDFtCy', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9b7afb74-0772-48e9-acee-2720557d1384', NULL, NULL, NULL, NULL, 'Ahmad Riduan', NULL, '', 'Ketapang', '1996-02-24', 'Laki-laki', '', '$2y$10$saUWHhZNTO9o42VMkz5d3unGuVAvg8GcNfmivAD3y574zkFNZOKPC', '', '', '', '2022-07-04 04:56:06', '2022-07-04 04:56:06'),
('9cc7f277-d556-4fae-8d75-68e64bcfcad4', NULL, '19820404 201611 213', NULL, NULL, 'Nurhayati', NULL, 'S.P.,M.Si', 'Pedada', '1982-04-04', 'Perempuan', 'Islam', '$2y$10$iptTBtFzzbiL/CPqd9Mfnem7LPVYO3ou4P//Xte8ck3xJiW0XM1YS', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('9ebea3d2-60b0-4817-9e36-661f71d69e73', NULL, '19950203 202107 259', '6104174302950003', NULL, 'Heni Rahmadianingsih', NULL, 'M.Pd', NULL, NULL, 'Perempuan', '', '$2y$10$aP3f2aR4QYPzjBQNpVD0v.2qoGLd8oNk11ZVL/8uXu5DXPRKhuGV6', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('9faa86a0-147d-4657-9592-160f9bb9d06f', '19850805 202121 2 009', NULL, NULL, NULL, 'Nur Aida', NULL, 'S.Pd.,M. Pd', 'Ketapang', '1985-08-05', 'Perempuan', 'Islam', '$2y$10$rE/8XSxE/6yaJIW9C7KGIeevJi59rX/iz3tbl2Czp2.fG2pzPosCm', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a12f6e04-c76b-44d0-ad59-7427ac275be8', '19931228 201903 1 012', NULL, NULL, NULL, 'Rahmat Aryanto', NULL, 'A.Md', 'Ketapang', '1993-12-28', 'Laki-laki', 'Islam', '$2y$10$nXCs0WUwh88lj8DR.MLXVuxCV1gS4VodlggPtROKFjl.30xjHJOzq', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a15ebfc3-4700-4231-b982-f6fd6f150f1f', NULL, NULL, NULL, NULL, 'Evi Mellianti', NULL, 'SST', 'Ketapang', '1993-06-02', 'Perempuan', 'Islam', '$2y$10$wwp98n3ZsjVu.az.QBUYRugY5fqseehiFgvxrC1LGKUzCs8QNsELK', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a1c5ae62-36d7-4d2e-b207-999afa6a6103', NULL, '19740401 201311 132', NULL, NULL, 'Ahmadin', NULL, 'S.Sos.', 'Pontianak', '1974-04-01', 'Laki-laki', '', '$2y$10$GWtiFDMHZkfNeXP1Qn1v2ucXdNF/VwYiAbtWGilcTfMfAJ1kjVgym', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a1f6271f-46a8-4f4d-ad97-b11ed9ecca1b', NULL, '19860505 201602 203', NULL, NULL, 'Ade Herlinda', NULL, 'S.Pd', 'Ketapang', '1986-05-05', 'Perempuan', 'Islam', '$2y$10$8EeenN9wa/QMhb/QtYIpLOxz1X9pCKGuzKVvM3DygB1VsnREZzZRK', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a3cf6b37-c6e0-411e-ab87-9333e5f9e84a', '19800518 202121 1 007', NULL, NULL, NULL, 'Fathurrahmi', NULL, 'SE.,MM.', 'Ketapang', '1980-05-18', 'Laki-laki', 'Islam', '$2y$10$rKphwirVUAFj3v2uQhSQKO3UhkCgM2cqlPwUW8BIMSb7BgpAs6zcm', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a64ec6c9-f25d-40c9-acf2-f8054184f6c5', '19820520 202121 1 005', NULL, NULL, NULL, 'Ardiansyah Putra', NULL, 'A.Md.', 'Pontianak', '1982-05-20', 'Laki-laki', 'Islam', '$2y$10$3dFBke816KvwHt.SusK4SePj3foB6MU2hm0JJBWmueDllzSFOnqn2', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a7ab3156-4a6a-4d34-b4fd-ecdee3e951de', '19840926 201903 1 008', NULL, NULL, NULL, 'Irianto SP', NULL, 'S.ST.,M.MA', 'Pontianak', '1984-09-26', 'Laki-laki', 'Islam', '$2y$10$wfuFJBeEeG9GcdgW4Z0ux.KqBasuhwf7NzCsQ8SYgps3srUF.lyli', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('a8025fce-d1b8-4acf-80c2-ace804464787', NULL, NULL, NULL, NULL, 'Andri Gunawan', NULL, '', 'Ketapang', '1988-01-01', 'Laki-laki', '', '$2y$10$hIpzdbwtdgOMU1sXT/usW.U6Ki0DLerrE/12wM4DMYmsi7Kqm28tK', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('ac0df63f-204d-400a-83bd-66b7fc7d1d8d', '19770503 202121 1 004', NULL, NULL, NULL, 'Yudi Adlia', NULL, 'SE', 'Ketapang', '1977-05-03', 'Laki-laki', 'Islam', '$2y$10$/YKCIpDKT32b.DN3wojxFOjbvpEIXWNk.64dCwXVmm4ncwdYbKHe6', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('aeb5d395-09f4-42b1-8680-75663045684e', NULL, NULL, NULL, NULL, 'Supardi', NULL, '', 'Ketapang', '1979-01-17', 'Laki-laki', '', '$2y$10$9zZikzLoA7A92STXA5S/gekMhDp.WZOfrt4YFzC0IvTHIjlZNigkC', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('af76d150-7435-4f3a-bf5f-3fb3d991c626', '19920106 201903 2 015', NULL, NULL, NULL, 'Betti Ses Eka Polonia', NULL, 'S.Pd.,M.Pd', 'Lamongan', '1992-01-06', 'Perempuan', 'Islam', '$2y$10$NU0CHoOgakHT266gfKi.1OVXsbt1wVhMruUQRyDmcOQA9UKpcakLq', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('b14b7e81-2fc3-45e5-adc1-750cc73f0fb2', NULL, '19740510 200801 041', NULL, NULL, 'Isye Selvianti', NULL, 'SH.,M.AP', 'Solo', '1974-05-10', 'Perempuan', 'Islam', '$2y$10$H7B/279MV5pkwNifml.shuyxZtR6Nw9JJyhcgPmlDnp4KA90Kf186', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('b2035d20-b83c-479d-a032-ecdef5bf9eb0', '19780324 202121 1 005', NULL, NULL, NULL, 'Rodiansyah', NULL, 'A.Md', 'Ketapang', '1978-03-24', 'Laki-laki', 'Islam', '$2y$10$0bwsAEUfTzvqUhtCO/jzmORiFNMTokpnKb6djwUjMemMr2W1fAArW', '', '', '', '2022-07-04 04:56:07', '2022-07-04 04:56:07'),
('b2c740a8-348b-4e2e-9713-38c9712fe1d8', '19910617 201903 2 022', NULL, NULL, NULL, 'Saima Putrini R Harahap', NULL, 'S.Pd.,M.Pd', 'Padang Sidimpuan', '1991-06-17', 'Perempuan', 'Islam', '$2y$10$85fD0RahsPx5OzwbW16kFOjI9n0chevhpiyLM2LQXrwBX6hB5FGXa', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b2f3b1cc-0b55-4c9d-9e5b-0e6c7fac9c8b', '19750619 202121 2 006', NULL, NULL, NULL, 'Rohyati', NULL, 'A.Md', 'Trenggalek', '1975-06-19', 'Perempuan', '', '$2y$10$PLA9sSGZ4vJsFqp5sMrOheawHQeH3H.JRAz1D8lTvRVuTyTS9tX7a', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b3b814f5-e354-47b3-a000-156679809080', '19901105 201903 1 007', NULL, NULL, NULL, 'A. Nova Zulfahmi', NULL, 'S.Pi.,M.Sc', 'Kediri', '1990-11-05', 'Laki-laki', 'Islam', '$2y$10$qv.pmLBRghYr3CHVkA6yfuP4NxzS2Otqdo6h3KuRDTZj5ATNaeUlS', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b5f4d025-952e-4260-a45b-ab50e561a491', NULL, '19890730 201601 189', NULL, NULL, 'Nurhanudin', NULL, 'A.Md', 'Ketapang', '1989-07-30', 'Laki-laki', 'Islam', '$2y$10$OmCpQR35EY4dPaW0Bz/cVOjin8ktX46hmeIupnKKvsds2nJcvT4Y6', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b6308b4f-7569-47c1-980f-f266d255b293', '19780926 202121 1 003', NULL, NULL, NULL, 'Martanto', NULL, 'ST., MT', 'Sleman', '1978-09-26', 'Laki-laki', 'Islam', '$2y$10$Oqmi49dxJEQzaZj8sYjwQuiM5wd5UWkXH9oLIas704bWQyzvWU/e2', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b674c34c-18d8-4f2e-b78d-ba263ecb6f03', NULL, '19890711 201601 188', NULL, NULL, 'Nanang Hartoni', NULL, 'A.Md', 'Ketapang', '1989-07-11', 'Laki-laki', 'Islam', '$2y$10$AeHOef.bKB1R0upiD8RHU..7ceclqUlzg414T7DtSbHJX0FAPyQAu', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b67e1667-7681-4ba7-8eb7-49df4cae2eed', '19890316 202121 1 001', NULL, NULL, NULL, 'Faisal', NULL, 'A.Md.', 'Ketapang', '1989-03-16', 'Laki-laki', 'Islam', '$2y$10$1cz/jqWGpJPozuRTnZ/ou.J2u6WYRSCYBhkZIMKfsd5NQ4f8oJwk6', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b7369622-3dd7-487f-8add-b67d8512a6c3', NULL, '19911112 201601 184', NULL, NULL, 'Eva Prawinda', NULL, 'S.Pd', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$yYZYq3EhbiqOskTVnLhjienjosO7A/H5YzrZpJI7ArzM3J0iPRzrW', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b77f8f84-beb9-4d27-8a5f-475ac4fd520b', '19900228 202121 2 001', NULL, NULL, NULL, 'Nisa Zahara', NULL, 'A.Md', 'Ketapang', '1990-02-28', 'Perempuan', 'Islam', '$2y$10$v4UwbwCjJeoXZOZMlWg0jOlcMjhDO6flv5ZNtNGU65uYkOvf/Faw6', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b83e233a-d9b4-459d-93de-d33523c566b0', NULL, '19890424 201509 165', NULL, NULL, 'Indra Pratiwi', NULL, 'M.Pd', 'Ketapang', '1989-04-24', 'Perempuan', 'Islam', '$2y$10$ikFNIHFhnqiMT4IdjME2ouDYuJz/HB5/PS2XgUUH.lnSnoKuGmdTe', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('b95679cb-9866-4c31-8c5b-960b8ecec93c', NULL, NULL, NULL, NULL, 'Reino Muhammad', NULL, 'ST., M.Cs', 'Indonesia', '1945-08-18', 'Perempuan', '', '$2y$10$fBltcVQWibHBa5KfJYfogedfKoxOS8.cSZgebkAOqfOjbLj1/WI9m', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('bc1f265d-00ef-485c-867a-a32b2899a4e8', NULL, '19951222 202104 253', '6104182212950004', NULL, 'Teguh Eko Saputra', NULL, 'A.Md.Kom', 'Mayak', '1995-12-22', 'Laki-laki', 'Islam', '$2y$10$8x9zQnenBZsBL2lDPIZOceND8JafoERDaW3mk/EwH.i4gavAgrv9m', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('c0a53e24-a714-47cc-8651-1f413b8b72fe', NULL, '19881113 201601 182', NULL, NULL, 'Noprizan Azmi', NULL, 'ST', 'Simpang Empat', '1988-11-13', 'Laki-laki', 'Islam', '$2y$10$fkvqq0bKj3F6v/buVDjmFemC.cyiveU05c6dcrKiiEGMX/9X6ah5K', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('c37724c8-36bf-4bbf-82ad-bac50ce9078a', NULL, '19940929 201601 193', NULL, NULL, 'Lia Kurnia', NULL, 'SP', 'Ketapang', '1994-09-29', 'Perempuan', 'Islam', '$2y$10$QN6t2M9ZUXL1TlvSyoViiOdD6LJx6Gb6yCe/LC7VlDtJenTbKMG6O', '', '', '', '2022-07-04 04:56:08', '2022-07-04 04:56:08'),
('c5bc3f89-addd-4737-bd78-ac8b414679da', '19750808 202121 1 005', NULL, NULL, NULL, 'Sahardi', NULL, 'SE', 'Ketapang', '1975-08-08', 'Laki-laki', '', '$2y$10$HDMkjeRxKuFU4P506QZRDOQWA0upH2Ja29tAnx58KpEx4TyWfFClu', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09');
INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `foto`, `username`, `remember_token`, `created_at`, `updated_at`) VALUES
('cc37bab9-4d25-4dff-9ac9-3552e5921705', NULL, '19890424 201507 158', NULL, NULL, 'Aprianda Ibrahim', NULL, 'S.Kom', NULL, '1989-04-24', 'Laki-laki', 'Islam', '$2y$10$534rqKdqAH3ixl8Z6MLvSe1KHDIguPBVnaxqZvEEfWmsiLCHB/y8O', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('cda69cea-4502-4db3-9954-70f92c28f2f1', NULL, '19860410 201502 153', NULL, NULL, 'Arman', NULL, 'A.Md.', 'Ketapang', '1986-04-10', 'Laki-laki', 'Islam', '$2y$10$9kiqJygcmNEqYaAg7t3zrOiXxpSV9m/AzfN0FguwE.nUM47uI9nCO', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('cda9609b-0bed-49c5-96cc-e46831985dc7', NULL, '19950219 201708 220', NULL, NULL, 'Rahmadi', NULL, 'A.Md', 'Ketapang', '1995-02-19', 'Laki-laki', 'Islam', '$2y$10$2lP0u1CjKPpkTuUwlrIRme.4gls3lcCBa/1rz7MBkRcPM2Qup68kS', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('cdb42c37-d361-44aa-9d90-85dc5c02cc4c', NULL, '19891220 201404 133', NULL, NULL, 'Emy Arahman', NULL, 'S.Pd., M.Pd', 'Pontianak', '1989-12-20', 'Perempuan', 'Islam', '$2y$10$977347z4BkY1LoHRaKOtH.bljQyKmSTpmL08JHsuKR8swldoXRDYi', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d039bc2d-7c92-4349-ae77-e67fd4dcea7f', '19830501 202121 1 002', NULL, NULL, NULL, 'Muhammad Rizal', NULL, 'A.Md', 'Ketapang', '1983-05-01', 'Laki-laki', 'Islam', '$2y$10$uJ5DU4NgR4h70lX4u2Q.s.quy0Lnxpml6KVqMa/D64Zuq8ezpuWaS', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d04a0a35-e772-4766-abc3-d90346ecc0a9', NULL, NULL, NULL, NULL, 'Zulkarnaen', NULL, '', 'Ketapang', '1988-09-24', 'Laki-laki', '', '$2y$10$u9dxIvRpSX9D1qGYxmjWAu40PMbHf1jgod8z7a0g24Hr4Hda93C.S', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d2bc54ef-e3ec-46ae-adcf-8f856bbd35fc', '19901230 202121 1 001', NULL, NULL, NULL, 'Nasriadi', NULL, 'A.Md.', 'Watampone', '1990-12-30', 'Laki-laki', 'Islam', '$2y$10$PXIiMOBy65n7L3PcTz1XNe2ERmr6boIj1hTuGl0VKkcAg/mhsh6JC', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d307a54a-f25e-4a3b-95e5-75c0a78fe2e2', NULL, '19890807 201302 128', NULL, NULL, 'Diah Chairunisa', NULL, 'SE.', 'Ketapang', '1989-08-07', 'Perempuan', 'Islam', '$2y$10$GbqCoB31nQZ2o6jrClW2/.rQfNFoe9wAvM.XnUeLwR1XP6MlPJChy', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d399b985-7411-4a15-8eed-fbdb43b44dbc', '19891109 201803 2 001', NULL, NULL, NULL, 'Rizqia Lestika Atimi', NULL, 'S.T., M.T', 'Pontianak', '1989-11-09', 'Perempuan', 'Islam', '$2y$10$VcXhEDlAsCBPKQ7K5BsUbOejiPdF9Zau7XNf/xF/6N4HyARkWGKrK', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d4845c8d-dcda-421c-99ec-545bf9527ca1', NULL, '19940130 201601 185', NULL, NULL, 'Utin Asiyatin Nur', NULL, 'SE', 'Ketapang', '1994-01-30', 'Perempuan', 'Islam', '$2y$10$yyFxeruNS0ELvhVmJ.blHelH18h.1mcxKUAHkjsr2.x6yc3Dy.m1C', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d5090102-10f3-42ae-903d-0e583097ed02', NULL, '19911222 201409 144', NULL, NULL, 'Ningli Diniyati', NULL, 'S, ST', 'Teluk Melano', '1991-12-22', 'Perempuan', 'Islam', '$2y$10$uiHh8jCPo2JdKoO4lCWhROn2dGMCXedGpCE9xnJ72/y/P0CSNAp4O', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('d8987bf5-6238-4cc0-9be7-305f922cc657', NULL, NULL, NULL, NULL, 'Ernawati', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$9VBXEFwQGQjPyyyH2U4Jf.6kJbgID1dMhULajMpymayIR/YyPjjYC', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('da2352ee-66c7-41f4-b95a-ebfbc4f231ad', '19821107 202121 2 007', NULL, NULL, NULL, 'Dian Fitriarni', NULL, 'S.ST.,M.Sc', 'Ketapang', '1982-11-07', 'Perempuan', 'Islam', '$2y$10$uxXoTFkeSzRT.OzfbaAJvetOOCqBdaYwxWVMS72CU1Jei7SeWMOru', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('da94c955-4436-4ea5-bb45-b8fce9a4b154', NULL, '19910219 201507 154', NULL, NULL, 'Kharisma', NULL, 'S.Kom. M.Kom', 'Ketapang', '1991-02-19', 'Laki-laki', '', '$2y$10$8pgzqWqapBhiImQXZ3uiHu8zBbVAloX2qXOYgyHNDJJdAYK.zL8Iy', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('dac66e3b-fb91-11ec-a972-088fc330ed2d', '12345678912345678', NULL, NULL, NULL, 'fathur', NULL, NULL, 'ketapang', '2002-10-13', 'laki-laki', 'islam', '1234', '', '', '', NULL, NULL),
('db6d49db-22b0-409f-8450-1beb34250905', '19901111 201903 2 018', NULL, NULL, NULL, 'Novi Indah Pradasari', NULL, 'S.Kom., M.Kom', 'Ketapang', '1990-11-11', 'Perempuan', 'Islam', '$2y$10$z9zOTh8u/PoTXTEEnjKZfeQP4aGGTamP/aYs33ZRcwAZEV8VOUKV6', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('dc497585-9080-4954-8417-89be283b4665', '19881104 201903 1 004', NULL, NULL, NULL, 'Idris Herkan Afandi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-11-04', 'Laki-laki', 'Islam', '$2y$10$YIMOj4yLpUsolWp.O9j2GObMUVc4UqBMUPRbEMPr99PxNgc.HeEYS', '', '', '', '2022-07-04 04:56:09', '2022-07-04 04:56:09'),
('de4b9779-eb40-42bf-8bfd-6bb1125c1703', NULL, '19840327 201110 103', NULL, NULL, 'Muhammad Taufik', NULL, ' S.T', 'Mempawah', '1984-03-27', 'Laki-laki', '', '$2y$10$UzBLFShSQ4N/IRk.qF75keDELw4kCOleQnBMzjUzU68t92OUdllee', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('de9a5fdb-117c-45fe-8b46-ae4ce536270f', NULL, 'NIP.1985 070720 080', NULL, NULL, 'Julyan Purnomo', NULL, 'S.ST., M.T.', 'Ketapang', '1985-07-07', 'Laki-laki', '', '$2y$10$F7Qdq.Rh4tblX6.6nPsj6.47WEO.x7siyYBxSrNl/4p7llzxGaruu', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('dee9fbb6-7eda-4464-8d26-1a41838a13d5', NULL, '19940702 201709 223', NULL, NULL, 'Agung Iswandi', NULL, 'ST', 'Ketapang', '1994-07-02', 'Laki-laki', 'Islam', '$2y$10$h8pxsoDiIp9CriEqxm8huOCJax6jJaYaZc.mIY3ZEByMNS8ZC047e', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e22b1a40-7094-48a7-8a1b-a7407d679e4c', '19771010 200811 1 024', NULL, NULL, NULL, 'Harsusani', NULL, 'S.T., M.T', NULL, '1970-01-01', 'Perempuan', '', '$2y$10$2XKWDZEKgKM2/TunDZE5xeuZNs4b3ufM1grzuXq2O.ykndvR.B69W', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e32d5a13-49c3-481a-9485-2ad0789512cc', '19880513 202121 1 001', NULL, NULL, NULL, 'Citro Handoyo', NULL, 'S.T', 'Pontianak', '1988-05-13', 'Laki-laki', 'Islam', '$2y$10$xXnXU3aePBUX71uHVnRK.uY.H242Mgh17kansgyF1e.tplKvCItSu', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e3825cea-49cf-4e22-8b9e-6927099e859f', NULL, NULL, NULL, NULL, 'Syarif Niswah', NULL, '', 'Ketapang', '1975-05-05', 'Laki-laki', '', '$2y$10$FLrUbtnFnSK85n0qrvmMs.4zKiihwfOBUoCBUg1IxqHEQvV8TG0ym', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e6ba9e74-e855-4438-b2de-32099b533aa2', NULL, '19880402 201601 191', NULL, NULL, 'Mulyo Hadi Santoso', NULL, ' A.Md', 'Jelai Hulu', '1988-04-02', 'Laki-laki', '', '$2y$10$7LJk7E.qLDg6FRUlSij1We0Jb7C4ZTSfSOfWlIxHHhgD1kkpvzGtO', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e70044c4-9afe-4ba9-88dc-67ece46c36f8', NULL, NULL, NULL, NULL, 'Nurmalawati', NULL, '', 'Ketapang', '1973-04-13', 'Perempuan', '', '$2y$10$7HI.8Ui9fWCQxSQIcfzPwOl05IjdMj2BNvexsuhy0LFM1hfC6BXVe', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e8e2dbb1-c651-4a0a-8dea-0926135e428b', '19900121 201803 2 001', NULL, NULL, NULL, 'Sartika', NULL, 'S.Si.,M.T', 'Pontianak', '1990-01-21', 'Perempuan', 'Islam', '$2y$10$GWhNQjiKjKSVp.xaXzyL1uhiwk3DjnOM6CsNcR.2y4fn4bJ3jQqvC', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e8fd3915-260d-4079-8962-6608c6550e77', '19901203 202121 1 001', NULL, NULL, NULL, 'Wahyu Iswanto', NULL, 'A.Md', 'Ketapang', '1990-12-03', 'Laki-laki', 'Islam', '$2y$10$feSHIszVOQug2LPZP95vs.cJ65Zt.GSg42If74bWtEGjbtPQ7VCOy', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('e9b3eaac-e378-4e61-a660-c06a4f47490a', '19820310 202121 2 011', NULL, NULL, NULL, 'Nenengsih Verawati', NULL, 'S.TP.,M.P', 'Bima', '1982-03-10', 'Perempuan', 'Islam', '$2y$10$LsrJpaUM2Tb1DKmUYUHc9uPzZ311T2TZA.uMzDlMr257MwhZ56n2W', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('eb09439a-7370-4b1e-b765-252298ab31a8', NULL, NULL, NULL, NULL, 'M. Hidayat', NULL, '', 'Ketapang', '1978-10-26', 'Laki-laki', '', '$2y$10$Ug/23dpGOmmmoQ/LkY1OiuiHEazD8wygzdjb1MOUpfue4JWvF60Fm', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('ed7828d3-b34d-4d25-8378-7e3b75a08f66', NULL, '19850220 201601 192', NULL, NULL, 'Abdul Hafid', NULL, 'S.T', 'Nanga Tayap', '1985-02-20', 'Laki-laki', 'Islam', '$2y$10$y2Pnsf8FpLb97/9AJQJQFek44S8rVahpkNhYs002b11k/fhqkJsVK', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('ef103381-4e22-4d34-a141-83dfeb98340f', '19741101 202121 2 005', NULL, NULL, NULL, 'Sri Handayani', NULL, 'A.Md', 'Ketapang', '1974-11-01', 'Perempuan', 'Islam', '$2y$10$aGyC/0bFAyFSUH9/b3F.mOoqmJ.Ok6fYvPR2zDiJxZF6/rWTzB7s.', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('f34be033-0f08-4655-b2ba-b68f4139017f', '19770505 202121 1 007', NULL, NULL, NULL, 'Ismael Marjuki', NULL, 'S.T.,M.T', 'Ampalu Tinggi', '1977-05-05', 'Laki-laki', 'Islam', '$2y$10$c8PO61SwOhmGxSvhHTxAvOFXIcgClEfYVaheNdREo0uSeY9rmgs2u', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('f585f46a-98ed-4663-9f26-28891e3127cc', NULL, '19900611 201604 204', NULL, NULL, 'Ari Budiansyah', NULL, 'SE', 'Ketapang', '1990-06-11', 'Laki-laki', 'Islam', '$2y$10$RGBqeAeXRlrxTLgvRPnni.58dV3/yInvp3Uv9mC6ggLXk99xSJ/G6', '', '', '', '2022-07-04 04:56:10', '2022-07-04 04:56:10'),
('f59fa54b-a4e7-4bc2-90c3-6ec9f03a928b', '19681030 200112 1 002', NULL, NULL, NULL, 'Endang Kusmana', NULL, 'S.E.,M.M.,Ak,CA', 'Ciamis', '1968-10-30', 'Laki-laki', 'Islam', '$2y$10$bhAgG4ur/Dm3.9yHqxuQ6OA3DJFpFZlClaf98PMTLYLSHeHIvCaRC', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('f7c75340-cf0b-4402-963f-e8aca8e5936b', NULL, '19920917 202104 251', '6104171709920003', NULL, 'M. Alpiani', NULL, 'S.T', NULL, NULL, 'Laki-laki', '', '$2y$10$5SlsDcMIQsyQHuepxBHCau5wBTBGklFvD4Vm/OKIz3PGOr8KBz02y', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('f851e7bd-cc56-49dc-ab9b-97944d6041cd', NULL, '19810817 200801 042', NULL, NULL, 'Syf. Umi Kalsum', NULL, 'S.Sos.,M.AP', 'Ketapang', '1981-08-17', 'Perempuan', 'Islam', '$2y$10$3vNIaQ54Oh/ehxIyKQZbROykj90PfStAMK4aSiR1F5x1CLr5BhkzW', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('f97a9a05-82df-4dea-af31-c8014d4ca784', NULL, NULL, NULL, NULL, 'Rico Anugrah', NULL, '', 'Ketapang', '1994-09-01', 'Laki-laki', '', '$2y$10$1xqXIRRBCMu1V./cAuzSq.d.AagPSIzpDWejjm5/AxpB5APnTS3Fq', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fcf015d0-91e5-4808-8aa3-a8cf44bd547b', '19891017 202121 2 001', NULL, NULL, NULL, 'Tri Kumala', NULL, 'SP', 'Ketapang', '1989-10-17', 'Perempuan', 'Islam', '$2y$10$Qrxt6dH6lcAl5ZFXN.ELgeFmlNb0Fm9XZtw0COK1foBWMu6OOnVS2', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fd63b679-ae5a-46da-9ac2-3759ece0eac6', '19920414 201903 2 025', NULL, NULL, NULL, 'Mia Anggreini', NULL, 'A.Md', 'Nanga Keduai', '1992-04-14', 'Perempuan', 'Islam', '$2y$10$cNx5jHEurFhYJLvU/OO4ke.6sV1ZWzqcJcHEQva5G3iyMAElw7yuS', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fea080ab-8d56-4ba0-99f2-5ed8f0d4e1d5', NULL, '19811111 200801 012', NULL, NULL, 'Marisa Nopriyanti', NULL, 'STP., M.P.', 'Ketapang', '1981-11-11', 'Perempuan', 'Islam', '$2y$10$L0xik93JLrlfBghRmTkrb..AXJLlgROQlfTt83woRLFXhFBHkoZZq', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11'),
('fed5ef8b-675f-46be-9dc4-947c09e14dac', NULL, '19911104 201601 190', NULL, NULL, 'Nurimansyah', NULL, ' SP', 'Ketapang', '1991-11-04', 'Laki-laki', '', '$2y$10$/87I51EPlHi6eenceY2pqeX2OR6CDXLlGn6LDZKQPPeHN0Y1PCL.O', '', '', '', '2022-07-04 04:56:11', '2022-07-04 04:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__formatsurat`
--
ALTER TABLE `admin__formatsurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__module`
--
ALTER TABLE `admin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__pegawai`
--
ALTER TABLE `admin__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__pengaduan`
--
ALTER TABLE `admin__pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai__pengaduan` (`id_pegawai__pengaduan`),
  ADD KEY `id_admin__pegawai` (`id_admin__pegawai`);

--
-- Indexes for table `admin__pengajuan`
--
ALTER TABLE `admin__pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin__pegawai` (`id_admin__pegawai`);

--
-- Indexes for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_module` (`id_module`);

--
-- Indexes for table `pegawai__pengaduan`
--
ALTER TABLE `pegawai__pengaduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin__pegawai` (`id_admin__pegawai`),
  ADD KEY `id_pegawai__pengajuan` (`id_pegawai__pengajuan`),
  ADD KEY `id_pegawai__pengaduan` (`id_pegawai__pengaduan`);

--
-- Indexes for table `pegawai__pengajuan`
--
ALTER TABLE `pegawai__pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin__pegawai` (`id_admin__pegawai`);

--
-- Indexes for table `simadu__pegawai`
--
ALTER TABLE `simadu__pegawai`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
