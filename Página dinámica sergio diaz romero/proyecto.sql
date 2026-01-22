-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2026 a las 06:20:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `pelicula` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `id_usuario`, `pelicula`, `direccion`, `fecha`) VALUES
(30, 1, 'Titanic', 'popopo', '2026-01-19 03:34:56'),
(31, 1, 'Dirty Dancing', 'popopo', '2026-01-19 03:34:56'),
(32, 1, 'El imperio de los sentidos', 'popopo', '2026-01-19 03:34:56'),
(33, 1, 'Dirty Dancing', 'KOKO', '2026-01-19 03:41:22'),
(34, 1, 'Titanic', 'KOKO', '2026-01-19 03:41:22'),
(35, 1, 'La gran evasión', 'KOKO', '2026-01-19 03:41:22'),
(36, 1, 'El último tango en París', 'KOKO', '2026-01-19 03:41:22'),
(37, 1, 'Lolita', 'ejemplo_final', '2026-01-19 03:53:55'),
(38, 1, 'El último tango en París', 'ejemplo_final', '2026-01-19 03:53:55'),
(39, 1, 'El rey león', 'ejemplo_final', '2026-01-19 03:53:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `genero`, `imagen`) VALUES
(1, 'El Padrino', 'Drama', 'https://m.media-amazon.com/images/I/516s6OP7sVL._AC_UF1000,1000_QL80_.jpg'),
(2, 'Matrix', 'Ciencia ficción', 'https://static.posters.cz/image/hp/69061.jpg'),
(3, 'Regreso al Futuro', 'Aventura', 'https://www.normaeditorial.com/upload/media/albumes/0001/05/thumb_4859_albumes_big.jpeg'),
(9, 'Happiness', 'Comedia/Drama', 'https://m.media-amazon.com/images/I/91skxMqFU6L._AC_UF894,1000_QL80_.jpg'),
(12, 'El rey león', 'Infantil/Musical', 'https://disney.images.edge.bamgrid.com/ripcut-delivery/v2/variant/disney/3969ca4d-9dbc-474c-81b4-97b0ac493022/compose?aspectRatio=1.78&format=webp&width=1200'),
(15, 'Monte Carlo', 'Comedia Romántica', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.WmdfbrRlAPokU9s0Aa2HjwHaEK%3Fpid%3DApi&f=1&ipt=69b96c1178ee15aa121218e35bf6483307d322732d6b489272d4fd592350aa68&ipo=images'),
(16, 'Operación Camarón', 'Comedia', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.JuX7bKKfrttAyL0dx1QQmgHaEK%3Fpid%3DApi&f=1&ipt=f85b9f9d6c164667060751268f5d606c570027139d06fdc4b9b2bb697e47cb19&ipo=images'),
(17, 'Cadena Perpetua', 'Drama', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.2LYI4sJ_aoFzlm_xtWPYdgHaJ6%3Fpid%3DApi&f=1&ipt=4b44d0610de4b76b8e84f35960c86a9177c84e645314c9820b9d5acfcf133838&ipo=images'),
(18, 'Interstella 555', 'Musical', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.B0lxbXo9Fb8v1xnu4ZQzYwHaK-%3Fpid%3DApi&f=1&ipt=fe581bb8fb8b45a120f619690b93adfc8b3128fc6de31a165348df23c9d20b24&ipo=images'),
(19, 'Lolita', 'Drama/Horror', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimg2.wikia.nocookie.net%2F__cb20090908162422%2Fdoblaje%2Fes%2Fimages%2Fe%2Feb%2FLolita.jpg&f=1&nofb=1&ipt=2e562b4cd70e8f3dfa00bc8204933aea88b687bd73886012d4ba03d1b008c9b7'),
(20, 'El último tango en París', 'Drama', 'https://pics.filmaffinity.com/ultimo_tango_a_parigi-628700838-mmed.jpg'),
(21, 'El imperio de los sentidos', 'Romance/Erótico', 'https://pics.filmaffinity.com/ai_no_korida_l_empire_des_sens-159535711-mmed.jpg'),
(22, 'Torrente 2: Misión en Marbella', 'Comedia', 'https://pics.filmaffinity.com/torrente_2_mision_en_marbella-411875993-mmed.jpg'),
(23, 'Cuando acecha la maldad', 'Horror', 'https://pics.filmaffinity.com/cuando_acecha_la_maldad-702811959-mmed.jpg'),
(24, 'Una película serbia', 'Drama/Horror', 'https://pics.filmaffinity.com/srpski_film_a_serbian_film-101947620-mmed.jpg'),
(25, 'Los puentes de Madison', 'Romántica', 'https://pics.filmaffinity.com/the_bridges_of_madison_county-998728421-mmed.jpg'),
(26, 'La gran evasión', 'Drama', 'https://pics.filmaffinity.com/the_great_escape-691080602-mmed.jpg'),
(27, 'Titanic', 'Drama/Romántica', 'https://pics.filmaffinity.com/titanic-321994924-mmed.jpg'),
(28, 'Dirty Dancing', 'Romance', 'https://pics.filmaffinity.com/dirty_dancing-437616472-mmed.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

CREATE TABLE `tabla1` (
  `DNI` varchar(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `pass`, `rol`) VALUES
(1, 'admin1234', 'admin1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'Mensaje', 'sergiodiro2000@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(6, 'unodos', 'ab@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(7, 'ManolitoGafotas', '43212@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(8, 'Mensajessss', '890@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(9, 'Mister', 'misterjagger@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(10, '1234', '22@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(11, 'Cell', 'cell@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
