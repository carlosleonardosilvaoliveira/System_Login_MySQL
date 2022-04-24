-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Abr-2022 às 09:19
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `monitoramento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `terminais`
--

CREATE TABLE `terminais` (
  `id` int(50) NOT NULL,
  `numeroEq` int(10) NOT NULL,
  `pontoEq` varchar(30) NOT NULL,
  `ipEq` varchar(30) NOT NULL,
  `disponibilidadeEq` varchar(20) NOT NULL,
  `saldoAtual` float NOT NULL,
  `saqueAnterior` int(20) NOT NULL,
  `totalSaques` int(20) NOT NULL,
  `descricao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `terminais`
--

INSERT INTO `terminais` (`id`, `numeroEq`, `pontoEq`, `ipEq`, `disponibilidadeEq`, `saldoAtual`, `saqueAnterior`, `totalSaques`, `descricao`) VALUES
(1, 123456, 'PORTO ALEGRE', '172.23.45.123', 'Disponivel', 321, 10, 5, ''),
(2, 654321, 'VIAMAO', '172.53.45.67', 'Indisponivel', 0, 56, 14, ''),
(3, 789451, 'Alvorada', '172.158.13.111', 'Indisponivel', 74, 2, 0, ''),
(4, 369258, 'Cachoeirinha', '192.168.10.15', 'Disponivel', 128, 1, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`, `nome`) VALUES
(1, 'p789344', '123', 'Carlos Leonardo Silva de Oliveira');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `terminais`
--
ALTER TABLE `terminais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `terminais`
--
ALTER TABLE `terminais`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
