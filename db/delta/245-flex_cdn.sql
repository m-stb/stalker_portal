--

ALTER TABLE `ch_links` ADD `flexcdn_auth_support` tinyint default 0;

-- //@UNDO

ALTER TABLE `ch_links` DROP `flexcdn_auth_support`;

--