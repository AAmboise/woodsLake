
CREATE TABLE `user` ( -- CREATION DE LA TABLE USER
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    `prenom` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `telephone` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `isAdmin` int(10) NOT NULL,
    PRIMARY KEY(`ID`) 
);

CREATE TABLE `extrait` ( -- CREATION DE LA TABLE EXTRAIT
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `titre` varchar(255) NOT NULL,
    `URLFichier` varchar(255) NOT NULL,
    PRIMARY KEY(`ID`) 
);

CREATE TABLE `concert` ( -- CREATION DE LA TABLE 
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `date` date NOT NULL,
    `URLImage` varchar(255) NOT NULL,
    `lieu` varchar(255) NOT NULL,
    `heure` varchar(255) NOT NULL,
    PRIMARY KEY(`ID`) 
);

CREATE TABLE `photo` ( -- CREATION DE LA TABLE PHOTO
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `titre` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `gallerie` varchar(255) NOT NULL,
    `URLFichier` varchar(255) NOT NULL,
    PRIMARY KEY(`ID`) 
);

CREATE TABLE `gallerie` ( -- CREATION DE LA TABLE Gallerie
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    PRIMARY KEY(`id`) 
);
INSERT INTO `gallerie` (nom) VALUES ('Caroussel');
INSERT INTO `gallerie` (nom) VALUES ('Slider');

CREATE TABLE `reservation` ( -- CREATION DE LA TABLE RESERVATION
    `ID` int(35) NOT NULL AUTO_INCREMENT,
    `id_user` varchar(255) NOT NULL,
    `id_concert` varchar(255) NOT NULL,
    `id_date` varchar(255) NOT NULL,
    PRIMARY KEY(`id`) 
);

