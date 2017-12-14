-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2017 г., 02:17
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `siteDataBase`
--
CREATE DATABASE IF NOT EXISTS `siteDataBase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `siteDataBase`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `visible` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`Id`, `name`, `visible`, `created`, `updated`, `description`, `image`, `parent_id`, `url`) VALUES
(1, 'Ноутбуки и компьютеры', 1, '2017-11-21', '2017-11-28', '', '015617f0.jpg', 0, 'noutbuki-i-kompyutery/'),
(2, 'Смартфоны', 1, '2017-11-21', '2017-11-21', '', '1525625.jpg', 0, 'smartfony/'),
(3, 'Бытовая техника', 1, '2017-11-21', '2017-11-21', '', '', 0, 'bytovaya-tehnika/'),
(4, 'Товары для дома', 1, '2017-11-21', '2017-11-21', '', '256603.jpg', 0, 'tovary-dlya-doma/'),
(5, 'Мебель', 1, '2017-11-21', '2017-11-21', '', '', 4, 'mebel/'),
(6, 'Сантехника', 1, '2017-11-21', '2017-11-21', '', '', 4, 'santehnika/'),
(7, 'Ванны', 1, '2017-11-21', '2017-11-21', '', '', 6, 'vanny/'),
(8, 'Мойки', 1, '2017-11-21', '2017-11-21', '', '', 6, 'mojki/'),
(9, 'Посуда', 1, '2017-11-21', '2017-11-21', '', '', 4, 'posuda/'),
(10, 'Ноутбуки', 1, '2017-11-21', '2017-11-21', '', '', 1, 'noutbuki/'),
(11, 'Планшеты', 1, '2017-11-21', '2017-11-21', '', '', 0, 'planshety/'),
(12, 'Пылесос', 1, '2017-11-21', '2017-11-30', '<br>', '', 3, '15-pylesos1/'),
(13, 'Samsung', 1, '2017-11-21', '2017-11-21', '', '', 2, 'samsung/'),
(14, 'Apple', 0, '2017-11-21', '2017-11-21', '', '', 2, 'apple/');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `product_id`, `filename`) VALUES
(1, 4, '76606213_images_2035669020.jpg'),
(2, 4, '86606213_images_2035668948.jpg'),
(3, 4, '96606213_images_2035668846.jpg'),
(4, 14, '1176606213_images_2035669020.jpg'),
(5, 14, '1286606213_images_2035668948.jpg'),
(6, 14, '1396606213_images_2035668846.jpg'),
(15, 15, '3110017207_images_1660179819.jpg'),
(16, 15, '3210017207_images_1660178874.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_street` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_house_number` varchar(255) NOT NULL,
  `user_apartment_number` varchar(255) NOT NULL,
  `user_comment` varchar(255) NOT NULL,
  `date_create` date NOT NULL,
  `total_price` float NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`Id`, `user_id`, `user_street`, `user_city`, `user_house_number`, `user_apartment_number`, `user_comment`, `date_create`, `total_price`, `status`) VALUES
(36, 19, 'Кривороская', 'Днепр', '23', '16', 'Быстрее...', '2017-12-13', 2700, 0),
(37, 19, 'Рабочая', 'Днепр', '178', '15', 'и учебные палочки', '2017-12-13', 29000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `visible` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `textpage` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`Id`, `title`, `description`, `url`, `visible`, `created`, `updated`, `textpage`) VALUES
(1, 'Главная', 'самая главная страница', '/', 1, '2017-11-13 16:18:24', '2017-11-29 15:43:32', ''),
(2, 'Доставка', '', 'delivery/', 1, '2017-11-13 16:18:24', '2017-11-14 17:29:56', 'Доставка в отделения «Нова пошта»\r\n\r\nС помощью доставки «Нова пошта», Вы можете получить товар даже в самых отдаленных уголках Украины.\r\nВ среднем, доставка занимает 1-3 дня, во время заказа наши менеджеры согласуют с Вами дату доставки перед отправкой товара.\r\nОбращаем Ваше внимание на то, что стоимость доставки одной единицы товара может варьироваться в зависимости от веса и габаритов (от 35 до 250 грн.).\r\nСтоимость доставки интересующего Вас товара, Вы можете уточнить у нашего менеджера при оформлении заказа или на странице товара, предварительно указав город, в который необходима доставка.\r\nПодъем габаритных грузов от 30 до 100 кг оплачивается отдельно. Стоимость подъема: 20–60 грн/этаж в зависимости от размеров, веса товара и сложности подъема.'),
(3, 'Оплата', '', 'payment/', 1, '2017-11-13 16:18:24', '2017-11-14 17:33:28', '<h3> Наличными</h3>\r\n\r\n<p>Оплата наличными при получении товара возможна во всех магазинах сети на территории Украины. Оплата производится исключительно в национальной валюте.В подтверждение оплаты мы выдаем Вам товарный чек.</p>\r\n\r\n<h3> Оплата картой на сайте</h3>\r\n\r\n<p>Вы можете оплатить заказ онлайн банковской картой Visa или MasterCard. Оплата с помощью платежных карт осуществляется следующим способом: во время оформления заказа на сайте, Вам будет предложено сделать выбор способа оплаты. В графе \"Оплата\" вам нужно выбрать «Оплата картой на сайте».</p>\r\n\r\n<p>После этого Вы будете переадресованы на страницу системы безопасных платежей банка, где Вам необходимо будет подтвердить оплату.</p>\r\n\r\n<p>Пожалуйста, обратите внимание, получить товар, оплаченный платежной картой, может только тот клиент, чьи ФИО были указаны на сайте во время оформления заявки, поэтому при получении заказа обязательно нужно иметь при себе паспорт.</p>'),
(4, 'О нас', '', 'aboutus/', 1, '2017-11-13 16:18:24', '0000-00-00 00:00:00', 'В четверг четвертого числа в четыре с четвертью часа\r\nлигурийский регулировщик регулировал в Лигурии,\r\nно тридцать три корабля лавировали, лавировали, да так и не вылавировали,\r\nа потом протокол про протокол протоколом запротоколировал,\r\nкак интервьюером интервьюируемый лигурийский регулировщик речисто,\r\nда не чисто рапортовал, да не дорапортовал дорапортовывал\r\nда так зарапортовался про размокропогодившуюся погоду\r\nчто, дабы инцидент не стал претендентом на судебный прецедент,\r\nлигурийский регулировщик\r\nакклиматизировался в неконституционном Константинополе,\r\nгде хохлатые хохотушки хохотом хохотали и кричали турке,\r\nкоторый начерно обкурен трубкой: не кури, турка, трубку,\r\nкупи лучше кипу пик, лучше пик кипу купи,\r\nа то придет бомбардир из Бранденбурга — бомбами забомбардирует за то,\r\nчто некто чернорылый у него полдвора рылом изрыл, вырыл и подрыл;\r\nно на самом деле турка не был в деле,\r\nда и Клара к крале в то время кралась к ларю,\r\nпока Карл у Клары кораллы крал, за что Клара у Карла украла кларнет,\r\nа потом на дворе деготниковой вдовы Варвары\r\nдва этих вора дрова воровали;\r\nно грех — не смех — не уложить в орех: о Кларе с Карлом\r\nво мраке все раки шумели в драке, — вот и не до бомбардира ворам было,\r\nи не до деготниковой вдовы, и не до деготниковых детей;\r\nзато рассердившаяся вдова убрала в сарай дрова: раз дрова, два дрова,\r\nтри дрова — не вместились все дрова,\r\nи два дровосека, два дровокола-дроворуба\r\nдля расчувствовавшейся Варвары\r\nвыдворили дрова вширь двора обратно на дровяной двор,\r\nгде цапля чахла, цапля сохла, цапля сдохла;\r\nцыпленок же цапли цепко цеплялся за цепь;\r\nмолодец против овец, а против молодца сам овца,\r\nкоторой носит Сеня сено в сани,\r\nпотом везет Сеньку Соньку с Санькой на санках:\r\nсанки скок, Сеньку — в бок, Соньку — в лоб, все — в сугроб,\r\nа Сашка только шапкой шишки сшиб,\r\nзатем по шоссе Саша пошел, Саша на шоссе саше нашел;\r\nСонька же — Сашкина подружка шла по шоссе и сосала сушку,\r\nда притом у Соньки-вертушки во рту еще и три ватрушки —\r\nаккурат в медовик, но ей не до медовика —\r\nСонька и с ватрушками во рту\r\nпономаря перепономарит, — перевыпономарит:\r\nжужжит, как жужелица, жужжит, да кружится:\r\nбыла у Фрола — Фролу на Лавра наврала,\r\nпойдет к Лавру на Фрола Лавру наврет,\r\nчто — вахмистр с вахмистршей, ротмистр с ротмистршей,\r\nчто у ужа — ужата, а у ежа — ежата,\r\nа у него высокопоставленный гость унес трость,\r\nи вскоре опять пять ребят съели пять опят с полчетвертью четверика\r\nчечевицы без червоточины,\r\nи тысячу шестьсот шестьдесят шесть пирогов с творогом\r\nиз сыворотки из-под простокваши,\r\nо всем о том около кола колокола звоном раззванивали,\r\nда так, что даже Константин — зальцбуржский бесперспективняк\r\nиз-под бронетранспортера констатировал:\r\nкак все колокола не переколоколовать, не перевыколоколовать,\r\nтак и всех скороговорок не перескороговорить, не перевыскороговорить;\r\nно попытка — не пытка\".'),
(5, 'Список желаний', '', 'wishlist/', 0, '2017-11-13 16:18:24', '2017-11-14 17:38:43', ''),
(6, 'Корзина', '', 'cart/', 0, '2017-11-13 16:18:24', '2017-11-21 11:56:24', ''),
(7, 'Отзывы', '', 'otzyvy/', 0, '2017-11-13 16:19:09', '2017-11-13 16:19:09', ''),
(8, 'Контакты', '', 'kontakty/', 1, '2017-11-24 20:02:33', '2017-11-24 20:02:33', 'Это наши контакты.\r\nТелефон:\r\nЕ-майл:\r\nАдресс:');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visible` bigint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`Id`, `name`, `description`, `image`, `url`, `created`, `updated`, `visible`) VALUES
(1, 'Samsung Galaxy S8 64GB Midnight', '<div style=\"text-align: justify;\">Экран (5.8\", Super AMOLED, 2960х1440)/ Samsung Exynos 8895 (4 x 2.3 ГГц + 4 x 1.7 ГГц)/ основная камера 12 Мп + фронтальная 8 Мп/ RAM 4 ГБ/ 64 ГБ встроенной памяти + microSD (до 256 ГБ)/ 3G/ LTE/ GPS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 7.0 (Nougat) / 3000 мА*ч\r\nПоддерживается установка двух SIM-карт или одной SIM-карты и карты памяти. Слот для второй SIM-карты совмещен со слотом для карты памяти.</div>', '1894533392.jpg', 'samsung-galaxy-s8-64gb-midnight/', '2017-11-21 13:59:51', '2017-11-28 16:15:59', 1),
(2, 'Lenovo P2 P2a42', 'Экран (5.5\", Super AMOLED, 1920x1080)/ Qualcomm Snapdragon 625 (2.0 ГГц)/ основная камера: 13 Мп, фронтальная камера: 5 Мп/ RAM 4 ГБ/ 32 ГБ встроенной памяти + microSD/SDHC (до 128 ГБ)/ 3G/ LTE/ GPS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 6.0 (Marshmallow) / 5100 мА*ч', 'lenovo_pa4n0007ua_images_1757909924.jpg', 'lenovo-p2-p2a42-/', '2017-11-21 14:33:03', '2017-11-21 17:31:20', 0),
(3, 'Samsung Galaxy A5 2017 Duos SM-A520', 'Экран (5.2\", Super AMOLED, 1920x1080)/ Samsung Exynos 7880 (1.9 ГГц)/ основная камера: 16 Мп, фронтальная камера: 16 Мп/ RAM 3 ГБ/ 32 ГБ встроенной памяти + microSD/SDHC (до 256 ГБ)/ 3G/ LTE/ GPS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 6.0 (Marshmallow)/ 3000 мА*ч', 'samsung_sm_a520fzdsek_images_1828043077.jpg', 'samsung-galaxy-a5-2017-duos-sm-a520/', '2017-11-21 16:34:11', '2017-11-29 16:47:14', 1),
(12, 'алвт _встыволт- 12', '<br>', '', 'alvt-vstyvolt--12/', '2017-11-29 16:10:41', '2017-11-29 16:20:12', 0),
(14, 'Ванна акриловая POLIMAT ZOE 180x80', '<ul class=\"short-chars-l flex\" style=\"margin-right: 13px; margin-bottom: 21px; margin-left: 0px; padding: 0px; line-height: 1em; list-style: none; overflow: hidden; font-family: Arial, Helvetica, FreeSans, &quot;Liberation Sans&quot;, &quot;Nimbus Sans L&quot;, sans-serif;\"><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Цвет:&nbsp;</span><span class=\"chars-value\" style=\"word-break: break-word; line-height: 1.125rem;\">Белый</span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Форма:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://bt.rozetka.com.ua/vanny/c116902/filter/48784=100514/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Овальная</a></span></span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Размеры (ДхШхГ):&nbsp;</span><span class=\"chars-value\" style=\"word-break: break-word; line-height: 1.125rem;\">180 x 80 x 65 см</span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Материал:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://bt.rozetka.com.ua/vanny/c116902/filter/79281=379647/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Акрил<span id=\"copyinfo\" style=\"position: absolute; overflow: hidden; width: 1px; height: 1px;\"><br>Подробнее:&nbsp;</span></a><br></span></span></font></li></ul>', '6606213_images_203566873810.jpg', 'vanna-akrilovaya-polimat-zoe-180x80/', '2017-11-29 17:31:36', '2017-11-29 17:32:06', 1),
(15, 'Аккумуляторный пылесос PHILIPS PowerPro Aqua', '<ul class=\"short-chars-l flex\" style=\"margin-right: 13px; margin-bottom: 21px; margin-left: 0px; padding: 0px; line-height: 1em; list-style: none; overflow: hidden; font-family: Arial, Helvetica, FreeSans, &quot;Liberation Sans&quot;, &quot;Nimbus Sans L&quot;, sans-serif;\"><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Тип пылесоса:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://rozetka.com.ua/akkumulyatornie-pylesosy/c4631242/32745=40120/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Аккумуляторный</a></span></span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Тип уборки:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; margin-right: 1px; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://rozetka.com.ua/akkumulyatornie-pylesosy/c4631242/32790=40200/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Влажная</a></span>,</span>&nbsp;<span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://rozetka.com.ua/akkumulyatornie-pylesosy/c4631242/32790=40205/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Сухая</a></span></span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Объем пылесборника:&nbsp;</span><span class=\"chars-value\" style=\"word-break: break-word; line-height: 1.125rem;\">0.6 л</span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Регулировка мощности:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://rozetka.com.ua/akkumulyatornie-pylesosy/c4631242/32735=40075/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Без регулировки</a></span></span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Основные насадки:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; margin-right: 1px; line-height: 1.125rem;\"><span class=\"chars-value-inner\">Щелевая</span>,</span>&nbsp;<span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\">TriActive Turbo</span></span></font></li><li class=\"short-chars-l-i\" style=\"margin: 0px; padding: 0px;\"><font size=\"3\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); line-height: 1.125rem;\">Цвет:&nbsp;</span><span class=\"chars-value\" style=\"word-break: break-word; line-height: 1.125rem;\"><span class=\"chars-value-inner\">Сний<span id=\"copyinfo\" style=\"position: absolute; overflow: hidden; width: 1px; height: 1px;\"><br>Подробнее:&nbsp;<a href=\"https://rozetka.com.ua/10017207/p10017207/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">https://rozetka.com.ua/10017207/p10017207/</a></span></span></span></font></li></ul>', '10017207_images_1660178405.jpg', 'akkumulyatornyj-pylesos-philips-powerpro-aqua/', '2017-11-29 17:35:00', '2017-11-29 17:59:02', 1),
(17, 'Аккумуляторный пылесос PHILIPS PowerPro', '<br>', 'IMG054.jpg', '1-akkumulyatornyj-pylesos-philips-powerpro-aqua/', '2017-11-29 18:00:32', '2017-11-29 18:15:52', 0),
(45, 'Кухонная мойка KRAUS', '<ul class=\"short-chars-l flex\" style=\"margin-right: 13px; margin-bottom: 21px; margin-left: 0px; padding: 0px; line-height: 1em; list-style: none; overflow: hidden; font-family: Arial, Helvetica, FreeSans, &quot;Liberation Sans&quot;, &quot;Nimbus Sans L&quot;, sans-serif; font-size: 13.0013px;\"><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); font-size: 0.8125rem; line-height: 1.125rem;\">Материал:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; font-size: 0.8125rem; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://bt.rozetka.com.ua/kuhonnye-moyki/c113805/filter/53772=138632/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Нержавеющая сталь</a></span></span></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); font-size: 0.8125rem; line-height: 1.125rem;\">Тип установки:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; font-size: 0.8125rem; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://bt.rozetka.com.ua/kuhonnye-moyki/c113805/filter/53752=138577/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Под столешницу</a></span></span></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); font-size: 0.8125rem; line-height: 1.125rem;\">Отверстие под смеситель:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; font-size: 0.8125rem; line-height: 1.125rem;\"><span class=\"chars-value-inner\">Нет</span></span></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); font-size: 0.8125rem; line-height: 1.125rem;\">Габариты (ШхГхВ) / Диаметр мойки:&nbsp;</span><span class=\"chars-value\" style=\"word-break: break-word; font-size: 0.8125rem; line-height: 1.125rem;\">58,4х45,7х25,4 см</span></li><li class=\"short-chars-l-i\" style=\"margin: 0px 0px 4px; padding: 0px;\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); font-size: 0.8125rem; line-height: 1.125rem;\">Сифон:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; font-size: 0.8125rem; line-height: 1.125rem;\"><span class=\"chars-value-inner\">Докупается отдельно</span></span></li><li class=\"short-chars-l-i\" style=\"margin: 0px; padding: 0px;\"><span class=\"chars-title\" style=\"word-break: break-word; margin-right: 1px; color: rgb(102, 102, 102); font-size: 0.8125rem; line-height: 1.125rem;\">Цвет:&nbsp;</span><span class=\"chars-value inline\" style=\"display: inline-block; word-break: break-word; font-size: 0.8125rem; line-height: 1.125rem;\"><span class=\"chars-value-inner\"><a class=\"novisited\" href=\"https://bt.rozetka.com.ua/kuhonnye-moyki/c113805/filter/53787=138722/\" style=\"outline: 0px; color: rgb(62, 119, 170);\">Хром<span id=\"copyinfo\" style=\"position: absolute; overflow: hidden; width: 1px; height: 1px;\"><br>Подробнее:&nbsp;</span></a><br></span></span></li></ul>', 'kraus-khu-101-23_images_1654886552.jpg', '46-kuhonnaya-mojka-kraus-5/', '2017-12-06 04:41:53', '2017-12-06 04:55:00', 1),
(57, 'Кухонная мойка KRAUS', '<br>', 'media-share-0-02-05-90ff1f43c853a0b071e5c84f18085bb749cba2b70b3aa58c5ed5f02794996ba4-ae87fb8a-df99-427c-b602-2cdd162143b116.jpg', '46-kuhonnaya-mojka-kraus/', '2017-12-13 20:50:29', '2017-12-13 20:50:39', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 13),
(2, 2, 2),
(3, 3, 13),
(14, 14, 7),
(15, 15, 12),
(46, 45, 8),
(60, 57, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `amount` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `variant_id` bigint(20) NOT NULL,
  `variant_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchases`
--

INSERT INTO `purchases` (`Id`, `order_id`, `product_id`, `price`, `amount`, `product_name`, `variant_id`, `variant_name`) VALUES
(63, 36, 1, 5000, 1, 'Samsung Galaxy S8 64GB Midnight', 1, 'Black'),
(64, 36, 3, 12000, 1, 'Samsung Galaxy A5 2017 Duos SM-A520', 3, 'Black'),
(65, 36, 14, 25000, 1, 'Ванна акриловая POLIMAT ZOE 180x80', 14, 'белая'),
(66, 36, 15, 8000, 1, 'Аккумуляторный пылесос PHILIPS PowerPro Aqua', 15, 'FC6405'),
(67, 36, 45, 12000, 1, 'Кухонная мойка KRAUS', 46, 'KHU-101-23'),
(68, 37, 1, 5000, 1, 'Samsung Galaxy S8 64GB Midnight', 1, 'Black'),
(69, 37, 45, 12000, 2, 'Кухонная мойка KRAUS', 46, 'KHU-101-23');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `name`, `phone`, `email`, `city`, `password`) VALUES
(1, 'Катерина', '+380936323146', 'kvida1992@gmail.com', 'ул.Криворожская,52', '$2y$10$/VPuHISvPeqIW9hQMw/ecOyUltQXPu285JHpHlTSGuABfBtTgV30u'),
(2, 'Ольга', '+380501234569', '01@i.ua', '', '$2y$10$OlYg861FESQWLXy5ybDZ1e6uPaFJKS1YhO1buoGUYtMVHyFMzZEHC'),
(3, 'Игорь', '76252', '01012001@i.ua', '', '$2y$10$7ixl5zeabhFUOew4BxoZTeK5uFhA45YdZv.w40.XkINL5JMGtaJp2'),
(5, 'Крот', '0507924633', 'krot@gmail.com', '', '$2y$10$7RWOQd4jPQKqFop9rDtJZ.4zlIGcmiPoGj6c5muJHvjnZCDDAl3Ze'),
(19, 'Екатерина', '+380936323146', 'asd@asd.asd', 'Днепр', '$2y$10$1VJ/oPQN8nXcTOCKJWVIxOgoITmB17BC/hVikO3PB37UlosHDpBLS');

-- --------------------------------------------------------

--
-- Структура таблицы `users_admin`
--

DROP TABLE IF EXISTS `users_admin`;
CREATE TABLE IF NOT EXISTS `users_admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_admin`
--

INSERT INTO `users_admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'admin', 'admin@gmail.com', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `variants`
--

DROP TABLE IF EXISTS `variants`;
CREATE TABLE IF NOT EXISTS `variants` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `sku` varchar(255) NOT NULL,
  `stock` bigint(20) NOT NULL,
  `sale_price` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `variants`
--

INSERT INTO `variants` (`Id`, `name`, `product_id`, `price`, `sku`, `stock`, `sale_price`) VALUES
(1, 'Black', 1, 5000, '11111', 150, 0),
(2, 'Gold', 2, 6000, '22222', 200, 0),
(3, 'Black', 3, 12000, '1256', 600, 0),
(14, 'белая', 14, 25000, '1568', 50, 0),
(15, 'FC6405', 15, 8000, '1258', 15, 0),
(16, 'FC6405', 17, 0, '589', 0, 0),
(46, 'KHU-101-23', 45, 12000, '256', 25, 0),
(60, 'red x3', 57, 125, '1125', 10, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
