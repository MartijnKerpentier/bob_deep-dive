DROP DATABASE IF EXISTS `bobs_fridges`;

CREATE DATABASE `bobs_fridges`;

USE `bobs_fridges`;

CREATE TABLE koelkasten (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    koelkast_foto TEXT NOT NULL,
    beschrijving TEXT NOT NULL,
    artikelnummer INT NOT NULL
);