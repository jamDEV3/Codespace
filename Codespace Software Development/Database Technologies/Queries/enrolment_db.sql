-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student` (
  `student_id` INT NOT NULL,
  `student_surname` VARCHAR(45) NULL,
  `student_firstname` VARCHAR(45) NULL,
  `student_email` VARCHAR(45) NULL,
  PRIMARY KEY (`student_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`module`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`module` (
  `module_id` INT NOT NULL,
  `module_name` VARCHAR(45) NULL,
  `module_location` VARCHAR(45) NULL,
  `module_start_time` VARCHAR(45) NULL,
  `module_end_time` VARCHAR(45) NULL,
  PRIMARY KEY (`module_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`registration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`registration` (
  `module_id` INT NOT NULL,
  `student_id` INT NOT NULL,
  `year_of_enrolment` INT NULL,
  `semester` VARCHAR(45) NULL,
  `student_student_id` INT NOT NULL,
  `module_module_id` INT NOT NULL,
  PRIMARY KEY (`module_id`, `student_id`, `student_student_id`, `module_module_id`),
  INDEX `fk_registration_student1_idx` (`student_student_id` ASC),
  INDEX `fk_registration_module1_idx` (`module_module_id` ASC),
  CONSTRAINT `fk_registration_student1`
    FOREIGN KEY (`student_student_id`)
    REFERENCES `mydb`.`student` (`student_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registration_module1`
    FOREIGN KEY (`module_module_id`)
    REFERENCES `mydb`.`module` (`module_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`department` (
  `department_id` INT NOT NULL,
  `department_name` VARCHAR(45) NULL,
  PRIMARY KEY (`department_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`lecturer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`lecturer` (
  `lecturer_id` INT NOT NULL,
  `lecturer_surname` VARCHAR(45) NULL,
  `lecturer_firstname` VARCHAR(45) NULL,
  `department_id` INT NULL,
  PRIMARY KEY (`lecturer_id`),
  CONSTRAINT `fk_lecturer_department1`
    FOREIGN KEY (`department_id`)
    REFERENCES `mydb`.`department` (`department_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`lecturer_module`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`lecturer_module` (
  `lecturer_id` INT NOT NULL,
  `module_id` INT NOT NULL,
  `year_of_delivery` INT NULL,
  `semester` VARCHAR(45) NULL,
  `lecturer_lecturer_id` INT NOT NULL,
  `module_module_id` INT NOT NULL,
  PRIMARY KEY (`lecturer_id`, `module_id`, `lecturer_lecturer_id`, `module_module_id`),
  INDEX `fk_lecturer_module_lecturer1_idx` (`lecturer_lecturer_id` ASC),
  INDEX `fk_lecturer_module_module1_idx` (`module_module_id` ASC),
  CONSTRAINT `fk_lecturer_module_lecturer1`
    FOREIGN KEY (`lecturer_lecturer_id`)
    REFERENCES `mydb`.`lecturer` (`lecturer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lecturer_module_module1`
    FOREIGN KEY (`module_module_id`)
    REFERENCES `mydb`.`module` (`module_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
