-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema template
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema template
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `template` DEFAULT CHARACTER SET utf8 ;
USE `template` ;

-- -----------------------------------------------------
-- Table `template`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `template`.`user` (
  `user_id` INT(20) NOT NULL,
  `user_surname` VARCHAR(40) NOT NULL,
  `user_firstname` VARCHAR(40) NOT NULL,
  `user_email` VARCHAR(40) NOT NULL,
  `user_pass` VARCHAR(40) NOT NULL,
  `user_reg_date` DATETIME NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `template`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `template`.`item` (
  `item_id` INT(10) NOT NULL,
  `item_name` VARCHAR(20) NOT NULL,
  `item_desc` VARCHAR(200) NOT NULL,
  `item_price` DECIMAL(4,2) NOT NULL,
  `item_img` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`item_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `template`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `template`.`orders` (
  `user_user_id` INT(20) NOT NULL,
  `item_item_id` INT(10) NOT NULL,
  `order_date` DATETIME NOT NULL,
  `order_quantity` INT(10) NOT NULL,
  `order_total` DECIMAL(8,2) NOT NULL,
  PRIMARY KEY (`user_user_id`, `item_item_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
