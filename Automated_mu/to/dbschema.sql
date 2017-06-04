-- Create syntax for 'numbers'

CREATE TABLE `numbers` (
  `phone_number` varchar(50) DEFAULT NULL,
  `verification_code` int(11) DEFAULT NULL,
  `verified` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1