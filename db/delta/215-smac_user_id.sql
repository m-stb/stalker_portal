--

ALTER TABLE `smac_certificates` ADD COLUMN `uid` INT NOT NULL DEFAULT 0;

-- //@UNDO

ALTER TABLE `smac_certificates` DROP COLUMN `uid`;

--