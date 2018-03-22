--
-- Database: `eventsprojectco`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrom`
--

CREATE TABLE IF NOT EXISTS `carrom` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` int(2) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `carrom`
--

INSERT INTO `carrom` (`id`, `stud_id`, `full_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(1, 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2015-12-29'),
(2, 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'no', '2015-12-29'),
(4, 'cm2013.pranali.chandani@ves.ac.in', 'Pranali Chandani', 'cm', 3, '9285774600', 'no', '2015-12-30'),
(5, 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'et', 3, '9769798941', 'no', '2015-12-31'),
(6, 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `code_it`
--

CREATE TABLE IF NOT EXISTS `code_it` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` int(4) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `code_it`
--

INSERT INTO `code_it` (`id`, `stud_id`, `full_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(4, 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'yes', '2015-12-29'),
(3, 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'yes', '2015-12-29'),
(8, 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'et', 3, '9769798941', 'yes', '2015-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `fees` int(5) NOT NULL DEFAULT '0',
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `name`, `author`, `branch`, `year`, `date_time`, `fees`, `description`) VALUES
(6, 'Essay Writing', 'VESP', 'all', 'all', '1/3/16 10:00-11:00', 0, 'Topics would be given on the spot. Essays of 1st 2 winners would be printed in magzine'),
(5, 'Home Page Designing', 'w3schools', 'computer', '3', '16th feb - 1:30pm', 50, '2 members in each grp. design a static web page using html css bootstrap'),
(7, 'Electronic Quiz', 'VESP', 'electronic', 'all', '6/3/16  4:00', 20, 'after college');

-- --------------------------------------------------------

--
-- Table structure for table `competition_part`
--

CREATE TABLE IF NOT EXISTS `competition_part` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `competition_part`
--

INSERT INTO `competition_part` (`id`, `act_name`, `stud_id`, `stud_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(6, 'Home Page Designing', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-02-17'),
(7, 'Home Page Designing', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17'),
(3, 'Home Page Designing', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'yes', '2016-02-09'),
(8, 'Home Page Designing', 'co2013.neel.vikmani@ves.ac.in', 'Neel Vikmani', 'co', 3, '8879929192', 'no', '2016-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `counter_strike`
--

CREATE TABLE IF NOT EXISTS `counter_strike` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` int(4) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `counter_strike`
--

INSERT INTO `counter_strike` (`id`, `stud_id`, `full_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(6, 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'yes', '2016-01-23'),
(3, 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'yes', '2015-12-29'),
(4, 'cm2013.pranali.chandani@ves.ac.in', 'Pranali Chandani', 'cm', 3, '9285774600', 'no', '2015-12-30'),
(5, 'cm2013.ravi.dhoble@ves.ac.in', 'Ravi Dhoble', 'cm', 3, '7788553311', 'no', '2015-12-30'),
(7, 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `cricket`
--

CREATE TABLE IF NOT EXISTS `cricket` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` int(2) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cricket`
--

INSERT INTO `cricket` (`id`, `stud_id`, `full_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(1, 'co2013.neel.vikmani@ves.ac.in', 'Neel Vikmani', 'co', 3, '8879929192', 'no', '2015-12-29'),
(11, 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'no', '2016-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE IF NOT EXISTS `football` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` int(2) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`id`, `stud_id`, `full_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(1, 'co2013.kaustubh.thanekar@ves.a', 'Kaustubh Thanekar', 'co', 3, '7045434005', 'no', '2015-12-29'),
(2, 'et2013.piyush.nandankar@ves.ac', 'Piyush Nandankar', 'et', 3, '9769798941', 'no', '2015-12-29'),
(6, 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2015-12-29'),
(7, 'cm2013.ravi.dhoble@ves.ac.in', 'Ravi Dhoble', 'cm', 3, '7788553311', 'no', '2015-12-30'),
(8, 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'et', 3, '9769798941', 'no', '2015-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `post_message`
--

CREATE TABLE IF NOT EXISTS `post_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) NOT NULL,
  `reciever` varchar(30) NOT NULL,
  `reply_to` varchar(50) NOT NULL,
  `to_students` varchar(40) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `post_message`
--

INSERT INTO `post_message` (`id`, `sender`, `reciever`, `reply_to`, `to_students`, `message`, `date`) VALUES
(3, 'co2013.mansi.khamkar@ves.ac.in', 'sanskriti', '', '', 'when are the auditions?', '2015-12-28'),
(24, 'minal.pable@ves.ac.in', 'talent_hunt', '', 'all_participating_students', 'event will begin at 10:00 am sharp! please do be on time! the program wont be delayed!', '2015-12-30'),
(47, 'vivek.gaikwad@ves.ac.in', 'PHP and MySQL', '', 'all_participating_students', 'hello1', '2016-02-06'),
(14, 'co2013.mansi.khamkar@ves.ac.in', 'talent_hunt', '', '', 'is group singing allowed?', '2015-12-28'),
(15, 'co2013.mansi.khamkar@ves.ac.in', '', 'co2013.vidhi.barve@ves.ac.in', '', 'welcome', '2015-12-28'),
(16, 'co2013.mansi.khamkar@ves.ac.in', 'treasure_hunt', '', '', 'please keep treasure-hunt as a separate event', '2015-12-29'),
(45, 'nikita.ambekar@ves.ac.in', 'admin', 'co2013.vidhi.barve@ves.ac.in', '', 'yes ... the work is in progress', '2016-02-03'),
(46, 'vivek.gaikwad@ves.ac.in', 'PHP and MySQL', '', 'all_participating_students', 'hello', '2016-02-06'),
(18, 'co2013.rushabh.doshi@ves.ac.in', 'code_it', '', 'all_participating_students', 'the event will begin at 11:00 am sharp!', '2015-12-29'),
(19, 'co2013.vidhi.barve@ves.ac.in', 'talent_hunt', '', 'unpaid_participating_students', 'guys... tomorrow is the last day to pay for participating in talent hunt!\r\nplease do not forget to pay Rs-30', '2015-12-29'),
(20, 'cm2013.saloni.naik@ves.ac.in', 'code_it', '', '', 'can the timing be pre-poned by 1hr or so?', '2015-12-29'),
(21, 'co2013.rushabh.doshi@ves.ac.in', 'code_it', 'cm2013.saloni.naik@ves.ac.in', '', 'the time is already decided... sorry!', '2015-12-29'),
(22, 'co2013.rushabh.doshi@ves.ac.in', 'code_it', '', 'all_participating_students', 'The coding languages would be c and c++ only', '2015-12-30'),
(43, 'co2013.vidhi.barve@ves.ac.in', 'admin', '', '', 'plz provide an option for us to contact activity heads', '2016-02-03'),
(27, 'sunita.raut@ves.ac.in', 'code_it', 'co2013.rushabh.doshi@ves.ac.in', '', 'tell everyone to arrive by 10:30', '2016-01-22'),
(30, 'co2013.mansi.khamkar@ves.ac.in', 'computer_activity', '', '', 'when is the php workshop?', '2016-01-24'),
(31, 'co2013.mansi.khamkar@ves.ac.in', 'common_activity', '', '', 'what is the format for technical ppt?', '2016-01-24'),
(32, 'vivek.gaikwad@ves.ac.in', 'computer_activity', 'co2013.mansi.khamkar@ves.ac.in', '', 'the date is yet to be finalized', '2016-01-31'),
(33, 'co2013.mansi.khamkar@ves.ac.in', '', 'vivek.gaikwad@ves.ac.in', '', 'ok sir... but plz try to arrange it in college hours', '2016-01-31'),
(34, 'vivek.gaikwad@ves.ac.in', 'computer_activity', 'co2013.mansi.khamkar@ves.ac.in', '', 'yes sure', '2016-01-31'),
(42, 'co2013.vidhi.barve@ves.ac.in', 'counter_strike', 'et2013.piyush.nandankar@ves.ac.in', '', 'plz try after 12 pm', '2016-02-03'),
(41, 'et2013.piyush.nandankar@ves.ac.in', 'counter_strike', 'co2013.vidhi.barve@ves.ac.in', '', 'at 11 am... but yet to be fixed', '2016-02-03'),
(38, 'co2013.vidhi.barve@ves.ac.in', 'counter_strike', '', '', 'what is the time for event?', '2016-02-03'),
(48, 'vivek.gaikwad@ves.ac.in', 'PHP and MySQL', '', 'all_participating_students', 'hello2', '2016-02-06'),
(49, 'vivek.gaikwad@ves.ac.in', 'Android Programming', '', 'all_participating_students', 'android', '2016-02-06'),
(50, 'vivek.gaikwad@ves.ac.in', 'Home Page Designing', '', 'unpaid_participating_students', '10th is the last day to pay ', '2016-02-09'),
(51, 'et2013.piyush.nandankar@ves.ac.in', 'counter_strike', '', 'unpaid_participating_students', 'tomorrow is the last day to pay', '2016-02-09'),
(52, 'vivek.gaikwad@ves.ac.in', 'Android Programming', '', 'unpaid_participating_students', 'pay till 15th', '2016-02-09'),
(53, 'vivek.gaikwad@ves.ac.in', 'Home Page Designing', '', 'all_participating_students', 'abcd', '2016-02-23'),
(54, 'vivek.gaikwad@ves.ac.in', 'Studying Techniques', '', 'all_participating_students', 'study well', '2016-02-23'),
(55, 'co2013.kaustubh.thanekar@ves.ac.in', 'code_it', '', '', 'codeit', '2016-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `fees` int(5) NOT NULL DEFAULT '0',
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `name`, `author`, `branch`, `year`, `date_time`, `fees`, `description`) VALUES
(1, 'Technical Paper Presentation', 'IEEE', 'all', 'all', '13/3/16  10:00', 0, 'ppt on any technical topis related to your department'),
(2, 'Latest Computer Technology', 'VESP', 'computer', 'all', 'not known yet', 0, 'Select a unique latest technology in computers (hardware or software)\r\nWill be held in room 501'),
(3, 'Latest Electronic Technology', 'VESP', 'electronic', 'all', '26/2/16  10:00', 0, 'Select a unique latest technology in electronics\r\nWill be held on 26th Feb, 10:00 am in room 501');

-- --------------------------------------------------------

--
-- Table structure for table `presentation_part`
--

CREATE TABLE IF NOT EXISTS `presentation_part` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `presentation_part`
--

INSERT INTO `presentation_part` (`id`, `act_name`, `stud_id`, `stud_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(1, 'Technical Paper Presentation', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'no', '2016-01-23'),
(2, 'Technical Paper Presentation', 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'et', 3, '9769798941', 'no', '2016-01-23'),
(3, 'Technical Paper Presentation', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-01-24'),
(4, 'Latest Computer Technology', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-02-06'),
(5, 'Latest Computer Technology', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'no', '2016-02-09'),
(6, 'Technical Paper Presentation', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17'),
(7, 'Latest Computer Technology', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `fees` int(5) NOT NULL DEFAULT '0',
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `name`, `author`, `branch`, `year`, `date_time`, `fees`, `description`) VALUES
(1, 'Studying Techniques', 'Lakshya Team', 'computer', '3', '25/3/16  2:00-4:00', 0, 'Learn to improve your concentration levels. its free!'),
(2, 'Personality Development', 'Lakshya Team', 'all', 'all', '15/3/16  2:00-4:00', 0, 'Develop your personality'),
(3, 'Digital Circuits', 'Alumini Members', 'ej', '1', '5/3/16  11:00-2:00', 0, 'Will be held on 20th Feb, 11:00 am in room 501'),
(4, 'Ethical Hacking', 'S. Rao (Infosys)', 'computer', '2', '12/3/16  1:00-4:00', 50, 'Will be held on 12th Feb, 11:00 am in room 501');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_part`
--

CREATE TABLE IF NOT EXISTS `seminar_part` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `seminar_part`
--

INSERT INTO `seminar_part` (`id`, `act_name`, `stud_id`, `stud_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(1, 'Studying Techniques', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'no', '2016-01-23'),
(2, 'Personality Development', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'no', '2016-01-23'),
(3, 'Personality Development', 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'et', 3, '9769798941', 'no', '2016-01-23'),
(4, 'Studying Techniques', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-01-24'),
(5, 'Personality Development', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-01-24'),
(6, 'Studying Techniques', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17'),
(7, 'Personality Development', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `sphurti`
--

CREATE TABLE IF NOT EXISTS `sphurti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `event` varchar(20) NOT NULL,
  `stud_head` varchar(50) NOT NULL,
  `tch_head` varchar(50) NOT NULL,
  `pay_amnt` int(10) NOT NULL,
  `pay_date` varchar(20) NOT NULL,
  `first_day` varchar(20) NOT NULL,
  `semi_final` varchar(20) NOT NULL,
  `final` varchar(20) NOT NULL,
  `venue` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sphurti`
--

INSERT INTO `sphurti` (`id`, `event`, `stud_head`, `tch_head`, `pay_amnt`, `pay_date`, `first_day`, `semi_final`, `final`, `venue`) VALUES
(1, 'cricket', 'Ravi Dhoble', 'Suraj Yewle', 20, '2016-12-10', '2016-12-12', '2016-12-14', '2015-12-16', 'ground'),
(2, 'carrom', 'Ashwini Kamble', 'Shital Nawale', 20, '2016-12-17', '2016-12-19', '2016-12-20', '2016-12-20', 'basement'),
(3, 'football', 'Aditya Chauhan', 'Robert Villiams', 20, '2016-12-13', '2016-12-15', '2016-12-17', '2016-12-19', 'ground');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL DEFAULT 'male',
  `branch` varchar(4) NOT NULL,
  `year` int(4) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `authority` varchar(20) NOT NULL,
  `event_auth` varchar(20) NOT NULL,
  `images_path` varchar(50) NOT NULL,
  `submission_date` date NOT NULL,
  PRIMARY KEY (`id`,`login_id`,`mobile_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `login_id`, `full_name`, `password`, `gender`, `branch`, `year`, `mobile_no`, `authority`, `event_auth`, `images_path`, `submission_date`) VALUES
(1, 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'mansikhamkar', 'female', 'co', 3, '8692023065', '', '', 'images/student_dp/17-01-2016-1453050039.jpg', '2016-01-17'),
(2, 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'rushabhdoshi', 'male', 'co', 3, '9967765275', 'event_head', 'code_it', 'images/student_dp/male.jpg', '2016-01-17'),
(3, 'co2013.neel.vikmani@ves.ac.in', 'Neel Vikmani', 'neelvikmani', 'male', 'co', 3, '8879929192', '', '', 'images/student_dp/male.jpg', '2016-01-17'),
(4, 'co2013.kaustubh.thanekar@ves.ac.in', 'Kaustubh Thanekar', 'kaustubhthanekar', 'male', 'co', 3, '7045434005', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(5, 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'vidhibarve', 'female', 'co', 3, '8655342571', 'event_head', 'talent_hunt', 'images/student_dp/09-02-2016-1455028182.jpg', '2016-02-09'),
(6, 'cm2013.saloni.naik@ves.ac.in', 'Saloni Naik', 'saloninaik', 'female', 'cm', 3, '7528428299', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(7, 'cm2013.ravi.dhoble@ves.ac.in', 'Ravi Dhoble', 'ravidhoble', 'male', 'cm', 3, '7788553311', 'event_head', 'cricket', 'images/student_dp/male.jpg', '0000-00-00'),
(8, 'co2013.roshni.sangar@ves.ac.in', 'Roshni Sangar', 'roshnisangar', 'female', 'co', 3, '8811223399', 'event_head', 'surabhi', 'images/student_dp/female.jpg', '0000-00-00'),
(9, 'ej2013.omkar.mehta@ves.ac.in', 'Omkar Mehta', 'omkarmehta', 'male', 'ej', 3, '8736270944', 'event_head', 'sanskriti', 'images/student_dp/male.jpg', '0000-00-00'),
(10, 'ej2013.prerna.yadav@ves.ac.in', 'Prerna Yadav', 'prernayadav', 'female', 'ej', 3, '9483726109', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(17, 'ej2013.aditya.chauhan@ves.ac.in', 'Aditya Chauhan', 'adityachauhan', 'male', 'ej', 3, '9869083832', 'event_head', 'football', 'images/student_dp/male.jpg', '0000-00-00'),
(11, 'cm2013.pranali.chandani@ves.ac.in', 'Pranali Chandani', 'pranalichandani', 'female', 'cm', 3, '9285774600', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(12, 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'piyushnandankar', 'male', 'et', 3, '9769798941', 'event_head', 'counter_strike', 'images/student_dp/male.jpg', '0000-00-00'),
(13, 'et2013.manisha.kapur@ves.ac.in', 'Manisha Kapur', 'manishakapur', 'female', 'et', 3, '7182937799', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(14, 'et2013.nidhi.mishra@ves.ac.in', 'Nidhi Mishra', 'nidhimishra', 'female', 'et', 3, '8976754531', 'event_head', 'sphurti', 'images/student_dp/female.jpg', '0000-00-00'),
(15, 'et2013.virat.dmello@ves.ac.in', 'Virat Dmello', 'viratdmello', 'male', 'et', 3, '8333955589', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(16, 'cm2013.ashwini.kamble@ves.ac.in', 'Ashwini Kamble', 'ashwinikamble', 'female', 'cm', 3, '8712963491', 'event_head', 'carrom', 'images/student_dp/female.jpg', '0000-00-00'),
(18, 'ej2013.priya.sable@ves.ac.in', 'Priya Sable', 'priyasable', 'female', 'ej', 3, '9969960619', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(19, 'co2014.ruchi.sikka@ves.ac.in', 'Ruchi Sikka', 'ruchisikka', 'female', 'co', 2, '8527592166', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(20, 'co2014.jay.thorat@ves.ac.in', 'Jay Thorat', 'jaythorat', 'male', 'co', 2, '7873298012', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(21, 'cm2014.aditi.bansal@ves.ac.in', 'Aditi Bansal', 'aditibansal', 'female', 'cm', 2, '9282736451', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(22, 'cm2014.dhairya.pherwani@ves.ac.in', 'Dhairya Pherwani', 'dhairyapherwani', 'male', 'cm', 2, '7162590513', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(23, 'ej2014.namrata.patil@ves.ac.in', 'Namrata Patil', 'namratapatil', 'female', 'ej', 2, '9124837765', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(24, 'ej2014.amir.singh@ves.ac.in', 'Amir Singh', 'amirsingh', 'male', 'ej', 2, '8797443311', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(25, 'et2014.sunil.pawar@ves.ac.in', 'Sunil Pawar', 'sunilpawar', 'male', 'et', 2, '9433576218', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(26, 'et2013.anushka.wagh@ves.ac.in', 'Anushka Wagh', 'anushkawagh', 'female', 'et', 2, '7123450986', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(27, 'co2015.nishita.raman@ves.ac.in', 'Nishita Raman', 'nishitaraman', 'female', 'co', 1, '9111722288', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(28, 'co2015.raj.kale@ves.ac.in', 'Raj Kale', 'rajkale', 'male', 'co', 1, '8677745222', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(29, 'cm2015.revati.bose@ves.ac.in', 'Revati Bose', 'revatibose', 'female', 'cm', 1, '9944778812', '', '', 'images/student_dpfe/male.jpg', '0000-00-00'),
(30, 'cm2015.himesh.more@ves.ac.in', 'Himesh More', 'himeshmore', 'male', 'cm', 1, '7896541230', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(31, 'ej2015.devrat.pandey@ves.ac.in', 'Devrat Pandey', 'devratpandey', 'male', 'ej', 1, '7900043218', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(32, 'ej2015.shreya.ladd@ves.ac.in', 'Shreya Ladd', 'shreyaladd', 'female', 'ej', 1, '9089780046', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(33, 'et2015.vedant.kedare@ves.ac.in', 'Vedant Kedare', 'vedantkedare', 'male', 'et', 1, '9223486654', '', '', 'images/student_dp/male.jpg', '0000-00-00'),
(34, 'et2015.soniya.kohli@ves.ac.in', 'Soniya Kohli', 'soniyakohli', 'female', 'et', 1, '8712129900', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(35, 'co2013.priyanka.ketkar@ves.ac.in', 'Priyanka Ketkar', 'priyankaketkar', 'female', 'co', 3, '9899058832', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(36, 'co2013.shivani.patil@ves.ac.in', 'Shivani Patil', 'shivanipatil', 'female', 'co', 3, '7373737373', '', '', 'images/student_dp/female.jpg', '0000-00-00'),
(37, 'co2013.mrunal.tandon@ves.ac.in', 'Mrunal Tandon', 'mrunaltandon', 'female', 'cm', 3, '7675767576', '', '', 'images/student_dp/female.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `surabhi`
--

CREATE TABLE IF NOT EXISTS `surabhi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `event` varchar(30) NOT NULL,
  `stud_head` varchar(50) NOT NULL,
  `tch_head` varchar(50) NOT NULL,
  `pay_amnt` int(5) NOT NULL,
  `pay_date` varchar(20) NOT NULL,
  `first_day` varchar(20) NOT NULL,
  `semi_final` varchar(20) NOT NULL,
  `final` varchar(20) NOT NULL,
  `venue` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `surabhi`
--

INSERT INTO `surabhi` (`id`, `event`, `stud_head`, `tch_head`, `pay_amnt`, `pay_date`, `first_day`, `semi_final`, `final`, `venue`) VALUES
(1, 'code_it', 'Rushabh Doshi', 'Sunita Raut', 30, '2016-12-19', '2016-12-21', '2016-12-22', '2016-12-22', 'lab 102-103'),
(2, 'counter_strike', 'Piyush Nandankar', 'Farhan Shaikh', 30, '2016-12-19', '2016-12-21', '2016-12-22', '2016-12-22', 'lab 107-108'),
(3, 'talent_hunt', 'Vidhi Barve', 'Minal Pable', 30, '2016-12-19', '2016-12-21', '2016-12-22', '2016-12-22', 'quadrangle');

-- --------------------------------------------------------

--
-- Table structure for table `talent_hunt`
--

CREATE TABLE IF NOT EXISTS `talent_hunt` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` varchar(4) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL DEFAULT 'no',
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `talent_hunt`
--

INSERT INTO `talent_hunt` (`id`, `stud_id`, `full_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(5, 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', '3', '8692023065', 'yes', '2015-12-29'),
(6, 'cm2013.saloni.naik@ves.ac.in', 'Saloni Naik', 'cm', '3', '7528428299', 'yes', '2015-12-29'),
(7, 'cm2013.pranali.chandani@ves.ac.in', 'Pranali Chandani', 'cm', '3', '9285774600', 'yes', '2015-12-30'),
(8, 'et2013.piyush.nandankar@ves.ac.in', 'Piyush Nandankar', 'et', '3', '9769798941', 'no', '2015-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `info`, `type`, `size`) VALUES
(1, '46397-academic-calender-2015-16.pdf', 'Academic Calendar For Year 2015-2016', 'application/pdf', 114),
(3, '72537-sem-6_co_cm.pdf', 'Semester 6 Curriculum', 'application/pdf', 429),
(4, '92166-ajp-mcqs.pdf', 'AJP MCQS for Computer Branch', 'application/pdf', 68),
(21, '5018-mansi-khamkar-participant-certificate.pdf', 'php certi', 'application/pdf', 113);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login_id` varchar(50) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL DEFAULT 'male',
  `mobile_no` varchar(20) NOT NULL,
  `class_tch` varchar(8) NOT NULL,
  `authority` varchar(20) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `event_auth` varchar(20) NOT NULL,
  `images_path` varchar(50) NOT NULL,
  `submission_date` date NOT NULL,
  PRIMARY KEY (`id`,`login_id`,`mobile_no`,`class_tch`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `login_id`, `full_name`, `password`, `gender`, `mobile_no`, `class_tch`, `authority`, `branch`, `event_auth`, `images_path`, `submission_date`) VALUES
(1, 'sunita.raut@ves.ac.in', 'Sunita Raut', 'sunitaraut', 'female', '9967532566', 'co6g', 'event_head', '', 'code_it', 'images/teacher_dp/female.jpg', '2016-01-17'),
(2, 'bhavika.shastri@ves.ac.in', 'Bhavika Shastri', 'bhavikashastri', 'female', '9766676133', '', 'hod', 'co', '', 'images/teacher_dp/female.jpg', '0000-00-00'),
(3, 'robert.villiams@ves.ac.in', 'Robert Villiams', 'robertvilliams', 'male', '8992560001', 'et2g', 'event_head', '', 'football', 'images/teacher_dp/male.jpg', '0000-00-00'),
(4, 'lalit.bhagwani@ves.ac.in', 'Lalit Bhagwani', 'lalitbhagwani', 'male', '9787753821', '', 'hod', 'cm', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(5, 'santosh.phadnis@ves.ac.in', 'Santosh Phadnis', 'santoshphadnis', 'male', '8829001145', '', 'hod', 'ej', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(6, 'shital.nawale@ves.ac.in', 'Shital Nawale', 'shitalnawale', 'female', '7768515191', 'cm4g', 'event_head', '', 'carrom', 'images/teacher_dp/female.jpg', '0000-00-00'),
(7, 'nishant.shetty@ves.ac.in', 'Nishant Shetty', 'nishantshetty', 'male', '8080907765', '', 'event_head', '', 'sphurti', 'images/teacher_dp/male.jpg', '0000-00-00'),
(8, 'kishor.shinde@ves.ac.in', 'Kishor Shinde', 'kishorshinde', 'male', '7556477811', '', 'hod', 'et', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(9, 'pawan.dhumale@ves.ac.in', 'Pawan Dhumale', 'pawandhumale', 'male', '9822343030', 'cm6g', '', '', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(10, 'minal.pable@ves.ac.in', 'Minal Pable', 'minalpable', 'female', '8441667979', 'ej6g', 'event_head', '', 'talent_hunt', 'images/teacher_dp/female.jpg', '0000-00-00'),
(11, 'suraj.yewle@ves.ac.in', 'Suraj Yewle', 'surajyewle', 'male', '8889990001', 'co4g', 'event_head', '', 'cricket', 'images/teacher_dp/male.jpg', '0000-00-00'),
(12, 'preeti.kaur@ves.ac.in', 'Preeti Kaur', 'preetikaur', 'female', '7766998812', 'ej4g', '', '', '', 'images/teacher_dp/female.jpg', '0000-00-00'),
(13, 'himani.sonak@ves.ac.in', 'Himani Sonak', 'himanisonak', 'female', '8767570011', '', 'event_head', '', 'surabhi', 'images/teacher_dp/female.jpg', '0000-00-00'),
(14, 'sandip.vichare@ves.ac.in', 'Sandip Vichare', 'sandipvichare', 'male', '7171828299', 'co2g', '', '', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(15, 'yash.jawle@ves.ac.in', 'Yash Jawle', 'yashjawle', 'male', '7656889922', 'et6g', '', '', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(16, 'farhan.shaikh@ves.ac.in', 'Farhan Shaikh', 'farhanshaikh', 'male', '8867225411', 'et4g', 'event_head', '', 'counter_strike', 'images/teacher_dp/male.jpg', '0000-00-00'),
(17, 'sarika.deshmukh@ves.ac.in', 'Sarika Deshmukh', 'sarikadeshmukh', 'female', '797919290', '', 'event_head', '', 'sanskriti', 'images/teacher_dp/female.jpg', '0000-00-00'),
(18, 'shubham.desai@ves.ac.in', 'Shubham Desai', 'shubhamdesai', 'male', '7226224994', 'ej2g', '', '', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(19, 'aisha.deo@ves.ac.in', 'Aisha Deo', 'aishadeo', 'female', '8334970501', 'cm2g', '', '', '', 'images/teacher_dp/female.jpg', '0000-00-00'),
(20, 'vasant.joshi@ves.ac.in', 'Vasant Joshi', 'vasantjoshi', 'male', '9600543211', '', 'principal', '', '', 'images/teacher_dp/male.jpg', '0000-00-00'),
(21, 'nikita.ambekar@ves.ac.in', 'Nikita Ambekar', 'nikitaambekar', 'female', '7979688543', '', 'admin', '', '', 'images/teacher_dp/female.jpg', '0000-00-00'),
(22, 'vivek.gaikwad@ves.ac.in', 'Vivek Gaikwad', 'vivekgaikwad', 'male', '7272727222', '', 'activity_head', 'computer', 'computer_activity', 'images/teacher_dp/male.jpg', '0000-00-00'),
(23, 'ritika.pinjani@ves.ac.in', 'Ritika Pinjani', 'ritikapinjani', 'female', '8869886909', '', 'activity_head', 'electronic', 'electronic_activity', 'images/teacher_dp/female.jpg', '0000-00-00'),
(24, 'paresh.rawat@ves.ac.in', 'Paresh Rawat', 'pareshrawat', 'male', '9912881212', '', 'activity_head', 'all', 'common_activity', 'images/teacher_dp/male.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `fees` int(5) NOT NULL DEFAULT '0',
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `author`, `branch`, `year`, `date_time`, `fees`, `description`) VALUES
(1, 'PHP and MySQL', 'Spoken Tutorials Team', 'co', '3', '15th feb - 10:00 to 3:00', 550, 'it ll help u in ur project. will be for 5 days                                                                                                                                                                                        '),
(3, 'Modern Electronics ', 'IIT', 'electronic', 'all', '5/3/16 ', 300, 'learn about latest eletronic advancements'),
(4, 'C Language', 'Alumini Members', 'all', '1', '28/2/16', 100, 'for 10 days from 10th feb every mon-tue \r\ntime 2:00-5:00'),
(5, 'Android Programming', 'CSI', 'computer', '3', '10/3/16', 1000, 'for 10 days from 10th march every fri-sat\r\ntime 2:00-5:00                        ');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_part`
--

CREATE TABLE IF NOT EXISTS `workshop_part` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `part_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `workshop_part`
--

INSERT INTO `workshop_part` (`id`, `act_name`, `stud_id`, `stud_name`, `branch`, `year`, `mobile_no`, `paid`, `part_date`) VALUES
(2, 'PHP and MySQL', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'yes', '2016-01-23'),
(17, 'Android Programming', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17'),
(11, 'Android Programming', 'co2013.vidhi.barve@ves.ac.in', 'Vidhi Barve', 'co', 3, '8655342571', 'yes', '2016-02-09'),
(14, 'PHP and MySQL', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-02-17'),
(16, 'PHP and MySQL', 'co2013.rushabh.doshi@ves.ac.in', 'Rushabh Doshi', 'co', 3, '9967765275', 'no', '2016-02-17'),
(15, 'Android Programming', 'co2013.mansi.khamkar@ves.ac.in', 'Mansi Khamkar', 'co', 3, '8692023065', 'no', '2016-02-17'),
(18, 'Android Programming', 'co2013.neel.vikmani@ves.ac.in', 'Neel Vikmani', 'co', 3, '8879929192', 'no', '2016-02-17');

