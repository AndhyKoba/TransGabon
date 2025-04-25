SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS transgabon;
USE transgabon;

CREATE TABLE `utilisateurs` (
  `utilisateur_id` int(11) NOT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `role` enum('client','agent','admin') DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `ville` (
  `ville_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`ville_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `transport` (
  `transport_id` int(11) NOT NULL,
  `type` enum('avion','train','bus','bateau') DEFAULT NULL,
  `compagnie` varchar(100) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `stationnement` (
  `stat_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `type` enum('gare','port','aéroport','gare_routière') DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `trajet` (
  `trajet_id` int(11) NOT NULL,
  `stat_id` int(11) DEFAULT NULL,
  `transport_id` int(11) DEFAULT NULL,
  `ville_depart` varchar(100) DEFAULT NULL,
  `ville_arrivee` varchar(100) DEFAULT NULL,
  `date_depart` datetime DEFAULT NULL,
  `date_arrivee` datetime DEFAULT NULL,
  `nb_places_total` int(11) DEFAULT NULL,
  `nb_places_restantes` int(11) DEFAULT NULL,
  `statut` enum('prévu','en cours','annulé','retardé') DEFAULT 'prévu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `trajet_id` int(11) DEFAULT NULL,
  `stat_id` int(11) DEFAULT NULL,
  `date_reservation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `informations` (
  `info_id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `trajet_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`utilisateur_id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`);

ALTER TABLE `stationnement`
  ADD PRIMARY KEY (`stat_id`),
  ADD KEY `ville_id` (`ville_id`);

ALTER TABLE `trajet`
  ADD PRIMARY KEY (`trajet_id`),
  ADD KEY `transport_id` (`transport_id`),
  ADD KEY `stat_id` (`stat_id`);

ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `trajet_id` (`trajet_id`),
  ADD KEY `stat_id` (`stat_id`);

ALTER TABLE `informations`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `trajet_id` (`trajet_id`);

ALTER TABLE `utilisateurs`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `transport`
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `ville`
  MODIFY `ville_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `stationnement`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `trajet`
  MODIFY `trajet_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `informations`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `informations`
  ADD CONSTRAINT `informations_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`utilisateur_id`),
  ADD CONSTRAINT `informations_ibfk_3` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`trajet_id`);

ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`utilisateur_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`trajet_id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`stat_id`) REFERENCES `stationnement` (`stat_id`);

ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`transport_id`),
  ADD CONSTRAINT `trajet_ibfk_2` FOREIGN KEY (`stat_id`) REFERENCES `stationnement` (`stat_id`);

ALTER TABLE `stationnement`
  ADD CONSTRAINT `fk_stationnement_ville` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`ville_id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;
