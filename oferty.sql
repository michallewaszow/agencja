

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `offers` (
`id` int(11) NOT NULL,
  `productionYear` int COLLATE utf8_polish_ci NOT NULL,
  `carBrand` text COLLATE utf8_polish_ci NOT NULL,
  `carModel` text COLLATE utf8_polish_ci NOT NULL,
  `carType` text COLLATE utf8_polish_ci NOT NULL,
  `fuelType` text COLLATE utf8_polish_ci NOT NULL,
  `engineSize` text COLLATE utf8_polish_ci NOT NULL,
  `doorsQuantity` int COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


ALTER TABLE `offers`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `offers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;