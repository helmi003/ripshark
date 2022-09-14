-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 06:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ripshark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `last` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `last`, `mail`, `password`) VALUES
('helmi', 'ben romdhane', 'helmi@gmail.com', 'helmi123'),
('tt', 'tt', 'tt@gmail.com', 'tt123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id`, `mail`, `qty`) VALUES
(1, 8, 'test@test.tn', 1),
(2, 2, 'test@test.tn', 1),
(3, 3, 'test@test.tn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `catName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`catName`) VALUES
('bag'),
('board'),
('bs'),
('bw'),
('eqp'),
('hat'),
('ks'),
('other'),
('ss'),
('suit'),
('sunglass'),
('tw');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_name` varchar(50) NOT NULL,
  `club_mail` varchar(100) NOT NULL,
  `club_number` varchar(50) NOT NULL,
  `club_adresse` varchar(255) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_name`, `club_mail`, `club_number`, `club_adresse`, `cat`, `logo`, `description`) VALUES
('BELLE-ILE', 'belleile.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c4.png', 'The Surf Club \"BELLE-ILE\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"BELLE-ILE\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('CLOSER TO THE TRUTH', 'C3T.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c5.png', 'The Surf Club \"C3T\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"C3T\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('DEEP WATER', 'deepwater.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ss', 'http://localhost/php/ripshark/assets/sailsurfing/clubs/c1.png', 'The Surf Club \"DEEP WATER\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"DEEP WATER\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('HURRICANE-STAND', 'hurricanstand.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ss', 'http://localhost/php/ripshark/assets/sailsurfing/clubs/c4.png', 'The Surf Club \"HURRICANE-STAND\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"HURRICANE-STAND\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('IGUINA', 'iguina.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c3.png', 'The Surf Club \"IGUINA\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"IGUINA\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('KITE MOTION', 'kitemotion.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ks', 'http://localhost/php/ripshark/assets/kitesurfing/clubs/c1.png', 'The Surf Club \"KITE MOTION\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"KITE MOTION\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('MERCED KITE', 'mercekite.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ks', 'http://localhost/php/ripshark/assets/kitesurfing/clubs/c6.png', 'The Surf Club \"MERCED KITE\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"MERCED KITE\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('MOONDOGGLES', 'moondoggles.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c6.png', 'The Surf Club \"MOONDOGGLES\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"MOONDOGGLES\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('POHNPEI', 'pohnpei.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br> nahj monsof bey<br> 8011 Nabeul<br> Nabeul. Tunisia', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c1.png', 'The Surf Club \"TOFO\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"TOFO\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('QUEENNSLAND', 'queenisland.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ks', 'http://localhost/php/ripshark/assets/kitesurfing/clubs/c4.png', 'The Surf Club \"QUEENNSLAND\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"QUEENNSLAND\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('REEF RIDERS', 'reefriders.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ss', 'http://localhost/php/ripshark/assets/sailsurfing/clubs/c6.png', 'The Surf Club \"REEF RIDERS\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"REEF RIDERS\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('RENO NEVADA', 'renonevada.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ks', 'http://localhost/php/ripshark/assets/kitesurfing/clubs/c5.png', 'The Surf Club \"RENO NEVADA\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"RENO NEVADA\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('ROGUE VALLEY', 'roguevalley.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ks', 'http://localhost/php/ripshark/assets/kitesurfing/clubs/c2.png', 'The Surf Club \"ROGUE VALLEY\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"ROGUE VALLEY\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('SURF-TECH', 'surftech.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ss', 'http://localhost/php/ripshark/assets/sailsurfing/clubs/c5.png', 'The Surf Club \"SURF-TECH\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"SURF-TECH\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('TIDES & VIBES', 'tidenvibe.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ss', 'http://localhost/php/ripshark/assets/sailsurfing/clubs/c2.png', 'The Surf Club \"TIDES & VIBES\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"TIDES & VIBES\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('TITANIUM', 'titanium.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ss', 'http://localhost/php/ripshark/assets/sailsurfing/clubs/c3.png', 'The Surf Club \"TITANIUM\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"TITANIUM\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('TOFO', 'tofo.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'ks', 'http://localhost/php/ripshark/assets/kitesurfing/clubs/c3.png', 'The Surf Club \"TOFO\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"TOFO\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('SURF & TURF', 'turf.surf@gmail.com', '23 486 582', 'dar chaaben el fehri<br>\nnahj monsof bey<br>\n8011 Nabeul<br>\nNabeul. Tunisia', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c2.png', 'The Surf Club \"SURF & TURF\" is one of the oldest Surf Life Saving Clubs in Tunisia. Established in 1922. it has grown to become one of the premier Surf Lifesaving Clubs in Tunisia.<br>\nThe Surf Club \"SURF & TURF\". rich in club history. has set the solid foundations for what our club is based on today. We live by a set of morals and values outlining a strong community focus and emphasising tradition. respect and Tunisian Beach Culture.Much of the Surf Life Saving Club’s history is displayed throughout the club. As you walk through the Club’s Reception you will see photographs showcasing how the Club House has evolved over the years. the name of champions on the trophies which are proudly displayedin the glass cabinets. old photographs which surround the bar from the early days and framed biographies of many great members who havehelped shape our iconic Club.'),
('yoyo', 'yoyo2.surf@gmail.com', '22489364', 'fh,f,', 'bs', 'http://localhost/php/ripshark/assets/boardsurfing/clubs/c6.png', 'hffhfhf');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `idc` int(11) NOT NULL,
  `coach_name` varchar(50) NOT NULL,
  `coach_ln` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`idc`, `coach_name`, `coach_ln`) VALUES
(1, 'darius', 'draven');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `mail` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id_cp` int(11) NOT NULL,
  `coupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id_cp`, `coupon`) VALUES
(4933, 10),
(6452, 20),
(9873, 30),
(78412, 25);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `id` int(11) NOT NULL,
  `admin_mail` varchar(100) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`id`, `admin_mail`, `action`) VALUES
(1, 'helmi@gmail.com', 'added a new club : yoyo');

-- --------------------------------------------------------

--
-- Table structure for table `my_clubs`
--

CREATE TABLE `my_clubs` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `club_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_clubs`
--

INSERT INTO `my_clubs` (`id`, `mail`, `club_mail`) VALUES
(1, 'helmi.br1999@gmail.com', 'belleile.surf@gmail.com'),
(2, 'helmi.br1999@gmail.com', 'C3T.surf@gmail.com'),
(3, 'helmi.br1999@gmail.com', 'mercekite.surf@gmail.com'),
(4, 'helmi.br1999@gmail.com', 'pohnpei.surf@gmail.com'),
(6, 'test@test.tn', 'renonevada.surf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `description`, `price`, `url`) VALUES
(1, 'Rip Curl Mirage Core', 'bw', 'The Mirage Core boardshort is designed with elastostretch 3 fabric for ultimate comfort and performance.', 22.99, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short1.jpg'),
(2, 'Billabong Fluid Airlite', 'bw', 'The Fluid Airlite boardshort is made with 89 percent recycled polyester and 11 percent elastane. Provides high levels of flexibility, breathability, stability, and comfort.', 19.99, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short2.jpg'),
(3, 'Quiksilver Highline', 'bw', 'The Highline New Wave Pro boardshort features a four-way stretch fabric, water-repellent hydrophobic coating, a 19\' mid-length outseam, and heat welded zip-up pocket.', 24.59, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short3.jpg'),
(4, 'O-Neill Hyperfreak', 'bw', 'The Hyperfreak boardshort features a drawstring closure, a 21-inch outseam, anti-rash stretch hyper thread, and can be put in the washing machine.', 15.49, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short4.jpg'),
(5, 'Hurley Phantom Hyperweave', 'bw', 'The Phantom Hyperweave boardshort features a quick-drying, four-way, long-lasting stretch fabric that lets you surf freely in any conditions. It is machine washable and extremely lightweight.', 22.99, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short5.jpg'),
(6, 'Volcom Deadly Plus Mod', 'bw', 'The Deadly Plus Mod boardshort displays a four-way stretch, welded hems and inseam, and a welded side zip.', 19.99, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short6.jpg'),
(7, 'RVCA Eastern', 'bw', 'The Eastern boardshort balances function and style. Features a water-repellent coating, a drawstring closure, a hook-and-loop closure with drawcord closure at fly.', 24.59, 'http://localhost/php/ripshark/home/Store/images/clothing/bottom wear/short7.jpg'),
(8, 't-shirt', 'tw', 'The t-shirt Core boardshirt is designed with elastostretch 3 fabric for ultimate comfort and performance.', 34.49, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt1.jpg'),
(9, 't-shirt', 'tw', 'The t-shirt Core boardshirt is designed with elastostretch 3 fabric for ultimate comfort and performance.', 22.99, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt2.jpg'),
(10, 't-shirt', 'tw', 'The t-shirt Core boardshirt is designed with elastostretch 3 fabric for ultimate comfort and performance.', 28.99, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt3.jpg'),
(11, 'tank', 'tw', 'The Fluid Airlite tank is made with 89 percent recycled polyester and 11 percent elastane. Provides high levels of flexibility, breathability, stability, and comfort.', 12.99, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt4.jpg'),
(12, 'tank', 'tw', 'The Fluid Airlite tank is made with 89 percent recycled polyester and 11 percent elastane. Provides high levels of flexibility, breathability, stability, and comfort.', 10.49, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt5.jpg'),
(13, 'jacket', 'tw', 'The Hyperfreak jacket features a drawstring closure, a 21-inch outseam, anti-rash stretch hyper thread, and can be put in the washing machine.', 60, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt6.jpg'),
(14, 'jacket', 'tw', 'The Hyperfreak jacket features a drawstring closure, a 21-inch outseam, anti-rash stretch hyper thread, and can be put in the washing machine.', 79.99, 'http://localhost/php/ripshark/home/Store/images/clothing/top wear/shirt7.jpg'),
(15, 'Billabong Wetsuits', 'suit', '2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for Men\nThe 2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for men has all the features you need. The StretchFlight x3 neoprene gives you all of the warmth and flexibility you need. The asymmetrical front zip, glued and blind stitched seams and Flush Lock 2.0 stretch seals work together to prevent water from seeping in for maximum comfort.', 120, 'http://localhost/php/ripshark/home/Store/images/clothing/suits/suit1.jpg'),
(16, 'Body Glove Wetsuit\n', 'suit', '2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for Men\nThe 2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for men has all the features you need. The StretchFlight x3 neoprene gives you all of the warmth and flexibility you need. The asymmetrical front zip, glued and blind stitched seams and Flush Lock 2.0 stretch seals work together to prevent water from seeping in for maximum comfort.', 239.99, 'http://localhost/php/ripshark/home/Store/images/clothing/suits/suit2.jpg'),
(17, 'Hurley Wetsuit\n', 'suit', '2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for Men\nThe 2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for men has all the features you need. The StretchFlight x3 neoprene gives you all of the warmth and flexibility you need. The asymmetrical front zip, glued and blind stitched seams and Flush Lock 2.0 stretch seals work together to prevent water from seeping in for maximum comfort.', 170, 'http://localhost/php/ripshark/home/Store/images/clothing/suits/suit3.jpg'),
(18, 'O Neill Wetsuit\n', 'suit', '2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for Men\nThe 2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for men has all the features you need. The StretchFlight x3 neoprene gives you all of the warmth and flexibility you need. The asymmetrical front zip, glued and blind stitched seams and Flush Lock 2.0 stretch seals work together to prevent water from seeping in for maximum comfort.', 190, 'http://localhost/php/ripshark/home/Store/images/clothing/suits/suit4.jpeg'),
(19, 'Patagonia Wetsuits\n', 'suit', '2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for Men\nThe 2/2mm Highline Ltd. Chest Zip Long Sleeve Springsuit for men has all the features you need. The StretchFlight x3 neoprene gives you all of the warmth and flexibility you need. The asymmetrical front zip, glued and blind stitched seams and Flush Lock 2.0 stretch seals work together to prevent water from seeping in for maximum comfort.', 140, 'http://localhost/php/ripshark/home/Store/images/clothing/suits/suit5.jpg'),
(20, 'lifeguard hat', 'hat', 'A hat is a head covering which is worn for various reasons, including protection against weather conditions, ceremonial reasons such as university graduation, religious reasons, safety, or as a fashion accessory.', 22.49, 'http://localhost/php/ripshark/home/Store/images/clothing/hats/hat1.jpg'),
(21, 'bushmaster hat', 'hat', 'A hat is a head covering which is worn for various reasons, including protection against weather conditions, ceremonial reasons such as university graduation, religious reasons, safety, or as a fashion accessory.', 20, 'http://localhost/php/ripshark/home/Store/images/clothing/hats/hat2.jpg'),
(22, 'Adapted Flexfit Hat', 'hat', 'A hat is a head covering which is worn for various reasons, including protection against weather conditions, ceremonial reasons such as university graduation, religious reasons, safety, or as a fashion accessory.', 30, 'http://localhost/php/ripshark/home/Store/images/clothing/hats/hat3.jpg'),
(23, 'Dazzler Trucker Hat', 'hat', 'A hat is a head covering which is worn for various reasons, including protection against weather conditions, ceremonial reasons such as university graduation, religious reasons, safety, or as a fashion accessory.', 25, 'http://localhost/php/ripshark/home/Store/images/clothing/hats/hat4.jpg'),
(24, 'Dragon Alliance', 'sunglass', 'The \"Dragon Alliance H2O The Jam\" will stay afloat in the ocean, pool and lake. The floatable collection is made with a specially formulated injected frame designed to never losing your shades in the water again.', 50.49, 'http://localhost/php/ripshark/home/Store/images/accesories/sunglasses/sun1.jpg'),
(25, 'Ray-Ban Aviator', 'sunglass', 'The \"Aviator\" is one of the most popular models of all time. ', 79.99, 'http://localhost/php/ripshark/home/Store/images/accesories/sunglasses/sun2.jpg'),
(26, 'Oakley Frogskins', 'sunglass', 'The \"Frogskins\" by Oakley will block those harmful UV rays as you stroll down the beach with your surf gear.', 33.99, 'http://localhost/php/ripshark/home/Store/images/accesories/sunglasses/sun3.jpg'),
(27, 'Von Zipper Elmore', 'sunglass', 'The \"Elmore\" by Von Zipper features a slightly oversized cool and classic frame shape with UV-blocking lenses that will look good in any face.', 45, 'http://localhost/php/ripshark/home/Store/images/accesories/sunglasses/sun4.jpg'),
(28, 'GoPro HD Hero9 Black', 'other', 'The GoPro Hero9 Black is probably the best waterproof digital camera for capturing surf action. You can mount the camera on your surfboard or carry it in your chest and helmet. Its high-resolution 5K video at 30 frames per second, 20MP photos, Wi-Fi and GPS will do the rest. For the first time, it features a front display and lives stream options. Great to impress girls and surf rivals.', 399.99, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other1.jpg'),
(29, 'Cooau 4K 60fps', 'other', 'A great value-for-money action sports camera that shoots at 4K/60fps. Features a 170° super wide-angle fish-eye lens.', 220.59, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other2.jpg'),
(30, 'Ding All Epoxy Repair Kit', 'other', 'A special resin for fixing cracks in epoxy surfboards. The package includes everything you need to quickly repair your stick', 20, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other3.jpg'),
(31, 'Nixon Base Tide Pro', 'other', 'A simplified tide watch with pre-programmed tide information for 550 beaches around the world and sunrise/sunset times.', 50.99, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other4.jpg'),
(32, 'Gooq', 'other', 'Gooq Premium surf ear plugs were designed for surfers, swimmers, and water athletes.They block water, cold air, and dirt bacteria but let sound through.', 3.99, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other5.jpg'),
(33, 'Grassracks Kauai Quad', 'other', 'Made entirely from strong, solid, and beautiful bamboo ply. Holds up to four surfboards.', 12.49, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other6.jpg'),
(34, 'Sticky Bumps', 'other', 'Sticky Bumps offers a broad range of surf wax products, from first traction to ultra-sticky surfboard solutions. It is family-owned and operates since 1972.', 6, 'http://localhost/php/ripshark/home/Store/images/accesories/others/other7.jpg'),
(36, 'backpack surfing premium', 'bag', 'Pack comfortably for your weekend getaways with a large-sized travel surf backpack. With multiple compartments for storage, you will not leave any surf essentials behind.', 150, 'http://localhost/php/ripshark/home/Store/images/accesories/bags/bag2.jpg'),
(37, 'Dakine John Florence Mission Surfboard Bag, Carbon', 'bag', 'JJF Signature design\n420D Nylon Ripstop Top for Lightweight durability\nHeat reflecting energy shield bottom\nStash Pocket with YKK PU Coated zipper to keep valuables protected from rain and splash', 144.95, 'http://localhost/php/ripshark/home/Store/images/accesories/bags/bag3.jpg'),
(38, 'Abahub Premium Surfboard Travel Bag', 'bag', 'Comfortable to Carry: 1.5\" wide padded adjustable shoulder strap, durable ergonomic plastic handle, with ugraded strap buckle and double stitching all around.', 130, 'http://localhost/php/ripshark/home/Store/images/accesories/bags/bag4.jpg'),
(39, 'wonitago Surfboard Bag', 'bag', ' This surfboard cover is the perfect choice for your surfboard. What you get is not only the high-quality professional products of NEOLIFE, but also the after-sales service that makes you feel at ease. We will provide you with 24-hour professional services', 142.99, 'http://localhost/php/ripshark/home/Store/images/accesories/bags/bag5.jpg'),
(40, 'board south bay', 'board', 'Features three stringers, waterproof EPS foam at the core, a reinforced HDPE double concave hull, and a removable thruster fin setup.', 90, 'http://localhost/php/ripshark/home/Store/images/boardeqp/boards/board1.jpg'),
(42, 'board odysea', 'board', 'With its thruster setup and extra floating features (98 liters), it will quickly transform a beginner surfer into an intermediate wave rider. A great option for young surfers wishing to maximize wave cont.', 119.99, 'http://localhost/php/ripshark/home/Store/images/boardeqp/boards/board3.jpg'),
(43, 'board thunder wave', 'board', 'A 10 inflatable stand-up paddleboard with a wide design, high maneuverability, and a non-slip soft top deck.\nThe kit includes a convenient storage bag, a coiled ankle cuff safety leash, oar, and a manual air pump.', 284.99, 'http://localhost/php/ripshark/home/Store/images/boardeqp/boards/board4.jpg'),
(44, 'board roc explorer', 'board', 'A sturdy, lightweight SUP that can be used in the ocean, rivers, and freshwater lakes.\nThe package includes the board, a collapsible aluminum paddle, a hand pump, a safety leash, and a waterproof bag.', 355.5, 'http://localhost/php/ripshark/home/Store/images/boardeqp/boards/board5.jpg'),
(45, 'board drift', 'board', 'A 10,8 inflatable stand-up paddleboard with a wide design, high maneuverability, and a non-slip soft top deck.\nThe kit includes a convenient storage bag, a coiled ankle cuff safety leash, and a manual air pump', 299.99, 'http://localhost/php/ripshark/home/Store/images/boardeqp/boards/board6.jpg'),
(46, 'aternee 4pcs/Set Fiber Glass Kiteboarding Fin Fly', 'eqp', 'Great accessories for kite surfer better and flexible board control\nMade of high quality 40% nylon and 30% fiber glass- high strength and durable', 12, 'http://localhost/php/ripshark/home/Store/images/boardeqp/equipement/eqp1.jpg'),
(47, 'COPOZZ Diving Socks', 'eqp', 'Premium water socks with anti-slipping rubber grips soles, Perfect for varieties water sports like paddle boarding, kite boarding, wakeboarding, kayaking and more. The elastic ankle straps can be adjusted to fit any ankle size and keep the socks on.', 9, 'http://localhost/php/ripshark/home/Store/images/boardeqp/equipement/eqp2.jpg'),
(48, '2mm Highline Surf Hat', 'eqp', 'Protect yourself from the harshest conditions with the 2mm Highline Surf Hood. Glued and blind stitched seams mean minimal water entry. The ultra-light and flexible StretchFlight x3 neoprene offer top-level comfort.', 24.95, 'http://localhost/php/ripshark/home/Store/images/boardeqp/equipement/eqp3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prod_detail`
--

CREATE TABLE `prod_detail` (
  `id_prod` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod_detail`
--

INSERT INTO `prod_detail` (`id_prod`, `id`, `stock`, `sold`) VALUES
(1, 1, 10, 20),
(2, 2, 20, 0),
(3, 3, 12, 30),
(4, 4, 16, 0),
(5, 5, 9, 10),
(6, 6, 8, 0),
(7, 7, 18, 30),
(8, 8, 14, 10),
(9, 9, 14, 20),
(10, 10, 17, 20),
(11, 11, 10, 0),
(12, 12, 20, 30),
(13, 13, 12, 0),
(14, 14, 16, 10),
(15, 15, 9, 0),
(16, 16, 8, 30),
(17, 17, 18, 10),
(18, 18, 14, 20),
(19, 19, 14, 20),
(20, 20, 17, 0),
(21, 21, 10, 30),
(22, 22, 20, 0),
(23, 23, 12, 10),
(24, 24, 16, 0),
(25, 25, 9, 30),
(26, 26, 8, 10),
(27, 27, 18, 20),
(28, 28, 14, 20),
(29, 29, 14, 0),
(30, 30, 17, 30),
(31, 31, 10, 0),
(32, 32, 20, 10),
(33, 33, 12, 0),
(34, 34, 16, 30),
(36, 36, 8, 20),
(37, 37, 18, 20),
(38, 38, 14, 0),
(39, 39, 14, 30),
(40, 40, 17, 0),
(42, 42, 10, 10),
(43, 43, 20, 0),
(44, 44, 12, 30),
(45, 45, 16, 10),
(46, 46, 9, 20),
(47, 47, 8, 30),
(48, 48, 18, 10);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `ids` int(11) NOT NULL,
  `club_mail` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `idc` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `start` varchar(50) NOT NULL,
  `nbheures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`ids`, `club_mail`, `mail`, `idc`, `date`, `start`, `nbheures`) VALUES
(1, 'belleile.surf@gmail.com', 'helmi.br1999@gmail.com', 1, '2021-05-20', '4:30 pm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `gender` char(1) NOT NULL,
  `pdp` varchar(100) NOT NULL,
  `id_cp` int(11) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `last_name`, `mail`, `password`, `adresse`, `gender`, `pdp`, `id_cp`, `shipping`) VALUES
('ahmed', 'tayssir', 'ahmedtayssir@gmail.com', 'ahmed123', 'nabeul dar chaaben', 'm', '', NULL, NULL),
('saif', 'din', 'fqfq', 'test', 'ffafz', 'm', '', NULL, NULL),
('hamza', 'aouinti', 'hamzaaouinti@gmail.com', 'hamza123', 'dar chaaben nabeul', 'm', '', NULL, NULL),
('helmi', 'ben romdhane', 'helmi.br1999@gmail.com', 'helmi123', 'dar chaaben\r\n8011\r\nnabeul, tunisia', 'm', 'helmi.jpg', 4933, NULL),
('test2', 'test2', 'test2@test2.com', 'test123', '', '', '', NULL, NULL),
('test', 'test', 'test@test.tn', 'test123*', 'nabeul', 'm', '', NULL, NULL),
('youssef', 'bou guerba', 'youssefbouguerba@gmail.com', 'youssef123', 'jerjis', 'm', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id_wl` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`id_wl`, `id`, `mail`) VALUES
(1, 8, 'test@test.tn'),
(2, 2, 'test@test.tn'),
(3, 3, 'test@test.tn'),
(4, 1, 'test@test.tn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id` (`id`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`catName`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_mail`),
  ADD KEY `cat` (`cat`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`msg`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id_cp`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_clubs`
--
ALTER TABLE `my_clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`mail`),
  ADD KEY `club_mail` (`club_mail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `prod_detail`
--
ALTER TABLE `prod_detail`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `club_mail` (`club_mail`),
  ADD KEY `mail` (`mail`),
  ADD KEY `idc` (`idc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail`),
  ADD KEY `id_cp` (`id_cp`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id_wl`),
  ADD KEY `id` (`id`),
  ADD KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`);

--
-- Constraints for table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `categorie` (`catName`);

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`);

--
-- Constraints for table `my_clubs`
--
ALTER TABLE `my_clubs`
  ADD CONSTRAINT `my_clubs_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`),
  ADD CONSTRAINT `my_clubs_ibfk_2` FOREIGN KEY (`club_mail`) REFERENCES `club` (`club_mail`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type`) REFERENCES `categorie` (`catName`);

--
-- Constraints for table `prod_detail`
--
ALTER TABLE `prod_detail`
  ADD CONSTRAINT `prod_detail_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`club_mail`) REFERENCES `club` (`club_mail`),
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`),
  ADD CONSTRAINT `session_ibfk_3` FOREIGN KEY (`idc`) REFERENCES `coach` (`idc`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_cp`) REFERENCES `coupon` (`id_cp`);

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `wish_list_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `user` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
