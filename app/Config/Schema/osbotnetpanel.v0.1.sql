
CREATE TABLE `bots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `ip` varchar(16) DEFAULT NULL,
  `botshop` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

