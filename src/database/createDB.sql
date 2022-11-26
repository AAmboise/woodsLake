
CREATE TABLE `user` ( -- CREATION DE LA TABLE USER
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `nom` varchar(50) NOT NULL,
    `prenom` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `telephone` varchar(10) NOT NULL,
    `password` varchar(255) NOT NULL,
    `isAdmin` boolean NOT NULL,
    PRIMARY KEY(`id`) 
);

CREATE TABLE `extrait` ( -- CREATION DE LA TABLE EXTRAIT
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `titre` varchar(50) NOT NULL,
    `URLFichier` varchar(255) NOT NULL,
    PRIMARY KEY(`id`) 
);

CREATE TABLE `concert` ( -- CREATION DE LA TABLE 
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `date` date NOT NULL,
    `URLImage` varchar(255) NOT NULL,
    `lieu` varchar(50) NOT NULL,
    `heure` varchar(10) NOT NULL,
    PRIMARY KEY(`id`) 
);

CREATE TABLE `galerie` ( -- CREATION DE LA TABLE Galerie
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    PRIMARY KEY(`id`) 
);
INSERT INTO `galerie` (nom) VALUES ('Caroussel (3 max)');
INSERT INTO `galerie` (nom) VALUES ('Slider');

CREATE TABLE `photo` ( -- CREATION DE LA TABLE PHOTO
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `titre` varchar(50) NOT NULL,
    `description` varchar(255) NOT NULL,
    `galerie_id` int(10) UNSIGNED NOT NULL,
    `URLFichier` varchar(255) NOT NULL,
    PRIMARY KEY(`id`),
    CONSTRAINT `photo_galerie_FK` FOREIGN KEY ( `galerie_id`) REFERENCES `galerie`(`id`)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8mb3_general_ci;

-- CREATE TABLE `reservation` ( -- CREATION DE LA TABLE RESERVATION
--     `id` int(10) NOT NULL AUTO_INCREMENT,
--     `user_id` int(10) UNSIGNED NOT NULL,
--     `concert_id` int(10) UNSIGNED NOT NULL,
--     PRIMARY KEY(`id`),
--     KEY `fk_reservation_user1_idx` (`user_id`),
--     KEY `fk_reservation_concert1_idx` (`concert_id`) 
-- );


