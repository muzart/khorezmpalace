-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2016 г., 12:20
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `khpalace`
--

-- --------------------------------------------------------

--
-- Структура таблицы `go_booking`
--

CREATE TABLE `go_booking` (
  `id` int(11) NOT NULL,
  `your_name` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `rooms` varchar(20) NOT NULL,
  `adults` varchar(10) NOT NULL,
  `childs` varchar(10) NOT NULL,
  `check_in` varchar(10) NOT NULL,
  `check_in_time` varchar(10) NOT NULL,
  `check_out` varchar(10) NOT NULL,
  `check_out_time` varchar(10) NOT NULL,
  `created` int(11) NOT NULL,
  `replied` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_booking`
--

INSERT INTO `go_booking` (`id`, `your_name`, `email`, `room_type`, `rooms`, `adults`, `childs`, `check_in`, `check_in_time`, `check_out`, `check_out_time`, `created`, `replied`) VALUES
(34, 'Muza', 'muzaffar@muza.ru', 'Двойной', '3 rooms', '7 adults', '', '05-25-2016', '14:00', '05-27-2016', '12:00', 1464097252, 1),
(35, 'Dilshod', 'dilshod@mail.ru', 'Одиночный', '1 room', '1 adult', '', '05-25-2016', '14:00', '05-27-2016', '12:00', 1464097352, 0),
(36, 'Muzaffar', 'respect.net@bk.ru', 'Двойной одиночный', '1 room', '1 adult', '', '05-25-2016', '14:00', '05-27-2016', '12:00', 1464101315, -1),
(37, 'Dilshod', 'dilshod@mail.ru', 'Двойной', '2 rooms', '2 adults', '3 childs', '05-25-2016', '14:00', '05-31-2016', '12:00', 1464101950, 1),
(38, 'Muzaffar', 'muzaffar@muza.ru', 'Апартамент', '1 room', '1 adult', '', '05-26-2016', '14:00', '05-31-2016', '12:00', 1464102052, -1),
(39, 'Muzaffar', 'respect.net@bk.ru', 'Двойной', '2 rooms', '1 adult', '', '05-31-2016', '14:00', '06-02-2016', '12:00', 1464644332, 1),
(40, 'Muzaffar', 'respect.net@bk.ru', 'Двойной одиночный', '1 room', '1 adult', '', '06-01-2016', '14:00', '06-04-2016', '12:00', 1464644607, -1),
(41, 'Muza', 'respect.net@bk.ru', 'Двойной одиночный', '1 room', '1 adult', '', '06-01-2016', '14:00', '06-04-2016', '12:00', 1464695412, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `go_category`
--

CREATE TABLE `go_category` (
  `id` int(11) NOT NULL,
  `hash` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_category`
--

INSERT INTO `go_category` (`id`, `hash`, `title`, `lang_id`) VALUES
(2, 'o-nas', 'О нас', 2),
(3, 'biz-haqimizda', 'Biz haqimizda', 1),
(7, 'about', 'About Us', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `go_content`
--

CREATE TABLE `go_content` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `hash` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `meta_tags` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_content`
--

INSERT INTO `go_content` (`id`, `lang_id`, `category_id`, `title`, `hash`, `description`, `meta_tags`, `meta_description`, `created`, `updated`, `created_by`, `image`) VALUES
(11, 1, 3, 'Biz haqimizda', 'biz-haqimizda', '<p>\r\n	<strong>&quot;Khorezm Palace&quot;</strong> mehmonxonasi - Xorazm viloyati Urganch shaxrining markazida joylashgan, 4 yulduzli zamonaviy mehmonxona majmuasidir.</p>\r\n<p>\r\n	Mehmonxona infratuzilmasi yuqori sinfdagi xizmatlar bilan ta&#39;minlash uchun bizga imkon beradi va o&#39;z ichiga quyidagilarni oladi: Bizness markaz (zamonaviy, yuqori sifatli ofis uskunalari va aloqa bilan jihozlangan, kichik seminarlar, treninglar va biznes uchrashuvlar uchun mo&#39;ljallangan mukammal makon), barcha xonalarda mavjud bo&#39;lgan simsiz internet tarmog&#39;i (Wi-Fi) sayyohlar va biznesmenlar uchun qulaydir.</p>\r\n<p>\r\n	<strong><img align="left" alt="" height="200" hspace="10" src="/upload/userfiles/images/34b8adfff724d7fba83772a12f6a13ca.jpg" vspace="10" width="300" />&quot;Khorezm Palace&quot;</strong> mehmonxonasi 2002 yili eski mehmonxona &quot;Xorazm-Inturist&quot; bazasi asosida qayta ta&#39;mirlangan.</p>\r\n<p>\r\n	Bugungi kunda <strong>&quot;Khorezm Palace&quot;</strong> mehmonxonasi jihozlanganlik darajasiga va xizmat ko&#39;rsatish sifatiga ko&#39;ra 4 yulduzli mehmonxona hisoblanadi va Urganch shahrida narxi va sifatiga ko&#39;ra yetakchi mehmonxonalardan biridir.</p>\r\n<p>\r\n	<strong>&quot;Khorezm Palace&quot;</strong> mehmonxonasi Xorazm viloyatida yagona ichimlik suvini tozalash va ozonlashtirish tizimiga ega.</p>\r\n<p class="MsoNormal">\r\n	Jumladan dunyodagi eng yaxshi mehmonxona xizmati standartlari namunalaridan biri bo&rsquo;lmish , asosan faqatgina Xorazm viloyatida mavjud bo&rsquo;lgan optimallashtirilgan  yaxshi rivojlangan infratuzilma  Fidelio V8 nazorat tizimiga ega.</p>\r\n<p class="MsoNormal">\r\n	Bu vaqt bilan sinalgan biznes logikaning hayotga tadbiqi hisoblanib, uning yaratuvchisi shu soxaning yetakchisi bo&#39;lmish Micros Fideliodir. Bu mehmonlar va xizmat ko&rsquo;rsatuvchilar haqida barcha zarur ma&#39;lumotlarni almashish uchun qulay imkoniyatdir.</p>\r\n<p class="MsoNormal">\r\n	Mehmonxona kompleks binosi Urganch shaxar manzarasi ko&rsquo;rkiga ko&rsquo;rk qo&rsquo;shib turibdi.</p>\r\n<p class="MsoNormal">\r\n	Mehmonxonaning qurilishida shamol tezligi va yo&rsquo;nalishi, yog&rsquo;ingarchilik, iqlim omillari bo&rsquo;lmish harorat va namliklar hisobga olingan.</p>\r\n<p class="MsoNormal">\r\n	Menejment va boshqaruv tizimida tez va osonlik bilan kundalikdagi quyidagi yumushlarni bajarish imkoniyatlari mavjud: xonalarni band qilish, mehmonlarni joylashtirish, restoranda oldindan stol buyurtma berish va buyurtmalarni bajarish. Har bir mijozga uning imtiyozlari va kategoriyasiga qarab alohida xizmat ko&rsquo;rsatish.<img align="right" alt="" height="183" hspace="10" src="/upload/userfiles/images/9f0acabd13596588adc314497392c43f.jpg" vspace="10" width="275" /></p>\r\n<p class="MsoNormal">\r\n	Mehmonxona hodimlari real vaqt tizimida xonalarning tozaligiga, jihozlariga, xona buyurtma berish tizimiga, qabulga va bevosita avtomatlashtirilgan buxgalteriya  tizimlarining monitoringiga javob beradi.</p>\r\n<p class="MsoNormal">\r\n	Kommunikatsiya tizimi esa bizning mehmonlarga zamonaviy tarmoq vositalari bo&rsquo;lmish Wi-Fi texnologiyasiga asoslangan simsiz internet tarmog&rsquo;i, shaharlar va xalqaro telefon va faks tarmog&rsquo;idan foydalanish imkonini yaratadi.</p>\r\n<p class="MsoNormal">\r\n	Chekmaydigan va imkoniyati cheklangan mehmonlar uchun qulay joylashish ta&rsquo;minlangan. </p>\r\n<p class="MsoNormal">\r\n	Tadbirkorlar uchun har qanday qo&rsquo;shimcha qurilma va jihozlarni ijaraga olish imkoniyatlari mavjud. </p>\r\n<p>\r\n	Mehmonxonamiz sizni har doim hursandchilik bilan kutib olishga tayyor va dam olishingiz uchun maksimal darajada qulay yoki ishchi tashrifingiz samarali bo&rsquo;lishi uchun qo&rsquo;limizdan kelgan barcha ishni qilamiz.</p>\r\n', 'xorazm, palas, mehmonxona, haqida', 'Xorazm Palas Mehmonxonasi haqida', 1463745973, 1464772567, 0, ''),
(12, 2, 2, 'О нас', 'o-nas', '<p>\r\n	 </p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Гостиница <strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; ">&laquo;Khorezm Palace&raquo;</strong> - это современный 4-х звездочный гостиничный комплекс, расположенный в г.Ургенче- административном центре Хорезмской области.</p>\r\n<p>\r\n	<img align="left" alt="" height="200" hspace="10" src="/upload/userfiles/images/34b8adfff724d7fba83772a12f6a13ca.jpg" style="color: rgb(92, 92, 92); font-family: Tahoma; font-size: 14px;" vspace="10" width="300" /></p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Инфраструктура гостиницы позволяет оказывать услуги высокого класса и включает в себя: бизнес центр (оборудован самой современной высококачественной оргтехникой, коммуникациями и является прекрасным местом для проведения небольших семинаров, тренингов и деловых встреч), система беспроводного доступа в интернет (Wi-Fi) во всех номерах-удобна как для туристов, так и для бизнесменов.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Гостиница<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; "> &laquo;Khorezm Palace&raquo;</strong> был реконструирован в 2002 году на базе старой гостиницы &laquo;Хоразм-Интурист&raquo;.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	На сегодняшний день отель &laquo;Khorezm Palace&raquo; по уровню оснащения и качества сервиса входит в лидирующие позиции класса 4 звезды и на данное время является отелем по критериям цена/качества в г. Ургенче.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Отель <strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; ">&laquo;Khorezm Palace&raquo;</strong> является единственной гостиницей в Хорезмской области, в которой имеется независимая система очистки и озонирования воды.<a class="highslide" href="file:///E:/Work/KhorezmPalace/Мои Web Сайты/palace1/khorezmpalace.uz/d/735955/d/reception.jpg" style="color: rgb(186, 143, 49); outline-style: none; outline-width: initial; outline-color: initial; text-decoration: none; cursor: url(file:///E:/Work/KhorezmPalace/%D0%9C%D0%BE%D0%B8%20Web%20%D0%A1%D0%B0%D0%B9%D1%82%D1%8B/palace1/khorezmpalace.uz/shared/highslide/graphics/zoomin.cur), pointer; "><img align="right" alt="reception" height="183" hspace="10" src="/upload/userfiles/images/9f0acabd13596588adc314497392c43f.jpg" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; vertical-align: middle; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: rgb(170, 170, 170); border-right-color: rgb(170, 170, 170); border-bottom-color: rgb(170, 170, 170); border-left-color: rgb(170, 170, 170); cursor: url(file:///E:/Work/KhorezmPalace/%D0%9C%D0%BE%D0%B8%20Web%20%D0%A1%D0%B0%D0%B9%D1%82%D1%8B/palace1/khorezmpalace.uz/shared/highslide-4.1.13/graphics/index.htmlzoomin.cur), pointer !important; float: right; margin-top: 10px; margin-right: 10px; margin-bottom: 10px; margin-left: 10px; " vspace="10" width="275" /></a></p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Это во многом связано с развитой четко налаженной инфраструктурой, создаваемой по стандартам гостиничного обслуживания лучших мировых образцов, в том числе единственная система управления Fidelio V8 в Хорезмской области.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Fidelio V8 &ndash; это функциональность, надежность и возможности гибкой настройки. Это революционное воплощение проверенной временем бизнес логики и концепция дальнейшего развития от лидера рынка Micros-Fidelio. Это возможность обмена всеми необходимыми сведениями о гостях и клиентах отеля.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Комплекс здания гостиницы органично вписывается в среду г. Ургенча, сохраняя особенности городского ландшафта. При строительстве здания учитывались климатические факторы, температура и влажность воздуха, количество осадков, а также скорость и направление ветра.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Система управления и менеджмента позволяет быстро и удобно выполнять решение повседневных задач: бронирование номеров, оформление гостей, предварительный заказ столиков и обработка заказов в ресторане, обеспечивает индивидуальный подход к каждому клиенту, с учетом его предпочтений и категорий.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Персоналом гостиницы обеспечивается контроль в реальном времени за состоянием номеров, оборудования, системой бронирования, приема, текущего обслуживания и напрямую связана с автоматизированными системами финансового учета.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Система коммуникаций позволяет нашим гостям пользоваться современными средствами связи, включая беспроводной Интернет по технологии Wi-Fi, междугородной и международной телефонной и факсимильной связью.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Размещение с комфортом также обеспечено как для некурящих гостей и людей с ограниченными физическими возможностями.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	К услугам деловых людей имеется возможность аренды любого дополнительного оборудования.</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Отель всегда готов оказать радушный приём и сделать всё возможное, чтобы ваш отдых был максимально комфортом, а деловая поездка плодотворной!</p>\r\n', 'гостиница, хорезм, палас, история', 'О гостинице Хорезм Палас', 1463746478, 1464775405, 0, ''),
(13, 2, 2, 'Ресторан', 'restoran', '<p>\r\n	 </p>\r\n<h1 style="margin-top: 15px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 30px; font-weight: normal; font-family: Oranienbaum; text-align: left; ">\r\n	Дополнительные услуги отеля</h1>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Континентальный завтрак (Continental Breakfast) -15 дол. США</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Кофе брейк на 1 чел. -10 дол. США</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Ланч боксы на 1 чел. -10 дол. США</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Обед Сет-Меню - 20 дол. США</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Ужин Сет-Меню - 20 дол. США</p>\r\n<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; outline-width: 0px; outline-style: initial; outline-color: initial; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 255); font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; text-align: left; ">\r\n	Детям до 7 лет предоставляется бесплатный завтрак, но только в сопровождении одного взрослого. Детям от 7 до 12 лет предоставляется завтрак с 50% скидкой, также в сопровождении одного взрослого. Дети старше 12 лет и выше считаются взрослыми. Гостиница не предоставляет скидок для детей на Сет-Меню.</p>\r\n', 'ресторан', 'Ресторан гостиницы Хорезм Палас', 1463753759, 0, 0, '1463753759.jpg'),
(14, 3, 7, 'About Us', 'about-us', '<p class="MsoNormal">\r\n	Hotel &laquo;Khorezm Palace&raquo; - is a modern 4-star hotel complex located in city Urganch- administrative center of Khorezm region.</p>\r\n<p class="MsoNormal">\r\n	The infrastructure of the hotel allows to provide services to high-end and includes a business center (equipped with the latest high-quality office equipment, communications, and is a perfect venue for small seminars, trainings and business meetings), the system is wireless Internet access (Wi-Fi) in all rooms -Easy for both tourists and businessmen.</p>\r\n<p class="MsoNormal">\r\n	<img align="left" alt="khorezm palace" height="267" hspace="10" src="/upload/userfiles/images/34b8adfff724d7fba83772a12f6a13ca.jpg" vspace="10" width="400" />Hotel &laquo;Khorezm Palace&raquo; was reconstructed in 2002 on the basis of the old hotel &quot;Khorazm-Intourist&quot;.</p>\r\n<p class="MsoNormal">\r\n	Today the hotel &laquo;Khorezm Palace&raquo; on the level of equipment and quality of service is included in the leading position in class 4 stars and at this time is the hotels by price / quality in the city of Urgench.</p>\r\n<p class="MsoNormal">\r\n	&laquo;Khorezm Palace&raquo; hotel is the only hotel in the Khorezm region, which has an independent system of water treatment and ozonation.</p>\r\n<p class="MsoNormal">\r\n	This is largely due to well developed infrastructure streamlined, created by the world&#39;s best hotel service standards specimens, including the only control system Fidelio V8 in the Khorezm region.</p>\r\n<p class="MsoNormal">\r\n	Fidelio V8 - this functionality, reliability and flexible configuration possibilities. This revolutionary incarnation of the proven business logic and the concept of further development of the leader Micros-Fidelio market. This is an opportunity to exchange all the necessary information about the guests and hotel clients.</p>\r\n<p class="MsoNormal">\r\n	The complex of the hotel building blends into the environment of Urgench, keeping the features of the urban landscape. During the construction of the building into account climatic factors, temperature and humidity, rainfall, and wind speed and direction.<img align="right" alt="" height="183" hspace="10" src="/upload/userfiles/images/c7eeaf5902d33bf926b8f9740b636917.jpg" vspace="10" width="275" /></p>\r\n<p class="MsoNormal">\r\n	control and management system allows you to quickly and easily perform everyday tasks: room reservations, registration of guests, reservation tables and processing orders in a restaurant provides an individual approach to each client, taking into account their preferences and categories.</p>\r\n<p class="MsoNormal">\r\n	The hotel staff provides real-time monitoring of the state of rooms, equipment, booking systems, admission, routine maintenance, and is directly related to automated accounting systems.</p>\r\n<p class="MsoNormal">\r\n	The communication system allows our guests to use the modern means of communication, including wireless internet access via Wi-Fi technology, long-distance and international telephone and facsimile.</p>\r\n<p class="MsoNormal">\r\n	Accommodation is also provided with the comfort of both non-smokers and people with disabilities.</p>\r\n<p class="MsoNormal">\r\n	For business travelers, there is a possibility to rent any additional equipment.</p>\r\n<p>\r\n	The hotel is always ready to give a warm welcome and do everything possible to make your stay as comfortable and productive business trip!</p>\r\n', 'khorezm, palace, about', 'About us - Khorezm Palace', 1464251541, 1464768078, 0, ''),
(15, 1, 2, 'Ресторан', 'restoran-ru', '<h1 style="margin: 15px 0px; padding: 0px; border: 0px; outline: 0px; font-size: 30px; font-weight: normal; font-family: Oranienbaum; background: rgb(255, 255, 255);">\r\n	Дополнительные услуги отеля</h1>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; background: rgb(255, 255, 255);">\r\n	Континентальный завтрак (Continental Breakfast) -15 дол. США<img align="right" alt="" height="205" hspace="10" src="/upload/userfiles/images/6be8347d82c33208498dadd3df0a886d.jpg" width="308" /></p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; background: rgb(255, 255, 255);">\r\n	Кофе брейк на 1 чел. -10 дол. США</p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; background: rgb(255, 255, 255);">\r\n	Ланч боксы на 1 чел. -10 дол. США</p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; background: rgb(255, 255, 255);">\r\n	Обед Сет-Меню - 20 дол. США</p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; background: rgb(255, 255, 255);">\r\n	Ужин Сет-Меню - 20 дол. США</p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; color: rgb(92, 92, 92); font-family: Tahoma; background: rgb(255, 255, 255);">\r\n	Детям до 7 лет предоставляется бесплатный завтрак, но только в сопровождении одного взрослого. Детям от 7 до 12 лет предоставляется завтрак с 50% скидкой, также в сопровождении одного взрослого. Дети старше 12 лет и выше считаются взрослыми. Гостиница не предоставляет скидок для детей на Сет-Меню.</p>\r\n', 'ресторан', '', 1464767675, 1464767725, 0, ''),
(16, 1, 2, 'Restoran', 'restoran-uz', '<h2>\r\n	Mehmonxonaning qo&rsquo;shimcha xizmatlari</h2>\r\n<p>\r\n	<img align="left" alt="" height="200" hspace="10" src="/upload/userfiles/images/6be8347d82c33208498dadd3df0a886d.jpg" vspace="10" width="300" />Kontinental nonushta (Continental Breakfast) &ndash; 15 USD AQSH</p>\r\n<p class="MsoNormal">\r\n	Coffee Break 1 kishi uchun &ndash; 10 USD AQSH</p>\r\n<p class="MsoNormal">\r\n	Tushlik 1 kishi uchun &ndash; 10 USD AQSH</p>\r\n<p class="MsoNormal">\r\n	Tushlik Set Menyu &ndash; 20 USD AQSH</p>\r\n<p class="MsoNormal">\r\n	Kechki ovqat Set Menyu &ndash; 20 USD AQSH</p>\r\n<p class="MsoNormal">\r\n	7 yoshgacha bo&rsquo;lgan bolalarga bepul nonushta, faqat katta yoshdagi kishilarning kuzatuvi ostida.</p>\r\n<p>\r\n	 </p>\r\n<p class="MsoNormal">\r\n	7 yoshdan 12 yoshgacha bo&rsquo;lgan bolalarga nonushta 50 % chegirmada amalga oshadi, faqat katta yoshdagi kishilarning kuzatuvi ostida. 12 yoshdan katta bolalar o&rsquo;smirlar hisoblanadi. Bolalar uchun Set Menyuga hech qanday chegirma mavjud emas.</p>\r\n', 'restoran', 'Xorazm Palas restorani', 1464772990, 1464773046, 0, ''),
(17, 3, 7, 'Restaurant', 'restaurant', '<h2>\r\n	Additional property amenities</h2>\r\n<p class="MsoNormal">\r\n	<img align="left" alt="" height="200" hspace="10" src="/upload/userfiles/images/6be8347d82c33208498dadd3df0a886d.jpg" vspace="10" width="300" />Continental breakfast (Continental Breakfast) -15 dollars. US</p>\r\n<p class="MsoNormal">\r\n	Coffee break for 1 person. -10 Dollars. US</p>\r\n<p class="MsoNormal">\r\n	Lunch boxes for 1 person. -10 Dollars. US</p>\r\n<p class="MsoNormal">\r\n	Lunch set menu - $ 20.</p>\r\n<p class="MsoNormal">\r\n	The dinner set menu - $ 20.</p>\r\n<p>\r\n	 </p>\r\n<p class="MsoNormal">\r\n	Children under 7 years old have free breakfast, but only if accompanied by an adult. Children from 7 to 12 years old enjoy breakfast with 50% discount, also accompanied by an adult. Children over 12 years old and above are considered adults. The hotel does not offer discounts for children on the set menu.</p>\r\n', 'restaurant, khorezm, palace', 'Khorezm Palace restaurant', 1464773168, 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `go_gallery`
--

CREATE TABLE `go_gallery` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(150) NOT NULL,
  `title_uz` varchar(150) NOT NULL,
  `title_en` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_gallery`
--

INSERT INTO `go_gallery` (`id`, `title_ru`, `title_uz`, `title_en`) VALUES
(1, 'Номера', 'Xonalar', 'Rooms'),
(2, 'Ресторан', 'Restoran', 'Restaurant'),
(3, 'Общие', 'Umumiy', 'General');

-- --------------------------------------------------------

--
-- Структура таблицы `go_gallery_images`
--

CREATE TABLE `go_gallery_images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_uz` text,
  `description_ru` text,
  `description_en` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_gallery_images`
--

INSERT INTO `go_gallery_images` (`id`, `gallery_id`, `image`, `description_uz`, `description_ru`, `description_en`) VALUES
(1, 1, '1463730687_gallery_465.jpg', '', '', ''),
(2, 1, '1463730705_gallery_305.jpg', '', '', ''),
(3, 1, '1463730725_gallery_714.jpg', '', '', ''),
(5, 1, '1463730748_gallery_203.jpg', '', '', ''),
(6, 1, '1463730754_gallery_327.jpg', '', '', ''),
(7, 1, '1463730761_gallery_409.jpg', '', '', ''),
(8, 1, '1463730776_gallery_963.jpg', '', '', ''),
(9, 1, '1463730783_gallery_782.jpg', '', '', ''),
(10, 2, '1463731223_gallery_489.jpg', '', '', ''),
(11, 2, '1463731240_gallery_755.jpg', '', '', ''),
(12, 2, '1463731264_gallery_223.jpg', '', '', ''),
(13, 2, '1463731274_gallery_970.jpg', '', '', ''),
(14, 2, '1463731287_gallery_317.jpg', '', '', ''),
(15, 2, '1463731330_gallery_766.jpg', '', '', ''),
(16, 3, '1463735363_gallery_759.jpg', '', '', ''),
(17, 3, '1463735375_gallery_325.jpg', '', '', ''),
(18, 3, '1463735384_gallery_618.jpg', '', '', ''),
(19, 3, '1463735396_gallery_869.jpg', '', '', ''),
(20, 3, '1463735406_gallery_789.jpg', '', '', ''),
(21, 3, '1463735425_gallery_673.jpg', '', '', ''),
(22, 3, '1463735434_gallery_472.jpg', '', '', ''),
(23, 3, '1463735450_gallery_452.JPG', '', '', ''),
(24, 3, '1463735460_gallery_583.jpg', '', '', ''),
(25, 3, '1463735468_gallery_263.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `go_languages`
--

CREATE TABLE `go_languages` (
  `id` int(11) NOT NULL,
  `lang` varchar(10) NOT NULL,
  `flag` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_languages`
--

INSERT INTO `go_languages` (`id`, `lang`, `flag`) VALUES
(1, 'uz', ''),
(2, 'ru', ''),
(3, 'en', '');

-- --------------------------------------------------------

--
-- Структура таблицы `go_menu`
--

CREATE TABLE `go_menu` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `type` enum('horizontal','vertical','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_menu`
--

INSERT INTO `go_menu` (`id`, `lang_id`, `name`, `type`) VALUES
(1, 1, 'MainMenu Uz', 'horizontal'),
(2, 2, 'mainMenu Ru', 'horizontal'),
(3, 3, 'MainMenu En', 'horizontal');

-- --------------------------------------------------------

--
-- Структура таблицы `go_menuitem`
--

CREATE TABLE `go_menuitem` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_menuitem`
--

INSERT INTO `go_menuitem` (`id`, `menu_id`, `title`, `parent_id`, `url`) VALUES
(79, 1, 'Bosh sahifa', 0, '/'),
(81, 1, 'Biz haqimizda', 0, '/content/biz-haqimizda'),
(82, 1, 'Restoran', 81, '/content/restoran-uz'),
(83, 1, 'Xonalar', 0, '/rooms'),
(84, 1, 'Biz bilan aloqa', 0, '/contact'),
(85, 1, 'Galereya', 81, '/gallery'),
(86, 3, 'Home', 0, '/'),
(87, 3, 'About us', 0, '/content/about-us'),
(88, 3, 'Gallery', 87, '/gallery'),
(89, 3, 'Rooms', 0, '/rooms'),
(90, 1, 'Restaurant', 87, '/content/restaurant'),
(91, 3, 'Contact', 0, '/contact'),
(92, 2, 'Главная', 0, '/'),
(93, 2, 'О нас', 0, '/content/o-nas'),
(94, 2, 'Галерея', 93, '/gallery'),
(95, 2, 'Ресторан', 93, '/content/restoran'),
(96, 2, 'Номера', 0, '/rooms'),
(97, 2, 'Контакты', 0, '/contact'),
(98, 1, 'Xizmatlar', 81, '/services'),
(99, 2, 'Услуги', 93, '/services'),
(100, 3, 'Facilities', 87, '/services'),
(101, 1, 'Video', 81, '/videos'),
(102, 2, 'Видео', 93, '/videos'),
(103, 3, 'Video', 87, '/videos');

-- --------------------------------------------------------

--
-- Структура таблицы `go_room`
--

CREATE TABLE `go_room` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `hash` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `go_room_type`
--

CREATE TABLE `go_room_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `cost` varchar(10) DEFAULT NULL,
  `weight` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_room_type`
--

INSERT INTO `go_room_type` (`id`, `name`, `lang_id`, `hash`, `img`, `description`, `cost`, `weight`) VALUES
(9, 'Yakka', 1, 'yakka', '1463749685_slider_759.jpg', NULL, NULL, 0),
(10, 'Одиночный', 2, 'odin', '1463749685_slider_759.jpg', NULL, NULL, 0),
(11, 'Single', 3, 'single', '1463749685_slider_759.jpg', 'Warm within me, that it might be the mirror of my soul,\n                                        as my soul is the mirror <br> of the infinite God!', NULL, 0),
(12, 'Ikkitalik', 1, 'ikkitalik', '1463749964_slider_617.jpg', NULL, NULL, 0),
(13, 'Двойной', 2, 'double-ru', '1463749964_slider_617.jpg', NULL, NULL, 0),
(14, 'Double', 3, 'double', '1463749964_slider_617.jpg', 'Warm within me, that it might be the mirror of my soul,\n                                        as my soul is the mirror <br> of the infinite God!', NULL, 0),
(15, 'Double single', 3, 'double-single', '1463749964_slider_617_1.jpg', 'Warm within me, that it might be the mirror of my soul,\n                                        as my soul is the mirror <br> of the infinite God!', NULL, 0),
(16, 'Двойной одиночный', 2, 'double-single-ru', '1463749964_slider_617_1.jpg', NULL, NULL, 0),
(17, 'Ikkita birlik', 1, 'ikkita-birlik', '1463749964_slider_617_1.jpg', NULL, NULL, 0),
(18, 'Apartament', 1, 'apartament', '1463750039_slider_893.jpg', NULL, NULL, 1),
(19, 'Апартамент', 2, 'apartment-ru', '1463750039_slider_893.jpg', NULL, NULL, 1),
(20, 'Apartment', 3, 'apartment', '1463750039_slider_893.jpg', 'Warm within me, that it might be the mirror of my soul,\n                                        as my soul is the mirror <br> of the infinite God!', NULL, 1),
(21, 'Triple', 3, 'triple', '1464873823_rt_255.jpg', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `go_services`
--

CREATE TABLE `go_services` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_services`
--

INSERT INTO `go_services` (`id`, `lang_id`, `title`, `description`, `img`, `cost`) VALUES
(1, 1, 'Restoran', 'restoran desc', '1463751849_service_255.jpg', NULL),
(2, 1, 'Lobbi bar', 'Lobbi bar desc uz', '1463751892_service_787.jpg', NULL),
(3, 1, 'Konferensiya zali', 'Конференс зал на 100 персон', '1463751934_service_587.jpg', NULL),
(4, 1, 'Basseyn', 'Basseyn descr', '1463751973_service_330.jpg', NULL),
(5, 1, 'Fitnes markaz', 'Fines markaz descr\r\n', '1463752057_service_841.jpg', NULL),
(6, 1, 'Sauna', 'Sauna', '1463752103_service_976.jpg', NULL),
(7, 1, 'Suvenir do''koni', 'Suvenir do''koni  desc', '1463752214_service_787.jpg', NULL),
(8, 2, 'Ресторан', 'Ресторан', '1463751849_service_255.jpg', NULL),
(9, 2, 'Лобби бар', 'Лобби бар', '1463751892_service_787.jpg', NULL),
(10, 2, 'Конференс зал ', 'Конференс зал ', '1463751934_service_587.jpg', NULL),
(11, 2, 'Бассейн', 'Бассейн', '1463751973_service_330.jpg', NULL),
(12, 2, 'Фитнес центр', 'Фитнес центр', '1463752057_service_841.jpg', NULL),
(13, 2, 'Cауна', 'Cауна', '1463752103_service_976.jpg', NULL),
(14, 2, 'Сувенирный магазин', 'Сувенирный магазин', '1463752214_service_787.jpg', NULL),
(15, 3, 'Restaurant', 'Restaurant', '1463751849_service_255.jpg', NULL),
(16, 3, 'Lobby bar', 'Lobbi bar desc uz', '1463751892_service_787.jpg', NULL),
(17, 3, 'Conference hall', 'Конференс зал на 100 персон', '1463751934_service_587.jpg', NULL),
(18, 3, 'Swimming pool', 'Basseyn descr', '1463751973_service_330.jpg', NULL),
(19, 3, 'Gym', 'Fines markaz descr\r\n', '1463752057_service_841.jpg', NULL),
(20, 3, 'Sauna', 'Sauna', '1463752103_service_976.jpg', NULL),
(21, 3, 'Souvenir magazine', 'Suvenir do''koni  desc', '1463752214_service_787.jpg', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `go_slider`
--

CREATE TABLE `go_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_slider`
--

INSERT INTO `go_slider` (`id`, `img`, `title`, `lang_id`) VALUES
(1, '1463689673_slider_714.jpg', 'Reception', 1),
(2, '1463689813_slider_488.jpg', 'Conference hall', 1),
(3, '1463689834_slider_120.jpg', '', 1),
(4, '1463689852_slider_906.jpg', 'Restaurant', 1),
(5, '1463689868_slider_257.jpg', '', 1),
(6, '1463689879_slider_681.jpg', '', 1),
(7, '1463689887_slider_549.jpg', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `go_user`
--

CREATE TABLE `go_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_user`
--

INSERT INTO `go_user` (`id`, `username`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'admin', 'e52cd90ae1ba454cdb50b52ef96e1367', 'Administrator', 'Khorezm Palace', 'administrator'),
(2, 'bekmurod', '70273afd87f4568b5f5479ad99e70042', 'Bekmurod', 'Xo''jamurodov', 'administrator');

-- --------------------------------------------------------

--
-- Структура таблицы `go_videos`
--

CREATE TABLE `go_videos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `source` text NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `go_videos`
--

INSERT INTO `go_videos` (`id`, `title`, `source`, `created`) VALUES
(1, 'Khorezm Palace, Urgench, Uzbekistan', '<iframe width="420" height="315" src="https://www.youtube.com/embed/jv3wt_g3U8U" frameborder="0" allowfullscreen></iframe>', 1412123122),
(2, 'Khorezm Palace', '<iframe width="420" height="315" src="https://www.youtube.com/embed/BAz9MfkkLuU" frameborder="0" allowfullscreen></iframe>', 143252352);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `go_booking`
--
ALTER TABLE `go_booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_category`
--
ALTER TABLE `go_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Индексы таблицы `go_content`
--
ALTER TABLE `go_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Индексы таблицы `go_gallery`
--
ALTER TABLE `go_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_gallery_images`
--
ALTER TABLE `go_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_languages`
--
ALTER TABLE `go_languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_menu`
--
ALTER TABLE `go_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_menuitem`
--
ALTER TABLE `go_menuitem`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_room`
--
ALTER TABLE `go_room`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_room_type`
--
ALTER TABLE `go_room_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Индексы таблицы `go_services`
--
ALTER TABLE `go_services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_slider`
--
ALTER TABLE `go_slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_user`
--
ALTER TABLE `go_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `go_videos`
--
ALTER TABLE `go_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `go_booking`
--
ALTER TABLE `go_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT для таблицы `go_category`
--
ALTER TABLE `go_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `go_content`
--
ALTER TABLE `go_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `go_gallery`
--
ALTER TABLE `go_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `go_gallery_images`
--
ALTER TABLE `go_gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `go_languages`
--
ALTER TABLE `go_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `go_menu`
--
ALTER TABLE `go_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `go_menuitem`
--
ALTER TABLE `go_menuitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT для таблицы `go_room`
--
ALTER TABLE `go_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `go_room_type`
--
ALTER TABLE `go_room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `go_services`
--
ALTER TABLE `go_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `go_slider`
--
ALTER TABLE `go_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `go_user`
--
ALTER TABLE `go_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `go_videos`
--
ALTER TABLE `go_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
