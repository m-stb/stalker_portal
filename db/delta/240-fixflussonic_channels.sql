--

UPDATE `itv` set `wowza_dvr` = (`tv_archive_type` = 'wowza_dvr');
UPDATE `itv` set `flussonic_dvr` = (`tv_archive_type` = 'flussonic_dvr');
UPDATE `itv` set `nimble_dvr` = (`tv_archive_type` = 'nimble_dvr');

-- //@UNDO

--