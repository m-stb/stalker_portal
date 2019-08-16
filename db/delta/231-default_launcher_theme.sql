--

ALTER TABLE `settings` ADD `default_launcher_template` varchar(255) NOT NULL DEFAULT 'smart_launcher:magcore-theme-graphite';

-- //@UNDO

ALTER TABLE `settings` DROP `default_launcher_template`;

--