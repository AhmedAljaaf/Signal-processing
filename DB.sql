--
-- Database: `signal`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_signal_test`
--

CREATE TABLE IF NOT EXISTS `new_signal_test` (
  `Time` float NOT NULL,  
  `HR` float NOT NULL,
  `UC` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*HR is a Heart rate*/;
/*UC is a Uterine contractions */;