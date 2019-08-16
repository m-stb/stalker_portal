--

UPDATE `adm_grp_action_access` SET `controller_name`=replace(`controller_name`, 'activation-codes', 'license-keys');
UPDATE `adm_grp_action_access` SET `action_name`=replace(`action_name`, 'activation-codes', 'license-keys');
UPDATE `adm_grp_action_access` SET `action_name`=replace(`action_name`, '-code-', '-key-');

-- //@UNDO

--