/*
Model: MySQL 5.7
Database: MySQL 5.7
*/


-- Create tables section -------------------------------------------------

-- Table Mark

CREATE TABLE `Mark`
(
  `Name_of_mark` Char(60) NOT NULL,
  `Foto_of_logo` Char(100) NOT NULL,
  `Photo_on_pages_with_info` Char(100) NOT NULL
)
;

ALTER TABLE `Mark` ADD PRIMARY KEY (`Name_of_mark`)
;

-- Table Model

CREATE TABLE `Model`
(
  `Id` Int NOT NULL,
  `Name` Char(100) NOT NULL,
  `Main_photo` Char(100) NOT NULL,
  `Name_of_mark` Char(60) NOT NULL
)
;

CREATE INDEX `IX_Relationship2` ON `Model` (`Name_of_mark`)
;

ALTER TABLE `Model` ADD PRIMARY KEY (`Id`)
;

-- Table Information_about_mark

CREATE TABLE `Information_about_mark`
(
  `Date_of_establishment` Date NOT NULL,
  `City_of_establishment` Text NOT NULL,
  `Name_of_mark` Char(60) NOT NULL
)
;

ALTER TABLE `Information_about_mark` ADD PRIMARY KEY (`Name_of_mark`)
;

-- Table Specifications

CREATE TABLE `Specifications`
(
  `Id` Int NOT NULL,
  `Engine_capacity` Float NOT NULL,
  `Horsepower` Text NOT NULL,
  `Type_of_transmission` Text NOT NULL,
  `Year` Int NOT NULL
)
;

ALTER TABLE `Specifications` ADD PRIMARY KEY (`Id`)
;

-- Table Minor_photo

CREATE TABLE `Minor_photo`
(
  `Way` Text NOT NULL,
  `Id` Int NOT NULL
)
;

ALTER TABLE `Minor_photo` ADD PRIMARY KEY (`Id`)
;

-- Create foreign keys (relationships) section ------------------------------------------------- 


ALTER TABLE `Information_about_mark` ADD CONSTRAINT `Have` FOREIGN KEY (`Name_of_mark`) REFERENCES `Mark` (`Name_of_mark`) ON DELETE CASCADE ON UPDATE CASCADE
;


ALTER TABLE `Model` ADD CONSTRAINT `gggg` FOREIGN KEY (`Name_of_mark`) REFERENCES `Mark` (`Name_of_mark`) ON DELETE RESTRICT ON UPDATE CASCADE
;


ALTER TABLE `Minor_photo` ADD CONSTRAINT `Have_photo` FOREIGN KEY (`Id`) REFERENCES `Model` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE
;


ALTER TABLE `Specifications` ADD CONSTRAINT `Have_specifications` FOREIGN KEY (`Id`) REFERENCES `Model` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE
;


