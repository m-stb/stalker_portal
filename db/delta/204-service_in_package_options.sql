--

ALTER TABLE `service_in_package` ADD COLUMN `options` VARCHAR(128) NOT NULL DEFAULT '';

-- //@UNDO

ALTER TABLE `service_in_package` DROP COLUMN `options`;

--