-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 04:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `female`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_11_142630_create_sessions_table', 1),
(7, '2022_10_22_151216_product', 1),
(8, '2022_10_23_061138_tbl_powder', 1),
(9, '2022_10_23_061221_tbl_mascara', 1),
(10, '2022_10_23_061244_tbl_liptint', 1),
(11, '2022_10_23_061620_tbl_blushon', 1),
(12, '2022_10_23_061817_tbl_foundation', 1),
(13, '2022_10_23_061918_tbl_browpencil', 1),
(14, '2022_10_28_141928_review_blushon', 1),
(15, '2022_10_28_141928_review_browpencil', 1),
(16, '2022_10_28_141928_review_foundation', 1),
(17, '2022_10_28_141928_review_liptint', 1),
(18, '2022_10_28_141928_review_mascara', 1),
(19, '2022_10_28_141928_review_powder', 1),
(20, '2022_10_30_042231_rating', 2);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_blushon`
--

CREATE TABLE `review_blushon` (
  `no_produk` int(25) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_blushon`
--

INSERT INTO `review_blushon` (`no_produk`, `nama_produk`, `review`, `username`) VALUES
(3, 'Colorland Explorer Focus On Me', 'mantap ini', 'abelhd');

-- --------------------------------------------------------

--
-- Table structure for table `review_browpencil`
--

CREATE TABLE `review_browpencil` (
  `no_produk` int(25) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_browpencil`
--

INSERT INTO `review_browpencil` (`no_produk`, `nama_produk`, `review`, `username`) VALUES
(3, 'BROW WIZ Retractable Eyebrow', 'mantap kali ini bang', 'abelhd'),
(1, 'Precise Brow Matic', 'ssss', 'abelhd'),
(1, 'Precise Brow Matic', 'barang nya ok', 'abel');

-- --------------------------------------------------------

--
-- Table structure for table `review_foundation`
--

CREATE TABLE `review_foundation` (
  `no_produk` int(25) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_foundation`
--

INSERT INTO `review_foundation` (`no_produk`, `nama_produk`, `review`, `username`) VALUES
(2, 'Airy Poreless Fluid Foundation', 'bagus banget', 'abelhd'),
(2, 'Airy Poreless Fluid Foundation', 'aku setiap hari pakai ini keren banget', 'abelhd');

-- --------------------------------------------------------

--
-- Table structure for table `review_liptint`
--

CREATE TABLE `review_liptint` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_produk` int(25) NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_mascara`
--

CREATE TABLE `review_mascara` (
  `no_produk` int(25) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_powder`
--

CREATE TABLE `review_powder` (
  `no_produk` int(25) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_powder`
--

INSERT INTO `review_powder` (`no_produk`, `nama_produk`, `review`, `username`) VALUES
(2, 'Silky Smooth Transculent Powder', 'gapernah berpaling dari fit me iniii🫶🏻 apalagi shadenya cocok banget di kulit aku, buat kulit aku yang tipe berminyak juga aman banget dipake seharian, tapi jangan lupa pake primer dulu sebelum pake foundation ya buat yang kulitnya berminyak😆', 'abelhd');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CvdhEaGc4fPpYbH8zYxLAcRVTW7uG2wq8lqUQRC9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQTFNdUcyWHRLMGptOWZUck5EQ2V6NGZsY1FSTGlsSUZadnIwUHZDNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fX0=', 1667576786);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blushon`
--

CREATE TABLE `tbl_blushon` (
  `no_produk` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blushon`
--

INSERT INTO `tbl_blushon` (`no_produk`, `id_produk`, `brand`, `nama_produk`, `image`, `keterangan`, `logo`, `harga`) VALUES
(1, '654565', 'ESQA', 'Blush', '654565.png', 'Our gorgeous shades have buildable coverage. Enhance the color of your cheeks with our shimmery soft pink blush. It\'s Vegan, Halal and made without harsh chemicals. This is the perfect size for travelling.', 'Blush.png', '129.000'),
(2, '272214', 'WARDAH', 'Colorfit Cream Blush', '272214.png', 'Wardah Colorft Cream Blush adalah perona pipi dengan kandungan Vitamin E yang bertekstur creamy to powdery. Formula ringan dan teksturnya yang creamy, membuatnya mudah diratakan baik di atas bedak maupun foundation. Dengan Glow Colorpigment, memberikan warna pigmented untuk pipi glowing yang tahan hingga 8 jam.', 'Colorfit Cream Blush.png', '199.000'),
(3, '674223', 'YOU BEAUTY', 'Colorland Explorer Focus On Me', '674223.png', 'Selling Point :\r\n1. Color True Pigmentation : Mencerahkan tampilan wajah anda dengan natural\r\n2. Silky -fine powder formula : Formula lembut yang mudah untuk dibaurkan ke pipi anda\r\n3. All day flushed cheek :Menghasilkan warna cerah yang tahan lama untuk menonjolkan tampilan pipi anda', 'Colorland Explorer Focus On Me.png', '139.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_browpencil`
--

CREATE TABLE `tbl_browpencil` (
  `no_produk` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_browpencil`
--

INSERT INTO `tbl_browpencil` (`no_produk`, `id_produk`, `brand`, `nama_produk`, `image`, `keterangan`, `logo`, `harga`) VALUES
(1, '944322', 'O.TWO.O', 'Precise Brow Matic', '944322.png', 'PRECISE BROWDEFINER - Ultra-fine self-sharpening mechanical brow pencil draws on tiny brow hairs to fill in sparse areas or gaps, and spoolie brush styles and defines brow shape.16 HOURS long lasting - waterproof, easy to color brows and smudge proof', 'Precise Brow Matic.png', '180.000'),
(2, '944321', 'PINKFLASH', 'Automatic Eyebrow Pencil', '944321.png', 'New high-quality professional makeup eyebrow pencil, dengan kelebihan tahan lama, tahan air, pigmentasi yang luar biasa dan ujung pensil yang lembut, dapat dengan mudah menggambar bentuk alis yang diinginkan.', 'Automatic Eyebrow Pencil.png', '149.000'),
(5, '332355', 'SOMETHINC', 'BROW WIZ Retractable Eyebrow', '332355.png', 'PRECISE! Get your very precise brow shape in SECONDS!  Ujung pensil ultra-fine 0.55m dari BROW WIZ memudahkan untuk menggambar alis dengan sempurna! Dilengkapi dengan spoolie untuk blend & brush agar tampilan alis terlihat lebih natural. All-in-one brow tool for easy, on-the-go application!', 'BROW WIZ Retractable Eyebrow.png', '129.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foundation`
--

CREATE TABLE `tbl_foundation` (
  `no_produk` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_foundation`
--

INSERT INTO `tbl_foundation` (`no_produk`, `id_produk`, `brand`, `nama_produk`, `image`, `keterangan`, `logo`, `harga`) VALUES
(2, '764432', 'DEAR ME BEAUTY', 'Airy Poreless Fluid Foundation', '764432.png', 'A light-as-air, non-comedogenic liquid foundation to mask and cover imperfections with buildable coverage and unify uneven skin tone for a smooth, second-skin finish that’s everlasting. With added care of sun shield protection, Airy Poreless Fluid Foundation SPF 18 defends skin from harmful UVA/B rays.', 'Airy Poreless Fluid Foundation.png', '169.000'),
(3, '674486', 'BLP BEAUTY', 'Face Base', '674486.png', 'A light-as-air, non-comedogenic liquid foundation to mask and cover imperfections with buildable coverage and unify uneven skin tone for a smooth, second-skin finish that’s everlasting. With added care of sun shield protection, Airy Poreless Fluid Foundation SPF 18 defends skin from harmful UVA/B rays.', 'Face Base.png', '119.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_liptint`
--

CREATE TABLE `tbl_liptint` (
  `no_produk` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_liptint`
--

INSERT INTO `tbl_liptint` (`no_produk`, `id_produk`, `brand`, `nama_produk`, `image`, `keterangan`, `logo`, `harga`) VALUES
(1, '123452', 'ROLLOVER REACTION', 'DEWDROP! Lip and Cheek Tint', '123452.png', 'A hydrating lip and cheek tint rich with naturally-derived nutrients to nourish and protect your lips. Buildable pigment, glides easily on the lips and easy to blend on the cheeks with a healthy dewy finish that leaves beautiful stain.', 'DEWDROP! Lip and Cheek Tint.png', '119.000'),
(2, '231123', 'ROSE ALL DAY', 'Plush Liptint', '231123.png', 'Plush Lip Tint. A comfortable and smooth glossy lip stain that enhances natural lip color while making your lips look as plush as a teddy bear! Delivers buildable pigment in every swipe and leaves a subtle lip stain with long-lasting color. Plush Lip Tint feels weightless on the lips while infusing Squalane & Vitamin E for the perfect plush pout all day long!', 'Plush Liptint.png', '219.000'),
(3, '577212', 'FOCALLURE', 'GLOSSY TINT', '577212.png', 'Untuk membuat bibir yang bening dan melenting, Focallure dewy lip tint baru saja diluncurkan\r\n[Tekstur bening basah] Tekstur bening basah, berair, mengandung vitamin E untuk menutrisi bibir, dapat membuat bibir Anda seketika penuh kilap, dan dengan mudah mendapatkan hasil akhir bibir yang melenting', 'GLOSSY TINT.png', '129.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mascara`
--

CREATE TABLE `tbl_mascara` (
  `no_produk` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mascara`
--

INSERT INTO `tbl_mascara` (`no_produk`, `id_produk`, `brand`, `nama_produk`, `image`, `keterangan`, `logo`, `harga`) VALUES
(1, '433214', 'LOREAL PARIS', 'Volume Lash Paradise', '433214.png', 'Dapatkan Bulu Mata yang Tebal, Lentik dan Panjang. L\'Oreal Paris Volume Lash Paradise merupakan Maskara yang tahan air, dapat menambah volume pada bulu mata, Memanjangkan bulu mata dari bagian belakang hingga depan diaplikasikan dengan bulu brush yang Lembut selembut sutra.', 'Volume Lash Paradise.png', '149.000'),
(2, '875443', 'LOOKE COSMETICS', 'Holy Lash Elixir', '875443.png', 'Holy Lash Elixir merupakan maskara yang tahan lama yang cocok untuk digunakan dalam aktivitas sehari-hari. Holy Lash Elixir dapat memanjangkan dan melentikkan bulu mata tanpamembuatnya terlihat menggumpal atau luntur. Dengan kombinasi warna hitam pekat dan bulu sikat khusus, Holy Lash Elixir dapat melapisi bulu mata dengan mudah dan memberi efek bervolume yang maksimal. Selain itu, Argan oil yang terkandung dalam produk ini membantu untuk membuat bulu mata tampak lebih panjang.', 'Holy Lash Elixir.png', '179.999'),
(3, '445221', 'SYCA', 'Lash Out Love - Dazzling', '445221.png', 'Creating “feel like real lash” mascara that you’d love to wear in your everyday.\r\n\r\nFeatures\r\nThick & Volume — A perfect eyelashes covering, quickly fit, form film layer and express strong effect with uniform color. It’s filled with elastic polymer and synthetic fibers as well that create the look fuller and more voluminous without flaking.\r\n\r\nWhy it’s special?\r\nThey\'re lightweight and comfortable to wear, it will improve your natural lashes\r\nIt contains Vit E & Castor seed oil which naturally strengthen, lengthen and thicken the lashes over time.\r\nFilled with Trehalose as well to moisturize lashes and gives an extra smooth application.\r\nFlake free and waterproof, it will stay on without melting or smudging!\r\nThe applicator is a silicone brush that more hygienic than a standard nylon brush.\r\n', 'Lash Out Love - Dazzling.png', '199.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_powder`
--

CREATE TABLE `tbl_powder` (
  `no_produk` bigint(20) UNSIGNED NOT NULL,
  `id_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_powder`
--

INSERT INTO `tbl_powder` (`no_produk`, `id_produk`, `brand`, `nama_produk`, `image`, `keterangan`, `logo`, `harga`) VALUES
(1, '121322', 'LUXCRIME', 'Blur & Cover Two Way Cake', '121322.png', 'Instantly mattify and set your face! It’sulated to transform the look of your skin with soft-focus powder which gives smoothing and imperfections covering effect. Enriched with ultra-soft particles with velvet matte finish. Leaves your complexion flawless and evens out your skin with the added benefit of UV protection.', 'Blur & Cover Two Way Cake.png', '169.000'),
(2, '234234', 'MAKE OVER', 'Silky Smooth Transculent Powder', '234234.png', 'Set make up Anda dengan Produk ini! Silky Smooth Translucent Powder yaitu Bedak natural dan halus. Tekstur yang selembut sutra membantu melembabkan dan menyerap kelebihan minyak serta menjaga wajah tetap segar sepanjang hari. Produk ini mengandung Moisturizer untuk menjaga kelembaban kulit dan mencegah dehidrasi kulit, menahan minyak dan High performance particle powder. ', 'Silky Smooth Transculent Face Loose Powder.png', '219.000'),
(14, '533667', 'NPURE', 'Cica Beat The Sun Powder', '533667.png', 'A light-as-air, non-comedogenic liquid foundation to mask and cover imperfections with buildable coverage and unify uneven skin tone for a smooth, second-skin finish that’s everlasting. With added care of sun shield protection, Airy Poreless Fluid Foundation SPF 18 defends skin from harmful UVA/B rays.', 'Cica Beat The Sun Powder.png', '139.000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `level`) VALUES
(7, 'abel', 'abelhenryan@gmail.com', NULL, '$2y$10$qTPo851mWYcDERFudDOd6OW.su8GdqOnPvOjLIQ49Xs51SNFOcMZa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-29 08:03:23', '2022-10-29 08:03:23', 1),
(8, 'abelhd', 'abelhendryan@gmail.com', NULL, '$2y$10$kXKjf/K0x6xW2.qD3KOQPuzRFFwe/2Fuw/QpP7.tlBeWi.Odb5YAW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-29 08:04:49', '2022-10-29 08:04:49', 2),
(9, 'adela', 'adela@gmail.com', NULL, '$2y$10$H6BwE/4PMMr8n3CRhNlCdeFGjPJrYeo3/yhgu7wwLAFYwNCjKsYYG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-29 09:06:08', '2022-10-29 09:06:08', 2),
(10, 'messi', 'messi@gmail.com', NULL, '$2y$10$3sTZRyn.H6t88QIcLvvdZeUNHYK3t/zBchEULKfLYq8I/mSAh..Vi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 01:46:09', '2022-11-02 01:46:09', 2),
(11, 'mazayajayajaya', 'jaya@gmail.com', NULL, '$2y$10$1Ez7NGKIMam7oaBaJzAQKetV5iPXf4FtSaVGCNX1Wf9AnD5mV7wza', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 06:12:25', '2022-11-02 06:12:25', 2),
(12, 'ronaldowati', 'ronaldowati@gmail.com', NULL, '$2y$10$LRxuxTkMZ4vhCZbWpZ8cMeT52atdpd5ZAhpulvxYYMhRXu4pylpd2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 06:14:12', '2022-11-02 06:14:12', 2);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_blushon`
--
ALTER TABLE `tbl_blushon`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indexes for table `tbl_browpencil`
--
ALTER TABLE `tbl_browpencil`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indexes for table `tbl_foundation`
--
ALTER TABLE `tbl_foundation`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indexes for table `tbl_liptint`
--
ALTER TABLE `tbl_liptint`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indexes for table `tbl_mascara`
--
ALTER TABLE `tbl_mascara`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indexes for table `tbl_powder`
--
ALTER TABLE `tbl_powder`
  ADD PRIMARY KEY (`no_produk`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blushon`
--
ALTER TABLE `tbl_blushon`
  MODIFY `no_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_browpencil`
--
ALTER TABLE `tbl_browpencil`
  MODIFY `no_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_foundation`
--
ALTER TABLE `tbl_foundation`
  MODIFY `no_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_liptint`
--
ALTER TABLE `tbl_liptint`
  MODIFY `no_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mascara`
--
ALTER TABLE `tbl_mascara`
  MODIFY `no_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_powder`
--
ALTER TABLE `tbl_powder`
  MODIFY `no_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
