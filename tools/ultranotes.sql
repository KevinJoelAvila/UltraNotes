SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `ultranotes`
--

CREATE DATABASE IF NOT EXISTS `ultranotes` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

CREATE USER 'kevin'@'localhost' IDENTIFIED by 'ultranotes';
CREATE USER 'ivan'@'localhost' IDENTIFIED by 'ultranotes';
GRANT USAGE ON *.* TO 'kevin'@'localhost';
GRANT USAGE ON *.* TO 'ivan'@'localhost';

GRANT ALL PRIVILEGES ON `ultranotes`.* TO 'kevin'@'localhost' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON `ultranotes`.* TO 'ivan'@'localhost' WITH GRANT OPTION;

USE `ultranotes`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `token` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `aleatorio` BEFORE INSERT ON `users` FOR EACH ROW BEGIN

    SET @string := 'abcdefghijklmnopqrstuvwxyz0123456789';
    SET @i := 1;
    SET @hash := '';

    WHILE (@i <= 32) DO
        SET @hash := CONCAT(@hash, SUBSTRING(@string, FLOOR(RAND() * 36 + 1), 1));
        SET @i := @i + 1;
    END WHILE;

    SET NEW.token := @hash;

END
$$
DELIMITER ;

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
