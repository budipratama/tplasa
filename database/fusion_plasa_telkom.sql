-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2016 at 01:46 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fusion_plasa_telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_bank`
--

CREATE TABLE `f_bank` (
  `BANK_ID` int(5) NOT NULL,
  `BANK_CODE` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `BANK_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `BANK_GROUP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `BANK_ACTIVE` int(1) NOT NULL DEFAULT '1',
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_bank`
--

INSERT INTO `f_bank` (`BANK_ID`, `BANK_CODE`, `BANK_NAME`, `BANK_GROUP`, `BANK_ACTIVE`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, '002', 'Bank BRI', '1', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(2, '003', 'Bank EKSPOR INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(3, '008', 'Bank MANDIRI', '1', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(4, '009', 'Bank BNI', '1', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(5, '011', 'Bank DANAMON', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(6, '013', 'PERMATA BANK', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(7, '014', 'Bank BCA', '1', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(8, '016', 'Bank BII', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(9, '019', 'Bank PANIN', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(10, '020', 'Bank ARTA NIAGA KENCANA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(11, '022', 'Bank NIAGA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(12, '023', 'Bank BUANA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(13, '026', 'Bank LIPPO', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(14, '028', 'Bank NISP', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(15, '030', 'AMERICAN EXPRESS BANK', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(16, '031', 'CITIBANK', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(17, '032', 'JP. MORGAN CHASE BANK', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(18, '033', 'Bank OF AMERICA', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(19, '036', 'Bank MULTICOR', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(20, '037', 'Bank ARTHA GRAHA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(21, '040', 'BANGKOK Bank', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(22, '041', 'HSBC - HONGKONG & SHANGHAI B.C.', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(23, '042', 'Bank OF TOKYO MITSUBISHI', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(24, '045', 'Bank SUMITOMO MITSUI INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(25, '046', 'Bank DBS INDONESIA', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(26, '047', 'Bank RESONA PERDANIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(27, '048', 'Bank MIZUHO INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(28, '050', 'STANDARD CHARTERED Bank', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(29, '052', 'Bank ABN AMRO', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(30, '054', 'Bank CAPITAL INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(31, '057', 'Bank BNP PARIBAS INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(32, '058', 'Bank UOB INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(33, '059', 'KOREA EXCHANGE Bank', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(34, '060', 'RABOBank INTERNASIONAL INDONESIA', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(35, '061', 'ANZ PANIN Bank', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(36, '067', 'DEUTSCHE Bank AG', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(37, '068', 'Bank WOORI INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(38, '069', 'Bank of CHINA', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(39, '076', 'Bank BUMI ARTA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(40, '087', 'Bank EKONOMI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(41, '088', 'Bank ANTAR DAERAH', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(42, '089', 'Bank HAGA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(43, '093', 'Bank IFI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(44, '097', 'Bank MAYAPADA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(45, '110', 'Bank BPD JABAR-BANTEN', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(46, '111', 'Bank BPD DKI', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(47, '112', 'Bank BPD DI YOGYAKARTA', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(48, '113', 'Bank BPD JATENG', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(49, '114', 'Bank BPD JATIM', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(50, '115', 'Bank BPD JAMBI', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(51, '116', 'Bank BPD ACEH', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(52, '117', 'Bank BPD SUMUT', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(53, '118', 'Bank NAGARI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(54, '119', 'Bank BPD RIAU', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(55, '120', 'Bank BPD SUMSEL', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(56, '121', 'Bank BPD LAMPUNG', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(57, '122', 'Bank BPD KALSEL', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(58, '123', 'Bank BPD KALBAR', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(59, '124', 'Bank BPD KALTIM', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(60, '125', 'Bank BPD KALTENG', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(61, '126', 'Bank BPD SULSELBAR', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(62, '127', 'Bank BPD SULUT', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(63, '128', 'Bank BPD NTB', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(64, '129', 'Bank BPD BALI', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(65, '130', 'Bank BPD NTT', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(66, '131', 'Bank BPD MALUKU', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(67, '132', 'Bank BPD PAPUA', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(68, '133', 'Bank BPD BENGKULU', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(69, '134', 'Bank BPD SULTENG', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(70, '135', 'Bank BPD SULTRA', '3', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(71, '145', 'Bank NUSANTARA PARAHYANGAN', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(72, '146', 'Bank SWADESI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(73, '147', 'Bank MUAMALAT', '2', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(74, '151', 'Bank MESTIKA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(75, '152', 'Bank METRO EXPRESS', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(76, '153', 'Bank SHINTA INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(77, '157', 'Bank MASPION', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(78, '159', 'Bank HAGA KITA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(79, '161', 'Bank GANESHA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(80, '162', 'Bank WINDU KENTJANA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(81, '166', 'Bank HARMONI INTERNATIONAL', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(82, '167', 'Bank KESAWAN', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(83, '200', 'Bank BTN', '1', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(84, '213', 'Bank BTPN', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(85, '405', 'Bank SWAGUNA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(86, '422', 'Bank JASA ARTA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(87, '426', 'Bank MEGA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(88, '427', 'Bank JASA JAKARTA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(89, '441', 'Bank BUKOPIN', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(90, '451', 'Bank SYARIAH MANDIRI', '2', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(91, '459', 'Bank BISNIS INTERNASIONAL', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(92, '466', 'Bank SRI PARTHA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(93, '472', 'Bank JASA JAKARTA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(94, '484', 'Bank BINTANG MANUNGGAL', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(95, '485', 'Bank BUMI PUTERA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(96, '490', 'Bank YUDHA BHAKTI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(97, '491', 'Bank MITRANIAGA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(98, '494', 'Bank AGRO NIAGA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(99, '498', 'Bank INDOMONEX', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(100, '501', 'Bank ROYAL INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(101, '503', 'Bank ALFINDO', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(102, '506', 'Bank SYARIAH MEGA', '2', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(103, '513', 'Bank INA PERDANA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(104, '517', 'Bank HARFA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(105, '520', 'PRIMA MASTER Bank', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(106, '521', 'Bank PERSYARIKATAN INDONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(107, '525', 'Bank AKITA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(108, '526', 'LIMAN INTERNATIONAL Bank', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(109, '531', 'ANGLOMAS INTERNASIONAL Bank', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(110, '523', 'Bank DIPO INTERNATIONAL', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(111, '535', 'Bank KESEJAHTERAAN EKONOMI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(112, '536', 'Bank UIB', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(113, '542', 'Bank ARTOS', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(114, '547', 'Bank PURBA DANARTA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(115, '548', 'Bank MULTI ARTA SENTOSA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(116, '553', 'Bank MAYORA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(117, '555', 'Bank INDEX SELINDO', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(118, '566', 'Bank VICTORIA INTERNATIONAL', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(119, '558', 'Bank EKSEKUTIF', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(120, '559', 'CENTRATAMA NASIONAL Bank', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(121, '562', 'Bank FAMA INTERNASIONAL', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(122, '564', 'Bank SINAR HARAPAN BALI', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(123, '567', 'Bank HARDA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(124, '945', 'Bank FINCONESIA', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(125, '946', 'Bank MERIN CORP', '5', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(126, '947', 'MAYBANK', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(127, '948', 'Bank OCBC – INDONESIA', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(128, '949', 'CHINA TRUST Bank', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(129, '950', 'COMMONWEALTH Bank', '4', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(130, '770', 'FINNET INDONESIA', '6', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', ''),
(131, 'TCASH', 'TELKOMSEL T-CASH', '6', 1, '2016-02-15 13:22:40', 'DANRA', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_bank_group`
--

CREATE TABLE `f_bank_group` (
  `GROUP_ID` int(10) NOT NULL,
  `GROUP_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GROUP_DESC` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GROUP_ACTIVE` int(1) NOT NULL DEFAULT '1',
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_bank_group`
--

INSERT INTO `f_bank_group` (`GROUP_ID`, `GROUP_NAME`, `GROUP_DESC`, `GROUP_ACTIVE`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Bank Negara (Himbara)', 'Grup bank negara Indonesia (Himbara - Himpunan bank negara Indonesia)', 1, '2016-02-15 13:16:33', 'DANRA', '0000-00-00 00:00:00', ''),
(2, 'Bank Syariah', 'Grup bank syariah (bank yang menerapkan prinsip syariah Islam)', 1, '2016-02-15 13:16:33', 'DANRA', '0000-00-00 00:00:00', ''),
(3, 'Bank BPD', 'Grup bank pembangunan daerah Indonesia (berdasarkan provinsi di NKRI)', 1, '2016-02-15 13:16:33', 'DANRA', '0000-00-00 00:00:00', ''),
(4, 'Bank Internasional', 'Grup bank internasional yang terdapat di Indonesia', 1, '2016-02-15 13:16:33', 'DANRA', '0000-00-00 00:00:00', ''),
(5, 'Bank Umum', 'Grup bank umum yang terdapat di Indonesia', 1, '2016-02-15 13:16:33', 'DANRA', '0000-00-00 00:00:00', ''),
(6, 'Bank Lain-Lain', 'Grup bank lain-lain yang terdapat di Indonesia', 1, '2016-02-15 13:16:33', 'DANRA', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_currency`
--

CREATE TABLE `f_currency` (
  `CURR_ID` int(5) NOT NULL,
  `CURR_ISO_CODE` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `CURR_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CURR_ACTIVE` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_currency`
--

INSERT INTO `f_currency` (`CURR_ID`, `CURR_ISO_CODE`, `CURR_NAME`, `CURR_ACTIVE`) VALUES
(1, 'AFA', 'Afghanistan Afghani', 0),
(2, 'ALL', 'Albanian Lek', 0),
(3, 'DZD', 'Algerian Dinar', 0),
(4, 'ADP', 'Andorran Peseta', 0),
(5, 'AOK', 'Angolan Kwanza', 0),
(6, 'ARS', 'Argentine Peso', 0),
(7, 'AMD', 'Armenian Dram', 0),
(8, 'AWG', 'Aruban Florin', 0),
(9, 'AUD', 'Australian Dollar', 0),
(10, 'BSD', 'Bahamian Dollar', 0),
(11, 'BHD', 'Bahraini Dinar', 0),
(12, 'BDT', 'Bangladeshi Taka', 0),
(13, 'BBD', 'Barbados Dollar', 0),
(14, 'BZD', 'Belize Dollar', 0),
(15, 'BMD', 'Bermudian Dollar', 0),
(16, 'BTN', 'Bhutan Ngultrum', 0),
(17, 'BOB', 'Bolivian Boliviano', 0),
(18, 'BWP', 'Botswanian Pula', 0),
(19, 'BRL', 'Brazilian Real', 0),
(20, 'GBP', 'British Pound', 0),
(21, 'BND', 'Brunei Dollar', 0),
(22, 'BGN', 'Bulgarian Lev', 0),
(23, 'BUK', 'Burma Kyat', 0),
(24, 'BIF', 'Burundi Franc', 0),
(25, 'CAD', 'Canadian Dollar', 0),
(26, 'CVE', 'Cape Verde Escudo', 0),
(27, 'KYD', 'Cayman Islands Dollar', 0),
(28, 'CLP', 'Chilean Peso', 0),
(29, 'CLF', 'Chilean Unidades de Fomento', 0),
(30, 'COP', 'Colombian Peso', 0),
(31, 'XOF', 'Communauté Financière Africaine BCEAO - Francs', 0),
(32, 'XAF', 'Communauté Financière Africaine BEAC, Francs', 0),
(33, 'KMF', 'Comoros Franc', 0),
(34, 'XPF', 'Comptoirs Français du Pacifique Francs', 0),
(35, 'CRC', 'Costa Rican Colon', 0),
(36, 'CUP', 'Cuban Peso', 0),
(37, 'CYP', 'Cyprus Pound', 0),
(38, 'CZK', 'Czech Republic Koruna', 0),
(39, 'DKK', 'Danish Krone', 0),
(40, 'YDD', 'Democratic Yemeni Dinar', 0),
(41, 'DOP', 'Dominican Peso', 0),
(42, 'XCD', 'East Caribbean Dollar', 0),
(43, 'TPE', 'East Timor Escudo', 0),
(44, 'ECS', 'Ecuador Sucre', 0),
(45, 'EGP', 'Egyptian Pound', 0),
(46, 'SVC', 'El Salvador Colon', 0),
(47, 'EEK', 'Estonian Kroon (EEK)', 0),
(48, 'ETB', 'Ethiopian Birr', 0),
(49, 'EUR', 'Euro', 0),
(50, 'FKP', 'Falkland Islands Pound', 0),
(51, 'FJD', 'Fiji Dollar', 0),
(52, 'GMD', 'Gambian Dalasi', 0),
(53, 'GHC', 'Ghanaian Cedi', 0),
(54, 'GIP', 'Gibraltar Pound', 0),
(55, 'XAU', 'Gold, Ounces', 0),
(56, 'GTQ', 'Guatemalan Quetzal', 0),
(57, 'GNF', 'Guinea Franc', 0),
(58, 'GWP', 'Guinea-Bissau Peso', 0),
(59, 'GYD', 'Guyanan Dollar', 0),
(60, 'HTG', 'Haitian Gourde', 0),
(61, 'HNL', 'Honduran Lempira', 0),
(62, 'HKD', 'Hong Kong Dollar', 0),
(63, 'HUF', 'Hungarian Forint', 0),
(64, 'INR', 'Indian Rupee', 0),
(65, 'IDR', 'Indonesian Rupiah', 1),
(66, 'XDR', 'International Monetary Fund (IMF) Special Drawing Rights', 0),
(67, 'IRR', 'Iranian Rial', 0),
(68, 'IQD', 'Iraqi Dinar', 0),
(69, 'IEP', 'Irish Punt', 0),
(70, 'ILS', 'Israeli Shekel', 0),
(71, 'JMD', 'Jamaican Dollar', 0),
(72, 'JPY', 'Japanese Yen', 0),
(73, 'JOD', 'Jordanian Dinar', 0),
(74, 'KHR', 'Cambodian Riel', 0),
(75, 'KES', 'Kenyan Schilling', 0),
(76, 'KRW', 'South Korean Won', 0),
(77, 'KWD', 'Kuwaiti Dinar', 0),
(78, 'LAK', 'Lao Kip', 0),
(79, 'LBP', 'Lebanese Pound', 0),
(80, 'LSL', 'Lesotho Loti', 0),
(81, 'LRD', 'Liberian Dollar', 0),
(82, 'LYD', 'Libyan Dinar', 0),
(83, 'MOP', 'Macau Pataca', 0),
(84, 'MGF', 'Malagasy Franc', 0),
(85, 'MWK', 'Malawi Kwacha', 0),
(86, 'MYR', 'Malaysian Ringgit', 0),
(87, 'MVR', 'Maldive Rufiyaa', 0),
(88, 'MTL', 'Maltese Lira', 0),
(89, 'MRO', 'Mauritanian Ouguiya', 0),
(90, 'MUR', 'Mauritius Rupee', 0),
(91, 'MXP', 'Mexican Peso', 0),
(92, 'MNT', 'Mongolian Tugrik', 0),
(93, 'MAD', 'Moroccan Dirham', 0),
(94, 'MZM', 'Mozambique Metical', 0),
(95, 'NAD', 'Namibian Dollar', 0),
(96, 'NPR', 'Nepalese Rupee', 0),
(97, 'ANG', 'Netherlands Antillian Guilder', 0),
(98, 'YUD', 'New Yugoslavia Dinar', 0),
(99, 'NZD', 'New Zealand Dollar', 0),
(100, 'NIO', 'Nicaraguan Cordoba', 0),
(101, 'NGN', 'Nigerian Naira', 0),
(102, 'KPW', 'North Korean Won', 0),
(103, 'NOK', 'Norwegian Kroner', 0),
(104, 'OMR', 'Omani Rial', 0),
(105, 'PKR', 'Pakistan Rupee', 0),
(106, 'XPD', 'Palladium Ounces', 0),
(107, 'PAB', 'Panamanian Balboa', 0),
(108, 'PGK', 'Papua New Guinea Kina', 0),
(109, 'PYG', 'Paraguay Guarani', 0),
(110, 'PEN', 'Peruvian Nuevo Sol', 0),
(111, 'PHP', 'Philippine Peso', 0),
(112, 'XPT', 'Platinum, Ounces', 0),
(113, 'PLN', 'Polish Zloty', 0),
(114, 'QAR', 'Qatari Rial', 0),
(115, 'RON', 'Romanian Leu', 0),
(116, 'RUB', 'Russian Ruble', 0),
(117, 'RWF', 'Rwanda Franc', 0),
(118, 'WST', 'Samoan Tala', 0),
(119, 'STD', 'Sao Tome and Principe Dobra', 0),
(120, 'SAR', 'Saudi Arabian Riyal', 0),
(121, 'SCR', 'Seychelles Rupee', 0),
(122, 'SLL', 'Sierra Leone Leone', 0),
(123, 'XAG', 'Silver, Ounces', 0),
(124, 'SGD', 'Singapore Dollar', 0),
(125, 'SKK', 'Slovak Koruna', 0),
(126, 'SBD', 'Solomon Islands Dollar', 0),
(127, 'SOS', 'Somali Schilling', 0),
(128, 'ZAR', 'South African Rand', 0),
(129, 'LKR', 'Sri Lanka Rupee', 0),
(130, 'SHP', 'St. Helena Pound', 0),
(131, 'SDP', 'Sudanese Pound', 0),
(132, 'SRG', 'Suriname Guilder', 0),
(133, 'SZL', 'Swaziland Lilangeni', 0),
(134, 'SEK', 'Swedish Krona', 0),
(135, 'CHF', 'Swiss Franc', 0),
(136, 'SYP', 'Syrian Potmd', 0),
(137, 'TWD', 'Taiwan Dollar', 0),
(138, 'TZS', 'Tanzanian Schilling', 0),
(139, 'THB', 'Thai Baht', 0),
(140, 'TOP', 'Tongan Paanga', 0),
(141, 'TTD', 'Trinidad and Tobago Dollar', 0),
(142, 'TND', 'Tunisian Dinar', 0),
(143, 'TRY', 'Turkish Lira', 0),
(144, 'UGX', 'Uganda Shilling', 0),
(145, 'AED', 'United Arab Emirates Dirham', 0),
(146, 'UYU', 'Uruguayan Peso', 0),
(147, 'USD', 'US Dollar', 0),
(148, 'VUV', 'Vanuatu Vatu', 0),
(149, 'VEF', 'Venezualan Bolivar', 0),
(150, 'VND', 'Vietnamese Dong', 0),
(151, 'YER', 'Yemeni Rial', 0),
(152, 'CNY', 'Yuan (Chinese) Renminbi', 0),
(153, 'ZRZ', 'Zaire Zaire', 0),
(154, 'ZMK', 'Zambian Kwacha', 0),
(155, 'ZWD', 'Zimbabwe Dollar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_employee`
--

CREATE TABLE `f_employee` (
  `EM_ID` int(10) NOT NULL,
  `EM_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EM_EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EM_USERID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EM_PASSWORD` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EM_STATUS` int(1) NOT NULL DEFAULT '1',
  `EM_ACTIVATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `EM_ADDRESS` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ID_KABUPATEN` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '275',
  `ID_PROVINSI` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '16',
  `EM_MAC_ADDR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EM_PHONE_NUMBER` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `EM_IDENTITYCODE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `EM_ABOUT_ME` text COLLATE utf8_unicode_ci NOT NULL,
  `TR_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `OU_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LV_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_employee`
--

INSERT INTO `f_employee` (`EM_ID`, `EM_NAME`, `EM_EMAIL`, `EM_USERID`, `EM_PASSWORD`, `EM_STATUS`, `EM_ACTIVATED_ON`, `EM_ADDRESS`, `ID_KABUPATEN`, `ID_PROVINSI`, `EM_MAC_ADDR`, `EM_PHONE_NUMBER`, `EM_IDENTITYCODE`, `EM_ABOUT_ME`, `TR_ID`, `OU_ID`, `LV_ID`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Ravi Vendra R', 'ravi.vendra@telkom.co.id', 'ravivendra', '7caabc5b4d805224d6ffb7ed3aad00eb2aeeb26c', 1, '0000-00-00 00:00:00', 'Jl. Demuk, RT 01 RW 02, Ds. Tenggong, Kec. Rejotangan', '275', '16', '', '+6281398988448', '23072016', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '2', '', '3', '2016-05-31 10:25:13', 'DANRA', '2016-05-31 04:22:45', ''),
(2, 'Agnestia Dian', 'agnestiananing@gmail.com', 'agnestiadian', 'ec0368fa99698189e61f066af13461c750ff37b3', 1, '2016-06-01 13:59:52', 'Jl. Raya Blitar, Rejotangan, Kec. Rejotangan', '275', '16', '', '+6281398988448', '23072016', '', '', '1', '2', '2016-06-01 13:59:52', 'DANRA', '2016-06-01 07:00:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_kabkota`
--

CREATE TABLE `f_kabkota` (
  `ID_KABUPATEN` int(10) NOT NULL,
  `NAMA_KABUPATEN` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `KODE_KABUPATEN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '1',
  `ID_PROVINSI` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_kabkota`
--

INSERT INTO `f_kabkota` (`ID_KABUPATEN`, `NAMA_KABUPATEN`, `KODE_KABUPATEN`, `STATUS`, `ID_PROVINSI`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Kepala Daerah Provinsi NAD', '3200', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(2, 'Kab. Aceh Besar ', '3201', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(3, 'Kab. Pidie ', '3202', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(4, 'Kab. Aceh Utara ', '3203', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(5, 'Kab. Aceh Timur ', '3204', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(6, 'Kab. Aceh Selatan ', '3205', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(7, 'Kab. Aceh Barat ', '3206', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(8, 'Kab. Aceh Tengah ', '3207', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(9, 'Kab. Aceh Tenggara ', '3208', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(10, 'Kab. Aceh Singkil     ', '3209', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(11, 'Kab. Aceh Jeumpa', '3210', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(12, 'Kab. Aceh Tamiang', '3211', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(13, 'Kab. Gayo Luwes', '3212', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(14, 'Kab. Aceh Barat Daya', '3213', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(15, 'Kab. Aceh Jaya', '3214', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(16, 'Kab. Nagan Raya', '3215', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(17, 'Kab. Simeuleu', '3216', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(18, 'Kab. Bener Meriah', '3217', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(19, 'Kab. Pidie Jaya', '3218', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(20, 'Kab. Subulussalam', '3219', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(21, 'Kota Banda Aceh ', '3291', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(22, 'Kota Sabang', '3292', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(23, 'Kota Lhokseumawe ', '3293', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(24, 'Kota Langsa   ', '3294', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(25, 'Kab./Kota Lainnya', '3288', 1, '1', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(26, 'Kepala Daerah Provinsi Sumatera Utara', '3300', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(27, 'Kab. Deli Serdang ', '3301', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(28, 'Kab. Langkat ', '3302', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(29, 'Kab.  Karo ', '3303', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(30, 'Kab. Simalungun', '3304', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(31, 'Kab. Labuhan Batu ', '3305', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(32, 'Kab. Asahan ', '3306', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(33, 'Kab. Dairi ', '3307', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(34, 'Kab. Tapanuli Utara ', '3308', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(35, 'Kab. Tapanuli Tengah ', '3309', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(36, 'Kab. Tapanuli Selatan ', '3310', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(37, 'Kab. Nias ', '3311', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(38, 'Kab. Toba Samosir    ', '3313', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(39, 'Kab. Mandailing Natal  ', '3314', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(40, 'Kab. Nias Selatan', '3315', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(41, 'Kab. Humbang Hasundutan', '3316', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(42, 'Kab. Pakpak Bharat', '3317', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(43, 'Kab. Samosir', '3318', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(44, 'Kab. Serdang Bedagai', '3319', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(45, 'Kab. Batu Bara', '3321', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(46, 'Kab. Padang Lawas', '3322', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(47, 'Kab. Padang Lawas Utara', '3323', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(48, 'Kab. Labuanbatu Selatan ', '3324', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(49, 'Kab. Labuanbatu Utara', '3325', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(50, 'Kota Tebing Tinggi ', '3391', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(51, 'Kota Binjai ', '3392', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(52, 'Kota Pematang Siantar ', '3393', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(53, 'Kota Tanjung Balai ', '3394', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(54, 'Kota Sibolga', '3395', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(55, 'Kota Medan ', '3396', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(56, 'Kota Padang Sidempuan ', '3399', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(57, 'Kab/Kota Lainnya', '3388', 1, '2', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(58, 'Kepala Daerah Provinsi Sumatera Barat', '3400', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(59, 'Kab. Agam ', '3401', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(60, 'Kab. Pasaman ', '3402', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(61, 'Kab. Limapuluh Kota', '3403', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(62, 'Kab. Solok Selatan', '3404', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(63, 'Kab. Padang Pariaman ', '3405', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(64, 'Kab. Pesisir Selatan ', '3406', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(65, 'Kab. Tanah Datar ', '3407', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(66, 'Kab. Sijunjung', '3408', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(67, 'Kab. Kepulauan Mentawai   ', '3409', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(68, 'Kab. Pasaman Barat', '3410', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(69, 'Kab. Dharmasraya', '3411', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(70, 'Kab. Solok', '3412', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(71, 'Kota Bukittinggi ', '3491', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(72, 'Kota Padang', '3492', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(73, 'Kota Sawahlunto', '3493', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(74, 'Kota Padang Panjang ', '3494', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(75, 'Kota Solok ', '3495', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(76, 'Kota Payakumbuh ', '3496', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(77, 'Kota Pariaman ', '3497', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(78, 'Kab/Kota Lainnya', '3488', 1, '3', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(79, 'Kepala Daerah Provinsi Riau', '3500', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(80, 'Kab. Kampar', '3501', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(81, 'Kab. Bengkalis ', '3502', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(82, 'Kab. Indragiri Hulu ', '3504', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(83, 'Kab. Indragiri Hilir', '3505', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(84, 'Kab. Rokan Hulu', '3508', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(85, 'Kab. Rokan Hilir   ', '3509', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(86, 'Kab. Pelalawan  ', '3510', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(87, 'Kab. Siak ', '3511', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(88, 'Kab. Kuantan Singingi   ', '3512', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(89, 'Kab. Kepulauan Meranti', '3513', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(90, 'Kota Pekanbaru ', '3591', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(91, 'Kota Dumai ', '3592', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(92, 'Kab./Kota Lainnya', '3588', 1, '4', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(93, 'Kepala Daerah Provinsi Jambi', '3100', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(94, 'Kab. Batanghari ', '3101', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(95, 'Kab. Sarolangun', '3104', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(96, 'Kab. Kerinci ', '3105', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(97, 'Kab. Muaro Jambi   ', '3106', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(98, 'Kab. Tanjung Jabung Barat      ', '3107', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(99, 'Kab. Tanjung Jabung Timur     ', '3108', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(100, 'Kab. Tebo  ', '3109', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(101, 'Kab. Merangin   ', '3111', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(102, 'Kab. Bungo', '3112', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(103, 'Kota Jambi ', '3191', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(104, 'Kab./Kota Lainnya', '3188', 1, '5', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(105, 'Kepala Daerah Provinsi Sumatera Selatan', '3600', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(106, 'Kab. Musi Banyuasin ', '3606', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(107, 'Kab. Ogan Komering Ulu ', '3607', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(108, 'Kab. Lematang Ilir Ogan Tengah (Muara Enim) ', '3608', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(109, 'Kab. Lahat', '3609', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(110, 'Kab. Musi Rawas ', '3610', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(111, 'Kab. Ogan Komering Ilir ', '3611', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(112, 'Kab. Banyuasin', '3613', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(113, 'Kab. Ogan Komeing Ulu Selatan', '3614', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(114, 'Kab. Ogan Komeing Ulu Timur', '3615', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(115, 'Kab. Ogan Ilir', '3616', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(116, 'Kab. Empat Lawang', '3617', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(117, 'Kota Palembang ', '3691', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(118, 'Kota Lubuklinggau ', '3693', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(119, 'Kota Prabumulih ', '3694', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(120, 'Kota Pagar Alam   ', '3697', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(121, 'Kab./Kota Lainnya', '3688', 1, '6', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(122, 'Kepala Daerah Provinsi Bengkulu', '2300', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(123, 'Kab. Bengkulu Selatan', '2301', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(124, 'Kab. Bengkulu Utara ', '2302', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(125, 'Kab. Rejang Lebong ', '2303', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(126, 'Kab. Lebong', '2304', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(127, 'Kab. Kepahiang', '2305', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(128, 'Kab. Mukomuko', '2306', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(129, 'Kab. Seluma', '2307', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(130, 'Kab. Kaur', '2308', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(131, 'Kab. Bengkulu Tengah', '2309', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(132, 'Kota Bengkulu ', '2391', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(133, 'Kab./Kota Lainnya', '2388', 1, '7', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(134, 'Kepala Daerah Provinsi Lampung', '3900', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(135, 'Kab. Lampung Selatan ', '3901', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(136, 'Kab. Lampung Tengah ', '3902', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(137, 'Kab. Lampung Utara ', '3903', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(138, 'Kab. Lampung Barat ', '3904', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(139, 'Kab. Tulang Bawang ', '3905', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(140, 'Kab. Tanggamus ', '3906', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(141, 'Kab.  Lampung Timur', '3907', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(142, 'Kab.  Way Kanan', '3908', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(143, 'Kab. Pesawaran', '3909', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(144, 'Kab. Pringsewu', '3910', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(145, 'Kab. Tulang Bawang Barat', '3911', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(146, 'Kab. Mesuji', '3912', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(147, 'Kota Bandar Lampung ', '3991', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(148, 'Kota  Metro ', '3992', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(149, 'Kab./Kota Lainnya', '3988', 1, '8', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(150, 'Kepala Daerah Provinsi Kep. Bangka Belitung', '3700', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(151, 'Kab. Bangka ', '3701', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(152, 'Kab. Belitung', '3702', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(153, 'Kab. Bangka Barat', '3703', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(154, 'Kab. Bangka Selatan', '3704', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(155, 'Kab. Bangka Tengah', '3705', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(156, 'Kab. Belitung Timur ', '3706', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(157, 'Kota Pangkal Pinang ', '3791', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(158, 'Kab./Kota Lainnya', '3788', 1, '9', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(159, 'Kepala Daerah Provinsi Kep. Riau', '3800', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(160, 'Kab. Karimun', '3801', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(161, 'Kab. Lingga', '3802', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(162, 'Kab. Natuna', '3803', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(163, 'Kab. Bintan', '3804', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(164, 'Kab. Anambas', '3805', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(165, 'Kota Tanjung Pinang ', '3891', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(166, 'Kota Batam', '3892', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(167, 'Kab./Kota Lainnya', '3888', 1, '10', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(168, 'Kepala Daerah Provinsi Banten', '0200', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(169, 'Kab. Lebak ', '0201', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(170, 'Kab. Pandeglang ', '0202', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(171, 'Kab. Serang   ', '0203', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(172, 'Kab. Tangerang ', '0204', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(173, 'Kota Cilegon', '0291', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(174, 'Kota Tangerang ', '0292', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(175, 'Kota Serang', '0293', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(176, 'Kota Tangerang Selatan', '0294', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(177, 'Kab./Kota Lainnya', '0288', 1, '11', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(178, 'Kepala Daerah DKI Jaya', '0300', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(179, 'Wil. Kota Jakarta Pusat ', '0391', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(180, 'Wil. Kota Jakarta Utara ', '0392', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(181, 'Wil. Kota Jakarta Barat ', '0393', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(182, 'Wil. Kota Jakarta Selatan', '0394', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(183, 'Wil. Kota Jakarta Timur ', '0395', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(184, 'Wil. Kepulauan Seribu', '0396', 1, '12', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(185, 'Kepala Daerah Provinsi Jawa Barat', '0100', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(186, 'Kab. Bekasi ', '0102', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(187, 'Kab. Purwakarta ', '0103', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(188, 'Kab. Karawang', '0106', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(189, 'Kab. Bogor ', '0108', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(190, 'Kab. Sukabumi ', '0109', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(191, 'Kab. Cianjur ', '0110', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(192, 'Kab. Bandung ', '0111', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(193, 'Kab. Sumedang', '0112', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(194, 'Kab. Tasikmalaya', '0113', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(195, 'Kab. Garut ', '0114', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(196, 'Kab. Ciamis ', '0115', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(197, 'Kab. Cirebon ', '0116', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(198, 'Kab. Kuningan ', '0117', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(199, 'Kab. Indramayu ', '0118', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(200, 'Kab. Majalengka ', '0119', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(201, 'Kab. Subang ', '0121', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(202, 'Kab. Bandung Barat', '0122', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(203, 'Kota Bandung ', '0191', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(204, 'Kota Bogor ', '0192', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(205, 'Kota Sukabumi ', '0193', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(206, 'Kota Cirebon ', '0194', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(207, 'Kota Tasikmalaya ', '0195', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(208, 'Kota Cimahi ', '0196', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(209, 'Kota Depok ', '0197', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(210, 'Kota Bekasi ', '0198', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(211, 'Kota Banjar', '0180', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(212, 'Kab./Kota Lainnya', '0188', 1, '13', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(213, 'Kepala Daerah Provinsi Jawa Tengah', '0900', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(214, 'Kab. Semarang', '0901', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(215, 'Kab. Kendal ', '0902', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(216, 'Kab. Demak ', '0903', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(217, 'Kab. Grobogan ', '0904', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(218, 'Kab. Pekalongan ', '0905', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(219, 'Kab. Tegal ', '0906', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(220, 'Kab. Brebes ', '0907', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(221, 'Kab. Pati ', '0908', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(222, 'Kab. Kudus ', '0909', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(223, 'Kab. Pemalang ', '0910', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(224, 'Kab. Jepara ', '0911', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(225, 'Kab. Rembang ', '0912', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(226, 'Kab. Blora ', '0913', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(227, 'Kab. Banyumas ', '0914', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(228, 'Kab. Cilacap ', '0915', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(229, 'Kab. Purbalingga ', '0916', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(230, 'Kab. Banjarnegara ', '0917', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(231, 'Kab. Magelang ', '0918', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(232, 'Kab. Temanggung ', '0919', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(233, 'Kab. Wonosobo ', '0920', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(234, 'Kab. Purworejo ', '0921', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(235, 'Kab. Kebumen ', '0922', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(236, 'Kab. Klaten ', '0923', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(237, 'Kab. Boyolali ', '0924', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(238, 'Kab. Sragen ', '0925', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(239, 'Kab. Sukoharjo ', '0926', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(240, 'Kab. Karanganyar ', '0927', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(241, 'Kab. Wonogiri ', '0928', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(242, 'Kab. Batang ', '0929', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(243, 'Kota Semarang ', '0991', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(244, 'Kota Salatiga ', '0992', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(245, 'Kota Pekalongan ', '0993', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(246, 'Kota Tegal ', '0994', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(247, 'Kota Magelang ', '0995', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(248, 'Kota Surakarta/Solo ', '0996', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(249, 'Kab./Kota Lainnya', '0988', 1, '14', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(250, 'Kepala Daerah D.I Yogyakarta', '0500', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(251, 'Kab. Bantul', '0501', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(252, 'Kab. Sleman ', '0502', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(253, 'Kab. Gunung Kidul ', '0503', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(254, 'Kab. Kulon Progo ', '0504', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(255, 'Kota Yogyakarta', '0591', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(256, 'Kab./Kota Lainnya', '0588', 1, '15', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(257, 'Kepala Daerah Provinsi Jawa Timur', '1200', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(258, 'Kab. Gresik', '1201', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(259, 'Kab. Sidoarjo ', '1202', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(260, 'Kab. Mojokerto ', '1203', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(261, 'Kab. Jombang ', '1204', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(262, 'Kab. Sampang ', '1205', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(263, 'Kab. Pamekasan ', '1206', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(264, 'Kab. Sumenep ', '1207', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(265, 'Kab. Bangkalan ', '1208', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(266, 'Kab. Bondowoso ', '1209', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(267, 'Kab. Banyuwangi ', '1211', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(268, 'Kab. Jember', '1212', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(269, 'Kab. Malang ', '1213', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(270, 'Kab. Pasuruan ', '1214', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(271, 'Kab. Probolinggo ', '1215', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(272, 'Kab. Lumajang ', '1216', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(273, 'Kab. Kediri ', '1217', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(274, 'Kab. Nganjuk ', '1218', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(275, 'Kab. Tulungagung ', '1219', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(276, 'Kab. Trenggalek ', '1220', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(277, 'Kab. Blitar ', '1221', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(278, 'Kab. Madiun ', '1222', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(279, 'Kab. Ngawi ', '1223', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(280, 'Kab. Magetan ', '1224', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(281, 'Kab. Ponorogo ', '1225', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(282, 'Kab. Pacitan ', '1226', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(283, 'Kab. Bojonegoro ', '1227', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(284, 'Kab. Tuban ', '1228', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(285, 'Kab. Lamongan ', '1229', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(286, 'Kab. Situbondo ', '1230', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(287, 'Kota Surabaya ', '1291', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(288, 'Kota Mojokerto ', '1292', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(289, 'Kota Malang ', '1293', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(290, 'Kota Pasuruan ', '1294', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(291, 'Kota Probolinggo ', '1295', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(292, 'Kota Blitar ', '1296', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(293, 'Kota Kediri ', '1297', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(294, 'Kota Madiun ', '1298', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(295, 'Kota Batu', '1271', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(296, 'Kab./Kota Lainnya', '1288', 1, '16', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(297, 'Kepala Daerah Provinsi Kalimantan Barat', '5300', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(298, 'Kab. Pontianak ', '5301', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(299, 'Kab. Sambas ', '5302', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(300, 'Kab. Ketapang ', '5303', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(301, 'Kab. Sanggau ', '5304', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(302, 'Kab. Sintang ', '5305', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(303, 'Kab. Kapuas Hulu ', '5306', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(304, 'Kab. Bengkayang    ', '5307', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(305, 'Kab. Landak   ', '5308', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(306, 'Kab. Sekadau', '5309', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(307, 'Kab. Melawi', '5310', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(308, 'Kab. Kayong Utara', '5311', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(309, 'Kab. Kubu Raya', '5312', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(310, 'Kota Pontianak ', '5391', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(311, 'Kota Singkawang ', '5392', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(312, 'Kab./Kota Lainnya', '5388', 1, '17', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(313, 'Kepala Daerah Provinsi Kalimantan Tengah', '5800', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(314, 'Kab. Kapuas ', '5801', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(315, 'Kab. Kotawaringin Barat ', '5802', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(316, 'Kab. Kotawaringin Timur', '5803', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(317, 'Kab. Barito Selatan ', '5806', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(318, 'Kab. Barito Utara', '5808', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(319, 'Kab. Murung Raya', '5804', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(320, 'Kab. Barito Timur', '5805', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(321, 'Kab. Gunung Mas', '5807', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(322, 'Kab. Pulang Pisau', '5809', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(323, 'Kab. Seruyan', '5810', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(324, 'Kab. Katingan', '5811', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(325, 'Kab. Sukamara', '5812', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(326, 'Kab. Lamandau', '5813', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(327, 'Kota Palangkaraya ', '5892', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(328, 'Kab./Kota Lainnya', '5888', 1, '18', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(329, 'Kepala Daerah Provinsi Kalimantan Selatan', '5100', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(330, 'Kab. Banjar ', '5101', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(331, 'Kab. Tanah Laut ', '5102', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(332, 'Kab. Tapin ', '5103', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(333, 'Kab. Hulu Sungai Selatan', '5104', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(334, 'Kab. Hulu Sungai Tengah ', '5105', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(335, 'Kab. Hulu Sungai Utara ', '5106', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(336, 'Kab. Barito Kuala ', '5107', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(337, 'Kab. Kota Baru ', '5108', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(338, 'Kab. Tabalong', '5109', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(339, 'Kab.Tanah Bumbu', '5110', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(340, 'Kab. Balangan', '5111', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(341, 'Kota Banjarmasin ', '5191', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(342, 'Kota Banjarbaru ', '5192', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(343, 'Kab./Kota Lainnya', '5188', 1, '19', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(344, 'Kepala Daerah Provinsi Kalimantan Timur', '5400', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(345, 'Kab. Kutai Kartanegara', '5401', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(346, 'Kab. Berau ', '5402', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(347, 'Kab. Pasir', '5403', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(348, 'Kab. Bulungan ', '5404', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(349, 'Kab. Kutai Barat   ', '5405', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(350, 'Kab. Kutai Timur ', '5406', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(351, 'Kab. Nunukan', '5409', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(352, 'Kab. Malinau', '5410', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(353, 'Kab. Penajam Paser Utara', '5411', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(354, 'Kab. Tana Tidung', '5412', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(355, 'Kota Samarinda ', '5491', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(356, 'Kota Balikpapan ', '5492', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(357, 'Kota Tarakan ', '5493', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(358, 'Kota Bontang ', '5494', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(359, 'Kab./Kota Lainnya', '5488', 1, '20', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(360, 'Kepala Daerah Provinsi Sulawesi Utara', '6200', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(361, 'Kab. Minahasa ', '6202', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(362, 'Kab. Bolaang Mongondow ', '6203', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(363, 'Kab. Kepulauan Sangihe ', '6204', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(364, 'Kab. kepulauan Talaud ', '6205', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(365, 'Kab. Minahasa Selatan ', '6206', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(366, 'Kab. Minahasa Utara', '6207', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(367, 'Kab. Minahasa Tenggara', '6209', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(368, 'Kab. Bolaang Mongondow Utara', '6210', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(369, 'Kab. Kepulauan Sitaro', '6211', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(370, 'Kab. Bolaang Mongondow Selatan', '6212', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(371, 'Kab. Bolaang Mongondow Timur', '6213', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(372, 'Kota Manado ', '6291', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(373, 'Kota Kotamobagu', '6292', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(374, 'Kota Bitung ', '6293', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(375, 'Kota. Tomohon', '6294', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(376, 'Kab./Kota Lainnya', '6288', 1, '22', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(377, 'Kepala Daerah Provinsi Gorontalo', '6300', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(378, 'Kab. Gorontalo ', '6301', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(379, 'Kab. Bualemo   ', '6302', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(380, 'Kab. Bonebolango', '6303', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(381, 'Kab. Pohuwato', '6304', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(382, 'Kab. Gorontalo Utara', '6305', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(383, 'Kota Gorontalo ', '6391', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(384, 'Kab./Kota Lainnya', '6388', 1, '23', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(385, 'Kepala Daerah Provinsi Sulawesi Tengah', '6000', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(386, 'Kab. Donggala ', '6001', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(387, 'Kab. Poso ', '6002', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(388, 'Kab. Banggai ', '6003', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(389, 'Kab. Toli-Toli', '6004', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(390, 'Kab.Banggai Kepulauan   ', '6005', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(391, 'Kab. Morowali  ', '6006', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(392, 'Kab. Buol    ', '6007', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(393, 'Kab. Tojo Una-Una', '6008', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(394, 'Kab. Parigi Moutong', '6009', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(395, 'Kab. Sigi ', '6010', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(396, 'Kota Palu ', '6091', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(397, 'Kab./Kota Lainnya', '6088', 1, '24', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(398, 'Kepala Daerah Provinsi  Sulawesi Barat', '6400', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(399, 'Kab. Polewali Mandar', '6401', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(400, 'Kab. Majene ', '6402', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(401, 'Kab. Mamasa ', '6403', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(402, 'Kab. Mamuju Utara', '6404', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(403, 'Kota Mamuju', '6491', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(404, 'Kab./Kota Lainnya', '6488', 1, '25', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(405, 'Kepala Daerah Provinsi Sulawesi Selatan', '6100', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(406, 'Kab. Pinrang ', '6101', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(407, 'Kab. Gowa ', '6102', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(408, 'Kab. Wajo ', '6103', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(409, 'Kab. Bone ', '6105', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(410, 'Kab. Tana Toraja ', '6106', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(411, 'Kab. Maros ', '6107', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(412, 'Kab. Luwu', '6109', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(413, 'Kab. Sinjai ', '6110', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(414, 'Kab. Bulukumba ', '6111', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(415, 'Kab. Bantaeng ', '6112', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(416, 'Kab. Jeneponto ', '6113', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(417, 'Kab. Selayar ', '6114', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(418, 'Kab. Takalar ', '6115', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(419, 'Kab. Barru ', '6116', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(420, 'Kab. Sidenreng Rappang ', '6117', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(421, 'Kab. Pangkajene Kepulauan ', '6118', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(422, 'Kab. Soppeng (d/h Watansoppeng) ', '6119', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(423, 'Kab. Enrekang ', '6121', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(424, 'Kab. Luwu Timur (d/h Luwu Selatan)', '6122', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(425, 'Kab. Luwu Utara  ', '6124', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(426, 'Kab. Toraja Utara', '6125', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(427, 'Kota Makassar', '6191', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(428, 'Kota Pare-Pare ', '6192', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(429, 'Kota Palopo', '6193', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(430, 'Kab./Kota Lainnya', '6188', 1, '26', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(431, 'Kepala Daerah Provinsi Sulawesi Tenggara', '6900', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(432, 'Kab. Buton ', '6901', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(433, 'Kab. Muna ', '6903', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(434, 'Kab. Kolaka ', '6904', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(435, 'Kab. Wakatobi', '6905', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(436, 'Kab. Konawe', '6906', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(437, 'Kab. Konawe Selatan ', '6907', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(438, 'Kab. Bombana', '6908', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(439, 'Kab. Kolaka Utara', '6909', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(440, 'Kab. Buton Utara', '6910', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(441, 'Kab. Konawe Utara', '6911', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(442, 'Kota Bau-Bau ', '6990', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(443, 'Kota Kendari ', '6991', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(444, 'Kab./Kota Lainnya', '6988', 1, '27', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(445, 'Kepala Daerah Provinsi Maluku', '8100', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(446, 'Kab. Maluku Tengah ', '8101', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(447, 'Kab. Maluku Tenggara ', '8102', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(448, 'Kab. Maluku Tenggara Barat', '8103', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(449, 'Kab. Buru', '8104', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(450, 'Kab. Seram Bagian Barat', '8105', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(451, 'Kab. Seram Bagian Timur', '8106', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(452, 'Kab. Kepulauan Aru', '8107', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(453, 'Kab. Maluku Barat Daya ', '8108', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(454, 'Kab. Buru Selatan', '8109', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(455, 'Kota Ambon ', '8191', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(456, 'Kota Tual', '8192', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(457, 'Kab./Kota Lainnya', '8188', 1, '28', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(458, 'Kepala Daerah Provinsi Maluku Utara', '8300', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(459, 'Kab. Halmahera Tengah  ', '8302', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(460, 'Kab. Halmahera Utara', '8303', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(461, 'Kab. Halmahera Timur', '8304', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(462, 'Kab. Halmahera Barat', '8305', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(463, 'Kab. Halmahera Selatan', '8306', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(464, 'Kab. Kepulauan Sula', '8307', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(465, 'Kab. Pulau Morotai', '8308', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(466, 'Kota Ternate   ', '8390', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(467, 'Kota Tidore Kepulauan', '8391', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(468, 'Kab./Kota Lainnya', '8388', 1, '29', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(469, 'Kepala Daerah Provinsi Bali', '7200', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(470, 'Kab. Buleleng ', '7201', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(471, 'Kab. Jembrana ', '7202', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(472, 'Kab. Tabanan ', '7203', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(473, 'Kab. Badung', '7204', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(474, 'Kab. Gianyar ', '7205', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(475, 'Kab. Klungkung ', '7206', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(476, 'Kab. Bangli ', '7207', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(477, 'Kab. Karangasem ', '7208', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(478, 'Kota Denpasar ', '7291', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(479, 'Kab./Kota Lainnya', '7288', 1, '30', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(480, 'Kepala Daerah Provinsi Nusa Tenggara Barat', '7100', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(481, 'Kab. Lombok Barat ', '7101', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(482, 'Kab. Lombok Tengah ', '7102', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(483, 'Kab. Lombok Timur ', '7103', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(484, 'Kab. Sumbawa ', '7104', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(485, 'Kab. Bima ', '7105', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(486, 'Kab. Dompu ', '7106', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(487, 'Kab. Sumbawa Barat', '7107', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(488, 'Kab. Lombok Utara', '7108', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(489, 'Kota Mataram ', '7191', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(490, 'Kota. Bima', '7192', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(491, 'Kab./Kota Lainnya', '7188', 1, '31', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', '');
INSERT INTO `f_kabkota` (`ID_KABUPATEN`, `NAMA_KABUPATEN`, `KODE_KABUPATEN`, `STATUS`, `ID_PROVINSI`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(492, 'Kepala Daerah Provinsi Nusa Tenggara Timur', '7400', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(493, 'Kab. Kupang ', '7401', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(494, 'Kab. Timor-Tengah Selatan ', '7402', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(495, 'Kab. Timor-Tengah Utara ', '7403', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(496, 'Kab. Belu ', '7404', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(497, 'Kab. Alor ', '7405', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(498, 'Kab. Flores Timur ', '7406', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(499, 'Kab. Sikka ', '7407', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(500, 'Kab. Ende ', '7408', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(501, 'Kab. Ngada ', '7409', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(502, 'Kab. Manggarai ', '7410', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(503, 'Kab. Sumba Timur', '7411', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(504, 'Kab. Sumba Barat ', '7412', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(505, 'Kab. Lembata', '7413', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(506, 'Kab. Rote', '7414', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(507, 'Kab. Manggarai Barat', '7415', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(508, 'Kab. Sumba Tengah', '7416', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(509, 'Kab. Sumba Barat Daya', '7417', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(510, 'Kab. Manggarai Timur', '7418', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(511, 'Kab. Nagekeo', '7419', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(512, 'Kab. Raijua', '7420', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(513, 'Kota Kupang ', '7491', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(514, 'Kab./Kota Lainnya', '7488', 1, '32', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(515, 'Kepala Daerah Provinsi Papua', '8200', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(516, 'Kab. Jayapura ', '8201', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(517, 'Kab. Biak Numfor ', '8202', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(518, 'Kab. Yapen-Waropen ', '8210', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(519, 'Kab. Merauke ', '8211', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(520, 'Kab. Paniai ', '8212', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(521, 'Kab. Jayawijaya ', '8213', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(522, 'Kab. Nabire', '8214', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(523, 'Kab. Mimika', '8215', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(524, 'Kab. Puncak Jaya', '8216', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(525, 'Kab. Sarmi', '8217', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(526, 'Kab. Keerom', '8218', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(527, 'Kab. Pegunungan Bintang', '8221', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(528, 'Kab. Yahukimo', '8222', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(529, 'Kab. Tolikara', '8223', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(530, 'Kab. Waropen', '8224', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(531, 'Kab. Boven Digoel', '8226', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(532, 'Kab. Mappi', '8227', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(533, 'Kab. Asmat', '8228', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(534, 'Kab. Supiori', '8231', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(535, 'Kab. Mamberamo Raya', '8232', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(536, 'Kab. Dogiyai', '8233', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(537, 'Kab. Lanny Jaya', '8234', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(538, 'Kab. Mamberamo Tengah', '8235', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(539, 'Kab. Nduga Tengah', '8236', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(540, 'Kab. Yalimo', '8237', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(541, 'Kab. Puncak ', '8238', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(542, 'Kab. Intan Jaya', '8239', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(543, 'Kota Jayapura ', '8291', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(544, 'Kab./Kota Lainnya', '8288', 1, '33', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(545, 'Kepala Daerah Provinsi Papua Barat', '8400', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(546, 'Kab. Sorong ', '8401', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(547, 'Kab. Fak-Fak ', '8402', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(548, 'Kab. Manokwari ', '8403', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(549, 'Kab. Sorong Selatan', '8404', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(550, 'Kab. Raja Ampat', '8405', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(551, 'Kab. Kaimana', '8406', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(552, 'Kab. Teluk Bintuni', '8407', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(553, 'Kab. Teluk Wondama', '8408', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(554, 'Kab. Tembrauw', '8409', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(555, 'Kota Sorong', '8491', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', ''),
(556, 'Kab./Kota Lainnya', '8488', 1, '34', '2016-02-15 09:00:51', 'DANRA', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_leveling`
--

CREATE TABLE `f_leveling` (
  `LV_ID` int(10) NOT NULL,
  `LV_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LV_TYPE` enum('FRONT','ADMIN') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ADMIN',
  `LV_DESCRIPTION` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_leveling`
--

INSERT INTO `f_leveling` (`LV_ID`, `LV_NAME`, `LV_TYPE`, `LV_DESCRIPTION`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Administrator', 'ADMIN', 'Level user untuk administrator di back end', '2016-05-29 19:27:04', 'DANRA', '2016-05-29 12:27:04', ''),
(2, 'Supervisor', 'FRONT', 'Level user untuk Supervisor Plasa Telkom', '2016-05-29 19:27:04', 'DANRA', '2016-05-29 12:27:04', ''),
(3, 'Front Liner', 'FRONT', 'Level User untuk Frontliner di Plasa Telkom', '2016-05-29 19:27:04', 'DANRA', '2016-05-29 12:27:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_negara`
--

CREATE TABLE `f_negara` (
  `ID_NEGARA` mediumint(5) NOT NULL,
  `NAMA_NEGARA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `KODE_INT_NEGARA` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `KODE_ISO3166_A2_NEGARA` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `KODE_ISO3166_A3_NEGARA` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `KODE_ISO3166_NUM_NEGARA` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `BENDERA_NEGARA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ACTIVE` int(1) NOT NULL DEFAULT '0',
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_negara`
--

INSERT INTO `f_negara` (`ID_NEGARA`, `NAMA_NEGARA`, `KODE_INT_NEGARA`, `KODE_ISO3166_A2_NEGARA`, `KODE_ISO3166_A3_NEGARA`, `KODE_ISO3166_NUM_NEGARA`, `BENDERA_NEGARA`, `ACTIVE`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Afghanistan', '93', 'AF', 'AFG', '004', 'af.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(2, 'Albania', '355', 'AL', 'ALB', '008', 'al.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(3, 'Algeria', '213', 'DZ', 'DZA', '012', 'dz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(4, 'American Samoa', '1684', 'AS', 'ASM', '016', 'as.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(5, 'Andorra', '376', 'AD', 'AND', '020', 'ad.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(6, 'Angola', '244', 'AO', 'AGO', '024', 'ao.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(7, 'Anguilla', '1264', 'AI', 'AIA', '660', 'ai.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(8, 'Antarctica', '672', 'AQ', 'ATA', '010', 'aq.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(9, 'Antigua and Barbuda', '1268', 'AG', 'ATG', '028', 'ag.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(10, 'Argentina', '54', 'AR', 'ARG', '032', 'ar.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(11, 'Armenia', '374', 'AM', 'ARM', '051', 'am.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(12, 'Aruba', '297', 'AW', 'ABW', '533', 'aw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(13, 'Australia', '61', 'AU', 'AUS', '036', 'au.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(14, 'Austria', '43', 'AT', 'AUT', '040', 'at.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(15, 'Azerbaijan', '994', 'AZ', 'AZE', '031', 'az.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(16, 'Bahamas', '1242', 'BS', 'BHS', '044', 'bs.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(17, 'Bahrain', '973', 'BH', 'BHR', '048', 'bh.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(18, 'Bangladesh', '880', 'BD', 'BGD', '050', 'bd.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(19, 'Barbados', '1246', 'BB', 'BRB', '052', 'bb.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(20, 'Belarus', '375', 'BY', 'BLR', '112', 'by.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(21, 'Belgium', '32', 'BE', 'BEL', '056', 'be.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(22, 'Belize', '501', 'BZ', 'BLZ', '084', 'bz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(23, 'Benin', '229', 'BJ', 'BEN', '204', 'bj.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(24, 'Bermuda', '1441', 'BM', 'BMU', '060', 'bm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(25, 'Bhutan', '975', 'BT', 'BTN', '064', 'bt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(26, 'Bolivia', '591', 'BO', 'BOL', '068', 'bo.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(27, 'Bosnia and Herzegovina', '387', 'BA', 'BIH', '070', 'ba.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(28, 'Botswana', '267', 'BW', 'BWA', '072', 'bw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(29, 'Brazil', '55', 'BR', 'BRA', '076', 'br.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(30, 'British Indian Ocean Territory', '0', 'IO', 'IOT', '086', 'io.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(31, 'British Virgin Islands', '1284', 'VG', 'VGB', '092', 'vg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(32, 'Brunei', '673', 'BN', 'BRN', '096', 'bn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(33, 'Bulgaria', '359', 'BG', 'BGR', '100', 'bg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(34, 'Burkina Faso', '226', 'BF', 'BFA', '854', 'bf.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(35, 'Burma (Myanmar)', '95', 'MM', 'MMR', '104', 'mm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(36, 'Burundi', '257', 'BI', 'BDI', '108', 'bi.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(37, 'Cambodia', '855', 'KH', 'KHM', '116', 'kh.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(38, 'Cameroon', '237', 'CM', 'CMR', '120', 'cm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(39, 'Canada', '1', 'CA', 'CAN', '124', 'ca.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(40, 'Cape Verde', '238', 'CV', 'CPV', '132', 'cv.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(41, 'Cayman Islands', '1345', 'KY', 'CYM', '136', 'ky.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(42, 'Central African Republic', '236', 'CF', 'CAF', '140', 'cf.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(43, 'Chad', '235', 'TD', 'TCD', '148', 'td.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(44, 'Chile', '56', 'CL', 'CHL', '152', 'cl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(45, 'China', '86', 'CN', 'CHN', '156', 'cn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(46, 'Christmas Island', '61', 'CX', 'CXR', '162', 'cx.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(47, 'Cocos (Keeling) Islands', '61', 'CC', 'CCK', '166', 'cc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(48, 'Colombia', '57', 'CO', 'COL', '170', 'co.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(49, 'Comoros', '269', 'KM', 'COM', '174', 'km.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(50, 'Cook Islands', '682', 'CK', 'COK', '184', 'ck.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(51, 'Costa Rica', '506', 'CR', 'CRC', '188', 'cr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(52, 'Croatia', '385', 'HR', 'HRV', '191', 'hr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(53, 'Cuba', '53', 'CU', 'CUB', '192', 'cu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(54, 'Cyprus', '357', 'CY', 'CYP', '196', 'cy.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(55, 'Czech Republic', '420', 'CZ', 'CZE', '203', 'cz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(56, 'Democratic Republic of the Congo', '243', 'CD', 'COD', '180', 'cd.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(57, 'Denmark', '45', 'DK', 'DNK', '208', 'dk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(58, 'Djibouti', '253', 'DJ', 'DJI', '262', 'dj.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(59, 'Dominica', '1767', 'DM', 'DMA', '212', 'dm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(60, 'Dominican Republic', '1809', 'DO', 'DOM', '214', 'do.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(61, 'Ecuador', '593', 'EC', 'ECU', '218', 'ec.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(62, 'Egypt', '20', 'EG', 'EGY', '818', 'eg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(63, 'El Salvador', '503', 'SV', 'SLV', '222', 'sv.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(64, 'Equatorial Guinea', '240', 'GQ', 'GNQ', '226', 'gq.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(65, 'Eritrea', '291', 'ER', 'ERI', '232', 'er.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(66, 'Estonia', '372', 'EE', 'EST', '233', 'ee.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(67, 'Ethiopia', '251', 'ET', 'ETH', '231', 'et.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(68, 'Falkland Islands', '500', 'FK', 'FLK', '238', 'fk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(69, 'Faroe Islands', '298', 'FO', 'FRO', '234', 'fo.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(70, 'Fiji', '679', 'FJ', 'FJI', '242', 'fj.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(71, 'Finland', '358', 'FI', 'FIN', '246', 'fi.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(72, 'France', '33', 'FR', 'FRA', '250', 'fr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(73, 'French Polynesia', '689', 'PF', 'PYF', '258', 'pf.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(74, 'Gabon', '241', 'GA', 'GAB', '266', 'ga.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(75, 'Gambia', '220', 'GM', 'GMB', '270', 'gm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(76, 'Gaza Strip', '970', '4', '', '', '', 0, '2016-02-19 06:58:32', 'DANRA', '0000-00-00 00:00:00', ''),
(77, 'Georgia', '995', 'GE', 'GEO', '268', 'ge.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(78, 'Germany', '49', 'DE', 'DEU', '276', 'de.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(79, 'Ghana', '233', 'GH', 'GHA', '288', 'gh.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(80, 'Gibraltar', '350', 'GI', 'GIB', '292', 'gi.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(81, 'Greece', '30', 'GR', 'GRC', '300', 'gr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(82, 'Greenland', '299', 'GL', 'GRL', '304', 'gl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(83, 'Grenada', '1473', 'GD', 'GRD', '308', 'gd.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(84, 'Guam', '1671', 'GU', 'GUM', '316', 'gu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(85, 'Guatemala', '502', 'GT', 'GTM', '320', 'gt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(86, 'Guinea', '224', 'GN', 'GIN', '324', 'gn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(87, 'Guinea-Bissau', '245', 'GW', 'GNB', '624', 'gw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(88, 'Guyana', '592', 'GY', 'GUY', '328', 'gy.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(89, 'Haiti', '509', 'HT', 'HTI', '332', 'ht.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(90, 'Holy See (Vatican City)', '39', 'VA', 'VAT', '336', 'va.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(91, 'Honduras', '504', 'HN', 'HND', '340', 'hn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(92, 'Hong Kong', '852', 'HK', 'HKG', '344', 'hk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(93, 'Hungary', '36', 'HU', 'HUN', '348', 'hu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(94, 'Iceland', '354', 'IS', 'IS', '352', 'is.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(95, 'India', '91', 'IN', 'IND', '356', 'in.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(96, 'Indonesia', '62', 'ID', 'IDN', '360', 'id.png', 1, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(97, 'Iran', '98', 'IR', 'IRN', '364', 'ir.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(98, 'Iraq', '964', 'IQ', 'IRQ', '368', 'iq.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(99, 'Ireland', '353', 'IE', 'IRL', '372', 'ie.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(100, 'Isle of Man', '44', 'IM', 'IMN', '833', 'im.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(101, 'Israel', '972', 'IL', 'ISR', '376', 'il.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(102, 'Italy', '39', 'IT', 'ITA', '380', 'it.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(103, 'Ivory Coast', '225', 'CI', 'CIV', '384', 'ci.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(104, 'Jamaica', '1876', 'JM', 'JAM', '388', 'jm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(105, 'Japan', '81', 'JP', 'JPN', '392', 'jp.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(106, 'Jersey', '0', 'JE', 'JEY', '832', 'je.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(107, 'Jordan', '962', 'JO', 'JOR', '400', 'jo.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(108, 'Kazakhstan', '7', 'KZ', 'KAZ', '398', 'kz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(109, 'Kenya', '254', 'KE', 'KEN', '404', 'ke.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(110, 'Kiribati', '686', 'KI', 'KIR', '296', 'ki.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(111, 'Kosovo', '381', '3', '', '', '', 0, '2016-02-19 06:58:32', 'DANRA', '0000-00-00 00:00:00', ''),
(112, 'Kuwait', '965', 'KW', 'KWT', '414', 'kw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(113, 'Kyrgyzstan', '996', 'KG', 'KGZ', '417', 'kg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(114, 'Laos', '856', 'LA', 'LAO', '418', 'la.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(115, 'Latvia', '371', 'LV', 'LVA', '428', 'lv.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(116, 'Lebanon', '961', 'LB', 'LBN', '422', 'lb.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(117, 'Lesotho', '266', 'LS', 'LSO', '426', 'ls.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(118, 'Liberia', '231', 'LR', 'LBR', '430', 'lr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(119, 'Libya', '218', 'LY', 'LBY', '434', 'ly.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(120, 'Liechtenstein', '423', 'LI', 'LIE', '438', 'li.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(121, 'Lithuania', '370', 'LT', 'LTU', '440', 'lt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(122, 'Luxembourg', '352', 'LU', 'LUX', '442', 'lu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(123, 'Macau', '853', 'MO', 'MAC', '446', 'mo.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(124, 'Macedonia', '389', 'MK', 'MKD', '807', 'mk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(125, 'Madagascar', '261', 'MG', 'MDG', '450', 'mg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(126, 'Malawi', '265', 'MW', 'MWI', '454', 'mw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(127, 'Malaysia', '60', 'MY', 'MYS', '458', 'my.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(128, 'Maldives', '960', 'MV', 'MDV', '462', 'mv.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(129, 'Mali', '223', 'ML', 'MLI', '466', 'ml.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(130, 'Malta', '356', 'MT', 'MLT', '470', 'mt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(131, 'Marshall Islands', '692', 'MH', 'MHL', '584', 'mh.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(132, 'Mauritania', '222', 'MR', 'MRT', '478', 'mr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(133, 'Mauritius', '230', 'MU', 'MUS', '480', 'mu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(134, 'Mayotte', '262', 'YT', 'MYT', '175', 'yt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(135, 'Mexico', '52', 'MX', 'MEX', '484', 'mx.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(136, 'Micronesia', '691', 'FM', 'FSM', '583', 'fm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(137, 'Moldova', '373', 'MD', 'MDA', '498', 'md.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(138, 'Monaco', '377', 'MC', 'MCO', '492', 'mc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(139, 'Mongolia', '976', 'MN', 'MNG', '496', 'mn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(140, 'Montenegro', '382', 'ME', 'MNE', '499', 'me.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(141, 'Montserrat', '1664', 'MS', 'MSR', '500', 'ms.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(142, 'Morocco', '212', 'MA', 'MAR', '504', 'ma.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(143, 'Mozambique', '258', 'MZ', 'MOZ', '508', 'mz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(144, 'Namibia', '264', 'NA', 'NAM', '516', 'na.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(145, 'Nauru', '674', 'NR', 'NRU', '520', 'nr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(146, 'Nepal', '977', 'NP', 'NPL', '524', 'np.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(147, 'Netherlands', '31', 'NL', 'NLD', '528', 'nl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(148, 'Netherlands Antilles', '599', 'AN', 'ANT', '530', 'an.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(149, 'New Caledonia', '687', 'NC', 'NCL', '540', 'nc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(150, 'New Zealand', '64', 'NZ', 'NZL', '554', 'nz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(151, 'Nicaragua', '505', 'NI', 'NIC', '558', 'ni.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(152, 'Niger', '227', 'NE', 'NER', '562', 'ne.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(153, 'Nigeria', '234', 'NG', 'NGA', '566', 'ng.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(154, 'Niue', '683', 'NU', 'NIU', '570', 'nu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(155, 'Norfolk Island', '672', '1', 'NFK', '', '', 0, '2016-02-19 06:58:32', 'DANRA', '0000-00-00 00:00:00', ''),
(156, 'North Korea', '850', 'KP', 'PRK', '408', 'kp.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(157, 'Northern Mariana Islands', '1670', 'MP', 'MNP', '580', 'mp.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(158, 'Norway', '47', 'NO', 'NOR', '578', 'no.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(159, 'Oman', '968', 'OM', 'OMN', '512', 'om.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(160, 'Pakistan', '92', 'PK', 'PAK', '586', 'pk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(161, 'Palau', '680', 'PW', 'PLW', '585', 'pw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(162, 'Panama', '507', 'PA', 'PAN', '591', 'pa.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(163, 'Papua New Guinea', '675', 'PG', 'PNG', '598', 'pg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(164, 'Paraguay', '595', 'PY', 'PRY', '600', 'py.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(165, 'Peru', '51', 'PE', 'PER', '604', 'pe.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(166, 'Philippines', '63', 'PH', 'PHL', '608', 'ph.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(167, 'Pitcairn Islands', '870', 'PN', 'PCN', '612', 'pn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(168, 'Poland', '48', 'PL', 'POL', '616', 'pl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(169, 'Portugal', '351', 'PT', 'PRT', '620', 'pt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(170, 'Puerto Rico', '1', 'PR', 'PRI', '630', 'pr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(171, 'Qatar', '974', 'QA', 'QAT', '634', 'qa.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(172, 'Republic of the Congo', '242', 'CG', 'COG', '178', 'cg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(173, 'Romania', '40', 'RO', 'ROU', '642', 'ro.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(174, 'Russia', '7', 'RU', 'RUS', '643', 'ru.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(175, 'Rwanda', '250', 'RW', 'RWA', '646', 'rw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(176, 'Saint Barthelemy', '590', 'BL', 'BLM', '652', 'bl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(177, 'Saint Helena', '290', 'SH', 'SHN', '654', 'sh.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(178, 'Saint Kitts and Nevis', '1869', 'KN', 'KNA', '659', 'kn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(179, 'Saint Lucia', '1758', 'LC', 'LCA', '662', 'lc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(180, 'Saint Martin', '1599', 'MF', 'MAF', '663', 'mf.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(181, 'Saint Pierre and Miquelon', '508', 'PM', 'SPM', '666', 'pm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(182, 'Saint Vincent and the Grenadines', '1784', 'VC', 'VCT', '670', 'vc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(183, 'Samoa', '685', 'WS', 'WSM', '882', 'ws.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(184, 'San Marino', '378', 'SM', 'SMR', '674', 'sm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(185, 'Sao Tome and Principe', '239', 'ST', 'STP', '678', 'st.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(186, 'Saudi Arabia', '966', 'SA', 'SAU', '682', 'sa.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(187, 'Senegal', '221', 'SN', 'SEN', '686', 'sn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(188, 'Serbia', '381', 'RS', 'SRB', '688', 'rs.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(189, 'Seychelles', '248', 'SC', 'SYC', '690', 'sc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(190, 'Sierra Leone', '232', 'SL', 'SLE', '694', 'sl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(191, 'Singapore', '65', 'SG', 'SGP', '702', 'sg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(192, 'Slovakia', '421', 'SK', 'SVK', '703', 'sk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(193, 'Slovenia', '386', 'SI', 'SVN', '705', 'si.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(194, 'Solomon Islands', '677', 'SB', 'SLB', '090', 'sb.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(195, 'Somalia', '252', 'SO', 'SOM', '706', 'so.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(196, 'South Africa', '27', 'ZA', 'ZAF', '710', 'za.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(197, 'South Korea', '82', 'KR', 'KOR', '410', 'kr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(198, 'Spain', '34', 'ES', 'ESP', '724', 'es.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(199, 'Sri Lanka', '94', 'LK', 'LKA', '144', 'lk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(200, 'Sudan', '249', 'SD', 'SDN', '736', 'sd.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(201, 'Suriname', '597', 'SR', 'SUR', '740', 'sr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(202, 'Svalbard', '0', 'SJ', 'SJM', '744', 'sj.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(203, 'Swaziland', '268', 'SZ', 'SWZ', '748', 'sz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(204, 'Sweden', '46', 'SE', 'SWE', '752', 'se.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(205, 'Switzerland', '41', 'CH', 'CHE', '756', 'ch.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(206, 'Syria', '963', 'SY', 'SYR', '760', 'sy.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(207, 'Taiwan', '886', 'TW', 'TWN', '158', 'tw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(208, 'Tajikistan', '992', 'TJ', 'TJK', '762', 'tj.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(209, 'Tanzania', '255', 'TZ', 'TZA', '834', 'tz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(210, 'Thailand', '66', 'TH', 'THA', '764', 'th.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(211, 'Timor-Leste', '670', 'TL', 'TLS', '626', 'tl.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(212, 'Togo', '228', 'TG', 'TGO', '768', 'tg.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(213, 'Tokelau', '690', 'TK', 'TKL', '772', 'tk.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(214, 'Tonga', '676', 'TO', 'TON', '776', 'to.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(215, 'Trinidad and Tobago', '1868', 'TT', 'TTO', '780', 'tt.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(216, 'Tunisia', '216', 'TN', 'TUN', '788', 'tn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(217, 'Turkey', '90', 'TR', 'TUR', '792', 'tr.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(218, 'Turkmenistan', '993', 'TM', 'TKM', '795', 'tm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(219, 'Turks and Caicos Islands', '1649', 'TC', 'TCA', '796', 'tc.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(220, 'Tuvalu', '688', 'TV', 'TUV', '798', 'tv.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(221, 'Uganda', '256', 'UG', 'UGA', '800', 'ug.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(222, 'Ukraine', '380', 'UA', 'UKR', '804', 'ua.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(223, 'United Arab Emirates', '971', 'AE', 'ARE', '784', 'ae.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(224, 'United Kingdom', '44', 'GB', 'GBR', '826', 'gb.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(225, 'United States', '1', 'US', 'USA', '840', 'us.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(226, 'Uruguay', '598', 'UY', 'URY', '858', 'uy.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(227, 'US Virgin Islands', '1340', 'VI', 'VIR', '850', 'vi.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(228, 'Uzbekistan', '998', 'UZ', 'UZB', '860', 'uz.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(229, 'Vanuatu', '678', 'VU', 'VUT', '548', 'vu.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(230, 'Venezuela', '58', 'VE', 'VEN', '862', 've.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(231, 'Vietnam', '84', 'VN', 'VNM', '704', 'vn.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(232, 'Wallis and Futuna', '681', 'WF', 'WLF', '876', 'wf.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(233, 'West Bank', '970', '2', '', '', '', 0, '2016-02-19 06:58:32', 'DANRA', '0000-00-00 00:00:00', ''),
(234, 'Western Sahara', '0', 'EH', 'ESH', '732', 'eh.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(235, 'Yemen', '967', 'YE', 'YEM', '887', 'ye.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(236, 'Zambia', '260', 'ZM', 'ZMB', '894', 'zm.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', ''),
(237, 'Zimbabwe', '263', 'ZW', 'ZWE', '716', 'zw.png', 0, '2016-03-10 03:07:47', 'DANRA', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_outlet`
--

CREATE TABLE `f_outlet` (
  `OU_ID` int(10) NOT NULL,
  `OU_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `OU_EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `OU_PHONE_NUMBER` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `OU_ACTIVATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `OU_IDENTITYCODE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `OU_BANKCODE` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `OU_BANKACCOUNT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `OU_BANKHOLDER` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `OU_LATITUDE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `OU_LONGITUDE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `OU_ADDRESS` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ID_KABUPATEN` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '275',
  `ID_PROVINSI` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '16',
  `DV_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `WA_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_outlet`
--

INSERT INTO `f_outlet` (`OU_ID`, `OU_NAME`, `OU_EMAIL`, `OU_PHONE_NUMBER`, `OU_ACTIVATED_ON`, `OU_IDENTITYCODE`, `OU_BANKCODE`, `OU_BANKACCOUNT`, `OU_BANKHOLDER`, `OU_LATITUDE`, `OU_LONGITUDE`, `OU_ADDRESS`, `ID_KABUPATEN`, `ID_PROVINSI`, `DV_ID`, `WA_ID`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Plasa Telkom Kebon Sirih', 'plasatelkom.kbs@telkom.co.id', '+6281398988448', '2016-05-29 19:49:34', '24072016', '3', '1030005604141', 'PT Telkom Indonesia', '', '', 'Jl. Kebon Sirih Raya No. 37', '179', '12', '2', '1', '2016-05-29 19:49:34', 'DANRA', '2016-05-29 12:49:34', ''),
(2, 'Plasa Telkom Gatot Soebroto', 'plasatelkom.gcc@telkom.co.id', '+6281398988448', '2016-05-29 19:49:34', '24072016', '3', '1030005604141', 'PT Telkom Indonesia', '', '', 'Jl. Gatot Soebroto Kav. 52', '182', '12', '2', '1', '2016-05-29 19:49:34', 'DANRA', '2016-05-29 12:49:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_partner`
--

CREATE TABLE `f_partner` (
  `PA_ID` int(10) NOT NULL,
  `PA_PREFIX_CODE` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `PA_SUFFIX_CODE` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `PA_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PA_LOGO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PA_DETECT_MACADDR` int(1) NOT NULL DEFAULT '0',
  `PA_DETECT_IPADDR` int(1) NOT NULL DEFAULT '0',
  `PA_DESCRIPTION` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_partner`
--

INSERT INTO `f_partner` (`PA_ID`, `PA_PREFIX_CODE`, `PA_SUFFIX_CODE`, `PA_NAME`, `PA_LOGO`, `PA_DETECT_MACADDR`, `PA_DETECT_IPADDR`, `PA_DESCRIPTION`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'PLS', 'plasatelkom', 'Plasa Telkom', 'plasa-telkom.png', 0, 0, 'Plasa Telkom Indonesia sebagai outlet mitra yang bekerja sama dengan T-MONEY', '2016-05-29 19:29:52', 'DANRA', '2016-05-30 18:32:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_provinsi`
--

CREATE TABLE `f_provinsi` (
  `ID_PROVINSI` int(10) NOT NULL,
  `KODE_BPS` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `KODE_ISO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NAMA_PROVINSI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '1',
  `LOGO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MAP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IBU_KOTA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LUAS_AREA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TOTAL_KABKOTA` int(10) NOT NULL,
  `TOTAL_KECAMATAN` int(10) NOT NULL,
  `TOTAL_KEL_DESA` int(10) NOT NULL,
  `ID_GEOGRAFI` int(10) NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_provinsi`
--

INSERT INTO `f_provinsi` (`ID_PROVINSI`, `KODE_BPS`, `KODE_ISO`, `NAMA_PROVINSI`, `STATUS`, `LOGO`, `MAP`, `IBU_KOTA`, `LUAS_AREA`, `TOTAL_KABKOTA`, `TOTAL_KECAMATAN`, `TOTAL_KEL_DESA`, `ID_GEOGRAFI`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, '11', 'ID-AC', 'Nangroe Aceh Darussalam', 1, 'logo-aceh.jpg', 'map-aceh.jpg', 'Banda Aceh', '56.500,51', 23, 276, 6424, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(2, '12', 'ID-SU', 'Sumatera Utara', 1, 'logo-sumut.jpg', 'map-sumut.jpg', 'Medan', '72.427,81', 33, 402, 5867, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(3, '13', 'ID-SB', 'Sumatera Barat', 1, 'logo-sumbar.jpg', 'map-sumbar.jpg', 'Padang', '42.224,65', 19, 175, 1858, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(4, '14', 'ID-RI', 'Riau', 1, 'logo-riau.jpg', 'map-riau.jpg', 'Pekanbaru', '87.844,23', 12, 151, 1584, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(5, '15', 'ID-JA', 'Jambi', 1, 'logo-jambi.jpg', 'map-jambi.jpg', 'Jambi', '45.348,49', 11, 65, 562, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(6, '16', 'ID-SS', 'Sumatera Selatan', 1, 'logo-sumsel.jpg', 'map-sumsel.jpg', 'Palembang', '60.302,54', 15, 212, 3081, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(7, '17', 'ID-BE', 'Bengkulu', 1, 'logo-bengkulu.jpg', 'map-bengkulu.jpg', 'Bengkulu', '19.795,15', 10, 154, 1505, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(8, '18', 'ID-LA', 'Lampung', 1, 'logo-lampung.jpg', 'map-lampung.jpg', 'Bandar Lampung', '37.735,15', 15, 204, 2361, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(9, '19', 'ID-BB', 'Kep. Bangka Belitung', 1, 'logo-bangbel.jpg', 'map-bangbel.jpg', 'Pangkal Pinang', '16.424,14', 7, 135, 1422, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(10, '21', 'ID-KR', 'Kep. Riau', 1, 'logo-kepri.jpg', 'map-kepri.jpg', 'Tanjung Pinang', '8.084,01', 7, 57, 340, 1, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(11, '36', 'ID-BT', 'Banten', 1, 'logo-banten.jpg', 'map-banten.jpg', 'Serang', '9.018,64', 8, 40, 348, 2, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(12, '31', 'ID-JK', 'DKI Jakarta', 1, 'logo-dki.jpg', 'map-dki.jpg', 'Jakarta', '740,29', 6, 78, 438, 2, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(13, '32', 'ID-JB', 'Jawa Barat', 1, 'logo-jabar.jpg', 'map-jabar.jpg', 'Bandung', '39.925,05', 27, 128, 1332, 2, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(14, '33', 'ID-JT', 'Jawa Tengah', 1, 'logo-jateng.jpg', 'map-jateng.jpg', 'Semarang', '32.799,71', 35, 621, 5883, 2, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(15, '34', 'ID-YO', 'DI Yogyakarta', 1, 'logo-yogya.jpg', 'map-yogya.jpg', 'Yogyakarta', '3.133,15', 5, 109, 1334, 2, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(16, '35', 'ID-JI', 'Jawa Timur', 1, 'logo-jatim.jpg', 'map-jatim.jpg', 'Surabaya', '46.689,64', 38, 573, 8574, 2, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(17, '61', 'ID-KB', 'Kalimantan Barat', 1, 'logo-kalbar.jpg', 'map-kalbar.jpg', 'Pontianak', '120.114,32', 14, 660, 8513, 3, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(18, '62', 'ID-KT', 'Kalimantan Tengah', 1, 'logo-kalteng.jpg', 'map-kalteng.jpg', 'Palangkaraya', '153.564,50', 14, 149, 1979, 3, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(19, '63', 'ID-KS', 'Kalimantan Selatan', 1, 'logo-kalsel.jpg', 'map-kalsel.jpg', 'Banjarmasin', '37.530,52', 13, 176, 1726, 3, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(20, '64', 'ID-KI', 'Kalimantan Timur', 1, 'logo-kaltim.jpg', 'map-kaltim.jpg', 'Samarinda', '194.849,08', 9, 119, 1453, 3, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(21, '0', 'ID-KU', 'Kalimantan Utara', 1, 'logo-kalut.jpg', 'map-kalut.jpg', 'Tanjung Selor', '71.176,72', 5, 47, 381, 3, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(22, '71', 'ID-SA', 'Sulawesi Utara', 1, 'logo-sulut.jpg', 'map-sulut.jpg', 'Manado', '13.920,73', 15, 149, 1464, 4, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(23, '75', 'ID-GO', 'Gorontalo', 1, 'logo-gorontalo.jpg', 'map-gorontalo.jpg', 'Gorontalo', '12.165,44', 6, 44, 268, 4, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(24, '72', 'ID-ST', 'Sulawesi Tengah', 1, 'logo-sulteng.jpg', 'map-sulteng.jpg', 'Palu', '68.089,83', 11, 147, 1664, 4, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(25, '76', 'ID-SR', 'Sulawesi Barat', 1, 'logo-sulbar.jpg', 'map-sulbar.jpg', 'Mamuju', '16.787,19', 5, 65, 532, 4, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(26, '73', 'ID-SN', 'Sulawesi Selatan', 1, 'logo-sulsel.jpg', 'map-sulsel.jpg', 'Makassar', '46.116,45', 24, 303, 2936, 4, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(27, '74', 'ID-SG', 'Sulawesi Tenggara', 1, 'logo-sultra.jpg', 'map-sultra.jpg', 'Kendari', '36.757,45', 12, 185, 1942, 4, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(28, '81', 'ID-MA', 'Maluku', 1, 'logo-maluku.jpg', 'map-maluku.jpg', 'Ambon', '47.350,42', 11, 72, 901, 5, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(29, '82', 'ID-MU', 'Maluku Utara', 1, 'logo-malut.jpg', 'map-malut.jpg', 'Sofifi', '39.959,99', 9, 110, 1002, 5, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(30, '51', 'ID-BA', 'Bali', 1, 'logo-bali.jpg', 'map-bali.jpg', 'Denpasar', '5.449,37', 9, 57, 710, 6, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(31, '52', 'ID-NB', 'Nusa Tenggara Barat', 1, 'logo-nusbar.jpg', 'map-nusbar.jpg', 'Mataram', '19.708,79', 10, 116, 904, 6, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(32, '53', 'ID-NT', 'Nusa Tenggara Timur', 1, 'logo-nustim.jpg', 'map-nustim.jpg', 'Kupang', '46.137,87', 21, 284, 2845, 6, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(33, '94', 'ID-PA', 'Papua', 1, 'logo-papua.jpg', 'map-papua.jpg', 'Jayapura', '309.934,40', 29, 344, 3575, 7, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', ''),
(34, '91', 'ID-PB', 'Papua Barat', 1, 'logo-papbar.jpg', 'map-papbar.jpg', 'Manokwari', '114.566,40', 13, 127, 1286, 7, '2016-02-15 09:32:11', 'DANRA', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_regional`
--

CREATE TABLE `f_regional` (
  `DV_ID` int(10) NOT NULL,
  `DV_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DV_DESCRIPTION` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_regional`
--

INSERT INTO `f_regional` (`DV_ID`, `DV_NAME`, `DV_DESCRIPTION`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'Divre 1', 'Grup untuk Plasa Telkom di area Divre 1', '2016-05-29 19:44:36', 'DANRA', '2016-05-29 12:44:36', ''),
(2, 'Divre 2', 'Grup untuk Plasa Telkom di area Divre 2', '2016-05-29 19:44:36', 'DANRA', '2016-05-29 12:44:36', ''),
(3, 'Divre 3', 'Grup untuk Plasa Telkom di area Divre 3', '2016-05-30 18:04:42', 'DANRA', '2016-05-30 11:04:42', ''),
(4, 'Divre 4', 'Grup untuk Plasa Telkom di area Divre 4', '2016-05-30 18:04:42', 'DANRA', '2016-05-30 11:04:42', ''),
(5, 'Divre 5', 'Grup untuk Plasa Telkom di area Divre 5', '2016-05-30 18:04:42', 'DANRA', '2016-05-30 11:04:42', ''),
(6, 'Divre 6', 'Grup untuk Plasa Telkom di area Divre 6', '2016-05-30 18:04:42', 'DANRA', '2016-05-30 11:04:42', ''),
(7, 'Divre 7', 'Grup untuk Plasa Telkom di area Divre 7', '2016-05-30 18:04:42', 'DANRA', '2016-05-30 11:04:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_terminal`
--

CREATE TABLE `f_terminal` (
  `TR_ID` int(10) NOT NULL,
  `TR_CODE` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TR_STATUS` int(1) NOT NULL DEFAULT '1',
  `TR_FIRST_TRANSACTION` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TR_LAST_TRANSACTION` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TR_MAC_ADDR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TR_IP_ADDR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TR_MIN_BALANCE` double(16,2) NOT NULL DEFAULT '0.00',
  `TR_CURR_BALANCE` double(16,2) NOT NULL DEFAULT '0.00',
  `TR_HOLD_BALANCE` double(16,2) NOT NULL DEFAULT '0.00',
  `TR_MAX_BALANCE` double(16,2) NOT NULL DEFAULT '0.00',
  `OU_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_terminal`
--

INSERT INTO `f_terminal` (`TR_ID`, `TR_CODE`, `TR_STATUS`, `TR_FIRST_TRANSACTION`, `TR_LAST_TRANSACTION`, `TR_MAC_ADDR`, `TR_IP_ADDR`, `TR_MIN_BALANCE`, `TR_CURR_BALANCE`, `TR_HOLD_BALANCE`, `TR_MAX_BALANCE`, `OU_ID`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, 'PLS00001', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0.00, 0.00, 0.00, 50000000.00, '1', '2016-05-29 19:52:12', 'DANRA', '2016-05-29 12:52:12', ''),
(2, 'PLS00002', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0.00, 0.00, 0.00, 50000000.00, '1', '2016-05-29 19:52:12', 'DANRA', '2016-05-29 12:52:12', ''),
(3, 'PLS00003', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0.00, 0.00, 0.00, 50000000.00, '2', '2016-05-29 19:52:12', 'DANRA', '2016-05-29 12:52:12', ''),
(4, 'PLS00004', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0.00, 0.00, 0.00, 50000000.00, '2', '2016-05-29 19:52:12', 'DANRA', '2016-05-29 12:52:12', ''),
(5, 'PLS00005', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0.00, 0.00, 0.00, 50000000.00, '2', '2016-05-29 19:52:12', 'DANRA', '2016-05-29 12:52:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_transaction`
--

CREATE TABLE `f_transaction` (
  `TRANS_ID` bigint(20) NOT NULL,
  `OU_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TR_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `EM_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_SYSLOGNO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_REFNO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_CODE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_VALUE` double(16,2) NOT NULL DEFAULT '0.00',
  `TRANS_CHARGE` double(16,2) NOT NULL DEFAULT '0.00',
  `TRANS_COMMISION` double(16,2) NOT NULL DEFAULT '0.00',
  `TRANS_LASTSTATE` int(1) NOT NULL DEFAULT '1',
  `TRANS_LASTRC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_IDTYPE` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'KTP',
  `SENDER_IDNUMBER` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_ADDRESS` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_CITY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '275',
  `SENDER_PROVINCE` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '16',
  `SENDER_COUNTRY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '96',
  `SENDER_ZIPCODE` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_PHONENUMBER` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_BIRTHDATE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SENDER_BIRTHPLACE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_IDTYPE` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'KTP',
  `RECEIVER_IDNUMBER` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_ADDRESS` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_CITY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '275',
  `RECEIVER_PROVINCE` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '16',
  `RECEIVER_COUNTRY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '96',
  `RECEIVER_ZIPCODE` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_PHONENUMBER` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_BIRTHDATE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RECEIVER_BIRTHPLACE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_ACCOUNTID` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_ACCOUNTNAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_SYSTEM` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'T-MONEY',
  `TRANS_BANK` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_BANKACCOUNT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_BANKHOLDERNAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TRANS_CURRENTTIME` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TRANS_EXPIREDTIME` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_wallet`
--

CREATE TABLE `f_wallet` (
  `WA_ID` int(10) NOT NULL,
  `WA_CUSTCODE` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `WA_CONTACTPHONE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `WA_PASSWORD` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WA_PIN` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WA_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WA_EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WA_ADDRESS` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ID_KABUPATEN` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '275',
  `ID_PROVINSI` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '16',
  `WA_PHONE_NUMBER` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `WA_IDENTITYCODE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `WA_BANKCODE` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `WA_BANKACCOUNT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PA_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `f_wallet`
--

INSERT INTO `f_wallet` (`WA_ID`, `WA_CUSTCODE`, `WA_CONTACTPHONE`, `WA_PASSWORD`, `WA_PIN`, `WA_NAME`, `WA_EMAIL`, `WA_ADDRESS`, `ID_KABUPATEN`, `ID_PROVINSI`, `WA_PHONE_NUMBER`, `WA_IDENTITYCODE`, `WA_BANKCODE`, `WA_BANKACCOUNT`, `PA_ID`, `CREATED_ON`, `CREATED_BY`, `UPDATED_ON`, `UPDATED_BY`) VALUES
(1, '195100001270', '+6219565407315', 'vOvPgMDmejjof/2HDNm2raLqz7x6Q9ep7N5wjEDYgdY=', 'oVZ3S+CE4PxqLe0XNTe+b84sd+UrolzZ9dx79M4zkMQ=', 'Plasa Telkom Indonesia', 'plasatelkom.indonesia@telkom.co.id', 'Gd. Menara Multimedia Lt. 15, Jl. Kebon Sirih Raya No. 12', '179', '12', '+6281398988448', '23072016', '3', '1030005604141', '1', '2016-05-29 19:33:14', 'DANRA', '2016-05-31 13:35:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_wallet_news`
--

CREATE TABLE `f_wallet_news` (
  `WN_ID` int(10) NOT NULL,
  `WN_TITLE` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `WN_MESSAGE` text COLLATE utf8_unicode_ci NOT NULL,
  `WN_STATUS` int(1) NOT NULL DEFAULT '1',
  `WN_POSITION` enum('RUNNINGTEXT','NEWSLETTER') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'RUNNINGTEXT',
  `WA_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DANRA',
  `UPDATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_BY` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_bank`
--
ALTER TABLE `f_bank`
  ADD PRIMARY KEY (`BANK_ID`),
  ADD UNIQUE KEY `BANK_CODE` (`BANK_CODE`),
  ADD KEY `BANK_NAME` (`BANK_NAME`);

--
-- Indexes for table `f_bank_group`
--
ALTER TABLE `f_bank_group`
  ADD PRIMARY KEY (`GROUP_ID`),
  ADD UNIQUE KEY `GROUP_NAME` (`GROUP_NAME`);

--
-- Indexes for table `f_currency`
--
ALTER TABLE `f_currency`
  ADD PRIMARY KEY (`CURR_ID`),
  ADD UNIQUE KEY `CURR_ISO_CODE` (`CURR_ISO_CODE`),
  ADD UNIQUE KEY `CURR_NAME` (`CURR_NAME`);

--
-- Indexes for table `f_employee`
--
ALTER TABLE `f_employee`
  ADD PRIMARY KEY (`EM_ID`),
  ADD KEY `EM_NAME` (`EM_NAME`),
  ADD KEY `EM_EMAIL` (`EM_EMAIL`),
  ADD KEY `EM_USERID` (`EM_USERID`),
  ADD KEY `EM_MAC_ADDR` (`EM_MAC_ADDR`),
  ADD KEY `EM_IDENTITYCODE` (`EM_IDENTITYCODE`);

--
-- Indexes for table `f_kabkota`
--
ALTER TABLE `f_kabkota`
  ADD PRIMARY KEY (`ID_KABUPATEN`),
  ADD UNIQUE KEY `KODE_KABUPATEN` (`KODE_KABUPATEN`),
  ADD KEY `NAMA_KABUPATEN` (`NAMA_KABUPATEN`);

--
-- Indexes for table `f_leveling`
--
ALTER TABLE `f_leveling`
  ADD PRIMARY KEY (`LV_ID`),
  ADD KEY `LV_NAME` (`LV_NAME`),
  ADD KEY `LV_TYPE` (`LV_TYPE`);

--
-- Indexes for table `f_negara`
--
ALTER TABLE `f_negara`
  ADD PRIMARY KEY (`ID_NEGARA`),
  ADD UNIQUE KEY `KODE_ISO2_NEGARA` (`KODE_ISO3166_A2_NEGARA`),
  ADD KEY `NAMA_NEGARA` (`NAMA_NEGARA`),
  ADD KEY `KODE_INT_NEGARA` (`KODE_INT_NEGARA`),
  ADD KEY `KODE_ISO3_NEGARA` (`KODE_ISO3166_A3_NEGARA`);

--
-- Indexes for table `f_outlet`
--
ALTER TABLE `f_outlet`
  ADD PRIMARY KEY (`OU_ID`),
  ADD KEY `OU_NAME` (`OU_NAME`),
  ADD KEY `OU_EMAIL` (`OU_EMAIL`),
  ADD KEY `ID_KABUPATEN` (`ID_KABUPATEN`),
  ADD KEY `ID_PROVINSI` (`ID_PROVINSI`),
  ADD KEY `WA_ID` (`WA_ID`),
  ADD KEY `DV_ID` (`DV_ID`);

--
-- Indexes for table `f_partner`
--
ALTER TABLE `f_partner`
  ADD PRIMARY KEY (`PA_ID`);

--
-- Indexes for table `f_provinsi`
--
ALTER TABLE `f_provinsi`
  ADD PRIMARY KEY (`ID_PROVINSI`),
  ADD UNIQUE KEY `KODE_BPS` (`KODE_BPS`),
  ADD UNIQUE KEY `KODE_ISO` (`KODE_ISO`),
  ADD KEY `NAMA_PROVINSI` (`NAMA_PROVINSI`);

--
-- Indexes for table `f_regional`
--
ALTER TABLE `f_regional`
  ADD PRIMARY KEY (`DV_ID`),
  ADD KEY `DV_NAME` (`DV_NAME`);

--
-- Indexes for table `f_terminal`
--
ALTER TABLE `f_terminal`
  ADD PRIMARY KEY (`TR_ID`),
  ADD KEY `TR_CODE` (`TR_CODE`),
  ADD KEY `TR_MAC_ADDR` (`TR_MAC_ADDR`),
  ADD KEY `TR_IP_ADDR` (`TR_IP_ADDR`),
  ADD KEY `OU_ID` (`OU_ID`);

--
-- Indexes for table `f_transaction`
--
ALTER TABLE `f_transaction`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `OU_ID` (`OU_ID`),
  ADD KEY `TR_ID` (`TR_ID`),
  ADD KEY `EM_ID` (`EM_ID`),
  ADD KEY `TRANS_SYSLOGNO` (`TRANS_SYSLOGNO`),
  ADD KEY `TRANS_REFNO` (`TRANS_REFNO`),
  ADD KEY `TRANS_CODE` (`TRANS_CODE`),
  ADD KEY `RECEIVER_IDNUMBER` (`RECEIVER_IDNUMBER`),
  ADD KEY `SENDER_IDNUMBER` (`SENDER_IDNUMBER`),
  ADD KEY `SENDER_PHONENUMBER` (`SENDER_PHONENUMBER`),
  ADD KEY `RECEIVER_PHONENUMBER` (`RECEIVER_PHONENUMBER`),
  ADD KEY `TRANS_CURRENTTIME` (`TRANS_CURRENTTIME`);

--
-- Indexes for table `f_wallet`
--
ALTER TABLE `f_wallet`
  ADD PRIMARY KEY (`WA_ID`),
  ADD UNIQUE KEY `WA_CUSTCODE` (`WA_CUSTCODE`),
  ADD UNIQUE KEY `WA_CONTACTPHONE` (`WA_CONTACTPHONE`),
  ADD KEY `WA_EMAIL` (`WA_EMAIL`),
  ADD KEY `PA_ID` (`PA_ID`),
  ADD KEY `WA_NAME` (`WA_NAME`),
  ADD KEY `ID_PROVINSI` (`ID_PROVINSI`) USING BTREE,
  ADD KEY `ID_KABUPATEN` (`ID_KABUPATEN`) USING BTREE;

--
-- Indexes for table `f_wallet_news`
--
ALTER TABLE `f_wallet_news`
  ADD PRIMARY KEY (`WN_ID`),
  ADD KEY `WN_TITLE` (`WN_TITLE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_bank`
--
ALTER TABLE `f_bank`
  MODIFY `BANK_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `f_bank_group`
--
ALTER TABLE `f_bank_group`
  MODIFY `GROUP_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `f_currency`
--
ALTER TABLE `f_currency`
  MODIFY `CURR_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `f_employee`
--
ALTER TABLE `f_employee`
  MODIFY `EM_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `f_kabkota`
--
ALTER TABLE `f_kabkota`
  MODIFY `ID_KABUPATEN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;
--
-- AUTO_INCREMENT for table `f_leveling`
--
ALTER TABLE `f_leveling`
  MODIFY `LV_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `f_negara`
--
ALTER TABLE `f_negara`
  MODIFY `ID_NEGARA` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
--
-- AUTO_INCREMENT for table `f_outlet`
--
ALTER TABLE `f_outlet`
  MODIFY `OU_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `f_partner`
--
ALTER TABLE `f_partner`
  MODIFY `PA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `f_provinsi`
--
ALTER TABLE `f_provinsi`
  MODIFY `ID_PROVINSI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `f_regional`
--
ALTER TABLE `f_regional`
  MODIFY `DV_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `f_terminal`
--
ALTER TABLE `f_terminal`
  MODIFY `TR_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `f_transaction`
--
ALTER TABLE `f_transaction`
  MODIFY `TRANS_ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `f_wallet`
--
ALTER TABLE `f_wallet`
  MODIFY `WA_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `f_wallet_news`
--
ALTER TABLE `f_wallet_news`
  MODIFY `WN_ID` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
