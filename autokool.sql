-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 26 2024 г., 00:18
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autokool`
--
CREATE DATABASE IF NOT EXISTS `autokool` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autokool`;

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name_est` varchar(10) DEFAULT NULL,
  `category_price` varchar(10) DEFAULT NULL,
  `category_description_est` text DEFAULT NULL,
  `category_description_rus` text DEFAULT NULL,
  `category_name_rus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_name_est`, `category_price`, `category_description_est`, `category_description_rus`, `category_name_rus`) VALUES
(1, 'D', '900$', 'Vahemalt 21 eluaastat\r\nVajalik on B kategooria juhiloa (mitte esmane) olemasolu vähemalt 2 aastat\r\nKursuse kestus – 6 nädalat.Kursus koosneb:\r\n\r\nteooriaõpe 20 tundi (a`45 min)\r\n\r\nõppesõit 20 sõidutundi (a`45 min)\r\n\r\nEsitatavad dokumendid:\r\n\r\npass või ID kaart, juhiluba\r\nfoto (õpingukaardi vormistamiseks)\r\nmootorsõidukijuhi tervisetõend D kategooria mootorsõiduki juhtimist lubava märkega (tervisetõend ei tohi olla õppima asumisel vanem kui 6 kuud)\r\nleping (sõlmitakse kohapeal)\r\nTasumisvõimalised\r\n\r\nKogu kursuse maksumus korraga st ühe osamaksena\r\nOsadena tasumine st kuni kolme osamaksena\r\nEttevõtetel on võimalik koolituse eest tasuda arvega\r\nTasuda saad\r\n\r\nLäbi internetipanga\r\nSularahas meie kontoris\r\nMeie sõiduõpetajad arveldustega ei tegele.', 'Возраст не менее 21 года\r\nНаличие водительских прав с категорией B (не первичных) не менее 2-х лет\r\nКурс обучения – 6 недель.Курс состоит из:\r\n\r\nтеория - 20 академических часов\r\n\r\nучебное вождение - 20 академических часов\r\n\r\nНеобходимые документы:\r\n\r\nкопия ID-карты или паспорта, водительские права\r\nфотография (для оформления учебной карты)\r\nмедицинская справка на D категорию (для прохождения обучения медицинская справка не должна быть старше 6 месяцев)\r\nдоговор (заключается на месте)\r\nВозможности оплаты\r\n\r\nоплата полностью курса обучения, одной суммой\r\nоплата частями *возможно до 3-х частей* на весь период обучения\r\nу предприятия есть возможность оплаты за обучение на основании счета\r\nОплатить возможно:\r\n\r\nчерез интернет банк\r\nналичными в конторе автошколы', 'D'),
(2, 'B', '700$', 'Vahemalt 15,5 eluaastat\r\nAlaline elukoht Eestis\r\nKursuse kestus – min. 6 nädalat.Kursus koosneb:\r\nEsmaõpe:\r\n\r\nteooriaõpe 28 tundi (a`45 min)\r\n\r\nõppesõit 30 tundi (a`45 min)\r\n\r\nPimeda aja koolitus:\r\n\r\nteooriaõpe 1 tund (a`45 min)\r\nõppesõit 1 tundi (a`45 min)\r\nAlgastme libedaraja riskivältimise koolitus\r\n\r\nteooriaõpe 2 tundi (a`45 min)\r\nõppesõit 1 tundi (a`45 min)\r\nEsitatavad dokumendid:\r\n\r\npass või ID kaart\r\nfoto (õpingukaardi vormistamiseks)\r\nmootorsõidukijuhi tervisetõend B kategooria mootorsõiduki juhtimist lubava märkega (tervisetõend ei tohi olla õppima asumisel vanem kui 6 kuud)\r\nleping (sõlmitakse kohapeal)\r\nTasumisvõimalised\r\n\r\nKogu kursuse maksumus korraga st ühe osamaksena\r\nOsadena tasumine st kuni kolme osamaksena\r\nEttevõtetel on võimalik koolituse eest tasuda arvega\r\nTasuda saad\r\n\r\nLäbi internetipanga\r\nSularahas meie kontoris.', 'Легковые автомобили, небольшие грузовики (до 3,5 тонн)\r\n\r\nВозраст не менее 15,5 лет\r\nПостоянное место жительство в Эстонии\r\nКурс обучения - минимум 6 недель.Курс состоит:\r\nПервичное обучение:\r\n\r\nтеория 28 академический час\r\n\r\nучебное вождение 30 академических часов\r\n\r\nОбучение езде в темное время суток:\r\n\r\nтеория 1 академический час\r\nучебное вождение 1 академический час\r\nКурс начальной ступени вождения на скользкой дороге\r\n\r\nтеория 2 академических часа\r\nучебное вождение 1 академический час\r\nНеобходимые документы:\r\n\r\nкопия ID-карты или паспорта\r\nфотография (для оформления учебной карты)\r\nмедицинская справка на В категорию (для прохождения обучения медицинская справка не должна быть старше 6 месяцев)\r\nдоговор (заключается на месте)\r\nВозможности оплаты\r\n\r\nоплата полностью курса обучения, одной суммой\r\nоплата частями *возможно до 3-х частей* на весь период обучения\r\nу предприятия есть возможность оплаты за обучение на основании счета\r\nОплатить возможно:\r\n\r\nчерез интернет банк\r\nналичными в конторе автошколы.', 'B'),
(3, 'C', '700$', 'Vahemalt 21 eluaastat\r\nVajalik on B, C1- kategooria juhiloa (mitte esmane) olemasolu vähemalt 1 aasta\r\nKursuse kestus – kuni 4 nädalat.Kursus koosneb:\r\n\r\nteooriaõpe 20 tundi (a`45 min)\r\nõppesõit 10 sõidutundi (a`45 min)\r\nEsitatavad dokumendid:\r\n\r\npass või ID kaart, juhiluba\r\nfoto (õpingukaardi vormistamiseks)\r\nmootorsõidukijuhi tervisetõend C kategooria mootorsõiduki juhtimist lubava märkega (tervisetõend ei tohi olla õppima asumisel vanem kui 6 kuud)\r\nleping (sõlmitakse kohapeal)\r\nTasumisvõimalised\r\n\r\nKogu kursuse maksumus korraga st ühe osamaksena\r\nOsadena tasumine st kuni kolme osamaksena\r\nEttevõtetel on võimalik koolituse eest tasuda arvega\r\nTasuda saad\r\n\r\nLäbi internetipanga\r\nSularahas meie kontoris\r\nMeie sõiduõpetajad arveldustega ei tegele.', 'Грузовые автомобили (от 3,5 тонн)\r\n\r\nВозраст не менее 21 года\r\nНаличие водительских прав (не первичных) не менее 1 года)\r\nКурс обучения – до 4 недель.Курс состоит из:\r\n\r\nтеория - 20 академических часов\r\nучебное вождение - 10 академических часов\r\nНеобходимые документы:\r\n\r\nкопия ID-карты или паспорта, водительские права\r\nфотография (для оформления учебной карты)\r\nмедицинская справка на С категорию (для прохождения обучения медицинская справка не должна быть старше 6 месяцев)\r\nдоговор (заключается на месте)\r\nВозможности оплаты\r\n\r\nоплата полностью курса обучения, одной суммой\r\nоплата частями *возможно до 3-х частей* на весь период обучения\r\nу предприятия есть возможность оплаты за обучение на основании счета\r\nОплатить возможно:\r\n\r\nчерез интернет банк\r\nналичными в конторе автошколы.', 'C');

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(55) DEFAULT NULL,
  `staf_license` mediumblob DEFAULT NULL,
  `staff_foto` mediumblob DEFAULT NULL,
  `staff_car` mediumblob DEFAULT NULL,
  `staff_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staf_license`, `staff_foto`, `staff_car`, `staff_category`) VALUES
(1, 'Alex', 0x5b76616c75652d335d, 0x5b76616c75652d345d, 0x5b76616c75652d355d, 1),
(2, 'John', 0x5b76616c75652d335d, 0x5b76616c75652d345d, 0x5b76616c75652d355d, 2),
(3, 'George', 0x5b76616c75652d335d, 0x5b76616c75652d345d, 0x5b76616c75652d355d, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `picture` blob DEFAULT NULL,
  `job` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `registration_date` date NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `picture`, `job`, `email`, `telefon`, `login`, `password`, `status`, `registration_date`, `pass`, `Name`, `LastName`) VALUES
(1, 'Admin', NULL, 'Portal admin', 'admin@newsportal.ee', '+37251456', 'admin', '$2y$12$pxB2ofiiNZkxObmbBvBOyegwCjHCVFYhapjiSsdYXUaJ9Z1IH6pQW', 'admin', '2019-11-05', '123456', '', ''),
(2, 'Anonim', NULL, 'Portal anonim', 'admin@newsportal.ee', '+37251456', 'anonim', '$2y$10$dYK1sCogKL/zZBef.V/gBeynL5mdt0QxZlwvEUBkS0jkdXYRMPHRa', 'user', '2019-11-05', '111111', '', ''),
(3, 'Artjom', NULL, '', 'artjom.plotnikov@ivkhk.ee', '', '', '$2y$10$gvXYv78vvROxvev7R5OlP.bX4R8WPeIySUD5hBh6ESEcSUrhCC8di', 'user', '2024-04-15', '12345678', '', ''),
(4, 'artjomplotnikov2017@gmail.com', NULL, '', 'saveDBcountries@gmail.com', '', '', '$2y$10$MSI5EyhjTdeeeYRqIpm1DuIs7rmIrLuFqcbTZPnTR.FKsRuLukdia', 'user', '2024-04-15', 'saveDBcountries', '', ''),
(5, 'Artjom Plotnikov', NULL, '', 'artjomplotnikov2017@gmail.com', '', '', '$2y$10$mZkLCr7jKyRAV.QvQvH9Xug8sr0zP2.kHui4pqrNe6CwxvpRLDZru', 'user', '2024-04-16', '12345678', '', ''),
(6, 'saveDBcountries', NULL, '', 'artjomplotnikov2017@gmail.com', '', '', '$2y$10$CgnPTXWkYm47bFG.Hbu9beisA2e3ytl2CUi9W.S3Dnyh.BGVTdBFO', 'user', '2024-04-21', '123456', '', ''),
(7, 'saveDBcountries', NULL, '', '123test@test.ee', '', '', '$2y$10$.dv4HAoiUBGCERjhYI4KVewhCb.J8EuY.koUmNaa5TcByYFa2vFOu', 'user', '2024-04-21', '123456', '', ''),
(8, '123test@test.ee', NULL, '', 'artjom.plotnikov@ivkhk.ee', '', '', '$2y$10$cgMwhS98MX/6fkoZKiZczuYjwEtRSKrGWtk.Z.TixWuLNwTdY4Zam', 'user', '2024-04-21', '123456', '', ''),
(9, 'test@test.ivkhk.ee', NULL, '', 'test@test.ivkhk.ee', '', '', '$2y$10$kNZmRNkf0a3dr.TylMCBNuKIXUYcGqP/IkdcSpIbg.WmqYQrgjMD6', 'user', '2024-04-25', '123456', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_category` (`staff_category`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`staff_category`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
