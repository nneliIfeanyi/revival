-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2025 at 04:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revival`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `author`, `title`, `content`, `createdAt`) VALUES
(6, 'Bro. Wisdom Eze', 'Effective Soul Winning', '<h3>Quarry <strong>Site 2025 Bible Study.</strong></h3>\r\n<p><strong>Text: Lk 1:1-32; Matt 28:18-20; JN 15:16; Lk 19:1-10.</strong></p>\r\n<p>Introduction:</p>\r\n<p>The imperative of soul winning cannot be over emphasized when we consider the value of a soul in God\'s scale. None of us can fully comprehend the scope of the value of a soul in the heart of God. He valued and lounged for the souls of men so much that He came down in search of them. He also become man in His quest to save humanity. The salvation of the souls of men is central to God\'s programme on earth. It is not an over statement to say that God has only one business on earth; the business of winning the souls of men. Those who walk with Him are also called, trained; equipped, and sent to be engaged in this same business Gen 14:13-16; 2Cor 5:18-20; Mk1:16-17. There is a burden in His heart for humanity; the burden to have all men saved.it is His desires for us to bear this same burden. We therefore intend, through this study, to search the scripture on this subject matter in order to gain a deep understanding of this commission given to every believer, so as to help our obedience in this regard. May He bring us to the point where we will be so occupied with the business of winning souls that nothing else will matter to us, in Jesus\' name. Amen.</p>\r\n<p><strong>What is soul winning?</strong>&nbsp; Lk19:10; Matt 18:11-14; Matt 4:19; ROM 10: 13-14; 2Cor 5:18-20.</p>\r\n<p>Soul winning is the acts of winning a soul. It means winning a sinner to the Lord Jesus Christ. It is the act of turning a sinner from sin to righteousness. It is a state of turning a man away from living in sin and for himself to living for Christ. Therefore, soul winning means a deliberate looking for and searching for lost souls to bring them to salvation.</p>\r\n<p><strong>What is effective soul winning?</strong></p>\r\n<p>The word \"effective\" in the context of our study means successful. Therefore, we cannot say that soul winning is effective or successful if it has not turned a sinner away from sin to Christ. Until a sinner is turned away from living in Sin and for Sin to living in Christ and for Christ, the labour of winning his soul is not yet successful. Again, until a man is turned away from Sin into a soul winner, the labour of winning his soul is not yet successful. Remember that we are not talking about becoming a member of one denomination or the other. Bringing a soul to church is not the definition of soul winning, it\'s bringing him or her to Christ.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;What is your understanding of effective soul winning? <strong>Discuss</strong>&nbsp;</p>\r\n<p><strong>Soul Winning: God\'s Sole Business On Earth: </strong>Gen 3:1-13; Lk 4:26-20;&nbsp; 9:51-56; 19:9-10;</p>\r\n<p>God, the first soul winner, is still in the business of winning souls. He has been involved in the work of soul winning right from the beginning. When Adam and Eve sinned, God came down, walking in the garden in search of them. Though the response of man was negative towards God\'s effort to save them (Gen 3:9-13) He went ahead to make a long-term plan for the redemption of man in His quest to save him; Gen 3:15. This commitment was made manifest when He made costs of skins and clothed them (Gen 3:21) instead of the fading fig leaves they had tried using (Gen 3:7).</p>\r\n<p><strong>Soul Winning, Jesus\'</strong> <strong>Exclusive</strong> <strong>Business On Earth: </strong>Lk 2:46-50; 19:10; Matt 4:13-17;&nbsp; 9:35-38; JN 4:31-34; Lk 4:17-20.</p>\r\n<p>Considering the life,&nbsp; burden, and the pursuit of Jesus while here on earth, what is your evaluation of His commitment to soul winning? <strong>Discuss</strong>&nbsp;</p>\r\n<p><strong>Soul Winning, The</strong> <strong>Exclusive</strong> C<strong>ommitment Of The Early Disciples: </strong>Matt 28:18-20; Acts 2:1-22, 37-41; 4:1-31; 6:1-7; 14:20-28; 20:22-28.</p>\r\n<p>God was so pleased with the commitment of these early disciples that He dedicated a book (Acts of the Apostles) to that effect. In your own assessment, what is the degree of their commitment to soul winning? <strong>Discuss</strong>.</p>\r\n<p><strong>Soul Winning, Our Exclusive Reason For Being Here On Earth:</strong>&nbsp; Matt 28:18-20; 2Cor 5:18-20; Matt 9:35-38; Lk 19:8-13; Matt 5:13-16; Mk 1:16-17; 16:15.</p>\r\n<p>God\'s main purpose for leaving us hare on earth is to win souls. It\'s therefore clear that the issue of soul winning has always been God\'s concern. All souls are equally important to God; the rich and poor, the young and old. Rev 6:15-16. It is for this reason He sent Jesus Christ, His only begotten Son, into this wicked world to die on the cross to save the souls of men. He has now given everyone he has saved the ministry of reconciliation (2Cor 5:18-20). This is our responsibility in this world, and we must carry it out diligently and faithfully.</p>\r\n<p>God has given each and everyone of us a space in this field:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Discuss</strong> what this means and it\'s implications.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Discuss</strong> in a practical terms, what is your commitment to this exclusive reason for your living.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Discuss</strong> what has been the principal hindrance to your commitment in this sole business.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;What practical steps are you taking to overcome the hindrances and become committed to this business?</p>\r\n<p><strong>What Is The Implication Of The Word; Winning?</strong></p>\r\n<p>Winning implies that there are contenders over every soul, in a practical terms, <strong>discuss</strong> these contenders. In view of these contenders, what are the biblical and practical way of overcoming them and delivering those who are in their captivity?</p>\r\n<p><strong>The Necessity Of Soul Winning:</strong></p>\r\n<p>God attached a great importance to the salvation of the souls, which He expressed very clearly in the scriptures.</p>\r\n<p><strong>1. A soul is priceless:</strong> Mk 8:36-37; Lk 15:4; PS 49:7-9; JN 10:16.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The worth of a soul is more than the whole world put together. God is never satisfied with many saved souls in any place while there is yet even one sinner still without salvation.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp;2. God is not willing that any should perish. </strong>2Pt 3:8-10; Lk 15:5-10; Ezek 18:1,4; 33:11.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;It pains God\'s heart to lose even one Soul to hell. He is even willing to delay judgement in order to rescue the sinner. All souls belong to Him, and He knows each one personally.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>3. Jesus has already sacrificed His life for the salvation of all.</strong>&nbsp; 2Cor 5:14-15; Phil 2:5-8; Lk 24:45-49; Matt 24:14.&nbsp; &nbsp; &nbsp; &nbsp; Every Sinner\'s salvation has been paid for by Jesus\' death. If we fall to witness this redemptive work, we waste the sacrifice of Jesus. Discuss the gravity of this.</p>\r\n<p><strong>The Implements For Winning Souls:</strong></p>\r\n<p><strong>1. A correct life:&nbsp;</strong> Matt 5:13-16.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The life of Christ in a believer is the hook with which God draws souls into His kingdom. This life is the basic equipment for this business.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Discuss the challenges we face in having and growing this life.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>2. The gospel: </strong>Rom1:16; 10:13-17; 1Cor 1:18; 21-24.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The gospel is God\'s instrument for changing people. No other message is potent enough to deliver men from sin and darkness except the gospel. In your assessment, what is your evaluation of the gospel on our streets and in our pulpits? Is it increasing or decreasing? <strong>Discuss</strong>.</p>\r\n<p><strong>The Blessedness Of Winning Souls:</strong> Prov 11:30; Dan 12:2-3</p>\r\n<p><strong>Conclusion</strong>:</p>\r\n<p>As we draw this matter to a conclusion, the commitment of our Lord Jesus Christ to the business of winning souls should also be our commitment. It is important for us to know that the night comes when no one can respond to this business. JN 9:4. Will you also make this business a priority, or will you leave it at the mercy of your pursuit of earthly things? What is your resolution regarding this business in this year? Would you bow your heart right now and cry out to God to infuse you again with passion and zeal for Soul Winning.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; May the Lord hear your cry and rekindle His fire in you in Jesus\' name. Amen.</p>\r\n<p><strong>Hymn for the Bible study:</strong></p>\r\n<p><strong>Enlarge My Heart O Lord&nbsp;</strong></p>\r\n<p>1. Enlarge my heart o Lord.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; That I may rightly perceive;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Help me to understand.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;What the true burden of the Lord is;&nbsp; &nbsp; &nbsp; &nbsp;That I may not slack any more&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;nor withhold myself from Holy use.</p>\r\n<p>2. Perfect my sight of Lord.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Help me to see as you see;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Right values for eternal things.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lord give me cause my eyes to see;&nbsp; &nbsp; &nbsp; &nbsp;That I see not men as trees;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nor lose sight of my duty and call.</p>\r\n<p><strong>If you have the burden to join our mission team, please, contact this number for details: +2348032495630.</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2025-01-06 21:37:17'),
(7, 'A Christian', 'What we believe', '<p>We believe in one God, the creator and the Father of our Lord Jesus Christ. We believe that Jesus Christ was the Son of God&mdash;fully human and fully divine. We believe that He came in the flesh and died on the cross to save humanity from Sin and its consequences. We believe that God raised Him from the dead and that He will come again to take us to Himself, so that where He is, we might also be. We believe that through believing in Him and following His teachings we inherit eternal life..</p>', '2025-01-07 14:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `audio_sermons`
--

CREATE TABLE `audio_sermons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `speaker` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `is_series` tinyint(1) DEFAULT 0,
  `file_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$T7Coqp8Rj9SijmKKYgafq.vg2Q3BL635uvaW1fkA2yaZCAt.HFuc2');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `names`, `phone`, `message_body`, `created_at`) VALUES
(1, 'Bearing And Reflecting', 'The Life Of Christ.', 'For I am not ashamed of the gospel of Christ: for it is the power of God unto salvation to every one that believeth... Romans 1:16', '2025-08-28 16:18:43'),
(2, 'ifenyi', '08122321932', 'GELLO', '2025-08-28 16:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `pdf_file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `title`, `intro`, `cover_image`, `pdf_file`, `created_at`) VALUES
(1, 'Fit for the kingdom service', 'A clear, practical guide that walks you through exactly what you need to know—without the fluff. Learn the core ideas in minutes, master them in hours.', '/assets/img/magazineIMG/img2.png', '', '2025-08-27 19:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_chapters`
--

CREATE TABLE `ebook_chapters` (
  `id` int(11) NOT NULL,
  `ebook_id` int(11) NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `chapter_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebook_chapters`
--

INSERT INTO `ebook_chapters` (`id`, `ebook_id`, `chapter_number`, `chapter_title`) VALUES
(1, 1, 1, 'Moses Amram'),
(2, 1, 2, 'Vashti Queen');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `theme`, `details`, `poster`, `startDate`, `endDate`, `status`) VALUES
(1, 'Ogbuoma mission outreach', 'Harvesting Egbuoma for Christ', 'A week mission outreach', '', '2025-03-29', '2025-04-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `id2` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `othernames` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `r_state` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `m_status` varchar(255) NOT NULL,
  `work` varchar(100) NOT NULL,
  `trainedAs` varchar(100) NOT NULL,
  `l_assembly` text NOT NULL,
  `createdate` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `id2`, `title`, `surname`, `othernames`, `gender`, `residence`, `lga`, `r_state`, `phone`, `email`, `age`, `m_status`, `work`, `trainedAs`, `l_assembly`, `createdate`, `created_at`) VALUES
(3, 'RL-IM23506', 'Mr', 'Duru', 'Uchechukwu', 'Male', 'Umunwaoma, umudim, Nkume, Njaba, Imo', 'Njaba', 'Imo', '08069296049', 'fudurue@gmail', '46-69', 'Single', 'Business', 'Computer IT', 'RCCG', 'Dec 22, 2024', '2024-12-22 06:56:30'),
(4, 'RL-IM78775', 'Bro.', 'Ezenwa', 'Uchechukwu Jude', 'Male', 'Okwu Akpulu', 'Ideato North', 'Imo state', '09019191445', 'uchechukwuezenwa3@gmail.com', '19-25', 'Single', 'Student', '', 'Emmanuel church Akpulu', 'Dec 22, 2024', '2024-12-22 08:23:49'),
(5, 'RL-AN73108', 'Bro', 'Egwuatu', 'Timothy Nwabueze', 'Male', 'Oba', 'Idemili south', 'Anambra', '09067147632', 'timothyegwuatu95@gmail.com', '36-45', 'Married', 'Missionary', '', 'St Paul&#039;s Ang. Church. Oba', 'Dec 22, 2024', '2024-12-22 09:03:48'),
(6, 'RL-AN74101', '', 'Egwuatu', 'Gloria Ifeyinwa', 'Female', 'Oba', 'Idemili south', 'Anambra', '07037890169', 'ifeyinwag79@gmail.com', '36-45', 'Married', 'Missionary', '', 'St Paul&#039;s Ang. church, Oba', 'Dec 22, 2024', '2024-12-22 09:33:25'),
(7, 'RL-ID24542', 'Bro', 'Udensi', 'Munachi Victor', 'Male', 'Akokwa', 'Imo state', 'Ideato north', '08029162824', 'victorudensi32@gmail.com', '26-35', 'Single', 'Welding work', 'Welder', 'Anglican', 'Dec 22, 2024', '2024-12-22 10:53:59'),
(9, 'RL-IM68282', 'Bro.', 'Maduka', 'Joel Chukwudubem', 'Male', 'Egbuoma', 'Oguta', 'Imo state', '07062824679', 'joelkenneli18@gmail.com', '19-25', 'Single', 'Graphic designer', '', 'Assemblies of God Ubaramehi, Egbuoma', 'Dec 23, 2024', '2024-12-23 08:50:55'),
(10, 'RL-IM73816', 'Bro', 'Eze', 'Wisdom', 'Male', 'Akwu Akokwa', 'Ideato North', 'Imo', '08032495630', 'heaven4all7@gmail.com', '46-69', 'Married', 'Missionary', 'Missionary', 'Anglican church', 'Dec 25, 2024', '2024-12-25 19:48:57'),
(11, 'RL-IM16625', 'Sis', 'Ezeh', 'Amarachikwu Blessing', 'Female', 'Akwu Akokwa', 'Ideato North', 'Imo', '09088445966', '', '13-18', 'Single', 'Student', 'Student', 'Anglican church', 'Dec 25, 2024', '2024-12-25 20:16:43'),
(12, 'RL-LA37795', 'Miss', 'Obiwuru', 'Happiness Chinyere', 'Female', 'Shomimo Igando-Igando', 'Omosholo', 'Lagos', '09138899716', 'obiwuruhappinesschinyere@gmail.com', '26-35', 'Single', 'A Real_Eatate Consultant( Realtor)', '', 'St. John&#039;s Catholic Church Igando-Igando', 'Dec 25, 2024', '2024-12-25 20:18:46'),
(13, 'RL-IM54503', '', 'Eze', 'Wisdom', 'Male', 'Akwu, akokwa', 'Ideato north LGA', 'Imo state', '07066851610', 'wisdome687@gmail.com', '19-25', 'Single', 'Electrician', '', 'St Paul Anglican church akwu, akokwa', 'Dec 25, 2024', '2024-12-25 20:18:49'),
(14, 'RL-IM11932', 'Sis', 'Ezeh', 'Ruth', 'Female', 'Akwu Akokwa', 'Ideato North', 'Imo', '08068100470', 'Ruthwisdomeze@gmail.com', '36-45', 'Married', 'Missionary', 'Missionary', 'Anglican', 'Dec 25, 2024', '2024-12-25 20:20:54'),
(15, 'RL-IM41897', 'Bro', 'Agbasoga', 'John.C.', 'Male', 'Umuafor village along BSC road', 'Oguta', 'Imo state', '07064725947', 'agbasogacj@gmail.com', '19-25', 'Single', 'Music director,and teaching', '', 'Eternal Sacred Order Of The Cherubim and Seraphim.no 8bsc', 'Dec 25, 2024', '2024-12-25 20:50:52'),
(16, 'RL-IM43432', 'Bro', 'Eze', 'Wisdom', 'Male', 'Akwu Akokwa Ideato north Imo State', 'Ideato north', 'Imo State', '08145302797', 'ezewizdom080@gmail.com', '19-25', 'Single', 'Student', '', 'St Paul&#039;s Anglican Church akwu', 'Dec 25, 2024', '2024-12-25 22:44:20'),
(17, 'RL-IM13761', 'Bro', 'Onyejindu', 'Prince Henry', 'Male', 'Umutaku Nkalu Ifakala Mbaitoli LGA, Imo State', 'Mbaitoli', 'Imo', '08130275477', 'gemezuprince1999@gmail.com', '19-25', 'Single', 'Teaching', '', 'Holy Trinity Anglican Church Ifakala Mbaitoli LGA, Imo State.', 'Dec 26, 2024', '2024-12-26 12:48:24'),
(18, 'RL-IM83871', 'Bro', 'Ordu', 'Chijioke', 'Male', 'Ebikoro Umuoba Uratta', 'Owerri North', 'IMO state', '08068711688', 'chijiokeordu2019@gmail.com', '36-45', 'Married', 'Business', '', 'ESOCS', 'Dec 26, 2024', '2024-12-26 17:28:03'),
(19, 'RL-IN84420', 'Sister', 'Chijioke', 'Deborah', 'Female', 'Ebikoro Umuoba Uratta', 'Owerri North', 'Ino', '07061221974', 'debbie1948@gmail.com', '26-35', 'Married', 'Anticipating', '', 'ESOCS', 'Dec 26, 2024', '2024-12-26 17:34:14'),
(20, 'RL-AN48381', 'Mrs', 'Nwakwu', 'Nkolika', 'Female', 'Mbata uga', 'Aguta', 'Anambra', '09072942726', 'nkoliibeji@gmail.com', '36-45', 'Married', 'Teaching', '', 'God&#039;s calvary church uga', 'Dec 27, 2024', '2024-12-27 09:21:52'),
(21, 'RL-AN62922', 'Bro', 'Ezenwanne', 'Chikezie', 'Male', 'NKWELLE', 'Oyi', 'Anambra', '08032471589', 'evolutionregister@gmail.com', '26-35', 'Married', 'Artisan', 'Media', 'St James ANGLICAN Church AWADA Obosi', 'Dec 27, 2024', '2024-12-27 10:10:22'),
(22, 'RL-IM16737', 'Sis', 'Ibeh', 'Rosemary Chinyere', 'Female', 'St John&#039;s Catholic Church isiokpo', 'Ideato north', 'Imo state', '08028231502', 'rosemary.chinyere@yahoo.com', '26-35', 'Single', 'Student', '', 'St John&#039;s Catholic Church isiokpo', 'Dec 27, 2024', '2024-12-27 10:18:48'),
(23, 'RL-IM44776', 'Master', 'Eze', 'Sunday Tochukwu', 'Male', 'Akwu Akokwa', 'Ideato North', 'IMO state', '08023268472', 'ezehsundaytochukwu080@gmail.com', '19-25', 'Single', 'Student', '', 'Anglican church Akwu Akokwa', 'Dec 27, 2024', '2024-12-27 10:36:41'),
(24, 'RL-AN11249', 'BROTHER', 'IGWE', 'ENOCH CHUKWUEMEKA RAPHAEL', 'Male', 'PROF O.O.STEVE UMUDAIKE VILLA ATANI', 'OGBARU', 'ANAMBRA STATE', '08129497397', 'igwechukwuemeka239@gmail.com', '26-35', 'Single', 'MISSIONARY OF THE CROSS(CRUCIFIED LIFE)', 'MISSIONARY OF THE CROSS', 'ST SILAS ANG CHURCH OWERE-OLE BE UMUNANKWO OGBARU L. G A', 'Dec 27, 2024', '2024-12-27 17:48:32'),
(25, 'RL-IM30569', 'Mrs', 'NDUBUISI', 'Irene', 'Female', 'Amapu okuku', 'Owerri west', 'Imo state', '08063846045', 'irenendubuisi.o@gmail.com', '46-69', 'Married', 'Civil servant', '', 'Anglican umuguma', 'Dec 27, 2024', '2024-12-27 20:41:56'),
(26, 'RL-BE76479', 'Miss', 'Dan-Ingbian', 'Mvena', 'Female', 'Avu by oforola road', 'Kwande', 'Benue', '08143761121', 'mvenadaningbian@gmail.com', '26-35', 'Single', 'Teacher', 'Teens minister', 'First baptist church 120 wethedral road Owerri', 'Dec 27, 2024', '2024-12-28 00:34:14'),
(28, 'RL-IM23372', 'Sis', 'Eze', 'Goodness Mmesoma', 'Female', 'Akwu Akokwa', 'Ideato North', 'Imo', '07048342438', 'ezehgoodnessmmesoma03@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Anglican church', 'Dec 28, 2024', '2024-12-28 18:29:14'),
(29, 'RL-AN77185', 'Bro', 'Chike', 'Enoch udoba', 'Male', 'Osete, umuchu', 'Aguata', 'Anambra', '08136257893', 'chikeenoch2020@gmail.com', '36-45', 'Married', 'Company worker', 'Company worker', 'St Thomas Anglican church umuchu', 'Dec 29, 2024', '2024-12-29 15:38:40'),
(30, 'RL-AN15939', 'sis', 'chike', 'christiana chinyere', 'Female', '0sete umuchu', 'aguata', 'anambra', '07061215667', 'anantichristiana@gmail.com', '36-45', 'Married', 'business', 'business', 'st thomas anglian church umuchu', 'Dec 29, 2024', '2024-12-29 16:58:07'),
(31, 'RL-IM89786', 'Bro', 'Duru', 'Franklyn Uchechukwu', 'Male', 'Umunwaoma. Umudim. Nkume. Njaba LGA', 'Njaba', 'Imo', '08069296049', 'fuduru3@gmail.com', '46-69', 'Single', 'Business', 'Computer operator', 'RCCG', 'Dec 30, 2024', '2024-12-30 05:04:53'),
(32, 'RL-IM80204', 'Sis', 'Oyiogu', 'Odinachi  C', 'Female', 'Uzubi Obodoukwu', 'Ideato North', 'Imo State', '07031064872', 'odinachioyiogu192@gmail.com', '60upwards', 'Married', 'Missionary', 'Missionary', 'All Christian Fellowship', 'Dec 30, 2024', '2024-12-30 16:04:10'),
(33, 'RL-IM65802', 'Mr', 'John', 'Christian Ebube', 'Male', 'Akpulu', 'Ideato North', 'Imo state', '08130987705', 'Johncebube@gmail.com', '26-35', 'Married', 'Artisan', '', 'Christian Pentecostal mission', 'Jan 01, 2025', '2025-01-01 02:13:58'),
(34, 'RL-IM48521', 'Mrs', 'Ajaero', 'Oluchi', 'Female', 'Umuanu Amaigbo', 'Nwangele', 'Imo', '07032971134', 'oluchiajaero17@gmail.com', '46-69', 'Married', 'Civil Servant', '', 'St. Andrew&#039;s Anglican Church,Umuanu Amaigbo', 'Jan 01, 2025', '2025-01-01 07:27:44'),
(35, 'RL-IM14273', 'Bro', 'Okere', 'Chikezie', 'Male', 'Obinze, owerre', 'Owerre west', 'Imo', '09024599561', 'Chikezieokere@gmail.com', '26-35', 'Single', 'Pastor', 'Pastor', 'Life living church, owerri', 'Jan 01, 2025', '2025-01-01 15:29:41'),
(36, 'RL-IM33034', 'Sis', 'Chiedo', 'Joy', 'Female', 'Obinze, owerri', 'Owerri west', 'Imo', '09167063807', 'joychiedo@gmsil.com', '46-69', 'Married', 'Nurse', 'Nurse', 'Life living church', 'Jan 01, 2025', '2025-01-01 15:37:54'),
(37, 'RL-AN56711', 'Pst', 'Onuigbo', 'Cyprain', 'Male', 'Ojoto nnewi', 'Idemili', 'Anambra', '08140545304', 'onuigbocyprain@gmail.com', '46-69', 'Married', 'Pastor', 'Pastor', 'Assemblies of God church', 'Jan 01, 2025', '2025-01-01 15:51:24'),
(38, 'RL-IM45780', 'Bro', 'Enwerazu', 'Hope', 'Male', 'Obinze owerri', 'Owerri west', 'Imo', '08060281590', 'hopeifeanyi@gmail.com', '36-45', 'Single', 'Tiler', '', 'Life living church', 'Jan 01, 2025', '2025-01-01 15:57:44'),
(39, 'RL-IM75849', 'Sis', 'Uzondu', 'Blessing', 'Female', 'Umezeaga', 'Ideation north', 'Imo', '09132729808', 'uzondublessing@gmail.com', '46-69', 'Married', 'Farmer', '', 'St Paul&#039;s Anglican church akokwa', 'Jan 01, 2025', '2025-01-01 16:05:58'),
(40, 'RL-IM30859', 'Sis', 'Ejiofor', 'Mercy', 'Female', 'Umukegu, Akokwa', 'Ideator', 'Imo', '09168261275', 'ejioformercy@gmail.com', '26-35', 'Married', 'Nurse', 'Nurse', 'Mercy and truth church', 'Jan 01, 2025', '2025-01-01 16:08:06'),
(41, 'RL-AN13367', 'Bro', 'Azuka', 'Patrick', 'Male', 'Enugo ojoto', 'Idemili', 'Anambra', '08062570404', 'Azukapatrick@gmail', '60upwards', 'Married', 'Farmer', 'Farmer', 'Pentecostal church', 'Jan 01, 2025', '2025-01-01 16:55:59'),
(42, 'RL-IM35274', 'Bro', 'Chibuzo', 'Munachi', 'Male', 'Isiokpo', 'Ideator', 'Imo', '08166289702', 'chibuzomunachi@gmail.com', '13-18', 'Single', 'Student', '', 'Christ Anglican church', 'Jan 01, 2025', '2025-01-01 17:17:21'),
(43, 'RL-IM61567', 'Sis', 'Ajomuo', 'Romanus', 'Female', 'Naza', 'Owwrri north', 'Imo', '08064190428', 'ocluv20@gmail.com', '36-45', 'Married', 'Teaching', '', 'CKC Anglican owerri', 'Jan 01, 2025', '2025-01-01 17:22:47'),
(44, 'RL-IM15831', 'Sis', 'Obidimma', 'Pearl', 'Female', 'Owerri', 'Owerri west', 'Imo', '08032532522', 'obidimmapearl@gmail', '36-45', 'Married', 'Teaching', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 17:28:42'),
(45, 'RL-IM50901', 'Bro', 'Gaius', 'Obinna', 'Male', 'Owerri', 'Owerri west', 'Imo', '08037513629', 'Gaiusobinna@yahoo.com', '36-45', 'Married', 'Clergy', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 17:32:26'),
(46, 'RL-IM62624', 'Sis', 'Chibuzo', 'Onyinye', 'Female', 'Owerri', 'Owerri north', 'Imo', '08135256733', 'chibuzoagohs@gmail.com', '36-45', 'Married', 'Teaching', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 17:36:13'),
(47, 'RL-IM83515', 'Sis', 'Obianwuzu', 'Lotachi', 'Female', 'FUTO', 'Owerri North', 'Imo State', '07025426075', 'obianwuzulotachililian@gmail.com', '19-25', 'Single', 'Student', '', 'Emmanuel church Akpulu', 'Jan 01, 2025', '2025-01-01 17:37:10'),
(48, 'RL-IM70509', 'Sis', 'Umeh', 'Patience', 'Female', 'Osina', 'Ideation north', 'Imo', '08033979051', 'umehpatience@gmail.com', '60upwards', 'Married', 'Retired', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 17:38:31'),
(49, 'RL-IM82650', 'Sis', 'Okanandu', 'Juliet', 'Female', 'Akokwa', 'Ideation north', 'Imo', '07047036883', 'okannandujuliet@gmail.com', '26-35', 'Married', 'Business', '', 'Salvation army', 'Jan 01, 2025', '2025-01-01 17:41:17'),
(50, 'RL-IM25204', 'Bro', 'Offornedu', 'Bethel', 'Male', 'Akpulu', 'Ideation north', 'Imo', '08106629946', 'ofornedubethel@gmail.com', '26-35', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 17:45:56'),
(51, 'RL-IM49844', 'Sis', 'Sunday', 'Precious Oluebube', 'Female', 'Isiokpo', 'Ideato North', 'Imo State', '07069080796', 'preciousoluebube070@gmail.com', '19-25', 'Single', 'Student', 'Student', 'Restoration Time Mission', 'Jan 01, 2025', '2025-01-01 17:50:51'),
(52, 'RL-IM57599', 'Sis', 'Nzerem', 'Chizaram Saviour', 'Female', 'Albany Ikoku Federal College of education', 'Owerri municipal', 'Imo State', '07039452825', 'chizaramsaviour@gmail.con', '19-25', 'Single', 'Student', 'Student', 'St. Paul&#039;s ANGLICAN Church umuobom', 'Jan 01, 2025', '2025-01-01 17:57:01'),
(53, 'RL-AN76509', 'Sis', 'Chikwere', 'Chika', 'Female', 'Umuchu', 'Idemmiri north', 'Anambra', '07047727932', 'chikwerechika@yahoo.com', '46-69', 'Married', 'Treading', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 17:57:20'),
(54, 'RL-IM24030', 'Sis', 'Mbonu', 'Chimdindu', 'Female', 'Osina', 'Ideato North', 'Imo State', '09019191445', 'mbonuchimdindu@gmail.com', '13-18', 'Single', 'Student', 'Student', 'St. John&#039;s Osina', 'Jan 01, 2025', '2025-01-01 18:02:53'),
(55, 'RL-IM60258', 'Sis', 'Onwadike', 'Christina', 'Female', 'Osina', 'Ideato north', 'Imo', '08101010127', 'onwadikachristina@yaho.com', '60upwards', 'Married', 'Retired', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:03:17'),
(56, 'RL-IM22797', 'Sis', 'Obinwuba', 'Glory', 'Female', 'Uguta', 'Uguta', 'Imo state', '08024613908', 'obinwubaglory@yahoo.com', '36-45', 'Married', 'Business', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:08:48'),
(57, 'RL-IM65292', 'Bro', 'Obiwuma', 'Chidubem', 'Male', 'Uguta', 'Uguta', 'Imo', '08024613908', 'obiwumachidubem@yahoo.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:11:44'),
(58, 'RL-IM71877', 'Bro.', 'Chinedu', 'Christian', 'Male', 'Okwu Akpulu', 'Ideato North', 'Imo State', '09160307534', 'chrischinedureal828@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Emmanuel church Akpulu', 'Jan 01, 2025', '2025-01-01 18:12:44'),
(59, 'RL-IM86332', 'Sis', 'Emeghebo', 'Promise', 'Female', 'Akpulu', 'Ideato north', 'Imo', '07019719897', 'emeghebopromise@yahoo.com', '19-25', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:14:18'),
(60, 'RL-IM40582', 'Mrs', 'Unozo', 'Joy', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '09094503413', 'unozojoy@gmail.com', '46-69', 'Married', 'Clergy', 'Clergy', 'All saints ANGLICAN Church Akokwa', 'Jan 01, 2025', '2025-01-01 18:23:59'),
(61, 'RL-IM16423', 'Bro.', 'Adigwe', 'Divine', 'Male', 'Oguta', 'Oguta', 'Imo State', '07013797687', 'adigwedivine@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Good Shepherd holiness assembly', 'Jan 01, 2025', '2025-01-01 18:34:26'),
(62, 'RL-IM12074', 'Siss', 'Ikeh', 'Vivian', 'Female', 'PH', 'Onuimo', 'Imo', '08141304323', 'ikehvivian@gmail.com', '26-35', 'Single', 'Business', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:35:33'),
(63, 'RL-IM87167', 'Bro', 'Ezenwa', 'Goodluck', 'Male', 'Oguta', 'Oguta', 'Imo', '09068983381', 'Ezenwagoodluck@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:37:27'),
(64, 'RL-IM50092', 'Bro', 'Dennis', 'Bright', 'Male', 'Uguta', 'Uguta', 'Imo', '07078366236', 'dennisbright@gmail.com', '13-18', 'Single', 'Student', '', 'Watchman', 'Jan 01, 2025', '2025-01-01 18:39:32'),
(65, 'RL-IM35660', 'Sis', 'Ogboo', 'Chinenye', 'Female', 'Ozeh', 'Nkwerre', 'Imo State', '09022194830', 'ogboochinenye@gmail.com', '19-25', 'Single', 'Student', 'Student', 'Christ True mission', 'Jan 01, 2025', '2025-01-01 18:40:42'),
(66, 'RL-IM45905', 'Bro', 'Louis', 'Harrison', 'Male', 'Eziosu', 'Oguta', 'Imo', '07068472957', 'louisharrison@gmail.vom', '46-69', 'Married', 'Farming', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:41:39'),
(67, 'RL-IM33482', 'Sis', 'Obiagwu', 'Chisom', 'Female', 'Akokwa', 'Ideato north', 'Imo', '07069708568', 'obiagwuchisom@gmail.com', '36-45', 'Married', 'Trader', '', 'Salvation army', 'Jan 01, 2025', '2025-01-01 18:41:41'),
(68, 'RL-IM62285', 'Sis', 'Mberekpe', 'Ngozi', 'Female', 'Oguta', 'Oguta', 'Imo State', '08064011007', 'mberekpengozi@gmail.com', '46-69', 'Married', 'Business', 'Business', 'Glorious covenant church', 'Jan 01, 2025', '2025-01-01 18:43:12'),
(69, 'RL-IM82318', 'Sis', 'Uzoma', 'Chikaodi', 'Female', 'Uguta', 'Uguta', 'Imo', '0968424389', 'uzomachikaodi@gmail.com', '36-45', 'Married', 'Evangelist', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:45:13'),
(70, 'RL-IM17900', 'Mrs', 'Ike', 'Precious', 'Female', 'Oguta', 'Oguta', 'Imo State', '07087214312', 'ikeprecious@gmail.vom', '46-69', 'Married', 'Trader', 'Trader', 'Nil', 'Jan 01, 2025', '2025-01-01 18:46:17'),
(71, 'RL-IM66323', 'Sis', 'Nnani', 'Justina', 'Female', 'Oguta', 'Oguta', 'Imo', '09165479505', 'nnanijustina@gmail.com', '46-69', 'Married', 'Trading', '', 'Pentecostal church', 'Jan 01, 2025', '2025-01-01 18:46:50'),
(72, 'RL-IM47068', 'Sis', 'Uzonwanne', 'Oluchi', 'Female', 'Uguta', 'Uguta', 'Imo', '070311911072', 'uzonwanneoluchi@gmail.com', '46-69', 'Married', 'Business', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:47:06'),
(73, 'RL-IM76376', 'Sis', 'Ikek', 'Munachi', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '08143508821', 'ikehmunachi@gmail.com', '19-25', 'Single', 'Student', 'Student', 'Assemblies of God', 'Jan 01, 2025', '2025-01-01 18:49:15'),
(74, 'RL-IM46765', 'Sis', 'Chibuzo', 'Goodness', 'Female', 'Isiokpo', 'Ideator notth', 'Imo', '08166289702', 'chibuzogoodness@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:50:49'),
(75, 'RL-IM64320', 'Sis', 'Ogbonnaya', 'Victory', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '07033491450', 'ohbonnayavictory@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Tracon', 'Jan 01, 2025', '2025-01-01 18:51:31'),
(76, 'RL-IM64580', 'Sis.', 'Moses', 'Praise', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '07033491450', 'mosespraise@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Tracon', 'Jan 01, 2025', '2025-01-01 18:53:31'),
(77, 'RL-IM49170', 'Sis', 'Nduka', 'Blessing', 'Female', 'Oguta', 'Oguta', 'Imo State', '08100266006', 'ndukablessing@gmail.con', '46-69', 'Single', 'Trader', 'Trader', 'Ascending Tarbanacle', 'Jan 01, 2025', '2025-01-01 18:56:44'),
(78, 'RL-IM46938', 'Bto', 'Ofornedu', 'Blessed', 'Male', 'Akpulu', 'Ideator north', 'Imo', '08062848580', 'blesseddy16@gmail.com', '26-35', 'Married', 'Teaching', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 18:58:01'),
(79, 'RL-IM38196', 'Mrs', 'Ukachukwu', 'Chika', 'Female', 'Oguta', 'Oguta', 'Imo State', '08080714095', 'ukachukwuchika@gmail', '46-69', 'Married', 'Teacher', 'Teacher', 'St. Mary Magdalene cathedral Oguta', 'Jan 01, 2025', '2025-01-01 19:00:15'),
(80, 'RL-IM80340', 'Bro', 'Onuoha', 'Emeka', 'Male', 'Owerri', 'Owerri municipal', 'Imo', '08030581426', 'onuohaemeka@yahoo.com', '60upwards', 'Married', 'Pastor', '', 'Pentecostal', 'Jan 01, 2025', '2025-01-01 19:01:41'),
(81, 'RL-IM49234', 'Sis', 'Mazi', 'Bernice', 'Female', 'Oguta', 'Oguta', 'Imo', '09033442486', 'mazibernice@gmail.com', '60upwards', 'Married', 'Trading', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:01:52'),
(82, 'RL-IM20603', 'Mrs.', 'Mbewu', 'Edith', 'Female', 'Ihioma', 'Orlu', 'Imo State', '08035981851', 'mbewuedith@gmail.com', '46-69', 'Widow', 'Clergy', 'Clergy', 'Rccg', 'Jan 01, 2025', '2025-01-01 19:04:37'),
(83, 'RL-IM13692', 'Bro', 'Egbuchulam', 'Hillary', 'Male', 'Ihitensa', 'Orsu', 'Imo', '08053699132', 'eghuchulamhilary@yahoo.com', '46-69', 'Married', 'Minister', '', 'RCCG', 'Jan 01, 2025', '2025-01-01 19:05:07'),
(84, 'RL-IM35799', 'Sis', 'Ezenwa', 'Sylvia', 'Female', 'Osu', 'Osu', 'Imo', '09032557791', 'ezenwasylvia@gmail.com', '46-69', 'Married', 'Trading', '', 'Catholic', 'Jan 01, 2025', '2025-01-01 19:05:13'),
(85, 'RL-IM82659', 'Bro', 'Peters', 'Gospel', 'Male', 'Akpulu', 'Ideato north', 'Imo', '08031933161', 'petersgospel@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:06:51'),
(86, 'RL-IM32748', 'Bro.', 'Agurua', 'Uche', 'Male', 'Oguta', 'Oguta 1', 'Imo State', '07037141331', 'aguruauche@gmail.com', '46-69', 'Married', 'Public servant', 'Public servant', 'Christ church Oguta', 'Jan 01, 2025', '2025-01-01 19:07:23'),
(87, 'RL-IM68924', 'Bro', 'Mmadu', 'Great', 'Male', 'Akpulu', 'Ideator north', 'Imo', '08144497795', 'kosihiest@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:08:15'),
(88, 'RL-IM53298', 'Bro', 'Mbam', 'Frances', 'Male', 'Akokwa', 'Ideato north', 'Imo', '09030406485', 'mbamfrances@gmsail.com', '19-25', 'Single', 'Welder', '', 'Catholic', 'Jan 01, 2025', '2025-01-01 19:09:11'),
(89, 'RL-IM25646', 'Bro', 'Obalum', 'Ifeanyi', 'Male', 'Oguta', 'Oguta', 'Imo State', '07036531869', 'obalumifeanyi@gmail.com', '36-45', 'Married', 'Business', 'Business', 'Anglican church', 'Jan 01, 2025', '2025-01-01 19:09:52'),
(90, 'RL-IM85716', 'Bro', 'Ezendiokwere', 'Christian', 'Male', 'Akpulu', 'Ideator north', 'Imo', '08146595261', 'ezendiokwerechtistian@gmail.vom', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:11:03'),
(91, 'RL-IM51499', 'Bro', 'Ohale', 'Collins', 'Male', 'Urualla', 'Ideato north', 'Imo', '08146808225', 'ohalecollins@gmil.com', '26-35', 'Single', 'Engineer', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:11:11'),
(92, 'RL-IM45258', 'Mrs', 'Ijeoma', 'Happiness', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '08169011006', 'ijeomahappiness@gmail.com', '36-45', 'Married', 'Business', 'Business', 'St. Paul&#039;s ANGLICAN Church', 'Jan 01, 2025', '2025-01-01 19:12:31'),
(93, 'RL-IM76813', 'Bro', 'Nlemigwe', 'Godday', 'Male', 'Akokwa', 'Ideator north', 'Imo', '08138090583', 'mlemigwegodday@gmail.com', '36-45', 'Single', 'Missionary', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:14:51'),
(94, 'RL-IM15159', 'Sis', 'Nodebeze', 'Gospel', 'Female', 'Akokwa', 'Ideato north', 'Imo', '09131418222', 'nodebezegospel@yahoo.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:15:07'),
(95, 'RL-IM45610', 'Sis', 'Ogidi', 'Happiness', 'Female', 'Akwu Akokwa', 'Ideato North', 'Imo State', '09131418222', 'ogidihappiness@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Anglican church', 'Jan 01, 2025', '2025-01-01 19:16:22'),
(96, 'RL-IM43918', 'Bro', 'Nodebeze', 'Noble', 'Male', 'Akokwa', 'Ideato north', 'Imo', '09131418222', 'nodezesomto@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 19:16:49'),
(97, 'RL-IM64632', 'Bro', 'Obalum', 'Solomon', 'Male', 'Oguta', 'Oguta', 'Imo State', '08165757148', 'obalumsolomon@gmail.com', '26-35', 'Single', 'Business', 'Business', 'Pentecostal', 'Jan 01, 2025', '2025-01-01 19:27:11'),
(98, 'RL-IM73403', 'Sis', 'Agorua', 'Chizoba', 'Female', 'Oguta', 'Oguta', 'Imo State', '08060333902', 'agoruachizoba@gmail', '46-69', 'Married', 'Business', 'Business', 'Pentecostal', 'Jan 01, 2025', '2025-01-01 19:31:00'),
(99, 'RL-IM14060', 'Sis', 'Effiong', 'Lizzy', 'Female', 'Oguta', 'Oguta', 'Imo State', '0803383983', 'effionglizzy@gmail.com', '46-69', 'Married', 'Business', 'Business', 'Pentecostal', 'Jan 01, 2025', '2025-01-01 19:34:12'),
(100, 'RL-IM72627', 'Sis', 'Ike', 'Precious', 'Female', 'Oguta', 'Oguta', 'Imo State', '07087214312', 'ikeprecious@gmail.com', '36-45', 'Married', 'Business', 'Business', 'Pentecostal', 'Jan 01, 2025', '2025-01-01 19:38:05'),
(101, 'RL-IM13797', 'Sis', 'Ohakwe', 'Ifunanya', 'Female', 'Orlu', 'Orlu', 'Imo', '08151681660', 'ohakwejanifer70@gmail.com', '19-25', 'Single', 'Trading', '', 'Pentecostal church', 'Jan 01, 2025', '2025-01-01 19:41:18'),
(102, 'RL-IM20854', 'Sis', 'Mmadu', 'Oluebube', 'Female', 'Osina', 'Ideato North', 'Imo State', '09061357578', 'mmaduoluebube@gmail.com', '19-25', 'Single', 'Student', 'Student', 'Anglican church', 'Jan 01, 2025', '2025-01-01 21:45:14'),
(103, 'RL-IM77453', 'Bro', 'Ijeoma', 'Ndubuisi', 'Male', 'Akokwa', 'Ideato North', 'Imo State', '08169011006', 'ijeomandubuisi@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Anglican church', 'Jan 01, 2025', '2025-01-01 21:48:01'),
(104, 'RL-IM79644', 'Bro', 'Okanandu', 'Somadina', 'Male', 'Akokwa', 'Ideato North', 'Imo State', '07030308773', 'okanandusomadina@gmail.com', '36-45', 'Married', 'Engineer', 'Engineer', 'Salvation army', 'Jan 01, 2025', '2025-01-01 21:52:44'),
(105, 'RL-IM16025', 'Sis', 'Uzoabaka', 'Perpetual', 'Female', 'Uruala', 'Ideator north', 'Imo', '08163422433', 'uzoabakaperpetual@gmail.com', '26-35', 'Single', 'Teaching', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 21:54:53'),
(106, 'RL-IM89743', 'Sis', 'Ogugbara', 'Blessing', 'Female', 'Uruala', 'Ideator north', 'Imo', '08038469507', 'ogugbarablessing@gmail.com', '60upwards', 'Married', 'Teaching', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 21:58:59'),
(107, 'RL-IM85742', 'Sis', 'Aneke', 'Chinonso', 'Female', 'Urualla', 'Ideator north', 'Imo', '07042802216', 'anekechinonso@gmail.com', '26-35', 'Single', 'Business', 'Business', 'Anglican', 'Jan 01, 2025', '2025-01-01 22:03:20'),
(108, 'RL-IM67530', 'Bro', 'Okafor', 'Emmanuel', 'Male', 'Osina', 'Ideator north', 'Imo', '08133417811', 'okaforemmanuel@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 01, 2025', '2025-01-01 22:12:01'),
(109, 'RL-IM30896', 'Sis', 'Offornedu', 'Blessing', 'Female', 'Okwu Akpulu', 'Ideato North', 'Imo State', '09161377517', 'offirnedublessing@gmail.com', '26-35', 'Married', 'Business', 'Business', 'Emmanuel church Akpulu', 'Jan 02, 2025', '2025-01-02 07:11:41'),
(110, 'RL-AN86034', 'Sis', 'Obi', 'Nneka', 'Female', 'Oba', 'Ojoto South', 'Anambra', '08039685925', 'obinneka@gmail.com', '46-69', 'Married', 'Trader', 'Trader', 'Anglican church', 'Jan 02, 2025', '2025-01-02 08:05:27'),
(111, 'RL-IM11052', 'Sis', 'Chidiebere', 'Chinecherem', 'Female', 'Izuogu', 'Ideato north', 'Imo', '09128223529', 'chidieberechinemerem@gmail.com', '13-18', 'Single', 'Student', '', 'Salvation army', 'Jan 02, 2025', '2025-01-02 08:06:44'),
(112, 'RL-IM50757', 'Sis', 'Azubuike', 'Onyedika', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '09128223529', 'azubuikeonyedika@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Salvation army', 'Jan 02, 2025', '2025-01-02 08:08:38'),
(116, 'RL-IM46963', 'Sis', 'Olemba', 'Chiamaka', 'Female', 'Orlu', 'Ideato north', 'Imo', '08166303952', 'olembachiamaka@yahoo.com', '26-35', 'Single', 'Student', '', 'Catholic', 'Jan 02, 2025', '2025-01-02 08:31:06'),
(117, 'RL-IM83460', 'Sis', 'Obalum', 'Ogochukwu', 'Female', 'Oguta', 'Oguta', 'Imo State', '09161377517', 'obalumogochukwu@gmail.com', '26-35', 'Married', 'Seamstress', 'Seamstress', 'Anglican church', 'Jan 02, 2025', '2025-01-02 09:05:23'),
(118, 'RL-IM85943', 'Sis', 'Unachukwu', 'Uju', 'Female', 'Owerri', 'Owerri West', 'Imo', '08036770433', 'unachukwuuju@gmail.com', '36-45', 'Married', 'Business', 'Business', 'ANGLICAN', 'Jan 02, 2025', '2025-01-02 09:19:05'),
(119, 'RL-AN67805', 'Bro', 'Okechi', 'Chinedu', 'Male', 'Aguleri', 'Anambra east', 'Anambra', '09051256012', 'okechi@gmail.com', '26-35', 'Married', 'Artisan', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 13:19:10'),
(120, 'RL-IM37033', 'Ven', 'Ekpunobi', 'Ifesinachukwu', 'Male', 'Osina', 'Ideator north', 'Imo', '07033349119', 'Ekpunobiifesinachukwu@gmail.com', '60upwards', 'Married', 'Clergy', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 13:20:44'),
(121, 'RL-IM89290', 'Sis', 'Unachukwu', 'Uju', 'Female', 'Owerri', 'Owerri west', 'Imo', '08036770433', 'uju@gmail.com', '36-45', 'Married', 'Business', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 13:22:41'),
(122, 'RL-IM21362', 'Rev. Canon', 'Ihuoma', 'Charles', 'Male', 'Osina', 'Ideator north', 'Imo', '08064367771', 'ihuomacharles@gmail.com', '60upwards', 'Married', 'Clrrgy', 'Clergy', 'Anglican', 'Jan 02, 2025', '2025-01-02 13:31:26'),
(123, 'RL-IM83566', 'Sis', 'Okpala', 'Josephine', 'Female', 'Osina', 'Ideato North', 'Imo State', '07017750629', 'okpalajosephine@gmail.com', '60upwards', 'Married', 'Business', 'Business', 'Anglican church', 'Jan 02, 2025', '2025-01-02 13:32:40'),
(124, 'RL-IM74859', 'Bro', 'Ejezie', 'Godson', 'Male', 'Urualla', 'Ideato North', 'Imo State', '07017750629', 'ejeziegodson@gmail.com', '26-35', 'Single', 'Trader', 'Trader', 'Anglican church', 'Jan 02, 2025', '2025-01-02 13:36:30'),
(125, 'RL-IM66837', 'Sis', 'Okereke', 'Precious', 'Female', 'Orlu', 'Orlu', 'Imo', '09018111443', 'preciousolaedo802@gmail.com', '19-25', 'Single', 'Student', '', 'Pentecostal church', 'Jan 02, 2025', '2025-01-02 13:39:14'),
(126, 'RL-IM14571', 'Mr', 'Umeziri', 'Daniel', 'Male', 'Osina', 'Ideator north', 'Imo', '08037558426', 'umeziridaniel@gmail.com', '60upwards', 'Married', 'Trading', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 13:43:48'),
(127, 'RL-AN41805', 'Sis', 'Ezenwanne', 'Favor', 'Female', 'NKWELLE', 'OYI', 'Anambra', '07049665254', 'evolutionregister1@gmail.com', '26-35', 'Married', 'Artisan', '', 'St James ANGLICAN Church AWADA', 'Jan 02, 2025', '2025-01-02 14:00:21'),
(128, 'RL-IM17030', 'Rev. Cannon', 'Anuole', 'Iheanyichukwu', 'Male', 'Akokwa', 'Ideato North', 'Imo State', '08038758627', 'anuoleiheanyichukwu@gmail.com', '46-69', 'Married', 'Clergy', 'Clergy', 'Anglican church', 'Jan 02, 2025', '2025-01-02 15:01:25'),
(129, 'RL-IM45621', 'Sis', 'Ohawuchi', 'Chinenye', 'Female', 'Ntuekke', 'Ideato South', 'Imo State', '08032423942', 'chinenye@gmail.com', '46-69', 'Single', 'Missionary', 'Missionary', 'Anglican church', 'Jan 02, 2025', '2025-01-02 16:30:59'),
(130, 'RL-IM88067', 'Sis', 'Udoha', 'Juliet', 'Female', 'Owerri', 'Owerri west', 'Imo', '08037381389', 'udohajuliet@gmail.com', '36-45', 'Single', 'Business', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 16:45:55'),
(131, 'RL-IM49006', 'Sis', 'Mbankwu', 'Jessychrist', 'Female', 'Owerri', 'Owerri municipal', 'Imo', '08055417545', 'mbangwu@gmail.com', '46-69', 'Married', 'Business', '', 'Winners', 'Jan 02, 2025', '2025-01-02 18:15:20'),
(132, 'RL-IM88435', 'Sis', 'Amaefuna', 'Chibuzo', 'Female', 'Okwu Akpulu', 'Ideato North', 'Imo State', '09072584004', 'amaefunachibuzo@gmail.com', '26-35', 'Single', 'Teacher', 'Teacher', 'Emmanuel church Akpulu', 'Jan 02, 2025', '2025-01-02 18:30:49'),
(133, 'RL-IM34801', 'Sis', 'Uzerem', 'Hope', 'Female', 'Osina', 'Ideato north', 'Imo', '08037928509', 'hope@gmail.com', '46-69', 'Married', 'Teaching', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 18:34:11'),
(134, 'RL-IM80408', 'Sis', 'Chigozie', 'Jane', 'Female', 'Ntuekke', 'Ideato South', 'Imo', '08102987707', 'chigoziejane@gmail.com', '36-45', 'Married', 'Business', 'Business', 'Pentecostal', 'Jan 02, 2025', '2025-01-02 18:34:19'),
(135, 'RL-IM54815', 'Bro', 'Anaegbu', 'Nnaemeka', 'Male', 'Osina', 'Ideato north', 'Imo', '08039521128', 'emeka@gmail.com', '36-45', 'Married', 'Business', '', 'Anglican', 'Jan 02, 2025', '2025-01-02 18:47:20'),
(136, 'RL-IM79640', 'Sis', 'Mmazi', 'Gloria', 'Female', 'Uguta', 'Uguta', 'Imo', '08135654716', 'gloria@gmail.com', '36-45', 'Married', 'Business', '', 'Bread of life mission', 'Jan 03, 2025', '2025-01-03 07:53:26'),
(137, 'RL-IM57790', 'Bro', 'Onodika', 'Tobias', 'Male', 'No. 6 Felix nwokwe street', 'Oru East LGA', 'Imo state', '08033442407', 'onodikatobias@gmail.com', '60upwards', 'Married', 'Business', 'Business', 'Anglican church', 'Jan 03, 2025', '2025-01-03 07:57:07'),
(138, 'RL-IM21443', 'Sis', 'Oriaku', 'Jane', 'Female', 'Uguta', 'Uguta', 'Imo', '07033342243', 'jane@gmail.com', '26-35', 'Single', 'Student', '', 'Anglican', 'Jan 03, 2025', '2025-01-03 07:59:04'),
(139, 'RL-IM50098', 'Bro.', 'Ihuoma', 'Chinaemerem', 'Male', 'Osina', 'Ideato North', 'Imo State', '09019191445', 'noEmail@116', '13-18', 'Single', 'Student', 'Student', 'Anglican church', 'Jan 03, 2025', '2025-01-03 08:01:48'),
(140, 'RL-AN52329', 'Bro', 'Felix', 'Victor', 'Male', 'Aguleri', 'Aguta', 'Anambra', '08035547252', 'victor@gmaail.com', '36-45', 'Married', 'Business', '', 'Anglican', 'Jan 03, 2025', '2025-01-03 08:02:19'),
(141, 'RL-IM58965', 'Mrs', 'Ihuoma', 'Adaira', 'Female', 'Osina', 'Ideato North', 'Imo State', '08139592351', 'ihuomaadaira@gmail.com', '36-45', 'Married', 'Business', 'Business', 'Anglican church', 'Jan 03, 2025', '2025-01-03 08:04:13'),
(142, 'RL-AN37620', 'Bro', 'Nwali', 'Sunday', 'Male', 'Onitsha', 'Onitsha north', 'Anambra', '08165765399', 'sunday@gmail.com', '19-25', 'Single', 'Trading', '', 'Methodist', 'Jan 03, 2025', '2025-01-03 08:06:16'),
(143, 'RL-AN72988', 'Bro', 'Samuel', 'Echezonachukwu', 'Male', 'No. 6 Felix nwokwe street', 'Onitsha north', 'Anambra', '09073802837', 'smaueleche@gmail.com', '19-25', 'Single', 'Trader', 'Trader', 'Anglican church', 'Jan 03, 2025', '2025-01-03 08:06:55'),
(144, 'RL-UM83205', 'Sis', 'Egwuatu', 'Chiamaka', 'Female', 'Onitsha', 'Abia', 'Umuahia', '08036770433', 'cibeh998@gmail.com', '26-35', 'Single', 'Student', '', 'Anglican', 'Jan 03, 2025', '2025-01-03 08:09:19'),
(145, 'RL-IM22972', 'Sis', 'Ibezimakor', 'Chinenye', 'Female', 'Akokwa', 'Ideato North', 'Imo State', '09019191445', 'ibezimakorchinyere@gmail.com', '13-18', 'Single', 'Student', 'Student', 'Anglican church', 'Jan 03, 2025', '2025-01-03 08:20:15'),
(146, 'RL-IM14194', 'Bro', 'Ukachukwu', 'Thank God', 'Male', 'Owerri', 'Mbaiteolu', 'Imo', '08035732892', 'thank@gmail.com', '46-69', 'Married', 'Clergy', '', 'Baptist', 'Jan 03, 2025', '2025-01-03 12:32:39'),
(147, 'RL-IM19097', 'Bro', 'Esiogu', 'Chialuka', 'Male', 'Akokwa', 'Ideato north', 'Imo', '08042641740', 'chialuka@gmail.com', '13-18', 'Single', 'Student', '', 'Anglican', 'Jan 03, 2025', '2025-01-03 12:34:52'),
(148, 'RL-IM58401', '', 'David', 'Onyinyechukwu', 'Female', 'Obodukwu', 'Ideato north', 'Imo', '09011818988', 'david@gmail.com', '26-35', 'Single', 'Teaching', '', 'Redeem Christian Church', 'Jan 03, 2025', '2025-01-03 12:49:13'),
(149, 'RL-IM19482', 'Evangelist', 'David', 'Ngozi', 'Female', 'Obodukwu', 'Ideato north', 'Imo', '09161021487', 'ngozi@gmail.com', '60upwards', 'Married', 'Evangelist', '', 'Redeem Christian Church', 'Jan 03, 2025', '2025-01-03 12:52:12'),
(150, 'RL-IM20871', 'Bro', 'Eze', 'Wisdom', 'Male', 'Alokwa', 'Ideato north', 'Imo', '07066851610', 'eze@gmail.com', '19-25', 'Single', 'Student', '', 'Anglican', 'Jan 03, 2025', '2025-01-03 15:32:09'),
(151, 'RL-IM66874', 'Sis', 'Ijeoma', 'Okanandu', 'Female', 'Akokwa', 'Ideato north', 'Imo', '09128223529', 'ijeoma@gmail.com', '26-35', 'Married', 'Trading', '', 'Salvation army', 'Jan 03, 2025', '2025-01-03 15:35:59'),
(152, 'RL-IM14354', 'Sis', 'Obiekwe', 'Nkechinyere', 'Female', 'PH', 'Ideato north', 'Imo', '08034680497', 'nke@gmail.com', '46-69', 'Married', 'Trader', '', 'Anglican', 'Jan 03, 2025', '2025-01-03 18:12:59'),
(153, 'RL-BU62454', 'Mr', 'Nekunda', 'Jacktone', 'Male', '311', 'None', 'Busia', '25429823094', 'nekundajacktone@gmail.com', '26-35', 'Single', 'Business', '', '', 'Mar 02, 2025', '2025-03-02 15:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `preacher` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `link`, `category`, `title`, `preacher`, `details`, `thumbnail`, `createdAt`) VALUES
(4, 'resources/audio/msg1.mp3', 'audio', 'While men slept', 'Nicholas Ogbonna', 'Preached at Greater Bethesda 2025', '', '2025-08-23 22:22:28'),
(5, 'resources/audio/msg2.mp3', 'audio', 'Hidden Treasure', 'Wisdom Eze', 'Preached at Greater Bethesda 2025', '', '2025-08-23 22:23:46'),
(6, 'resources/audio/msg3.mp3', 'audio', 'In His steps', 'Isreal Egwu', 'Day 1, Talk 3, Greater Bethesda 2025', '', '2025-08-23 22:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_sermons`
--
ALTER TABLE `audio_sermons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook_chapters`
--
ALTER TABLE `ebook_chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ebook_id` (`ebook_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `audio_sermons`
--
ALTER TABLE `audio_sermons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ebook_chapters`
--
ALTER TABLE `ebook_chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ebook_chapters`
--
ALTER TABLE `ebook_chapters`
  ADD CONSTRAINT `ebook_chapters_ibfk_1` FOREIGN KEY (`ebook_id`) REFERENCES `ebooks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
