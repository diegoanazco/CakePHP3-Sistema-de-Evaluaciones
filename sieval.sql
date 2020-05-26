SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sieval` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sieval` ;

-- -----------------------------------------------------
-- Data `sieval`.`roles`
-- -----------------------------------------------------
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (7,'Admin',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);


-- -----------------------------------------------------
-- Table `sieval`.`types_test`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`types_test` (
  `types_test_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de tipos de exámenes',
  `types_test_description` VARCHAR(45) NOT NULL COMMENT 'Descripción de los tipos de exámenes',
  `types_test_weight` INT NOT NULL COMMENT 'Peso del examen',
  `created` DATETIME NOT NULL COMMENT 'Fecha de Creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`types_test_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data `sieval`.`types_test`
-- -----------------------------------------------------
INSERT INTO types_test (types_test_id,types_test_description,types_test_weight,created,modified)
VALUES (1,'Evidencia 01','10',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_test (types_test_id,types_test_description,types_test_weight,created,modified)
VALUES (2,'Evidencia 02','10',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_test (types_test_id,types_test_description,types_test_weight,created,modified)
VALUES (3,'Parcial','30',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_test (types_test_id,types_test_description,types_test_weight,created,modified)
VALUES (4,'Evidencia 03','10',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_test (types_test_id,types_test_description,types_test_weight,created,modified)
VALUES (5,'Evidencia 04','10',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_test (types_test_id,types_test_description,types_test_weight,created,modified)
VALUES (6,'Final','30',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);



-- -----------------------------------------------------
-- Table `sieval`.`tests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`tests` (
  `tests_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código Único de evaluaciones.',
  `assignment_id` INT NOT NULL COMMENT 'Código Unico de referencia a una asignación',
  `types_test_id` INT NOT NULL COMMENT 'Código Unico de referencia a un tipo de examen',
  `semesters_id` INT NOT NULL COMMENT 'Código Unico de referencia a un semestre',
  `schools_id` INT NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `test_date` DATE NOT NULL COMMENT 'Día de fecha del examen',
  `tests_start` TIME NOT NULL COMMENT 'Hora de inicio del examen',
  `tests_end` TIME NOT NULL COMMENT 'Hora de fin del examen',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación.',
  PRIMARY KEY (`tests_id`),
  INDEX `fk_tests_assignments1_idx` (`assignment_id` ASC),
  INDEX `fk_tests_types_test1_idx` (`types_test_id` ASC),
  INDEX `fk_tests_schools1_idx` (`schools_id` ASC),
  INDEX `fk_tests_semesters1_idx` (`semesters_id` ASC),
  CONSTRAINT `fk_tests_assignments1`
    FOREIGN KEY (`assignment_id`)
    REFERENCES `sieval`.`assignments` (`assignment_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tests_types_test1`
    FOREIGN KEY (`types_test_id`)
    REFERENCES `sieval`.`types_test` (`types_test_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tests_schools1`
    FOREIGN KEY (`schools_id`)
    REFERENCES `sieval`.`schools` (`schools_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tests_semesters1`
    FOREIGN KEY (`semesters_id`)
    REFERENCES `sieval`.`semesters` (`semesters_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`questions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`questions` (
  `questions_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de preguntas',
  `tests_id` INT NOT NULL COMMENT 'Código que referencia los exámenes',
  `questions_score` INT NOT NULL COMMENT 'Puntaje de la pregunta',
  `questions_header` VARCHAR(300) NOT NULL COMMENT 'Encabezado de la pregunta',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de la última modificación.',
  PRIMARY KEY (`questions_id`),
  INDEX `fk_questions_tests1_idx` (`tests_id` ASC),
  CONSTRAINT `fk_questions_tests1`
    FOREIGN KEY (`tests_id`)
    REFERENCES `sieval`.`tests` (`tests_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`annexes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`annexes` (
  `annexes_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de anexos del examen\n',
  `tests_id` INT NOT NULL COMMENT 'Código Unico de referencia a un examen',
  `annexes_description` VARCHAR(300) NOT NULL COMMENT 'Descripción de los anexos del examen',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`annexes_id`),
  INDEX `fk_annexes_tests1_idx` (`tests_id` ASC),
  CONSTRAINT `fk_annexes_tests1`
    FOREIGN KEY (`tests_id`)
    REFERENCES `sieval`.`tests` (`tests_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
