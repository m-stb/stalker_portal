--

INSERT INTO `adm_grp_action_access`
        (`controller_name`, `action_name`,              `is_ajax`, `description`                  )
VALUES  ('settings',        'themes-edit',                      0, 'Page for editing theme'),
        ('settings',        'upload-theme-img',                 1, 'Uploading theme images'),
        ('settings',        'themes-reset-to-default',          1, 'Resetting launcher themes to default settings');

-- //@UNDO

--