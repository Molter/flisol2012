SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `jogadas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `jogadas` ;

-- -----------------------------------------------------
-- Table `jogadas`.`jogadas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `jogadas`.`jogadas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(200) NULL ,
  `ganha` INT NULL ,
  `perde` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
