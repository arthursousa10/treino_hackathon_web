-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/06/2024 às 21:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hopeassistance`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_doacao`
--

CREATE TABLE `dados_doacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `tipo_medicamento` varchar(50) NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `concentracao` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `mensagem` text DEFAULT NULL,
  `data_doacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_doacao`
--

INSERT INTO `dados_doacao` (`id`, `nome`, `email`, `telefone`, `endereco`, `tipo_medicamento`, `medicamento`, `concentracao`, `quantidade`, `mensagem`, `data_doacao`) VALUES
(1, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 18:42:35'),
(2, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 18:44:49'),
(3, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 18:44:55'),
(4, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 18:52:41'),
(5, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 18:54:55'),
(6, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'comprimido', 'prednisona', '3g', 1, '', '2024-06-25 19:16:36'),
(7, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 19:22:08'),
(8, 'Gabriel', 'yas@yas', '11965026734', 'rua alguma', 'liquido', 'prednisona', '3g', 1, '', '2024-06-25 19:25:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados_doacao`
--
ALTER TABLE `dados_doacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_doacao`
--
ALTER TABLE `dados_doacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
