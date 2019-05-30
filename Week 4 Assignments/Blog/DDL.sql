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
AUTO_INCREMENT = 13
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
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
