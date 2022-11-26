INSERT INTO `concert` (`ID`, `date`, `URLImage`, `lieu`, `heure`) VALUES
	(1, '2022-10-16', '2022-10-14-12-57-57bG9nb1dvb2RzTGFrZS5qcGc=.jpg', 'Olivet', '17h00'),
	(2, '2022-10-30', '2022-10-14YmFubmllcmVDb250YWN0RnVsbC5qcGc=.jpg', 'Tours', '19h30'),
	(3, '2022-10-20', '2022-10-14-12-55-26bG9nb1dvb2RzTGFrZS5qcGc=.jpg', 'Plaimpied-Givaudins', '20h00'),
	(4, '2022-10-22', '2022-10-14-12-58-04YmFubmllcmVDb250YWN0RnVsbC5qcGc=.jpg', 'Orléans', '20h00'),
	(5, '2022-10-22', '2022-10-14-12-59-02cHJvZmlsLmpwZw==.jpg', 'Saint denis en val', '17h00');

INSERT INTO `extrait` (`ID`, `titre`, `URLFichier`) VALUES
    (8, 'The wall', '2022-10-12YXVkaW8yLm1wMw==.mp3'),
    (9, 'Phil Collins', '2022-10-12YXVkaW8xLm1wMw==.mp3'),
    (11, 'autre morceau', '2022-10-12YXVkaW8ubXAz.mp3'),
    (16, 'autre morceau', '2022-10-12YXVkaW8ubXAz.mp3');

INSERT INTO `galerie` (`ID`, `nom`) VALUES
	(3, 'Concerts'),
	(4, 'Répétitions'),
	(5, 'Woods Lake groupe');

INSERT INTO `photo` (`ID`, `titre`, `description`, `galerie_id`, `URLFichier`) VALUES
	(1, 'img2', 'jolie photo ', 5, '2022-10-15-06-44-21aW1nMi5qcGc=.jpg'),
	(2, 'img3', 'jolie photo ', 5, '2022-10-15-06-46-14aW1nMy5qcGc=.jpg'),
	(3, 'img4', 'jolie photo ', 4, '2022-10-15-06-47-36aW1nNC5qcGc=.jpg'),
	(4, 'img5', 'jolie photo ', 2, '2022-10-15-06-47-49aW1nNS5qcGc=.jpg'),
	(5, 'img6', 'jolie photo ', 4, '2022-10-15-06-48-04aW1nNi5qcGc=.jpg'),
	(6, 'img7', 'jolie photo ', 3, '2022-10-15-06-48-21aW1nNy5qcGc=.jpg'),
	(7, 'img8', 'jolie photo ', 5, '2022-10-15-06-48-51aW1nOC5qcGc=.jpg'),
	(8, 'img9', 'jolie photo ', 4, '2022-10-15-06-49-08aW1nOS5qcGc=.jpg'),
	(9, 'img10', 'jolie photo ', 4, '2022-10-15-06-49-20aW1nMTAuanBn.jpg'),
	(10, 'img11', 'jolie photo ', 3, '2022-10-15-06-54-17aW1nMTEuanBn.jpg'),
	(11, 'img12', 'jolie photo', 3, '2022-10-15-06-54-36aW1nMTIuanBn.jpg'),
	(12, 'img13', 'jolie photo ', 2, '2022-10-15-06-55-17aW1nMTMuanBn.jpg'),
	(13, 'img14', 'jolie photo ', 4, '2022-10-15-06-55-52aW1nMTQuanBn.jpg'),
	(14, 'img15', 'jolie photo ', 5, '2022-10-15-06-56-40aW1nMTUuanBn.jpg'),
	(15, 'img16', 'jolie photo ', 3, '2022-10-15-06-57-12aW1nMTYuanBn.jpg'),
	(16, 'img17', 'jolie photo ', 5, '2022-10-15-06-58-24aW1nMTcuanBn.jpg'),
	(17, 'img18', 'jolie photo ', 2, '2022-10-15-06-58-40aW1nMTguanBn.jpg'),
	(18, 'img19', 'jolie photo ', 5, '2022-10-15-06-58-58aW1nMTkuanBn.jpg'),
	(19, 'img20', 'jolie photo ', 4, '2022-10-15-06-59-21aW1nMjAuanBn.jpg'),
	(20, 'img21', 'jolie photo ', 4, '2022-10-15-06-59-45aW1nMjEuanBn.jpg'),
	(21, 'img22', 'jolie photo ', 3, '2022-10-15-07-00-03aW1nMjIuanBn.jpg'),
	(22, 'img23', 'jolie photo ', 2, '2022-10-15-07-00-19aW1nMjMuanBn.jpg'),
	(23, 'img24', 'jolie photo ', 5, '2022-10-15-07-00-33aW1nMjQuanBn.jpg'),
	(24, 'img25', 'jolie photo ', 4, '2022-10-15-07-00-48aW1nMjUuanBn.jpg'),
	(25, 'img26', 'jolie photo ', 4, '2022-10-15-07-01-03aW1nMjYuanBn.jpg'),
	(26, 'header 1', 'woods lake header', 1, '2022-10-16-09-01-35aW1nMS5qcGc=.jpg'),
	(27, 'header2', 'woods lake header', 1, '2022-10-16-09-01-54aW1nMy5qcGc=.jpg'),
	(28, 'header3', 'woods lake header', 2, '2022-10-16-09-02-17aW1nOC5qcGc=.jpg'),
	(29, 'header 4', 'woods lake header', 1, '2022-10-16-09-14-14aW1nNC5qcGc=.jpg'),
	(30, 'img1', 'jolie photo ', 5, '2022-10-30-09-58-02aW1nMS5qcGc=.jpg');

INSERT INTO `user` (`ID`, `nom`, `prenom`, `email`, `telephone`, `password`, `isAdmin`) VALUES
	(1, 'AMBOISE', 'Adrien', 'adrien.amboise@yahoo.fr', '0630255642', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1'),
	(2, 'FILLION', 'Greg', 'greg.greg@greg.com', '6666666666', '0d2c690e7dd5f94780383e9dfa1f4def044319104ad16ab15e45eeb2a8dfc81b', '1'),
	(3, 'AMBOISE', 'Héloïse', 'lolo@gmail.fr', '0404040404', 'abd8cfba151826bb7bf3de57387e9653e9d7f54d61e2e107213b3add4383cf91', '0');