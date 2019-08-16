--

ALTER TABLE `itv` ADD `tv_archive_duration` int not null default 168;

-- //@UNDO

ALTER TABLE `itv` DROP `tv_archive_duration`;

--