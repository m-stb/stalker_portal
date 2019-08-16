--

update adm_grp_action_access set blocked = 1 where controller_name = 'new-video-club' and action_name in('add-video-ads', 'add-video-moderators');
update adm_grp_action_access set is_ajax = 1, action_access = (view_access or edit_access), view_access = 0, edit_access = 0 where controller_name = 'new-video-club' and action_name in('edit-video-ads', 'edit-video-moderators');

-- //@UNDO

update adm_grp_action_access set blocked = 0 where controller_name = 'new-video-club' and action_name in('add-video-ads', 'add-video-moderators');
update adm_grp_action_access set is_ajax = 0, view_access = action_access, edit_access = action_access, action_access = 0 where controller_name = 'new-video-club' and action_name in('edit-video-ads', 'edit-video-moderators');

--