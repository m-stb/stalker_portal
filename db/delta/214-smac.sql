--

CREATE TABLE `smac_certificates` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fingerprint` VARCHAR(64) NOT NULL DEFAULT '',
  `body` BLOB,
  `added` TIMESTAMP NULL DEFAULT NULL,
  `updated` TIMESTAMP NULL DEFAULT NULL,
  INDEX `fingerprint` (`fingerprint`),
  PRIMARY KEY (`id`)
) DEFAULT CHARSET = UTF8;

-- //@UNDO

DROP TABLE `smac_certificates`;

--