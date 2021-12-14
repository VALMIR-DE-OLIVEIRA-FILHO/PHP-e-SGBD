-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2021 às 21:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carrobd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrotb`
--

CREATE TABLE `carrotb` (
  `concessionaria` varchar(500) NOT NULL,
  `modelo` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `preço` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrotb`
--

INSERT INTO `carrotb` (`concessionaria`, `modelo`, `foto`, `preço`) VALUES
('BMW', 'bmw 320i', 'bmw 320i.jpg', '72.800'),
('porsche', 'porsche 911', 'porsche 911.jpg', '1.000.000'),
('BMW', 'bmw M4', 'bmw m4.jpg', '765.000'),
('porsche', 'porsche cayenne', 'porsche cayenne.jpg', '565.000'),
('porsche', 'porsche boxster', 'porscheboxter.jpg', '465.000'),
('BMW', 'BMW M8', 'BMW M8.jpg', '965.000'),
('BMW', 'bmw M8', 'BMW M8.jpg', '965.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
