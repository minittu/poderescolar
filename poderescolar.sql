-- phpMyAdmin SQL Dump
-- version 4.2.1
-- http://www.phpmyadmin.net
--
-- Host: mysql09-farm67.uni5.net
-- Tempo de geração: 13/03/2017 às 14:47
-- Versão do servidor: 5.6.35-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `poderescolar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `experiencias`
--

CREATE TABLE IF NOT EXISTS `experiencias` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `dt_nasc` date DEFAULT NULL,
  `endereco` varchar(500) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `telefone2` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `nec_especiais` char(1) NOT NULL DEFAULT '0',
  `nec_especiais_qual` varchar(255) NOT NULL,
  `eixo_tematico` varchar(500) NOT NULL,
  `titulo_experiencia` varchar(1000) NOT NULL,
  `autor1` varchar(255) NOT NULL,
  `autor2` varchar(255) DEFAULT NULL,
  `autor3` varchar(255) DEFAULT NULL,
  `autor4` varchar(255) DEFAULT NULL,
  `autor5` varchar(255) DEFAULT NULL,
  `escola` varchar(255) NOT NULL,
  `escola_munic` varchar(255) NOT NULL,
  `resumo` varchar(255) NOT NULL,
  `deposito` varchar(255) NOT NULL,
  `resumo_titulo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `experiencias`
--

INSERT INTO `experiencias` (`id`, `nome`, `cpf`, `dt_nasc`, `endereco`, `telefone`, `telefone2`, `email`, `nec_especiais`, `nec_especiais_qual`, `eixo_tematico`, `titulo_experiencia`, `autor1`, `autor2`, `autor3`, `autor4`, `autor5`, `escola`, `escola_munic`, `resumo`, `deposito`, `resumo_titulo`) VALUES
(1, 'mateus', '008.713.100-58', NULL, 'endereço', '2131312313123', '', 'mateus.santos@gmail.com', '1', 'teste', 'Educação Infantil', 'titulo da Exeruensadna', 'asdadad', '', '', '', NULL, 'escas', 'saasdasdasd', '008.713.100-58.png', '008.713.100-58.pdf', 'Whatsapp-01.png'),
(2, 'ligia carlos', '392.160.120-72', NULL, 'rua felipe dos santos', '999830221', '', 'li.gi.c@hotmail.com', '1', 'auditiva', 'Gestão Escolar e Formação Continuada', 'formação continuada', 'ligia carlos', 'nitiane silva', '', '', NULL, 'faculdade', 'pelotas', '392.160.120-72.docx', '392.160.120-72.docx', 'cec 2016.docx');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `experiencias`
--
ALTER TABLE `experiencias`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `experiencias`
--
ALTER TABLE `experiencias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
