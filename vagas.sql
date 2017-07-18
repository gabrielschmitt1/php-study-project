-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2017 às 05:15
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vagas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(10) UNSIGNED NOT NULL,
  `nome_empresa` char(100) DEFAULT NULL,
  `CNPJ` int(10) UNSIGNED DEFAULT NULL,
  `area_atuacao` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `CNPJ`, `area_atuacao`) VALUES
(4, 'Aker Security Solutions', 3979954133, 'Consultoria e Informatica'),
(6, 'teste', 123456, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id_vaga` int(10) UNSIGNED NOT NULL,
  `empresa_id_empresa` int(100) UNSIGNED NOT NULL,
  `nome_vaga` char(100) DEFAULT NULL,
  `local_vaga` char(100) DEFAULT NULL,
  `descricao_vaga` char(250) DEFAULT NULL,
  `funcao_vaga` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id_vaga`, `empresa_id_empresa`, `nome_vaga`, `local_vaga`, `descricao_vaga`, `funcao_vaga`) VALUES
(1, 4, 'Vaga para  analista de teste', 'Asa Norte', 'Acompanhar e realizar alteraÃ§Ãµes de estratÃ©gias de discagem, analisar desempenho operacional das carteiras e atuar com melhorias dos indicadores, alteraÃ§Ã£o e acompanhamento das estratÃ©gias de discagem, tratamento e acompanhamento de incidente.', 'Analista de Sistemas'),
(2, 4, 'Vaga para assistente de limpeza', 'Recanto das emas', 'Atuar no centro de diagnÃ³sticos, atender pacientes, auxiliar os mÃ©dicos, preparar paciente para exames e demais atividades.', 'Auxiliar de Limpeza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id_vaga`),
  ADD KEY `vaga_FKIndex1` (`empresa_id_empresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id_vaga` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
