-- CREATE TABLE "groups" ---------------------------------------
CREATE TABLE `groups` ( 
	`id` Int( 16 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`teacher_id` Int( 16 ) UNSIGNED NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET latin1 NOT NULL,
	`created_at` DateTime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DateTime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `unique_id` UNIQUE( `id` ),
	CONSTRAINT `unique_name` UNIQUE( `name` ) )
CHARACTER SET = latin1
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "lessons" --------------------------------------
CREATE TABLE `lessons` ( 
	`id` Int( 255 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`group_id` Int( 16 ) UNSIGNED NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET latin1 NOT NULL,
	`time` Time NULL,
	`created_at` DateTime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DateTime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
CHARACTER SET = latin1
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "teachers" -------------------------------------
CREATE TABLE `teachers` ( 
	`id` Int( 16 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`first_name` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`last_name` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created_at` DateTime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DateTime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "name" -----------------------------------------
CREATE INDEX `name` USING BTREE ON `lessons`( `name` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "first_name" -----------------------------------
CREATE INDEX `first_name` USING BTREE ON `teachers`( `first_name` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------
