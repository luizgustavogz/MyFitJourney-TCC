-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/10/2023 às 20:20
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `myfitjourney`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblendereco`
--

CREATE TABLE `tblendereco` (
  `intIdEndereco` int(11) NOT NULL,
  `vchEndereco` text NOT NULL,
  `intNumero` int(11) NOT NULL,
  `vchBairro` text NOT NULL,
  `vchCidade` text NOT NULL,
  `vchEstado` text NOT NULL,
  `vchCep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblpagamento`
--

CREATE TABLE `tblpagamento` (
  `intIdPagamento` int(11) NOT NULL,
  `vchNomeCartao` text NOT NULL,
  `vchNumeroCartao` text NOT NULL,
  `vchCpf` text NOT NULL,
  `dtmMes` int(11) NOT NULL,
  `dtmAno` int(11) NOT NULL,
  `vchCvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblusuario`
--

CREATE TABLE `tblusuario` (
  `intIdUsuario` int(11) NOT NULL,
  `vchNome` text NOT NULL,
  `vchEmail` text NOT NULL,
  `vchSenha` text NOT NULL,
  `vchCodigo` text NOT NULL,
  `dtmVerificadoEm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblendereco`
--
ALTER TABLE `tblendereco`
  ADD PRIMARY KEY (`intIdEndereco`);

--
-- Índices de tabela `tblpagamento`
--
ALTER TABLE `tblpagamento`
  ADD PRIMARY KEY (`intIdPagamento`);

--
-- Índices de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`intIdUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblendereco`
--
ALTER TABLE `tblendereco`
  MODIFY `intIdEndereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblpagamento`
--
ALTER TABLE `tblpagamento`
  MODIFY `intIdPagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `intIdUsuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
