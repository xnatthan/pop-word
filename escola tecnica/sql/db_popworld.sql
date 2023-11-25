-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2023 às 14:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_popworld`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `idartista` int(11) NOT NULL,
  `nome` varchar(125) DEFAULT NULL,
  `biografia` longtext DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  `datacadastro` timestamp NULL DEFAULT current_timestamp(),
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`idartista`, `nome`, `biografia`, `arquivo`, `ativo`, `datacadastro`, `idusuario`) VALUES
(3, ' Mc Illana6666zzzzzzzz', ' Neste caso, a mensagem será impressa diretamente no momento da avaliação da condição, e você não precisará armazená-la em uma variável. Isso reduz a quantidade de código necessário para exibir a mensagem com base na condição.', 'illa.png', 1, '2023-11-04 00:57:41', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `perfil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Artista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlist`
--

CREATE TABLE `playlist` (
  `idplaylist` int(11) NOT NULL,
  `arquivo` varchar(225) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacadastro` timestamp NULL DEFAULT current_timestamp(),
  `ativo` int(11) DEFAULT 1,
  `idartista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `playlist`
--

INSERT INTO `playlist` (`idplaylist`, `arquivo`, `descricao`, `datacadastro`, `ativo`, `idartista`) VALUES
(1, 'guitarra-instrumental-musica-tranquila-8-horas-de-som-medite-relaxe-calma-006.mp3', 'Musica 1', '2023-11-04 00:57:41', 1, 3),
(2, 'soulful-harmony-come-holy-spirit-prayer-relaxation-and-sleep-with-piano-worship-music-melodies.mp3', 'Musica 2', '2023-11-04 00:57:41', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `produto_descricao` varchar(2000) NOT NULL,
  `produto_imagem` varchar(255) NOT NULL,
  `produto_preco` decimal(6,2) NOT NULL,
  `produto_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_id`, `produto_nome`, `categoria`, `produto_descricao`, `produto_imagem`, `produto_preco`, `produto_color`) VALUES
(3, 'Blusa do Drake', 'Unisex', 'Stampada Grafite', 'drake.jpg', '100.00', 'Preto'),
(4, 'Camiseta do Giveon', 'Unisex', 'Giveon Vibes', 'giveon.jpg', '150.00', 'Preto'),
(6, 'Blusa Kendrick', 'Unisex', 'King Lamar', 'kendrick.jpg', '250.00', 'Branco'),
(7, 'Camiseta BK', 'Unisex', 'Amor Vicios e Obsessôes', 'bj.jpg', '130.00', 'Preto'),
(8, 'Camiseta RD', 'Unisex', 'RD Principe do Drill', 'rd.jpg', '300.00', 'Branco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `email` varchar(125) DEFAULT NULL,
  `senha` varchar(45) NOT NULL,
  `idperfil` int(11) NOT NULL,
  `ativo` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `email`, `senha`, `idperfil`, `ativo`) VALUES
(1, 'admin', NULL, '202cb962ac59075b964b07152d234b70', 1, 2),
(2, 'Bono', 'bono@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`idartista`),
  ADD KEY `fk_artista_usuario1_idx` (`idusuario`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Índices para tabela `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`idplaylist`),
  ADD KEY `fk_playlist_artista1_idx` (`idartista`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_perfil_idx` (`idperfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `idartista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `playlist`
--
ALTER TABLE `playlist`
  MODIFY `idplaylist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `fk_artista_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_playlist_artista1` FOREIGN KEY (`idartista`) REFERENCES `artista` (`idartista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
