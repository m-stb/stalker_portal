--

CREATE TABLE `smac_codes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(32) NOT NULL DEFAULT '',
  `request` VARCHAR(128) NOT NULL DEFAULT '',
  `user_id` INT NOT NULL DEFAULT 0,
  `device` VARCHAR(64) NOT NULL DEFAULT '',
  `status` ENUM("Not Activated", "Activated", "Blocked") DEFAULT "Not Activated",
  `added` TIMESTAMP NULL DEFAULT NULL,
  `updated` TIMESTAMP NULL DEFAULT NULL,
  UNIQUE INDEX `code` (`code`),
  PRIMARY KEY (`id`)
) DEFAULT CHARSET = UTF8;

-- //@UNDO

DROP TABLE `smac_codes`;

--