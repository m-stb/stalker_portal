--

UPDATE storages set `dvr_type` = 'stalker_dvr' where `for_records` = 1 and `wowza_dvr` = 0 and `flussonic_dvr` = 0 and `nimble_dvr` = 0;

-- //@UNDO

--