-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2024 às 19:25
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
-- Banco de dados: `agenda_telefonica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_telefonica`
--

CREATE TABLE `agenda_telefonica` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda_telefonica`
--

INSERT INTO `agenda_telefonica` (`id`, `primeiro_nome`, `sobrenome`, `email`, `telefone`) VALUES
(1, 'Lucas', 'Mendes', 'lucas.mendes@example.com', '(11) 90000-000'),
(2, 'Marta', 'Silva', 'marta.silva@example.com', '(12) 90000-000'),
(3, 'Paulo', 'Costa', 'paulo.costa@example.com', '(13) 90000-000'),
(4, 'Ana', 'Batista', 'ana.batista@example.com', '(14) 90000-000'),
(5, 'Roberto', 'Nunes', 'roberto.nunes@example.com', '(15) 90000-000'),
(6, 'Camila', 'Pereira', 'camila.pereira@example.com', '(16) 90000-000'),
(7, 'Gabriel', 'Oliveira', 'gabriel.oliveira@example.com', '(17) 90000-000'),
(8, 'Patricia', 'Lima', 'patricia.lima@example.com', '(18) 90000-000'),
(9, 'Rafael', 'Santos', 'rafael.santos@example.com', '(19) 90000-000'),
(10, 'Sofia', 'Rodrigues', 'sofia.rodrigues@example.com', '(21) 90000-001'),
(11, 'Tiago', 'Lorenzo', 'tiago.lorenzo@example.com', '(22) 90000-001'),
(12, 'Fernanda', 'Machado', 'fernanda.machado@example.com', '(23) 90000-001'),
(13, 'Henrique', 'Dias', 'henrique.dias@example.com', '(24) 90000-001'),
(14, 'Juliana', 'Barros', 'juliana.barros@example.com', '(25) 90000-001'),
(15, 'Leonardo', 'Ferreira', 'leonardo.ferreira@example.com', '(26) 90000-001'),
(16, 'Maria', 'Gonçalves', 'maria.goncalves@example.com', '(27) 90000-001'),
(17, 'Nelson', 'Almeida', 'nelson.almeida@example.com', '(28) 90000-001'),
(18, 'Olivia', 'Pinto', 'olivia.pinto@example.com', '(29) 90000-001'),
(19, 'Pedro', 'Siqueira', 'pedro.siqueira@example.com', '(31) 90000-001'),
(20, 'Quintino', 'Tavares', 'quintino.tavares@example.com', '(32) 90000-002'),
(21, 'Ricardo', 'Vieira', 'ricardo.vieira@example.com', '(33) 90000-002'),
(22, 'Sara', 'Fagundes', 'sara.fagundes@example.com', '(34) 90000-002'),
(23, 'Túlio', 'Henrique', 'tulio.henrique@example.com', '(35) 90000-002'),
(24, 'Ursula', 'Martins', 'ursula.martins@example.com', '(36) 90000-002'),
(25, 'Vítor', 'Nóbrega', 'vitor.nobrega@example.com', '(37) 90000-002'),
(26, 'Wagner', 'Oliveira', 'wagner.oliveira@example.com', '(38) 90000-002'),
(27, 'Xuxa', 'Meneghel', 'xuxa.meneghel@example.com', '(39) 90000-002'),
(28, 'Yasmin', 'Ferreira', 'yasmin.ferreira@example.com', '(41) 90000-002'),
(29, 'Zaira', 'Baptista', 'zaira.baptista@example.com', '(42) 90000-002'),
(30, 'Alberto', 'Carvalho', 'alberto.carvalho@example.com', '(43) 90000-003'),
(31, 'Bianca', 'Duarte', 'bianca.duarte@example.com', '(44) 90000-003'),
(32, 'Caio', 'Esteves', 'caio.esteves@example.com', '(45) 90000-003'),
(33, 'Daniela', 'Fonseca', 'daniela.fonseca@example.com', '(46) 90000-003'),
(34, 'Érico', 'Garcia', 'erico.garcia@example.com', '(47) 90000-003'),
(35, 'Fátima', 'Holanda', 'fatima.holanda@example.com', '(48) 90000-003'),
(36, 'Gisele', 'Ibrahim', 'gisele.ibrahim@example.com', '(49) 90000-003'),
(37, 'Hector', 'Juarez', 'hector.juarez@example.com', '(51) 90000-003'),
(38, 'Íris', 'Kramer', 'iris.kramer@example.com', '(52) 90000-003'),
(39, 'Jorge', 'Lacerda', 'jorge.lacerda@example.com', '(53) 90000-003'),
(40, 'Keila', 'Moraes', 'keila.moraes@example.com', '(54) 90000-004'),
(41, 'Lúcio', 'Nogueira', 'lucio.nogueira@example.com', '(55) 90000-004'),
(42, 'Mirela', 'Oliveira', 'mirela.oliveira@example.com', '(61) 90000-004'),
(43, 'Nádia', 'Paz', 'nadia.paz@example.com', '(62) 90000-004'),
(44, 'Otávio', 'Queiroz', 'otavio.queiroz@example.com', '(63) 90000-004'),
(45, 'Pâmela', 'Rocha', 'pamela.rocha@example.com', '(64) 90000-004'),
(46, 'Quirino', 'Silva', 'quirino.silva@example.com', '(65) 90000-004'),
(47, 'Renata', 'Teixeira', 'renata.teixeira@example.com', '(66) 90000-004'),
(48, 'Sandro', 'Uchoa', 'sandro.uchoa@example.com', '(67) 90000-004'),
(49, 'Tânia', 'Vasconcelos', 'tania.vasconcelos@example.com', '(68) 90000-004'),
(50, 'Ubirajara', 'Xavier', 'ubirajara.xavier@example.com', '(69) 90000-005');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`user`, `senha`, `id`) VALUES
('erikão', 'adminkkkk', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda_telefonica`
--
ALTER TABLE `agenda_telefonica`
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
-- AUTO_INCREMENT de tabela `agenda_telefonica`
--
ALTER TABLE `agenda_telefonica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
