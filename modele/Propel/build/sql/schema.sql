
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- Source
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Source`;

CREATE TABLE `Source`
(
    `numSource` INTEGER NOT NULL,
    `origineSource` DOUBLE NOT NULL,
    `citationSource` VARCHAR(255),
    PRIMARY KEY (`numSource`,`origineSource`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Genre
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Genre`;

CREATE TABLE `Genre`
(
    `numGenre` VARCHAR(4) NOT NULL,
    `nomAnGenre` VARCHAR(128) NOT NULL,
    `nomFrGenre` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`numGenre`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Aliment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Aliment`;

CREATE TABLE `Aliment`
(
    `numAliment` DOUBLE NOT NULL,
    `nomFrAliment` VARCHAR(255) NOT NULL,
    `nomAnAliment` VARCHAR(24) NOT NULL,
    `numGenre` VARCHAR(4) NOT NULL,
    PRIMARY KEY (`numAliment`),
    INDEX `Aliment_FI_1` (`numGenre`),
    CONSTRAINT `Aliment_FK_1`
        FOREIGN KEY (`numGenre`)
        REFERENCES `Genre` (`numGenre`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Constituant
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Constituant`;

CREATE TABLE `Constituant`
(
    `numConst` INTEGER NOT NULL AUTO_INCREMENT,
    `origineFrConst` VARCHAR(80),
    `origineAnConst` VARCHAR(80),
    PRIMARY KEY (`numConst`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- CompNutri
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `CompNutri`;

CREATE TABLE `CompNutri`
(
    `numAliment` DOUBLE NOT NULL,
    `numConst` INTEGER NOT NULL,
    `valNutri` VARCHAR(255),
    `valMinNutri` DOUBLE,
    `valMaxNutri` DOUBLE,
    `nbEchantNutri` DOUBLE,
    `ccEurNutri` VARCHAR(255),
    `numSource` INTEGER,
    PRIMARY KEY (`numAliment`,`numConst`),
    INDEX `CompNutri_FI_2` (`numConst`),
    INDEX `CompNutri_FI_3` (`numSource`),
    CONSTRAINT `CompNutri_FK_1`
        FOREIGN KEY (`numAliment`)
        REFERENCES `Aliment` (`numAliment`),
    CONSTRAINT `CompNutri_FK_2`
        FOREIGN KEY (`numConst`)
        REFERENCES `Constituant` (`numConst`),
    CONSTRAINT `CompNutri_FK_3`
        FOREIGN KEY (`numSource`)
        REFERENCES `Source` (`numSource`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
