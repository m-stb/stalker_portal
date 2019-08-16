--

UPDATE adm_grp_action_access SET `description` = REPLACE(`description`, 'Activation code', 'License key');
UPDATE adm_grp_action_access SET `description` = REPLACE(`description`, 'activation code', 'license key');

-- //@UNDO

--