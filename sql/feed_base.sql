USE info411;


INSERT INTO `pays` (`id_pays`, `nom`, `region`) VALUES
(1, 'France', 'Europe\r\n'),
(2, 'Maroc', 'Afrique'),
(3, 'Chine', 'Asie'),
(4, 'Canada', 'Amérique du nord');

INSERT INTO `fruit_pays` (`id_fruit`, `id_pays`) VALUES
(3, 1),
(1, 2),
(2, 3);


