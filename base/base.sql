SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sieval` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sieval` ;

-- -----------------------------------------------------
-- Table `sieval`.`colleges`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`colleges` (
  `college_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código Único de college',
  `college_name` VARCHAR(150) NOT NULL COMMENT 'Nombre de la Universidad',
  `college_address` VARCHAR(150) NOT NULL COMMENT 'Dirección de la universidad',
  `college_phone` VARCHAR(10) NOT NULL COMMENT 'Teléfono fijo de la universidad.',
  `college_cellphone` VARCHAR(9) NOT NULL COMMENT 'Teléfono celular de la universidad',
  `college_email` VARCHAR(150) NOT NULL COMMENT 'Correo de la universidad.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`college_id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data `sieval`.`colleges`
-- -----------------------------------------------------
INSERT INTO colleges (college_id,college_name,college_address,college_phone,college_cellphone,college_email,created,modified)
VALUES (1,'Universidad La Salle','Av. Alfonso Ugarte','054444444','999999999','universidad@ulasalle.edu.pe',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

-- -----------------------------------------------------
-- Table `sieval`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`roles` (
  `roles_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de los roles',
  `roles_description` VARCHAR(150) NOT NULL COMMENT 'Descripción del rol',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación.',
  PRIMARY KEY (`roles_id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data `sieval`.`roles`
-- -----------------------------------------------------
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (1,'Decano',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (2,'Coordinador',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (3,'Estudiante',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (4,'Director',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (5,'Rector',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO roles (roles_id,roles_description,created,modified)
VALUES (6,'Docente',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);


-- -----------------------------------------------------
-- Table `sieval`.`degrees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`degrees` (
  `degrees_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código Unico de grados academicos',
  `degrees_description` VARCHAR(45) NOT NULL COMMENT 'Descripcción del grado academico',
  `degrees_acronym` VARCHAR(45) NOT NULL COMMENT 'Acrónimo del grado academico',
  `created` DATETIME NOT NULL COMMENT 'Fecha de Creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`degrees_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data `sieval`.`degrees`
-- -----------------------------------------------------
INSERT INTO degrees (degrees_id,degrees_description,degrees_acronym,created,modified)
VALUES (1,'Doctor','Dr.',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO degrees (degrees_id,degrees_description,degrees_acronym,created,modified)
VALUES (2,'Magister','Msc.',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO degrees (degrees_id,degrees_description,degrees_acronym,created,modified)
VALUES (3,'Licenciado','Lic.',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO degrees (degrees_id,degrees_description,degrees_acronym,created,modified)
VALUES (4,'Secundaria Completa','Sec.',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

-- -----------------------------------------------------
-- Table `sieval`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`users` (
  `users_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código Único de usuarios',
  `roles_id` INT NOT NULL COMMENT 'Código Unico de referencia a un rol',
  `degrees_id` INT NOT NULL COMMENT 'Código Unico de referencia a un grado academico',
  `users_name` VARCHAR(150) NOT NULL COMMENT 'Nombre del usuario',
  `users_fathersurname` VARCHAR(150) NOT NULL COMMENT 'Apellido Paterno del usuario',
  `users_mothersurname` VARCHAR(150) NOT NULL COMMENT 'Apellido Materno del usuario',
  `users_email` VARCHAR(150) NOT NULL COMMENT 'Email del usuario',
  `users_password` VARCHAR(150) NOT NULL COMMENT 'Password del usuario',
  `users_birthday` DATE NOT NULL COMMENT 'Fecha de nacimiento del Usuario',
  `users_cellphone` VARCHAR(9) NOT NULL COMMENT 'Celular del usuario',
  `users_status` TINYINT(1) NULL DEFAULT 1 COMMENT 'Estado Activo/Inactivo del usuario.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de Creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de ultima modificación\n',
  PRIMARY KEY (`users_id`),
  INDEX `fk_users_roles1_idx` (`roles_id` ASC),
  INDEX `fk_users_degrees1_idx` (`degrees_id` ASC),
  CONSTRAINT `fk_users_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `sieval`.`roles` (`roles_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_degrees1`
    FOREIGN KEY (`degrees_id`)
    REFERENCES `sieval`.`degrees` (`degrees_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`rectors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`rectors` (
  `rectors_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de un rector.',
  `users_id` INT NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `college_id` INT NOT NULL COMMENT 'Código Unico de referencia a una Universidad',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`rectors_id`),
  INDEX `fk_rectors_college_idx` (`college_id` ASC),
  INDEX `fk_rectors_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_rectors_college`
    FOREIGN KEY (`college_id`)
    REFERENCES `sieval`.`colleges` (`college_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rectors_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `sieval`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`faculties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`faculties` (
  `faculties_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de faculties',
  `college_id` INT NOT NULL COMMENT 'Código Unico de referencia a una universidad',
  `faculties_name` VARCHAR(150) NOT NULL COMMENT 'Nombre de la facultad',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación.',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`faculties_id`),
  INDEX `fk_faculties_college1_idx` (`college_id` ASC),
  CONSTRAINT `fk_faculties_college1`
    FOREIGN KEY (`college_id`)
    REFERENCES `sieval`.`colleges` (`college_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`deans`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`deans` (
  `deans_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de decanos',
  `users_id` INT NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `faculties_id` INT NOT NULL COMMENT 'Código Unico de referencia a una facultad',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación.',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`deans_id`),
  INDEX `fk_deans_faculties1_idx` (`faculties_id` ASC),
  INDEX `fk_deans_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_deans_faculties1`
    FOREIGN KEY (`faculties_id`)
    REFERENCES `sieval`.`faculties` (`faculties_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_deans_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `sieval`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`departments` (
  `departments_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de departamentos',
  `faculties_id` INT NOT NULL COMMENT 'Código Unico de referencia a una facultad',
  `departments_name` VARCHAR(150) NOT NULL COMMENT 'Nombre del departamento.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`departments_id`),
  INDEX `fk_departments_faculties1_idx` (`faculties_id` ASC),
  CONSTRAINT `fk_departments_faculties1`
    FOREIGN KEY (`faculties_id`)
    REFERENCES `sieval`.`faculties` (`faculties_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`directors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`directors` (
  `directors_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de Directores',
  `users_id` INT NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `departments_id` INT NOT NULL COMMENT 'Código Unico de referencia a un departamento\n',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`directors_id`),
  INDEX `fk_directors_departments1_idx` (`departments_id` ASC),
  INDEX `fk_directors_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_directors_departments1`
    FOREIGN KEY (`departments_id`)
    REFERENCES `sieval`.`departments` (`departments_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_directors_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `sieval`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`schools`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`schools` (
  `schools_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de escuelas',
  `departments_id` INT NOT NULL COMMENT 'Código Unico de referencia a un departamento',
  `schools_name` VARCHAR(150) NOT NULL COMMENT 'Nombre de la escuela',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`schools_id`),
  INDEX `fk_schools_departments1_idx` (`departments_id` ASC),
  CONSTRAINT `fk_schools_departments1`
    FOREIGN KEY (`departments_id`)
    REFERENCES `sieval`.`departments` (`departments_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`coordinators`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`coordinators` (
  `coordinators_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de coordinadores',
  `users_id` INT NOT NULL COMMENT 'Código Unico de referencia a un usuario\n',
  `schools_id` INT NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`coordinators_id`),
  INDEX `fk_coordinators_schools1_idx` (`schools_id` ASC),
  INDEX `fk_coordinators_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_coordinators_schools1`
    FOREIGN KEY (`schools_id`)
    REFERENCES `sieval`.`schools` (`schools_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_coordinators_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `sieval`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`students` (
  `students_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de estudiantes',
  `users_id` INT NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `schools_id` INT NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`students_id`),
  INDEX `fk_students_schools1_idx` (`schools_id` ASC),
  INDEX `fk_students_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_students_schools1`
    FOREIGN KEY (`schools_id`)
    REFERENCES `sieval`.`schools` (`schools_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_students_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `sieval`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`academics`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`academics` (
  `academics_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de academics',
  `coordinators_id` INT NOT NULL COMMENT 'Código Unico de referencia a un coordinador',
  `schools_id` INT NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `academics_year` INT NOT NULL COMMENT 'Año académico.',
  `academics_period` VARCHAR(2) NOT NULL COMMENT 'Periodó del año académico.',
  `academics_start` DATE NOT NULL,
  `academics_end` DATE NOT NULL,
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`academics_id`),
  INDEX `fk_academics_coordinators1_idx` (`coordinators_id` ASC),
  INDEX `fk_academics_schools1_idx` (`schools_id` ASC),
  CONSTRAINT `fk_academics_coordinators1`
    FOREIGN KEY (`coordinators_id`)
    REFERENCES `sieval`.`coordinators` (`coordinators_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_academics_schools1`
    FOREIGN KEY (`schools_id`)
    REFERENCES `sieval`.`schools` (`schools_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`study_plans`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`study_plans` (
  `study_plans_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de planes de estudios',
  `schools_id` INT NOT NULL COMMENT 'Código Unico de referencia a una escuela',
  `study_plans_year` VARCHAR(10) NOT NULL COMMENT 'Año del plan de estudio.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`study_plans_id`),
  INDEX `fk_study_plans_schools1_idx` (`schools_id` ASC),
  CONSTRAINT `fk_study_plans_schools1`
    FOREIGN KEY (`schools_id`)
    REFERENCES `sieval`.`schools` (`schools_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`semesters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`semesters` (
  `semesters_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Códico único del semestre',
  `study_plans_id` INT NOT NULL COMMENT 'Código Unico de referencia a un plan de estudio',
  `semesters_number` VARCHAR(5) NOT NULL COMMENT 'Número de semestre',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`semesters_id`),
  INDEX `fk_semesters_study_plans1_idx` (`study_plans_id` ASC),
  CONSTRAINT `fk_semesters_study_plans1`
    FOREIGN KEY (`study_plans_id`)
    REFERENCES `sieval`.`study_plans` (`study_plans_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`types_subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`types_subjects` (
  `types_subjects` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de tipos de cursos.',
  `types_subjects_description` VARCHAR(45) NOT NULL COMMENT 'Descripción del tipo de curso.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`types_subjects`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Data `sieval`.`types_subjects`
-- -----------------------------------------------------
INSERT INTO types_subjects (types_subjects,types_subjects_description,created,modified)
VALUES (1,'Teórico',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_subjects (types_subjects,types_subjects_description,created,modified)
VALUES (2,'Teórico-Práctico',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO types_subjects (types_subjects,types_subjects_description,created,modified)
VALUES (3,'Práctico',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

-- -----------------------------------------------------
-- Table `sieval`.`subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`subjects` (
  `subjects_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de subjects',
  `semesters_id` INT NOT NULL COMMENT 'Código Unico de referencia a un semestre',
  `types_subjects_id` INT NOT NULL COMMENT 'Código Unico de referencia a un tipo de curso',
  `subjects_name` VARCHAR(50) NOT NULL COMMENT 'Nombre del curso',
  `subjects_credit` INT NOT NULL COMMENT 'Número de créditos',
  `subjects_hours` INT NOT NULL COMMENT 'Número de horas del curso.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`subjects_id`),
  INDEX `fk_subjects_semesters1_idx` (`semesters_id` ASC),
  INDEX `fk_subjects_types_subjects1_idx` (`types_subjects_id` ASC),
  CONSTRAINT `fk_subjects_semesters1`
    FOREIGN KEY (`semesters_id`)
    REFERENCES `sieval`.`semesters` (`semesters_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjects_types_subjects1`
    FOREIGN KEY (`types_subjects_id`)
    REFERENCES `sieval`.`types_subjects` (`types_subjects`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`teachers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`teachers` (
  `teachers_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de profesores',
  `users_id` INT NOT NULL COMMENT 'Código Unico de referencia a un usuario',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`teachers_id`),
  INDEX `fk_teachers_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_teachers_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `sieval`.`users` (`users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sieval`.`shifts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`shifts` (
  `shifts_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único del turno',
  `shifts_description` VARCHAR(45) NOT NULL COMMENT 'Descripcción del turno (mañana o tarde)',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`shifts_id`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Data `sieval`.`shifts`
-- -----------------------------------------------------
INSERT INTO shifts (shifts_id,shifts_description,created,modified)
VALUES (1,'Mañana',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO shifts (shifts_id,shifts_description,created,modified)
VALUES (2,'Tarde',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO shifts (shifts_id,shifts_description,created,modified)
VALUES (3,'Noche',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

-- -----------------------------------------------------
-- Table `sieval`.`sections`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`sections` (
  `sections_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de secciones.',
  `sections_groups` VARCHAR(10) NOT NULL COMMENT 'Número de grupo del curso.',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`sections_id`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Data `sieval`.`sections`
-- -----------------------------------------------------
INSERT INTO sections (sections_id,sections_groups,created,modified)
VALUES (1,'I',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
INSERT INTO sections (sections_id,sections_groups,created,modified)
VALUES (2,'II',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

-- -----------------------------------------------------
-- Table `sieval`.`assignments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sieval`.`assignments` (
  `assignment_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Código único de asignación',
  `academics_id` INT NOT NULL COMMENT 'Código Unico de referencia a un academico',
  `subjects_id` INT NOT NULL COMMENT 'Código Unico de referencia a un curso',
  `teachers_id` INT NOT NULL COMMENT 'Código Unico de referencia a un docente',
  `shifts_id` INT NOT NULL COMMENT 'Código Unico de referencia a un turno',
  `sections_id` INT NOT NULL COMMENT 'Código Unico de referencia a un sección',
  `created` DATETIME NOT NULL COMMENT 'Fecha de creación.',
  `modified` DATETIME NOT NULL COMMENT 'Fecha de última modificación',
  PRIMARY KEY (`assignment_id`),
  INDEX `fk_assignment_academics1_idx` (`academics_id` ASC),
  INDEX `fk_assignment_subjects1_idx` (`subjects_id` ASC),
  INDEX `fk_assignment_teachers1_idx` (`teachers_id` ASC),
  INDEX `fk_assignment_shifts1_idx` (`shifts_id` ASC),
  INDEX `fk_assignment_sections1_idx` (`sections_id` ASC),
  CONSTRAINT `fk_assignment_academics1`
    FOREIGN KEY (`academics_id`)
    REFERENCES `sieval`.`academics` (`academics_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_subjects1`
    FOREIGN KEY (`subjects_id`)
    REFERENCES `sieval`.`subjects` (`subjects_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_teachers1`
    FOREIGN KEY (`teachers_id`)
    REFERENCES `sieval`.`teachers` (`teachers_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_shifts1`
    FOREIGN KEY (`shifts_id`)
    REFERENCES `sieval`.`shifts` (`shifts_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_assignment_sections1`
    FOREIGN KEY (`sections_id`)
    REFERENCES `sieval`.`sections` (`sections_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;





SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
