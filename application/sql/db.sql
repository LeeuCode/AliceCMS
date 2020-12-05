-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2019 at 04:21 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alice`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `category_id`, `content`, `created_at`) VALUES
(1, 'Question Title 1', 2, '&#60;p&#62;&#60;span style=&#34;color: rgb(66, 66, 66);&#34;&#62;Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. &#13;&#10;Aene commodo ligauala eget dolor. Aenean magsfssa. Cum socadaiis nato &#13;&#10;qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur &#13;&#10;rsidicfulus mus. Donefc quamaem felis ets ultriciddedes nec, pefflslen &#13;&#10;tesquwdfe eu, pr etium quis, sem.socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis parturient monts tes, nascqetur rsidicfu lus muss enean &#13;&#10;magsfssa. Cum socadaiis nato qfuae pent ibaus et magnsfis dis partur &#13;&#10;ient mon tes, daf nascqetur rsidicfulus mus. Donefc quamaem felis, &#13;&#10;ultriciddedes nec, pef flslen tesquwdfe eu, pr etium quis, sem. Cum &#13;&#10;socadaiis nato qfuae pent ibaus et magn sfis dis parturient mon tes, &#13;&#10;nascqetur rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis.Socadaiis ient mon tes.&#13;&#10;                                &#60;/span&#62;&#60;/p&#62;', '2018-11-16 11:00:01'),
(2, 'Question Title 2', 2, '&#60;p&#62;&#60;span style=&#34;color: rgb(66, 66, 66);&#34;&#62;Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. &#13;&#10;Aene commodo ligauala eget dolor. Aenean magsfssa. Cum socadaiis nato &#13;&#10;qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur &#13;&#10;rsidicfulus mus. Donefc quamaem felis ets ultriciddedes nec, pefflslen &#13;&#10;tesquwdfe eu, pr etium quis, sem.socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis parturient monts tes, nascqetur rsidicfu lus muss enean &#13;&#10;magsfssa. Cum socadaiis nato qfuae pent ibaus et magnsfis dis partur &#13;&#10;ient mon tes, daf nascqetur rsidicfulus mus. Donefc quamaem felis, &#13;&#10;ultriciddedes nec, pef flslen tesquwdfe eu, pr etium quis, sem. Cum &#13;&#10;socadaiis nato qfuae pent ibaus et magn sfis dis parturient mon tes, &#13;&#10;nascqetur rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis.Socadaiis ient mon tes.&#13;&#10;                                &#60;/span&#62;&#60;/p&#62;', '2018-11-16 11:00:16'),
(3, 'Question Title 3', 2, '&#60;p&#62;&#60;span style=&#34;color: rgb(66, 66, 66);&#34;&#62;Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. &#13;&#10;Aene commodo ligauala eget dolor. Aenean magsfssa. Cum socadaiis nato &#13;&#10;qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur &#13;&#10;rsidicfulus mus. Donefc quamaem felis ets ultriciddedes nec, pefflslen &#13;&#10;tesquwdfe eu, pr etium quis, sem.socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis parturient monts tes, nascqetur rsidicfu lus muss enean &#13;&#10;magsfssa. Cum socadaiis nato qfuae pent ibaus et magnsfis dis partur &#13;&#10;ient mon tes, daf nascqetur rsidicfulus mus. Donefc quamaem felis, &#13;&#10;ultriciddedes nec, pef flslen tesquwdfe eu, pr etium quis, sem. Cum &#13;&#10;socadaiis nato qfuae pent ibaus et magn sfis dis parturient mon tes, &#13;&#10;nascqetur rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis.Socadaiis ient mon tes.&#13;&#10;                                &#60;/span&#62;&#60;/p&#62;', '2018-11-16 12:01:12'),
(4, 'Question Title 1', 1, '&#60;p&#62;&#60;span style=&#34;color: rgb(66, 66, 66);&#34;&#62;Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. &#13;&#10;Aene commodo ligauala eget dolor. Aenean magsfssa. Cum socadaiis nato &#13;&#10;qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur &#13;&#10;rsidicfulus mus. Donefc quamaem felis ets ultriciddedes nec, pefflslen &#13;&#10;tesquwdfe eu, pr etium quis, sem.socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis parturient monts tes, nascqetur rsidicfu lus muss enean &#13;&#10;magsfssa. Cum socadaiis nato qfuae pent ibaus et magnsfis dis partur &#13;&#10;ient mon tes, daf nascqetur rsidicfulus mus. Donefc quamaem felis, &#13;&#10;ultriciddedes nec, pef flslen tesquwdfe eu, pr etium quis, sem. Cum &#13;&#10;socadaiis nato qfuae pent ibaus et magn sfis dis parturient mon tes, &#13;&#10;nascqetur rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis.Socadaiis ient mon tes.&#13;&#10;                                &#60;/span&#62;&#60;/p&#62;', '2018-11-16 11:01:58'),
(5, 'Question Title 2', 1, '&#60;p&#62;&#60;span style=&#34;color: rgb(66, 66, 66);&#34;&#62;Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. &#13;&#10;Aene commodo ligauala eget dolor. Aenean magsfssa. Cum socadaiis nato &#13;&#10;qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur &#13;&#10;rsidicfulus mus. Donefc quamaem felis ets ultriciddedes nec, pefflslen &#13;&#10;tesquwdfe eu, pr etium quis, sem.socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis parturient monts tes, nascqetur rsidicfu lus muss enean &#13;&#10;magsfssa. Cum socadaiis nato qfuae pent ibaus et magnsfis dis partur &#13;&#10;ient mon tes, daf nascqetur rsidicfulus mus. Donefc quamaem felis, &#13;&#10;ultriciddedes nec, pef flslen tesquwdfe eu, pr etium quis, sem. Cum &#13;&#10;socadaiis nato qfuae pent ibaus et magn sfis dis parturient mon tes, &#13;&#10;nascqetur rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis.Socadaiis ient mon tes.&#13;&#10;                                &#60;/span&#62;&#60;/p&#62;', '2018-11-16 11:02:14'),
(6, 'Question Title 3', 1, '&#60;p&#62;&#60;span style=&#34;color: rgb(66, 66, 66);&#34;&#62;Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. &#13;&#10;Aene commodo ligauala eget dolor. Aenean magsfssa. Cum socadaiis nato &#13;&#10;qfuae pent ibaus et magnsfis dis parturient mon tes, nascqetur &#13;&#10;rsidicfulus mus. Donefc quamaem felis ets ultriciddedes nec, pefflslen &#13;&#10;tesquwdfe eu, pr etium quis, sem.socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis parturient monts tes, nascqetur rsidicfu lus muss enean &#13;&#10;magsfssa. Cum socadaiis nato qfuae pent ibaus et magnsfis dis partur &#13;&#10;ient mon tes, daf nascqetur rsidicfulus mus. Donefc quamaem felis, &#13;&#10;ultriciddedes nec, pef flslen tesquwdfe eu, pr etium quis, sem. Cum &#13;&#10;socadaiis nato qfuae pent ibaus et magn sfis dis parturient mon tes, &#13;&#10;nascqetur rsidicfulus mus. Cum socadaiis nato qfuae pent ibaus et &#13;&#10;magnsfis dis.Socadaiis ient mon tes.&#13;&#10;                                &#60;/span&#62;&#60;/p&#62;', '2018-11-16 12:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `category_name`, `created_at`) VALUES
(1, 'General Questions', '2018-10-28 16:59:29'),
(2, 'Technical Questions', '2018-10-28 18:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE `layouts` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `subtitle` longtext NOT NULL,
  `image` longtext NOT NULL,
  `link` longtext NOT NULL,
  `color` text NOT NULL,
  `whyWe_icon` longtext NOT NULL,
  `whyWe_title` longtext NOT NULL,
  `whyWe_content` longtext NOT NULL,
  `counter_icon` text NOT NULL,
  `counter_number` text NOT NULL,
  `counter_title` text NOT NULL,
  `menu_parent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`id`, `title`, `subtitle`, `image`, `link`, `color`, `whyWe_icon`, `whyWe_title`, `whyWe_content`, `counter_icon`, `counter_number`, `counter_title`, `menu_parent`) VALUES
(1, 'a:21:{s:7:\"service\";s:13:\"Our Services \";s:14:\"single_service\";s:13:\"Last Services\";s:23:\"single_service_btnTitle\";s:9:\"Read More\";s:5:\"video\";s:23:\"Let\'s see a quick video\";s:5:\"whyWe\";s:13:\"Why Choose Us\";s:9:\"portfolio\";s:15:\"Latest Projects\";s:16:\"single_portfolio\";s:17:\"Related portfolio\";s:23:\"single_portfolio_getPro\";s:11:\"Get Similer\";s:26:\"single_portfolio_visitSite\";s:10:\"Visit Site\";s:28:\"single_portfolio_Screenshots\";s:11:\"Screenshots\";s:4:\"plan\";s:12:\"Pricing Plan\";s:13:\"btn_pricePlan\";s:7:\"Get Now\";s:4:\"team\";s:16:\"Our Expert Minds\";s:11:\"testimonial\";s:16:\" What People Say\";s:7:\"partner\";s:12:\"Our Partners\";s:6:\"talkUs\";s:42:\"Quickly and Easily Find the right business\";s:9:\"talkUsbtn\";s:10:\"contact us\";s:14:\"footerSection1\";s:8:\"About US\";s:14:\"footerSection2\";s:11:\"Quick Links\";s:14:\"footerSection3\";s:15:\"Recent Services\";s:14:\"footerSection4\";s:10:\"Newsletter\";}', 'a:12:{s:7:\"service\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:14:\"single_service\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:5:\"video\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:5:\"whyWe\";s:98:\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:9:\"portfolio\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:16:\"single_portfolio\";s:98:\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:4:\"plan\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:4:\"team\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:11:\"testimonial\";s:98:\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:7:\"partner\";s:97:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. \";s:14:\"footerSection1\";s:136:\" Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequr magni dolores eos qui ratione voluptatem. \";s:14:\"footerSection4\";s:93:\"Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequr.\";}', 'a:3:{s:5:\"video\";s:39:\"assets/source/vido-background%20(1).jpg\";s:5:\"whyWe\";s:37:\"assets/source/why-choose-us%20(1).jpg\";s:4:\"plan\";s:0:\"\";}', 'a:4:{s:5:\"video\";s:43:\"https://www.youtube.com/watch?v=l-epKcOA7RQ\";s:23:\"single_portfolio_getPro\";s:11:\"#contact-us\";s:13:\"btn_pricePlan\";s:11:\"#contact-us\";s:6:\"talkUs\";s:12:\"#button_link\";}', 'a:2:{s:4:\"plan\";s:17:\"rgba(14,3,3,0.87)\";s:11:\"testimonial\";s:7:\"#0185cf\";}', 'a:3:{i:0;s:13:\"fa fa-diamond\";i:1;s:13:\"fa fa-codepen\";i:2;s:13:\"fa fa-clock-o\";}', 'a:3:{i:0;s:28:\"Experience A Ranking Factor?\";i:1;s:29:\"Global supply Chain Solutions\";i:2;s:28:\"24 Hours - Technical Support\";}', 'a:3:{i:0;s:174:\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. Quasi totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus \";i:1;s:174:\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. Quasi totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus \";i:2;s:174:\" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. Quasi totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus \";}', 'a:4:{i:0;s:11:\"fa fa-cubes\";i:1;s:13:\"fa fa-heart-o\";i:2;s:10:\"fa fa-gift\";i:3;s:13:\"fa fa-smile-o\";}', 'a:4:{i:0;s:3:\"645\";i:1;s:4:\"4567\";i:2;s:4:\"1145\";i:3;s:4:\"1045\";}', 'a:4:{i:0;s:13:\"Projects Done\";i:1;s:17:\"Satisfied Clients\";i:2;s:6:\"Awards\";i:3;s:13:\"Happy Clients\";}', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'admin', 1557319663),
(2, '::1', 'admin', 1557319692),
(3, '::1', 'admin', 1557319702),
(4, '::1', 'root', 1557319711),
(5, '::1', 'admin', 1557320444);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `socail_icon` varchar(255) NOT NULL,
  `socail_link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `image`, `name`, `career`, `socail_icon`, `socail_link`, `created_at`) VALUES
(1, 'assets/source/member.jpg', 'Niamah Hower', 'Co-Founder', 'a:4:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:7:\"youtube\";i:3;s:8:\"linkedin\";}', 'a:4:{i:0;s:9:\"#facebook\";i:1;s:8:\"#twitter\";i:2;s:8:\"#youtube\";i:3;s:9:\"#linkiden\";}', '2018-11-25 21:09:42'),
(2, 'assets/source/member.jpg', 'Jamara Karle', 'Founder', 'a:4:{i:0;s:8:\"facebook\";i:1;s:8:\"linkedin\";i:2;s:9:\"instagram\";i:3;s:6:\"github\";}', 'a:4:{i:0;s:9:\"#facebook\";i:1;s:9:\"#linkiden\";i:2;s:9:\"#instgram\";i:3;s:7:\"#giyhub\";}', '2018-11-25 21:09:56'),
(3, 'assets/source/member.jpg', 'Niamah Hower', 'Designer', 'a:4:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:7:\"youtube\";i:3;s:8:\"linkedin\";}', 'a:4:{i:0;s:9:\"#facebook\";i:1;s:8:\"#twitter\";i:2;s:8:\"#youtube\";i:3;s:9:\"#linkiden\";}', '2018-11-25 21:10:23'),
(4, 'assets/source/member.jpg', 'Finley Walkeror', 'Developer', 'a:4:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:12:\"youtube-play\";i:3;s:11:\"google-plus\";}', 'a:4:{i:0;s:9:\"#facebook\";i:1;s:8:\"#twitter\";i:2;s:8:\"#youtube\";i:3;s:8:\"#google+\";}', '2018-11-25 21:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_type` varchar(100) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_url` text NOT NULL,
  `menu_parent` int(11) DEFAULT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_header` int(11) NOT NULL,
  `menu_one` int(11) NOT NULL,
  `menu_two` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_type`, `menu_name`, `menu_url`, `menu_parent`, `menu_order`, `menu_header`, `menu_one`, `menu_two`, `page_id`) VALUES
(1, 'page', 'SERVICES', 'http://www.facebook.com/', 0, 3, 1, 1, 0, 2),
(2, 'page', 'About', 'http://www.facebook.com/', 0, 2, 1, 1, 0, 1),
(3, 'Standard', 'Home', '/', 0, 1, 1, 1, 0, 0),
(4, 'page', 'Andeoid devlopment', '', 0, 6, 1, 0, 1, 5),
(5, 'page', 'Contact US', 'http://localhost/sodfa/', 0, 5, 1, 1, 0, 4),
(6, 'page', 'Portfolio', '', 0, 4, 1, 1, 0, 3),
(7, 'Standard', ' Analytics', '#', 0, 1, 0, 0, 1, 0),
(8, 'Standard', 'SEO', '#', 0, 2, 0, 0, 1, 0),
(9, 'Standard', 'Mobile', '#', 0, 3, 0, 0, 1, 0),
(10, 'Standard', 'E-commerce', '#', 0, 4, 0, 0, 1, 0),
(11, 'Standard', 'Animation & Motion ', '#', 0, 5, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `banner` text NOT NULL,
  `layout` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `thumbnail` text NOT NULL,
  `content` longtext NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `banner`, `layout`, `title`, `slug`, `thumbnail`, `content`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 'assets/source/banner.jpg', 'About-us', 'About us', 'About-us', 'assets/source/slide.jpg', '<p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam aperiam, eaque ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n', 'about-us,section,services,love', 'test descripttion', '2019-05-05 16:45:59'),
(2, 'assets/source/banner.jpg', 'Services', 'Services', 'services', '', '', '', '', '2018-11-25 20:39:14'),
(3, 'assets/source/banner.jpg', 'Portfolio', 'Portfolio', 'portfolio', '', '', '', '', '2018-11-25 20:43:08'),
(4, 'assets/source/banner.jpg', 'Contact', 'Contact Us', 'contact-us', '', '', '', '', '2018-11-25 20:43:21'),
(5, 'assets/source/banner.jpg', 'faq', 'FAQ', 'faq', '', '', '', '', '2018-11-25 20:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `banner` text NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `banner`, `partner_name`, `partner_link`, `created_at`) VALUES
(1, 'assets/source/company.png', 'Company 1', '#link1', '2018-11-13 21:49:28'),
(2, 'assets/source/company.png', 'Company2', '#link2', '2019-03-21 20:09:13'),
(3, 'assets/source/company.png', 'Company 3', '#link3', '2018-11-13 21:50:05'),
(4, 'assets/source/company.png', 'Company 4', '#link4', '2018-11-13 21:50:19'),
(5, 'assets/source/company.png', 'Company 5', '#link5', '2018-11-13 21:50:53'),
(6, 'assets/source/company.png', 'Company 6', '#link6', '2018-11-13 21:51:12'),
(7, 'assets/source/company.png', 'Company 7', '#link7', '2018-11-15 23:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plan_icon` varchar(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_price` varchar(255) NOT NULL,
  `plan_items` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_icon`, `plan_name`, `plan_price`, `plan_items`, `created_at`) VALUES
(1, 'fa fa-thermometer-0', 'Basic', '$30', 'a:5:{i:0;s:17:\"100 MB Disk Space\";i:1;s:13:\"2 Sub domains\";i:2;s:16:\"5 Email Accounts\";i:3;s:10:\"We support\";i:4;s:21:\"Customer Support 24/7\";}', '2018-11-13 21:36:03'),
(3, 'fa fa-thermometer-4', 'Un Limted', '$100', 'a:5:{i:0;s:17:\"100 MB Disk Space\";i:1;s:13:\"2 Sub domains\";i:2;s:16:\"5 Email Accounts\";i:3;s:10:\"We support\";i:4;s:21:\"Customer Support 24/7\";}', '2018-11-13 21:38:24'),
(4, 'fa fa-globe', 'Standard', '15 $', 'a:5:{i:0;s:22:\"50GB Monthly Bandwidth\";i:1;s:15:\"50GB Disk Space\";i:2;s:17:\"50 Email Accounts\";i:3;s:10:\"15 Domains\";i:4;s:13:\"10 Subdomains\";}', '2018-10-26 22:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `thumbnail` text NOT NULL,
  `portfolio_name` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `link` text NOT NULL,
  `screenshots` longtext NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `thumbnail`, `portfolio_name`, `slug`, `category_id`, `content`, `link`, `screenshots`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 'assets/source/preview-image.jpg', 'SODFA Bussiness Website', 'sodfa-bussiness-website', 1, '&#60;p&#62;&#13;&#10;                        Lorem Ipsum is simply dummy text of the printing&#13;&#10; and typesetting industry. Lorem Ipsum has been the industry&#39;s standard &#13;&#10;dummy text ever since the 1500s, when an unknown printer took a galley &#13;&#10;of type and scrambled it to make a type specimen book. It has survived &#13;&#10;not only five centuries, but also the leap into electronic typesetting, &#13;&#10;remaining essentially unchanged. It was popularised in the 1960s with &#13;&#10;the release of Letraset sheets containing Lorem Ipsum passages, and more&#13;&#10; recently with desktop publishing software like Aldus PageMaker &#13;&#10;including versions of Lorem Ipsum.&#13;&#10;                    &#60;/p&#62;&#13;&#10;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Date&#60;/span&#62; :&#60;/strong&#62; 4 Nov 2018 &#60;/p&#62;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Client&#60;/span&#62; :&#60;/strong&#62; Ahmed Mohamed &#60;/p&#62;', 'http://www.test.com', 'a:3:{i:0;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:1;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:2;s:55:\"admin/assets/source/arnel-hasanovic-375269-unsplash.jpg\";}', 'about-us,section,services,love', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2018-11-25 20:51:54'),
(2, 'assets/source/preview-image.jpg', 'SICE International', 'sice-international', 2, '&#60;p&#62;&#13;&#10;                        Lorem Ipsum is simply dummy text of the printing&#13;&#10; and typesetting industry. Lorem Ipsum has been the industry&#39;s standard &#13;&#10;dummy text ever since the 1500s, when an unknown printer took a galley &#13;&#10;of type and scrambled it to make a type specimen book. It has survived &#13;&#10;not only five centuries, but also the leap into electronic typesetting, &#13;&#10;remaining essentially unchanged. It was popularised in the 1960s with &#13;&#10;the release of Letraset sheets containing Lorem Ipsum passages, and more&#13;&#10; recently with desktop publishing software like Aldus PageMaker &#13;&#10;including versions of Lorem Ipsum.&#13;&#10;                    &#60;/p&#62;&#13;&#10;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Date&#60;/span&#62; :&#60;/strong&#62; 4 Nov 2018 &#60;/p&#62;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Client&#60;/span&#62; :&#60;/strong&#62; Ahmed Mohamed &#60;/p&#62;', 'http://www.test.com', 'a:3:{i:0;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:1;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:2;s:55:\"admin/assets/source/arnel-hasanovic-375269-unsplash.jpg\";}', 'about-us,section,services,love', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2018-11-25 20:52:13'),
(3, 'assets/source/preview-image.jpg', 'SODFA Bussiness Website', 'sodfa-bussiness-website', 2, '&#60;p&#62;&#13;&#10;                        Lorem Ipsum is simply dummy text of the printing&#13;&#10; and typesetting industry. Lorem Ipsum has been the industry&#39;s standard &#13;&#10;dummy text ever since the 1500s, when an unknown printer took a galley &#13;&#10;of type and scrambled it to make a type specimen book. It has survived &#13;&#10;not only five centuries, but also the leap into electronic typesetting, &#13;&#10;remaining essentially unchanged. It was popularised in the 1960s with &#13;&#10;the release of Letraset sheets containing Lorem Ipsum passages, and more&#13;&#10; recently with desktop publishing software like Aldus PageMaker &#13;&#10;including versions of Lorem Ipsum.&#13;&#10;                    &#60;/p&#62;&#13;&#10;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Date&#60;/span&#62; :&#60;/strong&#62; 4 Nov 2018 &#60;/p&#62;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Client&#60;/span&#62; :&#60;/strong&#62; Ahmed Mohamed &#60;/p&#62;', 'http://www.test.com', 'a:3:{i:0;s:31:\"admin/assets/source/slide-3.jpg\";i:1;s:31:\"admin/assets/source/slide-2.jpg\";i:2;s:31:\"admin/assets/source/slide-1.jpg\";}', 'about-us,section,services,love', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2018-11-25 21:58:13'),
(4, 'assets/source/preview-image.jpg', 'SKS International', 'sks-international', 1, '&#60;p&#62;&#13;&#10;                        Lorem Ipsum is simply dummy text of the printing&#13;&#10; and typesetting industry. Lorem Ipsum has been the industry&#39;s standard &#13;&#10;dummy text ever since the 1500s, when an unknown printer took a galley &#13;&#10;of type and scrambled it to make a type specimen book. It has survived &#13;&#10;not only five centuries, but also the leap into electronic typesetting, &#13;&#10;remaining essentially unchanged. It was popularised in the 1960s with &#13;&#10;the release of Letraset sheets containing Lorem Ipsum passages, and more&#13;&#10; recently with desktop publishing software like Aldus PageMaker &#13;&#10;including versions of Lorem Ipsum.&#13;&#10;                    &#60;/p&#62;&#13;&#10;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Date&#60;/span&#62; :&#60;/strong&#62; 4 Nov 2018 &#60;/p&#62;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Client&#60;/span&#62; :&#60;/strong&#62; Ahmed Mohamed &#60;/p&#62;', 'http://www.test.com', 'a:3:{i:0;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:1;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:2;s:55:\"admin/assets/source/arnel-hasanovic-375269-unsplash.jpg\";}', 'about-us,section,services,love', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2018-11-25 21:02:09'),
(5, 'assets/source/preview-image.jpg', 'SKS International', 'sks-international', 2, '&#60;p&#62;&#13;&#10;                        Lorem Ipsum is simply dummy text of the printing&#13;&#10; and typesetting industry. Lorem Ipsum has been the industry&#39;s standard &#13;&#10;dummy text ever since the 1500s, when an unknown printer took a galley &#13;&#10;of type and scrambled it to make a type specimen book. It has survived &#13;&#10;not only five centuries, but also the leap into electronic typesetting, &#13;&#10;remaining essentially unchanged. It was popularised in the 1960s with &#13;&#10;the release of Letraset sheets containing Lorem Ipsum passages, and more&#13;&#10; recently with desktop publishing software like Aldus PageMaker &#13;&#10;including versions of Lorem Ipsum.&#13;&#10;                    &#60;/p&#62;&#13;&#10;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Date&#60;/span&#62; :&#60;/strong&#62; 4 Nov 2018 &#60;/p&#62;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Client&#60;/span&#62; :&#60;/strong&#62; Ahmed Mohamed &#60;/p&#62;', 'http://www.test.com', 'a:3:{i:0;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:1;s:31:\"admin/assets/source/project.jpg\";i:2;s:52:\"admin/assets/source/adult-agency-business-380769.jpg\";}', 'about-us,section,services,love', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2018-11-25 21:02:24'),
(6, 'assets/source/preview-image.jpg', 'Investment Project', 'investment-project', 1, '&#60;p&#62;&#13;&#10;                        Lorem Ipsum is simply dummy text of the printing&#13;&#10; and typesetting industry. Lorem Ipsum has been the industry&#39;s standard &#13;&#10;dummy text ever since the 1500s, when an unknown printer took a galley &#13;&#10;of type and scrambled it to make a type specimen book. It has survived &#13;&#10;not only five centuries, but also the leap into electronic typesetting, &#13;&#10;remaining essentially unchanged. It was popularised in the 1960s with &#13;&#10;the release of Letraset sheets containing Lorem Ipsum passages, and more&#13;&#10; recently with desktop publishing software like Aldus PageMaker &#13;&#10;including versions of Lorem Ipsum.&#13;&#10;                    &#60;/p&#62;&#13;&#10;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Date&#60;/span&#62; :&#60;/strong&#62; 4 Nov 2018 &#60;/p&#62;&#13;&#10;                    &#60;p&#62;&#60;strong&#62;&#60;span style=&#34;color: rgb(57, 132, 198);&#34;&#62;Client&#60;/span&#62; :&#60;/strong&#62; Ahmed Mohamed &#60;/p&#62;', 'http://www.test.com', 'a:3:{i:0;s:41:\"assets/source/snapchat-stock-0963.0.0.jpg\";i:1;s:48:\"admin/assets/source/rawpixel-559744-unsplash.jpg\";i:2;s:55:\"admin/assets/source/arnel-hasanovic-375269-unsplash.jpg\";}', 'about-us,section,services,love', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2018-11-25 20:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `category_name`, `created_at`) VALUES
(1, 'Category 1', '2018-11-15 11:26:58'),
(2, 'Category2', '2019-04-18 21:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `content` longtext NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `image`, `name`, `short_description`, `content`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 'fa fa-line-chart', 'assets/source/preview-image.jpg', 'Media Marketing', 'we help you to grow up your business and solution for your impressive projects.', '<p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat \r\ncupidatat non proident, sunt in culpa officia deserunt mollit anim id \r\nest laborum. Sed ut perspiciatis unde omnis iste natus error sit \r\nvoluptatem accusantium laudantium, totam aperiam, eaque ab illo \r\ninventore veritatis et quasi architecto beatae vitae dicta sunt \r\nexplicabo.</p>\r\n                    <h4>Fetures :-</h4>\r\n                    <ul class=\"list-style-3\"><li>Marketing business plan</li><li>Advice business plan</li><li>Strategic business plan</li><li>Analize business plan</li><li>Consulting business plan</li></ul>\r\n<!--?php\r\n\r\necho \"red\";\r\n\r\n?-->', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2019-03-14 13:34:32'),
(2, 'fa fa-bookmark-o', 'assets/source/preview-image.jpg', 'Detail Report', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:49:15'),
(3, 'fa fa-gg', 'assets/source/preview-image.jpg', 'Investment Plan', 'we help you to grow up your business and solution for your impressive projects.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:49:44'),
(4, 'fa fa-tag', 'assets/source/preview-image.jpg', 'Branding', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:49:57'),
(5, 'fa fa-bolt', 'assets/source/preview-image.jpg', 'Animation & Motion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:50:12'),
(6, 'fa fa-opencart', 'assets/source/preview-image.jpg', 'E-commerce', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:50:34'),
(7, 'fa fa-mobile-phone', 'assets/source/preview-image.jpg', 'Mobile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:50:46'),
(8, 'fa fa-search', 'assets/source/preview-image.jpg', 'SEO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:50:58'),
(9, 'fa fa-bar-chart-o', 'assets/source/preview-image.jpg', 'Analytics', 'we help you to grow up your business and solution for your impressive projects.', '&#60;p&#62;Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat &#13;&#10;cupidatat non proident, sunt in culpa officia deserunt mollit anim id &#13;&#10;est laborum. Sed ut perspiciatis unde omnis iste natus error sit &#13;&#10;voluptatem accusantium laudantium, totam aperiam, eaque ab illo &#13;&#10;inventore veritatis et quasi architecto beatae vitae dicta sunt &#13;&#10;explicabo.&#60;/p&#62;&#13;&#10;                    &#60;h4&#62;Fetures :-&#60;/h4&#62;&#13;&#10;                    &#60;ul class=&#34;list-style-3&#34;&#62;&#60;li&#62;Marketing business plan&#60;/li&#62;&#60;li&#62;Advice business plan&#60;/li&#62;&#60;li&#62;Strategic business plan&#60;/li&#62;&#60;li&#62;Analize business plan&#60;/li&#62;&#60;li&#62;Consulting business plan&#60;/li&#62;&#60;/ul&#62;&#13;&#10;&#60;!--?php&#13;&#10;&#13;&#10;echo &#34;red&#34;;&#13;&#10;&#13;&#10;?--&#62;', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2018-11-25 20:48:25'),
(10, 'fa fa-amazon', 'assets/source/preview-image.jpg', 'Amazon Merch', 'we help you to grow up your business and solution for your impressive projects.', '<p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam aperiam, eaque ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><h4 style=\"color: rgb(0, 0, 0);\">Fetures :-</h4><ul class=\"list-style-3\"><li>Marketing business plan</li><li>Advice business plan</li><li>Strategic business plan</li><li>Analize business plan</li><li>Consulting business plan</li></ul>', 'about-us,section,services,love', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum.', '2019-03-14 13:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `fivicon` text NOT NULL,
  `logo` text NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `map_code` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `socail_icon` text NOT NULL,
  `socail_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `fivicon`, `logo`, `site_name`, `meta_keywords`, `meta_description`, `address`, `map_code`, `phone`, `email`, `socail_icon`, `socail_link`) VALUES
(1, 'assets/source/g5476.png', 'assets/source/alice-logo.png', 'AliceCMS', 'meta keyword', 'test', '1105 Roosevelt Street, CA 94903', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798893698!2d-74.25986762659859!3d40.697670067978756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1522490274976', 'a:2:{s:7:\"primary\";s:16:\"(+098) 7654 3210\";s:9:\"secondary\";s:16:\"(+123) 4567 8901\";}', 'a:2:{s:7:\"primary\";s:17:\"example@gmail.com\";s:9:\"secondary\";s:17:\"example@yahoo.com\";}', 'a:4:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:12:\"youtube-play\";i:3;s:11:\"google-plus\";}', 'a:4:{i:0;s:9:\"#facebook\";i:1;s:8:\"#twitter\";i:2;s:8:\"#youtube\";i:3;s:8:\"#google+\";}');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `subtitle`, `created_at`) VALUES
(1, 'assets/source/slide.jpg', 'What You Do Today For Peoples 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. Quasi totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus', '2019-03-14 11:48:48'),
(2, 'assets/source/slide.jpg', 'We help agencies to define their new business ', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. Quasi totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus ', '2018-11-25 20:33:57'),
(3, 'assets/source/slide.jpg', 'Tranding solution for Inverstors', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis aliquid sed id saepe. Quasi totam, dolorem repellendus cupiditate! Quos eaque, voluptas doloribus', '2018-11-25 20:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `comment`, `created_at`) VALUES
(1, 'assets/source/testimonial%20.jpg', 'Steven Wilson', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum?!', '2018-11-25 21:17:14'),
(2, 'assets/source/testimonial%20.jpg', 'Peter Guptill', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum?!', '2018-11-25 21:17:25'),
(3, 'assets/source/testimonial%20.jpg', 'Testimonialer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum?!', '2019-03-20 20:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$URqR86DSeSpUael1d1uXKOBQ47qKZ8CD/Ykx/kLE0.m8pRfplNF4y', 'admin@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1557320480, 1, 'admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(21, 1, 1),
(22, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
