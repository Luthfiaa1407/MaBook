-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Jun 2025 pada 01.47
-- Versi server: 8.4.3
-- Versi PHP: 8.3.16

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
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `name`, `website`, `description`, `created_at`) VALUES
(1, 'Andrea Hirata', 'https://andreahirata.com', 'Penulis Laskar Pelangi', '2025-06-19 23:21:50'),
(2, 'Tere Liye', 'https://tereliye.com', 'Penulis novel fiksi populer', '2025-06-19 23:21:50'),
(3, 'J.K. Rowling', 'https://rowling.com', 'Penulis Harry Potter', '2025-06-19 23:21:50'),
(4, 'Yuval Noah Harari', 'https://ynharari.com', 'Penulis buku sejarah dan masa depan manusia', '2025-06-19 23:21:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `book_id` bigint UNSIGNED DEFAULT NULL,
  `last_page_read` int DEFAULT NULL,
  `last_read` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `exemplars` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `author_id` bigint UNSIGNED DEFAULT NULL,
  `publisher_id` bigint UNSIGNED DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `year` varchar(4) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file` mediumtext COLLATE utf8mb4_general_ci,
  `cover` mediumtext COLLATE utf8mb4_general_ci,
  `description` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
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
-- Struktur dari tabel `categories'
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_general_ci,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `categories`
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
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `book_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `comment`, `book_id`, `user_id`, `created_at`) VALUES
(1, 'wailah', 3, 1, '2025-06-20 07:27:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `book_id`, `created_at`) VALUES
(1, 5, 6, '2025-06-19 21:49:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_general_ci,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `website`, `description`, `created_at`) VALUES
(1, 'Gramedia', 'https://gramedia.com', 'Penerbit besar Indonesia', '2025-06-19 23:21:51'),
(2, 'Bentang Pustaka', 'https://bentangpustaka.com', 'Penerbit fiksi & nonfiksi', '2025-06-19 23:21:51'),
(3, 'Bloomsbury', 'https://bloomsbury.com', 'Penerbit asal Inggris', '2025-06-19 23:21:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `read_points`
--

CREATE TABLE `read_points` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `book_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('ADMIN','USER') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'Arjuna Gunatama Sihombing', 'arjuna@gmail.com', 'Rjun', '$2y$10$z3ZHGeJng5ff0AVYMNv/zOweYd3jQcsck2lKM7qH9M6sKKMXExCL.', 'USER', '2025-06-19 23:23:24'),
(2, 'admin123', 'admin@gmail.com', 'adminkece', '$2y$10$TZrXnu4InVNh6.BL/CLJdejRrJtIMVfNu.XxDbBZ83v/4ww57JBK.', 'ADMIN', '2025-06-19 23:24:06'),
(3, 'arjuna tamvan', 'arjuna1@gmail.com', 'arjuna', '$2y$10$EqHzXr5ilUS5IrD97L3daOPnrQ.MEy36gHdT/zsFrl73KUC.4YH6u', 'USER', '2025-06-20 07:42:06'),
(4, 'arjuna keche', 'arjuna2@gmail.com', 'arjuna', '$2y$10$yO8UriO5MJ0uHjjqmrSg9O/RF.rKp4R9lG51FKWdXzL6sBqOukOEi', 'USER', '2025-06-20 07:47:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `fk_bookmarks_user` (`user_id`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `fk_comments_user` (`user_id`);

--
-- Indeks untuk tabel `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `read_points`
--
ALTER TABLE `read_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `fk_readpoints_user` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `read_points`
--
ALTER TABLE `read_points`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD CONSTRAINT `bookmarks_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_bookmarks_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_comments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `read_points`
--
ALTER TABLE `read_points`
  ADD CONSTRAINT `fk_readpoints_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `read_points_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
