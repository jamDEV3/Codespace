-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema work_sql
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema work_sql
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `work_sql` DEFAULT CHARACTER SET utf8 ;
USE `work_sql` ;

-- -----------------------------------------------------
-- Table `work_sql`.`regions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`regions` (
  `region_id` INT NOT NULL,
  `region_name` VARCHAR(45) NULL,
  PRIMARY KEY (`region_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `work_sql`.`countries`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`countries` (
  `country_id` CHAR(2) NOT NULL,
  `country_name` VARCHAR(45) NULL,
  `regions_region_id` INT NOT NULL,
  PRIMARY KEY (`country_id`, `regions_region_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `work_sql`.`locations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`locations` (
  `location_id` INT NOT NULL,
  `street_address` VARCHAR(45) NULL,
  `postal_code` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `state_province` VARCHAR(45) NULL,
  `countries_country_id` CHAR(2) NOT NULL,
  PRIMARY KEY (`location_id`, `countries_country_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `work_sql`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`departments` (
  `department_id` INT NOT NULL,
  `department_name` VARCHAR(45) NULL,
  `locations_location_id` INT NOT NULL,
  PRIMARY KEY (`department_id`, `locations_location_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `work_sql`.`jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`jobs` (
  `job_id` INT NOT NULL,
  `job_title` VARCHAR(45) NULL,
  `min_salary` DECIMAL(8,2) NULL,
  `max_salary` DECIMAL(8,2) NULL,
  PRIMARY KEY (`job_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `work_sql`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`employees` (
  `employee_id` INT NOT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone_number` VARCHAR(45) NULL,
  `hire_date` DATE NULL,
  `manager_id` INT NULL,
  `salary` DECIMAL(8,2) NULL,
  `jobs_job_id` INT NOT NULL,
  `departments_department_id` INT NOT NULL,
  PRIMARY KEY (`employee_id`, `jobs_job_id`, `departments_department_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `work_sql`.`dependents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `work_sql`.`dependents` (
  `dependent_id` INT NOT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `relationship` VARCHAR(45) NULL,
  `employees_employee_id` INT NOT NULL,
  PRIMARY KEY (`dependent_id`, `employees_employee_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
