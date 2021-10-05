-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Out-2021 às 04:23
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `idAcesso` int(11) NOT NULL,
  `dataHoraAcesso` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`idAcesso`, `dataHoraAcesso`, `idUsuario`) VALUES
(12, '2021-10-04 22:12:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `calc`
--

CREATE TABLE `calc` (
  `idCalc` int(11) NOT NULL,
  `tituloCalc` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `calc`
--

INSERT INTO `calc` (`idCalc`, `tituloCalc`) VALUES
(1, 'U=R.I'),
(2, 'Resistencia Equivalente Serie'),
(3, 'Resistencia Equivalente Paralelo'),
(4, 'Resistencia Equivalente Misto 1'),
(5, 'Resistencia Equivalente Misto 2'),
(6, 'Resistencia Equivalente Misto 3'),
(7, 'P=R.I^2'),
(8, 'P=U.I'),
(9, 'P=U^2/R');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coment`
--

CREATE TABLE `coment` (
  `idComent` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  `comentComent` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dataHoraComent` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `coment`
--

INSERT INTO `coment` (`idComent`, `idPost`, `comentComent`, `dataHoraComent`, `idUsuario`) VALUES
(1, 1, 'comentado 1', '2019-11-28 01:00:00', 1),
(5, 4, 'sla', '2019-11-28 02:48:00', 1),
(7, 13, 'Tbm nÃ£o sei', '2019-11-28 10:09:00', 1),
(8, 14, 'tbm nnao sei', '2019-11-28 14:22:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtida`
--

CREATE TABLE `curtida` (
  `idLike` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idPostComent` int(11) NOT NULL,
  `tipoLike` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `likeLike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `curtida`
--

INSERT INTO `curtida` (`idLike`, `idUsuario`, `idPostComent`, `tipoLike`, `likeLike`) VALUES
(15, 1, 4, 'post', 1),
(16, 1, 5, 'coment', 0),
(19, 1, 13, 'post', 1),
(20, 1, 7, 'coment', 0),
(27, 1, 1, 'post', 0),
(28, 1, 1, 'coment', 1),
(29, 1, 14, 'post', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `cnpj` varchar(20) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nomeEmpresa` varchar(150) NOT NULL,
  `emailEmpresa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experienciausuario`
--

CREATE TABLE `experienciausuario` (
  `idExperiencia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `experiencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `experienciausuario`
--

INSERT INTO `experienciausuario` (`idExperiencia`, `idUsuario`, `experiencia`) VALUES
(3, 1, 'sla');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `postPost` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dataHoraPost` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCalc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`idPost`, `postPost`, `dataHoraPost`, `idUsuario`, `idCalc`) VALUES
(1, 'aaaaaaaaaaaaaaa', '2019-11-12 00:00:00', 1, 1),
(4, 'aaaaa', '2019-11-28 00:14:00', 1, 2),
(5, 'sssss', '2019-11-28 00:15:00', 1, 3),
(6, 'ddddd', '2019-11-28 00:15:00', 1, 4),
(7, 'zzzzz', '2019-11-28 00:15:00', 1, 5),
(8, 'xxxxxx', '2019-11-28 00:15:00', 1, 6),
(9, 'cccccc', '2019-11-28 00:15:00', 1, 7),
(10, 'ffffff', '2019-11-28 00:15:00', 1, 9),
(11, 'qqqqqq', '2019-11-28 00:15:00', 1, 8),
(12, 'qqqqqq', '2019-11-28 00:17:00', 1, 8),
(13, 'O que eh isso?', '2019-11-28 10:09:00', 1, 1),
(14, 'nao sei o conteudo, me explica', '2019-11-28 14:21:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `skillusuario`
--

CREATE TABLE `skillusuario` (
  `idSkill` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `skill` text DEFAULT NULL,
  `valorSkill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `skillusuario`
--

INSERT INTO `skillusuario` (`idSkill`, `idUsuario`, `skill`, `valorSkill`) VALUES
(1, 1, 'teste1', 10),
(2, 1, 'teste2', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologias`
--

CREATE TABLE `tecnologias` (
  `idTecnologias` int(11) NOT NULL,
  `tecnologia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologiausuario`
--

CREATE TABLE `tecnologiausuario` (
  `idTecnologia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `emailUsuario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `senhaUsuario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sobreUsuario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `enderecoUsuario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `profissaoUsuario` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagemUsuario` text COLLATE utf8_unicode_ci DEFAULT 'https://bootdey.com/img/Content/avatar/avatar7.png',
  `thumbUsuario` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'perfil.gif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `sobreUsuario`, `enderecoUsuario`, `profissaoUsuario`, `imagemUsuario`, `thumbUsuario`) VALUES
(1, 'Andre', 'alm28062001@gmail.com', 'b035c48a8fd9c3931489bd3eb936fc89', 'sla', 'teste', 'Full Stack', 'https://bootdey.com/img/Content/avatar/avatar7.png', 'perfil.gif'),
(2, 'joao', 'joao@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, 'https://bootdey.com/img/Content/avatar/avatar7.png', 'perfil.gif'),
(9, 'Andre Luiz Montanha', 'alm28062001@gmail.com', 'b035c48a8fd9c3931489bd3eb936fc89', 'ola', NULL, NULL, 'https://bootdey.com/img/Content/avatar/avatar7.png', 'perfil.gif'),
(11, 'Leo', 'leonardo@gmai.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 'https://bootdey.com/img/Content/avatar/avatar7.png', 'perfil.gif');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`idAcesso`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `calc`
--
ALTER TABLE `calc`
  ADD PRIMARY KEY (`idCalc`);

--
-- Índices para tabela `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`idComent`),
  ADD KEY `idUsuario` (`idPost`,`idUsuario`),
  ADD KEY `idPost` (`idPost`);

--
-- Índices para tabela `curtida`
--
ALTER TABLE `curtida`
  ADD PRIMARY KEY (`idLike`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices para tabela `experienciausuario`
--
ALTER TABLE `experienciausuario`
  ADD PRIMARY KEY (`idExperiencia`);

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idCalc` (`idCalc`);

--
-- Índices para tabela `skillusuario`
--
ALTER TABLE `skillusuario`
  ADD PRIMARY KEY (`idSkill`);

--
-- Índices para tabela `tecnologias`
--
ALTER TABLE `tecnologias`
  ADD PRIMARY KEY (`idTecnologias`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `idAcesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `calc`
--
ALTER TABLE `calc`
  MODIFY `idCalc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `coment`
--
ALTER TABLE `coment`
  MODIFY `idComent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `curtida`
--
ALTER TABLE `curtida`
  MODIFY `idLike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `experienciausuario`
--
ALTER TABLE `experienciausuario`
  MODIFY `idExperiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `skillusuario`
--
ALTER TABLE `skillusuario`
  MODIFY `idSkill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tecnologias`
--
ALTER TABLE `tecnologias`
  MODIFY `idTecnologias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
