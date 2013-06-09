-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 09 2013 г., 16:23
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `name_menu` varchar(15) DEFAULT NULL,
  `activ_menu` tinyint(1) DEFAULT NULL,
  `action_menu` varchar(10) NOT NULL,
  `argument_menu` smallint(6) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `activ_menu`, `action_menu`, `argument_menu`) VALUES
(1, 'Home', 1, 'page', 1),
(3, 'News', 0, 'newsall', 5),
(7, 'qwer', 1, 'page', 24);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `title_news` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyw_news` varchar(255) NOT NULL,
  `desc_news` varchar(255) NOT NULL,
  `text_news` text,
  `date_news` datetime DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title_news`, `keyw_news`, `desc_news`, `text_news`, `date_news`) VALUES
(1, 'Запуск Сайта', 'Запуск Сайта', 'Запуск Сайта', 'Мы рады видеть вас на нашем сайте...', '2013-06-04 09:04:09'),
(2, 'Развитие CMS', 'Развитие CMS', 'Развитие CMS', 'Ура товарищи наша CMS очень быстро...', '2013-06-05 10:07:43');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` smallint(6) NOT NULL AUTO_INCREMENT,
  `title_page` tinytext,
  `keyw_page` varchar(255) DEFAULT NULL,
  `desc_page` varchar(255) DEFAULT NULL,
  `text_page` mediumtext,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id_page`, `title_page`, `keyw_page`, `desc_page`, `text_page`) VALUES
(5, 'Заголовок', 'Ключ', 'Дескрипт', 'Привет<br>'),
(13, 'New Page', 'New', 'News', '<div align="center"><font size="5">Привет, это новая <a target="" title="" href="http://test1.ru">страница</a></font><br></div>'),
(24, 'qwer', 'qewr', 'req', 'qewr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
