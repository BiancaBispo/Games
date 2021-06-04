-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Maio-2021 às 23:46
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('user','admin') NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `role`, `usuario`, `senha`, `nome`, `email`) VALUES
(1, 'admin', 'teste', '81dc9bdb52d04dc20036dbd8313ed055 ', 'teste teste', 'teste@gmail.com'),
(2, 'user', 'teste 2', '900150983cd24fb0d6963f7d28e17f72 ', 'teste 2 de 2', 'teste2@gmail.com'),
(3, 'admin', 'bi', '123', 'bibi', 'bi@gmail.com'),
(4, 'admin', 'bis', '81dc9bdb52d04dc20036dbd8313ed055 ', 'bia', ''),
(5, 'user', 'bu', '202cb962ac59075b964b07152d234b70', 'bu', 'bu@gmail.com'),
(6, 'user', 'bu1', '202cb962ac59075b964b07152d234b70', 'bu1', 'bu1@gmail.com'),
(7, 'user', 'bu1', '202cb962ac59075b964b07152d234b70', 'bu1', 'bu12@gmail.com'),
(8, 'admin', 'max', '202cb962ac59075b964b07152d234b70', 'max', 'max@gmail.com'),
(9, 'user', 'nina', '202cb962ac59075b964b07152d234b70', 'nina', 'nina@gmail.com'),
(10, 'user', 'bu', '202cb962ac59075b964b07152d234b70', 'bruna', 'bruna@gmail.com'),
(11, 'user', 'janete bispo', '81dc9bdb52d04dc20036dbd8313ed055', 'janete', 'janete@gmail.com'),
(12, 'user', 'bu', '202cb962ac59075b964b07152d234b70', 'bruna', 'bruna1@gmail.com'),
(13, 'user', 'jose', '202cb962ac59075b964b07152d234b70', 'jose', 'jose@gmail.com'),
(14, 'user', 'bi', '202cb962ac59075b964b07152d234b70', 'bianca', 'bianca.teste@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
