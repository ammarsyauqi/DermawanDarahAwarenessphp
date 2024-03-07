-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 01:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dermawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminp`
--

CREATE TABLE `adminp` (
  `id` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminp`
--

INSERT INTO `adminp` (`id`, `username`, `email`, `password`) VALUES
(1001, 'admin123', 'ammarsyauqi1999@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedbackmsg` varchar(4000) NOT NULL,
  `datepost` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedbackmsg`, `datepost`) VALUES
(1, 'MOHAMMAD AMMAR SYAUQI ZAINUDIN', 'ammarsyauqi1999@gmail.com', 'asdasdasdasdasdasd', '2024-02-23 05:12:15'),
(7, 'Azri bin Abdul ', 'abdul@yahoo.com', 'Hello admin, i have a question. please reach me out', '2024-02-23 12:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `highscore`
--

CREATE TABLE `highscore` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `quiz_score` int(20) NOT NULL,
  `puzzle_score` int(191) NOT NULL,
  `wscramble_score` int(191) NOT NULL,
  `memory_score` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `highscore`
--

INSERT INTO `highscore` (`id`, `username`, `quiz_score`, `puzzle_score`, `wscramble_score`, `memory_score`) VALUES
(121, 'muhoyo', 13, 0, 0, 0),
(122, 'ammar', 15, 0, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `ot` varchar(255) NOT NULL,
  `details` varchar(4000) NOT NULL,
  `url` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `img`, `address`, `phone`, `fax`, `email`, `website`, `ot`, `details`, `url`) VALUES
(1000, 'Pusat Darah Negara Donation Suite (PDN) Putrajaya', 'https://pdn.gov.my/v2/images/Puspanita2.png', 'Lot PT 2280, 2283, Persiaran Seri Perdana, Presint 10, 62000 Putrajaya', '0388810084', '03 2698 0362', 'pdn@moh.gov.my', 'www.pdn.gov.my', 'Mon-Fri : 10AM-4PM ; Sat-Sun : Closed', 'Pusat Darah Negara sedia berkhidmat kepada masyarakat dalam menyediakan darah yang mencukupi dan selamat serta menjadi pusat rujukan yang cemerlang di bidang Transfusi Perubatan.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.556021095893!2d101.6844945757094!3d2.943042854383512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb7bbbe1ca031%3A0xe478179e56274f95!2sPusat%20Darah%20Negara%20Donation%20Suite%20(PDN)%20Putrajaya!5e0!3m2!1sen!2smy!4v1708412675515!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1001, 'Pusat Darah Negara / St.John Ambulans Malaysia', 'images/1utama.jpg', 'B2, New Wing, Lebuh Bandar Utama, Bandar Utama, 47800 Petaling Jaya, Selangor', '603-9285 1576', '03-7722 3086', 'admin@sjam.org.my', 'sjam.org.my', 'Mon-Fri : 11AM-7PM ; Sat-Sun : 11AM-7PM', 'St. John Ambulance of Malaysia (SJAM) runs the ambulance services, event health services, first aid training and community services across the country.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1674.9769482897984!2d101.61633283843253!3d3.1502835186217495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4f639c0a16b7%3A0xa756671082a9e0f6!2sPusat%20Darah%20Negara%20%2F%20St.John%20Ambulans%20Malaysia!5e0!3m2!1sen!2smy!4v1708421719629!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1002, 'Blood Donation Suite - IOI City Mall Sdn Bhd', 'https://www.ioicitymall.com.my/data/images/item/185559_img_Slide1.jpg', 'Basement Level B3, West Wing @ IOI CITY Mall Putrajaya,\r\nIOI City Tower Two Lebuh IRC,\r\nIOI Resort,\r\n62502 Putrajaya.', '603-9285 1576', '03-7722 3086', 'admin@sjam.org.my', 'sjam.org.my', 'Mon-Fri : 11AM-4PM ; Sat-Sun : 11AM-6PM', 'St. John Ambulance of Malaysia (SJAM) runs the ambulance services, event health services, first aid training and community services across the country.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.462933421724!2d101.70915027555164!3d2.968965062697038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcb19976b65ab%3A0xb9333ef7732a9e07!2smyNEWS%20%40%20IOI%20City%20Mall%20(B3%20Floor)!5e0!3m2!1sen!2smy!4v1708423312040!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1003, 'Pusat Darah Negara Midvalley Donation Suite', 'images/midvalley.jpg', 'Mid Valley City, 58000 Kuala Lumpur, Federal Territory of Kuala Lumpur', '0388810084', '03 2698 0362', 'pdn@moh.gov.my', 'www.pdn.gov.my', 'Mon-Fri : 10AM-9PM ; Sat-Sun : 10AM-9PM', 'Pusat Darah Negara sedia berkhidmat kepada masyarakat dalam menyediakan darah yang mencukupi dan selamat serta menjadi pusat rujukan yang cemerlang di bidang Transfusi Perubatan.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.911058575403!2d101.67520727570933!3d3.118227353340415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc495d6bfd9103%3A0xe71fe674af5a67cb!2sPusat%20Darah%20Negara%20%40%20Mid%20Valley%20Megamall!5e0!3m2!1sen!2smy!4v1708423543521!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1004, 'Pusat Darah Negara', 'images/pdn.jpg', 'Jln Tun Razak, Titiwangsa, 50400 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '0388810084', '03 2698 0362', 'pdn@moh.gov.my', 'www.pdn.gov.my', 'Mon-Fri : 7:30AM-5:30PM ; Sat-Sun : 8AM-4PM', 'Pusat Darah Negara sedia berkhidmat kepada masyarakat dalam menyediakan darah yang mencukupi dan selamat serta menjadi pusat rujukan yang cemerlang di bidang Transfusi Perubatan.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127492.3538408954!2d101.60914793779465!3d3.058252118068561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37db1c677373%3A0x3cad66d1fca19b8b!2sPusat%20Darah%20Negara!5e0!3m2!1sen!2smy!4v1708423747944!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1005, 'Tengku Ampuan Rahimah Hospital, Klang', 'https://lh5.googleusercontent.com/p/AF1QipMYf-42WyAE31p9jEBM-KllhUXPXtEmbHiVnpSG=w408-h271-k-no', 'Tengku Ampuan Rahimah Hospital, Jalan Langat, 41200 Klang, Selangor.', '0333757000', '0333757000', 'cprc@moh.gov.my', 'https://jknselangor.moh.gov.my/htar/', 'Mon-Sun: 24Hrs', 'Hospital Tengku Ampuan Rahimah merupakan sebuah hospital kerajaan yang terletak di Selangor, Malaysia. Hospital Tengku Ampuan Rahimah mula beroperasi semenjak Mei 1986. Ia memiliki 837 katil bagi pesakit di wad, dan ia merupakan hospital pakar.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.276709886096!2d101.4398994!3d3.0201558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdac634329905f%3A0xf759281c7157e609!2sTengku%20Ampuan%20Rahimah%20Hospital%2C%20Klang!5e0!3m2!1sen!2smy!4v1708424340333!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1006, 'Sultanah Aminah Hospital, Johor Bahru', 'https://apicms.thestar.com.my/uploads/images/2023/04/03/2006398.jpg', 'Sultanah Aminah Hospital, Jalan, Persiaran Abu Bakar Sultan, 80100 Johor Bahru, Johor', '0333757000', '0333757000', 'publichsajb@moh.gov.my', 'jknjohor.moh.gov.my/hsajb/', 'Mon-Sun: 24Hrs', 'Hospital Sultanah Aminah, Johor Bahru merupakan sebuah institusi perubatan yang awal dan moden yang wujud di Negeri Johor. Ia juga merupakan salah sebuah institusi sosial yang terpenting dalam memberikan perkhidmatan kesihatan dan rawatan terhadap masyara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.525708279742!2d103.74345927571204!3d1.458501561215436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da12bdfc916aab%3A0x2a73735b3f4977f4!2sSultanah%20Aminah%20Hospital%2C%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1708424857286!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1007, 'Sultanah Nora Ismail Hospital, Batu Pahat ', 'https://jknjohor.moh.gov.my/hsni/images/2023/01/25/hospital_sultanah_nora_ismail_wiki__full.jpg', 'Sultanah Nora Ismail Hospital, Jalan Korma, Taman Soga, 83000 Batu Pahat, Johor.', '07-436 3000', '07-436 3000', 'hospbp@moh.gov.my', 'jknjohor.moh.gov.my/hsni/', 'Mon-Sun: 24Hrs', 'Sultanah Nora Ismail Hospital or more commonly referred as Batu Pahat Hospital is a government-funded multi-specialty hospital located in Batu Pahat, Johor, Malaysia.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.525708279742!2d103.74345927571204!3d1.458501561215436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da12bdfc916aab%3A0x2a73735b3f4977f4!2sSultanah%20Aminah%20Hospital%2C%20Johor%20Bahru!5e0!3m2!1sen!2smy!4v1708424857286!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1008, 'Hospital Sultanah Bahiyah, Alor Setar', 'https://clinicalresearch.my/wp-content/uploads/2021/01/Prime-Site_Hospital-Sultanah-Bahiyah_Large-e1610069212121.jpg', 'Hospital Sultanah Bahiyah, Km 6, Jln Langgar, Bandar, 05460 Alor Setar, Kedah', '047406233', '047406233', 'hsb@moh.gov.my', 'jknkedah.moh.gov.my/hsb/', 'Mon-Sun: 24Hrs', 'Hospital Sultanah Bahiyah adalah sebuah hospital kerajaan di Kedah yang dibina bagi menggantikan Hospital Alor Star untuk menampung pesakit yang meningkat. Ia terletak di Jalan Langgar, Alor Setar, kira-kira 6 km dari pusat bandar.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.865016786602!2d100.40379857498976!3d6.148824493838203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b5b49f51aaaab%3A0x9d1c566c4ca23a5b!2sHospital%20Sultanah%20Bahiyah%2C%20Alor%20Setar!5e0!3m2!1sen!2smy!4v1708425808186!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1009, 'Hospital Raja Perempuan Zainab II, Kelantan', 'https://lh3.googleusercontent.com/p/AF1QipM3EQilfnxuLODMXIBEy8REV8CoT9AeTXQl3jTl=s680-w680-h510', 'Hospital Raja Perempuan Zainab II, Bandar Kota Bharu, 15586 Kota Bharu, Kelantan', '097452000', '097452000', 'hrpz2@moh.gov.my', 'hrpz2.moh.gov.my', 'Mon-Sun: 24Hrs', 'Hospital Raja Perempuan Zainab II mula beroperasi pada tahun 1920-an. Ia mula beroperasi di pinggir Bandar Kota Bharu di mana kini merupakan bangunan Majlis Perbandaran Kota Bharu sekarang. Pada asalnya perkhidmatan perubatan ini asingkan antara wad bangunan Eropah dan wad bangunan rakyat tempatan. Perkhidmatan yang diberikan pada ketika itu ialah Perubatan dan Pembedahan dan kes-kes ini ditempatkan didalam satu wad dan ini termasuklah kes bersalin. Pada masa yang sama pembinaan bangunan hospital baru bermula dan siap pada tahun 1938.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.040232703007!2d102.2431370749896!3d6.125288293861453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6afdba81eaf23%3A0x6647f3f80c915890!2sHospital%20Raja%20Perempuan%20Zainab%20II!5e0!3m2!1sen!2smy!4v1708426240355!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1010, 'Hospital Raja Permaisuri Bainun, Perak', 'https://clinicalresearch.my/wp-content/uploads/2020/12/Prime-Site_Hospital-Raja-Permaisuri-Bainun_Large.jpg', 'Hospital Raja Permaisuri Bainun, Jalan Raja Ashman Shah, 30450 Ipoh, Perak', '052087000', '052087000', 'hrpb@moh.gov.my', 'hrpb.moh.gov.my', 'Mon-Sun: 24Hrs', 'Hospital Raja Permaisuri Bainun adalah merupakan hospital Kementerian Kesihatan Malaysia yang ketiga paling besar di Malaysia selepas Hospital Kuala Lumpur dan Hospital Pulau Pinang dengan kapasiti 990 buah katil, 16 dewan bedah, 16 katil unit rawatan rapi dewasa, 8 katil unit rawatan jantung, 17 katil unit rawatan rapi kanak-kanak (PICU) dan 20 katil unit rawatan neonatal.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9452047245554!2d101.08788297570943!3d4.603834942488184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caec8b8f49dcb3%3A0xcad988b70a4b8340!2sRaja%20Permaisuri%20Bainun%20Hospital!5e0!3m2!1sen!2smy!4v1708426442396!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1011, 'Hospital Taiping, Perak', 'https://iluminasi.com/img/upload/hospital-taiping.jpg', 'Hospital Taiping, Jalan Taming Sari, 34000 Taiping, Perak', '058204000', '058204000', 'pro_htaiping@moh.gov.my', 'htaiping.moh.gov.my/', 'Mon-Sun: 24Hrs', 'Taiping Hospital, formerly known as Yong Wah Hospital, was one of the first hospitals established in Malaysia. Located at Jalan Taming Sari (Main Road) near the commercial town centre, it is one of the biggest hospitals in Malaysia and is the second biggest in the State of Perak. The hospital is strategically situated 80 km from Ipoh and 85 km from Penang and was able to serve the northern states of Malaysia.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.526289349647!2d100.7368621841073!3d4.851072569542965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caaef5c5a50ceb%3A0x393e1cd9800d4d43!2sTaiping%20Hospital!5e0!3m2!1sen!2smy!4v1708426782470!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1012, 'Sultanah Nur Zahirah Hospital, Kuala Terengganu', 'https://nanog.com.my/wp-content/uploads/2019/12/Featured-Image-850x550-3.jpg', 'Sultanah Nur Zahirah Hospital, 84GX+RH Hospital Sultanah Nur Zahirah, 20400 Kuala Terengganu, Terengganu', '096212121', '096212121', 'prohsnzkt@moh.gov.my', 'hsnzkt.moh.gov.my/', 'Mon-Sun: 24Hrs', 'Hospital Sultanah Nur Zahirah atau juga dikenali sebagai Hospital Besar Kuala Terengganu merupakan sebuah hospital yang terletak di Kuala Terengganu, Terengganu. Ia ditukar namanya dari Hospital Kuala Terengganu kepada Hospital Sultanah Nur Zahirah Kuala Terengganu (HSNZKT) pada 2 Disember 2006 dan telah dirasmikan oleh Kebawah Duli Yang Maha Mulia Sultan Mizan Zainal Abidin.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.599492603639!2d103.14921487571037!3d5.324994635927912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b7bfb426ef2e85%3A0x687526b9d5ee20ce!2sSultanah%20Nur%20Zahirah%20Hospital%2C%20Kuala%20Terengganu!5e0!3m2!1sen!2smy!4v1708427093869!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1013, 'Hospital Seberang Jaya, Pulau Pinang', 'https://gathercare.com/wp-content/uploads/2022/07/Hospital-Seberang-Jaya_Gathercare-Medical-Protection-Medical-Cost-Sharing.jpg', 'Hospital Seberang Jaya, Jln Tun Hussein Onn, Seberang Jaya, 13700 Perai, Pulau Pinang', '043827333', '043970754', 'ppcpenang@moh.gov.my', 'jknpenang.moh.gov.my/hsj/', 'Mon-Sun: 24Hrs', 'Hospital Seberang Jaya merupakan sebuah hospital kerajaan yang terletak di Pulau Pinang, Malaysia. Hospital Seberang Jaya merupakan salah satu hospital utama di Pulau Pinang. Ia terletak di kawasan strategik Seberang Perai Tengah, Pulau Pinang berhampiran Lebuh Raya Utara-Selatan (PLUS) dan Lebuhraya Butterworth-Kulim (BKE) dan kawasan perindustrian Prai dan Bukit Mertajam.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.150065401106!2d100.4045264757104!3d5.394091335255075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac5da15b86f23%3A0xc40095b41a8887f7!2sHospital%20Seberang%20Jaya!5e0!3m2!1sen!2smy!4v1708427361783!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1014, 'Hospital Pulau Pinang', 'https://lh3.googleusercontent.com/p/AF1QipOVTmawLD42qKASvQy5PlO6wfp1Trpdr0BBq_b7=s680-w680-h510', 'Hospital Pulau Pinang, Jalan Residensi, 10990 George Town, Pulau Pinang', '042225333', '042225333', 'hpinang@moh.gov.my', 'jknpenang.moh.gov.my/hsj/', 'Mon-Sun: 24Hrs', 'Hospital Pulau Pinang merupakan sebuah hospital kerajaan yang terletak di George Town , Pulau Pinang, Malaysia.\r\nHospital Pulau Pinang merupakan antara kemudahan rawatan kesihatan yang terawal di adakan di Malaysia. ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.9996850496664!2d100.30815372571048!3d5.417015185030147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac3b15a331655%3A0xa381d352fd842b5f!2sPenang%20General%20Hospital!5e0!3m2!1sen!2smy!4v1708427659380!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1015, 'Hospital Miri, Sarawak', 'https://assets.hmetro.com.my/images/articles/2016_SR140916KY061_1581483312.jpg', 'Hospital Miri, Q353, 98000 Miri, Sarawak', '085460600', '085416514', 'hospitalmiri@moh.gov.my', 'jknsarawak.moh.gov.my/hmiri/', 'Mon-Sun: 24Hrs', 'Hospital Miri merupakan sebuah hospital kerajaan yang terletak di Miri, Sarawak, Malaysia.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.1959505896584!2d113.99723747497737!3d4.374353695599752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x321f48e1ba999395%3A0xa7857de3ea207758!2sMiri%20Hospital!5e0!3m2!1sen!2smy!4v1708427876312!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1016, 'Sultan Haji Ahmad Shah Hospital, Temerloh', 'https://assets.bharian.com.my/images/articles/hm151hosp_1624202022.jpg', 'Sultan Haji Ahmad Shah Hospital, Jalan Maran, Taman Harapan, 28000 Temerloh, Pahang', '092955333', '092955333', 'hoshas@moh.gov.my', 'jknpahang.moh.gov.my/hoshas/', 'Mon-Sun: 24Hrs', 'Hospital Sultan Haji Ahmad Shah terletak di bandar Temerloh, Pahang. Ia terletak di pertengahan Lebuhraya Kuala Lumpur - Kuantan.\r\nHospital ini dibina bagi menggantikan Hospital Mentakab yang telah lama. Pembinaannya dimulakan pada Jun 2002 dan tamat pada 15 Jan 2005. Ia mula beroperasi secara berperingkat pada Mac 2006, dan kemudian dirasmikan Sultan Pahang pada 27 Mac 2006 (umur 17) bersamaan 26 Safar 1427H.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.574299994149!2d102.44896447570903!3d3.453159451207106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cec7773ad78f01%3A0xe7a5e471a11b96f5!2sSultan%20Haji%20Ahmad%20Shah%20Hospital%2C%20Temerloh!5e0!3m2!1sen!2smy!4v1708428108271!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1017, 'Tengku Ampuan Afzan Hospital, Pahang', 'https://review.ibanding.com/company/1532440630.JPG', 'Tengku Ampuan Afzan Hospital, Jalan Tanah Putih, 25100 Kuantan, Pahang', '095133333', '095142712', 'htaa@moh.gov.my', 'jknpahang.moh.gov.my/htaa/', 'Mon-Sun: 24Hrs', 'Perkhidmatan Hospital Tengku Ampuan Afzan (HTAA) bermula pada tahun 1904, sebagai sebuah Hospital Daerah Kuantan yang dikenali sebagai Rumah Sakit Umum Kuantan. Hospital ini telah dinaikkan taraf kepada Hospital Besar pada tahun 1955 setelah bandar Kuantan diistiharkan sebagai ibu negeri Pahang.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0423197036603!2d103.31893987570902!3d3.8009226487989265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8b07870b33c15%3A0x552246d772783423!2sTengku%20Ampuan%20Afzan%20Hospital!5e0!3m2!1sen!2smy!4v1708428465551!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1018, 'Hospital Seri Manjung, Perak.', 'https://medical.my/wp-content/uploads/2022/08/hospital-seri-manjung.jpg', 'Hospital Seri Manjung, 32040 Seri Manjung, Perak', '056896600', '056896600', 'hsmanjung@moh.gov.my', 'jknperak.moh.gov.my/hsmanjung/', 'Mon-Sun: 24Hrs', 'Hospital Seri Manjung ialah sebuah hospital kerajaan yang terletak di negeri Perak, Malaysia.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.1751376638554!2d100.65988517570914!3d4.18594404590341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cb2d0a2b5df3fb%3A0x8f5a3a28eb7756c9!2sSeri%20Manjung%20Hospital!5e0!3m2!1sen!2smy!4v1708428654801!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1019, 'Hospital Umum Sarawak', 'https://gathercare.com/wp-content/uploads/2022/07/Hospital-Umum-Sarawak_Gathercare-Medical-Protection-Medical-Cost-Sharing.jpeg', 'Hospital Umum Sarawak, Jalan Hospital, 93586 Kuching, Sarawak', '082276666', '082242751', 'sgh@moh.gov.my', 'jknsarawak.moh.gov.my/hus/', 'Mon-Sun: 24Hrs', 'Hospital Umum Sarawak merupakan sebuah hospital kerajaan yang terletak di Sarawak, Malaysia.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3703658093477!2d110.33627687571179!3d1.5436600609206939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7859c696909%3A0x17af568b1d348182!2sHospital%20Umum%20Sarawak!5e0!3m2!1sen!2smy!4v1708428851867!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1020, 'Hospital Sibu, Sarawak.', 'https://apicms.thestar.com.my/uploads/images/2023/06/27/2147643.jpg', 'Hospital Sibu, KM 5 1/2, Jalan Ulu Oya, Pekan Sibu, 96000 Sibu, Sarawak', '084343333', '084343333', 'hsibu@moh.gov.my', 'jknsarawak.moh.gov.my/hsibu/', 'Mon-Sun: 24Hrs', 'Hospital Sibu merupakan sebuah hospital kerajaan yang terletak di Sarawak, Malaysia. Hospital Sibu merupakan hospital kedua terbesar di negeri Sarawak, Malaysia. Ia merupakan hospital utama dan rujukan bagi Wilayah Tengah di Sarawak, Malaysia. Ia berkhidmat sebagai hospital rujukan bagi Hospital Daerah sepanjang lembah Rejang dan juga di Mukah, Saratok dan Bintulu.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.613942829534!2d111.88931407571032!3d2.296476357800632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31f780915bc3d8d7%3A0x95c626ec12610d19!2sSibu%20Hospital!5e0!3m2!1sen!2smy!4v1708429099227!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1021, 'Hospital Tawau, Sabah.', 'https://assets.bharian.com.my/images/articles/tawauhospp1_1705625098.jpg', 'Hospital Tawau, 67, Peti Surat, 91007 Tawau, Sabah', '089773533', '089773533', 'pengarah.tawau@moh.gov.my', 'jknsabah.moh.gov.my/htwu/', 'Mon-Sun: 24Hrs', 'Hospital Tawau merupakan sebuah hospital kerajaan yang terletak di Tawau, Sabah, Malaysia. Ia merupakan sebuah hospital rujukan utama untuk pantai Timur Sabah selain dari Hospital Sandakan.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.4274863697858!2d117.8809407387639!3d4.248466123772015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32159e7de895776d%3A0x913a242feb250a92!2sTawau%20Hospital!5e0!3m2!1sen!2smy!4v1708429302820!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1022, 'Queen Elizabeth Hospital II, Sabah', 'https://codeblue.galencentre.org/wp-content/uploads/2020/06/Queen-Elizabeth-II-Hospital.jpg', 'Queen Elizabeth Hospital II, Lorong Bersatu, Off, Jalan Damai, Luyang Commercial Centre, 88300 Kota Kinabalu, Sabah', '088324600', '088272454', 'pengarah.hqe2@moh.gov.my', 'jknsabah.moh.gov.my/hqe2/', 'Mon-Sun: 24Hrs', 'Hospital Queen Elizabeth merupakan sebuah hospital kerajaan yang terletak di Kota Kinabalu, Sabah, Malaysia. ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.20489670379!2d116.09121787571162!3d5.966492529383979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b690bede609a7%3A0xefc5a7bbfbb0642d!2sQueen%20Elizabeth%20Hospital%20II!5e0!3m2!1sen!2smy!4v1708429878098!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1023, 'Hospital Duchess of Kent, Sabah', 'https://gathercare.com/wp-content/uploads/2022/07/Hospital-Duchess-Of-Kent_Gathercare-Medical-Protection-Medical-Cost-Sharing.jpg', 'Hospital Duchess of Kent, KM 3.2, Jalan Utara, 90000 Sandakan, Sabah', '089248600', '089213607', 'hdok@moh.gov.my', 'jknsabah.moh.gov.my/hdok/', 'Mon-Sun: 24Hrs', 'Hospital Duchess of Kent (HDOK) ialah sebuah hospital kerajaan terletak sekitar 3.2 kilometer daripada pusat bandar Sandakan, Sabah, Malaysia.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.9762763834724!2d118.10038097571142!3d5.858959030527387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3238db3102cbb7f3%3A0x473fba15fffc4b40!2sDuchess%20of%20Kent%20Hospital%2C%20Sandakan!5e0!3m2!1sen!2smy!4v1708430121301!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1024, 'Hospital Melaka, Melaka', 'https://clinicalresearch.my/wp-content/uploads/2021/01/Hospital-Melaka.jpg', 'Hospital Melaka, Jalan Mufti Haji Khalil, 75400, Melaka', '062892344', '062841590', 'drzaharimah@moh.gov.my', 'jknmelaka.moh.gov.my/hmelaka/', 'Mon-Sun: 24Hrs', 'Hospital Melaka merupakan sebuah hospital yang dibiayai oleh kerajaan yang terletak di Melaka, Malaysia. Ia merupakan hospital tertier dan pakar, ia berkhidmatan sebagai pusat rujukan bagi pesakit dari pusat kesihatan utama dan kedua di Melaka dan termasuk juga bahagian utara Johor dan daerah Tampin, Negeri Sembilan.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8311015492604!2d102.2583928757104!3d2.2172858581723274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1efd13c8080ed%3A0x27e0cc2279cc745f!2sMelaka%20Hospital!5e0!3m2!1sen!2smy!4v1708430412125!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(1025, 'Hospital Tuanku Ja’afar Seremban, Negeri Sembilan.', 'https://upload.wikimedia.org/wikipedia/commons/4/4b/Hospital_Tuanku_Ja%27afar%2C_Seremban%2C_Negeri_Sembilan_-_panoramio.jpg', 'Hospital Tuanku Ja’afar Seremban, Jalan Rasah, Bukit Rasah, 70300 Seremban, Negeri Sembilan', '067684000', '067684000', 'htjs@moh.gov.my', 'jknns.moh.gov.my/htjs/', 'Mon-Sun: 24Hrs', 'Hospital Tuanku Ja’afar, Seremban ( HTJS ) terletak di kawasan seluas 26 hektar di Jalan Rasah, 70300 Seremban. Hospital Tuanku Ja\'afar, Seremban berfungsi di bawah jagaan Kementerian Kesihatan Malaysia. Hospital ini mempunyai 1143 katil dan adalah yang terbesar di Negeri Sembilan. Hospital ini mempunyai 23 kepakaran klinikal, yang memberi perkhidmatan kepada penduduk Negeri Sembilan. Ia merupakan hospital rujukan bagi semua Hospital Daerah, Pusat Kesihatan dan semua Hospital serta Klinik Swasta di Negeri Sembilan.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3570574947184!2d101.94225527570961!3d2.7097576556949625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cde77aebffb071%3A0x476b754d9666c9d3!2sTuanku%20Ja&#39;afar%20Hospital%2C%20Seremban%20(Hospital%20Rasah)!5e0!3m2!1sen!2smy!4v1708430640137!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(4000) NOT NULL,
  `url` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `img`, `url`) VALUES
(1001, 'Blood Donation Events Malaysia · 2024 Feb & Mar', 'https://i.pinimg.com/736x/b3/7a/6c/b37a6ce881ff1c4af1e74da754f7ed2a.jpg', ''),
(1002, 'Common Blood Donation Myths | Feb. 19, 2024 | News 19 at 8 a.m.', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_c3pMuehLWk?si=-emIbGyrg6g4qDLr\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(1003, 'Blood Donation Drive by Assunta Hospital | 29th February 2024 (Thursday)', 'https://i.pinimg.com/736x/94/70/9e/94709e3128003b07326430262c6f6af1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `join_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `join_date`) VALUES
(121, 'muhoyo', 'muhoyo@gmail.com', '123456', '2024-02-25 17:34:03'),
(122, 'ammar', 'ammarsyauqi1999@gmail.com', 'ammar123', '2024-02-25 17:35:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminp`
--
ALTER TABLE `adminp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highscore`
--
ALTER TABLE `highscore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminp`
--
ALTER TABLE `adminp`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `highscore`
--
ALTER TABLE `highscore`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
