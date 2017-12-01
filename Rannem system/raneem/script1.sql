SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Raneem
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Raneem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Raneem` ;

-- -----------------------------------------------------
-- Table `Raneem`.`Material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Material` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Material` (
  `Material.ID` INT NOT NULL AUTO_INCREMENT,
  `Description` TEXT NULL,
  `Quantity` FLOAT NULL,
  `Price` FLOAT NULL,
  PRIMARY KEY (`Material.ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Raneem`.`Trader`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Trader` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Trader` (
  `Trader.ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `Phoe` VARCHAR(45) NULL,
  `Adreess` VARCHAR(45) NULL,
  `instalment` VARCHAR(45) NULL,
  `Type` VARCHAR(45) NULL,
  PRIMARY KEY (`Trader.ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Raneem`.`Material_Order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Material_Order` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Material_Order` (
  `Material_Order.ID` INT NOT NULL AUTO_INCREMENT,
  `Material_ID` INT NULL,
  `Trader_ID` INT NULL,
  `Quantity` FLOAT NULL,
  `Total_Price` FLOAT NULL,
  `Paid` FLOAT NULL,
  `Date` DATE NULL,
  PRIMARY KEY (`Material_Order.ID`),
  CONSTRAINT `Material.ID`
    FOREIGN KEY (`Material_ID`)
    REFERENCES `Raneem`.`Material` (`Material.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Trader.ID`
    FOREIGN KEY (`Trader_ID`)
    REFERENCES `Raneem`.`Trader` (`Trader.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `Material.ID_idx` ON `Raneem`.`Material_Order` (`Material_ID` ASC);

CREATE INDEX `Trader.ID_idx` ON `Raneem`.`Material_Order` (`Trader_ID` ASC);


-- -----------------------------------------------------
-- Table `Raneem`.`Product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Product` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Product` (
  `Product.ID` INT NOT NULL AUTO_INCREMENT,
  `Description` TEXT NULL,
  `Quantity` INT NULL,
  `Cost-Price` FLOAT NULL,
  `Selling-price` FLOAT NULL,
  PRIMARY KEY (`Product.ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Raneem`.`Customer`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Customer` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Customer` (
  `Customer.ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `Phone` VARCHAR(45) NULL,
  `Address` VARCHAR(45) NULL,
  PRIMARY KEY (`Customer.ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Raneem`.`Product_Order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Product_Order` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Product_Order` (
  `Product_Order.ID` INT NOT NULL AUTO_INCREMENT,
  `Customer_ID` INT NULL,
  `Total_Price` FLOAT NULL,
  `Date` DATE NULL,
  `Product_Discount` FLOAT NULL,
  PRIMARY KEY (`Product_Order.ID`),
  CONSTRAINT `Customer.ID`
    FOREIGN KEY (`Customer_ID`)
    REFERENCES `Raneem`.`Customer` (`Customer.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `Customer.ID_idx` ON `Raneem`.`Product_Order` (`Customer_ID` ASC);


-- -----------------------------------------------------
-- Table `Raneem`.`Extra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Extra` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Extra` (
  `Printing.ID` INT NOT NULL AUTO_INCREMENT,
  `Description` TEXT NULL,
  `Cost` FLOAT NULL,
  PRIMARY KEY (`Printing.ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Raneem`.`Extra_Order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Extra_Order` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Extra_Order` (
  `Printing_Order.ID` INT NOT NULL AUTO_INCREMENT,
  `Printing_ID` INT NULL,
  `Trader_ID` INT NULL,
  `Product_ID` INT NULL,
  `Quantity` INT NULL,
  `Deliver` INT NULL,
  `Total_cost` FLOAT NULL,
  PRIMARY KEY (`Printing_Order.ID`),
  CONSTRAINT `Printing.ID`
    FOREIGN KEY (`Printing_ID`)
    REFERENCES `Raneem`.`Extra` (`Printing.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Product.ID`
    FOREIGN KEY (`Product_ID`)
    REFERENCES `Raneem`.`Product` (`Product.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Trader.ID`
    FOREIGN KEY (`Trader_ID`)
    REFERENCES `Raneem`.`Trader` (`Trader.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `Printing.ID_idx` ON `Raneem`.`Extra_Order` (`Printing_ID` ASC);

CREATE INDEX `Product.ID_idx` ON `Raneem`.`Extra_Order` (`Product_ID` ASC);

CREATE INDEX `Trader.ID_idx` ON `Raneem`.`Extra_Order` (`Trader_ID` ASC);


-- -----------------------------------------------------
-- Table `Raneem`.`Product_oreder_Details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Raneem`.`Product_oreder_Details` ;

CREATE TABLE IF NOT EXISTS `Raneem`.`Product_oreder_Details` (
  `Product_oreder_DetailsID` INT NOT NULL,
  `Product_ID` INT NULL,
  ` Quantity` INT NULL,
  `Product-Price` FLOAT NULL,
  `Product_orederID` INT NULL,
  PRIMARY KEY (`Product_oreder_DetailsID`),
  CONSTRAINT `Product_ID`
    FOREIGN KEY (`Product_ID`)
    REFERENCES `Raneem`.`Product` (`Product.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `Product_Order_ID`
    FOREIGN KEY (`Product_orederID`)
    REFERENCES `Raneem`.`Product_Order` (`Product_Order.ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `Product_ID_idx` ON `Raneem`.`Product_oreder_Details` (`Product_ID` ASC);

CREATE INDEX `Product_Order_ID_idx` ON `Raneem`.`Product_oreder_Details` (`Product_orederID` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
