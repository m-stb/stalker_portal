--

ALTER TABLE `itv` CHANGE COLUMN `tv_archive_type` `tv_archive_type` ENUM('', 'stalker_dvr', 'wowza_dvr', 'flussonic_dvr', 'nimble_dvr') DEFAULT '';

-- //@UNDO

ALTER TABLE `itv` CHANGE COLUMN `tv_archive_type` `tv_archive_type` ENUM('', 'wowza_dvr', 'flussonic_dvr', 'nimble_dvr') DEFAULT '';

--