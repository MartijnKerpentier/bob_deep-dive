DROP DATABASE IF EXISTS `bobs_fridges`;

CREATE DATABASE `bobs_fridges`;

USE `bobs_fridges`;

CREATE TABLE koelkasten (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `koelkast_foto` TEXT NOT NULL,
    `beschrijving` TEXT NOT NULL,
    `artikelnummer` INT NOT NULL
);

CREATE TABLE `contact` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `voornaam` text NOT NULL,
    `achternaam` text NOT NULL,
    `email` text NOT NULL,
    `telefoon` text NOT NULL,
    `bericht` text NOT NULL
);

CREATE TABLE `users` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `voornaam` text NOT NULL,
    `achternaam` text NOT NULL,
    `wachtwoord` text NOT NULL
);