--

CREATE TABLE `themes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `alias` VARCHAR(64) NOT NULL DEFAULT '',
  `variables` TEXT,
  `added` TIMESTAMP NULL DEFAULT NULL,
  `updated` TIMESTAMP NULL DEFAULT NULL,
  UNIQUE INDEX `alias` (`alias`),
  PRIMARY KEY (`id`)
) DEFAULT CHARSET = UTF8;

-- //@UNDO

DROP TABLE `themes`;

--