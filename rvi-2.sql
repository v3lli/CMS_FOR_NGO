-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 11, 2020 at 07:41 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_test2`
--

CREATE TABLE `comment_test2` (
  `id` int(11) NOT NULL,
  `user` tinytext NOT NULL,
  `article` int(11) NOT NULL,
  `comment` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_test2`
--

INSERT INTO `comment_test2` (`id`, `user`, `article`, `comment`, `create_date`) VALUES
(1, 'mrbeans', 4, 'its all about th beans', '2020-01-23 12:48:51'),
(2, 'mrash', 4, 'the beans!!!', '2020-01-23 13:11:39'),
(3, 'mrbeans', 4, 'beans :D', '2020-01-23 13:21:08'),
(4, 'mrash', 4, 'flantasy flan!!', '2020-01-23 14:07:13'),
(5, 'fake', 4, 'ooooo shut up joor!! ', '2020-01-24 18:56:36'),
(6, 'fake', 4, 'make resin hear word\r\n', '2020-01-24 23:09:32'),
(7, 'fake', 2, 'soo true', '2020-01-24 23:09:49'),
(8, 'fake', 2, 'jhksdhfa\r\ncsljkdhfa\r\nadhjsgd\r\ncsjdhblad\r\ncdbvskjdjma\r\ndslbkjvs\r\ndvsd;klbva\r\ndcvmdd;klvbhsdlc\r\nsnvbsbdvn\r\ndvmns;lvbsd\r\n', '2020-01-24 23:10:04'),
(9, 'fake', 3, 'mad', '2020-01-25 01:19:20'),
(10, 'fake', 4, 'thank god oo', '2020-01-25 16:51:27'),
(11, 'fake', 4, 'did I hear him?', '2020-01-25 16:52:06'),
(12, 'fake', 3, 'damn! it\'s not showing names anymore.\r\n', '2020-01-25 17:11:43'),
(13, 'fake', 3, 'ooo', '2020-01-25 17:14:49'),
(14, 'fake', 3, 'fixed it B)\r\n', '2020-01-25 17:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `topic` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `info` text NOT NULL,
  `body` longtext NOT NULL,
  `thumb` varchar(30) NOT NULL,
  `spread` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `content_test`
--

CREATE TABLE `content_test` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(30) NOT NULL,
  `info` mediumtext NOT NULL,
  `body` longtext NOT NULL,
  `thumb` varchar(30) DEFAULT NULL,
  `spread` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_test`
--

INSERT INTO `content_test` (`id`, `title`, `author`, `info`, `body`, `thumb`, `spread`) VALUES
(3, 'dkjclkasdj', 'xksdjhcsk', 'kcjsdhcksh', 'shbcskjcs', '../..//images/beans.jpg', NULL),
(4, 'hdakdh', 'skdjhcsk', 'sbcsj', 'dmhbsd', '../..//images/beans.jpg', NULL),
(5, 'jhkjash', 'sjbhcsh', 'sdhbcsh', 'sbcsb', '../..//images/bobcock.jpeg', NULL),
(6, 'masbdans', 'as,mx.as', 'asxaasxas', 'asxasx', '..//images/IMG_1090-2.jpg', '..//images/IMG_1090-2.jpg'),
(7, 'hdgkjsh', 'snjkd', 'msbdcja', 'ksjdlkcqak', '..//images/linc.png', '..//images/IMG_1252.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content_test2`
--

CREATE TABLE `content_test2` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `info` text NOT NULL,
  `body` longtext NOT NULL,
  `thumb` varchar(40) NOT NULL,
  `spread` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_test2`
--

INSERT INTO `content_test2` (`id`, `title`, `author`, `info`, `body`, `thumb`, `spread`) VALUES
(2, 'COPING WITH DEMONS: MENTAL HEALTH STORIES FROM THE PAST ABOUT #1', 'Redd Beans', 'Mental disorders without doubt have taken a large toll on society. People with these conditions have a diversity of experiences coping; from managing it well to being borderline suicidal.', 'Mental disorders without doubt have taken a large toll on society. People with these conditions have a diversity of experiences coping; from managing it well to being borderline suicidal. Living with a mental disorder is not easy and it goes without saying that coping with certain physical illnesses comes nowhere near coping with depression, anxiety and the likes. But as much as these illnesses way people down, it is not uncommon to hear stories of people who excelled greatly in life and in some cases, found ways to beat the illnesses. This article will be looking into the experiences of some well-known people with mental disorders.\r\nIn the 1800’s, mental health was not exactly a field that was well studied or known about. But there are quite glaring pointers to signs of mental disorders in the life story of Abraham Lincoln. He was said to have suffered from ‘melancholy’ which was the 19th century equivalent of what we call depression. Lincoln is a well-known figure in history. He serves different capacities in the United Stated, most notably, as the 16th president of the United States. He led the nation through the American Civil War, abolished slavery and set the government and economy of the nation in a fresh, new direction. \r\nLincoln had it tough growing up. He was born in a one-room log cabin on Sinking Spring Farm near Hodgenville, Kentucky. He lived with his parents and sister, Sarah. Sadly, at the young age of nine, he lost his mother and ten years later, his sister died during childbirth, an event which reportedly distressed Abraham.\r\nLincoln’s first recorded romantic interest was Ann Rutledge. Sources have it that they were in a relationship in 1835 but unfortunately, that year, she died most likely of typhoid fever. The next year, he got into a relationship with Mary Owens but ended up breaking up with her in 1837. Once again, he met a woman and got engaged to her in 1840 – Mary Todd. Their wedding was set for 1841 but Lincoln went on to cancel the wedding and break up with Todd. A couple of weeks after his breakup, Lincoln wrote a letter to John T. Stuart, a past colleague of his. In the letter he mentioned, “I am now the most miserable man living. To remain as I am is impossible; I must die or be better, it appears to me.” Lincoln of course did not end up alone. He ended up reconciling with Todd and marrying her in 1842. \r\n', '..//images/linc.png', '..//images/IMG_1252.jpg'),
(3, 'Thoughts from a Balcony', 'Black', 'Dumb and Getting older\r\nNumb and getting colder', 'Thoughts from a Balcony\r\n\r\nDumb and Getting older\r\nNumb and getting colder\r\nAs I write..\r\n\r\nwhat have I learned?\r\n\r\nI learned there are very few things have that cannot be taken from me..very few.\r\n\r\na past? yes.. but right now those are just a couple of memories, so I have memories.\r\nmost of which I even left with other people but memories all the same.\r\n\r\nI have a future but right now thats just a couple dreams/goals and might aswell just be conversation starters because nobody  promised that shit..\r\n\r\nso…the eventuality of death?..yes, Valar Freaking Moghulis\r\nbut as an animal I can’t think of that and the way my peace is set up..I don’t let it motivate me either, its too sure and thankfully..not right now\r\n\r\nRelationships?..whether people leave or not I will make my mark on them and they may leave theirs on me\r\nGod tho..that one’s always there, even right now\r\n\r\nSo Right Now?\r\n\r\nYeah, I have the now, and in it..I am any and everything I want.\r\n\r\nMuse \r\n', '..//images/IMG_0922.jpg', '..//images/IMG_0754.jpg'),
(4, 'I’m better than I know', 'Mr Beans', 'You’re cute and you know\r\nHow I might go so cold\r\nand flip the switch on', 'I’m better than I know\r\n\r\nYou’re cute and you know\r\nHow I might go so cold\r\nand flip the switch on\r\nThe feelings for reasons surrounding how those three words from you are became my mountain of truth\r\nstories of how I got no one above you but on some other level doesn’t change the fact my intentions are true but really what good can I do. Insecure about my status quo apparently more than you know. Maybe it’s life? I never lived it before. But I walked the road to hell and back and all I stepped on were good intentions purer than I ever conceived.\r\nBravado; harder and harder I grow\r\nAnything else is the shit no one can ever relates to \r\nAnd I can never blame you and I’ll rather game you\r\n', '..//images/IMG_1303-6.jpg', '..//images/IMG_1293-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namefirst` tinytext NOT NULL,
  `namelast` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL,
  `username` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namefirst`, `namelast`, `email`, `password`, `username`) VALUES
(1, 'j', 'lingz', 'beans@beans.com', 'useless', 'mrbeans'),
(2, 'Marc', 'rash', 'betterthanjlingz@gmail.com', 'beansaswell', 'mrash'),
(3, 'fake', 'fake', 'fake@fakemail.com', '$2y$10$vU3K58twBzqSeHxMlNEwV.lvXMAe/7mFwKWexv15c4Zrdmcky8N4S', 'fake');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `namefirst` tinytext NOT NULL,
  `namelast` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `pass` longtext NOT NULL,
  `username` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_test2`
--
ALTER TABLE `comment_test2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_test`
--
ALTER TABLE `content_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_test2`
--
ALTER TABLE `content_test2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_test2`
--
ALTER TABLE `comment_test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_test`
--
ALTER TABLE `content_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `content_test2`
--
ALTER TABLE `content_test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
