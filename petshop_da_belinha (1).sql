-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2021 às 17:00
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop.da.belinha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `datanasc` varchar(15) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `nomepet` varchar(50) NOT NULL,
  `nascpet` varchar(20) NOT NULL,
  `raca` varchar(50) NOT NULL,
  `obspet` varchar(750) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numendereco` varchar(15) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `sessao` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pet1` varchar(50) DEFAULT NULL,
  `pet2` varchar(50) DEFAULT NULL,
  `pet3` varchar(50) DEFAULT NULL,
  `pet4` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `mensagem` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
