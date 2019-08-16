--

ALTER TABLE `stream_zones` ADD COLUMN `type` ENUM ('country', 'ip') DEFAULT 'country';

CREATE TABLE `ips_in_zone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ip` VARCHAR(128) NOT NULL DEFAULT '',
  `zone_id` INT NOT NULL DEFAULT 0,
  KEY `zone_id` (`zone_id`),
  PRIMARY KEY (`id`)
) DEFAULT CHARSET = UTF8;

ALTER TABLE `countries_in_zone` DROP KEY `country_id`;
ALTER TABLE `countries_in_zone` ADD KEY `zone_id` (`zone_id`);

-- //@UNDO

ALTER TABLE `stream_zones` DROP COLUMN `type`;
DROP TABLE `ips_in_zone`;
ALTER TABLE `countries_in_zone` ADD KEY `country_id` (`country_id`);
ALTER TABLE `countries_in_zone` DROP KEY `zone_id`;

--