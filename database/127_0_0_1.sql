-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Dez-2019 às 02:45
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dogs`
--
DROP DATABASE IF EXISTS `dogs`;
CREATE DATABASE IF NOT EXISTS `dogs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dogs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocao`
--

DROP TABLE IF EXISTS `adocao`;
CREATE TABLE IF NOT EXISTS `adocao` (
  `idadocao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `nome_anim` varchar(45) NOT NULL,
  PRIMARY KEY (`idadocao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `idanimal` int(11) NOT NULL AUTO_INCREMENT,
  `nome_animal` varchar(45) NOT NULL,
  `porte_animal` varchar(45) NOT NULL,
  `idade_animal` varchar(45) NOT NULL,
  `raca_animal` varchar(45) NOT NULL,
  `sexo_animal` varchar(45) NOT NULL,
  `descricao_animal` varchar(10000) NOT NULL,
  PRIMARY KEY (`idanimal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

DROP TABLE IF EXISTS `doacao`;
CREATE TABLE IF NOT EXISTS `doacao` (
  `iddoacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_doador` varchar(45) NOT NULL,
  `cpf_doador` varchar(45) NOT NULL,
  `cidade_doador` varchar(45) NOT NULL,
  `valor_doacao` varchar(1000) NOT NULL,
  `forma_pagamento` varchar(45) NOT NULL,
  PRIMARY KEY (`iddoacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `ideventos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(100) NOT NULL,
  `tipo_evento` varchar(45) NOT NULL,
  `local_evento` varchar(45) NOT NULL,
  `hora_evento` varchar(45) NOT NULL,
  `descricao_evento` varchar(10000) NOT NULL,
  PRIMARY KEY (`ideventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
