-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2019 г., 20:31
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `big_image` varchar(250) NOT NULL,
  `small_image1` varchar(250) NOT NULL,
  `small_image2` varchar(250) NOT NULL,
  `small_image3` varchar(250) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `locations`
--

INSERT INTO `locations` (`id`, `title`, `big_image`, `small_image1`, `small_image2`, `small_image3`, `position`) VALUES
(1, 'MOUNTAINS', '/web/uploads/img/l2.png', '/web/uploads/img/l2_1.png', '/web/uploads/img/l2_2.png', '/web/uploads/img/l2_3.png', 2),
(2, 'CANYONS', '/web/uploads/img/l3.png', '/web/uploads/img/l3_1.png', '/web/uploads/img/l3_2.png', '/web/uploads/img/l3_3.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `link_text` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `link_text`, `url`, `position`) VALUES
(1, 'works', '/works', 1),
(2, 'services', '/services', 2),
(3, 'locations', '/locations', 3),
(4, 'about', '/about', 4),
(5, 'contacts', '/contacts', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text,
  `key_words` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `meta`
--

INSERT INTO `meta` (`id`, `alias`, `title`, `description`, `key_words`) VALUES
(1, 'index', '111', '222', '333'),
(2, 'locations', 'locations', 'locations', 'locations'),
(3, 'contacts', 'contacts', 'contacts', 'contacts'),
(4, 'services', 'services', 'services', 'services'),
(5, 'about', 'about', 'about', 'about'),
(6, 'works', 'works', 'works', 'works');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1556352444),
('m190426_061146_create_news_table', 1556352457),
('m190504_035354_create_text_blocks_table', 1557052906),
('m190504_041727_create_team_table', 1557052907),
('m190504_044410_create_meta_table', 1557052907),
('m190504_051003_create_menu_table', 1557052907),
('m190504_052625_create_location_table', 1557052908),
('m190504_080428_create_start_page_table', 1557052908);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`) VALUES
(1, '111', '<p>222</p>', 'Koala.jpg'),
(2, '333', '<p>444</p>', 'Desert.jpg'),
(3, '111', '<p>2222</p>', ''),
(4, '111', '<p>222</p>', '');

-- --------------------------------------------------------

--
-- Структура таблицы `start_page`
--

CREATE TABLE `start_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_create` date DEFAULT NULL,
  `background` varchar(250) NOT NULL,
  `video` varchar(500) DEFAULT NULL,
  `go_away_link` varchar(500) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `start_page`
--

INSERT INTO `start_page` (`id`, `title`, `date_create`, `background`, `video`, `go_away_link`, `is_active`) VALUES
(1, 'VASSA&CO. “MADE YOURSELF!”', '2019-11-09', '/web/uploads/img/screen1.png', 'http://player.vimeo.com/video/232397075?title=0&byline=0&portrait=0&sidedock=0', 'https://yandex.kz/?nr=18021', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `person_name` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `show_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `person_name`, `position`, `email`, `show_position`) VALUES
(1, 'ANDREY RASPUTIN', 'Executive producer', 'rasputin@anykey.kz', 1),
(2, 'VLADIMIR PETROV', 'Executive producer', 'petrov@anykey.kz', 2),
(3, 'KIRILL ROSCHIN', 'Head of production', 'k.roschin@anykey.kz', 3),
(4, 'JENYA MOREVA', 'Production manager', 'j.moreva@anykey.kz', 4),
(5, 'VASILISA TOROSHINA', 'Producer', 'v.toroshina@anykey.kz', 5),
(6, 'KESHA KURISHBAYEV', 'Producer', 'y.kurishbayev@anykey.kz', 6),
(7, 'NADEZHDA ANDRUSSENKO', 'Producer', 'n.andrussenko@anykey.kz', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `text_blocks`
--

CREATE TABLE `text_blocks` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `text_blocks`
--

INSERT INTO `text_blocks` (`id`, `alias`, `text`) VALUES
(1, 'adress', '27/5, BUKHAR ZHYRAU ST., OFFICE 262, ALMATY, KAZAKHSTAN'),
(2, 'phones', '+7 (727) 337-59-01<br>\r\n+7 (727) 337 60-01'),
(3, 'email', 'INFO@ANYKEY.KZ'),
(4, 'loc_top_img', '/web/uploads/img/l1.png'),
(5, 'loc_top_text', 'KAZAKHSTAN IS BEAUTIFUL. A NUMBER OF NATURE LANDSCAPES ARE WITHIN 30-40 MINUTES DRIVE AWAY FROM ALMATY.'),
(6, 'serv_top_text', 'KAZAKHSTAN / KYRGYZSTAN UZBEKISTAN / MONGOLIA'),
(7, 'serv_top_img', '/web/uploads/img/s1.png'),
(8, 'serv_mid_text1', '            <div>\r\n                <h3>The team of highly qualified producers makes commercials and movies for over 13 years. </h3>\r\n                <p>Excellent knowledge of Kazakhstan and Central Asia allows to organize and execute difficult and large-scale projects.</p>\r\n            </div>\r\n\r\n            <div>\r\n                <h3>We can organize/ think up/ make / build  all that is needed to achieve the purpose.</h3>\r\n                <p>English-speaking team of producers put together excellent group - 1st AD, 2nd AD, 3rd AD,<br /><br />Production Manager, Location Manager, Transport Captain, etc.</p>\r\n            </div>'),
(9, 'serv_mid_img', '/web/uploads/img/s2.png'),
(10, 'serv_mid_text2', '            <div class=\"text2\">\r\n                <h4>Easy and fast online casting </h4>\r\n                <p>Selection and search for locations</p>\r\n                <p>The organization and logistics of shooting trips, flight logistics, accommodation</p>\r\n                <p>The organization of transport / Modern production office</p>\r\n                <p>Art department (decoration, miniatures, props, costume design)</p>\r\n                <p>SFX & Fashion MakeUp</p>\r\n                <p>Stunts production (fights, cars, stunts of horseriding)</p>\r\n                <p>Post-production services</p>\r\n                <p>Playback and DIT service</p>\r\n                <p>Rental of the shooting, lighting and special camera equipment.</p>\r\n                <p>There is the Speed Motion Control on rails also in Almaty, which can work as usual Motion Control.</p>\r\n            </div>'),
(11, 'serv_img_grid', '            <div class=\"imageBlock\" style=\"background-image: url(/web/uploads/img/s3_1.png)\"></div>\r\n            <div class=\"imageBlock\" style=\"background-image: url(/web/uploads/img/s3_2.png)\"></div>\r\n            <div class=\"imageBlock\" style=\"background-image: url(/web/uploads/img/s3_3.png)\"></div>\r\n            <div class=\"imageBlock\" style=\"background-image: url(/web/uploads/img/s3_4.png)\"></div>\r\n            <div class=\"imageBlock\" style=\"background-image: url(/web/uploads/img/s3_5.png)\"></div>\r\n            <div class=\"imageBlock\" style=\"background-image: url(/web/uploads/img/s3_6.png)\"></div>'),
(12, 'about_text', 'The team of highly qualified producers makes commercials and movies for over 13 years. <br /><br />Excellent knowledge of Kazakhstan and Central Asia allows to organize and execute difficult and large-scale projects.');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` int(22) NOT NULL,
  `date_create` date DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `key_words` text NOT NULL,
  `team` text NOT NULL,
  `videos` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `date_create`, `image`, `alias`, `is_active`, `title`, `description`, `key_words`, `team`, `videos`, `images`) VALUES
(3, '2020-05-01', '/web/uploads/works/anykey.kz-Landslide1549455087-preview.png', 'first', 1, 'Первый проект', 'first', 'first', '[{\"name\":\"McDonald\\u2019s Kazakhstan\",\"position\":\"Client\"},{\"name\":\"TBWA\",\"position\":\"Agency\"},{\"name\":\"Malik Zenger\",\"position\":\"Director\"},{\"name\":\"Vladimir Ushakov\",\"position\":\"DoP\"},{\"name\":\"Andrey Rasputin\",\"position\":\"Producer\"},{\"name\":\"Kirill Roshin<br \\/>Yerkebulan Kurishbayev\",\"position\":\"Linear producer\"},{\"name\":\"Evgenya Moreva\",\"position\":\"1st AD\"},{\"name\":\"Dilshat Chorukov\",\"position\":\"Editing\"},{\"name\":\"Erlan Tanaev\",\"position\":\"Color grading\"},{\"name\":\"Leonid Pak\",\"position\":\"CG\"},{\"name\":\"Cast.kz\",\"position\":\"Casting\"},{\"name\":\"Alexandra Shagai\",\"position\":\"Production designer\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"}]', '[{\"title\":\"VASSA&Co. - MADE YOURSELF!\",\"video_link\":\"https:\\/\\/player.vimeo.com\\/video\\/229674125?title=0&byline=0&portrait=0\"},{\"title\":\"Behind The Scenes\",\"video_link\":\"https:\\/\\/player.vimeo.com\\/video\\/229674125?title=0&byline=0&portrait=0\",\"after_text_block\":\"1\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"}]', '[\"\\/web\\/uploads\\/works\\/anykey.kz-Landslide1549455087-preview.png\",\"\\/web\\/uploads\\/works\\/anykey.kz-Landslide1549455087-preview.png\",\"\\/web\\/uploads\\/works\\/anykey.kz-Landslide1549455087-preview.png\",\"\\/web\\/uploads\\/works\\/anykey.kz-Landslide1549455087-preview.png\",\"\\/web\\/uploads\\/works\\/anykey.kz-Landslide1549455087-preview.png\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]'),
(4, '2019-05-15', '/web/uploads/works/anykey.kz-DaddyCanDoIt1556190055-preview.jpg', 'second2', 1, 'second', 'second', 'second', '[{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"}]', '[{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"}]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]'),
(6, '2019-05-01', '/web/uploads/works/anykey.kz-DaddyCanDoIt1556190055-preview.jpg', 'third', 0, '111', '222', '333', '[{\"name\":\"q1\",\"position\":\"q1\"},{\"name\":\"q2\",\"position\":\"q2\"},{\"name\":\"q3\",\"position\":\"qqq4\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"},{\"name\":\"\",\"position\":\"\"}]', '[{\"title\":\"qqq\",\"video_link\":\"q1\",\"after_text_block\":\"1\"},{\"title\":\"qqq1\",\"video_link\":\"q2\"},{\"title\":\"www\",\"video_link\":\"www222\",\"after_text_block\":\"1\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"},{\"title\":\"\",\"video_link\":\"\"}]', '[\"111\",\"22\",\"33\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\",\"\"]');

-- --------------------------------------------------------

--
-- Структура таблицы `works_imgs`
--

CREATE TABLE `works_imgs` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `works_imgs`
--

INSERT INTO `works_imgs` (`id`, `img`) VALUES
(5, 'anykey.kz-Landslide1549455087-preview.png'),
(6, 'anykey.kz-DaddyCanDoIt1556190055-preview.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `start_page`
--
ALTER TABLE `start_page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `works_imgs`
--
ALTER TABLE `works_imgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `start_page`
--
ALTER TABLE `start_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `works_imgs`
--
ALTER TABLE `works_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
