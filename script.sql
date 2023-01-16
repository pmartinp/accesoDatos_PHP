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
VALUES ('Yasuo','Luchador','Alta','Yasuo, un jonio de fuerte determinación, es un ágil espadachín capaz de controlar el viento y utilizarlo contra sus enemigos. Cuando era un joven altivo, fue acusado de asesinar a su maestro. Incapaz de demostrar su inocencia, se vio obligado a matar a su propio hermano en defensa propia.'),
('Garen','Luchador','Baja','Garen, un orgulloso y noble soldado, lucha a la cabeza de la Vanguardia Impertérrita. Es querido entre sus compañeros y respetado por sus enemigos en su papel de vástago de la prestigiosa familia Crownguard, encargada de defender Demacia y sus ideales.'),
('Teemo','Tirador','Baja','Teemo no se inmuta ante los obstáculos más peligrosos y amenazadores mientras explora el mundo con un entusiasmo infinito y un espíritu lleno de alegría.'),
('Yummi','Soporte','Baja','Yuumi, una gatita mágica proveniente de la Ciudad de Bandle, alguna vez fue la compañera de una hechicera yordle, Norra. Cuando su dueña desapareció misteriosamente, Yuumi se convirtió en la Guardiana del Libro de los Umbrales'),
('Hecarim','Luchador','Moderada','Hecarim es una fusión espectral de hombre y bestia, condenado a arrollar las almas de los vivos por toda la eternidad. Cuando las Islas Bendecidas cayeron en la sombra, este orgulloso caballero fue aniquilado por las energías destructivas de la Ruina, junto con toda su caballería y sus monturas. Ahora, cada vez que la Niebla Negra llega a Runaterra, lidera su devastadora ofensiva, deleitándose en la matanza y aplastando al enemigo bajo sus cascos blindados.');
