

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `atelier` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `atelier` ;

-- -----------------------------------------------------
-- Table `workshop_category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `workshop_category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `public_age`
  -- -----------------------------------------------------
  CREATE TABLE IF NOT EXISTS `public_age` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `start` INT(3) NOT NULL,
    `end` INT(3) NOT NULL,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB;


    -- -----------------------------------------------------
    -- Table `address`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `address` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `address` VARCHAR(255) NOT NULL,
      `complement` VARCHAR(255) NULL,
      `city` VARCHAR(255) NULL,
      `zipcode` VARCHAR(5) NOT NULL,
      PRIMARY KEY (`id`))
      ENGINE = InnoDB;


      -- -----------------------------------------------------
      -- Table `establishment`
      -- -----------------------------------------------------
      CREATE TABLE IF NOT EXISTS `establishment` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(255) NOT NULL,
        `address_id` INT NOT NULL,
        PRIMARY KEY (`id`),
        CONSTRAINT `fk_establishment_address1`
        FOREIGN KEY (`address_id`)
        REFERENCES `address` (`id`))
        ENGINE = InnoDB;


        -- -----------------------------------------------------
        -- Table `workshop`
        -- -----------------------------------------------------
        CREATE TABLE IF NOT EXISTS `workshop` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `title` VARCHAR(45) NOT NULL,
          `description` TEXT NOT NULL,
          `price` DECIMAL(5,2) NOT NULL,
          `max_kids` INT(3) NOT NULL,
          `image` VARCHAR(255) NULL,
          `visible` TINYINT(1) NULL DEFAULT 1,
          `public_age_id` INT NOT NULL,
          `establishment_id` INT NOT NULL,
          `workshop_category_id` INT NOT NULL,
          PRIMARY KEY (`id`),
          CONSTRAINT `fk_workshop_workshop_category`
          FOREIGN KEY (`workshop_category_id`)
          REFERENCES `workshop_category` (`id`),
          CONSTRAINT `fk_workshop_public_age1`
          FOREIGN KEY (`public_age_id`)
          REFERENCES `public_age` (`id`),
          CONSTRAINT `fk_workshop_establishment1`
          FOREIGN KEY (`establishment_id`)
          REFERENCES `establishment` (`id`))
          ENGINE = InnoDB;


          -- -----------------------------------------------------
          -- Table `timetable`
          -- -----------------------------------------------------
          CREATE TABLE IF NOT EXISTS `timetable` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `startAt` DATETIME NOT NULL,
            `endAt` DATETIME NOT NULL,
            `enable` TINYINT(1) NULL,
            `workshop_id` INT NOT NULL,
            PRIMARY KEY (`id`, `workshop_id`),
            CONSTRAINT `fk_timetable_workshop1`
            FOREIGN KEY (`workshop_id`)
            REFERENCES `workshop` (`id`))
            ENGINE = InnoDB;


            -- -----------------------------------------------------
            -- Table `kid`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `kid` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `firstname` VARCHAR(255) NOT NULL,
              `lastname` VARCHAR(255) NOT NULL,
              `birthday` DATE NOT NULL,
              `classroom` VARCHAR(255) NULL,
              PRIMARY KEY (`id`))
              ENGINE = InnoDB;


              -- -----------------------------------------------------
              -- Table `parent`
              -- -----------------------------------------------------
              CREATE TABLE IF NOT EXISTS `parent` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `firstname` VARCHAR(255) NOT NULL,
                `lastname` VARCHAR(255) NOT NULL,
                `email` VARCHAR(255) NOT NULL,
                `address_id` INT NOT NULL,
                PRIMARY KEY (`id`),
                CONSTRAINT `fk_parent_address1`
                FOREIGN KEY (`address_id`)
                REFERENCES `address` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE )
                ENGINE = InnoDB;


                -- -----------------------------------------------------
                -- Table `workshop_has_kid`
                -- -----------------------------------------------------
                CREATE TABLE IF NOT EXISTS `workshop_has_kid` (
                  `workshop_id` INT NOT NULL,
                  `kid_id` INT NOT NULL,
                  `has_participated` TINYINT(1) NULL DEFAULT 0,
                  `validated` TINYINT(1) NULL DEFAULT 0,
                  PRIMARY KEY (`workshop_id`, `kid_id`),
                  CONSTRAINT `fk_workshop_has_kid_workshop1`
                  FOREIGN KEY (`workshop_id`)
                  REFERENCES `workshop` (`id`),
                  CONSTRAINT `fk_workshop_has_kid_kid1`
                  FOREIGN KEY (`kid_id`)
                  REFERENCES `kid` (`id`)
                  ON DELETE CASCADE
                  ON UPDATE CASCADE )
                  ENGINE = InnoDB;


                  -- -----------------------------------------------------
                  -- Table `kid_has_parent`
                  -- -----------------------------------------------------
                  CREATE TABLE IF NOT EXISTS `kid_has_parent` (
                    `kid_id` INT NOT NULL,
                    `parent_id` INT NOT NULL,
                    PRIMARY KEY (`kid_id`, `parent_id`),
                    CONSTRAINT `fk_kid_has_parent_kid1`
                    FOREIGN KEY (`kid_id`)
                    REFERENCES `kid` (`id`),
                    CONSTRAINT `fk_kid_has_parent_parent1`
                    FOREIGN KEY (`parent_id`)
                    REFERENCES `parent` (`id`)
                    ON DELETE CASCADE
                    ON UPDATE CASCADE )
                    ENGINE = InnoDB;


                    -- INSERTION

                    INSERT INTO `workshop_category` (`id`, `name`) VALUES (NULL, 'JEUX VIDEO'), (NULL, 'EDUCATION'), (NULL, 'MECANIQUE'),(NULL, 'ART');
                    INSERT INTO `public_age` (`id`, `start`, `end`) VALUES (NULL, '5', '7'), (NULL, '8', '10'), (NULL, '11 ', '13'), (NULL, '14', '17');
                    INSERT INTO `address` (`id`, `address`, `complement`, `city`, `zipcode`) VALUES (NULL, '115', 'CHEMIN DUCHEMIN', 'STE MARIE', '97438'), (NULL, '12', 'AVENUE LAFORET', 'ST PIERRE', '97410');
                    INSERT INTO `establishment` (`id`, `name`, `address_id`) VALUES (NULL, 'PIERRE ROSELLI', '2'), (NULL, 'ESPACE CULTUREL', '1');
                    INSERT INTO `workshop` (`id`, `title`, `description`, `price`, `max_kids`, `image`, `visible`, `public_age_id`, `establishment_id`, `workshop_category_id`) VALUES (NULL, 'developpement 3D', 'apprendre a developper des jeux', '300.00', '20', 'games.jpg', '1', '4', '1', '1');
                    INSERT INTO `workshop` (`id`, `title`, `description`, `price`, `max_kids`, `image`, `visible`, `public_age_id`, `establishment_id`, `workshop_category_id`) VALUES (NULL, 'Automobile', 'autour de la passion automobile', '20', '15', 'auto.jpg', '1', '4', '2', '3');
                    INSERT INTO `workshop` (`id`, `title`, `description`, `price`, `max_kids`, `image`, `visible`, `public_age_id`, `establishment_id`, `workshop_category_id`) VALUES (NULL, 'MOO', 'Mathematiques orientee objet', '40', '10', 'education.jpg', '1', '4', '1', '2');
                    INSERT INTO `workshop` (`id`, `title`, `description`, `price`, `max_kids`, `image`, `visible`, `public_age_id`, `establishment_id`, `workshop_category_id`) VALUES (NULL, 'La pyramide infernale', 'test simplon reunion avant prairie', '0', '16', 'pyramide.jpg', '1', '4', '2', '4');
                    INSERT INTO `timetable` (`id`, `startAt`, `endAt`, `enable`, `workshop_id`) VALUES (NULL, '2017-05-18 00:00:00', '2017-05-19 00:00:00', '1', '1');
                    INSERT INTO `kid` (`id`, `firstname`, `lastname`, `birthday`, `classroom`) VALUES (NULL, 'JUNIOR', 'THE KID', '2010-11-10', 'CP');
                    INSERT INTO `kid` (`id`, `firstname`, `lastname`, `birthday`, `classroom`) VALUES (NULL, 'ANITA', 'THE KID', '2000-04-10', '2ND');
                    INSERT INTO `parent` (`id`, `firstname`, `lastname`, `email`, `address_id`) VALUES (NULL, 'JAMES', 'THE KID', 'james@thekid.com', '2');
                    INSERT INTO `workshop_has_kid` (`workshop_id`, `kid_id`, `has_participated`, `validated`) VALUES ('1', '1', '0', '1');
                    INSERT INTO `workshop_has_kid` (`workshop_id`, `kid_id`, `has_participated`, `validated`) VALUES ('1', '2', '0', '0');
