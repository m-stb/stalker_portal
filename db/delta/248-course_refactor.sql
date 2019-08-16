--

truncate table `course_cache`;

ALTER TABLE `course_cache` DROP COLUMN `url`;
ALTER TABLE `course_cache` DROP COLUMN `content`;
ALTER TABLE `course_cache` DROP COLUMN `crc`;

ALTER TABLE `course_cache` ADD COLUMN `provider` varchar(10) NOT NULL AFTER `id`;
ALTER TABLE `course_cache` ADD COLUMN `exchange_date` DATE NOT NULL AFTER `provider`;
ALTER TABLE `course_cache` ADD COLUMN `code` varchar(10) NOT NULL AFTER `exchange_date`;
ALTER TABLE `course_cache` ADD COLUMN `currency` varchar(10) NOT NULL AFTER `code`;
ALTER TABLE `course_cache` ADD COLUMN `nominal` int NOT NULL default 1 AFTER currency;
ALTER TABLE `course_cache` ADD COLUMN `value` DECIMAL(10,8) NOT NULL AFTER `nominal`;

ALTER TABLE `course_cache` ADD INDEX (`provider`);

-- //@UNDO

truncate table `course_cache`;

ALTER TABLE `course_cache` DROP COLUMN `provider`;
ALTER TABLE `course_cache` DROP COLUMN `exchange_date`;
ALTER TABLE `course_cache` DROP COLUMN `code`;
ALTER TABLE `course_cache` DROP COLUMN `currency`;
ALTER TABLE `course_cache` DROP COLUMN `nominal`;
ALTER TABLE `course_cache` DROP COLUMN `value`;

ALTER TABLE `course_cache` ADD COLUMN `url` varchar(255) NOT NULL default '';
ALTER TABLE `course_cache` ADD COLUMN `content` text;
ALTER TABLE `course_cache` ADD COLUMN `crc` varchar(64) NOT NULL default '';

ALTER TABLE `course_cache` ADD UNIQUE INDEX (`crc`);
--
