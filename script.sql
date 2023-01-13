DROP DATABASE IF EXISTS lol;
CREATE DATABASE lol;

USE lol;

/* Table creation*/
CREATE TABLE champ(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    rol ENUM('Tirador','Mago','Luchador','Asesino','Soporte','Tanque') NOT NULL,
    difficulty ENUM('Baja','Moderada','Alta') NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE user(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

/* Data insertion*/
INSERT INTO champ(`name`, rol, difficulty, description)
VALUES ('Yasuo','Luchador','Alta','Campeón usado por enfermos mentales para hacerte perder la partida y quete entre restricción de chat durante 5 días.'),
('Garen','Luchador','Baja','La peonza de Demacia, mata pulsando un botón. Hasta un gabacho podría ganar una partida jugando semejante basura.'),
('Teemo','Tirador','Baja','El diablillo de la grieta, solamente es jugado por enfermos mentales, que deberían ser castigados con cadena perpetua, para dar sida en la toplane.'),
('Yummi','Soporte','Baja','Literalmente puedes jugarlo con los pies, si quieres apagar el cerebro este es tu campeón.'),
('Hecarim','Luchador','Moderada','El Fernando Alonso de la grieta del invocador, juégalo con una yummi encima y un Zilean en tu equipo y dale asco a la gente corriendo más rápido que la tortuga ninja Mbappe');
