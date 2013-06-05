-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 05 2013 г., 14:23
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
  `link_menu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `activ_menu`, `link_menu`) VALUES
(1, 'Home', 1, '?action=page&id=1'),
(2, 'About', 1, '?action=page&id=2'),
(3, 'News', 0, '?action=newsall&limit=5');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `title_news` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_news` text,
  `date_news` datetime DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title_news`, `text_news`, `date_news`) VALUES
(1, 'Запуск Сайта', 'Мы рады видеть вас на нашем сайте...', '2013-06-04 09:04:09'),
(2, 'Развитие CMS', 'Ура товарищи наша CMS очень быстро...', '2013-06-05 10:07:43');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id_page`, `title_page`, `keyw_page`, `desc_page`, `text_page`) VALUES
(1, 'Home', 'Our Website!', 'In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat', '<div style="margin-bottom: 20px;">\r\n<h1 class="title">Welcome to Our Website!</h1>\r\n      <p><strong>Center Stage</strong> is a free template from <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5 License</a>. You"re free to use it for both commercial or personal use. I only ask that you link back to <a href="http://www.freecsstemplates.org/">my site</a> in some way. <em>Enjoy :)</em></p>\r\n      <h2>Praesent Scelerisque</h2>\r\n      <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat:</p>\r\n      <blockquote>\r\n        <p>“Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget.”</p>\r\n      </blockquote>\r\n    </div>\r\n    <div>&nbsp;</div>\r\n    <div class="twocols">\r\n      <div class="col1">\r\n        <h3 class="title">Lorem Ipsum Dolor</h3>\r\n        <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</p>\r\n        <p><a href="http://web-mastery.info/">Read more…</a></p>\r\n      </div>\r\n      <div class="col2">\r\n        <h3 class="title">Pellentesque Quis</h3>\r\n        <ul class="list">\r\n          <li><a href="http://web-mastery.info/">Ut semper vestibulum est</a></li>\r\n          <li><a href="http://web-mastery.info/">Vestibulum luctus dui</a></li>\r\n          <li><a href="http://web-mastery.info/">Integer rutrum nisl in mi</a></li>\r\n          <li><a href="http://web-mastery.info/">Etiam malesuada rutrum</a></li>\r\n          <li><a href="http://web-mastery.info/">Aenean facilisis ligula</a></li>\r\n          <li><a href="http://web-mastery.info/">Vestibulum luctus dui</a></li>\r\n          <li><a href="http://web-mastery.info/">Ut elit vitae augue</a></li>\r\n          <li><a href="http://web-mastery.info/">Sed sagittis leo vehicula</a></li>\r\n          <li><a href="http://web-mastery.info/">Ut elit vitae augue</a></li>\r\n        </ul>\r\n</div>\r\n</div>'),
(2, 'Title page', 'Key', 'Description', '<h2>Привет</h2><p>Я тебя убью скотина:</p><ol><li>Тебя</li><li>Твою семью</li><li>Себя</li></ol><br>'),
(5, 'Заголовок', 'Ключ', 'Дескрипт', 'Привет<br>'),
(13, 'New Page', 'New', 'News', '<div align="center"><font size="5">Привет, это новая <a target="" title="" href="http://test1.ru">страница</a></font><br></div>'),
(14, 'Zag', 'Key', 'Desc', 'Hello!!!<br>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
