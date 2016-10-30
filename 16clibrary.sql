-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 08:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `16clibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(50) NOT NULL,
  `bookName` varchar(50) NOT NULL,
  `introduction` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `publishdate` date NOT NULL,
  `language` enum('English','Mandarin','Bahasa Melayu','Hindi','Japanese','Filipino','Cantonese','Russian','Korean','Vietnamese') NOT NULL,
  `price` double NOT NULL,
  `bName` varchar(65) DEFAULT NULL,
  `bDate` datetime DEFAULT NULL,
  `trend` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookName`, `introduction`, `author`, `publisher`, `genre`, `publishdate`, `language`, `price`, `bName`, `bDate`, `trend`) VALUES
(150003, 'Southern University College', 'Southern University College is the first non-profit higher education institute and private university college in Skudai, Johor Bahru District, Johor, Malaysia. It was previously known as Southern College, established in 1990.', 'Lu Chow Ling', 'Johor Bahru', 'University Fiction', '2015-05-01', 'Korean', 0.99, NULL, NULL, 1),
(150004, 'Play wells with Windows Ten', 'Windows 10 is a personal computer operating system developed and released by Microsoft as part of the Windows NT family of operating systems. It was officially unveiled in September 2014 following a brief demo at Build 2014. The first version of the operating system entered a public beta testing process in October 2014, leading up to its consumer release on July 29, 2015', 'Jenkin', 'ASUS', 'Computer Science', '2015-06-07', 'English', 3699.98, NULL, NULL, 5),
(150010, 'Love Life', 'Lovelife is a 1997 romantic comedy film written and directed by Jon Harmon Feldman. The ensemble cast includes Matt Letscher, Sherilyn Fenn, Saffron Burrows, Carla Gugino, Bruce Davison, Jon Tenney and Peter Krause.\r\n\r\nLovelife was nominated for a Feature Film Award at the 1997 Austin Film Festival, and won an Audience Award at the Los Angeles Independent Film Festival. The film was winner of the screenplay award at the L.A. Indie fest.', 'John Cena', 'WWE.Sdn.Bhd', 'Sports', '2004-08-03', 'English', 999.99, NULL, NULL, 4),
(150011, 'Pokemon', 'The franchise began as a pair of video games for the original Game Boy, developed by Game Freak and published by Nintendo. The franchise now spans video games, trading card games, animated television shows and movies, comic books, and toys. Pokémon is the second-most successful and lucrative video game-based media franchise in the world, behind only Nintendo''s Mario franchise.', 'BANDAI', '3DS', 'Game', '2005-03-14', 'Japanese', 29.99, NULL, NULL, 0),
(150012, 'Dixy', 'The company was founded in 1992 in Saint Petersburg and began its expansion in 1999 when it opened a store in Moscow and from there began to expand to other regions of the country. It operates three brands.\r\n\r\nDIXY has 8 distribution centers that supply its stores in the key regions and also owns a fleet of trucks, which optimizes transportation costs and ensures prompt deliveries to stores.\r\n\r\nThe DIXY main competitors are X5 Retail Group, Magnit, Metro Group, Auchan and others.', 'BUAN SHENG ETNERPRISE', 'MALEE MINERAL WATER SDN.BHD', 'Water', '2015-10-22', 'English', 2.99, NULL, NULL, 1),
(150013, 'Mom is best', 'A mother is the female parent of a child. Mothers are women who inhabit or perform the role of bearing some relation to their children, who may or may not be their biological offspring. Thus, dependent on the context, women can be considered mothers by virtue of having given birth, by raising their child(ren), supplying their ovum for fertilisation, or some combination thereof.', 'My mom', 'Lenovo Z40', 'Family Reading', '2015-11-15', 'Cantonese', 52013.14, NULL, NULL, 0),
(150014, 'All is well', 'All Is Well is a 2015 Indian Hindi-language romantic comedy-drama film directed by Umesh Shukla and produced by Bhushan Kumar, Krishan Kumar, Shyam Bajaj and Varun Bajaj and co-produced by Ajay Kapoor. It stars Abhishek Bachchan, Rishi Kapoor, Asin and Supriya Pathak in lead roles.', 'My Dad', 'JunFu-PC', 'Family Reading', '2015-09-29', 'Mandarin', 123.45, NULL, NULL, 0),
(150015, 'The Fault in Our Stars', 'The Fault in Our Stars is the sixth novel by author John Green, published in January 2012. The title is inspired by Act 1, Scene 2 of Shakespeare''s play Julius Caesar, in which the nobleman Cassius says to Brutus: "The fault, dear Brutus, is not in our stars, / But in ourselves, that we are underlings."', 'John Green', 'Dutton Books', 'Indie', '2012-01-01', 'English', 29.99, NULL, NULL, 0),
(150016, 'Heart-Shaped Hack', 'When Kate Watts abandoned her law career to open a food pantry in Northeast Minneapolis, she never dreamed it would be this difficult. Facing the heartbreaking prospect of turning hungry people away, she is grateful for the anonymous donations that begin appearing at the end of each month. Determined to identify and thank her secret benefactor, she launches a plan and catches Ian —a charismatic hacker with a Robin Hood complex—in the act.', ' Tracey Garvis-Graves', 'B00YCUGPXK', 'Hacking Skill', '2015-08-25', 'English', 41.99, NULL, NULL, 13),
(150017, 'Speak', 'Speak, published in 1999, is a young adult novel by Laurie Halse Anderson that tells the story of high school freshman Melinda Sordino. After accidentally busting an end-of-summer party due to an unnamed incident, Melinda is ostracized by her peers because she will not say why she called the police.', 'Laurie Halse Anderson', 'Anonymous', 'Mystery Fiction', '2001-04-01', 'English', 29.99, NULL, NULL, 0),
(150018, 'Thirteen Reasons Why', 'Inside he discovers several cassette tapes recorded by Hannah Baker—his classmate and crush—who committed suicide two weeks earlier. Hannah''s voice tells him that there are thirteen reasons why she decided to end her life. Clay is one of them.', 'Jay Asher', 'Razorbill', 'Mysterious Fiction', '2007-10-08', 'English', 2014, NULL, NULL, 1),
(150019, 'The Hunger Games', 'The novels were all well received. In August 2012, the series ranked second, beaten only by the Harry Potter series in NPR''s poll of the top 100 teen novels, which asked voters to choose their favorite young adult books.', 'Suzanne Collins', 'Scholastic Press', 'Hungry Book', '2008-09-14', 'English', 49.99, NULL, NULL, 1),
(150020, 'Lev', 'From the moment Lev Leokov spots the young woman hiding behind her hair in the middle of the gentleman''s club, he can''t take his eyes off of her. For the very first time in his life, he is affected. Having been told his entire life that he can''t process or understand emotion, he considers it a big deal. When Mina Harris gets caught red-handed with a wallet that isn''t hers, she falls apart...', 'Belle Aurora', 'Self Publisher', 'Handsome Book', '2015-10-11', 'English', 29.99, NULL, NULL, 0),
(150021, 'Irresistibly Yours', 'Hotshot sports editor Cole Sharpe has been freelancing for Oxford for years, so when he hears about a staff position opening up, he figures he’s got the inside track. Then his boss drops a bombshell: Cole has competition. Female competition, in the form of a fresh-faced tomboy who can hang with the dudes—and write circles around them, too. Cole usually likes his women flirty and curvy, but he takes a special interest in his skinny, sassy rival, if only to keep an eye on her. And soon, he can’t take his eyes off her.', 'Lauren Layne', '', 'Love Story', '2015-10-06', 'English', 13.14, '10003', '2015-11-16 08:14:26', 1),
(150022, 'I am Charlotte Simmons', 'I am Charlotte Simmons is a 2004 novel by Tom Wolfe, concerning sexual and status relationships at the fictional Dupont University. Wolfe researched the novel by talking to students at North Carolina, Florida, Penn, Duke, Stanford, and Michigan.', 'Tom Wolfe', 'Picador', 'Bad Sex in Fiction', '2005-08-30', 'English', 34.99, NULL, NULL, 2),
(150023, 'Lolita', 'Lolita is a novel by Vladimir Nabokov, written in English and published in 1955 in Paris, in 1958 in New York City, and in 1959 in London. Nabokov''s own translation of the book into Russian was published by Phaedra Publishers in New York in 1967.', 'Vladimir Nabokov, Craig Raine', 'Penguin Classics', 'Lolita book', '2000-02-03', 'English', 333.33, '10003', '2015-11-19 10:38:59', 21),
(150024, 'Give me a ticket back to Childhood', '', 'Nguyn Nht Ánh', 'NXB Tr', 'Unknown', '2008-01-01', 'Vietnamese', 52.99, NULL, NULL, 1),
(150025, 'Another', 'a Japanese mystery horror novel by Yukito Ayatsuji, published on October 29, 2009 by Kadokawa Shoten. The story focuses on a boy named K?ichi Sakakibara who, upon transferring into Yomiyama Middle School and meeting the curious Mei Misaki, finds himself in a mystery revolving around students and people related to his class falling victim to gruesome, senseless deaths.', 'Yukito Ayatsuji', 'Kadokawa Shoten', 'Mystery Fiction', '2009-10-29', 'Japanese', 67.99, '10001', '2015-11-16 09:05:41', 6),
(150026, 'Noli Me Tangere (Touch Me Not)', 'Noli me tangere, meaning "don''t touch me" or "don''t tread on me",is the Latin version of words spoken, according to John 20:17, by Jesus to Mary Magdalene when she recognized him after his resurrection.\r\n\r\nThe original Koine Greek phrase, ?? ??? ????? (m? mou haptou), is better represented in translation as "cease holding on to me" or "stop clinging to me".', 'José Rizal, Harold Augenbraum', 'Penguin Classics', 'Nation Classic', '2006-06-27', 'Filipino', 29.99, NULL, NULL, 1),
(150027, 'John Cena: World Wrestling Champ', 'This in-depth biography allows readers an inside look at John Cena''s roots in Massachusetts through the heights of his stardom. Readers will learn many interesting facts about Cenas life before his rise to fame. Fans of action-packed wrestling will love the exciting full-color photographs accompanied by accessible language', 'Tracy Brown', 'The Rosen Publishing Group', 'Wrestle book', '2011-01-01', 'English', 48.99, NULL, NULL, 1),
(150028, 'WWE John Cena', 'Young wrestling fans can learn about their favorite WWE wrestlers in this DK Readers series, each featuring a WrestleMania champion. Full color.', 'Brian Shields', 'DK Readers', 'Wrestle book', '2009-10-05', 'English', 29.99, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` text NOT NULL,
  `type` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70', 1),
(2, 'asd', '7815696ecbf1c96e6894b779456d330e', 1),
(3, 'junfu', '93e7af91c25e454a0387f7ce983327fd', 1),
(4, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 1),
(5, 'qqq', 'b2ca678b4c936f905fb82f2733f5297f', 1),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `no` int(11) NOT NULL,
  `id` int(65) NOT NULL,
  `bookID` int(65) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`no`, `id`, `bookID`, `status`) VALUES
(1, 2, 150001, 0),
(2, 2, 150021, 0),
(3, 2, 150025, 0),
(5, 1, 150003, 1),
(6, 1, 150004, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` text NOT NULL,
  `gender` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `name`, `email`, `gender`) VALUES
(1, '123', '123', '123@123', 1),
(2, 'asd', 'asd', 'asd@asd', 1),
(3, 'junfu', 'junfu', 'junfu@juNfu', 1),
(4, 'aaa', 'aaa', 'aaa@aaa', 2),
(5, 'qqq', 'qqq', 'qqq@qqq', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `bookName` (`bookName`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150095;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
