-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2021 a las 19:36:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicafinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuderias`
--

CREATE TABLE `escuderias` (
  `YEAR` int(4) NOT NULL,
  `ESCUDERIA` varchar(40) DEFAULT NULL,
  `VICTORIAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `escuderias`
--

INSERT INTO `escuderias` (`YEAR`, `ESCUDERIA`, `VICTORIAS`) VALUES
(1958, 'Vanwall', 6),
(1959, 'Cooper', 5),
(1960, 'Cooper', 6),
(1961, 'Ferrari', 5),
(1962, 'BRM', 4),
(1963, 'Lotus', 7),
(1964, 'Ferrari', 3),
(1965, 'Lotus', 6),
(1966, 'Brabham', 4),
(1967, 'Brabham', 4),
(1968, 'Lotus', 5),
(1969, 'Matra', 6),
(1970, 'Lotus', 6),
(1971, 'Tyrrell', 7),
(1972, 'Lotus', 5),
(1973, 'Lotus', 7),
(1974, 'McLaren', 4),
(1975, 'Ferrari', 6),
(1976, 'Ferrari', 6),
(1977, 'Ferrari', 4),
(1978, 'Lotus', 8),
(1979, 'Ferrari', 6),
(1980, 'Williams', 6),
(1981, 'Williams', 4),
(1982, 'Ferrari', 3),
(1983, 'Ferrari', 4),
(1984, 'McLaren', 12),
(1985, 'McLaren', 6),
(1986, 'Williams', 9),
(1987, 'Williams', 9),
(1988, 'McLaren', 15),
(1989, 'McLaren', 10),
(1990, 'McLaren', 6),
(1991, 'McLaren', 8),
(1992, 'Williams', 10),
(1993, 'Williams', 10),
(1994, 'Williams', 7),
(1995, 'Benetton', 11),
(1996, 'Williams', 12),
(1997, 'Williams', 8),
(1998, 'McLaren', 9),
(1999, 'Ferrari', 6),
(2000, 'Ferrari', 10),
(2001, 'Ferrari', 9),
(2002, 'Ferrari', 15),
(2003, 'Ferrari', 8),
(2004, 'Ferrari', 15),
(2005, 'Renault', 8),
(2006, 'Renault', 8),
(2007, 'Ferrari', 9),
(2008, 'Ferrari', 8),
(2009, 'Brawn', 8),
(2010, 'Red Bull', 9),
(2011, 'Red Bull', 12),
(2012, 'Red Bull', 7),
(2013, 'Red Bull', 13),
(2014, 'Mercedes', 16),
(2015, 'Mercedes', 16),
(2016, 'Mercedes', 19),
(2017, 'Mercedes', 12),
(2018, 'Mercedes', 11),
(2019, 'Mercedes', 15),
(2020, 'Mercedes', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilotos`
--

CREATE TABLE `pilotos` (
  `YEAR` int(4) NOT NULL,
  `NOMBRE` varchar(40) DEFAULT NULL,
  `ESCUDERIA` varchar(40) DEFAULT NULL,
  `VICTORIAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pilotos`
--

INSERT INTO `pilotos` (`YEAR`, `NOMBRE`, `ESCUDERIA`, `VICTORIAS`) VALUES
(1950, 'Giuseppe Farina', 'Alfa Romeo SpA', 3),
(1951, 'Juan Manuel Fangio', 'Alfa Romeo SpA', 3),
(1952, 'Alberto Ascari', 'Scuderia Ferrari', 6),
(1953, 'Alberto Ascari', 'Scuderia Ferrari', 5),
(1954, 'Juan Manuel Fangio', 'Daimler Benz AG', 6),
(1955, 'Juan Manuel Fangio', 'Daimler Benz AG', 4),
(1956, 'Juan Manuel Fangio', 'Scuderia Ferrari', 3),
(1957, 'Juan Manuel Fangio', 'Officine Alfieri Maserati', 4),
(1958, 'Mike Hawthorn', 'Scuderia Ferrari', 1),
(1959, 'Jack Brabham', 'Cooper Car Company', 2),
(1960, 'Jack Brabham', 'Cooper Car Company', 5),
(1961, 'Phil Hill', 'Scuderia Ferrari', 2),
(1962, 'Graham Hill', 'Owen Racing Organisation', 4),
(1963, 'Jim Clark', 'Team Lotus', 7),
(1964, 'John Surteest', 'Scuderia Ferrari', 6),
(1965, 'Jim Clark', 'Team Lotus', 6),
(1966, 'Jack Brabham', 'Brabham Racing Organisation', 4),
(1967, 'Denny Hulme', 'Brabham Racing Organisation', 2),
(1968, 'Graham Hill', 'Gold Leaf Team Lotus', 3),
(1969, 'Jackie Stewart', 'Matra International', 6),
(1970, 'Jochen Rindt', 'Gold Leaf Team Lotus', 5),
(1971, 'Jackie Stewart', 'Elf Team Tyrrell', 6),
(1972, 'Emerson Fittipaldi', 'John Player Team Lotus', 5),
(1973, 'Jackie Stewart', 'Elf Team Tyrrell', 5),
(1974, 'Emerson Fittipaldi', 'Marlboro Team Texaco McLaren', 3),
(1975, 'Niki Lauda', 'Scuderia Ferrari', 5),
(1976, 'James Hunt', 'Marlboro McLaren F1 Team', 6),
(1977, 'Niki Lauda', 'Scuderia Ferrari', 3),
(1978, 'Mario Andretti', 'John Player Team Lotus', 6),
(1979, 'Jody Scheckter', 'Scuderia Ferrari', 3),
(1980, 'Alan Jones', 'Albilad-Williams Racing Team', 5),
(1981, 'Nelson Piquet', 'Parmalat Racing Team Brabham', 3),
(1982, 'Keke Rosberg', 'TAG Williams Team', 1),
(1983, 'Nelson Piquet', 'Fila Sport Brabham', 3),
(1984, 'Niki Lauda', 'Marlboro McLaren International', 5),
(1985, 'Alain Prost', 'Marlboro McLaren International', 5),
(1986, 'Alain Prost', 'Marlboro McLaren International', 4),
(1987, 'Nelson Piquet', 'Canon Williams Team', 3),
(1988, 'Ayrton Senna', 'Honda Marlboro McLaren', 8),
(1989, 'Alain Prost', 'Honda Marlboro McLaren', 4),
(1990, 'Ayrton Senna', 'Honda Marlboro McLaren', 6),
(1991, 'Ayrton Senna', 'Honda Marlboro McLaren', 7),
(1992, 'Nigel Mansell', 'Canon Williams Renault', 9),
(1993, 'Alain Prost', 'Canon Williams Renault', 7),
(1994, 'Michael Schumacher', 'Mild Seven Benetton Ford', 8),
(1995, 'Michael Schumacher', 'Mild Seven Benetton Ford', 9),
(1996, 'Damon Hill', 'Rothmans Williams Renault', 8),
(1997, 'Jacques Villeneuve', 'Rothmans Williams Renault', 7),
(1998, 'Mika Häkkinen', 'West McLaren Mercedes', 8),
(1999, 'Mika Häkkinen', 'West McLaren Mercedes', 5),
(2000, 'Michael Schumacher', 'Scuderia Ferrari', 9),
(2001, 'Michael Schumacher', 'Scuderia Ferrari', 9),
(2002, 'Michael Schumacher', 'Scuderia Ferrari', 11),
(2003, 'Michael Schumacher', 'Scuderia Ferrari', 6),
(2004, 'Michael Schumacher', 'Scuderia Ferrari', 13),
(2005, 'Fernando Alonso', 'Mild Seven Renault F1 Team', 7),
(2006, 'Fernando Alonso', 'Mild Seven Renault F1 Team', 7),
(2007, 'Kimi Räikkönen', 'Scuderia Ferrari', 6),
(2008, 'Lewis Hamilton', 'Vodafone McLaren Mercedes', 5),
(2009, 'Jenson Button', 'Brawn GP F1 Team', 6),
(2010, 'Sebastian Vettel', 'Red Bull Racing', 5),
(2011, 'Sebastian Vettel', 'Red Bull Racing', 11),
(2012, 'Sebastian Vettel', 'Red Bull Racing', 5),
(2013, 'Sebastian Vettel', 'Infiniti Red Bull Racing', 13),
(2014, 'Lewis Hamilton', 'Mercedes AMG Petronas F1 Team', 11),
(2015, 'Lewis Hamilton', 'Mercedes AMG Petronas F1 Team', 10),
(2016, 'Nico Rosberg', 'Mercedes AMG Petronas F1 Team', 9),
(2017, 'Lewis Hamilton', 'Mercedes AMG Petronas Motorsport', 9),
(2018, 'Lewis Hamilton', 'Mercedes AMG Petronas Motorsport', 11),
(2019, 'Lewis Hamilton', 'Mercedes AMG Petronas Motorsport', 11),
(2020, 'Lewis Hamilton', 'Mercedes AMG Petronas Motorsport', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `NOMBRE` varchar(40) DEFAULT NULL,
  `CORREO` varchar(40) NOT NULL,
  `PASSWD` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`NOMBRE`, `CORREO`, `PASSWD`) VALUES
('David morillas', 'david.morillas@outlook.com', '0d02ad8a47fcff976a3d0b4a84e2f678'),
('Alejandro', 'soytonto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escuderias`
--
ALTER TABLE `escuderias`
  ADD PRIMARY KEY (`YEAR`);

--
-- Indices de la tabla `pilotos`
--
ALTER TABLE `pilotos`
  ADD PRIMARY KEY (`YEAR`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`CORREO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
