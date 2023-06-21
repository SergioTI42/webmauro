-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/06/2023 às 14:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `seu_banco_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `horario` time NOT NULL,
  `servico` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `data_nascimento`, `telefone`, `horario`, `servico`) VALUES
(11, 'julia', '86200796548', 'dagsdg@gmail.com', '0000-00-00', '12421421521', '22:14:00', 'Prótese'),
(14, ' João Silva', '123.456.789-00', 'joao.silva@example.com', '1997-11-10', '(11) 1234-5678', '21:25:00', 'Limpeza'),
(15, ' Maria Santos', '987.654.321-00', 'maria.santos@example.com', '1784-12-09', '(22) 9876-5432', '07:08:00', 'Consulta'),
(17, 'Ana Oliveira', '789.123.456-00', 'ana.oliveira@example.com', '1978-02-04', '(44) 3333-3333', '23:28:00', 'Consulta'),
(18, 'Carlos Rodrigues', '321.654.987-00', 'carlos.rodrigues@example.com', '2016-07-20', '(55) 1111-2222', '06:25:00', 'Consulta'),
(19, 'adtasdgsdggsf', 'fsafsafsafasfs', 'fasfsafasfasf@gmail.com', '0121-12-15', '14444512', '11:02:00', 'Consulta'),
(21, 'hercilia', '3241548', '123@gmail.com', '1995-03-25', '745885245', '05:20:00', 'Prótese');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
