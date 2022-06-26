-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Jun-2021 às 02:19
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_genshin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armas`
--

DROP TABLE IF EXISTS `armas`;
CREATE TABLE IF NOT EXISTS `armas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `atributo_1` varchar(20) NOT NULL,
  `atributo_1_valor` varchar(10) NOT NULL,
  `atributo_2` varchar(20) NOT NULL,
  `atributo_2_valor` varchar(10) NOT NULL,
  `star` varchar(6) NOT NULL,
  `nivel` varchar(3) NOT NULL,
  `titulo_habilidade` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `refina_1` text NOT NULL,
  `refina_2` text NOT NULL,
  `refina_3` text NOT NULL,
  `refina_4` text NOT NULL,
  `refina_5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `armas`
--

INSERT INTO `armas` (`id`, `tipo`, `nome`, `atributo_1`, `atributo_1_valor`, `atributo_2`, `atributo_2_valor`, `star`, `nivel`, `titulo_habilidade`, `refina_1`, `refina_2`, `refina_3`, `refina_4`, `refina_5`) VALUES
(1, 'Espadão', 'Protótipo Arcaico', 'ATQ Básico', '565', 'ATQ', '27.6%', '4', '90', 'Esmagar', 'Ao acertar um Ataque Normal ou um Ataque Carregado, possui 50% de chance de causar <span class=\"blue\">240%</span> de Dano de ATQ adicionar em uma área pequena. Este efeito pode ser ativado uma vez a cada 15s.', 'Ao acertar um Ataque Normal ou um Ataque Carregado, possui 50% de chance de causar <span class=\"blue\">300%</span>  de Dano de ATQ adicionar em uma área pequena. Este efeito pode ser ativado uma vez a cada 15s.', 'Ao acertar um Ataque Normal ou um Ataque Carregado, possui 50% de chance de causar <span class=\"blue\">360%</span>  de Dano de ATQ adicionar em uma área pequena. Este efeito pode ser ativado uma vez a cada 15s.', 'Ao acertar um Ataque Normal ou um Ataque Carregado, possui 50% de chance de causar <span class=\"blue\">420%</span>  de Dano de ATQ adicionar em uma área pequena. Este efeito pode ser ativado uma vez a cada 15s.', 'Ao acertar um Ataque Normal ou um Ataque Carregado, possui 50% de chance de causar <span class=\"blue\">480%</span>  de Dano de ATQ adicionar em uma área pequena. Este efeito pode ser ativado uma vez a cada 15s.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artefatos`
--

DROP TABLE IF EXISTS `artefatos`;
CREATE TABLE IF NOT EXISTS `artefatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_nome` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `atributo` varchar(30) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `star` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `conjunto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `attributes`
--

DROP TABLE IF EXISTS `attributes`;
CREATE TABLE IF NOT EXISTS `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` varchar(50) NOT NULL,
  `%` varchar(2) NOT NULL,
  `3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `4` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `5` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `attributes`
--

INSERT INTO `attributes` (`id`, `attribute`, `%`, `3`, `4`, `5`) VALUES
(1, 'Vida', '', '3', '4', '5'),
(2, 'ATQ', '', '', '', ''),
(3, 'ATQ', '%', '', '', ''),
(4, 'ATQ Básico', '', '', '', ''),
(5, 'DEF', '', '', '', ''),
(6, 'Proficiência Elemental', '', '', '', ''),
(7, 'Recarga de Energia', '', '', '', ''),
(8, 'Taxa Crítica', '', '', '', ''),
(9, 'Dano Crítico', '', '', '', ''),
(10, 'Bônus de Cura', '', '', '', ''),
(11, 'Bônus de Dano Elemental', '', '', '', ''),
(12, 'Bônus de Dano Físico', '', '', '', ''),
(13, 'Bônus de Dano Pyro', '', '', '', ''),
(14, 'Bônus de Dano Hydro', '', '', '', ''),
(15, 'Bônus de Dano Anemo', '', '', '', ''),
(16, 'Bônus de Dano Electro', '', '', '', ''),
(17, 'Bônus de Dano Dendro', '', '', '', ''),
(18, 'Bônus de Dano Cryo', '', '', '', ''),
(19, 'Bônus de Dano Geo', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `text_nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `blocks`
--

INSERT INTO `blocks` (`id`, `nome`, `valor`, `text_nome`) VALUES
(1, 'block_Bd', 'true', 'Botão Direito Mouse'),
(2, 'block_St', 'true', 'Seleção de Texto'),
(3, 'block_Cv', 'false', 'Contador de Visitas'),
(4, 'block_Aud', 'false', 'Sons Interativo do Site'),
(5, 'block_Bv', 'false', 'PopUp: Bem Vindo'),
(6, 'block_Bg_animation', 'false', 'Background Animation');

-- --------------------------------------------------------

--
-- Estrutura da tabela `builds`
--

DROP TABLE IF EXISTS `builds`;
CREATE TABLE IF NOT EXISTS `builds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `arma_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a1_refina` varchar(11) NOT NULL,
  `arma_2` varchar(50) NOT NULL,
  `a2_refina` varchar(11) NOT NULL,
  `arma_3` varchar(50) NOT NULL,
  `a3_refina` varchar(11) NOT NULL,
  `row1_flor` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_flor_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_flor_subattr1` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_flor_subattr2` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_flor_subattr3` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_flor_subattr4` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_flor_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_pena` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_pena_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_pena_subattr1` varchar(50) NOT NULL,
  `row1_pena_subattr2` varchar(50) NOT NULL,
  `row1_pena_subattr3` varchar(50) NOT NULL,
  `row1_pena_subattr4` varchar(50) NOT NULL,
  `row1_pena_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_ampulheta` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_ampulheta_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_ampulheta_subattr1` varchar(50) NOT NULL,
  `row1_ampulheta_subattr2` varchar(50) NOT NULL,
  `row1_ampulheta_subattr3` varchar(50) NOT NULL,
  `row1_ampulheta_subattr4` varchar(50) NOT NULL,
  `row1_ampulheta_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_taça` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_taça_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_taça_subattr1` varchar(50) NOT NULL,
  `row1_taça_subattr2` varchar(50) NOT NULL,
  `row1_taça_subattr3` varchar(50) NOT NULL,
  `row1_taça_subattr4` varchar(50) NOT NULL,
  `row1_taça_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_coroa` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_coroa_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_coroa_subattr1` varchar(50) NOT NULL,
  `row1_coroa_subattr2` varchar(50) NOT NULL,
  `row1_coroa_subattr3` varchar(50) NOT NULL,
  `row1_coroa_subattr4` varchar(50) NOT NULL,
  `row1_coroa_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_c1` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_c1_2peças` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_c1_4peças` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row1_c2` varchar(50) NOT NULL,
  `row1_c2_2peças` text NOT NULL,
  `row1_c2_4peças` text NOT NULL,
  `row2_flor` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_flor_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_flor_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_pena` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_pena_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_pena_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_ampulheta` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_ampulheta_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_ampulheta_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_taça` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_taça_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_taça_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_coroa` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_coroa_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_coroa_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row2_c1` varchar(50) NOT NULL,
  `row2_c1_2peças` text NOT NULL,
  `row2_c1_4peças` text NOT NULL,
  `row2_c2` varchar(50) NOT NULL,
  `row2_c2_2peças` text NOT NULL,
  `row2_c2_4peças` text NOT NULL,
  `row3_flor` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_flor_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_flor_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena_subattr1` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena_subattr2` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena_subattr3` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena_subattr4` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_pena_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_ampulheta` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_ampulheta_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_ampulheta_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_taça` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_taça_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_taça_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_coroa` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_coroa_attr` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_coroa_star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `row3_c1` varchar(50) NOT NULL,
  `row3_c1_2peças` text NOT NULL,
  `row3_c1_4peças` text NOT NULL,
  `row3_c2` varchar(50) NOT NULL,
  `row3_c2_2peças` text NOT NULL,
  `row3_c2_4peças` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `builds`
--

INSERT INTO `builds` (`id`, `nome`, `arma_1`, `a1_refina`, `arma_2`, `a2_refina`, `arma_3`, `a3_refina`, `row1_flor`, `row1_flor_attr`, `row1_flor_subattr1`, `row1_flor_subattr2`, `row1_flor_subattr3`, `row1_flor_subattr4`, `row1_flor_star`, `row1_pena`, `row1_pena_attr`, `row1_pena_subattr1`, `row1_pena_subattr2`, `row1_pena_subattr3`, `row1_pena_subattr4`, `row1_pena_star`, `row1_ampulheta`, `row1_ampulheta_attr`, `row1_ampulheta_subattr1`, `row1_ampulheta_subattr2`, `row1_ampulheta_subattr3`, `row1_ampulheta_subattr4`, `row1_ampulheta_star`, `row1_taça`, `row1_taça_attr`, `row1_taça_subattr1`, `row1_taça_subattr2`, `row1_taça_subattr3`, `row1_taça_subattr4`, `row1_taça_star`, `row1_coroa`, `row1_coroa_attr`, `row1_coroa_subattr1`, `row1_coroa_subattr2`, `row1_coroa_subattr3`, `row1_coroa_subattr4`, `row1_coroa_star`, `row1_c1`, `row1_c1_2peças`, `row1_c1_4peças`, `row1_c2`, `row1_c2_2peças`, `row1_c2_4peças`, `row2_flor`, `row2_flor_attr`, `row2_flor_star`, `row2_pena`, `row2_pena_attr`, `row2_pena_star`, `row2_ampulheta`, `row2_ampulheta_attr`, `row2_ampulheta_star`, `row2_taça`, `row2_taça_attr`, `row2_taça_star`, `row2_coroa`, `row2_coroa_attr`, `row2_coroa_star`, `row2_c1`, `row2_c1_2peças`, `row2_c1_4peças`, `row2_c2`, `row2_c2_2peças`, `row2_c2_4peças`, `row3_flor`, `row3_flor_attr`, `row3_flor_star`, `row3_pena`, `row3_pena_attr`, `row3_pena_subattr1`, `row3_pena_subattr2`, `row3_pena_subattr3`, `row3_pena_subattr4`, `row3_pena_star`, `row3_ampulheta`, `row3_ampulheta_attr`, `row3_ampulheta_star`, `row3_taça`, `row3_taça_attr`, `row3_taça_star`, `row3_coroa`, `row3_coroa_attr`, `row3_coroa_star`, `row3_c1`, `row3_c1_2peças`, `row3_c1_4peças`, `row3_c2`, `row3_c2_2peças`, `row3_c2_4peças`) VALUES
(6, 'Jean', 'Protótipo Arcaico', '1', '', '2', '', '1', 'Flor Real', 'Vida', 'Dano Crítico', 'Taxa Crítica', 'DEF', 'ATQ', '4', 'Pena do Domador de Raios', 'ATQ', 'Vida', 'DEF', 'Taxa Crítica', 'ATQ', '4', 'Relógio de bolso do Aventureiro', 'Bônus de Dano Cryo', 'Dano Crítico', 'Taxa Crítica', 'Proficiência Elemental', 'Recarga de Energia', '3', 'Cálice de Ouro do Aventureiro', 'Bônus de Dano Geo', 'ATQ', 'ATQ', 'DEF', 'Dano Crítico', '3', 'Bandana de Aventureiro', 'Bônus de Dano Dendro', 'Taxa Crítica', 'Dano Crítico', 'ATQ', 'Vida', '3', 'Aventureiro', 'Conjunto de 2 peças Vida Max. +1000', 'Conjunto de 4 peças Abrir um baú recupera 30% de Vida Máxima durante 5 segundos.', 'O Sortudo', 'Conjunto de 2 peças DEF +100', 'Conjunto de 4 peças Ao coletar Mora, restaura 300 de Vida.', 'Rosa do Aventureiro', 'Bônus de Dano Dendro', '3', 'Pena do Exilado', 'Bônus de Dano Electro', '4', 'Relógio de Berserker', 'Bônus de Dano Anemo', '3', 'Taça de Ossos de Berserker', 'Bônus de Dano Físico', '3', 'Máscara de Batalha de Berserker', 'Bônus de Dano Elemental', '3', 'Berserker', 'Conjunto de 2 peças Taxa Crítica +12%.', 'Conjunto de 4 peças Após usar a Explosão Elemental, restaura 20% de Vida.', 'Berserker', 'Conjunto de 2 peças Taxa Crítica +12%.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Beidou', 'Protótipo Arcaico', '1', '', '', '', '', 'Flor do Exilado', 'Bônus de Dano Pyro', 'Taxa Crítica', '', '', '', '3', 'Pena Real', 'Bônus de Dano Físico', '', '', '', '', '4', 'Ampulheta de Artista Marcial', 'Bônus de Dano Hydro', '', '', '', '', '4', 'Sangue do Guarda', 'Bônus de Dano Hydro', '', '', '', '', '4', 'Coroa do Domador de Raios', 'Bônus de Dano Anemo', '', '', '', '', '4', 'Herói Invernal', 'Conjunto de 2 peças ', 'Conjunto de 4 peças Após usar uma Habilidade Elemental, aumenta o Dano do Ataque Normal e do Ataque Carregado em 25% por 8s.', 'Artista Marcial', 'Conjunto de 2 peças ', 'Conjunto de 4 peças ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conjuntos`
--

DROP TABLE IF EXISTS `conjuntos`;
CREATE TABLE IF NOT EXISTS `conjuntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conjunto` varchar(100) NOT NULL,
  `flor` varchar(100) NOT NULL,
  `pena` varchar(100) NOT NULL,
  `ampulheta` varchar(100) NOT NULL,
  `taça` varchar(100) NOT NULL,
  `coroa` varchar(100) NOT NULL,
  `3star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `4star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `5star` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `1_peças` text NOT NULL,
  `2_peças` text NOT NULL,
  `4_peças` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conjuntos`
--

INSERT INTO `conjuntos` (`id`, `conjunto`, `flor`, `pena`, `ampulheta`, `taça`, `coroa`, `3star`, `4star`, `5star`, `1_peças`, `2_peças`, `4_peças`) VALUES
(1, 'Aventureiro', 'Rosa do Aventureiro', 'Pena de Cauda de Aventureiro', 'Relógio de bolso do Aventureiro', 'Cálice de Ouro do Aventureiro', 'Bandana de Aventureiro', '12', '16', '20', 'Conjunto de 1 peça', 'Conjunto de 2 peças Vida Max. +1000', 'Conjunto de 4 peças Abrir um baú recupera 30% de Vida Máxima durante 5 segundos.'),
(2, 'O Sortudo', 'Flor Verde do Sortudo', 'Pena de Águia do Sortudo', 'Ampulheta do Sortudo', 'Cálice do Sortudo', 'Grinalda de Prata do Sortudo', '12', '16', '20', '', 'Conjunto de 2 peças DEF +100', 'Conjunto de 4 peças Ao coletar Mora, restaura 300 de Vida.'),
(3, 'O Doutor Viajante', 'Lótus de Prata do Doutor Viajante', 'Pena de Coruja do Doutor Viajante', 'Relógio de bolso do Doutor Viajante', 'Pote de Medicamentos do Doutor Viajante', 'Lenço do Doutor Viajante', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Aumenta o efeito de cura em 20%.', 'Conjunto de 4 peças Após usar a Explosão Elemental, restaura 20% de Vida.'),
(4, 'Resolução de Sojourner', 'Coração de Camaradagem', 'Pluma do Regresso', 'Pedra do caçador da Luz', 'Cálice de uma Terra Desconhecida', 'Coroa da Despedida', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças ATQ +18%.', 'Conjunto de 4 peças Aumenta da Taxa Crítica do Ataque Carregado em 30%.'),
(5, 'Pequeno Milagre', 'Flor do Milagre', 'Pena do Milagre', 'Ampulheta do Milagre', 'Cálice do Milagre', 'Brincos do Milagre', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças RES de todos os Elementos +20%.', 'Conjunto de 4 peças O dano Elemental recebido aumenta a RES Elemental correspondente em 30% por 10s. Pode ser Lançado uma vez a cada 10s.'),
(6, 'Berserker', 'Rosa de Berserker', 'Pluma de Berserker', 'Relógio de Berserker', 'Taça de Ossos de Berserker', 'Máscara de Batalha de Berserker', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Taxa Crítica +12%.', 'Conjunto de 4 peças Quando a Vida estiver a baixo de 70%, a Taxa Crítica aumenta em 24%.'),
(7, 'Instrutor', 'Broche de Instrutor', 'Acessório de Penas de Instrutor', 'Relógio de Bolso de Instrutor', 'Copo de Chá de Instrutor', 'Chapéu de Instrutor', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Proficiência Elemental +80.', 'Conjunto de 4 peças Após uma Reação Elemental aumenta a Proficiência Elemental de todos os membros da Equipe em 120 por 8s.'),
(8, 'O Exilado', 'Flor do Exilado', 'Pena do Exilado', 'Relógio de Bolso do Exilado', 'Cálice do Exilado', 'Grinalda do Exilado', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Recarga de Energia +20%.', 'Conjunto de 4 peças Ao usar o Supremo, regenera 2 de Energia a todos os personagens da equipe (excluindo o portador) a cada 2s por 6s. Este efeito não pode ser acumulado.'),
(9, 'Guardião', 'Flor do Guarda', 'Emblema do Guarda', 'Relógio do Guarda', 'Sangue do Guarda', 'Cinto do Guarda', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças DEF +30%.', 'Conjunto de 4 peças Aumenta a própria RES do respectivo elemento em 30% para cada elemento diferente dos seus personagens de equipe.'),
(10, 'Coração Valente', 'Medalha do Valente', 'Esperança do Valente', 'Persistência do Valente', 'Despedida do Valente', 'Coroa do Valente', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças ATQ +18%.', 'Conjunto de 4 peças Aumenta Dano em 30% contra inimigos com mais de 50% de Vida.'),
(11, 'Artista Marcial', 'Flor Vermelha de Artista Marcial', 'Acessório de Penas de Artista Marcial', 'Ampulheta de Artista Marcial', 'Taça de Vinho de Artista Marcial', 'Bandana de Artista Marcial', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Aumenta o Dano do Ataque Normal e do Ataque Carregado em 15%.', 'Conjunto de 4 peças Após usar uma Habilidade Elemental, aumenta o Dano do Ataque Normal e do Ataque Carregado em 25% por 8s.'),
(12, 'Apostador', 'Broche de Apostador', 'Acessório de Penas de Apostador', 'Relógio de Bolso de Apostador', 'Copo de Dados de Apostador', 'Brincos de Apostador', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Aumenta o Dano da Habilidade Elemental em 20%.', 'Conjunto de 4 peças Ao derrotar um inimigo, possui 100% de chance de remover a Recarga da Habilidade Elemental. Este efeito pode ser ativado uma vez a cada 15s.'),
(13, 'O Estudioso', 'Marca Páginas de Estudioso', 'Caneta de Pena Estudioso', 'Relógio do Estudioso', 'Cálice de Tinta do Estudioso', 'Lentes do Estudioso', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Recarga de Energia +20%.', 'Conjunto de 4 peças Obter Partículas ou Orbes Elementais confere 3 de Energia a todos os membros da equipe que possuem um arco ou catalisador equipado. Pode ser ativado uma vez a cada 3s.'),
(14, 'Xamã do Ritual Pyro', 'Não Possui', 'Não Possui', 'Não Possui', 'Não Possui', 'Coroa do Ritual Pyro', '12', '16', '20', 'Conjunto de 1 peça Reduz a duração dos efeitos causados por Pyro em 40%.', 'Conjunto de 2 peças ', 'Conjunto de 4 peças '),
(15, 'Orações para o Destino', 'Não Possui', 'Não Possui', 'Não Possui', 'Não Possui', 'Coroa do Ritual Hydro', '12', '16', '20', 'Conjunto de 1 peça Reduz a duração dos efeitos causados por Hydro em 40%.', 'Conjunto de 2 peças ', 'Conjunto de 4 peças '),
(16, 'Xamã do Ritual Electro', 'Não Possui', 'Não Possui', 'Não Possui', 'Não Possui', 'Coroa do Ritual Electro', '12', '16', '20', 'Conjunto de 1 peça Reduz a duração dos efeitos causados por Electro em 40%.', 'Conjunto de 2 peças ', 'Conjunto de 4 peças '),
(17, 'Orações para a Primavera', 'Não Possui', 'Não Possui', 'Não Possui', 'Não Possui', 'Tiara de Gelo', '12', '16', '20', 'Conjunto de 1 peça Reduz a duração dos efeitos causados por Cryo em 40%.', 'Conjunto de 2 peças ', 'Conjunto de 4 peças '),
(18, 'Herói Invernal', 'Memória da Nevasca', 'Determinação do Quebrador de Gelo', 'Fim da Terra Natal Gelada', 'Orgulho da Geada', 'Eco do Inverno', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Bônus de Dano Cryo +15%.', 'Conjunto de 4 peças Quando um personagem ataca um inimigo afetado por Cryo, sua Taxa CRIT é aumentada em 20%. Se o oponente estiver Congelado, a Taxa CRIT é aumentada em 20% adicionais.'),
(19, 'Lançador de Trovões', 'Coração do Domador de Raios', 'Pena do Domador de Raios', 'Ápice do Domador de Raios', 'Cálice do Domador de Raios', 'Coroa do Domador de Raios', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças RES Electro +40%.', 'Conjunto de 4 peças Aumenta o Dano contra inimigos afetados por Electro em 35%.'),
(20, 'Atravessador de Fogo', 'Determinação do Corredor de Lava', 'Libertação do Corredor de Lava', 'Tortura do Corredor de Lava', 'Despertamento do Corredor de Lava', 'Sabedoria do Corredor de Lava', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças RES Pyro +40%.', 'Conjunto de 4 peças Aumenta o Dano contra inimigos afetados por Pyro em 35%.'),
(21, 'Donzela Amanda', 'Amor Distante da Donzela', 'Lembranças da Donzela', 'Juventude Passageira da Donzela', 'Passatempo da Donzela', 'Beleza Desvanecida da Donzela', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Efeito de Cura do Personagem aumenta em 15%.', 'Conjunto de 4 peças Ao usar uma Habilidade Elemental ou Explosão, aumenta a cura recebida por todos os membros da equipe em 20% por 10s.'),
(22, 'Último Juramento do Gladiador', 'Nostalgia do Gladiador', 'Destino do Gladiador', 'Esperança do Gladiador', 'Embriaguez do Gladiador', 'Triunfo do Gladiador', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças ATQ +18%.', 'Conjunto de 4 peças Se o portador deste conjunto de artefato usar uma Espada, Espadão ou lança, aumenta o Dano de seus Ataques Normais em 35%.'),
(23, 'Sombra Verde', 'Lembrança de Flores Silvestres', 'Pena de Flecha do Caçador Verde', 'Determinação do Caçador Verde', 'Frasco do Caçador Verde', 'Coroa do Caçador Verde', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Bônus de Dano Anemo +15%.', 'Conjunto de 4 peças Aumenta o Dano do Redemoinho em 60%. Dependendo do tipo de elemento infundido, diminui a RES Elemental correspondente do oponente em 40% por 10s.'),
(24, 'Grupo de Andarilhos', 'Luz Matinal da Orquestra', 'Pena de Flecha do Bardo', 'Queda de Cortina', 'Chaleira do Bardo', 'Chapéu do Comandante', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Proficiência Elemental +80.', 'Conjunto de 4 peças Aumenta o Dano do Ataque Carregado em 35% se o personagem estiver usando Catalisador ou Arco.'),
(25, 'Trovão Furioso', 'Misericórdia do Pássaro do Trovão', 'Sobreviventes da Catástrofe', 'Relógio do Trovão', 'Profecia do Trovão', 'Coroa do Invocador do Trovão', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Bônus de Dano Electro +15%.', 'Conjunto de 4 peças Aumenta o Dano causado pela Sobrecarga, Eletricamente Carregado e Super Condutor em 40%. Ao ativar esse efeito, diminui a Recarga da Habilidade Elemental em 1s. Pode ser ativado uma vez a cada 0.8s.'),
(26, 'A Bruxa das Chamas Carmesim', 'Flor de Labareda da Bruxa', 'Pena Ardente da Bruxa', 'Fim dos Tempos da Bruxa', 'Chamas do Coração da Bruxa', 'Chapéu Abrasador da Bruxa', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Bônus de Dano Pyro +15%.', 'Conjunto de 4 peças Aumenta o dano de Sobrecarregado e Queimando em 40%. Aumenta o dano de Vaporizar e Derreter em 15%. Ativar uma Habilidade Elemental aumenta os efeitos de 2 Peças de seu Conjunto de Artefato em 50% por 10s. Este efeito pode acumular até 3 vezes.'),
(27, 'Antigo Ritual Real', 'Flor Real', 'Pena Real', 'Relógio de Bolso Real', 'Urna de Prata Real', 'Máscara Real', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Dano de Explosão Elemental +20%.', 'Conjunto de 4 peças Ativar uma Explosão Elemental aumenta o ATQ de todo o grupo em 20% por 12s. Este efeito não pode acumular.'),
(28, 'Cavaleiro Manchado de Sangue', 'Coração de Ferro Sanguinário', 'Pena Negra Sanguinária', 'Relógio do Cavaleiro Sanguinário', 'Cálice do Cavaleiro Sanguinário', 'Máscara de Ferro Sanguinário', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Dano Físico causado +25%.', 'Conjunto de 4 peças Após derrotar um oponente, aumenta o Dano do Ataque Carregado em 50% e reduz seu custo de Stamina para 0 por 10s.'),
(29, 'Pedra Arcaica', 'Flor do Penhasco Rachado', 'Asas do Pico da Montanha', 'Relógio de Sol de Jade Dourado', 'Taça do Escultor de Pedra', 'Imagem de Uma Pedra Imóvel', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Bônus de Dano Geo +15%.', 'Conjunto de 4 peças Ao obter um Fragmento Elemental por meio de uma Reação de Cristalização, todos os personagem da equipe ganham +35% DMG para esse elemento em particular por 10s. Apenas uma forma de Dano Elemental pode ser obtida dessa maneira a qualquer momento.'),
(30, 'Meteoro Invertido', 'Flor do Festival de Verão', 'Fim do Festival de Verão', 'Momento do Festival de Verão', 'Balões de Água do Festival de Verão', 'Máscara do Festival de Verão', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Aumenta a Força do Escudo em 35%.', 'Conjunto de 4 peças Ganha um adicional de 40% de Dano Normal e Carregado enquanto estiver sob a proteção de um escudo.'),
(31, 'Profundezas do Coração', 'Broche Dourado', 'Brisa da Nostalgia', 'Bússola de Cobre', 'Cálice das Profundezas', 'Quepe de Capitão Manchado de Vinho', '12', '16', '20', 'Conjunto de 1 peça ', 'Conjunto de 2 peças Bônus de Dano Hydro +15%', 'Conjunto de 4 peças Após usar uma Habilidade Elemental, aumenta o Dano do Ataque Normal e Carregado em 30% por 15s.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conquistas_data`
--

DROP TABLE IF EXISTS `conquistas_data`;
CREATE TABLE IF NOT EXISTS `conquistas_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_title` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `objetivo` text NOT NULL,
  `gems` int(4) NOT NULL,
  `id_url` varchar(100) NOT NULL,
  `data` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conquistas_data`
--

INSERT INTO `conquistas_data` (`id`, `id_title`, `name`, `objetivo`, `gems`, `id_url`, `data`, `nivel`) VALUES
(1, 1, 'Piratas', 'Acompanhe Lulu, Fei e Meng para brincar um jogo de piratas.', 100, 'W1ec67bGbek', '25/03/2021', 3),
(2, 1, 'O Amor Está por Toda Parte...', 'Ajude o Zhihua a procurar 5 sinais de amor iminente no \"Bom Sinal\"', 5, 'geZ_5Ri7ANg', '24/03/2021', 1),
(3, 2, 'Andarilho do Mundo Mortal', 'Ajude o Zhihua a procurar 5 sinais de amor iminente no \"Bom Sinal\"', 5, 'xETEYG-az9E', '24/03/2021', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conquistas_title`
--

DROP TABLE IF EXISTS `conquistas_title`;
CREATE TABLE IF NOT EXISTS `conquistas_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `qt_conqs` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conquistas_title`
--

INSERT INTO `conquistas_title` (`id`, `title`, `qt_conqs`) VALUES
(1, 'Andarilhos do Mundo', ''),
(2, 'Andarilho do Mundo Mortal - Série I', '6'),
(3, 'A Arte da Aventura', '3'),
(4, 'A Jornada do Herói', '8'),
(5, 'Mondstadt: A Cidade do Vento e da Poesia', '7'),
(6, 'Liyue: O Porto de Pedra e dos Contratos', '7'),
(7, 'Especialista Elemental', '7'),
(8, 'Pontaria', '3'),
(9, 'Desafiante - Série I', '4'),
(10, 'Domínios e Abismo em Espiral - Série I', '4'),
(11, 'Olah! - Série I', '2'),
(12, 'Snezhnaya Não Acredita em Lágrimas - Série I', '2'),
(13, 'Nostalgia do Porto de Pedra - Série I', '3'),
(14, 'Encontros Fora Deste Mundo - Série I', '9'),
(15, 'Desafiante - Série II', '8'),
(16, 'Desafiante - Série III', '8'),
(17, 'Visitante da Montanha Nevada', '7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `count_visit`
--

DROP TABLE IF EXISTS `count_visit`;
CREATE TABLE IF NOT EXISTS `count_visit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ip` varchar(30) NOT NULL,
  `Mes` varchar(20) NOT NULL,
  `Data` varchar(30) NOT NULL,
  `Hora` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `count_visit`
--

INSERT INTO `count_visit` (`Id`, `Ip`, `Mes`, `Data`, `Hora`) VALUES
(88, '::1', '', '15/01/2021', '23:21'),
(89, '::1', '', '15/01/2021', '23:27'),
(90, '::1', '', '15/01/2021', '23:30'),
(91, '::1', '', '15/01/2021', '23:31'),
(92, '::1', '', '15/01/2021', '23:37'),
(93, '::1', '', '15/01/2021', '23:38'),
(94, '::1', '', '15/01/2021', '23:39'),
(95, '::1', '', '15/01/2021', '23:40'),
(96, '::1', '', '15/01/2021', '23:41'),
(97, '::1', '', '15/01/2021', '23:42'),
(98, '::1', '', '15/01/2021', '23:48'),
(99, '::1', '', '15/01/2021', '23:49'),
(100, '::1', '', '16/01/2021', '10:22'),
(101, '192.168.0.5', '', '16/01/2021', '10:23'),
(102, '192.168.0.5', '', '16/01/2021', '10:24'),
(103, '192.168.0.5', '', '16/01/2021', '10:34'),
(104, '192.168.0.5', '', '16/01/2021', '10:35'),
(105, '::1', '', '16/01/2021', '10:36'),
(106, '::1', '', '16/01/2021', '10:39'),
(107, '::1', '', '16/01/2021', '10:40'),
(108, '::1', '', '16/01/2021', '10:47'),
(109, '::1', '', '16/01/2021', '10:51'),
(110, '::1', '', '16/01/2021', '11:37'),
(111, '::1', '', '16/01/2021', '11:38'),
(112, '::1', '', '16/01/2021', '11:44'),
(113, '::1', '', '24/01/2021', '16:44'),
(114, '::1', '', '24/01/2021', '16:45'),
(115, '::1', '', '24/01/2021', '16:48'),
(116, '::1', '', '24/01/2021', '16:51'),
(117, '::1', '', '24/01/2021', '16:58'),
(118, '::1', '', '24/01/2021', '17:09'),
(119, '::1', '', '24/01/2021', '17:16'),
(120, '::1', '', '24/01/2021', '17:17'),
(121, '::1', '', '24/01/2021', '17:20'),
(122, '::1', '', '24/01/2021', '17:21'),
(123, '::1', '', '24/01/2021', '17:22'),
(124, '::1', '', '24/01/2021', '17:24'),
(125, '::1', '', '24/01/2021', '17:27'),
(126, '::1', '', '24/01/2021', '17:28'),
(127, '::1', '', '24/01/2021', '17:45'),
(128, '::1', '', '24/01/2021', '17:53'),
(129, '::1', '', '24/01/2021', '17:55'),
(130, '::1', '', '24/01/2021', '17:56'),
(131, '::1', '', '24/01/2021', '17:57'),
(132, '::1', '', '24/01/2021', '17:58'),
(133, '::1', '', '24/01/2021', '17:59'),
(134, '::1', '', '24/01/2021', '18:01'),
(135, '::1', '', '24/01/2021', '18:02'),
(136, '::1', '', '24/01/2021', '18:05'),
(137, '::1', '', '24/01/2021', '18:06'),
(138, '::1', '', '24/01/2021', '18:26'),
(139, '::1', '', '24/01/2021', '18:27'),
(140, '::1', '', '24/01/2021', '18:28'),
(141, '::1', '', '24/01/2021', '18:29'),
(142, '::1', '', '24/01/2021', '18:31'),
(143, '::1', '', '24/01/2021', '18:52'),
(144, '::1', '', '24/01/2021', '20:49'),
(145, '::1', 'Janeiro/2021', '24/01/2021', '22:34'),
(146, '::1', 'Janeiro/2021', '24/01/2021', '22:35'),
(147, '::1', 'Janeiro/2021', '24/01/2021', '22:36'),
(148, '::1', 'Janeiro/2021', '25/01/2021', '14:59'),
(149, '::1', 'Janeiro/2021', '25/01/2021', '15:00'),
(150, '::1', 'Janeiro/2021', '25/01/2021', '15:06'),
(151, '::1', 'Janeiro/2021', '25/01/2021', '15:21'),
(152, '::1', 'Janeiro/2021', '25/01/2021', '20:02'),
(153, '::1', 'Janeiro/2021', '30/01/2021', '23:32'),
(154, '::1', 'Fevereiro/2021', '02/02/2021', '22:08'),
(166, '::1', 'março/2021', '03/03/2021', '15:52'),
(167, '::1', 'março/2021', '03/03/2021', '15:53'),
(168, '::1', 'março/2021', '04/03/2021', '00:01'),
(169, '::1', 'março/2021', '04/03/2021', '19:43'),
(170, '::1', 'março/2021', '04/03/2021', '21:02'),
(171, '::1', 'março/2021', '04/03/2021', '21:14'),
(172, '::1', 'março/2021', '04/03/2021', '21:17'),
(173, '::1', 'março/2021', '04/03/2021', '21:22'),
(174, '::1', 'março/2021', '04/03/2021', '21:23'),
(175, '::1', 'março/2021', '04/03/2021', '21:28'),
(176, '::1', 'março/2021', '04/03/2021', '21:32'),
(177, '::1', 'março/2021', '04/03/2021', '21:40'),
(178, '::1', 'março/2021', '04/03/2021', '21:49'),
(179, '::1', 'março/2021', '04/03/2021', '21:53'),
(180, '::1', 'março/2021', '04/03/2021', '21:55'),
(181, '::1', 'março/2021', '04/03/2021', '22:12'),
(182, '::1', 'março/2021', '04/03/2021', '22:22'),
(183, '::1', 'março/2021', '04/03/2021', '22:28'),
(184, '::1', 'março/2021', '04/03/2021', '22:32'),
(185, '::1', 'março/2021', '04/03/2021', '22:33'),
(186, '::1', 'março/2021', '04/03/2021', '22:37'),
(187, '::1', 'março/2021', '04/03/2021', '22:38'),
(188, '::1', 'março/2021', '04/03/2021', '22:40'),
(189, '::1', 'março/2021', '04/03/2021', '22:41'),
(190, '::1', 'março/2021', '04/03/2021', '22:42'),
(191, '::1', 'março/2021', '04/03/2021', '22:43'),
(192, '::1', 'março/2021', '04/03/2021', '22:44'),
(193, '::1', 'março/2021', '04/03/2021', '22:45'),
(194, '::1', 'março/2021', '04/03/2021', '22:46'),
(195, '::1', 'março/2021', '04/03/2021', '22:47'),
(196, '::1', 'março/2021', '04/03/2021', '22:48'),
(197, '::1', 'março/2021', '04/03/2021', '22:50'),
(198, '::1', 'março/2021', '04/03/2021', '22:51'),
(199, '::1', 'março/2021', '04/03/2021', '22:52'),
(200, '::1', 'março/2021', '04/03/2021', '22:53'),
(201, '::1', 'março/2021', '04/03/2021', '22:54'),
(202, '::1', 'março/2021', '04/03/2021', '22:55'),
(203, '::1', 'março/2021', '04/03/2021', '22:56'),
(204, '::1', 'março/2021', '04/03/2021', '22:59'),
(205, '::1', 'março/2021', '04/03/2021', '23:03'),
(206, '::1', 'março/2021', '04/03/2021', '23:04'),
(207, '::1', 'março/2021', '04/03/2021', '23:05'),
(208, '::1', 'março/2021', '04/03/2021', '23:10'),
(209, '::1', 'março/2021', '04/03/2021', '23:11'),
(210, '::1', 'março/2021', '04/03/2021', '23:12'),
(211, '::1', 'março/2021', '04/03/2021', '23:13'),
(212, '::1', 'março/2021', '04/03/2021', '23:14'),
(213, '::1', 'março/2021', '04/03/2021', '23:16'),
(214, '::1', 'março/2021', '04/03/2021', '23:17'),
(215, '::1', 'março/2021', '04/03/2021', '23:18'),
(216, '::1', 'março/2021', '04/03/2021', '23:19'),
(217, '::1', 'março/2021', '04/03/2021', '23:26'),
(218, '::1', 'março/2021', '04/03/2021', '23:27'),
(219, '::1', 'março/2021', '05/03/2021', '14:43'),
(220, '::1', 'março/2021', '05/03/2021', '14:46'),
(221, '::1', 'março/2021', '05/03/2021', '17:19'),
(222, '::1', 'março/2021', '05/03/2021', '17:23'),
(223, '::1', 'março/2021', '05/03/2021', '17:24'),
(224, '::1', 'março/2021', '05/03/2021', '17:27'),
(225, '::1', 'março/2021', '05/03/2021', '17:41'),
(226, '::1', 'março/2021', '05/03/2021', '18:30'),
(227, '::1', 'março/2021', '05/03/2021', '18:35'),
(228, '::1', 'março/2021', '05/03/2021', '18:36'),
(229, '::1', 'março/2021', '05/03/2021', '18:37'),
(230, '::1', 'março/2021', '05/03/2021', '18:38'),
(231, '::1', 'março/2021', '05/03/2021', '18:57'),
(232, '::1', 'março/2021', '05/03/2021', '18:58'),
(233, '::1', 'março/2021', '05/03/2021', '19:14'),
(234, '::1', 'março/2021', '05/03/2021', '19:15'),
(235, '::1', 'março/2021', '05/03/2021', '19:16'),
(236, '::1', 'março/2021', '05/03/2021', '19:17'),
(237, '::1', 'março/2021', '05/03/2021', '19:18'),
(238, '::1', 'março/2021', '05/03/2021', '19:19'),
(239, '::1', 'março/2021', '05/03/2021', '19:44'),
(240, '::1', 'março/2021', '05/03/2021', '19:45'),
(241, '::1', 'março/2021', '05/03/2021', '19:46'),
(242, '::1', 'março/2021', '05/03/2021', '19:47'),
(243, '::1', 'março/2021', '05/03/2021', '19:54'),
(244, '::1', 'março/2021', '05/03/2021', '19:55'),
(245, '::1', 'março/2021', '05/03/2021', '20:26'),
(246, '::1', 'março/2021', '05/03/2021', '20:27'),
(247, '::1', 'março/2021', '05/03/2021', '20:35'),
(248, '::1', 'março/2021', '05/03/2021', '20:37'),
(249, '::1', 'março/2021', '05/03/2021', '20:38'),
(250, '::1', 'março/2021', '05/03/2021', '20:39'),
(251, '::1', 'março/2021', '05/03/2021', '20:41'),
(252, '::1', 'março/2021', '05/03/2021', '20:42'),
(253, '::1', 'março/2021', '05/03/2021', '20:43'),
(254, '::1', 'março/2021', '05/03/2021', '21:42'),
(255, '::1', 'março/2021', '05/03/2021', '21:43'),
(256, '::1', 'março/2021', '05/03/2021', '21:44'),
(257, '::1', 'março/2021', '05/03/2021', '21:50'),
(258, '::1', 'março/2021', '05/03/2021', '21:51'),
(259, '::1', 'março/2021', '05/03/2021', '21:52'),
(260, '::1', 'março/2021', '05/03/2021', '21:54'),
(261, '::1', 'março/2021', '05/03/2021', '21:58'),
(262, '::1', 'março/2021', '05/03/2021', '22:00'),
(263, '::1', 'março/2021', '05/03/2021', '22:05'),
(264, '::1', 'março/2021', '05/03/2021', '22:09'),
(265, '::1', 'março/2021', '05/03/2021', '22:10'),
(266, '::1', 'março/2021', '05/03/2021', '22:11'),
(267, '::1', 'março/2021', '05/03/2021', '22:12'),
(268, '::1', 'março/2021', '05/03/2021', '22:13'),
(269, '::1', 'março/2021', '05/03/2021', '22:14'),
(270, '::1', 'março/2021', '05/03/2021', '22:15'),
(271, '::1', 'março/2021', '05/03/2021', '22:34'),
(272, '::1', 'março/2021', '05/03/2021', '22:35'),
(273, '::1', 'março/2021', '05/03/2021', '22:36'),
(274, '::1', 'março/2021', '05/03/2021', '22:37'),
(275, '::1', 'março/2021', '05/03/2021', '22:38'),
(276, '::1', 'março/2021', '05/03/2021', '22:39'),
(277, '::1', 'março/2021', '05/03/2021', '22:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `elementos`
--

DROP TABLE IF EXISTS `elementos`;
CREATE TABLE IF NOT EXISTS `elementos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(10) NOT NULL,
  `bg_url` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `elementos`
--

INSERT INTO `elementos` (`id`, `nome`, `bg_url`) VALUES
(1, 'Pyro', ''),
(2, 'Hydro', ''),
(3, 'Anemo', ''),
(4, 'Electro', ''),
(5, 'Dendro', ''),
(6, 'Cryo', ''),
(7, 'Geo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `avaliação` int(11) NOT NULL,
  `data` varchar(20) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `page` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'pendente',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `nome`, `email`, `mensagem`, `avaliação`, `data`, `hora`, `page`, `status`) VALUES
(1, 'Beidou', 'beidou@genshin.com ', 'Site ótimo, curti muito!!', 5, '03/02/2021', '19:48', 'ganyun', 'visualizado'),
(2, 'Jhon Moe', 'jhonmoe@gmail.com ', 'Muito útil esse site1', 4, '10/02/2021', '19:49', 'aether', 'visualizado'),
(3, 'Barbatos', 'arcontelindo@god.com ', 'Simplesmente perfeito!', 5, '19/02/2021', '20:16', 'aether', 'visualizado'),
(4, 'Jonas', 'joasdark@ondeeuto.com ', 'cara, está tudo conectado!', 5, '19/02/2021', '21:14', 'zhongli', 'visualizado'),
(5, 'Zhongli', 'pedregulho@gmail.com ', 'geodemais', 5, '20/02/2021', '14:03', 'zhongli', 'visualizado'),
(6, 'yuno', 'yunoblack@gmail.com ', 'toppp demais esse site!', 5, '22/02/2021', '16:57', 'barbara', 'visualizado'),
(7, 'teste', 'sdsd@sdegfsdf ', 'defsefsef', 3, '22/02/2021', '17:11', 'barbara', 'visualizado'),
(8, 'xiao', 'xiao@liyue.com ', 'topp', 4, '23/02/2021', '18:30', 'zhongli', 'visualizado'),
(9, 'teste', 'teste@teste ', 'etwetwer', 2, '23/02/2021', '21:12', 'zhongli', 'pendente'),
(10, 'Mondstadt', 'Mondstadt@gmail.com ', 'Mondstadt', 1, '24/02/2021', '13:31', 'jean', 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fonts`
--

DROP TABLE IF EXISTS `fonts`;
CREATE TABLE IF NOT EXISTS `fonts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fonts`
--

INSERT INTO `fonts` (`id`, `nome`, `dir`) VALUES
(1, 'edit_font', 'assets/css/pattern.css'),
(2, 'Zh-cn', 'assets/css/pattern.css'),
(3, 'Mart-Ultra', 'assets/css/mrt-ult.css'),
(4, 'Poppins Bold', 'assets/css/poppins-b.css'),
(5, 'Poppins Medium', 'assets/css/poppins-m.css'),
(6, 'Poppins Regular', 'assets/css/poppins-r.css'),
(7, 'Neue Bold', 'assets/css/neue-b.css');

-- --------------------------------------------------------

--
-- Estrutura da tabela `map_grupos`
--

DROP TABLE IF EXISTS `map_grupos`;
CREATE TABLE IF NOT EXISTS `map_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nation` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `descrição` text NOT NULL,
  `is_item` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `map_grupos`
--

INSERT INTO `map_grupos` (`id`, `nation`, `grupo`, `title`, `descrição`, `is_item`, `tipo`) VALUES
(5, 'mondstadt', 'andrius', 'Andrius, Dominador de Lobos', 'Uma alma nobre que vigia o Reino dos Lobos. Quando ameaçada a segurança dos lobos, ela assumirá a forma de um lobo e mostrará suas presas e garras. Dizia-se que seus poderes era dados por um Arconte antigo.', 'false', 'boss'),
(4, 'all_nations', 'teleporte', 'Ponto de Teleporte', 'Dispositivos estranhos espalhados por Teyvat, aparentemente formando uma certa ordem. As pessoas no continente os veem como objetos antigos. Apensar de não saberem para que servem, já estão acostumadas com sua existência. Para um viajante, no entanto, sua função se torna bastante aparente.', 'false', 'teleporte_dominios'),
(6, 'mondstadt', 'santuario_anemo', 'Santuário Anemo', '', 'true', 'monumentos'),
(7, 'mondstadt', 'regisvine_cryo', 'Regisvine Cryo', 'Um monstro formado a partir de uma videira imbuída da essência da geada cortante na Linha Ley. Em certas circunstâncias, algumas plantas se transformarão em criaturas de tamanho e intenção monstruosas - como as Regisvines Cryo - ao longo de muitos anos.', 'false', 'boss'),
(8, 'mondstadt', 'hypo_anemo', 'Hypostasis Anemo', 'Codinome: Beth. Uma entidade Anemo de alta pureza. Hypostasis elementais são formas de vida que abandonaram completamente dua aparência anterior e sua estrutura biológica, tornando-as capazes de atingir o mais alto nível de pureza elemental.', 'false', 'boss'),
(9, 'mondstadt', 'hypo_electro', 'Hypostasis Electro', 'Codinome: Aleph. Uma entidade Electro de alta pureza. As Hypostasis Elementais são as formas mais altas de estrutura elemental que geralmente são formadas em um local com energia elemental ou em uma Linha Ley elemental obstruída.', 'false', 'boss'),
(10, 'all_nations', 'templo', 'Templo', '', 'false', 'teleporte_dominios'),
(11, 'all_nations', 'dominio', 'Domínio ', '', 'false', 'teleporte_dominios'),
(12, 'liyue', 'oceanid', 'Oceanid', 'Uma forma de vida criada a partir de elementos Hydro condensados de incrível pureza. Dizem que à medida que os corpos de água se tornam mais puros, os elementos Hydro se tornam mais abundantes no interior, fazendo com que os Oceanids se tornem mais poderosos.', 'false', 'boss'),
(13, 'mondstadt', 'estatua', 'Estátua dos Sete - Anemo', 'Uma estátua monumental que protege Mondstadt. Diz a lenda que foi esculpida de uma imagem do Arconte Anemo. \"As sementes trazidas pelo vento crescerão com o tempo\". A Estátua antecipa, silenciosamente,a chega de uma alma nobre, enquanto ventos milenares revelarão uma nova história...', 'false', 'teleporte_dominios'),
(14, 'liyue', 'estatua', 'Estátua dos Sete - Geo', 'Uma estátua monumental que protege Liyue. Diz a lenda que foi esculpida de uma imagem do Arconte Geo. Apesar de seu porto movimentado, que atrai muitos comerciantes, a história de Liyue é calma e pacífica como seu Arconte.', 'false', 'teleporte_dominios'),
(15, 'all_nations', 'baga', 'Baga', '', 'true', 'recursos'),
(16, 'all_nations', 'batata', 'Batata', '', 'true', 'recursos'),
(17, 'all_nations', 'bau_simples', 'Baú Simples', '', 'true', 'itens'),
(18, 'all_nations', 'bau_dourado', 'Baú Dourado/Precioso', '', 'true', 'itens'),
(19, 'liyue', 'broto_bambu', 'Broto de Bambu', '', 'true', 'recursos'),
(20, 'all_nations', 'carne_resfriada', 'Carne Resfriada', '', 'true', 'recursos'),
(21, 'mondstadt', 'cecilia', 'Cecília', '', 'true', 'recursos'),
(22, 'all_nations', 'cenoura', 'Cenoura', '', 'true', 'recursos'),
(23, 'all_nations', 'cogumelo', 'Cogumelo', '', 'true', 'recursos'),
(24, 'mondstadt', 'cogumelo_filanemo', 'Cogumelo Filanemo', '', 'true', 'recursos'),
(25, 'all_nations', 'concha', 'Concha', '', 'true', 'recursos'),
(26, 'liyue', 'cor_lapis', 'Cor Lápis', '', 'true', 'minerios'),
(27, 'all_nations', 'cristal', 'Cristal', '', 'true', 'minerios'),
(28, 'all_nations', 'cristal_electro', 'Cristal Eletrificado', '', 'true', 'minerios'),
(29, 'global', 'cristal_magico', 'Cristal Mágico', '', 'true', 'minerios'),
(30, 'mondstadt', 'calcedonia_carmesim', 'Calcedônia Carmesim', '', 'true', 'oculos'),
(31, 'liyue', 'hypo_geo', 'Hypostasis Geo', 'Codinome: Gímel. Uma entidade Geo de alta pureza. As Hypostasis Elementais são construção ultracompactas com alta massa. A energia elemental concentrada forma uma concha sólida endurecida em torno de seu núcleo, deixando apenas o núcleo reativo a estímulos elementais.', 'false', 'boss'),
(32, 'liyue', 'regisvine_pyro', 'Regisvine Pyro', 'Uma videira gigante que absorveu a chama flutuante e antiga dentro das Linhas Ley. É inquieta, como se estivesse cheia de uma fúria sem fim.', 'false', 'boss'),
(33, 'liyue', 'dragarto_primordial', 'Dragarto Primordial', 'Após tantos anos, os gigantes Dragartos Geo já se acostumaram com as transformações anormais do ambiente. Dizem os moradores que após o Stormterror que destruiu o Vale Tianqiu, os Dragartos Geo e Dragartos Geo Antigos juntamente se afundaram na terra, aguardando uma oportunidade de renascimento.', 'false', 'boss'),
(34, 'mondstadt', 'sabugueiro', 'Arvore do Sabugueiro', 'A árvore antiga que deveria ter dormido para sempre sob a neve saiu dele como nova. Ofereça a Calcedônia Carmesim espalhada pela Espinha do Dragão para ela. ', 'false', 'outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `map_marcadores`
--

DROP TABLE IF EXISTS `map_marcadores`;
CREATE TABLE IF NOT EXISTS `map_marcadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nation` varchar(50) NOT NULL,
  `grupo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(50) NOT NULL,
  `descrição` text NOT NULL,
  `nameimg` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_video` varchar(150) NOT NULL,
  `coord` varchar(150) NOT NULL,
  `qtd_item` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `map_marcadores`
--

INSERT INTO `map_marcadores` (`id`, `nation`, `grupo`, `title`, `descrição`, `nameimg`, `id_video`, `coord`, `qtd_item`, `tipo`, `author`) VALUES
(73, 'mondstadt', 'santuario_anemo', '', '', 'https://i.imgur.com/TFRRbcn.png, https://i.imgur.com/1MkGlGi.png', '', '35.728677, 12.194824', '', 'monumentos', 'andremalveira'),
(111, 'mondstadt', 'andrius', '', '', '16185403801b554a52643788461c4c51c68a23cbc5.png, 16185403804f92311aedac9ecded35e36d9b3a53b4.png, 1618540380acbdc3ca9d7bdc66f7de0254ed2d8cde.png, 1618540380cd99676fca44023f278ae28c4dbe0f4e.png', '', '21.166484, 6.152344', '', 'boss', 'andremalveira'),
(112, 'mondstadt', 'regisvine_cryo', '', '', '1618540427d8b1eae563083406812c1128a3a5a830.png, 161854042717414180f2406148e8acb938922fe084.png, 1618540427d40e6aa7ac2f776aaa3016187c6fa065.png, 16185404276582062f5758067cc432d3999e1001eb.png', '', '23.241346, 37.353516', '', 'boss', 'andremalveira'),
(113, 'all_nations', 'teleporte', '', '', '16186174327e8ab347268374a9c8c99d0804cf421d.png', '', '26.804461, 33.574219', '', 'teleporte_dominios', 'andremalveira'),
(114, 'mondstadt', 'estatua', '', '', '1618617650d41a5e9cea1924a84b5142362ad9d94c.png, 161861765003098cdcb2ce3f3e08e5aa9a3df46085.png, 16186176502ce6f803b9d9c125c678ab4aceeb03c7.png', '', '32.268555, 29.707031', '', 'teleporte_dominios', 'andremalveira'),
(115, 'all_nations', 'teleporte', '', '', '16186177924cee2f84df4064cae73bc9e3d252c5a3.png, 1618617792a24812092ec9332103d6abc686dbc7ac.png', '', '20.591652, 34.057617', '', 'teleporte_dominios', 'andremalveira'),
(128, 'mondstadt', 'hypo_anemo', '', '', '1618700816cfcd208495d565ef66e7dff9f98764da.png, 1618700816c4ca4238a0b923820dcc509a6f75849b.png, 1618700816c81e728d9d4c2f636f067f89cc14862c.png', '', '38.462192, 29.025879', '', 'boss', 'andremalveira'),
(129, 'mondstadt', 'estatua', '', '', '16187010419036f3d7836e7077940499adfcaf7ba2.png, 1618701041b1d0754b60a72cca30074e1db5215596.png, 1618701041685fa7cb5f2532c193840c4396509b2c.png', '', '18.999803, 28.190918', '', 'teleporte_dominios', 'andremalveira'),
(130, 'all_nations', 'teleporte', '', '', '1618702706a4ef820a8b67d52fb6d732dd92bed185.png', '', '35.119909, 28.366699', '', 'teleporte_dominios', 'andremalveira'),
(132, 'all_nations', 'teleporte', '', '', '1618703428d501c2dc32e78bc757880fcf90e09f34.png, 16187034282939bd7e5601ceccc74eb5a4ccb31b8c.png', '', '36.844461, 36.276855', '', 'teleporte_dominios', 'andremalveira'),
(134, 'all_nations', 'dominio', 'Jardim do Verão', 'Com a queda da antiga civilização perdida, o próspero e magnífico Sommernachtgarten também foi enterrado no subsolo, deixando apenas suas árvores e pedras antigas para recordar sua glória passada.', '1618704337c4ca4238a0b923820dcc509a6f75849b.png, 1618704337c81e728d9d4c2f636f067f89cc14862c.png, 1618704337eccbc87e4b5ce2fe28308fd9f2a7baf3.png, 1618704337e4da3b7fbbce2345d7772b0674a318d5.png', '', '30.996446, 34.694824', '', 'teleporte_dominios', 'andremalveira'),
(135, 'all_nations', 'teleporte', '', '', '16187048672087321115346d2aaa362ecea1168dd7.png, 161870486734067230733f77a08731da9e775c0724.png, 161870486706f3c3dc74e5b4328f928d1a36ad8982.png', '', '34.307144, 36.408691', '', 'teleporte_dominios', 'andremalveira'),
(136, 'all_nations', 'templo', 'Templo do Lobo', 'Era uma vez um templo dedicado ao Lobo do Norte. Agora os padres se foram e o templo foi tomado por monstros. No entanto, eles dizem que o espírito do Lobo ainda vigia os campos intermináveis e Mondstadt de outro lugar.', '1618705294c4ca4238a0b923820dcc509a6f75849b.png, 1618705294c81e728d9d4c2f636f067f89cc14862c.png, 1618705294eccbc87e4b5ce2fe28308fd9f2a7baf3.png, 1618705294a87ff679a2f3e71d9181a67b7542122c.png', '', '24.607069, 36.628418', '', 'teleporte_dominios', 'andremalveira'),
(137, 'all_nations', 'templo', 'Templo do Falcão', 'Essa ruína costumava ser um templo dedicado ao benevolente Falcão do Ocidente. O templo do Falcão vigiava a Origem do Vento há milhares de anos. Talvez os ventos do passada ainda permaneçam em seus corredores.', '1618705620c4ca4238a0b923820dcc509a6f75849b.png, 1618705620c81e728d9d4c2f636f067f89cc14862c.png, 1618705620eccbc87e4b5ce2fe28308fd9f2a7baf3.png', '', '24.126702, 26.279297', '', 'teleporte_dominios', 'andremalveira'),
(143, 'all_nations', 'dominio', 'Jardim de Cecília', 'As flores Cecílias que crescem apenas em penhascos altos uma vez floresceram nas estufas daqui. A civilização antiga que outrora desfrutou do perfume de Cecília se perdeu, e o mar de flores brancas também.', '1618709085c4ca4238a0b923820dcc509a6f75849b.png, 1618709085c81e728d9d4c2f636f067f89cc14862c.png, 1618709085eccbc87e4b5ce2fe28308fd9f2a7baf3.png, 1618709085a87ff679a2f3e71d9181a67b7542122c.png, 1618709085e4da3b7fbbce2345d7772b0674a318d5.png', '', '26.411551, 5.734863', '', 'teleporte_dominios', 'andremalveira'),
(144, 'all_nations', 'teleporte', '', '', '1618709417af0167b9214c47b890c7e2ec61b47448.png, 161870941711a3a1ef5e6c850c454d332ef8045f51.png', '', '26.980829, 8.942871', '', 'teleporte_dominios', 'andremalveira'),
(145, 'all_nations', 'teleporte', '', '', '161870966581d15ec0d218fa375d381a654b5a0c8e.png, 161870966501a72f774486426106eea5f9c17a9438.png', '', '24.666986, 12.041016', '', 'teleporte_dominios', 'andremalveira'),
(146, 'all_nations', 'teleporte', '', '', '16187099235dfabbba83e2ed081e3fee0697984a4a.png, 1618709924ca43628ff92f294d2f01e230974bcfe8.png', '', '21.002471, 19.709473', '', 'teleporte_dominios', 'andremalveira'),
(147, 'all_nations', 'teleporte', '', '', '16187105020c65a7e3c1f2e5be2ca7cef3fdeb4ef2.png, 16187105022b4f6885986dbfd747d2730045a120af.png', '', '17.014768, 20.566406', '', 'teleporte_dominios', 'andremalveira'),
(148, 'mondstadt', 'hypo_electro', '', '', '1618711144f16b874f37d1b232fd474ec90dd920a1.png', '', '6.599131, 43.066406', '', 'boss', 'andremalveira'),
(150, 'liyue', 'dragarto_primordial', '', '', '1618889525eccbc87e4b5ce2fe28308fd9f2a7baf3.png', '', '32.175612, 4.042969', '', 'boss', 'andremalveira'),
(154, 'mondstadt', 'andrius', '', '', '1619550788eccbc87e4b5ce2fe28308fd9f2a7baf3.png', '', '13.325485, 0.175781', '', 'boss', 'andremalveira'),
(168, 'all_nations', 'templo', 'Caminho da Rebeldia', 'Embora os Ladrões de Tesoura tenham ouvido falar em tesouros escondidos aqui, eles ainda não descobriram sua localização, Neste mundo, quanto mais se apega a ilusões, mais rapidamente deslizam entre os dedos. Somente quando os desejos do coração são finalmente deixados de lados, é possível encontrar o caminho estreito para a paz.', 'https://i.ytimg.com/vi/WifHRkXNQR4/maxresdefault.jpg', '', '-32.971804, -18.742676', '', 'teleporte_dominios', 'andremalveira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `map_tiposgrupos`
--

DROP TABLE IF EXISTS `map_tiposgrupos`;
CREATE TABLE IF NOT EXISTS `map_tiposgrupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `map_tiposgrupos`
--

INSERT INTO `map_tiposgrupos` (`id`, `value`, `title`) VALUES
(4, 'itens', 'Itens'),
(8, 'boss', 'Boss'),
(6, 'inimigos', 'Inimigos'),
(9, 'teleporte_dominios', 'Teleportes | Templos | Domínios | Estátuas'),
(5, 'recursos', 'Recursos'),
(7, 'missões', 'Missões'),
(2, 'monumentos', 'Monumentos | Santuários | Pratos'),
(1, 'oculos', 'Oculos | Calcedônia'),
(3, 'minerios', 'Minérios'),
(10, 'outros', 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `meta`
--

DROP TABLE IF EXISTS `meta`;
CREATE TABLE IF NOT EXISTS `meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `nomeview` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `meta`
--

INSERT INTO `meta` (`id`, `nome`, `nomeview`, `text`) VALUES
(1, 'Título', '', '| genshimpact.ga'),
(2, 'site_name', '', 'Genshin Impact Web'),
(3, 'type', '', 'game'),
(4, 'section', '', 'Builds, Guia de Personagens'),
(5, 'tag_keywords', '', 'Genshin Impact, Mihoyo, Guia de Artefatos, RPG, Game, Nerd Games, PC, PS4, Mobile, Atualização 1.2, Versão 1.2, Atualização 1.3, Versão 1.3,'),
(6, 'tag_keywords2', '', 'Update 1.2, v1.2, Update 1.3, v1.3, Artefatos, Armas, Equipes'),
(7, 'title', '', 'Confira as melhores builds para'),
(8, 'descrition', '', 'Veja os melhores artefatos, armas e equipe para'),
(9, 'titulo_do_site', 'Título do Site', 'Genshin Impact Web'),
(10, 'subtitulo_do_site', 'Subtítulo do Site', 'Mundo de Teyvat'),
(11, 'sobre_site', 'Sobre o Site', 'Este site não possui nenhum vínculo com a <a href=\"https://mihoyo.com\" target=\"_blank\">Mihoyo<a></a>, é apenas um site criado por um fã para comunidade de <a href=\"https://genshin.mihoyo.com\" target=\"_blank\">Genshin Impact<a></a>. '),
(12, 'link_site', 'Link Site', 'genshimpact.ga'),
(13, 'since_site', 'Since', '2020 - 2021 | Desenvolvido com ❤ por fã.'),
(14, 'bg_menuPaimon', 'Bg MenuPaimon Link', 'https://i.imgur.com/WN9K3v1.png'),
(15, 'bg_site', 'Bg Site Link', 'https://i.imgur.com/tbJgp9i.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nations`
--

DROP TABLE IF EXISTS `nations`;
CREATE TABLE IF NOT EXISTS `nations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `elemento` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nations`
--

INSERT INTO `nations` (`id`, `nome`, `elemento`) VALUES
(1, 'Mondstadt', 'Anemo'),
(2, 'Liyue', 'Geo'),
(3, 'Inazuma', 'Electro'),
(4, 'Sumeru', 'Dendro'),
(5, 'Fontaine', 'Hydro'),
(6, 'Natlan', 'Pyro'),
(7, 'Snezhnaya', 'Cryo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nomes`
--

DROP TABLE IF EXISTS `nomes`;
CREATE TABLE IF NOT EXISTS `nomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nomes`
--

INSERT INTO `nomes` (`id`, `nome`) VALUES
(1, 'nome1'),
(2, 'nome2'),
(3, 'nome3'),
(4, 'nome4'),
(5, 'nome5'),
(6, 'nome6'),
(7, 'nome7'),
(8, 'nome8'),
(9, 'nome9'),
(10, 'nome10'),
(11, 'nome12'),
(12, 'nome13'),
(13, 'nome13'),
(14, 'nome14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagens`
--

DROP TABLE IF EXISTS `personagens`;
CREATE TABLE IF NOT EXISTS `personagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `nation` varchar(150) NOT NULL,
  `elemento` varchar(20) NOT NULL,
  `star` varchar(2) NOT NULL,
  `arma` varchar(20) NOT NULL,
  `niver` varchar(6) NOT NULL,
  `afiliação` varchar(50) NOT NULL,
  `constelação` varchar(50) NOT NULL,
  `comentário` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `habilidade` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `personagens`
--

INSERT INTO `personagens` (`id`, `nome`, `title`, `nation`, `elemento`, `star`, `arma`, `niver`, `afiliação`, `constelação`, `comentário`, `habilidade`) VALUES
(1, 'Jean', 'Cavaleira Dente de Leão', 'Mondstadt', 'Anemo', '5', 'Espada', '14/03', 'Cavaleiros de Favonius', 'Leo Menor', 'A justa e rigorosa Cavaleira Dente de Leão, a Grande Mestre Intendente dos Cavaleiros de Favonius de Mondstadt.', ''),
(2, 'Beidou', 'Senhora Sem Coro do Oceano', 'Liyue', 'Electro', '4', 'Espadão', '14/02', ' Frota Crux', 'Victor Mare', 'Líder da frota armada Crux. Ela é uma chefe sem limites e franca.', ''),
(3, 'Keqing', 'Não informado', 'Liyue', 'Electro', '5', 'Espada', '20/11', 'Liyue Qixing', 'Trulla Cementarii', 'A yuheng da Liyue Qixing. Tem muito a dizer sobre o Rex Lapis governando Liyue com apenas uma palavra, mas na verdade, esse deus admira muito esses céticos.', '<p>N&atilde;o informado</p>'),
(4, 'Amber', 'Não informado', 'Mondstadt', 'Pyro', '4', 'Arco', '10/08', 'Cavaleiros de Favonius', 'Lepus', 'Sempre energética e cheia de vida, a Amber é a melhor, mas também a última Aventureira dos Cavaleiros de Favonius.', ''),
(5, 'Xiangling', 'não informado', 'Liyue', 'Pyro', '4', 'Lança', '2/11', 'Restaurante Wanmin', 'Ladle', 'Uma renomada chef de Liyue. Ela é extremamente apaixonada por cozinhar e se destaca em fazer seus pratos quentes e picantes.', '<p>GFFGNFGN</p>'),
(6, 'Xiao', 'não informado', 'Liyue', 'Anemo', '5', 'Lança', '17/04', 'Adeptus de Liyue', 'Alatus Nemeseos', 'Um Yaksha, um ser imortal que protege Liyue. Também chamado de \"O caçador de Demônios\" ou \"Guardião Yaksha\"', '<p>sem inform</p>'),
(7, 'Zhongli', 'Não informado', 'Liyue', 'Geo', '5', 'Lança', '31/12', 'Porto de Liyue', 'Não informado', 'Um convidado misterioso da Funerária Wangsheng. Sabe de muita coisa.', ''),
(8, 'Sucrose', 'Não informado', 'Mondstadt', 'Anemo', '4', 'Catalisador', '26/11', 'Cavaleiros de Favonius', 'Ampulla', 'Uma alquimista cheio de curiosidade sobre todas as coisas. O pesquisador na prática da bioalquimia.', ''),
(9, 'Barbara', 'não informado', 'Mondstadt', 'Hydro', '4', 'Catalisador', '5/7', 'Igreja Favonius', 'Cratera', 'Todos os habitantes de Mondstadt adoram a Barbara. Contudo, ela viu a palavra \"ídolo pela primeira em uma revista.', ''),
(10, 'Lisa', 'Não Informado', 'Mondstadt', 'Electro', '4', 'Catalisador', '09/06', 'Cavaleiros de Favonius', 'Ampulheta', 'Preguiçosa, mas conhecida como bibliotecária dos Cavaleiros de Favonius, na verdade foi considerada pela Academia Sumeru como a mas graduada nos últimos dois séculos.', 'Nada Informado'),
(11, 'Diluc', 'Não Informado', 'Mondstadt', 'Pyro', '5', 'Espadão', '30/04', 'Adega do Alvorecer', 'Noctua', 'O magnata do império de vinhedos em Mondstadt, inigualável em todos os sentidos', 'Nada Informado'),
(12, 'Razor', 'Não Informado', 'Mondstadt', 'Electro', '4', 'Espadão', '09/09', 'Reino dos Lobos', 'Lupus Menor', 'Um garoto que vive entre os lobos no Reino dos Lobos em Mondstadt, longe da civilização. É ágil como um relâmpago.', 'Nada Informado'),
(13, 'Tartaglia', 'Não Informado', 'Snezhnaya', 'Hydro', '5', 'Arco', '07/20', 'Fatui', 'Monoceros Caeli', 'O Nº 11 dos Fatui, também conhecido como \"Childe\". O seu nome é bastante temido em campos de batalha.', '<p>Nada Informado</p>'),
(14, 'Hutao', 'Diretor Hu', 'Liyue', 'Pyro', '5', 'Lança', '15/07', 'Funerária Wangsheng', 'Butterfly Charontis', 'O 77°Diretor da Casa Funerária Wangsheng, Ela assumiu o negócio ainda muito jovem.', '<p>Nada Informado</p>'),
(15, 'Ayaka', '', 'Inazuma', 'Cryo', '5', 'Espada', '28/09', 'Casa Kamisato', '', 'A princesa da renomada Casa Kamisato de Inazuma. Ela é a personificação da nobreza e elegância. ', ''),
(16, 'Venti', 'Bardo Windborne', 'Mondstadt', 'Anemo', '5', 'Arco', '16/06', 'Arconte de Mondstadt', 'Carmen Dei', 'Um dos muitos bardos de Mondstadt, que vagueia livremente pelas ruas e becos da cidade.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_armas`
--

DROP TABLE IF EXISTS `tipo_armas`;
CREATE TABLE IF NOT EXISTS `tipo_armas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_armas`
--

INSERT INTO `tipo_armas` (`id`, `tipo`) VALUES
(1, 'Arco'),
(2, 'Espada'),
(3, 'Espadão'),
(4, 'Catalisador'),
(5, 'Lança');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `type_user` varchar(20) NOT NULL,
  `type_user_cod` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user`, `senha`, `nome`, `type_user`, `type_user_cod`, `img`) VALUES
(1, 'andremalveira', 'fbb156e9440da08d87ff179b4a879e78', 'André Malveira', 'Administrador', 0, '143294032_1986671704807073_5192302210026658578_n.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas_by_date`
--

DROP TABLE IF EXISTS `visitas_by_date`;
CREATE TABLE IF NOT EXISTS `visitas_by_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `visitas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `visitas_by_date`
--

INSERT INTO `visitas_by_date` (`id`, `data`, `visitas`) VALUES
(1, '20/01/2021', 5),
(2, '21/01/2021', 8),
(3, '22/01/2021', 15),
(4, '23/01/2021', 20),
(5, '24/01/2021', 35),
(6, '25/01/2021', 5),
(7, '26/01/2021', 0),
(8, '27/01/2021', 0),
(9, '29/01/2021', 0),
(10, '30/01/2021', 1),
(11, '31/01/2021', 0),
(12, '01/02/2021', 0),
(13, '02/02/2021', 1),
(14, '04/02/2021', 0),
(15, '06/02/2021', 0),
(16, '07/02/2021', 0),
(17, '10/02/2021', 0),
(18, '13/02/2021', 0),
(19, '14/02/2021', 0),
(20, '15/02/2021', 0),
(21, '16/02/2021', 0),
(22, '17/02/2021', 0),
(23, '18/02/2021', 0),
(24, '19/02/2021', 0),
(25, '20/02/2021', 0),
(26, '21/02/2021', 0),
(27, '22/02/2021', 0),
(28, '23/02/2021', 0),
(29, '24/02/2021', 0),
(30, '25/02/2021', 0),
(31, '26/02/2021', 0),
(32, '27/02/2021', 0),
(33, '28/02/2021', 0),
(34, '01/03/2021', 0),
(35, '02/03/2021', 0),
(36, '03/03/2021', 2),
(37, '05/03/2021', 59),
(38, '14/03/2021', 0),
(39, '16/03/2021', 0),
(40, '20/03/2021', 0),
(41, '21/03/2021', 0),
(42, '24/03/2021', 0),
(43, '25/03/2021', 0),
(44, '26/03/2021', 0),
(45, '02/04/2021', 0),
(46, '03/04/2021', 0),
(47, '04/04/2021', 0),
(48, '05/04/2021', 0),
(49, '06/04/2021', 0),
(50, '07/04/2021', 0),
(51, '08/04/2021', 0),
(52, '09/04/2021', 0),
(53, '10/04/2021', 0),
(54, '11/04/2021', 0),
(55, '12/04/2021', 0),
(56, '13/04/2021', 0),
(57, '15/04/2021', 0),
(58, '16/04/2021', 0),
(59, '17/04/2021', 0),
(60, '18/04/2021', 0),
(61, '19/04/2021', 0),
(62, '27/04/2021', 0),
(63, '30/05/2021', 0),
(64, '31/05/2021', 0),
(65, '01/06/2021', 0),
(66, '02/06/2021', 0),
(67, '03/06/2021', 0),
(68, '04/06/2021', 0),
(69, '05/06/2021', 0),
(70, '06/06/2021', 0),
(71, '07/06/2021', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitas_by_mes`
--

DROP TABLE IF EXISTS `visitas_by_mes`;
CREATE TABLE IF NOT EXISTS `visitas_by_mes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(20) NOT NULL,
  `visitas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `visitas_by_mes`
--

INSERT INTO `visitas_by_mes` (`id`, `mes`, `visitas`) VALUES
(1, 'Outubro/2020', 5),
(2, 'Novembro/2020', 8),
(3, 'Dezembro/2020', 12),
(4, 'Janeiro/2021', 9),
(9, 'Fevereiro/2021', 1),
(10, 'março/2021', 112),
(11, 'abril/2021', 0),
(12, 'maio/2021', 0),
(13, 'junho/2021', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
