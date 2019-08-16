--

ALTER TABLE `karaoke` ADD `protocol_old` VARCHAR(64) DEFAULT '';
UPDATE `karaoke` SET  `protocol_old` = `protocol`;
UPDATE `karaoke` SET  `protocol` = IF(`protocol` = 'nfs', 'http', `protocol`);
UPDATE `karaoke` SET  `rtsp_url` = IF(`protocol` = 'http', '', `rtsp_url`);

-- //@UNDO

UPDATE `karaoke` SET  `protocol` = `protocol_old`;
ALTER TABLE `karaoke` DROP `protocol_old`;

--