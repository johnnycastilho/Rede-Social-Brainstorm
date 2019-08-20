-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 12:25 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brainstorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `cod_album` int(5) NOT NULL AUTO_INCREMENT,
  `cod_grupo` int(5) DEFAULT NULL,
  `data_album` date DEFAULT NULL,
  `status_album` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cod_album`),
  KEY `cod_grupo` (`cod_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`cod_album`, `cod_grupo`, `data_album`, `status_album`) VALUES
(3, 7, '2013-11-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `convite_usuario`
--

CREATE TABLE IF NOT EXISTS `convite_usuario` (
  `id_convite_usuario` int(6) NOT NULL AUTO_INCREMENT,
  `cod_grupo` int(5) DEFAULT NULL,
  `id_usuario_convidado` int(5) DEFAULT NULL,
  `data_convite` date DEFAULT NULL,
  `status_convite` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_convite_usuario`),
  KEY `cod_grupo` (`cod_grupo`),
  KEY `id_usuario_convidado` (`id_usuario_convidado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `convite_usuario`
--

INSERT INTO `convite_usuario` (`id_convite_usuario`, `cod_grupo`, `id_usuario_convidado`, `data_convite`, `status_convite`) VALUES
(5, 7, 14, '2013-11-19', 1),
(6, 7, 13, '2013-11-19', 1),
(7, 7, 11, '2013-11-20', 1),
(8, 7, 12, '2013-11-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `depoimento`
--

CREATE TABLE IF NOT EXISTS `depoimento` (
  `cod_depoimento` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) DEFAULT NULL,
  `conteudo_usuario` varchar(240) DEFAULT NULL,
  PRIMARY KEY (`cod_depoimento`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `cod_foto` int(5) NOT NULL AUTO_INCREMENT,
  `cod_album` int(5) DEFAULT NULL,
  `data_foto` date DEFAULT NULL,
  `end_foto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`cod_foto`),
  KEY `cod_album` (`cod_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`cod_foto`, `cod_album`, `data_foto`, `end_foto`) VALUES
(13, 3, '2013-11-20', 'groupimages/7/350381477DSC_9900.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `cod_grupo` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) DEFAULT NULL,
  `curso_grupo` varchar(25) DEFAULT NULL,
  `nome_grupo` varchar(20) DEFAULT NULL,
  `id_usuario_lider` int(5) DEFAULT NULL,
  `objetivo_grupo` varchar(300) DEFAULT NULL,
  `tema_grupo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_grupo`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_usuario_lider` (`id_usuario_lider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `grupo`
--

INSERT INTO `grupo` (`cod_grupo`, `id_usuario`, `curso_grupo`, `nome_grupo`, `id_usuario_lider`, `objetivo_grupo`, `tema_grupo`) VALUES
(7, NULL, 'Informatica para Internet', '5 Jobs', 10, 'huuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 'Brainstorm');

-- --------------------------------------------------------

--
-- Table structure for table `lista_amigo`
--

CREATE TABLE IF NOT EXISTS `lista_amigo` (
  `id_solicitacao` int(6) NOT NULL AUTO_INCREMENT,
  `id_usuario_solicitante` int(5) DEFAULT NULL,
  `id_usuario_solicitado` int(5) DEFAULT NULL,
  `status_solicitacao` int(2) DEFAULT NULL,
  `data_solicitacao` date DEFAULT NULL,
  PRIMARY KEY (`id_solicitacao`),
  KEY `id_usuario_solicitado` (`id_usuario_solicitado`),
  KEY `id_usuario_solicitante` (`id_usuario_solicitante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lista_amigo`
--

INSERT INTO `lista_amigo` (`id_solicitacao`, `id_usuario_solicitante`, `id_usuario_solicitado`, `status_solicitacao`, `data_solicitacao`) VALUES
(2, 13, 12, 1, '2013-11-18'),
(3, 13, 10, 1, '2013-11-18'),
(5, 13, 11, 1, '2013-11-18'),
(6, 10, 11, 1, '2013-11-18'),
(7, 10, 12, 1, '2013-11-18'),
(8, 14, 11, 0, '2013-11-18'),
(9, 14, 10, 1, '2013-11-18'),
(10, 14, 12, 1, '2013-11-18'),
(11, 12, 11, 0, '2013-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `pesquisa_campo`
--

CREATE TABLE IF NOT EXISTS `pesquisa_campo` (
  `cod_pc` int(5) NOT NULL AUTO_INCREMENT,
  `titulo_pc` varchar(20) DEFAULT NULL,
  `descricao_pc` varchar(250) DEFAULT NULL,
  `link_pc` varchar(60) DEFAULT NULL,
  `cod_grupo` int(5) DEFAULT NULL,
  PRIMARY KEY (`cod_pc`),
  KEY `cod_grupo` (`cod_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pesquisa_campo`
--

INSERT INTO `pesquisa_campo` (`cod_pc`, `titulo_pc`, `descricao_pc`, `link_pc`, `cod_grupo`) VALUES
(7, 'brainstorm', 'primeira pesquisa de campo do brainstorm', 'aki akia akk', 7);

-- --------------------------------------------------------

--
-- Table structure for table `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(7) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) DEFAULT NULL,
  `data_postagem` date DEFAULT NULL,
  `conteudo_postagem` varchar(300) DEFAULT NULL,
  `tema_postagem` varchar(20) DEFAULT NULL,
  `anexo_postagem` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_postagem`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `id_usuario`, `data_postagem`, `conteudo_postagem`, `tema_postagem`, `anexo_postagem`) VALUES
(33, 11, '2013-11-09', 'aqui aqui aqui', 'segundo post', 'files/8691619modelo de projeto tcc.doc'),
(34, 11, '2013-11-09', 'post de teste', 'qualquer coisa', 'files/540168modelo de projeto tcc.doc'),
(38, 12, '2013-11-11', 'primeira postagem', 'primeira postagem do', 'files/8614686modelo de projeto tcc.doc'),
(40, 10, '2013-11-13', 'sjiajsoiajsojaosjoiajsoiajsoijoiajsoiasj', 'jsaiojsjajsoajosjaio', NULL),
(46, 10, '2013-11-13', 'hsuashuahsoajsoijasas', 'kkkkkkk', ''),
(47, 10, '2013-11-13', 'jsojasoiajsioajsoijai', 'hueeuhuehue', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `cod_grupo` int(5) DEFAULT NULL,
  `login_usuario` varchar(20) DEFAULT NULL,
  `dtnasc_usuario` date DEFAULT NULL,
  `ultimo_acesso_usuario` date DEFAULT NULL,
  `sexo_usuario` varchar(10) DEFAULT NULL,
  `senha_usuario` varchar(15) DEFAULT NULL,
  `endereco_usuario` varchar(50) DEFAULT NULL,
  `nome_usuario` varchar(50) DEFAULT NULL,
  `curso_usuario` varchar(30) DEFAULT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `objetivo_usuario` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `cod_grupo` (`cod_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cod_grupo`, `login_usuario`, `dtnasc_usuario`, `ultimo_acesso_usuario`, `sexo_usuario`, `senha_usuario`, `endereco_usuario`, `nome_usuario`, `curso_usuario`, `email_usuario`, `objetivo_usuario`) VALUES
(10, 7, 'johnny01', '1990-08-07', NULL, 'Masculino', 'johnny', 'rua cinco 75 recanto do sol hortolandia', 'Johnny Castilho', 'InformÃ¡tica para internet', 'johnnycastilho@hotmail.com', 'sjoaijsoajsojaojsaojsoiajsio'),
(11, 7, 'vitor01', '1990-08-07', NULL, 'Masculino', 'vitor', 'rua oito', 'Vitor Henrique de Mattos', 'InformÃ¡tica para internet', 'vitor@hotmail.com', 'oakpkakaopkaoapkaopkapokaopkaopkaopkaopkaopkaopkaopkaopkaopkaopkopakpoakopakopakpakp'),
(12, 7, 'leonardo01', '1990-08-07', NULL, 'Masculino', 'leonardo', 'rua nao sei', 'Leonardo Homen', 'InformÃ¡tica para internet', 'leonardo@hotmail.com', 'pskapksopaksopkaposkoakspoakpsok'),
(13, 7, 'caique01', '0000-00-00', NULL, 'Masculino', 'caique', 'rua foo fighters', 'Caique Miguel', 'informatica para internet', 'caique@hotmail.com', NULL),
(14, NULL, 'celso01', '1290-01-12', NULL, 'Masculino', 'celso', 'rua nao sei tbm', 'Celso da Silva Jesus Filho', 'informatica para internet', 'celso@hotmail.com', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`cod_grupo`) REFERENCES `grupo` (`cod_grupo`);

--
-- Constraints for table `convite_usuario`
--
ALTER TABLE `convite_usuario`
  ADD CONSTRAINT `convite_usuario_ibfk_1` FOREIGN KEY (`cod_grupo`) REFERENCES `grupo` (`cod_grupo`),
  ADD CONSTRAINT `convite_usuario_ibfk_2` FOREIGN KEY (`id_usuario_convidado`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `depoimento`
--
ALTER TABLE `depoimento`
  ADD CONSTRAINT `depoimento_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`cod_album`) REFERENCES `album` (`cod_album`);

--
-- Constraints for table `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`id_usuario_lider`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `lista_amigo`
--
ALTER TABLE `lista_amigo`
  ADD CONSTRAINT `lista_amigo_ibfk_1` FOREIGN KEY (`id_usuario_solicitado`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `lista_amigo_ibfk_2` FOREIGN KEY (`id_usuario_solicitante`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `pesquisa_campo`
--
ALTER TABLE `pesquisa_campo`
  ADD CONSTRAINT `pesquisa_campo_ibfk_1` FOREIGN KEY (`cod_grupo`) REFERENCES `grupo` (`cod_grupo`);

--
-- Constraints for table `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `postagem_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_grupo`) REFERENCES `grupo` (`cod_grupo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
