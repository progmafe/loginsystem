-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 23/08/2013 às 16:08
-- Versão do servidor: 5.6.11-log
-- Versão do PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda2` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `agenda2`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_contatos`
--

CREATE TABLE IF NOT EXISTS `tb_contatos` (
  `id_contatos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `cel` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_contatos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Fazendo dump de dados para tabela `tb_contatos`
--

INSERT INTO `tb_contatos` (`id_contatos`, `nome`, `sobrenome`, `email`, `tel`, `cel`) VALUES
(1, 'Angelina', 'Jolie', 'angelinha@gmail.com', '(15)32312256', '(24)365265-958654'),
(2, 'Murilo', 'Delgado', 'murilinho@hot.com', '(15)69696969', '(15)97979797'),
(3, 'Gabriela', 'Aparecida', 'gabizinha@vitoriaregia.com', '(15)69696969', '(15)97979797'),
(4, 'Huany', 'Dourado', 'huanynha@preguntinha.com', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
