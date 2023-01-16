-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Abr-2021 às 16:27
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bomhotel_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bedrooms`
--

CREATE TABLE `bedrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` int(11) NOT NULL,
  `Andar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bedrooms`
--

INSERT INTO `bedrooms` (`id`, `codigo`, `Andar`, `capacidade`, `tipo`, `photo`, `descricao`, `observacao`, `status`, `created_at`, `updated_at`) VALUES
(1, 1234, '3', '2', 'SUITI', NULL, 'dthydj', 'fthyt', 'Disponivel', '2021-04-17 23:08:53', '2021-04-17 23:09:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospede` int(11) NOT NULL,
  `reserva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipopagamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `checkins`
--

INSERT INTO `checkins` (`id`, `hospede`, `reserva`, `preco`, `tipopagamento`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '35455', 'Dinheiro Físico', '2021-04-17 23:11:23', '2021-04-17 23:11:23'),
(2, 1, '1', '3434', 'Cartão Multicaixa', '2021-04-17 23:26:30', '2021-04-17 23:26:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumos`
--

CREATE TABLE `consumos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reserva` bigint(20) UNSIGNED NOT NULL,
  `produto` bigint(20) UNSIGNED NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consumos`
--

INSERT INTO `consumos` (`id`, `reserva`, `produto`, `quantidade`, `total`, `user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 22, NULL, 1, '2021-04-18 17:25:36', '2021-04-18 17:25:36'),
(2, 2, 1, 22, NULL, 1, '2021-04-18 17:25:54', '2021-04-18 17:25:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospedes`
--

CREATE TABLE `hospedes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numIdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoIdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascionalidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoHospede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataNasc` date NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `hospedes`
--

INSERT INTO `hospedes` (`id`, `name`, `email`, `numIdt`, `tipoIdt`, `Pais`, `nascionalidade`, `morada`, `nif`, `tipoHospede`, `dataNasc`, `user`, `created_at`, `updated_at`) VALUES
(1, 'José Samuel', '15dezembro2002@gmail.com', '23', 'BI- Bilhete de Idetificação', 'Angola', 'Angolana', 'Forte Santa RIta', '135', 'Normal', '2021-04-23', 1, '2021-04-17 23:10:25', '2021-04-17 23:10:25'),
(2, 'Mandy', 'Bernardonatal34@.gimail.com', '23', 'Cedula Pessoal', 'Portugal', 'Angolana', 'Cinco', '356', 'Empresarial', '2021-04-07', 1, '2021-04-17 23:12:27', '2021-04-17 23:12:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_16_010831_create_my_hotel_table', 1),
(5, '2021_04_16_011022_create_bedrooms_table', 1),
(6, '2021_04_16_141512_create_hospedes_table', 1),
(7, '2021_04_16_151843_create_reservas_table', 1),
(8, '2021_04_16_163158_create_checkins_table', 1),
(9, '2021_04_17_103357_create_produto_table', 1),
(10, '2021_04_17_134218_create_consumos_table', 1),
(11, '2021_04_18_133434_create_premicoes_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `my_hotel`
--

CREATE TABLE `my_hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `premicoes`
--

CREATE TABLE `premicoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `premicoes`
--

INSERT INTO `premicoes` (`id`, `name`, `descricao`, `menu`, `created_at`, `updated_at`) VALUES
(1, 'alfredo', 'rddddddddddddddf', 'Front-Office - Recepção', '2021-04-18 17:02:08', '2021-04-18 17:02:08'),
(2, 'Administrador', 'teste', 'Administrativa', '2021-04-18 17:09:06', '2021-04-18 17:09:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `estoque` int(11) DEFAULT NULL,
  `codigobarra` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `valor`, `estoque`, `codigobarra`, `status`, `user`, `created_at`, `updated_at`) VALUES
(1, 'eeeeeee', 12, 12, '23333333333', 'Serviço', 1, '2021-04-18 17:10:24', '2021-04-18 17:10:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospede` int(11) NOT NULL,
  `quat_hospede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Entrada` date NOT NULL,
  `saida` date NOT NULL,
  `classificacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `composicao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `hospede`, `quat_hospede`, `Entrada`, `saida`, `classificacao`, `composicao`, `bedroom`, `checkin`, `user`, `created_at`, `updated_at`) VALUES
(1, 1, '4', '2021-04-07', '2021-04-22', 'teste', 'teste', '1', NULL, '1', '2021-04-17 23:11:03', '2021-04-17 23:11:03'),
(2, 2, '6', '2021-04-22', '2021-04-30', 'teste', 'teste', '1', 'activo', '1', '2021-04-17 23:13:00', '2021-04-17 23:13:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_exp` date NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `profile`, `photo`, `date_exp`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alfredo Manuel', 'alfredo03', 'alfredo@gmail.com', 'Administrador', NULL, '2021-04-01', NULL, '$2y$10$UkG488rUZNqOKnzV3Chi3OxkcIUH1CmGDtoy22dE5bAsPPcoF1zzi', NULL, NULL, NULL),
(2, 'alfredo', 'alfredo', 'alfredo@gmail.com', 'alfredo', NULL, '2021-04-05', NULL, '$2y$10$2dYiKKUpJGUMrDlgYy.xvOYt89jZ7uQiySQChIDexmevNa1HQH6Ky', NULL, '2021-04-18 17:09:47', '2021-04-18 17:09:47');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_reserva`
-- (See below for the actual view)
--
CREATE TABLE `v_reserva` (
`id_hospede` bigint(20) unsigned
,`name` varchar(191)
,`email` varchar(191)
,`numIdt` varchar(191)
,`nascionalidade` varchar(191)
,`morada` varchar(191)
,`dataNasc` date
,`tipoHospede` varchar(191)
,`quat_hospede` varchar(191)
,`Entrada` date
,`created_at` timestamp
,`id_reserva` bigint(20) unsigned
,`saida` date
,`classificacao` varchar(191)
,`codigo` int(11)
,`Andar` varchar(191)
,`status` varchar(191)
,`descricao` text
,`capacidade` varchar(191)
,`tipo` text
);

-- --------------------------------------------------------

--
-- Structure for view `v_reserva`
--
DROP TABLE IF EXISTS `v_reserva`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_reserva`  AS  select `hospedes`.`id` AS `id_hospede`,`hospedes`.`name` AS `name`,`hospedes`.`email` AS `email`,`hospedes`.`numIdt` AS `numIdt`,`hospedes`.`nascionalidade` AS `nascionalidade`,`hospedes`.`morada` AS `morada`,`hospedes`.`dataNasc` AS `dataNasc`,`hospedes`.`tipoHospede` AS `tipoHospede`,`reservas`.`quat_hospede` AS `quat_hospede`,`reservas`.`Entrada` AS `Entrada`,`reservas`.`created_at` AS `created_at`,`reservas`.`id` AS `id_reserva`,`reservas`.`saida` AS `saida`,`reservas`.`classificacao` AS `classificacao`,`bedrooms`.`codigo` AS `codigo`,`bedrooms`.`Andar` AS `Andar`,`bedrooms`.`status` AS `status`,`bedrooms`.`descricao` AS `descricao`,`bedrooms`.`capacidade` AS `capacidade`,`bedrooms`.`tipo` AS `tipo` from ((`reservas` join `hospedes` on((`reservas`.`hospede` = `hospedes`.`id`))) join `bedrooms` on((`reservas`.`bedroom` = `bedrooms`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedrooms`
--
ALTER TABLE `bedrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumos`
--
ALTER TABLE `consumos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospedes`
--
ALTER TABLE `hospedes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_hotel`
--
ALTER TABLE `my_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `premicoes`
--
ALTER TABLE `premicoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bedrooms`
--
ALTER TABLE `bedrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consumos`
--
ALTER TABLE `consumos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospedes`
--
ALTER TABLE `hospedes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `my_hotel`
--
ALTER TABLE `my_hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premicoes`
--
ALTER TABLE `premicoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
