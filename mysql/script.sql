-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 19:26
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
-- Estrutura para tabela `tblacessorios`
--

CREATE TABLE `tblacessorios` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblacessorios`
--

INSERT INTO `tblacessorios` (`id`, `url`, `name`, `description`, `price`) VALUES
(1, 'https://lh3.googleusercontent.com/pw/ADCreHcHEpBhePAAnmuIoa_XPVMz2Zo3xhnn2DNJL3Ukar92srKBPvDO7-hUZQKoW2boywICsu40uaEVuNgge-vp6lBTXBHs5tv1F1v5fjtHSJxZpDOeE-TZwLXNBvfASJbk8yR06EEUh6nXOHOzQtz4E2aC=w400-h300-s-no-gm?authuser=0', 'Apoio para Flexão Fitness', 'Essas alças são projetadas para alinhar os pulsos de forma adequada, reduzir a pressão nos punhos e fornecer uma aderência estável durante as flexões.', 49.99),
(2, 'https://lh3.googleusercontent.com/pw/ADCreHdxGBtejwTG0JsXwoCIhVhs_66kd9fc0ASGeytVM6GPnLd5SyU_t3Exit9DhQWh29a8zrHsF_ND7rassrlaPZCaRkVhcyQgKppYkM3MjyDNXjaPiGE_UGHFnDiiqppmiqFWYiHTQjTZkZB-jb_YnJf-=w400-h300-s-no-gm?authuser=0', 'Munhequeira Preta Rope Store', 'A munhequeira preta da Rope Store é uma elegante e resistente peça de acessório, perfeita para proteção e estilo durante atividades esportivas e cotidianas.', 39.9),
(3, 'https://lh3.googleusercontent.com/pw/ADCreHeNwZmvxhk4V7GLjv6cDgVk1fygIEp4TI2ECelXt0Myqx_vDrrNVOdEIjHQuJY1tA9QJi842YvLQlm9XquwRcIqFRJVheWY9SqXiSCFImUZBH8OeKeLwKjNdQS5vJBgf1q7fDSaAyxeH3O-lPFvx4O8=w400-h300-s-no', 'Palmex Hidrolight Ajustável', 'A munhequeira ajustável Palmex Hidrolight é uma avançada solução para proteção e suporte no pulso. Ideal para atletas e pessoas ativas, oferece estabilidade personalizável para um desempenho otimizado.', 19.9),
(4, 'https://lh3.googleusercontent.com/pw/ADCreHeTzl361__8c75SYEvr2UxXcNTXgYpxvHs_oVintXx1-mQcYBcl8lpABWNqJVcshQB_Yj6QkSu3Y5gZt_dbIpNb0okphNeP__J0JlzuhGPPGBdAqnn-G5hMiML3aL3XmR9sFilS7naLIPzLuLBZcJS2=w400-h300-s-no?authuser=0', 'Caneleiras de peso Fokus 5kg', 'As caneleiras de peso Fokus de 5kg são um complemento essencial para treinamento de resistência, aumentando o desafio nos exercícios e melhorando a força e a tonificação muscular. Confortáveis e ajustáveis.', 59.4),
(5, 'https://lh3.googleusercontent.com/pw/ADCreHe3uyKzi4BD19Xyq9GX1HYz_yayw53f9QpxhXdOm7Fx6M2hGap_zdDfpKbmVyHDGqfxfPvtZtKVax07a0X6zOKNP-esLxot043OicnwHl3sNhNpwAJcB2AfTzUqcnmeGlIwSu61zedkjL_2uss_Baga=w400-h300-s-no?authuser=0', 'Fortalecedor de Dedo de Mão', 'O Fortalecedor de Dedo de Mão é uma ferramenta eficaz para melhorar a força e destreza dos dedos, auxiliando na reabilitação e no aprimoramento do desempenho em atividades manuais. Compacto e durável.', 19.95),
(6, 'https://lh3.googleusercontent.com/pw/ADCreHeU6EdF2dNzErgG1sxa9E2DffjVdkRoktXe4O8HjKcrXT_pz_61oylkvGsbhy_eIlqvtC9YNoJcXIMYQR9kUWtDvrxZOkZav82wUkAG5NBq9uxJuCKAhKtrTmLrTxVGcjmFSUE5tVb0SIGTWEom-i9i=w400-h300-s-no?authuser=0', 'Protetor Palmar Mini Palma, Hidrolight', 'Protetor Palmar Mini Palma da Hidrolight é um dispositivo versátil que fortalece a musculatura dos dedos e da mão. Compacto e eficiente para melhorar o desempenho.', 33.9),
(7, 'https://lh3.googleusercontent.com/pw/ADCreHdpX18xo-KKnkzz-8DlUa8ySdnTTdQBBgFU7OVxcu7UXag2sf5030VEQ8_mo7H6PQYZxWveFj8nz45k3X0f2v24jrMnaLS-5UtyU1SlfillL5M_as04hoMZXCShd1SawjQaDEUi537ip3J6tfG1WbxN=w400-h300-s-no?authuser=0', 'Coqueteleira Growth Suplements', 'A Coqueteleira Growth Supplements é o acessório ideal para misturar suplementos em pó com facilidade. Com design prático, contra vazamentos e com capacidade ideal para atletas e entusiastas da boa forma.', 8.1),
(8, 'https://lh3.googleusercontent.com/pw/ADCreHdYvk3p33fwuwABAx3Y_faaORrvsgHVW4vD-JmLyliKeDTugeavOCesoLGEkuuDLD0eGleqSvnsK-zwsuZyAxqOXIcXWTmzAo5z3lbk_O1Zfdy2HUKUcec48-FwE-UO-Uw9oMOGS3AWPdvKyaSdWux-=w400-h300-s-no?authuser=0', 'Rolo de liberação miofacial', 'O Rolo de Liberação Miofascial é uma ferramenta de massagem eficaz para aliviar a tensão muscular e promover a flexibilidade. Ideal para atletas e entusiastas do fitness. Portátil e durável.', 128.9),
(9, 'https://lh3.googleusercontent.com/pw/ADCreHe4SN5UyL3hGat93Ncr0eyLuWCkZu-mCV3UzE0Z28bNQYa-IgwlzdSLO1HB0vrhjMMiIOtwe-hTdALgKUxQzxBaOn8WgjpFqEdRwv4FQnbeG508Zf4G3ubHA6fSVcyf_GwVixDVN2RSpQkL6GMe8NyO=w400-h300-s-no?authuser=0', 'Hand grip para fortalecimento', 'O Hand Grip é um dispositivo de exercício manual projetado para fortalecer a musculatura da mão e do antebraço. Portátil e fácil de usar, ideal para melhorar a força e destreza.', 29.98);

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
  `vchCep` text NOT NULL,
  `vchComplemento` text DEFAULT NULL,
  `intIdUsuario` int(11) NOT NULL
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
  `vchCvv` text NOT NULL,
  `intIdUsuario` int(11) NOT NULL
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
-- Índices de tabela `tblacessorios`
--
ALTER TABLE `tblacessorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblendereco`
--
ALTER TABLE `tblendereco`
  ADD PRIMARY KEY (`intIdEndereco`),
  ADD KEY `fk_usuario_endereco` (`intIdUsuario`);

--
-- Índices de tabela `tblpagamento`
--
ALTER TABLE `tblpagamento`
  ADD PRIMARY KEY (`intIdPagamento`),
  ADD KEY `fk_usuario_pagamento` (`intIdUsuario`);

--
-- Índices de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`intIdUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblacessorios`
--
ALTER TABLE `tblacessorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblendereco`
--
ALTER TABLE `tblendereco`
  ADD CONSTRAINT `fk_usuario_endereco` FOREIGN KEY (`intIdUsuario`) REFERENCES `tblusuario` (`intIdUsuario`);

--
-- Restrições para tabelas `tblpagamento`
--
ALTER TABLE `tblpagamento`
  ADD CONSTRAINT `fk_usuario_pagamento` FOREIGN KEY (`intIdUsuario`) REFERENCES `tblusuario` (`intIdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
