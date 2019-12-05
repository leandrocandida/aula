-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: Nov 07, 2019 as 07:32 PM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `academico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `cod_curso` int(10) NOT NULL,
  `nome_curso` varchar(40) NOT NULL,
  `carga_horaria` int(4) NOT NULL,
  `curso_extra` varchar(3) NOT NULL,
  PRIMARY KEY (`cod_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Cursos`
--

INSERT INTO `cursos` (`cod_curso`, `nome_curso`, `carga_horaria`, `curso_extra`) VALUES
(1, 'HTML', 40, 'SIM'),
(6, 'python', 60, 'NÃo'),
(13, 'python', 32, 'SIM'),
(3, 'Java', 36, 'NÃO');
