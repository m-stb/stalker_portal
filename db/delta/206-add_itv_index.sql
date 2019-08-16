--

ALTER TABLE `itv` ADD INDEX `number_idx` (`number`);

-- //@UNDO

ALTER TABLE `itv` DROP INDEX `number_idx` ;

--