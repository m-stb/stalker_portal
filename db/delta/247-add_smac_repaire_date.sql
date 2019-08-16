--

ALTER TABLE `smac_certificates` ADD `repaired_date` INT DEFAULT 0;

-- //@UNDO

ALTER TABLE `smac_certificates` DROP `repaired_date`;

--