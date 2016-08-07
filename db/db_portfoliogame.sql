-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2016 a las 08:15:55
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_portfoliogame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_game`
--

CREATE TABLE `tb_game` (
  `intidgame` int(11) NOT NULL,
  `nvchnombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nvchdescripcion` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `nvchlinkspot` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nvchbanner` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nvchlinkdownandr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nvchlinkdownpc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nvchlinkdownios` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nvchfecha` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_game`
--

INSERT INTO `tb_game` (`intidgame`, `nvchnombre`, `nvchdescripcion`, `nvchlinkspot`, `nvchbanner`, `nvchlinkdownandr`, `nvchlinkdownpc`, `nvchlinkdownios`, `nvchfecha`) VALUES
(2, 'ELEMENT''S GUARDIAN', 'Videojuego educativo, inspirado en juegos como dota, starcraft, plantas contra zombies. desarrollado bajo la plataforma Unity, disponibles para dispositivos con sistema operativo Windows.', 'https://www.youtube.com/watch?v=-zcRT3BTOTU', 'banner php', 'https://play.google.com/store/music/album/Pixies_Um_Chagga_Lagga?id=B4odszn56djymamavppnpcdq4ba', 'https://play.google.com/store/music/album/Pixies_Um_Chagga_Lagga?id=B4odszn56djymamavppnpcdq4badifa4', 'https://play.google.com/store/music/album/Pixies_Um_Chagga_Lagga?id=B4odszn56djymamavppnpcdq4ba', '12 Julio, 2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_juego_persona`
--

CREATE TABLE `tb_juego_persona` (
  `intidjuego_persona` int(11) NOT NULL,
  `intidpersona` int(11) NOT NULL,
  `intidgame` int(11) NOT NULL,
  `nvchfuncion` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_juego_persona`
--

INSERT INTO `tb_juego_persona` (`intidjuego_persona`, `intidpersona`, `intidgame`, `nvchfuncion`) VALUES
(1, 1, 2, 'Programador C#'),
(2, 2, 2, 'Programador'),
(7, 9, 2, 'Marketing'),
(8, 9, 2, 'DiseÃ±adora de video pitch elemen guardians'),
(9, 1, 2, 'level design'),
(10, 4, 2, 'artista de element guardian'),
(12, 1, 2, 'programador'),
(14, 4, 2, 'level designer'),
(16, 4, 2, 'desarrollador de guiÃ³n'),
(17, 4, 2, 'diseÃ±ador de mecÃ¡nica de juego '),
(19, 5, 2, 'assets designer'),
(20, 2, 2, 'level designer'),
(21, 9, 2, 'SEO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_persona`
--

CREATE TABLE `tb_persona` (
  `intidpersona` int(11) NOT NULL,
  `nvchnombres` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nvchapellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nvchdireccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nvchcorreo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nvchfcbk` varchar(100) NOT NULL,
  `nvchtwttr` varchar(100) NOT NULL,
  `nvchphone` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_persona`
--

INSERT INTO `tb_persona` (`intidpersona`, `nvchnombres`, `nvchapellido`, `nvchdireccion`, `nvchcorreo`, `nvchfcbk`, `nvchtwttr`, `nvchphone`) VALUES
(1, 'Diego alejandro', 'FernÃ¡ndez Rivera', '------', 'degitalpet@gmail.com', 'https://www.facebook.com/daigo.frd?fref=ts', '', '------'),
(2, 'Sebastian Mauro', 'Espinoza Zamata', 'pje 28 de Juliio Â· 698, El Tambo, Huancayo', 'sdaftpunk@hotmail.com', 'https://www.facebook.com/3666841994.0101dzflynn12?fref=ts', 'https://twitter.com/', '943804240'),
(4, 'joseph vladimir', 'marmolejo cotrina', 'calle san pedro #265, Huancayo - Huancayo', 'u2008111427@continental.edu.pe', 'www.facebook.com', 'https://twitter.com/', '945709454'),
(5, 'junior Bladimir', 'yauricasa apumayta', 'Mz A LT. 8, ampliacion 5ta etapa, Canto Grande SJL', 'junioryauricasa@gmail.com', 'https://www.facebook.com/profile.php?id=100010425823533', 'https://twitter.com/', '934662170'),
(9, 'sthefania galia', 'Camayo bazurto', '------', 'galia@gmail.com', 'https://www.facebook.com/sgaliacb?fref=ts', 'https://twitter.com/', '12121212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_skillme`
--

CREATE TABLE `tb_skillme` (
  `intidskillme` int(11) NOT NULL,
  `intidpersona` int(11) NOT NULL,
  `nvchskillname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nvchporcentaje` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_skillme`
--

INSERT INTO `tb_skillme` (`intidskillme`, `intidpersona`, `nvchskillname`, `nvchporcentaje`) VALUES
(8, 1, 'Programador C# ', '90'),
(9, 2, 'Programador C# ', '70'),
(10, 9, 'Assets Designer', '90'),
(12, 5, 'Web designer', '57'),
(13, 4, 'Game designer', '78'),
(14, 1, 'Unity', '80'),
(15, 4, 'Unity', '50'),
(16, 2, 'Unity', '70'),
(17, 9, 'Photoshop', '70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_game`
--
ALTER TABLE `tb_game`
  ADD PRIMARY KEY (`intidgame`);

--
-- Indices de la tabla `tb_juego_persona`
--
ALTER TABLE `tb_juego_persona`
  ADD PRIMARY KEY (`intidjuego_persona`);

--
-- Indices de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  ADD PRIMARY KEY (`intidpersona`);

--
-- Indices de la tabla `tb_skillme`
--
ALTER TABLE `tb_skillme`
  ADD PRIMARY KEY (`intidskillme`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_game`
--
ALTER TABLE `tb_game`
  MODIFY `intidgame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_juego_persona`
--
ALTER TABLE `tb_juego_persona`
  MODIFY `intidjuego_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `tb_persona`
--
ALTER TABLE `tb_persona`
  MODIFY `intidpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tb_skillme`
--
ALTER TABLE `tb_skillme`
  MODIFY `intidskillme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
