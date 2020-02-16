-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 08:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tuits`
--

CREATE TABLE `tuits` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username_photo` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuits`
--

INSERT INTO `tuits` (`id`, `username`, `name`, `username_photo`, `text`, `image`) VALUES
(1, 'vidamrr', 'Marcos Rivas Rojas', 'profile01.jpg', 'Aquí en la CDMX los Baby Yoda son los nuevos Groot de los vendedores ambulantes', 'image01.jpeg'),
(2, 'FGRMexico', 'Fiscalía General de México', 'profile02.jpg', 'Recomienda a tus hijas e hijos hagan uso responsable de las redes sociales para evitar ser víctimas de algún #delito', 'image02.jpeg'),
(3, 'editingemily', 'emily freeman', 'profile03.jpg', 'I look at this photo and I think, “Really?! This is what we’ve got left?” ', 'image03.jpeg'),
(4, 'verge', 'The Verge', 'profile04.jpg', 'Coral is Google’s quiet initiative to enable AI without the cloud https://trib.al/53kUMiU', 'image04.jpeg'),
(5, 'pixar', 'Pixar', 'profile05.jpg', 'Congratulations to the producers of Toy Story 4 for winning the PGA Award for Outstanding Producer of an Animated Feature.', 'image05.jpeg'),
(6, 'cnnespanol', 'CNN en español', 'profile06.jpg', 'Una parte de la plantilla del Museo del Louvre se sumó a las protestas en contra de la reforma pensional del presidente Macron, y miles de turistas no pudieron ingresar.', 'image06.jpeg'),
(7, 'luis', 'Luis Sergio', 'profile07.jpg', 'Cuando te trasnochas por ver la estelar de #UFC246 y Mcgregor la termina en 40 seg.', 'image07.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuits`
--
ALTER TABLE `tuits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tuits`
--
ALTER TABLE `tuits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
