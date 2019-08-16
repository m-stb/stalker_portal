--

ALTER TABLE `itv` ADD COLUMN `tv_archive_type` ENUM('', 'wowza_dvr', 'flussonic_dvr', 'nimble_dvr') DEFAULT '';
UPDATE itv set `tv_archive_type` = 'wowza_dvr' where `enable_tv_archive` = 1 and `wowza_dvr` = 1;
UPDATE itv set `tv_archive_type` = 'flussonic_dvr' where `enable_tv_archive` = 1 and `flussonic_dvr` = 1;
UPDATE itv set `tv_archive_type` = 'nimble_dvr' where `enable_tv_archive` = 1 and `nimble_dvr` = 1;

-- //@UNDO

ALTER TABLE `itv` DROP COLUMN `tv_archive_type`;

--