-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/06/2023 às 03:38
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
-- Banco de dados: `agendamento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL,
  `pessoa` varchar(255) NOT NULL,
  `matricula` int(255) NOT NULL,
  `setor` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `data`, `horario`, `pessoa`, `matricula`, `setor`, `campus`) VALUES
(7, 'Maria Leurilene Silva Oliveira', 'nathanso12004@gmail.com', '85988199019', '2023-06-01', '17:00:00', 'Visitante', 23324354, 'Piscina', 'Parangaba'),
(13, 'Nathan Silva', 'nathanso12004@gmail.com', '85988199019', '2023-05-30', '01:17:00', 'Professor', 19291013, 'Campo de futebol', 'Parangaba'),
(20, 'VITORIA NATASHA', 'teste@gmail.com', '85988199019', '2023-06-27', '23:02:00', 'Visitante', 55650000, 'Academia', 'Centro'),
(21, 'JOAO LUIZ', 'joaoluiz@gmail.com', '323234', '2000-01-01', '00:00:00', 'Visitante', 3233233, 'Piscina', 'Parangaba'),
(22, 'MARIA LEURILENE', 'maria@gmail.com', '323234', '2000-01-01', '00:00:00', 'Visitante', 3233233, 'Academia', 'Parangaba'),
(24, 'PAULO', 'paulo@gmail.com', '12213', '2000-02-12', '21:21:00', 'Professor', 21212, 'Academia', 'Via corpvs'),
(27, 'lucas', 'lucas@gmail.com', '888696', '2004-04-01', '12:21:00', 'Visitante', 999090990, 'Academia', 'Parangaba'),
(28, 'henrique', 'henrique@gmail.com', '1221213', '2000-03-12', '01:20:00', 'Visitante', 92932390, 'Piscina', 'Via corpvs'),
(68, 'caio', 'caio@gmail.com', '123456789010', '1221-12-12', '21:02:00', 'Aluno', 2147483647, 'piscina', 'parangaba'),
(69, 'phoioojii', 'nathanso12004@gmail.com', '85988199019', '2023-06-07', '03:28:00', 'Aluno', 2147483647, 'academia', 'via-corpvs'),
(70, 'TESTE FINAL', 'teste@teste.com', '85988199019', '3333-02-23', '03:02:00', 'Aluno', 2147483647, 'academia', 'via-corpvs'),
(71, 'Nathan Silva', 'nathanso12004@gmail.com', '85988199019', '2023-06-14', '17:30:00', 'Aluno', 2147483647, 'futebol', 'centro'),
(72, 'nathan', 'nathanso12004@gmail.com', '85988199011', '2023-06-21', '01:35:00', 'Aluno', 2147483647, 'academia', 'parangaba'),
(73, 'Nathan Silva', 'nathanso12004@gmail.com', '85988199019', '2023-06-21', '22:39:00', 'Aluno', 2147483647, 'academia', 'parangaba');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
