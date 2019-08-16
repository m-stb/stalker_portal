--

ALTER TABLE `ch_links` ADD `wowza_securetoken` tinyint default 0;
ALTER TABLE `video_series_files` MODIFY COLUMN `tmp_link_type` ENUM('flussonic','nginx','wowza', 'edgecast_auth', 'nimble', 'akamai_auth', 'wowza_securetoken') NULL DEFAULT NULL;

-- //@UNDO

ALTER TABLE `ch_links` DROP `wowza_securetoken`;
ALTER TABLE `video_series_files` MODIFY COLUMN `tmp_link_type` ENUM('flussonic','nginx','wowza', 'edgecast_auth', 'nimble', 'akamai_auth') NULL DEFAULT NULL;

--