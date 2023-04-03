-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 avr. 2023 à 18:08
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravelgestobjectif`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe_objectif`
--

CREATE TABLE `employe_objectif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `objectif_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_010000_create_objectifs_table', 1),
(3, '2014_10_12_020000_create_pivot_table_employe_objectif', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_03_30_151755_create_taches_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `objectifs`
--

CREATE TABLE `objectifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_debut` text NOT NULL,
  `date_fin` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'En cours',
  `progression` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `objectifs`
--

INSERT INTO `objectifs` (`id`, `titre`, `description`, `date_debut`, `date_fin`, `status`, `progression`, `created_at`, `updated_at`) VALUES
(1, 'performance app tool', 'ss', '03/03/2023', '21/03/2023', 'En cours', '0', '2023-03-28 14:37:32', '2023-03-28 14:37:32'),
(2, 'performance app tool v2', 'test performance app tool v2', '30/03/2023', '27/04/2023', 'En cours', '0', '2023-03-30 10:07:38', '2023-03-30 13:09:49'),
(10, 'sira', 'test test', '28/03/2023', '04/04/2023', 'En cours', '0', '2023-03-28 15:11:29', '2023-03-28 15:11:29');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libele` text NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `status` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `objectif_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `libele`, `date_debut`, `date_fin`, `status`, `user_id`, `objectif_id`, `created_at`, `updated_at`) VALUES
(1, 'Creation d\'interface', '2023-03-31', '2023-04-02', 'en cours', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '/assets/img/profiles/avatar.png',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `matricule`, `adresse`, `sexe`, `poste`, `contact`, `date_naissance`, `avatar`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'siby', 'younoussou', 'cx12258569', 'abidjan cocody ', 'masculin', 'dg', '0748596585', '1982-03-14', '/assets/img/profiles/avatar.png', 'admin@mail.com', '$2y$10$hgRF17DVAzucRoqDDv4RdukYY2TNQp26NsSfg62C/RFdg3r4dsa0a', 1, NULL, NULL, NULL),
(2, 'camara', 'moustapha ange desire', 'cx12258569', 'abidjan cocody ', 'masculin', 'dev web', '0777393356', '1982-03-14', '/assets/img/profiles/avatar.png', 'employe@mail.com', '$2y$10$hgRF17DVAzucRoqDDv4RdukYY2TNQp26NsSfg62C/RFdg3r4dsa0a', 2, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe_objectif`
--
ALTER TABLE `employe_objectif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employe_objectif_user_id_foreign` (`user_id`),
  ADD KEY `employe_objectif_objectif_id_foreign` (`objectif_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `objectifs`
--
ALTER TABLE `objectifs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taches_user_id_foreign` (`user_id`),
  ADD KEY `taches_objectif_id_foreign` (`objectif_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employe_objectif`
--
ALTER TABLE `employe_objectif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `objectifs`
--
ALTER TABLE `objectifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employe_objectif`
--
ALTER TABLE `employe_objectif`
  ADD CONSTRAINT `employe_objectif_objectif_id_foreign` FOREIGN KEY (`objectif_id`) REFERENCES `objectifs` (`id`),
  ADD CONSTRAINT `employe_objectif_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `taches_objectif_id_foreign` FOREIGN KEY (`objectif_id`) REFERENCES `objectifs` (`id`),
  ADD CONSTRAINT `taches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
