use zypc2016;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `schoolnum` char(8) NOT NULL,
  `name` char(20) NOT NULL,
  `tel` char(20) NOT NULL,
  `class` char(20) NOT NULL,
  `status` char(5) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  
  UNIQUE KEY `schoolnum` (`schoolnum`),
  KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000 ;

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `recordid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `basic` text NOT NULL,
  `advance` text NOT NULL,
  `judge` text NOT NULL,
  `grade` int(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judger` char(50) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`recordid`),
  KEY `userid` (`userid`,`grade`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000 ;

