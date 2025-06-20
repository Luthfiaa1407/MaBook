-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2025 at 02:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mabook`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `website`, `description`, `created_at`) VALUES
(1, 'Cahyo', 'cahyo.web.id', 'mantep cuy', '2012-02-12 00:00:00'),
(2, 'Wawan', 'wawan.web.id', 'oke', '2011-02-01 00:00:00'),
(3, 'Gunawan ', 'gunawan.cong', 'ya gunawan', '2025-06-14 21:36:58'),
(4, 'Stephen Cox', 'coxueueue.com', 'ya', '2025-06-14 21:37:35'),
(5, 'Jack Wildeyeeee', 'wileye.oye', 'Ya, oye', '2025-06-14 21:37:54'),
(6, 'Dave Ettiad', 'davecuy.co.us', 'Ya, anjay', '2025-06-14 21:38:29'),
(7, 'Wright Britton Oye', 'brrrpatapim.co.uk', 'Ya, okelhh', '2025-06-14 21:38:54'),
(11, 'Andrea Hirata', 'https://andreahirata.com', 'Penulis novel terkenal asal Indonesia, dikenal lewat karya-karya inspiratif seperti Laskar Pelangi.', '2025-06-15 14:13:41'),
(12, 'Tere Liye', 'tereliye.com', 'Penulis produktif Indonesia yang banyak menulis novel bergenre drama, fantasi, dan motivasi.', '2025-06-15 14:14:01'),
(13, 'J.K. Rowling', 'rowling.com', 'Penulis asal Inggris, pencipta seri novel Harry Potter yang sangat terkenal di seluruh dunia.', '2025-06-15 14:14:19'),
(14, 'George Orwell', 'https://orwellfoundation.com', 'Penulis dan jurnalis Inggris yang dikenal dengan karya distopia seperti 1984 dan Animal Farm.', '2025-06-15 14:14:32'),
(15, 'Yuval Noah Harari', 'https://www.ynharari.com', 'Sejarawan dan penulis asal Israel yang dikenal lewat buku Sapiens dan Homo Deus.', '2025-06-15 14:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `last_page_read` int DEFAULT NULL,
  `last_read` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `user_id`, `book_id`, `last_page_read`, `last_read`) VALUES
(3, 3, 9, 1, '2025-06-15 16:57:39'),
(4, 3, 7, 0, '2025-06-14 16:58:01'),
(5, 3, 8, 3, '2025-06-15 18:34:17'),
(6, 3, 6, 2, '2025-06-15 17:41:59'),
(7, 4, 8, 3, '2025-06-15 18:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `exemplars` varchar(255) NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `publisher_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `file` mediumtext NOT NULL,
  `cover` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `exemplars`, `author_id`, `publisher_id`, `category_id`, `year`, `file`, `cover`, `description`, `created_at`) VALUES
(1, 'Laskar Pelangi', '10', 1, 1, 1, '2005', '/docs/laskarpelangi.pdf', '/images/laskarpelangi.jpg', 'Novel inspiratif tentang anak-anak Belitung.', '2025-06-19 23:21:51'),
(2, 'Bumi', '15', 2, 2, 1, '2014', '/docs/bumi.pdf', '/images/bumi.jpg', 'Petualangan remaja di dunia paralel.', '2025-06-19 23:21:51'),
(3, 'Harry Potter and the Sorcerer\'s Stone', '20', 3, 3, 1, '1997', '/docs/harrypotter1.pdf', '/images/harrypotter1.jpg', 'Kisah penyihir muda di Hogwarts.', '2025-06-19 23:21:51'),
(4, 'Sapiens', '12', 4, 2, 2, '2011', '/docs/sapiens.pdf', '/images/sapiens.jpg', 'Sejarah singkat umat manusia.', '2025-06-19 23:21:51'),
(5, 'Matematika SMA Kelas 10', '30', 2, 1, 3, '2020', '/docs/matematika10.pdf', '/images/matematika10.jpg', 'Buku pelajaran matematika wajib.', '2025-06-19 23:21:51'),
(6, 'Dear Nathan', '18', 2, 2, 4, '2016', '/docs/dearnathan.pdf', '/images/dearnathan.jpg', 'Cerita cinta anak SMA.', '2025-06-19 23:21:51'),
(7, 'Sejarah Dunia', '9', 4, 1, 5, '2009', '/docs/sejarahdunia.pdf', '/images/sejarahdunia.jpg', 'Perjalanan sejarah umat manusia.', '2025-06-19 23:21:51'),
(8, 'Finansial Cerdas', '25', 2, 1, 6, '2021', '/docs/finansialcerdas.pdf', '/images/finansialcerdas.jpg', 'Cara mengelola keuangan pribadi.', '2025-06-19 23:21:51'),
(9, 'Ilmu Pengetahuan Ringan', '14', 4, 2, 7, '2022', '/docs/sainspop.pdf', '/images/sainspop.jpg', 'Pengetahuan umum dalam sains.', '2025-06-19 23:21:51');


-- --------------------------------------------------------

--
-- Table structure for table `categories'
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `gambar`) VALUES
(1, 'Fiksi', 'Karya fiksi dan imajinatif', 'fantasi.jpg'),
(2, 'Non Fiksi', 'Berdasarkan fakta nyata', 'non-fantasi.jpg'),
(3, 'Pendidikan', 'Buku pelajaran dan referensi', 'pendidikan.jpg'),
(4, 'Romansa', 'Cerita cinta dan hubungan emosional', 'romansa.jpg'),
(5, 'Sejarah', 'Buku sejarah dan tokoh masa lalu', 'sejarah.jpg'),
(6, 'Keuangan', 'Investasi dan manajemen keuangan', 'finansialcerdas.jpg'),
(7, 'Sains Populer', 'Ilmu pengetahuan populer', 'sainspop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `comment` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `book_id`, `user_id`, `created_at`) VALUES
(2, 'Mantep, oke juga', 8, 3, '2025-06-15 17:25:21'),
(3, 'Sip,  bagus.', 8, 3, '2025-06-15 17:25:58'),
(4, 'Oke juga ini', 6, 3, '2025-06-15 17:41:57'),
(5, 'Wokeh,  terinspirasi saya', 8, 4, '2025-06-15 18:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `book_id`, `created_at`) VALUES
(1, 5, 6, '2025-06-19 21:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `website`, `description`, `created_at`) VALUES
(1, 'Elex Mediaaa', 'elex.comac', 'elekc', '2025-06-14 22:32:48'),
(3, 'Bentang Pustaka', 'https://bentangpustaka.com', 'Penerbit buku Indonesia yang menerbitkan berbagai buku fiksi dan non-fiksi berkualitas.', '2025-06-15 14:15:03'),
(4, 'Gramedia Pustaka Utama', 'https://gpu.id', 'Salah satu penerbit terbesar di Indonesia, terkenal dengan karya sastra dan buku populer.', '2025-06-15 14:15:15'),
(5, 'Bloomsbury Publishing', 'https://www.bloomsbury.com', 'Penerbit asal Inggris yang menerbitkan buku-buku besar seperti seri Harry Potter.', '2025-06-15 14:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `read_points`
--

CREATE TABLE `read_points` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('ADMIN','USER') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`, `created_at`) VALUES
(5, 'sheva', 'shevaluki02092005@gmail.com', 'luck0209', '$2y$10$/8NnyU4FdXm/a3zl5/Hl9uevYsg1IMf0DZthjiLESIVhwfKpS1nSy', 'USER', '2025-06-19 21:00:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `bookmarks_index_0` (`user_id`),
  ADD KEY `bookmarks_index_1` (`book_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_index_0` (`author_id`),
  ADD KEY `books_index_1` (`publisher_id`),
  ADD KEY `books_index_2` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_book_unique` (`user_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `read_points`
--
ALTER TABLE `read_points`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `read_points_index_0` (`user_id`),
  ADD KEY `read_points_index_1` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_index_0` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `read_points`
--
ALTER TABLE `read_points`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
