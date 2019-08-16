--

CREATE TABLE `tariffs_notifications` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tariff_id` INT NOT NULL,
  `notification_delay_in_hours`  SMALLINT(4) NULL DEFAULT 0,
  `template_id` INT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET = UTF8;

ALTER TABLE `messages_templates` ADD COLUMN `url` VARCHAR(512) NULL DEFAULT NULL;
ALTER TABLE `tariff_plan` ADD COLUMN `days_to_expires` SMALLINT(3) NULL DEFAULT 0;
ALTER TABLE `users` ADD COLUMN `tariff_expired_date` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `users` ADD COLUMN `tariff_id_instead_expired` INT NULL;

-- //@UNDO

DROP TABLE `tariffs_notifications`;
ALTER TABLE `messages_templates` DROP COLUMN `url`;
ALTER TABLE `tariff_plan` DROP COLUMN `days_to_expires`;
ALTER TABLE `users` DROP COLUMN `tariff_expired_date`;
ALTER TABLE `users` DROP COLUMN `tariff_id_instead_expired`;

--