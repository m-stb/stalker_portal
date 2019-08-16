--

ALTER TABLE `storages` ADD COLUMN `dvr_type` ENUM('', 'stalker_dvr', 'wowza_dvr', 'flussonic_dvr', 'nimble_dvr') DEFAULT '';
UPDATE storages set `dvr_type` = 'wowza_dvr' where `for_records` = 1 and `wowza_dvr` = 1;
UPDATE storages set `dvr_type` = 'flussonic_dvr' where `for_records` = 1 and `flussonic_dvr` = 1;
UPDATE storages set `dvr_type` = 'nimble_dvr' where `for_records` = 1 and `nimble_dvr` = 1;
UPDATE storages set `dvr_type` = 'stalker_dvr' where `for_records` = 0 and `wowza_dvr` = 0 and `flussonic_dvr` = 0 and `nimble_dvr` = 0;

-- //@UNDO

ALTER TABLE `storages` DROP COLUMN `dvr_type`;

--