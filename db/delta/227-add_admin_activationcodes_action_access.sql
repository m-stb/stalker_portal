--

INSERT INTO `adm_grp_action_access`
        (`controller_name`,                 `action_name`, `is_ajax`, `description`                  )
VALUES  ('activation-codes',     'about-activation-codes',         0, 'Page with information on the receipt of activation codes'),
        ('activation-codes',      'activation-codes-list',         0, 'List of activation codes'),
        ('activation-codes', 'activation-codes-list-json',         1, 'List of activation codes + filters'),
        ('activation-codes',           'upload-code-file',         1, 'Import activation codes from csv-file'),
        ('activation-codes',         'toggle-code-status',         1, 'Toggle status for current activation code');

UPDATE `adm_grp_action_access` SET `description` = 'Activation codes' WHERE `controller_name` = 'activation-codes' AND `action_name` = '';
-- //@UNDO

--