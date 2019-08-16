--

UPDATE `adm_grp_action_access` SET `is_ajax` = 1, `view_access` = 1, `edit_access` = 1,  `action_access` = 1, `hidden` = 1  WHERE `action_name` = 'check-certificate-server-health';

-- //@UNDO

--