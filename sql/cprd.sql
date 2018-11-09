-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2018 a las 01:40:42
-- Versión del servidor: 5.6.37
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cprd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ans`
--

CREATE TABLE IF NOT EXISTS `ans` (
  `mat` varchar(100) NOT NULL,
  `ques` int(11) NOT NULL,
  `ans` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ans`
--

INSERT INTO `ans` (`mat`, `ques`, `ans`) VALUES
('aaa', 1, 2),
('aaa', 2, 2),
('aaa', 3, 3),
('aaa', 4, 2),
('aaa', 5, 1),
('aaa', 6, 3),
('aaa', 7, 2),
('aaa', 8, 2),
('aaa', 9, 3),
('aaa', 10, 1),
('aaa', 11, 2),
('aaa', 12, 2),
('aaa', 13, 4),
('aaa', 14, 2),
('aaa', 15, 2),
('aaa', 16, 1),
('aaa', 17, 2),
('aaa', 18, 3),
('aaa', 19, 2),
('aaa', 20, 2),
('aaa', 21, 2),
('aaa', 22, 5),
('aaa', 23, 3),
('aaa', 24, 2),
('aaa', 25, 2),
('aaa', 26, 2),
('aaa', 27, 3),
('aaa', 28, 2),
('aaa', 29, 2),
('aaa', 30, 1),
('aaa', 31, 2),
('aaa', 32, 2),
('aaa', 33, 2),
('aaa', 34, 3),
('aaa', 35, 3),
('aaa', 36, 2),
('aaa', 37, 2),
('aaa', 38, 2),
('aaa', 39, 1),
('aaa', 40, 1),
('aaa', 41, 2),
('aaa', 42, 5),
('aaa', 43, 2),
('aaa', 44, 2),
('aaa', 45, 1),
('aaa', 46, 2),
('aaa', 47, 2),
('aaa', 48, 3),
('aaa', 49, 4),
('aaa', 50, 2),
('aaa', 51, 2),
('aaa', 52, 2),
('aaa', 53, 3),
('aaa', 54, 2),
('aaa', 55, 1),
('testUser', 1, 1),
('testUser', 2, 1),
('testUser', 3, 1),
('testUser', 4, 1),
('testUser', 5, 1),
('testUser', 6, 2),
('testUser', 7, 2),
('testUser', 8, 2),
('testUser', 9, 2),
('testUser', 10, 2),
('testUser', 11, 3),
('testUser', 12, 3),
('testUser', 13, 3),
('testUser', 14, 3),
('testUser', 15, 3),
('testUser', 16, 4),
('testUser', 17, 4),
('testUser', 18, 4),
('testUser', 19, 4),
('testUser', 20, 4),
('testUser', 21, 5),
('testUser', 22, 5),
('testUser', 23, 5),
('testUser', 24, 5),
('testUser', 25, 5),
('testUser', 26, 4),
('testUser', 27, 4),
('testUser', 28, 4),
('testUser', 29, 4),
('testUser', 30, 4),
('testUser', 31, 3),
('testUser', 32, 3),
('testUser', 33, 3),
('testUser', 34, 3),
('testUser', 35, 3),
('testUser', 36, 2),
('testUser', 37, 2),
('testUser', 38, 2),
('testUser', 39, 2),
('testUser', 40, 2),
('testUser', 41, 1),
('testUser', 42, 1),
('testUser', 43, 1),
('testUser', 44, 1),
('testUser', 45, 1),
('testUser', 46, 2),
('testUser', 47, 2),
('testUser', 48, 2),
('testUser', 49, 2),
('testUser', 50, 2),
('testUser', 51, 3),
('testUser', 52, 3),
('testUser', 53, 3),
('testUser', 54, 3),
('testUser', 55, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `idQues` int(11) NOT NULL,
  `ques` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `form`
--

INSERT INTO `form` (`idQues`, `ques`) VALUES
(1, 'Suelo tener problemas concentrándome mientras estoy compitiendo.'),
(2, 'Antes de dormirme, suelo “darle muchas vueltas” a la competencia (o el partido) en la que voy a participar.'),
(3, 'Tengo una gran confianza en mi técnica.'),
(4, 'Algunas veces no me encuentro motivado(a) para entrenar.'),
(5, 'Me llevo muy bien con otros miembros del equipo.'),
(6, ' Pocas veces mi tensión disminuye mi rendimiento. (Si estoy tenso rindo igual)'),
(7, ' Casi siempre ensayo mentalmente lo que debo hacer justo antes de comenzar mi\r\nparticipación en una competencia (o de empezar a jugar en un partido).'),
(8, 'En la mayoría de las competencias (o partidos) confío en que lo haré bien.'),
(9, 'Cuando hago mal algo durante la competencia, suelo perder la concentración.'),
(10, ' La confianza en mí mismo se debilita fácilmente.'),
(11, 'Me importa más mi propio rendimiento que el rendimiento del equipo (más lo que tengo\r\nque hacer yo que lo que tiene que hacer el equipo).'),
(12, ' Frecuentemente estoy “muerto(a) de miedo” en los momentos anteriores al comienzo de mi\r\nparticipación en una competencia (o en un partido).\r\n'),
(13, 'Cuando cometo un error me cuesta olvidarlo para concentrarme rápidamente en lo que\r\ntengo que hacer.'),
(14, ' Cualquier pequeña lesión o un mal entrenamiento puede debilitar la confianza en mí\r\nmismo(a).\r\n'),
(15, 'Establezco metas (u objetivos) que debo alcanzar y normalmente consigo cumplirlos.'),
(16, 'Algunas veces siento una intensa ansiedad mientras estoy participando en una prueba (o\r\njugando un partido).\r\n'),
(17, 'Durante mi actuación en una competencia (o en un partido) mi atención parece variar o\r\ncambiar una y otra vez entre lo que tengo que hacer y otras cosas.'),
(18, 'Me gusta trabajar con mis compañeros de equipo'),
(19, 'Tengo frecuentes dudas respecto a mis posibilidades de hacer bien las cosas en una\r\ncompetencia (o en un partido).'),
(20, 'Gasto mucha energía intentando estar tranquilo(a) antes de que comience una\r\ncompetencia (o un partido).'),
(21, 'Cuando comienzo haciéndolo mal, mi confianza baja rápidamente.'),
(22, 'Pienso que el espíritu de equipo es muy importante.\r\n'),
(23, 'Cuando practico mentalmente lo que tengo que hacer, me “veo” haciéndolo como si\r\nestuviera viéndome una pantalla o televisión.'),
(24, 'Generalmente, puedo seguir participando (jugando) con confianza, aunque se trate de\r\nuna de mis peores actuaciones.'),
(25, 'Cuando me preparo para participar en una prueba (o para jugar un partido), intento\r\nimaginarme, desde mi propia perspectiva, lo que veré, haré o notaré cuando la situación sea\r\nreal. (Me meto en la pantalla.)'),
(26, 'La confianza en mí mismo(a) es muy inestable.'),
(27, 'Cuando mi equipo pierde me siento mal, independientemente de mi rendimiento\r\nindividual.'),
(28, 'Cuando cometo un error en una competencia (o en un partido) me pongo muy ansioso.'),
(29, 'En este momento, lo más importante en mi vida es hacer bien mi deporte.'),
(30, 'Soy eficaz controlando mi tensión'),
(31, 'Mi deporte es toda mi vida.'),
(32, 'Tengo fé en mí mismo(a).'),
(33, 'Suelo encontrarme motivado(a) para superarme día con día.\r\n'),
(34, ' A menudo pierdo la concentración durante la competencia (o durante los partidos) como\r\nconsecuencia de las decisiones de los árbitros o jueces que considero equivocadas.\r\n'),
(35, 'Cuando cometo un error durante una competencia (o durante un partido) me preocupa lo\r\nque piensen otras personas como el entrenador, los compañeros de equipo o alguien que\r\nesté entre los espectadores'),
(36, 'El día anterior a una competencia (o un partido) habitualmente me encuentro muy\r\nnervioso(a) o preocupado(a).'),
(37, 'Suelo marcarme objetivos cuya consecución depende de mí al 100% en lugar de\r\nobjetivos que no dependen sólo de mí.'),
(38, 'Creo que la aportación que hacen cada uno de los miembros de un equipo es sumamente\r\nimportante para la obtención del éxito del equipo.\r\n'),
(39, 'No vale la pena dedicar tanto tiempo y esfuerzo al deporte, como yo se lo dedico.\r\n'),
(40, 'En las competencias (o en los partidos) suelo animarme con palabras, pensamientos o\r\nimágenes.'),
(41, 'A menudo pierdo la concentración durante una competencia (o un partido) por\r\npreocuparme o ponerme a pensar en el resultado final.'),
(42, 'Suelo aceptar bien las críticas e intento aprender de ellas.'),
(43, 'Me concentro con facilidad en aquello que es lo más importante en cada momento de una\r\ncompetencia (o de un partido).'),
(44, 'Me cuesta aceptar que se destaque más la labor de otros miembros del equipo que la\r\nmía.\r\n'),
(45, 'Cuando finaliza una competencia (o un partido) analizo mi rendimiento de forma objetiva y\r\nespecífica (es decir, considerando hechos reales y cada momento de la competencia o el\r\npartido por separado).'),
(46, ' A menudo pierdo la concentración en la competencia (o el partido) a consecuencia de la\r\nactuación, o de los comentarios poco deportivos de los adversarios.'),
(47, 'Me preocupan mucho las decisiones que el entrenador pueda tomar con respecto a mí\r\ndurante una competencia'),
(48, 'No ensayo mentalmente, como parte de mi plan de entrenamiento, situaciones que debo\r\ncorregir o mejorar.'),
(49, ' Durante los entrenamientos suelo estar muy concentrado(a) en lo que tengo que hacer.'),
(50, 'Suelo establecer objetivos prioritarios antes de cada sesión de entrenamiento y de cada\r\ncompetencia (o partido).'),
(51, 'Mi confianza en la competencia (o en el partido) depende en gran medida de los éxitos o\r\nfracasos en las competencias (o partidos) anteriores.'),
(52, ' Mi motivación depende mucho del reconocimiento que obtengo de los demás.'),
(53, 'Las instrucciones, comentarios y gestos del entrenador suelen interferir negativamente\r\nen mi concentración durante la competencia (o el partido).\r\n'),
(54, 'Suelo confiar en mí mismo(a) aún en los momentos más difíciles de una competencia (o de\r\nun partido).'),
(55, ' Estoy dispuesto(a) a cualquier esfuerzo por ser cada vez mejor.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userDet`
--

CREATE TABLE IF NOT EXISTS `userDet` (
  `mat` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `apPat` varchar(100) DEFAULT NULL,
  `apMat` varchar(100) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sport` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `userDet`
--

INSERT INTO `userDet` (`mat`, `name`, `apPat`, `apMat`, `sex`, `dob`, `sport`) VALUES
('A01365969', 'Diego', 'Hernández', 'Perez', 'M', '1987-12-15', 'Basketball Varonil'),
('aaa', 'Ildiko', 'Esparza', 'Emiroglú', 'F', '2006-08-17', 'Fútbol Rápido Femenil'),
('testUser', 'Juan', 'Lira', 'Catalán', 'M', '1997-02-14', 'Soccer Varonil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('A01365969', 'A01365969'),
('A01366101', 'A01366101'),
('aaa', 'aaa'),
('testUser', 'testPassword');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`mat`,`ques`),
  ADD KEY `ques` (`ques`);

--
-- Indices de la tabla `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`idQues`);

--
-- Indices de la tabla `userDet`
--
ALTER TABLE `userDet`
  ADD PRIMARY KEY (`mat`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `form`
--
ALTER TABLE `form`
  MODIFY `idQues` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ans`
--
ALTER TABLE `ans`
  ADD CONSTRAINT `ans_ibfk_1` FOREIGN KEY (`mat`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `ans_ibfk_2` FOREIGN KEY (`ques`) REFERENCES `form` (`idQues`);

--
-- Filtros para la tabla `userDet`
--
ALTER TABLE `userDet`
  ADD CONSTRAINT `userdet_ibfk_1` FOREIGN KEY (`mat`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
