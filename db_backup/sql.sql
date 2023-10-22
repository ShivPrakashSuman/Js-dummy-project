-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_user2`
--

CREATE TABLE `add_user2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_user2`
--

INSERT INTO `add_user2` (`id`, `name`, `email`, `salary`, `city`, `created`) VALUES
(1, 'Shiv Suman', 'shiv742@gmail.com', '45000', 'Kota (raja.)', '2022-10-18 15:22:09'),
(2, 'Pawan ', 'pawan742@gmail.com', '4200', 'Jaipur', '2022-10-18 15:57:10'),
(3, 'Dev  ', 'dev14@gmail.com', '4800', 'Delhi', '2022-10-18 15:59:18'),
(5, 'Rohit', 'rohit444@gmail.com', '42000', 'Kota', '2023-01-25 11:27:16'),
(6, 'SHIV SUMAN', 'sumanshivprakash742@gmail.com', '45000', 'Kota', '2023-01-25 11:29:06'),
(7, 'SHIVSUMAN', 'shiv742@gmail.com', '4500', 'Kota', '2023-01-25 11:31:50'),
(8, 'SHIV SUMAN', 'shiv74@gmail.com', '4500', 'Kota', '2023-01-25 11:32:26'),
(9, 'Hariom Saini ', 'hariom12@gmail.com', '4500', 'Bundi', '2023-01-25 13:52:24'),
(10, 'Balesh', 'Balesh@gmail.com', ' 154', 'Kota', '2023-01-25 14:00:04'),
(11, 'Alex Saini', 'alex777@gmail.com', '450000', 'Kota', '2023-01-30 04:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_data2`
--

CREATE TABLE `blog_data2` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_data2`
--

INSERT INTO `blog_data2` (`id`, `title`, `description`, `image`, `status`, `created`) VALUES
(1, 'Smart Home Security ', '<p>Lorem&nbsp;<em>i</em><em>psum&nbsp;</em>dolor sit amet, consectetur adipiscing elit.&nbsp;<strong>Phasellus cursus</strong>, lacus at fringilla lacinia p</p>\r\n', '1674923158category.jpg', 'yes', '2022-10-19 09:20:35'),
(2, 'Mobile App Security', '<hr />\r\n<h1>What is Lorem Ipsum?&nbsp;What is Lorem Ipsum? What is Lorem Ipsum?&nbsp;What is Lorem Ipsum?</h1>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', '1674923819biscit.jpg', 'yes', '2022-10-19 09:37:26'),
(4, 'Buy Apple Watch - Sport ', '<p><em>Apple Watch</em>&nbsp;Series 8, with new health and safety features. Trade in an eligible&nbsp;<em>Apple Watch</em>&nbsp;and explore financing at apple.com&nbsp;<em>Apple Watch</em>&nbsp;Series 8, with new health and safety features. Trade in an eligible&nbsp;<em>Apple Watch</em>&nbsp;and explore financing at apple.com<em>Apple Watch</em>&nbsp;Series 8, with new health and safety features. Trade in an eligible&nbsp;<em>Apple Watch</em>&nbsp;and explore financing at apple.com</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1667128104watch6.jfif', 'yes', '2022-10-21 09:44:17'),
(5, ' Dubai United Arab Emirates Pictures ', '<p>&nbsp;H<em>d Dubai wallpapers</em>&nbsp;and&nbsp;<em>background images</em>. Perfect for your desktop laptop, or tablet -&nbsp;<em>Wallpaper</em>&nbsp;...</p>\r\n', '1666345863dubai.avif', 'yes', '2022-10-21 09:51:03'),
(6, 'Big Boy Toyz, a pre-owned luxury car dealer deals with 24 brands', '<p>BBT started in 2009 as a benchmark model for the Pre-Used, or how we prefer to see it as, Pre-Loved Car Brand. The mission was simple, direct and drove effect - delivering a new dimension of luxury while standardising &amp; raising platforms for the used car market in India.</p>\r\n\r\n<p>Since our inception our primary aim has been our passion for delivering excellence which became our mission. YOU (our patrons) are the driving force behind our company and making sure you get the best is what we thrive on.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>MISSION</h3>\r\n\r\n<p>The journey began in 2009 when BBT was founded in New Delhi, India. Since then our mission has been to provide quality exotic cars with highly personalized care at a competitive price. Creating a new benchmark for excellence in every aspect of our business.</p>\r\n', '1667129377bbt.png', 'yes', '2022-10-30 11:21:16'),
(9, 'files property (input:file) JavaScript - Dottoro Web Reference', '<p>The .<em>prop</em>() method gets the property value for only the first element in the matched set. It returns undefined for the value of a property that has not been&nbsp;...</p>\r\n\r\n<p>(pre-1.6):&nbsp;(Boolean) Changed with checkbox st...</p>\r\n\r\n<p>(1.6+):&nbsp;(String) Initial state of the checkbox;&nbsp;</p>\r\n\r\n<p>The .<em>prop</em>() method gets the property value for only the first element in the matched set. It returns undefined for the value of a property that has not been&nbsp;...</p>\r\n\r\n<p>(pre-1.6):&nbsp;(Boolean) Changed with checkbox st...</p>\r\n\r\n<p>(1.6+):&nbsp;(String) Initial state of the checkbox;&nbsp;</p>\r\n', '1674924076setting.jpg', 'yes', '2023-01-26 10:18:09'),
(12, 'What does .files do in JavaScript?', '<p>What does .files do in JavaScript?</p>\r\n\r\n<p>files is&nbsp;<strong>a FileList of the file(s) selected by the user in the input[type=file] element you&#39;re referencing via the id in your id variable</strong>. Each entry in the FileList is a File , which gives you the name of the file (without path information) and which can be used for accessing the files.20-Oct-2013</p>\r\n', '1674924119ppp.png', 'yes', '2023-01-26 10:24:44'),
(13, 'id=\"status1\"', '<p>id=&quot;status1&quot;</p>\r\n\r\n<p>What does .files do in JavaScript?</p>\r\n\r\n<p>files is&nbsp;<strong>a FileList of the file(s) selected by the user in the input[type=file] element you&#39;re referencing via the id in your id variable</strong>. Each entry in the FileList is a File , which gives you the name of the file (without path information) and which can be used for accessing the files.20-Oct-2013</p>\r\n', '1674731053cool.jpg', 'no', '2023-01-26 11:04:13'),
(14, 'Pizza Blog', '<p>Thursday Night&nbsp;<em>Pizza</em>&nbsp;is a&nbsp;<em>pizza</em>&nbsp;recipe&nbsp;<em>blog</em>&nbsp;featuring the largest collection of homemade&nbsp;<em>pizza</em>&nbsp;recipes on the Internet, from doughs to&nbsp;<em>pizzas</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>10&nbsp;<em>Blogs</em>&nbsp;for&nbsp;<em>Pizza</em>&nbsp;Lovers &middot; Baking Steel &middot; Scott&#39;s&nbsp;<em>Pizza</em>&nbsp;Journal &middot;&nbsp;<em>Pizza</em>&nbsp;Therapy &middot; For the Love of&nbsp;<em>Pizza</em>&nbsp;&middot; Serious Eats &middot; Legends of&nbsp;<em>Pizza</em>&nbsp;&middot;&nbsp;<em>Pizza</em>&nbsp;Delivery Stories &middot; I&nbsp;...</p>\r\n', '1675052634biscit5.png', 'yes', '2023-01-26 11:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `blog_table`
--

CREATE TABLE `blog_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `diescription` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_table`
--

INSERT INTO `blog_table` (`id`, `title`, `diescription`, `image`, `status`, `created`, `updated`) VALUES
(1, ' Smart Watch Apple ', '<p>Introducing <strong>Apple Watch Series</strong> 8, A<em>pple Watch SE and the new Apple Watch </em>Ultra</p>\r\n', '1665829030apple2.jfif', 'yes', '2022-10-12 08:49:29', ''),
(2, ' Watch Apple ', '<p>Suppare watch</p>\r\n', '1666182226pic.jpg', 'yes', '2022-10-12 08:50:56', ''),
(5, 'Smart Phone ', 'iphone  , one plus', '1665727285teer.jpg', 'yes', '2022-10-12 10:22:47', ''),
(6, 'Funny iamges ...', 'Funny girl , boy image ... ', '1665727150B8297726-3C93-433D-AD62-B325097932BD.jpg', 'no', '2022-10-13 09:22:05', ''),
(7, 'trlkuifr', 'etryr', '1665727291sidhu.png', 'yes', '2022-10-13 13:58:38', ''),
(8, 'Demo image', 'coumpny employ', '1665727297maree.jpg', 'yes', '2022-10-13 14:38:19', ''),
(9, 'This is Blog ', 'this is blog description', '1665727303sidhu.png', 'yes', '2022-10-14 05:33:44', ''),
(12, 'this is blog', 'this is blog description', '1665726640dehli.jpg', 'yes', '2022-10-14 05:50:40', ''),
(13, 'this is blog', '<p><strong>Apollo 11</strong></p><p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href=\"http://en.wikipedia.org/wiki/Neil_Armstrong\">Neil Armstrong</a> and <a href=\"http://en.wikipedia.org/wiki/Buzz_Aldrin\">Buzz', '1665728176ball-2157465__340.webp', 'yes', '2022-10-14 06:16:16', ''),
(14, 'This table Save Blogs ........', '<p><em><strong>The&nbsp;HTML&nbsp;&lt;img&gt; tag is used to embed an&nbsp;image&nbsp;in a web page.&nbsp;Images&nbsp;are not technically inserted into a web page;&nbsp;images&nbsp;are linked to web pages. The &lt;img&gt; tag</strong></em></p>\r\n', '1665757464004.jpg', 'yes', '2022-10-14 14:24:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_user2`
--

CREATE TABLE `blog_user2` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_user2`
--

INSERT INTO `blog_user2` (`id`, `fname`, `lname`, `email`, `password`, `created`) VALUES
(1, 'Ritik', 'Suman', 'ritik112@gmail.com', '112', '2022-10-18 04:57:45'),
(2, 'Shiv', 'Suman', 'shiv742@gmail.com', '742', '2022-10-18 04:59:28'),
(3, 'Akash', 'Saini', 'Akash74@gmail.com', '7474', '2022-10-18 07:33:52'),
(4, 'Hanu', 'Saini', 'Hanu1245@gmail.com', '1245', '2022-10-18 07:51:19'),
(5, 'Dev', 'saini', 'dev14@yopmail.com', '1414', '2022-10-20 06:05:24'),
(6, 'Rehan', 'saini', 'rehan25@gmail.com', '2525', '2022-10-20 06:06:10'),
(7, 'Dev', 'Suman', 'dev1@yopmail.com', '1111', '2023-01-24 10:12:44'),
(8, 'Ashu', 'Suman', 'ashu5566@gmail.com', '5566', '2023-01-24 10:44:53'),
(9, 'Alex', 'Saini', 'alex555@gmail.com', '555', '2023-01-30 09:04:15'),
(10, 'SHIV', 'SUMAN', 'shiv2222@gmail.com', '2222', '2023-09-05 14:27:06'),
(11, 'Admin', 'saini', 'admin11@yopmail.com', '11', '2023-10-22 10:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `cat_data2`
--

CREATE TABLE `cat_data2` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_data2`
--

INSERT INTO `cat_data2` (`id`, `brand`, `description`, `created`) VALUES
(1, 'Apple ', '<p>Get up to ₹6000 instant savings on orders over ₹41900. Plus No Cost EMI. Terms apply. iPhone, iPad, Mac,&nbsp;<em>Apple</em>&nbsp;Watch, AirPods and more. Buy Direct from&nbsp;<em>Apple</em>. Services:&nbsp;<em>Apple</em>&nbsp;Trade In, Shop with Specialists, Free delivery, No Cost EMI available.</p>\r\n\r\n<p>Discover the innovative world of&nbsp;<em>Apple</em>&nbsp;and shop everything iPhone, iPad,&nbsp;<em>Apple</em>&nbsp;Watch, Mac, and&nbsp;<em>Apple</em>&nbsp;TV, plus explore accessories, entertainment, and expe ..</p>\r\n', '2022-11-23 09:33:28'),
(3, 'Jaipur City in Rajasthan', '<p>Jaipur is the capital of India&rsquo;s Rajasthan state. It evokes the royal family that once ruled the region and that, in 1727, founded what is now called the Old City, or &ldquo;Pink City&rdquo; for its trademark building color. At the center of its stately street grid (notable in India) stands the opulent, colonnaded City Palace complex. With gardens, courtyards and museums, part of it is still a royal residence.&nbsp;―&nbsp;Google</p>\r\n\r\n<p><em>Jaipur</em>&nbsp;formerly Jeypore, is the capital and largest city of the Indian state of Rajasthan. As of 2022, the city had a population of 4.5 million,&nbsp;...</p>\r\n', '2023-01-30 05:26:50'),
(4, 'SAINI BRAND', '<p>Each variety brings an important element to the blend--depth and apple fruit notes from the Chardonnay, zesty citrus elements from the Sauvignon Blanc and a&nbsp;...</p>\r\n\r\n<p>Play &amp; Download&nbsp;<em>Saini</em>&nbsp;Ek&nbsp;<em>Brand</em>&nbsp;Hai MP3 Song for FREE by Amit&nbsp;<em>Saini</em>&nbsp;Rohtakiya from the album&nbsp;<em>Saini</em>&nbsp;Ek&nbsp;<em>Brand</em>&nbsp;Hai. Download the song for offline listening now.</p>\r\n', '2023-01-30 05:31:29'),
(5, 'Group-IB Blog', '<h3>IB Blog Post &ndash; Featured-02 - Industrial Brand</h3>\r\n\r\n<p><cite>https://industrialbrand.com&nbsp;&rsaquo; providing-engaging-content</cite></p>\r\n\r\n<p>We believe changes in technology and the workforce are creating opportunities in the AEC industry and its leadership must adopt new&nbsp;<em>branding</em>&nbsp;and&nbsp;...</p>\r\n', '2023-01-30 05:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `first_user`
--

CREATE TABLE `first_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `create` timestamp NOT NULL DEFAULT current_timestamp(),
  `update` varchar(255) NOT NULL,
  `delete` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `first_user`
--

INSERT INTO `first_user` (`id`, `name`, `email`, `password`, `mobile`, `create`, `update`, `delete`) VALUES
(4, 'Deva  Saini', 'dev14@gmail.com', '1414', '8657700000', '2022-10-11 16:47:14', '', ''),
(5, 'Suresh Saini', 'suresh12@gmail.com', '1212', '90001158842', '2022-10-11 16:55:05', '', ''),
(6, 'Rahul Saini ', 'rahul25@gmail.com', '2525', '07442990975', '2022-10-11 18:38:27', '', ''),
(7, 'Hariom Saini ', 'hariom99@gmail.com', '9999', '9996660469', '2022-10-11 21:47:20', '', ''),
(8, 'Lalit Saini', 'lalit44@gmail.com', '4444', '7000096300', '2022-10-11 16:23:17', '', ''),
(9, 'Monu Saini ', 'monu88@gmail.com', '8888', '9000008888', '2022-10-11 16:26:12', '', ''),
(10, 'Pawan Saini ', 'pawan742@gmail.com', '742', '9057760469', '2022-10-11 17:25:04', '', ''),
(11, 'Sonu Saini', 'sonu55@gmail.com', '5555', '9555555521', '2022-10-11 17:26:22', '', ''),
(12, 'SHIV KRAKASH SUMAN', 'ritik112@gmail.com', '12345', '9057760469', '2022-10-13 06:45:49', '', ''),
(15, 'SHIV KRAKASH SUMAN', 'shiv742@gmail.com', '5764', '9057760469', '2022-12-19 12:26:00', '', ''),
(16, 'Dev  Saini', 'dev1@yopmail.com', '1111', '9057760469', '2023-10-22 08:43:33', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_user2`
--
ALTER TABLE `add_user2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_data2`
--
ALTER TABLE `blog_data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_table`
--
ALTER TABLE `blog_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_user2`
--
ALTER TABLE `blog_user2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_data2`
--
ALTER TABLE `cat_data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_user`
--
ALTER TABLE `first_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_user2`
--
ALTER TABLE `add_user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_data2`
--
ALTER TABLE `blog_data2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_table`
--
ALTER TABLE `blog_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_user2`
--
ALTER TABLE `blog_user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cat_data2`
--
ALTER TABLE `cat_data2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `first_user`
--
ALTER TABLE `first_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
