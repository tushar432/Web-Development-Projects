

CREATE TABLE `colleges` (
  `College` varchar(30) NOT NULL,
  `Branch` varchar(6) NOT NULL,
  `ORank` int(8) NOT NULL,
  `CRank` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



INSERT INTO `colleges` (`College`, `Branch`, `ORank`, `CRank`) VALUES
('NIT Trichy', 'CSE', 2060, 5317),
('NIT Trichy', 'ECE', 5325, 8011),
('NIT Trichy', 'ME', 4154, 12970),
('NIT Trichy', 'EE/EEE', 5708, 10353),
('NIT Rourkela', 'CSE', 2253, 9420),
('NIT Rourkela', 'ECE', 8571, 12009),
('NIT Rourkela', 'ME', 11662, 20304),
('NIT Rourkela', 'EE/EEE', 4084, 19168),
('NIT Surathkal', 'CSE', 960, 3181),
('NIT Surathkal', 'ECE', 3378, 5608),
('NIT Surathkal', 'ME', 6315, 11788),
('NIT Surathkal', 'EE/EEE', 3456, 6801),
('NIT Warangal', 'CSE', 978, 2341),
('NIT Warangal', 'ECE', 2919, 2919),
('NIT Warangal', 'ME', 4340, 10209),
('NIT Warangal', 'EE/EEE', 5270, 8152),
('NIT Calicut', 'CSE', 2201, 10222),
('NIT Calicut', 'ECE', 8023, 14769),
('NIT Calicut', 'ME', 10629, 20480),
('NIT Calicut', 'EE/EEE', 9703, 18966),
('NIT Kurukshetra', 'CSE', 2268, 6170),
('NIT Kurukshetra', 'ECE', 8320, 12067),
('NIT Kurukshetra', 'ME', 11195, 18115),
('NIT Kurukshetra', 'EE/EEE', 9454, 16273),
('NIT Durgapur', 'CSE', 5611, 12095),
('NIT Durgapur', 'ECE', 12509, 16098),
('NIT Durgapur', 'ME', 14511, 22753),
('NIT Durgapur', 'EE/EEE', 13595, 19325),
('MNIT Allahabad', 'CSE', 1449, 4051),
('MNIT Allahabad', 'ECE', 3600, 7128),
('MNIT Allahabad', 'ME', 5884, 11145),
('MNIT Allahabad', 'EE/EEE', 5879, 8790),
('NIT Silchar', 'CSE', 8699, 23882),
('NIT Silchar', 'ECE', 17899, 40841),
('NIT Silchar', 'ME', 21851, 49215),
('NIT Silchar', 'EE/EEE', 32579, 56958),
('MNIT Jaipur', 'CSE', 1148, 3831),
('MNIT Jaipur', 'ECE', 3881, 7868),
('MNIT Jaipur', 'ME', 9277, 11426),
('MNIT Jaipur', 'EE/EEE', 4119, 9179);
COMMIT;
