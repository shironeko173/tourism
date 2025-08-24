-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 08, 2025 at 03:09 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `id` int NOT NULL,
  `nama` text NOT NULL,
  `lokasi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `lat` varchar(150) NOT NULL,
  `longt` varchar(150) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`id`, `nama`, `lokasi`, `deskripsi`, `lat`, `longt`, `image`) VALUES
(1, 'Nusa Penida', 'Bali, Indonesia', 'Nusa Penida berada di Provinsi bali, terletak di sebelah Tenggara dan dipisahkan oleh Selat Badung. Nusa Penida terkenal dengan pantai-pantai berpasir putih dan juga pemandangan alam yang memukau. Mulai dari tebing-tebing tinggi hingga pemandangan bawah laut yang cantik. Salah satu pantai yang ikonik di Nusa Penida adalah Pantai Kelingking. Pantai ini memiliki tebing hijau seperti bentuk dinosaurus. ', '-8.751411837', '115.4741954', '/rdfFile/images/asia1.jpg'),
(2, 'Labuan Bajo', 'Nusa Tenggara Timur, Indonesia', 'Labuan Bajo merupakan salah satu kota yang berada di kecamatan Komodo, Kabupaten Manggarai Barat, provinsi Nusa Tenggara Timur, Indonesia. Labuan Bajo dan Taman Nasional Komodo adalah satu entitas yang tidak dapat terpisahkan. Di Taman Nasional Komodo, akan disuguhkan beberapa atraksi yang menakjubkan. Salah satunya adalah berfoto bersama Komodo. Salah satu ikonik lainnya ialah Pink Beach atau yang dikenal sebagai Pantai Merah. Warna merah di pantai ini ternyata berasal dari hewan mikroskopis dan pecahan batu karang berwarna kemerahan di sekitar pesisir pantai.', '-8.4415068', '119.8687452', '/rdfFile/images/asia2.jpeg'),
(3, 'Raja Ampat', 'Papua, Indonesia', 'Kabupaten Raja Ampat adalah salah satu kabupaten di provinsi Papua Barat. Daya, Indonesia. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya. Yang gemar diving dan snorkeling, wilayah perairan Raja Ampat adalah salah satu destinasi diving terbaik di dunia. Tak hanya keindahan bawah lautnya yang luar biasa, pemandangan di atas permukaan juga tak kalah memesona. Panorama deretan pulau-pulau batu di tengah gradasi air biru terlihat begitu surgawi saat dilihat dari atas bukit.', '-0.5642022', '130.2686252', '/rdfFile/images/asia3.jpeg'),
(4, 'Gunung Fuji', 'Honshu, Jepang', 'Gunung Fuji, terletak di pulau Honshu, adalah gunung tertinggi di Jepang, dengan ketinggian 3.776,24 m. Gunung ini adalah gunung berapi tertinggi kedua yang terletak di sebuah pulau di benua Asia, dan puncak tertinggi ketujuh dari sebuah pulau di Bumi. Gunung ini biasanya digunakan sebagai ikon budaya Jepang dan sering digambarkan dalam karya seni dan fotografi, serta dikunjungi oleh banyak wisatawan dan pendaki.', '35.3606422', '138.7186086', '/rdfFile/images/asia4.jpeg'),
(5, 'Piramida Giza', 'Mesir', 'Piramida Giza merupakan peninggalan dari era Kerajaan Lama Mesir yang dibangun sekitar 4.500 tahun yang lalu. Dibangun oleh Firaun Khufu, Piramida Giza berdiri setinggi 138 meter dan merupakan struktur buatan manusia tertinggi di dunia hingga Katedral Lincoln selesai dibangun di Inggris pada abad ke-14. Piramida Agung Giza adalah piramida tertua dan terbesar dari tiga piramida yang ada di Nekropolis Giza dan merupakan satu-satunya bangunan yang masih menjadi bagian dari Tujuh Keajaiban Dunia.', '29.9792391', '31.1320132', '/rdfFile/images/afrika1.jpeg'),
(6, 'Menara Eiffel', 'Paris, Prancis', 'Menara Eiffel sebelumnya bernama Menara Paris merupakan sebuah menara besi yang dibangun di Champ de Mars di tepi Sungai Seine, Paris. Menara ini terdiri dari 18.038 bagian dari besi, 2,5 juta paku, 7.300 ton besi, dan 60 ton cat saat pembangunannya. Menara ini telah menjadi ikon global Prancis dan salah satu struktur paling terkenal di dunia yang merupakan simbol pertemuan sepasang kekasih.', '48.8583736', '2.2922926', '/rdfFile/images/eropa1.jpeg'),
(7, 'Kincir Angin Raksasa', 'Belanda', 'Belanda disebut negara kincir angin karena Belanda memiliki lebih dari 1.200 kincir angin. Dalam sejarahnya, kincir angin memiliki peranan sangat penting karena berfungsi untuk memompa air keluar dari dataran rendah kembali ke sungai. Sebanyak 26 persen wilayah Belanda berada di ketinggian yang lebih rendah dari permukaan air laut. Kincir angin dipilih karena ramah lingkungan dan memanfaatkan tenaga angin sebagai sumber energinya.', '52.4735299', '4.8202502', '/rdfFile/images/eropa2.jpeg'),
(8, 'Gedung Opera Sydney', 'Sydney, Australia', 'Arsitektur unik Gedung Opera Sydney terdiri atas serangkaian bangunan yang menyerupai kerang putih. Struktur atapnya juga terdiri dari layar yang mengkilap. Gedung Opera Sydney adalah satu di antara bangunan-bangunan paling terkenal di dunia. Para wisatawan biasanya mengambil foto di tangga Gedung Opera Sydney, serta menjelajahi penampilan luarnya yang megah dan interiornya yang indah.', '-33.8567799', '151.213108', '/rdfFile/images/australia1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `searching` varchar(50) NOT NULL,
  `waktu_cari` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`searching`, `waktu_cari`) VALUES
('Japan', '2022-12-13 19:30:58'),
('Japan', '2022-12-13 19:31:19'),
('Indonesia', '2022-12-13 19:31:43'),
('German', '2022-12-13 19:37:51'),
('Malaysia', '2022-12-13 19:38:07'),
('Australia', '2022-12-13 19:38:21'),
('Singapore', '2022-12-13 19:38:38'),
('England', '2022-12-13 19:38:56'),
('Germany', '2022-12-13 19:39:22'),
('North_Korea', '2022-12-13 19:39:47'),
('Asia', '2025-08-07 15:34:41'),
('Asia', '2025-08-07 15:37:12'),
('Asia', '2025-08-07 15:39:38'),
('Asia', '2025-08-07 15:40:29'),
('Indonesia', '2025-08-08 13:45:19'),
('Indonesia', '2025-08-08 13:45:48'),
('Malaysia', '2025-08-08 13:46:11'),
('Malaysia', '2025-08-08 13:47:04'),
('Malaysia', '2025-08-08 13:52:06'),
('Indonesia', '2025-08-08 13:52:28'),
('Malaysia', '2025-08-08 13:52:57'),
('Malaysia', '2025-08-08 13:58:12'),
('Singapore', '2025-08-08 13:58:35'),
('Singapore', '2025-08-08 14:02:15'),
('Singapore', '2025-08-08 14:12:45'),
('Malaysia', '2025-08-08 14:13:26'),
('Malaysia', '2025-08-08 14:14:05'),
('Malaysia', '2025-08-08 14:19:51'),
('Malaysia', '2025-08-08 14:21:16'),
('Malaysia', '2025-08-08 14:23:39'),
('Malaysia', '2025-08-08 14:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
