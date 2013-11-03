Create database if not exists student_info;
CREATE TABLE if not exists `adminlogin` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

insert into  adminlogin(Username,Password) values('admin','admin');

CREATE TABLE if not exists `info` (
  `roll_num` char(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `branch` char(8) NOT NULL,
  `mobile` char(10) NOT NULL,
  `photo` longblob,
  `year` int(4) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `homenotice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `short_desc` varchar(25) NOT NULL,
  `long_desc` varchar(500) NOT NULL,
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `info_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(40) NOT NULL,
  `query` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester1` (
  `roll_num` char(8) NOT NULL,
  `physics` varchar(4) NOT NULL,
  `chemistry` varchar(4) NOT NULL,
  `maths1` varchar(4) not null,
  `eng_mech` varchar(4) not null,
  `workshop` varchar(4) not null,
  `cprog`  varchar(4) not null,
  `cproglab` varchar(4) not null,


  PRIMARY KEY (roll_num)
) ENGINE=innodb DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester2` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester3` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester4` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester5` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester6` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester7` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `semester8` (
  `roll_num` char(8) NOT NULL,
  `subject1` varchar(4) NOT NULL,
  `subject2` varchar(4) NOT NULL,
  `subject3` varchar(4) NOT NULL,
  `subject4` varchar(4) NOT NULL,
  `subject5` varchar(4) NOT NULL,
  `subject6` varchar(4) NOT NULL,
  `subject7` varchar(4) NOT NULL,
  `subject8` varchar(4) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `year` varchar(6) ,
  `long_desc` varchar(500) NOT NULL,
  `roll_num` varchar(10),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

CREATE TABLE if not exists `homenotice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `short_desc` varchar(25) NOT NULL,
  `long_desc` varchar(500) NOT NULL,
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

insert into homenotice(date,title,short_desc,long_desc,category) values ('1/9/12','NIT GOa','new website','NIT GOA launches
new website','ALL'),('1/9/12','ECE','new website','NIT GOA launches
new website','ECE'),('1/9/12','EEE','new website','NIT GOA launches
new website','EEE'),('1/9/12','CSE','new website','NIT GOA launches
new website','CSE');

