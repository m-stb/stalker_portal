--

ALTER TABLE `itv` ADD COLUMN `languages` TEXT NOT NULL;

INSERT INTO `adm_grp_action_access`
        (`controller_name`,          `action_name`,                `is_ajax`, `description`)
VALUES  ('tv-channels',      'cmd-autodetect-lang',                        1, 'Autodetect language for channel links');

-- //@UNDO

ALTER TABLE `itv` DROP COLUMN `languages`;

--