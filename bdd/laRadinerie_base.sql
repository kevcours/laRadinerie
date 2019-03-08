drop database projet;
create database projet;
use projet;
drop table if exists noter;
drop table if exists promotion;
drop table if exists magasin;
drop table if exists categorie;
drop table if exists avis;
drop table if exists Utilisateur;
drop table if exists ville;
drop table if exists type;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `Ville`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ville` (
  `idville` INT NOT NULL AUTO_INCREMENT,
  `cp` VARCHAR(5) NOT NULL,
  `libelleType` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idville`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Type` (
  `idType` INT NOT NULL AUTO_INCREMENT,
  `libelleType` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Categorie` (
  `idCategorie` INT NOT NULL AUTO_INCREMENT,
  `libelleCategorie` VARCHAR(45) NOT NULL,
  `idType` INT NOT NULL,
  PRIMARY KEY (`idCategorie`),
    FOREIGN KEY (`idType`)
    REFERENCES `Type` (`idType`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `idUtilisateur` INT NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` VARCHAR(45) NOT NULL,
  `prenomUtilisateur` VARCHAR(45) NOT NULL,
  `Ddn` DATE NOT NULL,
  `telUtilisateur` VARCHAR(10) NOT NULL,
  `mailUtilisateur` VARCHAR(45) NOT NULL,
  `mdpUtilisateur` VARCHAR(45) NOT NULL,
  `adresseUtilisateur` VARCHAR(75) NOT NULL,
  `idville` INT NOT NULL,
  `compteUtilisateur` BOOLEAN NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUtilisateur`),
    FOREIGN KEY (`idville`)
    REFERENCES `Ville` (`idville`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Magasin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Magasin` (
  `idMagasin` INT NOT NULL AUTO_INCREMENT,
  `nomMagasin` VARCHAR(45) NOT NULL,
  `adresseMagasin` VARCHAR(45) NOT NULL,
  `latMagasin` VARCHAR(45) NOT NULL,
  `longMagasin` VARCHAR(45) NOT NULL,
  `telMagasin` VARCHAR(10) NOT NULL,
  `mailMagasin` VARCHAR(45) NOT NULL,
  `siret` VARCHAR(45) NOT NULL,
  `photo1` VARCHAR(45) NULL,
  `photo2` VARCHAR(45) NULL,
  `idCategorie` INT NOT NULL,
  `idType` INT NOT NULL,
  `idville` INT NOT NULL,
  `idUtilisateur` INT NOT NULL,
  PRIMARY KEY (`idMagasin`),
    FOREIGN KEY (`idCategorie`)
    REFERENCES `Categorie` (`idCategorie`),
    FOREIGN KEY (`idType`)
    REFERENCES `Type` (`idType`),
    FOREIGN KEY (`idville`)
    REFERENCES `Ville` (`idville`),
    FOREIGN KEY (`idUtilisateur`)
    REFERENCES `Utilisateur` (`idUtilisateur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Promotion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Promotion` (
  `idPromotion` INT NOT NULL AUTO_INCREMENT,
  `promotionLibelle` VARCHAR(45) NOT NULL,
  `dateDebut` DATE NOT NULL,
  `dateFin` DATE NOT NULL,
  `photo1` VARCHAR(45) NULL,
  `photo2` VARCHAR(45) NULL,
  `photo3` VARCHAR(45) NULL,
  `codePromo` VARCHAR(45) NOT NULL,
  `active` TINYINT NULL,
  `idMagasin` INT NOT NULL,
  PRIMARY KEY (`idPromotion`),
    FOREIGN KEY (`idMagasin`)
    REFERENCES `Magasin` (`idMagasin`))
ENGINE = InnoDB;




-- -----------------------------------------------------
-- Table `Avis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Avis` (
  `codeAvis` INT NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codeAvis`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Noter`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Noter` (
  `commentaire` VARCHAR(75) NULL,
  `note` VARCHAR(1) NULL,
  `codeAvis` INT NOT NULL,
  `idUtilisateur` INT NOT NULL,
  `idPromotion` INT NOT NULL,
  PRIMARY KEY (`codeAvis`, `idUtilisateur`, `idPromotion`),
    FOREIGN KEY (`codeAvis`)
    REFERENCES `Avis` (`codeAvis`),
    FOREIGN KEY (`idUtilisateur`)
    REFERENCES `Utilisateur` (`idUtilisateur`),
    FOREIGN KEY (`idPromotion`)
    REFERENCES `Promotion` (`idPromotion`))
ENGINE = InnoDB;
