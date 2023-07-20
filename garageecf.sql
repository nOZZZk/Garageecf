CREATE TABLE `garage` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(250) DEFAULT NULL,
  `Ville` varchar(250) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Dates` datetime DEFAULT NULL
) 

INSERT INTO `garage`(`Id`, `Nom`, `Ville`, `Telephone`, `horaire`) VALUES
(2, '[Garage V.PARROT]','[Paris]', '[06.04.05.06.07]','[du Lundi au vendredi: 9h-12h / 14h-18h le samedi de 9h-12h]')


CREATE TABLE `services` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(250) DEFAULT NULL,
  `Prix` float DEFAULT NULL,
  `Description` varchar(255) NOT NULL
) 


INSERT INTO `services` (`Id`, `Nom`, `Prix`, `Description`) VALUES
(3, '[Entretien de votre véhicule]', 0, '[Diagnostique, vidanges, filtres à particules]'),
(4, '[Pneumatique]', 0, '[Pneumatique tous véhicules, équilibrages]'),
(5, '[Carosserie]', 0, '[Pour refaire peau neuve]'),
(6, '[Mécanique]', 0, '[Faites confiances a nos expert]');



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL



INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(4, 'user@test.com', '$2y$10$lEzMI.H26sDsV4PzhAVBveHiTDBrH0BGSaNDAin.89cP8y/baG0vu', 'Test', 'Test', 'user'),
(5, 'admin@test.com', '$2y$10$lEzMI.H26sDsV4PzhAVBveHiTDBrH0BGSaNDAin.89cP8y/baG0vu', 'Admin', 'Admin', 'admin');


CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Prix` varchar(20) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `Content` text NOT NULL


INSERT INTO `vehicule` (`id`, `title`, `Prix`, `Details`, `image`, `Content`) VALUES
(0, 'RENAULT MEGANE IV', '18 490€', '2019 | 58 903 Km | Automatique | Essence', 'data:image/webp;base64,UklGRq4cAgBXRUJQVlA4TKIcAgAvg8PgAP8HNwDYtg0gicVy73VKDsj/H9XJ7CQIvCHHtm3Vis65fi/ubpGl9JrmELq7U3WfHpFc25IiRwEJYmZmD7SSQTJTO1nCzJqJyMwf8x+iUTR0BqKuM7CACGEJLEA8NHat70pvyvgrDv/l//9wXbTMM2zOpr1vHv5EdZn/y+qquopNYVfQYAFriyWy2S4bb4jcsvCdUHgU', '1.3 TCE 160 GT-LINE\r\n'),
(1, 'AUDI Q8', '71 990 €', '2020 | 58 199 Km | Automatique | Diesel', '', '3.0 50 286 S LINE'),
(2, 'MINI III 3P', '12 499 €', '2018 | 135 000 Km | Manuelle | Essence', NULL, '1.5 75 ONE SALT'),
(3, 'CITROEN C3 AIRCROSS PHASE 2', '23 900 €', '2022 | 900 Km | Automatique | Essence', NULL, '1.2 PURETECH 131 SHINE'),
(4, 'BMW SERIE 3 F80 M3 phase 2', '72 000€', '2018 | 49 500 Km | Automatique | Essence', NULL, '3.0 431 M3'),
(5, 'BMW SERIE 4 F32', '64 000€', '2019 | 28 000 km | Automatique | Essence', NULL, '3.0 440IA 326 M SPORT'),
(6, 'RENAULT TWINGO III', '9200 €', '2017 | 18 657 Km | Manuelle | Essence', '', '1.0 SCE 70 LIFE');

