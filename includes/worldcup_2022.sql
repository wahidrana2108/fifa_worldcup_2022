-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 06:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldcup_2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'WAHID', 'admin@gmail.com', '$2y$10$yr3bcP4J/wncTZoyPLDvo.ocwD28NJOjmtJydv.Cf23kYcN.kzLmq', 'admin.png', 'Bangladesh', 'Nothing', '01770888280', 'Entry');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(10) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` longtext NOT NULL,
  `blog_img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_desc`, `blog_img`, `date`) VALUES
(1, 'Ronaldo explains Al-Nassr move', 'The ex-Real Madrid and Manchester United superstar wants to inspire a new generation of fans in Saudi Arabia.\n\nDespite no top club wanting to sign the five-time Ballon d\'Or winner, Ronaldo was left with no choice but to join Al-Nassr.\n\nIt was only last season that CR7 was posting 18 goals in the Premier League for United, but he left the Manchester club for a second time after a difficult start to his second season.\n\nBut, despite the ending in England, Ronaldo revealed he feels he\'s done everything he\'s set out to do in Europe.\n\n\"I am fortunate that I have won everything I set out to win in European football,\" the five-time Champions League winner explained upon his announcement. \"I feel now that this is the right moment to share my experience in Asia.\"\n\nRonaldo also added: \"Al-Nassr\'s vision is very inspiring and impressive. I look forward to a different league experience in a different country. I am excited to join my team-mates as soon as possible.\"\n\nThe move stands as the highest profile transfer for the Saudi Arabian league and, according to Saudi Arabia\'s sports minister Prince Abdulaziz bin Turki Al-Faisal, Ronaldo could soon be joined by other big names.\n\n\"Happy with the presence of one of the best players in the world to start his new career in Saudi Arabia,\" he wrote. \"Welcome, Cristiano, to the kingdom, and we will support the rest of our clubs for qualitative deals with international stars soon.', 'Screenshot 2023-01-13 232855.png', '2023-01-14 13:33:17'),
(2, 'Argentina midfielder given huge welcome back at Brighton', 'On Monday, Mac Allister returned to Brighton for the first time since the tournament and told Sky Sports he was \"in no rush\" to move elsewhere.\nAlthough he signed a new three-year deal with the Seagulls in October – with the option to extend it by a further year – Mac Allister has been heavily linked with a move away from the Amex Stadium.\nSerie A giants Juventus are reportedly favourites to secure his services, while Premier League trio Liverpool, Arsenal and Chelsea have also been touted as potential destinations.Although he signed a new three-year deal with the Seagulls in October – with the option to extend it by a further year – Mac Allister has been heavily linked with a move away from the Amex Stadium.\nSerie A giants Juventus are reportedly favourites to secure his services, while Premier League trio Liverpool, Arsenal and Chelsea have also been touted as potential destinations.\nAlthough he signed a new three-year deal with the Seagulls in October – with the option to extend it by a further year – Mac Allister has been heavily linked with a move away from the Amex Stadium.\nSerie A giants Juventus are reportedly favourites to secure his services, while Premier League trio Liverpool, Arsenal and Chelsea have also been touted as potential destinations.\n\n', 'Screenshot 2023-01-13 233523.png', '2023-01-14 13:36:02'),
(3, ' Pogba closing in on making second debut for Juventus', ' Pogba closing in on making second debut for Juventus.\n\nThe winner will take home the competition’s top prize of $42 million, while the runner-up will walk away with $30 million.Therefore, the two competing teams would receive an additional $12 million if they won the final. For this World Cup, FIFA allocated $440 million in prize money, with teams earning progressively larger amounts according on how far they proceeded in the competition.\nthe 2018 FIFA World Cup champions FIFA World cup price Money has never distributed as much money to a championship as it did this year, surpassing France’s $38 million prize money from four years prior. From $8 million in 2002 to $20 million in 2006, the prize money given to the winning team increased by $4 million, not even the largest increase yet.\n\nDue to increased tournament revenue that ensures that such benefits have been given to winning teams, the FIFA World Cup Price Money winner currently receives an overall total that is more than five times as much as it was twenty years ago. We have provide FIFA Money Price List so scroll a little down and check.\n\nFIFA World Cup 2022 Price Money All  team that made it to the quarterfinals will receive $17 million: Brazil, the Netherlands, Portugal, and England. Each of the following nations will receive $13 million for reaching the round of 16: the United States, Senegal, Australia, Poland, Spain, Japan, Switzerland, and South Korea.Qatar, Iran, Mexico, Saudi Arabia, Denmark,Ecuador, Wales Tunisia,  Germany,Canada, Belgium,Costa Rica, Serbia, Cameroon, Ghana, and Uruguay will also receive $9 million each for their participation in the group stages. FIFA has also distributed World Cup Price Money per player accordingly. ', 'Screenshot 2023-01-14 001715.png', '2023-01-14 13:32:19'),
(4, 'After winning the FIFA World Cup', 'The winner will take home the competition’s top prize of $42 million, while the runner-up will walk away with $30 million.Therefore, the two competing teams would receive an additional $12 million if they won the final. For this World Cup, FIFA allocated $440 million in prize money, with teams earning progressively larger amounts according on how far they proceeded in the competition.\nthe 2018 FIFA World Cup champions FIFA World cup price Money has never distributed as much money to a championship as it did this year, surpassing France’s $38 million prize money from four years prior. From $8 million in 2002 to $20 million in 2006, the prize money given to the winning team increased by $4 million, not even the largest increase yet.\n\nDue to increased tournament revenue that ensures that such benefits have been given to winning teams, the FIFA World Cup Price Money winner currently receives an overall total that is more than five times as much as it was twenty years ago. We have provide FIFA Money Price List so scroll a little down and check.\n\nFIFA World Cup 2022 Price Money All  team that made it to the quarterfinals will receive $17 million: Brazil, the Netherlands, Portugal, and England. Each of the following nations will receive $13 million for reaching the round of 16: the United States, Senegal, Australia, Poland, Spain, Japan, Switzerland, and South Korea.Qatar, Iran, Mexico, Saudi Arabia, Denmark,Ecuador, Wales Tunisia,  Germany,Canada, Belgium,Costa Rica, Serbia, Cameroon, Ghana, and Uruguay will also receive $9 million each for their participation in the group stages. FIFA has also distributed World Cup Price Money per player accordingly. ', 'Screenshot 2023-01-14 002022.png', '2023-01-14 13:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `date`) VALUES
(1, 'Gola Keeper', '2023-01-02 04:33:36'),
(2, 'Striker', '2023-01-02 04:34:13'),
(3, 'Midfilder', '2023-01-02 04:34:54'),
(4, 'Defender', '2023-01-02 04:35:08'),
(5, 'Forward', '2023-01-02 04:35:21'),
(6, 'Extra ', '2023-01-02 04:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `con_id` int(10) NOT NULL,
  `con_name` varchar(255) NOT NULL,
  `con_cup` int(10) NOT NULL,
  `con_point` int(11) NOT NULL,
  `con_img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`con_id`, `con_name`, `con_cup`, `con_point`, `con_img`, `date`) VALUES
(1, 'Argentina', 3, 1700, '52.png', '2023-01-13 09:39:00'),
(2, 'Brasil', 5, 2000, '54.png', '2023-01-13 09:39:55'),
(3, 'Portugal', 0, 500, '38.png', '2023-01-13 09:43:09'),
(4, 'Spain', 1, 600, '45.png', '2023-01-13 09:46:42'),
(5, 'Germany', 4, 1900, '21.png', '2023-01-13 09:47:40'),
(6, 'Canada', 0, 400, '70.png', '2023-01-13 09:48:39'),
(7, 'USA', 0, 300, '95.png', '2023-01-13 09:49:26'),
(8, 'England', 1, 1500, '14.png', '2023-01-13 09:50:32'),
(9, 'France', 2, 1500, '18.png', '2023-01-13 09:52:24'),
(10, 'Japan', 0, 600, '163.png', '2023-01-13 09:53:34'),
(11, 'Qatar', 0, 200, '182.png', '2023-01-13 09:54:34'),
(12, 'Netherlands', 0, 700, '31.png', '2023-01-13 09:56:27'),
(13, 'Mexico', 0, 800, '83.png', '2023-01-13 09:58:17'),
(14, 'Korea Republic', 0, 1000, '167.png', '2023-01-13 09:59:10'),
(15, 'Belgium', 0, 1300, '7.png', '2023-01-13 10:01:09'),
(16, 'Ecuador', 0, 200, '57.png', '2023-01-13 10:07:26'),
(17, 'Australia', 0, 600, '195.png', '2023-01-13 10:10:06'),
(18, 'Switzerland', 0, 700, '47.png', '2023-01-13 10:11:09'),
(19, 'Uruguay', 0, 600, '60.png', '2023-01-13 10:14:42'),
(20, 'Tunisia', 0, 505, '145.png', '2023-01-13 10:16:10'),
(21, 'Croatia', 0, 1000, '58.png', '2023-01-13 12:48:49'),
(22, 'Ghana', 0, 500, '117.png', '2023-01-13 13:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `sub_id` int(1) NOT NULL DEFAULT 1,
  `token` varchar(20) NOT NULL,
  `confirmation` int(1) NOT NULL DEFAULT 0,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_contact`, `customer_image`, `sub_id`, `token`, `confirmation`, `customer_ip`) VALUES
(2, 'Wahid Rana', 'wahidzamanrana@gmail.com', '$2y$10$yr3bcP4J/wncTZoyPLDvo.ocwD28NJOjmtJydv.Cf23kYcN.kzLmq', 'Bangladesh', '01770888280', 'wahid.jpg', 2, '', 1, '::1'),
(6, 'Jhon Kartjsdk', 'wahidrana00000@gmail.com', '$2y$10$L74f2OA4x7RsN5Xj9xOpjOn.mPQ.MBYkzH8IzpQfDnfllvCkz5f2q', 'Bangladesh', '01770888280', '45186.png', 1, '', 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `dev_id` int(10) NOT NULL,
  `dev_name` varchar(255) NOT NULL,
  `dev_img` text NOT NULL,
  `dev_cat` varchar(255) NOT NULL,
  `dev_bio` longtext NOT NULL,
  `dev_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`dev_id`, `dev_name`, `dev_img`, `dev_cat`, `dev_bio`, `dev_cat_id`) VALUES
(1, 'Nishat Tasnim Niloy', 'supervisor.jpg', 'Supervisor', 'CONTINUOUS DEVELOPMENT is better than DELAYED PERFECTION.', 1),
(2, 'Md. Wahiduzzaman', 'wahid.jpg', '2019-2-60-048', 'I am passionate Full Stack Web Developer from Bangladesh\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_desc` longtext NOT NULL,
  `news_img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `news_img`, `date`) VALUES
(1, 'Benfica holding firm as giants chase Fernandez', 'The Benfica midfielder has attracted a lot of interest across Europe after a stellar FIFA World Cup campaign.The Argentina star emerged as a major target at Stamford Bridge following a successful World Cup, during which Fernandez won the coveted Young Player of the Tournament Award.\n\nA deal, however, always looked difficult to do.\n\nThe Lisbon giants had frequently expressed their desire to keep the 21-year-old and publicly criticised Chelsea’s conduct.\n\nWhile Fernandez was thought to have a release clause worth around £112m in his contract, Standard Sport understands Chelsea were aiming to pay that over a series of instalments.alks duly stalled and manager Roger Schmidt claimed the matter was closed, though the interest from west London continued.\n\nStill, Fernandez himself has now appeared to confirm he will remain in the Portuguese capital.', 'newxs1.png', '2023-01-14 13:41:58'),
(2, 'Scaloni: Messi can play at 2026 World Cup', 'Argentina  Lionel Messi \"the door will always be open\" for the Argentina captain to play in the 2026 FIFA World Cup™.  Messi last month got his hands on the trophy he so desperately craved, lifting the World Cup in Qatar following victory over France in a thrilling final.  The superstar attacker scored twice in a 3-3 draw to take his tally for the tournament to seven and was also on target in a penalty shootout as Argentina dethroned Les Bleus.  Messi, 35, also became the first man to win two Golden Balls as he inspired his team in what he said would be his last World Cup.Lionel Scaloni has told Lionel Messi \"the door will always be open\" for the Argentina captain to play in the 2026 FIFA World Cup™.\n\nMessi last month got his hands on the trophy he so desperately craved, lifting the World Cup in Qatar following victory over France in a thrilling final.\n\nThe superstar attacker scored twice in a 3-3 draw to take his tally for the tournament to seven and was also on target in a penalty shootout as Argentina dethroned Les Bleus.\n\nMessi, 35, also became the first man to win two Golden Balls as he inspired his team in what he said would be his last World Cup.\n\nThe genius no. 10 will be nearing 40 when Argentina look to defend their title in a tournament that will be staged in the United States, Canada and Mexico in 2026, but head coach Scaloni has not given up hope of being able to call upon the forward.\n\n\"I think Messi can get to the next World Cup,\" he said. \"It will depend a lot on what he wants, on whether he feels good.\n\n\"The door will always be open. He is happy on the pitch and it would be very nice for us.\"\nScaloni added Argentina\'s Qatar 2022™ triumph was not essential for Messi to ensure his legacy as an all-time great.\n\n\"I don\'t think it [winning the World Cup] was necessary for him be one of the greatest or the greatest\" he continued. \"You always ask for more. I don\'t know what else you are going to ask for now.\n\n\"I am happy for him and for the country. For the joy we gave him and we gave ourselves. The days we spent in Argentina were full of euphoria and affection. It was worth it.\"', '22.png', '2023-01-14 13:40:35'),
(3, 'France skipper Lloris announces international retirement', 'Hugo Lloris has announced his retirement from the France set-up having made a record 145 appearances for his country.Tottenham Hotspur goalkeeper Hugo Lloris has announced his international retirement at the age of 36. A FIFA World Cup winner™ in 2018, Lloris leaves the international stage having made a record number of appearances for France, 145 in all.\n\n\"I\'ve decided to end my international career, with the feeling of having given everything,\" he said as he confirmed his decision in an interview with L\'Équipe.\n\n\"There comes a time when you have to know how to hand over,\" he said, before referencing deputy Mike Maignan, the AC Milan goalkeeper.\n\n\"I don\'t want to own [the position]. I\'ve always said and repeated that the France team doesn\'t belong to anyone, and we all have to make sure that this is the case, me first.\"I think that there remains a team ready to continue, and there is also a goalkeeper who is ready,\" added Lloris.\n\nLloris made his France debut in November 2008, keeping a clean sheet in a 0-0 draw with Uruguay. That came during his first season as an Olympique Lyonnais player following a summer transfer from OGC Nice, his home-town club.﻿\n\nHe was named France captain in 2010 by Laurent Blanc, then national-team coach, and wore the armband on 121 occasions, including in three major finals – the UEFA EURO 2016 defeat by Portugal, the 2018 World Cup win over Croatia and December\'s loss to Argentina at Qatar 2022.\n\nIn 2021 Lloris lifted a second senior trophy with France when they beat Spain in the UEFA Nations League final in Milan.﻿\n\nDuring the World Cup in Qatar he surpassed Lilian Thuram\'s record of 142 France appearances and he retires having kept eight World Cup clean sheets, behind only countryman Fabien Barthez and Peter Shilton (both 10) since 1966.\n\nNational coach Didier Deschamps responded to the news of his retirement by describing him as a \"a very great servant of the France team\".', 'Screenshot 2023-01-13 231730.png', '2023-01-14 13:39:01'),
(4, 'Argentina won their 3rd Wordcup', 'Qatar 2022™ winner Lisandro Martinez has revealed his immense pride at following in the footsteps of Argentina’s world champion 1978 and 1986 teams, as he described his emotions during the “crazy” celebrations in his homeland.\nArgentina won a nail-biting World Cup final after a penalty shootout against defending champions France on Sunday, handing the South Americans their third World Cup title and their first since 1986. La Albiceleste beat France 4-2 on penalties at the Lusail Stadium after the thrilling match ended 3-3 after extra time. FRANCE 24 looks back at the highlights of the game that saw Les Bleus\' dreams of two consecutive World Cup titles dashed. \n\nJean-Emile Jammine reports on the day\'s action with ESPN journalist Ed Dove, Eurosport journalist Ruben Slagter, FRANCE 24\'s Buenos Aires correspondent Declan McGarvey and FRANCE 24\'s team in Doha, Simon Harding and Selina Sykes. \n\nProduced by Jean-Emile Jammine, Josephine Joly, Arno Pedram and Clemence Waller.Argentina won a nail-biting World Cup final after a penalty shootout against defending champions France on Sunday, handing the South Americans their third World Cup title and their first since 1986. La Albiceleste beat France 4-2 on penalties at the Lusail Stadium after the thrilling match ended 3-3 after extra time. FRANCE 24 looks back at the highlights of the game that saw Les Bleus\' dreams of two consecutive World Cup titles dashed. \n\nJean-Emile Jammine reports on the day\'s action with ESPN journalist Ed Dove, Eurosport journalist Ruben Slagter, FRANCE 24\'s Buenos Aires correspondent Declan McGarvey and FRANCE 24\'s team in Doha, Simon Harding and Selina Sykes. \n\nProduced by Jean-Emile Jammine, Josephine Joly, Arno Pedram and Clemence Waller.', 'Screenshot 2023-01-13 232138.png', '2023-01-14 13:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(10) NOT NULL,
  `con_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `player_age` int(10) NOT NULL,
  `player_height` int(10) NOT NULL,
  `player_weight` int(10) NOT NULL,
  `player_rating` int(10) NOT NULL,
  `player_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `con_id`, `cat_id`, `date`, `player_name`, `player_age`, `player_height`, `player_weight`, `player_rating`, `player_img`) VALUES
(1, 2, 5, '0000-00-00', 'Neimar Jr', 30, 156, 60, 1500, '190871.png'),
(2, 1, 5, '0000-00-00', 'Lionel Messi ', 35, 165, 70, 2000, '158023.png'),
(3, 4, 4, '2023-01-13', 'Sergio Ramos', 35, 170, 80, 1600, '155862.png'),
(4, 9, 5, '2023-01-13', 'Kylian Mbappe', 22, 150, 70, 1400, '231747.png'),
(5, 2, 5, '2023-01-13', 'Richarlison', 25, 170, 65, 1300, '231943.png'),
(6, 9, 1, '0000-00-00', 'Hugo Lloris', 27, 180, 65, 1200, '178509.png'),
(7, 3, 5, '2023-01-13', 'cristiano ronaldo', 37, 180, 80, 1800, '20801.png'),
(8, 2, 3, '0000-00-00', 'Thiago Silva', 32, 165, 65, 1400, '164240.png'),
(9, 1, 1, '2023-01-13', 'Emi Martinez', 33, 190, 90, 1800, '202811.png'),
(10, 3, 3, '2023-01-13', 'Pepe', 35, 150, 50, 1200, '120533.png'),
(11, 1, 2, '2023-01-13', 'D. Maria', 37, 160, 60, 1700, '183898.png'),
(12, 21, 5, '0000-00-00', 'Croatia', 35, 150, 50, 1600, '177003.png'),
(13, 2, 4, '2023-01-13', 'Casemiro', 31, 150, 70, 1100, '200145.png'),
(14, 22, 5, '2023-01-13', 'Sadio Mane ', 33, 160, 60, 1500, '264816.png'),
(15, 3, 3, '0000-00-00', 'Bruno Fernandes ', 31, 160, 164, 1200, '212198.png'),
(16, 19, 2, '2023-01-13', 'Luis Suarez', 36, 165, 65, 1750, '176580.png'),
(17, 2, 1, '0000-00-00', 'Alison Baker ', 33, 180, 80, 1200, '212831.png'),
(18, 9, 3, '2023-01-13', 'Karim Benzema', 33, 180, 85, 1600, '165153.png'),
(19, 2, 2, '2023-01-13', 'Vinicius Junior ', 24, 160, 65, 1300, '238794.png'),
(20, 5, 3, '2023-01-13', 'Thomas Müller', 37, 165, 65, 1200, '189596.png'),
(21, 6, 3, '2023-01-13', 'Ismail Kone', 33, 177, 77, 400, '260653.png'),
(22, 1, 3, '2023-01-13', 'De Poul', 29, 167, 70, 1700, '212616.png'),
(23, 1, 2, '2023-01-13', ' Enzo Fernandez', 27, 145, 70, 1700, '224334.png'),
(24, 1, 4, '0000-00-00', 'Nicolas Otamendi', 33, 145, 70, 1500, '143076.png'),
(25, 1, 3, '2023-01-13', 'Leandro Paredes', 23, 170, 70, 1330, '207439.png'),
(26, 1, 2, '2023-01-13', 'Enzo Fernández', 25, 156, 66, 1800, '247090.png'),
(27, 1, 3, '2023-01-13', 'Alexis Mac Allister', 24, 156, 60, 1560, '239837.png'),
(28, 14, 5, '2023-01-13', 'Cho Gu-sang', 33, 156, 60, 1200, '226627.png'),
(29, 14, 3, '2023-01-13', 'Kim Min-jae football player', 23, 167, 56, 200, '233152.png'),
(30, 22, 3, '2023-01-13', 'Mohammed Salisu', 34, 167, 78, 300, '238463.png'),
(31, 4, 5, '2023-01-13', 'Alvaro Morata', 25, 167, 67, 1600, '146947.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'slider-1', 'slider-1.png'),
(2, 'slider-3', 'slider-3.png'),
(3, 'slider-2', 'slider-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(10) NOT NULL,
  `sub_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sub_id`, `sub_title`) VALUES
(1, 'General User'),
(2, 'Premium User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `dev_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
