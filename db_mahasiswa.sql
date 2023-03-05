

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(32) DEFAULT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `jurusan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `jurusan`) VALUES
(1, '1234567890', 'John Doe', 'Teknik Informatika'),
(2, '2345678901', 'Jane Doe', 'Sistem Informasi'),
(3, '3456789012', 'Bob Smith', 'Teknik Elektro'),
(4, '4567890123', 'Alice Johnson', 'Manajemen Bisnis'),
(5, '5678901234', 'David Lee', 'Teknik Sipil'),
(6, '6789012345', 'Lisa Chen', 'Arsitektur'),
(7, '7890123456', 'Michael Davis', 'Akuntansi'),
(8, '8901234567', 'Jennifer Lee', 'Bahasa Inggris'),
(9, '9012345678', 'Richard Kim', 'Fisika'),
(10, '0123456789', 'Julia Wang', 'Kimia'),
(11, '2345678901', 'Daniel Park', 'Biologi'),
(12, '3456789012', 'Michelle Kim', 'Matematika'),
(13, '4567890123', 'Kevin Chen', 'Teknik Mesin'),
(14, '5678901234', 'Catherine Zhang', 'Psikologi'),
(15, '6789012345', 'Steven Yang', 'Hukum'),
(16, '7890123456', 'Emily Wu', 'Kedokteran'),
(17, '8901234567', 'Alex Kim', 'Farmasi'),
(18, '9012345678', 'Olivia Lee', 'Desain Komunikasi Visual'),
(19, '0123456789', 'Jason Wang', 'Agribisnis'),
(20, '1234567890', 'Samantha Park', 'Ilmu Komputer'),
(21, '2345678901', 'William Brown', 'Teknik Informatika'),
(22, '3456789012', 'Megan Davis', 'Sistem Informasi'),
(23, '4567890123', 'Jack Wilson', 'Teknik Elektro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(18, 'admin', 'admin@gmail.com', 'admin123'),
(19, 'alfathrajif', 'alfath7484@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
