-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema dan-blog
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dan-blog
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dan-blog` DEFAULT CHARACTER SET utf8 ;
USE `dan-blog` ;

-- -----------------------------------------------------
-- Table `dan-blog`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dan-blog`.`posts` ;

CREATE TABLE IF NOT EXISTS `dan-blog`.`posts` (
  `id` INT(50) NOT NULL AUTO_INCREMENT,
  `userid` INT(20) NOT NULL,
  `title` TEXT NOT NULL,
  `author` TEXT NOT NULL,
  `textarea` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 41
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dan-blog`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dan-blog`.`user` ;

CREATE TABLE IF NOT EXISTS `dan-blog`.`user` (
  `id` INT(20) NOT NULL AUTO_INCREMENT,
  `firstname` TEXT NOT NULL,
  `lastname` TEXT NOT NULL,
  `email` TEXT NOT NULL,
  `password` TEXT NOT NULL,
  `admin` TINYINT(5) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 44
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `dan-blog`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dan-blog`.`comments` ;

CREATE TABLE IF NOT EXISTS `dan-blog`.`comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `comment` VARCHAR(200) NOT NULL,
  `star_rating` INT(11) NOT NULL,
  `userid` INT(11) NOT NULL,
  `postid` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `pid`
    FOREIGN KEY (`postid`)
    REFERENCES `dan-blog`.`posts` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `uid`
    FOREIGN KEY (`userid`)
    REFERENCES `dan-blog`.`user` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;

CREATE UNIQUE INDEX `comment_UNIQUE` ON `dan-blog`.`comments` (`comment` ASC) VISIBLE;

CREATE INDEX `pid_idx` ON `dan-blog`.`comments` (`postid` ASC) VISIBLE;

CREATE INDEX `uid_idx` ON `dan-blog`.`comments` (`userid` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
