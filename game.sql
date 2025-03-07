-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2025 at 06:18 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nwoowcom_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admingames', '$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm', 'admin'),
(6, 'usergame@12', '$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `keywords` varchar(3000) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `added_by` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `datee`, `title`, `image1`, `description`, `keywords`, `descriptions`, `url`, `added_by`, `status`) VALUES
(4, '2024-12-16', 'Beyond the Console Exploring Gaming Frontiers', '1734327708_speed-racer.jpg', '<p>aSas</p>', 'ASA', 'as', 'sAS', 'as', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `keywords` varchar(10000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `type`, `name`, `short_desc`, `keywords`, `description`, `image`, `title`, `status`) VALUES
(1, 'Board_game', '2048_tile', '2048 Game: A Simple Yet Addictive Puzzle  The 2048 game, created by Italian web developer Gabriele Cirulli in 2014, has gained immense popularity for its simplicity and addictiveness. It is a sliding tile puzzle game available on various platforms, including web browsers, mobile devices, and even desktop systems. The goal is straightforward: combine tiles with the same numbers to reach the magical number 2048. While the concept may seem simple, the strategy required to achieve this goal keeps pl', '', '', '1733896093_2a8103_ba160733108d4d75a7fc19e630387a7a~mv2.jpg', '', 1),
(8, 'Shooter_game', 'blackholesquare', 'Black Hole Square is an intense and fast-paced arcade game where players control a small square that must avoid being sucked into a black hole while navigating a maze of obstacles. The objective is to survive as long as possible while collecting points and power-ups scattered throughout the levels.  As the game progresses, the black hole grows larger and more threatening, pulling in anything that comes too close. Players must carefully maneuver the square through narrow gaps, dodge incoming obst', '', '', '1734089140_game_20241213_122354.jpg', '', 1),
(19, 'Board_game', 'doge2048', 'Doge 2048 is a fun and quirky twist on the classic 2048 puzzle game, featuring the popular Doge meme as the main character. The goal is simple: slide tiles on a grid to combine matching Doge faces and create higher-value tiles, ultimately aiming to reach the coveted “Doge 2048” tile.  Players move the tiles in all directions, combining similar tiles with each move. As the board fills up, it becomes more challenging to find matching pairs and prevent the grid from filling up completely. The game ', '', '', '1733898748_hive_600x600.jpg', '', 1),
(31, 'Racing_game', 'motox3m', 'Moto X3M is an exhilarating motocross racing game that challenges players with daring stunts, challenging tracks, and fast-paced action. In this game, you control a skilled biker as they race through increasingly difficult levels filled with obstacles, ramps, and traps.  Your goal is to navigate through each track as quickly as possible while performing impressive tricks and avoiding crashes. With each successful stunt and speed boost, you unlock new levels and more difficult challenges. The gam', '', '', '1733899872_cover_16x9-1700625476572.jpg', '', 1),
(34, 'Sport_game', 'physicsplayground', 'Physics Playground is an interactive sandbox game that lets players explore and experiment with the laws of physics in a fun, creative environment. The game offers a variety of objects and materials that can be manipulated in different ways, allowing you to build, break, and watch how things interact in real-time.  From simple machines like levers and pulleys to complex structures like bridges and towers, players can design their own physics-based creations or test out preset challenges. The gam', '', '', '1733900259_PTgKwpaioZIYmubK-tchN0LyCuRtCcYcLG3yq5rbdmk.jpg', '', 1),
(48, 'Puzzle_game', 'puzzle', 'A puzzle game is an interactive experience designed to challenge the player’s intellect, creativity, and problem-solving skills. These games come in a variety of forms, from classic jigsaw puzzles and crossword puzzles to innovative digital experiences featuring complex scenarios and dynamic gameplay. A well-designed puzzle game is not only entertaining but also mentally stimulating, encouraging players to think critically and strategically.  At the heart of any puzzle game lies its ability to e', '', '', '1735892766_unnamed.jpg', '', 1),
(51, 'Shooter_game', 'aim_training', 'Aim training is an essential practice for gamers, especially those involved in first-person shooter (FPS) games, competitive gaming, or eSports. It focuses on improving hand-eye coordination, reaction time, accuracy, and overall control, enabling players to perform at their best during gameplay. Beyond gaming, aim training exercises also have practical applications in activities requiring precision, such as military training and sports like archery or shooting.  The primary goal of aim training ', '', '', '1735899410_ss_a3481f36b2baa753a21e2578469c0bd9a5b0a826.1920x1080.jpg', '', 1),
(54, 'Shooter_game', 'Ball_and_glass', 'The imagery of a ball and a glass is often used to symbolize the interplay between strength and fragility, motion and stillness, and resilience and delicacy. It serves as a profound metaphor, drawing attention to the dynamics of life, relationships, and the decisions we face. Understanding the characteristics and interaction of these two objects allows us to reflect on deeper meanings and values.  A ball represents energy, motion, and resilience. It is built to bounce back, to endure impact, and', '', '', '1736141541_61se6RVO6sL.jpg', '', 1),
(56, 'Board_game', 'bear_hunter_ninja', 'The Bear, Hunter, Ninja game is a thrilling and fast-paced activity that combines strategy, reflexes, and a healthy dose of laughter. Rooted in the spirit of classic games like Rock-Paper-Scissors, it takes the concept to an engaging new level, blending role-play and dynamic interactions. The game is perfect for people of all ages and is often used in classrooms, team-building sessions, and social gatherings to break the ice and foster camaraderie.  At its core, Bear, Hunter, Ninja is a battle o', '', '', '1736149691_480x360bb.jpg', '', 1),
(57, 'Fun_game', 'blast_zone', 'Blast Zone is an adrenaline-packed game that challenges players to navigate high-stakes environments filled with explosions, strategy, and fast-paced action. Designed to keep players on the edge of their seats, it combines elements of survival, tactical planning, and skillful execution. Whether played in digital form or as a physical activity, Blast Zone offers excitement and a unique test of decision-making under pressure.  The premise of Blast Zone centers around players trapped in a volatile ', '', '', '1736156373_ss_9d1aec25e099634ade1c348f883af00186b214af.1920x1080.jpg', '', 1),
(61, 'Card_game', 'brain_burst_game', 'Brain Burst is a fast-paced, intellectually stimulating game designed to test your mental agility, quick thinking, and problem-solving skills. With its unique combination of puzzles, trivia, and brain-teasers, it offers players a thrilling way to challenge their cognitive abilities while having fun. Whether you’re a solo player aiming to beat your high score or part of a competitive group seeking victory, Brain Burst guarantees an engaging experience for all ages.  Concept and Gameplay The core ', '', '', '1736229083_41ZC0-ZxPoL._AC_.jpg', '', 1),
(62, 'Card_game', 'mastermind', 'Mastermind is a timeless strategy game that challenges players to think critically, analyze patterns, and solve puzzles through deduction and logic. Known for its simple yet intellectually engaging design, Mastermind is a battle of wits between a code-maker and a code-breaker. Whether played casually with friends or competitively in tournaments, the game promises an exciting and mentally stimulating experience for players of all ages.  The Concept of Mastermind At its core, Mastermind revolves a', '', '', '1736230684_toftwood.games.mastermind-screenshots-0.jpg', '', 1),
(68, 'Arcade_game', 'clawCrane', 'Claw Crane is a captivating and iconic game that combines skill, precision, and a touch of luck to create an exciting experience for players of all ages. Often found in arcades, malls, and entertainment centers, the Claw Crane game has a universal appeal, drawing players eager to test their ability to control the claw and win prizes. Whether you’re after a cuddly plush toy, shiny trinket, or exclusive collectibles, the thrill of grabbing a prize with the claw makes this game endlessly entertaini', '', '', '1736246241_vector-claw-crane-machine-game-600nw-2364707687.jpg', '', 1),
(69, 'Board_game', 'color_matching_application', 'Color Matching is an engaging and visually stimulating puzzle game that tests your ability to match colors quickly and accurately. The game is simple to learn yet provides a satisfying challenge as you progress through levels. Perfect for players of all ages, Color Matching offers endless fun while helping improve visual recognition, memory, and problem-solving skills. Whether you play casually to pass the time or aim to achieve high scores, this game delivers an enjoyable experience with vibran', '', '', '1736248150_memory_game_kids_colors.jpg', '', 1),
(70, 'Card_game', 'beat_a_mole', 'Beat a Mole is a fast-paced, exciting, and addictive arcade-style game that takes the classic whack-a-mole concept to a whole new level. This action-packed game is perfect for players looking for a fun, quick challenge that tests their reflexes and hand-eye coordination. Whether you\'re playing casually to pass the time or trying to beat your high score, Beat a Mole delivers a thrilling and satisfying experience with every round.  The Concept of Beat a Mole At its core, Beat a Mole is a game wher', '', '', '1736918447_istockphoto-1153033854-612x612.jpg', '', 1),
(72, 'Shooter_game', 'carnival', 'Carnival games are a staple of fairs and amusement parks around the world, offering visitors a chance to test their skills, win exciting prizes, and immerse themselves in the festive atmosphere of a carnival. These games are designed to be fun, engaging, and challenging, providing entertainment for players of all ages. With their bright colors, lively sounds, and a wide variety of game types, carnival games create an irresistible draw for anyone looking for some playful competition.  The Concept', '', '', '1736921977_istockphoto-468739582-612x612.jpg', '', 1),
(79, 'Racing_game', 'uno_computer', 'The UNO computer, often recognized for its minimalistic yet powerful design, is a compact and efficient computing device that caters to a wide range of users. It is an entry-level computer system often utilized in educational settings, DIY projects, and hobbyist applications. It is designed to deliver essential computing functions without the complexity or high cost of advanced machines, making it highly accessible to beginners and tech enthusiasts alike.', '', '', '1738055881_uno-online-350x300.jpg', '', 1),
(80, 'Fun_game', 'unlock_the_lock', 'Unlock the Lock  is a popular puzzle game concept that challenges players to crack a combination lock by solving sequences, patterns, or logic puzzles. The game can take many forms, ranging from a digital mobile app to a physical board game or an escape-room-inspired activity. It is designed to test a player\'s memory, logic, and problem-solving skills while providing a fun and engaging experience.  Game Concept The core objective of  Unlock the Lock is to crack a virtual or physical lock by iden', '', '', '1738058501_unnamed.png', '', 1),
(81, 'Racing_game', 'underwater_shoot', 'The Underwater Shoot game is an exciting action-packed adventure that takes players deep beneath the ocean\'s surface, where they must face various aquatic challenges and enemies. Designed to test reflexes, accuracy, and strategy, this game immerses players in a vibrant underwater world filled with mystery, danger, and exploration.', '', '', '1738060259_unnamed.jpg', '', 1),
(82, 'Racing_game', 'turn_on_the_light', 'Could you clarify what you mean by  turn on the light ? Are you referring to:  A real-world situation, like troubleshooting a light switch or a smart home system? A game or coding scenario, like creating a turn on the light feature in an application? A metaphor, like gaining clarity on a specific topic?', '', '', '1738062682_light-bulbs.jpg', '', 1),
(83, 'Fun_game', 'trivia_It', 'Trivia_It is an exciting and fast-paced trivia game that tests players\' knowledge across various topics. Designed to be played individually or in groups, the game combines challenging questions, engaging gameplay mechanics, and a touch of strategy to create an unforgettable experience. Whether played as a party game, an educational tool, or an online multiplayer challenge, Trivia_It is perfect for all trivia enthusiasts.', '', '', '1738064923_New-Game-Type-Multiplayer-trivia.jpg', '', 1),
(84, 'Fun_game', 'trihand_tactics', 'TriHand Tactics is a strategy-based card and hand-management game that combines skill, strategy, and luck. Inspired by the concept of mastering \"three hands\" (or three core components of gameplay), players must outthink their opponents by tactically playing their cards, managing resources, and executing well-timed moves. Whether played as a digital game or a tabletop card game, TriHand Tactics offers endless strategic possibilities.', '', '', '1738067938_SG_Turtle Tactics_step 2.jpg', '', 1),
(85, 'Card_game', 'treasure_hunt', 'A treasure hunt game is an interactive adventure that challenges players to solve clues, complete tasks, and navigate through a series of challenges to find a hidden treasure. It can be played indoors or outdoors, making it a versatile and engaging experience for participants of all ages. Whether played as a fun family activity, a team-building exercise, or an exciting digital experience, treasure hunts captivate players by combining exploration, problem-solving, and excitement.', '', '', '1738141640_2mj23ocmdp5bri1474c6zv6rqmrrtp891jwjp9lhy61txl8xf571ib07-preview-1200x630.jpg', '', 1),
(89, 'Puzzle_game', 'tower_building', 'Embark on a thrilling journey of strategy, precision, and creativity with our Tower Building Game! This captivating game challenges players to construct the tallest and most stable towers using a variety of building blocks. Whether you\'re a casual gamer or a strategic mastermind, this game offers endless entertainment and brain-teasing challenges.  Gameplay Mechanics In the Tower Building Game, players are provided with different types of blocks—ranging from simple cubes to complex shapes like t', '', '', '1738217031_sddefault.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `games_ev`
--

CREATE TABLE `games_ev` (
  `id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `fueltype_id` int(11) NOT NULL,
  `battery_capacity` varchar(20) NOT NULL,
  `motor_type` varchar(100) NOT NULL,
  `rangee` varchar(20) NOT NULL,
  `mild_hybrid` varchar(20) NOT NULL,
  `charging_time` varchar(20) NOT NULL,
  `fast_charging` varchar(20) NOT NULL,
  `eco_mode` varchar(20) NOT NULL,
  `drive_mode` varchar(20) NOT NULL,
  `sports_mode` varchar(20) NOT NULL,
  `additional_features` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games_images`
--

CREATE TABLE `games_images` (
  `id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games_images`
--

INSERT INTO `games_images` (`id`, `games_id`, `image`) VALUES
(1, 1, 'game_20241211_052739.jpg'),
(2, 1, 'game_20241211_052800.jpg'),
(3, 1, 'game_20241211_063725.jpg'),
(4, 1, 'game_20241211_063736.jpg'),
(5, 1, 'game_20241211_063746.jpg'),
(6, 2, 'game_20241211_065956.jpg'),
(7, 2, 'game_20241211_070008.jpg'),
(8, 2, 'game_20241211_070022.jpg'),
(9, 2, 'game_20241211_070040.jpg'),
(10, 2, 'game_20241211_070052.jpg'),
(11, 46, 'game_20241212_132847.png'),
(12, 46, 'game_20241212_132900.jpeg'),
(13, 46, 'game_20241212_132917.jpg'),
(14, 46, 'game_20241212_132929.jpg'),
(15, 46, 'game_20241212_132939.jpg'),
(16, 45, 'game_20241212_133710.jpg'),
(17, 45, 'game_20241212_133722.jpg'),
(18, 45, 'game_20241212_133731.png'),
(19, 45, 'game_20241212_133738.jpg'),
(20, 45, 'game_20241212_133749.jpg'),
(21, 44, 'game_20241212_134553.png'),
(22, 44, 'game_20241212_134602.png'),
(23, 44, 'game_20241212_134611.png'),
(24, 44, 'game_20241212_134619.png'),
(25, 44, 'game_20241212_134631.jpg'),
(26, 3, 'game_20241212_135828.jpg'),
(27, 3, 'game_20241212_135839.png'),
(28, 3, 'game_20241212_135850.jpg'),
(29, 3, 'game_20241212_135902.jpg'),
(30, 3, 'game_20241212_135916.jpg'),
(31, 28, 'game_20241213_052755.jpg'),
(32, 28, 'game_20241213_052824.jpg'),
(33, 28, 'game_20241213_052838.jpg'),
(34, 28, 'game_20241213_052855.jpg'),
(35, 28, 'game_20241213_052914.jpg'),
(36, 39, 'game_20241213_053445.png'),
(37, 39, 'game_20241213_053501.jpg'),
(38, 39, 'game_20241213_053511.png'),
(39, 39, 'game_20241213_053521.jpg'),
(40, 39, 'game_20241213_053530.jpg'),
(41, 6, 'game_20241213_054719.jpg'),
(42, 6, 'game_20241213_054736.jpg'),
(43, 6, 'game_20241213_054757.jpg'),
(44, 6, 'game_20241213_054810.jpg'),
(45, 6, 'game_20241213_054822.jpg'),
(46, 14, 'game_20241213_055517.jpeg'),
(47, 14, 'game_20241213_055530.png'),
(48, 14, 'game_20241213_055542.jpg'),
(49, 14, 'game_20241213_055604.jpg'),
(50, 14, 'game_20241213_055614.jpg'),
(51, 20, 'game_20241213_060328.jpg'),
(52, 20, 'game_20241213_060336.jpg'),
(53, 20, 'game_20241213_060344.jpg'),
(54, 20, 'game_20241213_060352.jpg'),
(55, 20, 'game_20241213_060400.jpg'),
(56, 23, 'game_20241213_062631.jpg'),
(57, 23, 'game_20241213_062643.jpg'),
(58, 23, 'game_20241213_062656.png'),
(59, 23, 'game_20241213_062705.png'),
(60, 23, 'game_20241213_062714.jpg'),
(61, 40, 'game_20241213_071218.jpg'),
(62, 40, 'game_20241213_071231.jpg'),
(63, 40, 'game_20241213_071242.jpg'),
(64, 40, 'game_20241213_071253.jpg'),
(65, 40, 'game_20241213_071303.jpg'),
(66, 9, 'game_20241213_071805.jpeg'),
(67, 9, 'game_20241213_071820.jpg'),
(68, 9, 'game_20241213_071831.jpg'),
(69, 9, 'game_20241213_071839.jpg'),
(70, 9, 'game_20241213_071935.jpg'),
(71, 19, 'game_20241213_072338.jpg'),
(72, 19, 'game_20241213_072352.png'),
(73, 19, 'game_20241213_072359.png'),
(74, 19, 'game_20241213_072413.png'),
(75, 19, 'game_20241213_072430.jpg'),
(76, 30, 'game_20241213_075000.jpeg'),
(77, 30, 'game_20241213_075008.jpeg'),
(78, 30, 'game_20241213_075015.jpg'),
(79, 30, 'game_20241213_075026.jpg'),
(80, 30, 'game_20241213_075032.jpg'),
(81, 30, 'game_20241213_075039.jpg'),
(82, 35, 'game_20241213_080411.jpg'),
(83, 35, 'game_20241213_080422.jpg'),
(84, 35, 'game_20241213_080430.jpg'),
(85, 35, 'game_20241213_080437.jpg'),
(86, 35, 'game_20241213_080446.jpg'),
(87, 24, 'game_20241213_081142.jpg'),
(88, 24, 'game_20241213_081152.jpg'),
(89, 24, 'game_20241213_081200.jpg'),
(90, 24, 'game_20241213_081208.jpg'),
(91, 24, 'game_20241213_081217.jpg'),
(92, 26, 'game_20241213_084330.jpg'),
(93, 26, 'game_20241213_084339.jpg'),
(94, 26, 'game_20241213_084347.jpg'),
(95, 26, 'game_20241213_084356.png'),
(96, 26, 'game_20241213_084409.jpg'),
(97, 32, 'game_20241213_085533.jpg'),
(98, 32, 'game_20241213_085544.jpg'),
(99, 32, 'game_20241213_085552.jpg'),
(100, 32, 'game_20241213_085600.jpg'),
(101, 32, 'game_20241213_085607.jpg'),
(102, 34, 'game_20241213_090232.png'),
(103, 34, 'game_20241213_090245.png'),
(104, 34, 'game_20241213_090252.png'),
(105, 34, 'game_20241213_090300.png'),
(106, 34, 'game_20241213_090308.jpg'),
(107, 4, 'game_20241213_110035.jpg'),
(108, 4, 'game_20241213_110047.jpg'),
(109, 4, 'game_20241213_110055.jpg'),
(110, 4, 'game_20241213_110103.jpg'),
(111, 4, 'game_20241213_110110.jpg'),
(112, 5, 'game_20241213_110638.jpg'),
(113, 5, 'game_20241213_110646.jpg'),
(114, 5, 'game_20241213_110653.jpg'),
(115, 5, 'game_20241213_110700.jpg'),
(116, 5, 'game_20241213_110710.jpg'),
(117, 27, 'game_20241213_112301.png'),
(118, 27, 'game_20241213_112308.jpg'),
(119, 27, 'game_20241213_112317.jpg'),
(120, 27, 'game_20241213_112324.jpg'),
(121, 27, 'game_20241213_112332.png'),
(122, 36, 'game_20241213_112716.png'),
(123, 36, 'game_20241213_112727.jpg'),
(124, 36, 'game_20241213_112736.jpg'),
(125, 36, 'game_20241213_112748.jpg'),
(126, 36, 'game_20241213_112803.jpg'),
(127, 37, 'game_20241213_115610.jpg'),
(128, 37, 'game_20241213_115628.jpg'),
(129, 37, 'game_20241213_115711.jpg'),
(130, 37, 'game_20241213_115722.jpg'),
(131, 37, 'game_20241213_115731.jpg'),
(132, 8, 'game_20241213_122354.jpg'),
(133, 8, 'game_20241213_122404.jpeg'),
(134, 8, 'game_20241213_122411.jpg'),
(135, 8, 'game_20241213_122419.png'),
(136, 8, 'game_20241213_122427.jpg'),
(137, 10, 'game_20241213_122931.jpg'),
(138, 10, 'game_20241213_122938.png'),
(139, 10, 'game_20241213_122944.png'),
(140, 10, 'game_20241213_122955.png'),
(141, 10, 'game_20241213_123103.jpg'),
(142, 12, 'game_20241213_123825.jpg'),
(143, 12, 'game_20241213_123841.jpg'),
(144, 12, 'game_20241213_123850.jpg'),
(145, 12, 'game_20241213_123907.jpg'),
(146, 12, 'game_20241213_123928.png'),
(147, 22, 'game_20241213_124339.jpg'),
(148, 22, 'game_20241213_124348.jpg'),
(149, 22, 'game_20241213_124355.jpg'),
(150, 22, 'game_20241213_124404.jpg'),
(151, 22, 'game_20241213_124417.jpg'),
(152, 33, 'game_20241213_125325.png'),
(155, 33, 'game_20241213_125351.jpg'),
(157, 33, 'game_20241213_125533.jpg'),
(158, 33, 'game_20241213_125540.png'),
(159, 33, 'game_20241213_125550.jpg'),
(160, 41, 'game_20241213_131623.jpg'),
(161, 41, 'game_20241213_131637.jpg'),
(162, 41, 'game_20241213_131656.jpg'),
(163, 41, 'game_20241213_131704.png'),
(164, 41, 'game_20241213_131714.png'),
(165, 15, 'game_20241213_132127.jpg'),
(166, 15, 'game_20241213_132136.jpg'),
(167, 15, 'game_20241213_132145.jpg'),
(168, 15, 'game_20241213_132153.jpg'),
(169, 15, 'game_20241213_132203.jpg'),
(170, 16, 'game_20241213_132844.jpg'),
(171, 16, 'game_20241213_132853.jpg'),
(172, 16, 'game_20241213_132902.jpg'),
(173, 16, 'game_20241213_132909.jpg'),
(174, 16, 'game_20241213_132916.jpg'),
(175, 17, 'game_20241213_133402.jpg'),
(176, 17, 'game_20241213_133411.jpg'),
(177, 17, 'game_20241213_133422.png'),
(178, 17, 'game_20241213_133431.jpg'),
(179, 17, 'game_20241213_133439.jpg'),
(180, 21, 'game_20241213_134449.jpg'),
(181, 21, 'game_20241213_134458.png'),
(182, 21, 'game_20241213_134504.png'),
(183, 21, 'game_20241213_134512.png'),
(184, 21, 'game_20241213_134532.jpg'),
(185, 25, 'game_20241213_134944.jpg'),
(186, 25, 'game_20241213_134951.jpg'),
(187, 25, 'game_20241213_134958.jpg'),
(188, 25, 'game_20241213_135030.jpg'),
(189, 25, 'game_20241213_135038.jpg'),
(190, 31, 'game_20241213_135550.jpg'),
(191, 31, 'game_20241213_135557.jpg'),
(192, 31, 'game_20241213_135603.png'),
(193, 31, 'game_20241213_135614.jpg'),
(194, 31, 'game_20241213_135710.jpg'),
(195, 38, 'game_20241213_140001.jpg'),
(196, 11, 'game_20241219_100956.jpg'),
(197, 13, 'game_20241219_103214.jpg'),
(198, 18, 'game_20241219_113128.jpg'),
(199, 43, 'game_20241223_115435.jpg'),
(200, 43, 'game_20241223_115448.jpg'),
(201, 43, 'game_20241223_115501.jpg'),
(202, 43, 'game_20241223_115511.jpg'),
(203, 43, 'game_20241223_115522.jpg'),
(204, 47, 'game_20250103_051248.jpg'),
(207, 48, 'game_20250103_082740.jpg'),
(208, 48, 'game_20250103_082826.jpg'),
(209, 48, 'game_20250103_082912.jpg'),
(210, 48, 'game_20250103_083101.jpg'),
(211, 48, 'game_20250103_083156.jpg'),
(217, 50, 'game_20250103_094011.jpg'),
(218, 50, 'game_20250103_094041.jpg'),
(219, 50, 'game_20250103_094109.jpg'),
(220, 50, 'game_20250103_094136.jpg'),
(221, 50, 'game_20250103_094236.jpg'),
(222, 51, 'game_20250103_101725.jpg'),
(223, 51, 'game_20250103_101842.jpg'),
(224, 51, 'game_20250103_103433.jpg'),
(225, 51, 'game_20250103_103502.jpg'),
(226, 51, 'game_20250103_103530.jpg'),
(227, 51, 'game_20250103_103601.jpg'),
(228, 52, 'game_20250103_112258.jpg'),
(229, 52, 'game_20250103_112327.jpg'),
(230, 52, 'game_20250103_112352.jpg'),
(231, 52, 'game_20250103_112418.jpg'),
(232, 52, 'game_20250103_112446.jpg'),
(233, 52, 'game_20250103_112514.jpg'),
(234, 53, 'game_20250106_044640.jpeg'),
(235, 53, 'game_20250106_044648.jpeg'),
(236, 53, 'game_20250106_044657.jpeg'),
(237, 53, 'game_20250106_044707.jpeg'),
(238, 53, 'game_20250106_044716.jpeg'),
(239, 53, 'game_20250106_044726.jpeg'),
(240, 54, 'game_20250106_053234.jpg'),
(241, 54, 'game_20250106_053242.jpg'),
(242, 54, 'game_20250106_053252.jpg'),
(243, 54, 'game_20250106_053302.jpg'),
(244, 54, 'game_20250106_053311.jpg'),
(245, 54, 'game_20250106_053321.jpg'),
(246, 55, 'game_20250106_070642.jpg'),
(247, 55, 'game_20250106_070651.jpg'),
(248, 55, 'game_20250106_070700.jpg'),
(249, 55, 'game_20250106_070709.jpg'),
(250, 55, 'game_20250106_070718.jpg'),
(251, 55, 'game_20250106_070728.jpg'),
(252, 56, 'game_20250106_074827.jpg'),
(253, 56, 'game_20250106_074839.jpg'),
(254, 56, 'game_20250106_074848.jpg'),
(255, 56, 'game_20250106_074858.jpg'),
(256, 56, 'game_20250106_074908.jpg'),
(257, 56, 'game_20250106_074919.jpg'),
(258, 57, 'game_20250106_093948.jpg'),
(259, 57, 'game_20250106_093958.jpg'),
(260, 57, 'game_20250106_094009.jpg'),
(261, 57, 'game_20250106_094019.jpg'),
(262, 57, 'game_20250106_094028.jpg'),
(263, 57, 'game_20250106_094039.jpg'),
(264, 58, 'game_20250106_100201.png'),
(265, 58, 'game_20250106_100210.png'),
(266, 58, 'game_20250106_100220.png'),
(267, 58, 'game_20250106_100230.png'),
(268, 58, 'game_20250106_100238.png'),
(269, 58, 'game_20250106_100251.png'),
(270, 59, 'game_20250107_041459.jpg'),
(271, 59, 'game_20250107_041509.jpg'),
(272, 59, 'game_20250107_041536.jpg'),
(273, 59, 'game_20250107_041548.jpg'),
(274, 59, 'game_20250107_041556.jpg'),
(275, 59, 'game_20250107_041612.jpg'),
(276, 60, 'game_20250107_051220.jpg'),
(277, 60, 'game_20250107_051230.jpg'),
(278, 60, 'game_20250107_051240.jpg'),
(279, 60, 'game_20250107_051249.jpg'),
(280, 60, 'game_20250107_051301.jpg'),
(281, 60, 'game_20250107_051311.jpg'),
(282, 61, 'game_20250107_055136.jpg'),
(283, 61, 'game_20250107_055144.jpg'),
(284, 61, 'game_20250107_055153.jpg'),
(285, 61, 'game_20250107_055204.jpg'),
(286, 61, 'game_20250107_055218.jpg'),
(287, 61, 'game_20250107_055228.jpg'),
(288, 62, 'game_20250107_061847.jpg'),
(289, 62, 'game_20250107_061857.jpg'),
(290, 62, 'game_20250107_061907.jpg'),
(291, 62, 'game_20250107_061916.jpg'),
(292, 62, 'game_20250107_061925.jpg'),
(293, 62, 'game_20250107_061936.jpg'),
(294, 63, 'game_20250107_070720.png'),
(295, 63, 'game_20250107_070728.png'),
(296, 63, 'game_20250107_070736.png'),
(297, 63, 'game_20250107_070746.png'),
(298, 63, 'game_20250107_070754.png'),
(299, 63, 'game_20250107_070804.png'),
(300, 64, 'game_20250107_084104.jpg'),
(301, 64, 'game_20250107_084113.jpg'),
(302, 64, 'game_20250107_084122.jpg'),
(303, 64, 'game_20250107_084130.jpg'),
(304, 64, 'game_20250107_084139.jpg'),
(305, 64, 'game_20250107_084148.jpg'),
(306, 65, 'game_20250107_093804.jpg'),
(307, 65, 'game_20250107_093813.jpg'),
(308, 65, 'game_20250107_093823.jpg'),
(309, 65, 'game_20250107_093831.jpg'),
(310, 65, 'game_20250107_093841.jpg'),
(311, 65, 'game_20250107_093850.jpg'),
(312, 66, 'game_20250107_100348.jpg'),
(313, 66, 'game_20250107_100356.jpg'),
(314, 66, 'game_20250107_100414.jpg'),
(315, 66, 'game_20250107_100422.jpg'),
(316, 66, 'game_20250107_100433.jpg'),
(317, 66, 'game_20250107_100442.jpg'),
(318, 67, 'game_20250107_101827.png'),
(319, 67, 'game_20250107_101836.png'),
(320, 67, 'game_20250107_101844.png'),
(321, 67, 'game_20250107_101855.png'),
(322, 67, 'game_20250107_101905.png'),
(323, 67, 'game_20250107_101916.png'),
(324, 68, 'game_20250107_103731.jpg'),
(325, 68, 'game_20250107_103741.jpg'),
(326, 68, 'game_20250107_103749.jpg'),
(327, 68, 'game_20250107_103758.jpg'),
(328, 68, 'game_20250107_103808.jpg'),
(329, 68, 'game_20250107_103816.jpg'),
(330, 69, 'game_20250107_110925.jpg'),
(331, 69, 'game_20250107_110934.jpg'),
(332, 69, 'game_20250107_111009.jpg'),
(333, 69, 'game_20250107_111018.jpg'),
(334, 69, 'game_20250107_111027.jpg'),
(335, 69, 'game_20250107_111040.jpg'),
(336, 70, 'game_20250115_052100.jpg'),
(337, 70, 'game_20250115_052110.jpg'),
(338, 70, 'game_20250115_052121.jpg'),
(339, 70, 'game_20250115_052132.jpg'),
(340, 70, 'game_20250115_052144.jpg'),
(341, 70, 'game_20250115_052155.jpg'),
(342, 71, 'game_20250115_055659.png'),
(343, 71, 'game_20250115_055711.png'),
(344, 71, 'game_20250115_055722.png'),
(345, 71, 'game_20250115_055735.png'),
(346, 71, 'game_20250115_055753.png'),
(347, 71, 'game_20250115_055806.png'),
(348, 72, 'game_20250115_061953.jpg'),
(349, 72, 'game_20250115_062010.jpg'),
(350, 72, 'game_20250115_062021.jpg'),
(351, 72, 'game_20250115_062033.jpg'),
(352, 72, 'game_20250115_062045.jpg'),
(353, 73, 'game_20250115_064932.jpg'),
(354, 73, 'game_20250115_064944.jpg'),
(355, 73, 'game_20250115_064956.jpg'),
(356, 73, 'game_20250115_065009.jpg'),
(357, 73, 'game_20250115_065020.jpg'),
(358, 73, 'game_20250115_065034.jpg'),
(359, 74, 'game_20250115_074608.jpg'),
(360, 74, 'game_20250115_074624.jpg'),
(361, 74, 'game_20250115_074635.jpg'),
(362, 74, 'game_20250115_074647.jpg'),
(363, 74, 'game_20250115_074658.jpg'),
(364, 74, 'game_20250115_074711.jpg'),
(365, 75, 'game_20250115_085118.jpg'),
(366, 75, 'game_20250115_085130.jpg'),
(367, 75, 'game_20250115_085145.jpg'),
(368, 75, 'game_20250115_085158.jpg'),
(369, 75, 'game_20250115_085212.jpg'),
(370, 75, 'game_20250115_085226.jpg'),
(371, 76, 'game_20250115_092257.png'),
(372, 76, 'game_20250115_092309.png'),
(373, 76, 'game_20250115_092323.png'),
(374, 76, 'game_20250115_092334.png'),
(375, 76, 'game_20250115_092345.png'),
(376, 76, 'game_20250115_092357.png'),
(377, 77, 'game_20250115_100016.png'),
(378, 77, 'game_20250115_100028.png'),
(379, 77, 'game_20250115_100040.png'),
(380, 77, 'game_20250115_100051.png'),
(381, 77, 'game_20250115_100105.png'),
(382, 77, 'game_20250115_100119.png'),
(389, 79, 'game_20250128_091816.jpg'),
(390, 79, 'game_20250128_091828.jpg'),
(391, 79, 'game_20250128_091841.jpg'),
(392, 79, 'game_20250128_091853.jpg'),
(393, 79, 'game_20250128_091907.jpg'),
(394, 79, 'game_20250128_091922.jpg'),
(395, 80, 'game_20250128_100236.png'),
(396, 80, 'game_20250128_100249.png'),
(397, 80, 'game_20250128_100307.png'),
(398, 80, 'game_20250128_100321.png'),
(399, 80, 'game_20250128_100337.png'),
(400, 80, 'game_20250128_100357.png'),
(401, 81, 'game_20250128_103120.jpg'),
(402, 81, 'game_20250128_103135.jpg'),
(403, 81, 'game_20250128_103153.jpg'),
(404, 81, 'game_20250128_103209.jpg'),
(405, 81, 'game_20250128_103222.jpg'),
(406, 81, 'game_20250128_103236.jpg'),
(407, 82, 'game_20250128_111227.jpg'),
(408, 82, 'game_20250128_111243.jpg'),
(409, 82, 'game_20250128_111256.jpg'),
(410, 82, 'game_20250128_111311.jpg'),
(411, 82, 'game_20250128_111327.jpg'),
(412, 82, 'game_20250128_111402.jpg'),
(413, 83, 'game_20250128_114902.jpg'),
(414, 83, 'game_20250128_114915.jpg'),
(415, 83, 'game_20250128_114929.jpg'),
(416, 83, 'game_20250128_114942.jpg'),
(417, 83, 'game_20250128_114955.jpg'),
(418, 83, 'game_20250128_115015.jpg'),
(419, 84, 'game_20250128_123915.jpg'),
(420, 84, 'game_20250128_123928.jpg'),
(421, 84, 'game_20250128_123948.jpg'),
(422, 84, 'game_20250128_124001.jpg'),
(423, 84, 'game_20250128_124019.jpg'),
(424, 84, 'game_20250128_124033.jpg'),
(425, 85, 'game_20250129_090740.jpg'),
(426, 85, 'game_20250129_090754.jpg'),
(427, 85, 'game_20250129_090808.jpg'),
(428, 85, 'game_20250129_090821.jpg'),
(429, 85, 'game_20250129_090834.jpg'),
(430, 85, 'game_20250129_090850.jpg'),
(437, 87, 'game_20250130_043703.jpeg'),
(438, 87, 'game_20250130_043718.jpeg'),
(439, 87, 'game_20250130_043730.jpeg'),
(440, 87, 'game_20250130_043745.jpeg'),
(441, 87, 'game_20250130_043758.jpeg'),
(442, 87, 'game_20250130_043813.jpeg'),
(449, 89, 'game_20250130_060415.jpg'),
(450, 89, 'game_20250130_060430.jpg'),
(451, 89, 'game_20250130_060444.jpg'),
(452, 89, 'game_20250130_060500.jpg'),
(453, 89, 'game_20250130_060515.jpg'),
(454, 89, 'game_20250130_060531.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `games_videos`
--

CREATE TABLE `games_videos` (
  `id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `page`, `data`) VALUES
(1, 'home', '<meta name=\"keywords\" content=\"best hentai games, omegle game, rapelay game, mind games cologne, the wishing game, children\'s card games, buzzr games, rule 34 games, trampoline games, looney tunes blocks game,\" />\r\n<meta name=\"description\" content=\"Find a huge collection of free online games at ZettaGame! Enjoy puzzles, arcade, racing, shooting, and more. Play now and experience endless fun!\" />\r\n<title>ZettaGame | Play Free Online Games & Have Fun</title>\r\n<meta property=\"og:title\" content=\"play free online games | zettagame - fun for everyone!\" />\r\n<meta property=\"og:type\" content=\"game\" />\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/logo.png\" />\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:site\" content=\"@zettagame\">\r\n<meta name=\"twitter:title\" content=\"Play Free Online Games | ZettaGame - Fun for Everyone!\">\r\n<meta name=\"twitter:description\" content=\"Challenge your mind with the best free puzzle games online! Enjoy brain-teasing puzzles, match-3 games, and logic challenges at ZettaGame.\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/logo.png\">\r\n\r\n'),
(2, 'puzzle games', '<meta name=\"keywords\" content=\"toy puzzle game, planet puzzle, puzzle board games, game of thrones puzzle, metal puzzle games, puzzle saver\"/>\r\n<meta name=\"description\" content=\"Challenge your brain with free online puzzle games at ZettaGame. Enjoy mind-bending puzzles, word games, and logic challenges for all ages!\" />\r\n<title>Best Puzzle Games Online – Free & Fun Brain Teasers</title>\r\n<meta property=\"og:title\" content=\"Puzzle Games\">\r\n<meta property=\"og:site_name\" content=\"Puzzle Games\">\r\n<meta property=\"og:description\" content=\"Puzzle Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com/\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Puzzle Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Puzzle Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Puzzle Games\">\r\n\r\n'),
(3, 'fun games', '<meta name=\"keywords\" content=\"buddy kicks, fun carnival games, fun volleyball games, haha mini games, co gamer,,\" />\r\n<meta name=\"description\" content=\"Discover a world of fun games at ZettaGame! Play free online games that are exciting, entertaining, and perfect for players of all ages.\" />\r\n<title>Play Fun Games Online – Enjoy Free & Exciting Games </title>\r\n<meta property=\"og:title\" content=\"Fun Games\">\r\n<meta property=\"og:site_name\" content=\"Fun Games\">\r\n<meta property=\"og:description\" content=\"Fun Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com/\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Fun Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Fun Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Fun Games\">\r\n\r\n'),
(4, 'board games', '<meta name=\"keywords\" content=\"panda master online login, horse racing board game, harmonies board game, marble board game, volleyball random,\"/>\r\n<meta name=\"description\" content=\"Play your favorite board games online for free! Enjoy chess, checkers, mahjong, and more at ZettaGame. No download, just pure fun!\" />\r\n<title>Classic Board Games Online – Play for Free Now</title>\r\n<meta property=\"og:title\" content=\"Board Games\">\r\n<meta property=\"og:site_name\" content=\"Board Games\">\r\n<meta property=\"og:description\" content=\"Board Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com/\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Board Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Board Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Board Games\">\r\n\r\n'),
(5, 'sports games', '<meta name=\"keywords\" content=\"cbc football, sports bar games, my backpack carroll, football countdown clock, game in sports, \"/>\r\n<meta name=\"description\" content=\"Love sports? Play free online sports games, including soccer, basketball, racing, and more at ZettaGame. No sign-up needed—just play!\" />\r\n<title>Play Free Sports Games – Soccer, Basketball & More</title>\r\n<meta property=\"og:title\" content=\"Sports Games\">\r\n<meta property=\"og:site_name\" content=\"Sports Games\">\r\n<meta property=\"og:description\" content=\"Sports Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com/\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Sports Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Sports Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Sports Games\">\r\n\r\n'),
(6, 'arcade games', '<meta name=\"keywords\" content=\"japanese arcade beat game, guitar hero arcade game, boxing arcade game, plexile arcade, arcade game tables,\"/>\r\n<meta name=\"description\" content=\"Enjoy the best arcade games online at ZettaGame. Play classic and modern arcade games for free—no downloads, just pure gaming fun!\" />\r\n<title> Play Free Arcade Games – Classic & New Titles Online </title>\r\n<meta property=\"og:title\" content=\"Arcade Games\">\r\n<meta property=\"og:site_name\" content=\"Arcade Games\">\r\n<meta property=\"og:description\" content=\"Arcade Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com/\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Arcade Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Arcade Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Arcade Games\">'),
(7, 'shooter games', '<meta name=\"keywords\" content=\"what can i say besides schooting games, gun games unblocked, play onliine shooter for chrombooks, shooting game targets, 3 person shooter games\"/>\r\n<meta name=\"description\" content=\"Play thrilling shooter games online for free! Test your skills in action-packed FPS, battle royale, and sniper games at ZettaGame.\" />\r\n<title>Free Shooter Games Online – Action-Packed Gameplay</title>\r\n<meta property=\"og:title\" content=\"Shooter Games\">\r\n<meta property=\"og:site_name\" content=\"Shooter Games\">\r\n<meta property=\"og:description\" content=\"Shooter Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com/\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/shooter-games\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Shooter Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Shooter Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Shooter Games\">\r\n\r\n'),
(8, 'card games', '<meta name=\"keywords\" content=\"card games for 3 people, best pack of cards, family playing card games, world cards\"/>\r\n<meta name=\"description\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\" />\r\n<title>Play Free Card Games Online – Solitaire & More</title>\r\n<meta property=\"og:title\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\r\n\">\r\n<meta property=\"og:site_name\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\r\n\">\r\n<meta property=\"og:description\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\r\n\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\r\n\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\r\n\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\" Enjoy free online card games, including solitaire, poker, blackjack, and more at ZettaGame. Challenge yourself with fun and strategy!\r\n\">\r\n\r\n'),
(10, 'racing games', '<meta name=\"keywords\" content=\"free windows car racing game reviews, free car games for kids, horse racing games, dirt bike games, horse racing games\"/>\r\n<meta name=\"description\" content=\"Speed through the best online racing games! Play car, bike, and drag racing games for free at ZettaGame. Get ready for high-speed fun!\" />\r\n<title>Free Racing Games Online – Fast-Paced Car & Bike Races</title>\r\n<meta property=\"og:title\" content=\"Racing Games\">\r\n<meta property=\"og:site_name\" content=\"Racing Games\">\r\n<meta property=\"og:description\" content=\"Racing Games\">\r\n<meta property=\"og:type\" content=\"https://zettagame.com\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Racing Games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Racing Games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Racing Games\">\r\n\r\n'),
(11, 'privacy policy', '<meta name=\"keywords\" content=\"Privacy Policy\"/>\r\n<meta name=\"description\" content=\"Read ZettaGame’s privacy policy to learn how we handle your data, protect user information, and ensure a safe gaming experience online.\" />\r\n<title>Privacy Policy – ZettaGame Online Gaming Platform </title>\r\n<meta property=\"og:title\" content=\"Privacy Policy\">\r\n<meta property=\"og:site_name\" content=\"Privacy Policy\">\r\n<meta property=\"og:description\" content=\"Privacy Policy\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Privacy Policy\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Privacy Policy\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Privacy Policy\">\r\n\r\n'),
(12, 'terms conditions', '<meta name=\"keywords\" content=\"Terms Conditions\"/>\r\n<meta name=\"description\" content=\" Review ZettaGame’s terms and conditions to understand the rules, policies, and user responsibilities while enjoying free online games.\" />\r\n<title>Terms & Conditions – ZettaGame Online Gaming Rules</title>\r\n<meta property=\"og:title\" content=\"Terms Conditions\">\r\n<meta property=\"og:site_name\" content=\"Terms Conditions\">\r\n<meta property=\"og:description\" content=\"Terms Conditions\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Terms Conditions\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Terms Conditions\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Terms Conditions\">\r\n\r\n'),
(13, 'about us', '<meta name=\"keywords\" content=\"about us\"/>\r\n<meta name=\"description\" content=\" Learn about ZettaGame, the best platform for free online games. Discover our mission to provide top-quality entertainment for all gamers.\" />\r\n<title> About ZettaGame – Your Ultimate Gaming Destination </title>\r\n<meta property=\"og:title\" content=\"about us\">\r\n<meta property=\"og:site_name\" content=\"about us\">\r\n<meta property=\"og:description\" content=\"about us\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"about us\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"about us\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"about us\">\r\n\r\n'),
(14, 'games', '<meta name=\"keywords\" content=\"games/>\r\n<meta name=\"description\" content=\"games\" />\r\n<title>Games | Zetta Game </title>\r\n<meta property=\"og:title\" content=\"games\">\r\n<meta property=\"og:site_name\" content=\"games\">\r\n<meta property=\"og:description\" content=\"games\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"games\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"games\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"games\">\r\n\r\n'),
(15, 'contact us', '<meta name=\"keywords\" content=\"contact us\"/>\r\n<meta name=\"description\" content=\" Have questions or feedback? Contact ZettaGame for support, inquiries, or collaborations. We’re here to help with your gaming needs!\" />\r\n<title>Contact ZettaGame – Get in Touch with Our Team </title>\r\n<meta property=\"og:title\" content=\"contact us\">\r\n<meta property=\"og:site_name\" content=\"contact us\">\r\n<meta property=\"og:description\" content=\"contact us\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"contact us\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"contact us\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"contact us\">\r\n\r\n'),
(16, 'disclaimer', '<meta name=\"keywords\" content=\"disclaimer\"/>\r\n<meta name=\"description\" content=\"Read the ZettaGame disclaimer outlining liability, responsibilities, and terms of use for our free online gaming platform.\" />\r\n<title>Disclaimer – ZettaGame Liability & User Agreement </title>\r\n<meta property=\"og:title\" content=\"disclaimer\">\r\n<meta property=\"og:site_name\" content=\"disclaimer\">\r\n<meta property=\"og:description\" content=\"disclaimer\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"disclaimer\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"disclaimer\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"disclaimer\">\r\n\r\n'),
(17, 'login', '<meta name=\"keywords\" content=\"Login\"/>\r\n<meta name=\"description\" content=\" Sign in to ZettaGame to track progress, save favorite games, and connect with friends. Enjoy personalized gaming with your account.\" />\r\n<title>  Login to ZettaGame – Access Your Gaming Profile </title>\r\n<meta property=\"og:title\" content=\"Login\">\r\n<meta property=\"og:site_name\" content=\"Login\">\r\n<meta property=\"og:description\" content=\"Login\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Login\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Login\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Login\">\r\n\r\n'),
(18, 'register', '<meta name=\"keywords\" content=\"Register \"/>\r\n<meta name=\"description\" content=\" Register  in to ZettaGame to track progress, save favorite games, and connect with friends. Enjoy personalized gaming with your account.\" />\r\n<title>  Register to ZettaGame – Access Your Gaming Profile </title>\r\n<meta property=\"og:title\" content=\"Register \">\r\n<meta property=\"og:site_name\" content=\"Register \">\r\n<meta property=\"og:description\" content=\"Register \">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Register \">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Register \">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Register \">\r\n\r\n'),
(19, 'forget-password', '<meta name=\"keywords\" content=\"Forget Password\"/>\r\n<meta name=\"description\" content=\" Forget Password in to ZettaGame to track progress, save favorite games, and connect with friends. Enjoy personalized gaming with your account.\" />\r\n<title>  Forget Password to ZettaGame – Access Your Gaming Profile </title>\r\n<meta property=\"og:title\" content=\"Register \">\r\n<meta property=\"og:site_name\" content=\"Forget Password\">\r\n<meta property=\"og:description\" content=\"Forget Password\">\r\n<meta property=\"og:type\" content=\"website\">\r\n<meta property=\"og:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n\r\n<meta name=\"twitter:card\" content=\"summary\">\r\n<meta name=\"twitter:title\" content=\"Forget Password\">\r\n<meta name=\"twitter:site\" content=\"@https://zettagame.com/\"> \r\n<meta name=\"twitter:description\" content=\"Forget Password\">\r\n<meta name=\"twitter:image\" content=\"https://zettagame.com/assets/images/favicon.png\">\r\n<meta name=\"twitter:image:alt\" content=\"Forget Password\">\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `icon_url` varchar(1000) DEFAULT NULL,
  `action_url` varchar(1000) DEFAULT NULL,
  `shoot_count` int(11) DEFAULT NULL,
  `created_on` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `description`, `icon_url`, `action_url`, `shoot_count`, `created_on`) VALUES
(1, 'shdfg', 'dsf', 'fdsf', 'dsfs', 3, '2024-12-11 10:36:50'),
(2, 'Play Free Arcade Games – Classic & New Titles Onli', 'Enjoy the best arcade games online at ZettaGame. Play classic and modern arcade games for free—no downloads, just pure gaming fun!', '', 'https://zettagame.com/arcade-games', 0, '2025-02-17 13:28:40'),
(3, 'Free Shooter Games Online – Action-Packed Gameplay', 'Play thrilling shooter games online for free! Test your skills in action-packed FPS, battle royale, and sniper games at ZettaGame.', NULL, 'https://zettagame.com/shooter-games', NULL, '2025-02-17 14:06:55'),
(4, 'ZettaGame | Play Free Online Games & Have Fun', 'Find a huge collection of free online games at ZettaGame! Enjoy puzzles, arcade, racing, shooting, and more. Play now and experience endless fun!', NULL, 'https://zettagame.com/', NULL, '2025-02-17 15:11:43'),
(5, 'ZettaGame | Play Free Online Games & Have Fun', 'Find a huge collection of free online games at ZettaGame! Enjoy puzzles, arcade, racing, shooting, and more. Play now and experience endless fun!', NULL, 'https://zettagame.com/', NULL, '2025-02-25 15:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  `ev` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `annual_income` varchar(50) NOT NULL,
  `finance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `device` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `loc` varchar(20) NOT NULL,
  `isp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `device` varchar(100) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `ip`, `device`, `reset_token`, `created_at`) VALUES
(1, 'suraj raj', 'sachinsk4832499@gmail.com', '$2y$10$wXrGOEVBPCBhGpTKRvUFyu.bCN87RRJzHrABq/Li5svT2wfumoMca', '9876543210', '106.219.166.253', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Sa', '8733019e9951de8555e43929a354b337', '2024-12-18 07:46:09'),
(2, 'danish', 'danish@gmail.com', '$2y$10$VCRut3J26jw07M3F8dtMsO1m/IJnMhO4ssUpfeZjBfVFaJFxOm0Em', '9876355320', '106.219.162.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Sa', NULL, '2025-02-04 04:59:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games_ev`
--
ALTER TABLE `games_ev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games_images`
--
ALTER TABLE `games_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games_videos`
--
ALTER TABLE `games_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `games_ev`
--
ALTER TABLE `games_ev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games_images`
--
ALTER TABLE `games_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT for table `games_videos`
--
ALTER TABLE `games_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
