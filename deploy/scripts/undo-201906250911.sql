-- Fragment begins: 250 --


ALTER TABLE `notification_feed` DROP INDEX `deleted`;

ALTER TABLE `notification_feed` DROP COLUMN `deleted`;

--
DELETE FROM changelog
	                         WHERE change_number = 250
	                         AND delta_set = 'Main';
-- Fragment ends: 250 --
-- Fragment begins: 249 --


UPDATE `karaoke` SET  `protocol` = `protocol_old`;
ALTER TABLE `karaoke` DROP `protocol_old`;

--
DELETE FROM changelog
	                         WHERE change_number = 249
	                         AND delta_set = 'Main';
-- Fragment ends: 249 --
-- Fragment begins: 248 --


truncate table `course_cache`;

ALTER TABLE `course_cache` DROP COLUMN `provider`;
ALTER TABLE `course_cache` DROP COLUMN `exchange_date`;
ALTER TABLE `course_cache` DROP COLUMN `code`;
ALTER TABLE `course_cache` DROP COLUMN `currency`;
ALTER TABLE `course_cache` DROP COLUMN `nominal`;
ALTER TABLE `course_cache` DROP COLUMN `value`;

ALTER TABLE `course_cache` ADD COLUMN `url` varchar(255) NOT NULL default '';
ALTER TABLE `course_cache` ADD COLUMN `content` text;
ALTER TABLE `course_cache` ADD COLUMN `crc` varchar(64) NOT NULL default '';

ALTER TABLE `course_cache` ADD UNIQUE INDEX (`crc`);
--

DELETE FROM changelog
	                         WHERE change_number = 248
	                         AND delta_set = 'Main';
-- Fragment ends: 248 --
-- Fragment begins: 247 --


ALTER TABLE `smac_certificates` DROP `repaired_date`;

--
DELETE FROM changelog
	                         WHERE change_number = 247
	                         AND delta_set = 'Main';
-- Fragment ends: 247 --
-- Fragment begins: 246 --


ALTER TABLE `video` MODIFY `rating_kinopoisk` VARCHAR(64);
ALTER TABLE `video` MODIFY `rating_count_kinopoisk` VARCHAR(64);
ALTER TABLE `video` MODIFY `rating_imdb` VARCHAR(64);
ALTER TABLE `video` MODIFY `rating_count_imdb` VARCHAR(64);

--
DELETE FROM changelog
	                         WHERE change_number = 246
	                         AND delta_set = 'Main';
-- Fragment ends: 246 --
-- Fragment begins: 245 --


ALTER TABLE `ch_links` DROP `flexcdn_auth_support`;

--
DELETE FROM changelog
	                         WHERE change_number = 245
	                         AND delta_set = 'Main';
-- Fragment ends: 245 --
-- Fragment begins: 244 --


--
DELETE FROM changelog
	                         WHERE change_number = 244
	                         AND delta_set = 'Main';
-- Fragment ends: 244 --
-- Fragment begins: 243 --


ALTER TABLE `media_claims` DROP INDEX `media_type_id`;
ALTER TABLE `video_series_files` DROP INDEX `video_id_idx`;

--
DELETE FROM changelog
	                         WHERE change_number = 243
	                         AND delta_set = 'Main';
-- Fragment ends: 243 --
-- Fragment begins: 242 --


--
DELETE FROM changelog
	                         WHERE change_number = 242
	                         AND delta_set = 'Main';
-- Fragment ends: 242 --
-- Fragment begins: 241 --


--
DELETE FROM changelog
	                         WHERE change_number = 241
	                         AND delta_set = 'Main';
-- Fragment ends: 241 --
-- Fragment begins: 240 --


--
DELETE FROM changelog
	                         WHERE change_number = 240
	                         AND delta_set = 'Main';
-- Fragment ends: 240 --
-- Fragment begins: 239 --


--
DELETE FROM changelog
	                         WHERE change_number = 239
	                         AND delta_set = 'Main';
-- Fragment ends: 239 --
-- Fragment begins: 238 --


--
DELETE FROM changelog
	                         WHERE change_number = 238
	                         AND delta_set = 'Main';
-- Fragment ends: 238 --
-- Fragment begins: 237 --


ALTER TABLE users DROP COLUMN clock_format;

--
DELETE FROM changelog
	                         WHERE change_number = 237
	                         AND delta_set = 'Main';
-- Fragment ends: 237 --
-- Fragment begins: 236 --


--
DELETE FROM changelog
	                         WHERE change_number = 236
	                         AND delta_set = 'Main';
-- Fragment ends: 236 --
-- Fragment begins: 235 --


--
DELETE FROM changelog
	                         WHERE change_number = 235
	                         AND delta_set = 'Main';
-- Fragment ends: 235 --
-- Fragment begins: 234 --


--
DELETE FROM changelog
	                         WHERE change_number = 234
	                         AND delta_set = 'Main';
-- Fragment ends: 234 --
-- Fragment begins: 233 --


--
DELETE FROM changelog
	                         WHERE change_number = 233
	                         AND delta_set = 'Main';
-- Fragment ends: 233 --
-- Fragment begins: 232 --



--
DELETE FROM changelog
	                         WHERE change_number = 232
	                         AND delta_set = 'Main';
-- Fragment ends: 232 --
-- Fragment begins: 231 --


ALTER TABLE `settings` DROP `default_launcher_template`;

--
DELETE FROM changelog
	                         WHERE change_number = 231
	                         AND delta_set = 'Main';
-- Fragment ends: 231 --
-- Fragment begins: 230 --


DROP TABLE `themes`;

--
DELETE FROM changelog
	                         WHERE change_number = 230
	                         AND delta_set = 'Main';
-- Fragment ends: 230 --
-- Fragment begins: 229 --


ALTER TABLE `smac_codes` MODIFY `status` ENUM("Not Activated", "Activated", "Blocked") DEFAULT "Not Activated";

--
DELETE FROM changelog
	                         WHERE change_number = 229
	                         AND delta_set = 'Main';
-- Fragment ends: 229 --
-- Fragment begins: 228 --


update adm_grp_action_access set blocked = 0 where controller_name = 'new-video-club' and action_name in('add-video-ads', 'add-video-moderators');
update adm_grp_action_access set is_ajax = 0, view_access = action_access, edit_access = action_access, action_access = 0 where controller_name = 'new-video-club' and action_name in('edit-video-ads', 'edit-video-moderators');

--
DELETE FROM changelog
	                         WHERE change_number = 228
	                         AND delta_set = 'Main';
-- Fragment ends: 228 --
-- Fragment begins: 227 --


--
DELETE FROM changelog
	                         WHERE change_number = 227
	                         AND delta_set = 'Main';
-- Fragment ends: 227 --
-- Fragment begins: 226 --


ALTER TABLE `users` DROP `activation_code_auto_issue`;

--
DELETE FROM changelog
	                         WHERE change_number = 226
	                         AND delta_set = 'Main';
-- Fragment ends: 226 --
-- Fragment begins: 225 --


DROP TABLE `smac_codes`;

--
DELETE FROM changelog
	                         WHERE change_number = 225
	                         AND delta_set = 'Main';
-- Fragment ends: 225 --
-- Fragment begins: 224 --


--
DELETE FROM changelog
	                         WHERE change_number = 224
	                         AND delta_set = 'Main';
-- Fragment ends: 224 --
-- Fragment begins: 223 --


--
DELETE FROM changelog
	                         WHERE change_number = 223
	                         AND delta_set = 'Main';
-- Fragment ends: 223 --
-- Fragment begins: 222 --


--
DELETE FROM changelog
	                         WHERE change_number = 222
	                         AND delta_set = 'Main';
-- Fragment ends: 222 --
-- Fragment begins: 221 --


ALTER TABLE `storages` DROP COLUMN `dvr_type`;

--
DELETE FROM changelog
	                         WHERE change_number = 221
	                         AND delta_set = 'Main';
-- Fragment ends: 221 --
-- Fragment begins: 220 --


ALTER TABLE `ch_links` DROP `wowza_securetoken`;
ALTER TABLE `video_series_files` MODIFY COLUMN `tmp_link_type` ENUM('flussonic','nginx','wowza', 'edgecast_auth', 'nimble', 'akamai_auth') NULL DEFAULT NULL;

--
DELETE FROM changelog
	                         WHERE change_number = 220
	                         AND delta_set = 'Main';
-- Fragment ends: 220 --
-- Fragment begins: 219 --


--
DELETE FROM changelog
	                         WHERE change_number = 219
	                         AND delta_set = 'Main';
-- Fragment ends: 219 --
-- Fragment begins: 218 --


--
DELETE FROM changelog
	                         WHERE change_number = 218
	                         AND delta_set = 'Main';
-- Fragment ends: 218 --
-- Fragment begins: 217 --


--
DELETE FROM changelog
	                         WHERE change_number = 217
	                         AND delta_set = 'Main';
-- Fragment ends: 217 --
-- Fragment begins: 216 --


ALTER TABLE `itv` CHANGE COLUMN `tv_archive_type` `tv_archive_type` ENUM('', 'wowza_dvr', 'flussonic_dvr', 'nimble_dvr') DEFAULT '';

--
DELETE FROM changelog
	                         WHERE change_number = 216
	                         AND delta_set = 'Main';
-- Fragment ends: 216 --
-- Fragment begins: 215 --


ALTER TABLE `smac_certificates` DROP COLUMN `uid`;

--
DELETE FROM changelog
	                         WHERE change_number = 215
	                         AND delta_set = 'Main';
-- Fragment ends: 215 --
-- Fragment begins: 214 --


DROP TABLE `smac_certificates`;

--
DELETE FROM changelog
	                         WHERE change_number = 214
	                         AND delta_set = 'Main';
-- Fragment ends: 214 --
-- Fragment begins: 213 --


ALTER TABLE `itv` DROP COLUMN `tv_archive_type`;

--
DELETE FROM changelog
	                         WHERE change_number = 213
	                         AND delta_set = 'Main';
-- Fragment ends: 213 --
-- Fragment begins: 212 --


--
DELETE FROM changelog
	                         WHERE change_number = 212
	                         AND delta_set = 'Main';
-- Fragment ends: 212 --
-- Fragment begins: 211 --


--
DELETE FROM changelog
	                         WHERE change_number = 211
	                         AND delta_set = 'Main';
-- Fragment ends: 211 --
-- Fragment begins: 210 --


ALTER TABLE `itv` DROP COLUMN `languages`;

--
DELETE FROM changelog
	                         WHERE change_number = 210
	                         AND delta_set = 'Main';
-- Fragment ends: 210 --
-- Fragment begins: 209 --


--
DELETE FROM changelog
	                         WHERE change_number = 209
	                         AND delta_set = 'Main';
-- Fragment ends: 209 --
-- Fragment begins: 208 --


DROP TABLE `tariffs_notifications`;
ALTER TABLE `messages_templates` DROP COLUMN `url`;
ALTER TABLE `tariff_plan` DROP COLUMN `days_to_expires`;
ALTER TABLE `users` DROP COLUMN `tariff_expired_date`;
ALTER TABLE `users` DROP COLUMN `tariff_id_instead_expired`;

--
DELETE FROM changelog
	                         WHERE change_number = 208
	                         AND delta_set = 'Main';
-- Fragment ends: 208 --
-- Fragment begins: 207 --


ALTER TABLE `administrators` DROP COLUMN `theme`;

--
DELETE FROM changelog
	                         WHERE change_number = 207
	                         AND delta_set = 'Main';
-- Fragment ends: 207 --
-- Fragment begins: 206 --


ALTER TABLE `itv` DROP INDEX `number_idx` ;

--
DELETE FROM changelog
	                         WHERE change_number = 206
	                         AND delta_set = 'Main';
-- Fragment ends: 206 --
-- Fragment begins: 205 --


--
DELETE FROM changelog
	                         WHERE change_number = 205
	                         AND delta_set = 'Main';
-- Fragment ends: 205 --
-- Fragment begins: 204 --


ALTER TABLE `service_in_package` DROP COLUMN `options`;

--
DELETE FROM changelog
	                         WHERE change_number = 204
	                         AND delta_set = 'Main';
-- Fragment ends: 204 --
-- Fragment begins: 203 --


ALTER TABLE `stream_zones` DROP COLUMN `type`;
DROP TABLE `ips_in_zone`;
ALTER TABLE `countries_in_zone` ADD KEY `country_id` (`country_id`);
ALTER TABLE `countries_in_zone` DROP KEY `zone_id`;

--
DELETE FROM changelog
	                         WHERE change_number = 203
	                         AND delta_set = 'Main';
-- Fragment ends: 203 --
-- Fragment begins: 202 --


--
DELETE FROM changelog
	                         WHERE change_number = 202
	                         AND delta_set = 'Main';
-- Fragment ends: 202 --
-- Fragment begins: 201 --


ALTER TABLE `ext_adv_campaigns_position` DROP COLUMN `skip_after`;

--
DELETE FROM changelog
	                         WHERE change_number = 201
	                         AND delta_set = 'Main';
-- Fragment ends: 201 --
-- Fragment begins: 200 --


ALTER TABLE `user_played_movies` DROP COLUMN `not_ended`;

--
DELETE FROM changelog
	                         WHERE change_number = 200
	                         AND delta_set = 'Main';
-- Fragment ends: 200 --
-- Fragment begins: 199 --


--
DELETE FROM changelog
	                         WHERE change_number = 199
	                         AND delta_set = 'Main';
-- Fragment ends: 199 --
-- Fragment begins: 198 --


--
DELETE FROM changelog
	                         WHERE change_number = 198
	                         AND delta_set = 'Main';
-- Fragment ends: 198 --
-- Fragment begins: 197 --


DROP TABLE `watched_settings`;

--
DELETE FROM changelog
	                         WHERE change_number = 197
	                         AND delta_set = 'Main';
-- Fragment ends: 197 --
-- Fragment begins: 196 --


DELETE FROM `ext_adv_positions` WHERE `position_code` = 104;
DELETE FROM `ext_adv_positions` WHERE `position_code` = 204;
DELETE FROM `ext_adv_positions` WHERE `position_code` = 205;

--
DELETE FROM changelog
	                         WHERE change_number = 196
	                         AND delta_set = 'Main';
-- Fragment ends: 196 --
-- Fragment begins: 195 --


ALTER TABLE `schedule_events` DROP COLUMN `channel`;

--
DELETE FROM changelog
	                         WHERE change_number = 195
	                         AND delta_set = 'Main';
-- Fragment ends: 195 --
-- Fragment begins: 194 --


ALTER TABLE `administrators` DROP COLUMN `language`;

--
DELETE FROM changelog
	                         WHERE change_number = 194
	                         AND delta_set = 'Main';
-- Fragment ends: 194 --
-- Fragment begins: 193 --


--
DELETE FROM changelog
	                         WHERE change_number = 193
	                         AND delta_set = 'Main';
-- Fragment ends: 193 --
-- Fragment begins: 192 --


ALTER TABLE `ext_adv_campaigns_position` DROP COLUMN `blocks`;

--
DELETE FROM changelog
	                         WHERE change_number = 192
	                         AND delta_set = 'Main';
-- Fragment ends: 192 --
-- Fragment begins: 191 --


DROP TABLE `support_info`;

--
DELETE FROM changelog
	                         WHERE change_number = 191
	                         AND delta_set = 'Main';
-- Fragment ends: 191 --
-- Fragment begins: 190 --


ALTER TABLE `last_id` DROP INDEX uid;

--
DELETE FROM changelog
	                         WHERE change_number = 190
	                         AND delta_set = 'Main';
-- Fragment ends: 190 --
-- Fragment begins: 189 --


RENAME TABLE `user_played_movies` TO `stb_played_video`;

ALTER TABLE `stb_played_video` DROP COLUMN `file_id`;
ALTER TABLE `stb_played_video` DROP COLUMN `episode_id`;
ALTER TABLE `stb_played_video` DROP COLUMN `season_id`;
ALTER TABLE `stb_played_video` DROP COLUMN `watched`;
ALTER TABLE `stb_played_video` DROP COLUMN `watched_time`;

--
DELETE FROM changelog
	                         WHERE change_number = 189
	                         AND delta_set = 'Main';
-- Fragment ends: 189 --
-- Fragment begins: 188 --


DROP TABLE `notification_feed`;

--
DELETE FROM changelog
	                         WHERE change_number = 188
	                         AND delta_set = 'Main';
-- Fragment ends: 188 --
-- Fragment begins: 187 --


ALTER TABLE `users` DROP COLUMN `subtitle_size`;
ALTER TABLE `users` DROP COLUMN `subtitle_color`;

--
DELETE FROM changelog
	                         WHERE change_number = 187
	                         AND delta_set = 'Main';
-- Fragment ends: 187 --
-- Fragment begins: 186 --


DROP TABLE `diagnostic_info`;

--
DELETE FROM changelog
	                         WHERE change_number = 186
	                         AND delta_set = 'Main';
-- Fragment ends: 186 --
-- Fragment begins: 185 --


ALTER TABLE `ext_adv_campaigns` RENAME TO `ext_adv_companies`;

CREATE TABLE `ext_adv_register` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL DEFAULT '',
  `phone` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `region` varchar(64) NOT NULL DEFAULT '',
  `added`  timestamp NULL DEFAULT NULL,
  `updated`  timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET = UTF8;

ALTER TABLE `ext_adv_sources` ADD COLUMN `owner`  INT NOT NULL DEFAULT 0;
ALTER TABLE `ext_adv_companies` ADD COLUMN `old_skin_pos` tinyint(3) UNSIGNED ZEROFILL NOT NULL DEFAULT 0;
ALTER TABLE `ext_adv_companies` ADD COLUMN `smart_skin_pos` tinyint(3) UNSIGNED ZEROFILL NOT NULL DEFAULT 0;
ALTER TABLE `ext_adv_companies` CHANGE COLUMN `platform` `platform` ENUM('settopbox', 'ios', 'android', 'smarttv');

DELETE FROM `apps_tos` WHERE `alias` = 'external_ad';

DROP TABLE `ext_adv_campaigns_position`;
DROP TABLE `ext_adv_positions`;

INSERT INTO `adm_grp_action_access`
(`controller_name`,      `action_name`,       `is_ajax`, `description`)
VALUES
  ('external-advertising', 'request-new-source',        1, 'Make request for getting new source for ad-company');

--
DELETE FROM changelog
	                         WHERE change_number = 185
	                         AND delta_set = 'Main';
-- Fragment ends: 185 --
-- Fragment begins: 184 --


ALTER TABLE `ch_links` DROP COLUMN `akamai_auth_support`;
ALTER TABLE `video_series_files` CHANGE COLUMN `tmp_link_type` `tmp_link_type` ENUM('flussonic','nginx','wowza', 'edgecast_auth', 'nimble') NULL DEFAULT NULL ;

--
DELETE FROM changelog
	                         WHERE change_number = 184
	                         AND delta_set = 'Main';
-- Fragment ends: 184 --
-- Fragment begins: 183 --


ALTER TABLE `ch_links` DROP COLUMN `nimble_auth_support`;
ALTER TABLE `video_series_files` CHANGE COLUMN `tmp_link_type` `tmp_link_type` ENUM('flussonic','nginx','wowza', 'edgecast_auth') NULL DEFAULT NULL ;
ALTER TABLE `storages` DROP COLUMN `nimble_dvr`;
ALTER TABLE `itv` DROP COLUMN `nimble_dvr`;

--
DELETE FROM changelog
	                         WHERE change_number = 183
	                         AND delta_set = 'Main';
-- Fragment ends: 183 --
-- Fragment begins: 182 --


ALTER TABLE `ch_links` DROP COLUMN `edgecast_auth_support`;
ALTER TABLE `video_series_files` CHANGE COLUMN `tmp_link_type` `tmp_link_type` ENUM('flussonic','nginx','wowza') NULL DEFAULT NULL ;

--
DELETE FROM changelog
	                         WHERE change_number = 182
	                         AND delta_set = 'Main';
-- Fragment ends: 182 --
-- Fragment begins: 181 --


DROP TABLE IF EXISTS `fav_radio`;

--
DELETE FROM changelog
	                         WHERE change_number = 181
	                         AND delta_set = 'Main';
-- Fragment ends: 181 --
-- Fragment begins: 180 --


ALTER TABLE `audio_compositions` DROP COLUMN `duration`;

--
DELETE FROM changelog
	                         WHERE change_number = 180
	                         AND delta_set = 'Main';
-- Fragment ends: 180 --
-- Fragment begins: 179 --


ALTER TABLE `administrators` DROP COLUMN `opinion_form_flag`;

--
DELETE FROM changelog
	                         WHERE change_number = 179
	                         AND delta_set = 'Main';
-- Fragment ends: 179 --
-- Fragment begins: 178 --


DROP TABLE `ext_adv_register`;
DROP TABLE `ext_adv_sources`;
DROP TABLE `ext_adv_companies`;

--
DELETE FROM changelog
	                         WHERE change_number = 178
	                         AND delta_set = 'Main';
-- Fragment ends: 178 --
-- Fragment begins: 177 --


ALTER TABLE `played_video` DROP INDEX `uid_index`;
ALTER TABLE `played_itv` DROP INDEX `uid_index`;
ALTER TABLE `played_tv_archive` DROP INDEX `uid_index`;
ALTER TABLE `media_claims_log` DROP INDEX `uid_index`;
ALTER TABLE `played_timeshift` DROP INDEX `uid_index`;
ALTER TABLE `readed_anec` DROP INDEX `mac_index`;

--
DELETE FROM changelog
	                         WHERE change_number = 177
	                         AND delta_set = 'Main';
-- Fragment ends: 177 --
-- Fragment begins: 176 --


ALTER TABLE `video_series_files` DROP COLUMN `tmp_link_type`;

ALTER TABLE `storages` ADD COLUMN `wowza_server` TINYINT NOT NULL DEFAULT 0;
UPDATE `storages` SET wowza_server=1 WHERE stream_server_type='wowza';
ALTER TABLE `storages` DROP COLUMN `stream_server_type`;
ALTER TABLE `storages` CHANGE `stream_server_app` `wowza_app` varchar(128) NOT NULL DEFAULT '';
ALTER TABLE `storages` CHANGE `stream_server_port` `wowza_port` varchar(8) NOT NULL DEFAULT '';

--
DELETE FROM changelog
	                         WHERE change_number = 176
	                         AND delta_set = 'Main';
-- Fragment ends: 176 --
-- Fragment begins: 175 --


--
DELETE FROM changelog
	                         WHERE change_number = 175
	                         AND delta_set = 'Main';
-- Fragment ends: 175 --
-- Fragment begins: 174 --


ALTER TABLE `image_update_settings` DROP COLUMN `stb_group_id`;

--
DELETE FROM changelog
	                         WHERE change_number = 174
	                         AND delta_set = 'Main';
-- Fragment ends: 174 --
-- Fragment begins: 173 --


ALTER TABLE `users` DROP COLUMN `units`;

--
DELETE FROM changelog
	                         WHERE change_number = 173
	                         AND delta_set = 'Main';
-- Fragment ends: 173 --
-- Fragment begins: 172 --


--
DELETE FROM changelog
	                         WHERE change_number = 172
	                         AND delta_set = 'Main';
-- Fragment ends: 172 --
-- Fragment begins: 171 --


ALTER TABLE `access_tokens` DROP COLUMN `last_refresh`;

--
DELETE FROM changelog
	                         WHERE change_number = 171
	                         AND delta_set = 'Main';
-- Fragment ends: 171 --
-- Fragment begins: 170 --


--
DELETE FROM changelog
	                         WHERE change_number = 170
	                         AND delta_set = 'Main';
-- Fragment ends: 170 --
-- Fragment begins: 169 --


--
DELETE FROM changelog
	                         WHERE change_number = 169
	                         AND delta_set = 'Main';
-- Fragment ends: 169 --
-- Fragment begins: 168 --


ALTER TABLE `launcher_apps` DROP COLUMN `available_version`;

--
DELETE FROM changelog
	                         WHERE change_number = 168
	                         AND delta_set = 'Main';
-- Fragment ends: 168 --
-- Fragment begins: 167 --


--
DELETE FROM changelog
	                         WHERE change_number = 167
	                         AND delta_set = 'Main';
-- Fragment ends: 167 --
-- Fragment begins: 166 --


DELETE FROM `apps_tos` WHERE `alias` = 'launcher_apps';
ALTER TABLE `apps_tos` DROP COLUMN `alias`;

--
DELETE FROM changelog
	                         WHERE change_number = 166
	                         AND delta_set = 'Main';
-- Fragment ends: 166 --
-- Fragment begins: 165 --


ALTER TABLE `launcher_apps` DROP COLUMN `manual_install`;

--
DELETE FROM changelog
	                         WHERE change_number = 165
	                         AND delta_set = 'Main';
-- Fragment ends: 165 --
-- Fragment begins: 164 --


--
DELETE FROM changelog
	                         WHERE change_number = 164
	                         AND delta_set = 'Main';
-- Fragment ends: 164 --
-- Fragment begins: 163 --


ALTER TABLE `launcher_apps` DROP COLUMN `options`;

--
DELETE FROM changelog
	                         WHERE change_number = 163
	                         AND delta_set = 'Main';
-- Fragment ends: 163 --
-- Fragment begins: 162 --


DROP TABLE IF EXISTS `agaa_tmp`;

--
DELETE FROM changelog
	                         WHERE change_number = 162
	                         AND delta_set = 'Main';
-- Fragment ends: 162 --
-- Fragment begins: 161 --


DROP TABLE `launcher_apps`;

--
DELETE FROM changelog
	                         WHERE change_number = 161
	                         AND delta_set = 'Main';
-- Fragment ends: 161 --
-- Fragment begins: 160 --


ALTER TABLE `languages` DROP COLUMN `iso_639_3_code`;

--
DELETE FROM changelog
	                         WHERE change_number = 160
	                         AND delta_set = 'Main';
-- Fragment ends: 160 --
-- Fragment begins: 159 --


DROP TABLE `playback_sessions`;

--
DELETE FROM changelog
	                         WHERE change_number = 159
	                         AND delta_set = 'Main';
-- Fragment ends: 159 --
-- Fragment begins: 158 --


ALTER TABLE `itv` DROP COLUMN `added`;

DROP TABLE `deleted_channels`;

--
DELETE FROM changelog
	                         WHERE change_number = 158
	                         AND delta_set = 'Main';
-- Fragment ends: 158 --
-- Fragment begins: 157 --


ALTER TABLE `adm_grp_action_access` DROP COLUMN `blocked`;

--
DELETE FROM changelog
	                         WHERE change_number = 157
	                         AND delta_set = 'Main';
-- Fragment ends: 157 --
-- Fragment begins: 156 --


ALTER TABLE `moderator_tasks` DROP INDEX `media_id_idx`;

--
DELETE FROM changelog
	                         WHERE change_number = 156
	                         AND delta_set = 'Main';
-- Fragment ends: 156 --
-- Fragment begins: 155 --


ALTER TABLE `apps` DROP COLUMN `config`;

--
DELETE FROM changelog
	                         WHERE change_number = 155
	                         AND delta_set = 'Main';
-- Fragment ends: 155 --
-- Fragment begins: 154 --


ALTER TABLE `video` DROP COLUMN `provider`;

--
DELETE FROM changelog
	                         WHERE change_number = 154
	                         AND delta_set = 'Main';
-- Fragment ends: 154 --
-- Fragment begins: 153 --


DROP TABLE `quality`;

--
DELETE FROM changelog
	                         WHERE change_number = 153
	                         AND delta_set = 'Main';
-- Fragment ends: 153 --
-- Fragment begins: 152 --


DELETE FROM `adm_grp_action_access`  WHERE `controller_name` = "new-video-club";
DROP TABLE IF EXISTS `agaa_tmp`;
DROP TABLE IF EXISTS `agaa_tmp_2`;

--
DELETE FROM changelog
	                         WHERE change_number = 152
	                         AND delta_set = 'Main';
-- Fragment ends: 152 --
-- Fragment begins: 151 --


ALTER TABLE `vclub_not_ended` DROP COLUMN `season`;
ALTER TABLE `vclub_not_ended` DROP COLUMN `episode_id`;
ALTER TABLE `vclub_not_ended` DROP COLUMN `season_id`;
ALTER TABLE `vclub_not_ended` DROP COLUMN `file_id`;

--
DELETE FROM changelog
	                         WHERE change_number = 151
	                         AND delta_set = 'Main';
-- Fragment ends: 151 --
-- Fragment begins: 150 --


DROP TABLE `languages`;

--
DELETE FROM changelog
	                         WHERE change_number = 150
	                         AND delta_set = 'Main';
-- Fragment ends: 150 --
-- Fragment begins: 149 --


ALTER TABLE `tv_genre` DROP COLUMN `censored`;
ALTER TABLE `media_category` DROP COLUMN `censored`;

--
DELETE FROM changelog
	                         WHERE change_number = 149
	                         AND delta_set = 'Main';
-- Fragment ends: 149 --
-- Fragment begins: 148 --


ALTER TABLE `ch_links` DROP COLUMN `xtream_codes_support`;

--
DELETE FROM changelog
	                         WHERE change_number = 148
	                         AND delta_set = 'Main';
-- Fragment ends: 148 --
-- Fragment begins: 147 --


DROP TABLE `api_storage`;

--
DELETE FROM changelog
	                         WHERE change_number = 147
	                         AND delta_set = 'Main';
-- Fragment ends: 147 --
-- Fragment begins: 146 --


ALTER TABLE `access_tokens` MODIFY `time_delta` VARCHAR(128) NOT NULL DEFAULT '' ;

--
DELETE FROM changelog
	                         WHERE change_number = 146
	                         AND delta_set = 'Main';
-- Fragment ends: 146 --
-- Fragment begins: 145 --


ALTER TABLE `video_series_files` CHANGE COLUMN `quality` `quality` SMALLINT NOT NULL;

--
DELETE FROM changelog
	                         WHERE change_number = 145
	                         AND delta_set = 'Main';
-- Fragment ends: 145 --
-- Fragment begins: 144 --


DROP TABLE `video_season`;
DROP TABLE `video_season_series`;
DROP TABLE `video_series_files`;
ALTER TABLE `video` DROP COLUMN `is_series`;
ALTER TABLE `video` DROP COLUMN `year_end`;
ALTER TABLE `screenshots` DROP COLUMN `video_episodes`;

--
DELETE FROM changelog
	                         WHERE change_number = 144
	                         AND delta_set = 'Main';
-- Fragment ends: 144 --
-- Fragment begins: 143 --


--
DELETE FROM changelog
	                         WHERE change_number = 143
	                         AND delta_set = 'Main';
-- Fragment ends: 143 --
-- Fragment begins: 142 --


DROP TABLE `updates`;

--
DELETE FROM changelog
	                         WHERE change_number = 142
	                         AND delta_set = 'Main';
-- Fragment ends: 142 --
-- Fragment begins: 141 --


ALTER TABLE `users` DROP COLUMN `hw_version_2`;
ALTER TABLE `users` DROP COLUMN `blocked`;
--
DELETE FROM changelog
	                         WHERE change_number = 141
	                         AND delta_set = 'Main';
-- Fragment ends: 141 --
-- Fragment begins: 140 --


ALTER TABLE `users` DROP COLUMN `client_type`;

--
DELETE FROM changelog
	                         WHERE change_number = 140
	                         AND delta_set = 'Main';
-- Fragment ends: 140 --
-- Fragment begins: 139 --


ALTER TABLE `ch_links` CHANGE COLUMN `monitoring_url` `monitoring_url` VARCHAR(128) NOT NULL DEFAULT '' ;

--
DELETE FROM changelog
	                         WHERE change_number = 139
	                         AND delta_set = 'Main';
-- Fragment ends: 139 --
-- Fragment begins: 138 --


--
DELETE FROM changelog
	                         WHERE change_number = 138
	                         AND delta_set = 'Main';
-- Fragment ends: 138 --
-- Fragment begins: 137 --


ALTER TABLE `apps` DROP `localization`;

--
DELETE FROM changelog
	                         WHERE change_number = 137
	                         AND delta_set = 'Main';
-- Fragment ends: 137 --
-- Fragment begins: 136 --


--
DELETE FROM changelog
	                         WHERE change_number = 136
	                         AND delta_set = 'Main';
-- Fragment ends: 136 --
-- Fragment begins: 135 --


--
DELETE FROM changelog
	                         WHERE change_number = 135
	                         AND delta_set = 'Main';
-- Fragment ends: 135 --
-- Fragment begins: 134 --


--
DELETE FROM changelog
	                         WHERE change_number = 134
	                         AND delta_set = 'Main';
-- Fragment ends: 134 --
-- Fragment begins: 133 --


ALTER TABLE `user_log` DROP INDEX `mac_index` ;

--
DELETE FROM changelog
	                         WHERE change_number = 133
	                         AND delta_set = 'Main';
-- Fragment ends: 133 --
-- Fragment begins: 132 --


UPDATE `audio_genres` SET `name`='Country' WHERE `name`='Country Music';

--
DELETE FROM changelog
	                         WHERE change_number = 132
	                         AND delta_set = 'Main';
-- Fragment ends: 132 --
-- Fragment begins: 131 --


--
DELETE FROM changelog
	                         WHERE change_number = 131
	                         AND delta_set = 'Main';
-- Fragment ends: 131 --
-- Fragment begins: 130 --


--
DELETE FROM changelog
	                         WHERE change_number = 130
	                         AND delta_set = 'Main';
-- Fragment ends: 130 --
-- Fragment begins: 129 --


--
DELETE FROM changelog
	                         WHERE change_number = 129
	                         AND delta_set = 'Main';
-- Fragment ends: 129 --
-- Fragment begins: 128 --


--
DELETE FROM changelog
	                         WHERE change_number = 128
	                         AND delta_set = 'Main';
-- Fragment ends: 128 --
-- Fragment begins: 127 --


DELETE FROM `apps` WHERE `name`='vk.video';

--
DELETE FROM changelog
	                         WHERE change_number = 127
	                         AND delta_set = 'Main';
-- Fragment ends: 127 --
-- Fragment begins: 126 --


ALTER TABLE `users` DROP INDEX `device_id2`;

--
DELETE FROM changelog
	                         WHERE change_number = 126
	                         AND delta_set = 'Main';
-- Fragment ends: 126 --
-- Fragment begins: 125 --


DELETE FROM `filters` WHERE `method` = 'getUsersByPlayingType';

--
DELETE FROM changelog
	                         WHERE change_number = 125
	                         AND delta_set = 'Main';
-- Fragment ends: 125 --
-- Fragment begins: 124 --


ALTER TABLE `apps` DROP COLUMN `icons`;

TRUNCATE `apps`;

--
DELETE FROM changelog
	                         WHERE change_number = 124
	                         AND delta_set = 'Main';
-- Fragment ends: 124 --
-- Fragment begins: 123 --


--
DELETE FROM changelog
	                         WHERE change_number = 123
	                         AND delta_set = 'Main';
-- Fragment ends: 123 --
-- Fragment begins: 122 --


ALTER TABLE `users_activity` CHANGE COLUMN `users_online` `users_online` INT(11) NOT NULL DEFAULT '0' ;

--
DELETE FROM changelog
	                         WHERE change_number = 122
	                         AND delta_set = 'Main';
-- Fragment ends: 122 --
-- Fragment begins: 121 --


ALTER TABLE `apps` DROP COLUMN `description`;
ALTER TABLE `apps` DROP COLUMN `icon_color`;

--
DELETE FROM changelog
	                         WHERE change_number = 121
	                         AND delta_set = 'Main';
-- Fragment ends: 121 --
-- Fragment begins: 120 --


UPDATE `filters` SET `title` = 'User country', `type` = 'STRING', `values_set` = '' WHERE `method` = 'getUsersByCountry';
UPDATE `filters` SET `title` = 'Users status' WHERE `method`='getUsersByStatus';
UPDATE `filters` SET `title` = 'Users state' WHERE `method`='getUsersByState';
UPDATE `filters` SET `title` = 'User\'s STB model' WHERE `method`='getUsersBySTBModel';
UPDATE `filters` SET `title` = 'STB firmware version' WHERE `method`='getUsersBySTBFirmwareVersion';
UPDATE `filters` SET `title` = 'Users date creation' WHERE `method`='getUsersByCreateDate';
UPDATE `filters` SET `title` = 'Users interface language' WHERE `method`='getUsersByInterfaceLanguage';
UPDATE `filters` SET `title` = 'Users group' WHERE `method`='getUsersByGroup';
UPDATE `filters` SET `title` = 'Connected tariff plan' WHERE `method`='getUsersByConnectedTariffPlan';
UPDATE `filters` SET `title` = 'User by accessible packages of service' WHERE `method`='getUsersByAaccessibleServicePackages';
UPDATE `filters` SET `title` = 'Last user activity' WHERE `method`='getUsersByLastActivity';
UPDATE `filters` SET `title` = 'Watch the TV-channel' WHERE `method`='getUsersByWatchingTV';
UPDATE `filters` SET `title` = 'Watch the movie' WHERE `method`='getUsersByWatchingMovie';
UPDATE `filters` SET `title` = 'Using streaming server' WHERE `method`='getUsersByUsingStreamServer';
UPDATE `filters` SET `title` = 'Last start STB' WHERE `method`='getUsersByLastStart';

ALTER TABLE `filters` DROP COLUMN `default`;

--
DELETE FROM changelog
	                         WHERE change_number = 120
	                         AND delta_set = 'Main';
-- Fragment ends: 120 --
-- Fragment begins: 119 --


DROP TABLE `schedule_events`;

--
DELETE FROM changelog
	                         WHERE change_number = 119
	                         AND delta_set = 'Main';
-- Fragment ends: 119 --
-- Fragment begins: 118 --



--
DELETE FROM changelog
	                         WHERE change_number = 118
	                         AND delta_set = 'Main';
-- Fragment ends: 118 --
-- Fragment begins: 117 --


--
DELETE FROM changelog
	                         WHERE change_number = 117
	                         AND delta_set = 'Main';
-- Fragment ends: 117 --
-- Fragment begins: 116 --


ALTER TABLE `apps` DROP COLUMN `autoupdate`;

--
DELETE FROM changelog
	                         WHERE change_number = 116
	                         AND delta_set = 'Main';
-- Fragment ends: 116 --
-- Fragment begins: 115 --


ALTER TABLE `apps` DROP COLUMN `name`;
DROP TABLE `github_api_cache`;

--
DELETE FROM changelog
	                         WHERE change_number = 115
	                         AND delta_set = 'Main';
-- Fragment ends: 115 --
-- Fragment begins: 114 --


ALTER TABLE `apps` DROP COLUMN `alias`;

--
DELETE FROM changelog
	                         WHERE change_number = 114
	                         AND delta_set = 'Main';
-- Fragment ends: 114 --
-- Fragment begins: 113 --


--
DELETE FROM changelog
	                         WHERE change_number = 113
	                         AND delta_set = 'Main';
-- Fragment ends: 113 --
-- Fragment begins: 112 --


DROP TABLE `apps`;
DROP TABLE `apps_tos`;

--
DELETE FROM changelog
	                         WHERE change_number = 112
	                         AND delta_set = 'Main';
-- Fragment ends: 112 --
-- Fragment begins: 111 --

DELETE FROM changelog
	                         WHERE change_number = 111
	                         AND delta_set = 'Main';
-- Fragment ends: 111 --
-- Fragment begins: 110 --


ALTER TABLE `events` DROP COLUMN `post_function`;

--
DELETE FROM changelog
	                         WHERE change_number = 110
	                         AND delta_set = 'Main';
-- Fragment ends: 110 --
-- Fragment begins: 109 --


DROP TABLE `filters`;
DROP TABLE `filter_set`;
DROP TABLE `messages_templates`;
ALTER TABLE `events` DROP COLUMN `header`;

--
DELETE FROM changelog
	                         WHERE change_number = 109
	                         AND delta_set = 'Main';
-- Fragment ends: 109 --
-- Fragment begins: 108 --


ALTER TABLE `media_category` DROP COLUMN `modified`;
ALTER TABLE `cat_genre` DROP COLUMN `modified`;

--
DELETE FROM changelog
	                         WHERE change_number = 108
	                         AND delta_set = 'Main';
-- Fragment ends: 108 --
-- Fragment begins: 107 --


DROP TABLE `download_links`;

--
DELETE FROM changelog
	                         WHERE change_number = 107
	                         AND delta_set = 'Main';
-- Fragment ends: 107 --
-- Fragment begins: 106 --


ALTER TABLE `reseller` DROP COLUMN `max_users`;

--
DELETE FROM changelog
	                         WHERE change_number = 106
	                         AND delta_set = 'Main';
-- Fragment ends: 106 --
-- Fragment begins: 105 --


DROP TABLE IF EXISTS `users_activity`;

--

DELETE FROM changelog
	                         WHERE change_number = 105
	                         AND delta_set = 'Main';
-- Fragment ends: 105 --
-- Fragment begins: 104 --


--
DELETE FROM changelog
	                         WHERE change_number = 104
	                         AND delta_set = 'Main';
-- Fragment ends: 104 --
-- Fragment begins: 103 --


ALTER TABLE `users` DROP COLUMN `account_balance`;

--
DELETE FROM changelog
	                         WHERE change_number = 103
	                         AND delta_set = 'Main';
-- Fragment ends: 103 --
-- Fragment begins: 102 --


ALTER TABLE `radio` DROP COLUMN `enable_monitoring`, DROP COLUMN `monitoring_status`, DROP COLUMN `monitoring_status_updated`;

--
DELETE FROM changelog
	                         WHERE change_number = 102
	                         AND delta_set = 'Main';
-- Fragment ends: 102 --
-- Fragment begins: 101 --


ALTER TABLE `epg_setting` DROP COLUMN `lang_code`;

--
DELETE FROM changelog
	                         WHERE change_number = 101
	                         AND delta_set = 'Main';
-- Fragment ends: 101 --
-- Fragment begins: 100 --


DROP TABLE IF EXISTS `reseller`;
ALTER TABLE `administrators` DROP COLUMN `reseller_id`;
ALTER TABLE `users` DROP COLUMN `reseller_id`;
ALTER TABLE `adm_grp_action_access` DROP COLUMN `only_top_admin`;

--
DELETE FROM changelog
	                         WHERE change_number = 100
	                         AND delta_set = 'Main';
-- Fragment ends: 100 --
-- Fragment begins: 99 --


ALTER TABLE `users` DROP COLUMN `expire_billing_date`;

--
DELETE FROM changelog
	                         WHERE change_number = 99
	                         AND delta_set = 'Main';
-- Fragment ends: 99 --
-- Fragment begins: 98 --


ALTER TABLE `tv_genre` DROP COLUMN `number`;
ALTER TABLE `tv_genre` DROP COLUMN `modified`;

--
DELETE FROM changelog
	                         WHERE change_number = 98
	                         AND delta_set = 'Main';
-- Fragment ends: 98 --
-- Fragment begins: 97 --


DROP TABLE IF EXISTS `package_subscribe_log`;

--
DELETE FROM changelog
	                         WHERE change_number = 97
	                         AND delta_set = 'Main';
-- Fragment ends: 97 --
-- Fragment begins: 96 --


DROP TABLE IF EXISTS `admin_dropdown_attributes`;
ALTER TABLE `itv` DROP `locked`;

--
DELETE FROM changelog
	                         WHERE change_number = 96
	                         AND delta_set = 'Main';
-- Fragment ends: 96 --
-- Fragment begins: 95 --


DROP TABLE IF EXISTS `adm_grp_action_access`;

--
DELETE FROM changelog
	                         WHERE change_number = 95
	                         AND delta_set = 'Main';
-- Fragment ends: 95 --
-- Fragment begins: 94 --


DROP TABLE IF EXISTS `fav_radio`;

--
DELETE FROM changelog
	                         WHERE change_number = 94
	                         AND delta_set = 'Main';
-- Fragment ends: 94 --
-- Fragment begins: 93 --


ALTER TABLE `events` DROP COLUMN `param1`;

--
DELETE FROM changelog
	                         WHERE change_number = 93
	                         AND delta_set = 'Main';
-- Fragment ends: 93 --
-- Fragment begins: 92 --


ALTER TABLE `users` DROP COLUMN `settings_password`;

--
DELETE FROM changelog
	                         WHERE change_number = 92
	                         AND delta_set = 'Main';
-- Fragment ends: 92 --
-- Fragment begins: 91 --


ALTER TABLE `storages` DROP `wowza_dvr`;
ALTER TABLE `storages` CHANGE `flussonic_dvr` `flussonic_server` tinyint default 0;

--
DELETE FROM changelog
	                         WHERE change_number = 91
	                         AND delta_set = 'Main';
-- Fragment ends: 91 --
-- Fragment begins: 90 --


ALTER TABLE `storages` DROP `wowza_app`;
ALTER TABLE `storages` DROP `wowza_port`;

--
DELETE FROM changelog
	                         WHERE change_number = 90
	                         AND delta_set = 'Main';
-- Fragment ends: 90 --
-- Fragment begins: 89 --


ALTER TABLE `users` DROP `theme`;

--
DELETE FROM changelog
	                         WHERE change_number = 89
	                         AND delta_set = 'Main';
-- Fragment ends: 89 --
-- Fragment begins: 88 --


ALTER TABLE `itv` DROP `flussonic_dvr`;
ALTER TABLE `storages` DROP `flussonic_server`;

--
DELETE FROM changelog
	                         WHERE change_number = 88
	                         AND delta_set = 'Main';
-- Fragment ends: 88 --
-- Fragment begins: 87 --


DROP TABLE `audio_playlists`;
DROP TABLE `audio_playlist_tracks`;

--
DELETE FROM changelog
	                         WHERE change_number = 87
	                         AND delta_set = 'Main';
-- Fragment ends: 87 --
-- Fragment begins: 86 --


DROP TABLE `audio_albums`;
DROP TABLE `audio_compositions`;
DROP TABLE `audio_performers`;
DROP TABLE `audio_genres`;
DROP TABLE `audio_genre`;
DROP TABLE `audio_years`;
DROP TABLE `audio_languages`;

--
DELETE FROM changelog
	                         WHERE change_number = 86
	                         AND delta_set = 'Main';
-- Fragment ends: 86 --
-- Fragment begins: 85 --


ALTER TABLE `services_package` DROP `price`;

--
DELETE FROM changelog
	                         WHERE change_number = 85
	                         AND delta_set = 'Main';
-- Fragment ends: 85 --
-- Fragment begins: 84 --


DROP TABLE `settings`;

--
DELETE FROM changelog
	                         WHERE change_number = 84
	                         AND delta_set = 'Main';
-- Fragment ends: 84 --
-- Fragment begins: 83 --


DROP TABLE `all_cities`;

ALTER TABLE `weatherco_cache` DROP `updated_forecast`;
ALTER TABLE `weatherco_cache` DROP `updated_current`;

DROP TABLE `openweathermap_cache`;

ALTER TABLE `users` DROP `openweathermap_city_id`;

--
DELETE FROM changelog
	                         WHERE change_number = 83
	                         AND delta_set = 'Main';
-- Fragment ends: 83 --
-- Fragment begins: 82 --

DELETE FROM changelog
	                         WHERE change_number = 82
	                         AND delta_set = 'Main';
-- Fragment ends: 82 --
-- Fragment begins: 81 --

DELETE FROM changelog
	                         WHERE change_number = 81
	                         AND delta_set = 'Main';
-- Fragment ends: 81 --
-- Fragment begins: 80 --

DELETE FROM changelog
	                         WHERE change_number = 80
	                         AND delta_set = 'Main';
-- Fragment ends: 80 --
-- Fragment begins: 79 --


ALTER TABLE `ch_links` DROP `flussonic_tmp_link`;

--
DELETE FROM changelog
	                         WHERE change_number = 79
	                         AND delta_set = 'Main';
-- Fragment ends: 79 --
-- Fragment begins: 78 --

DELETE FROM changelog
	                         WHERE change_number = 78
	                         AND delta_set = 'Main';
-- Fragment ends: 78 --
-- Fragment begins: 77 --


ALTER TABLE `video` DROP `country`;

--
DELETE FROM changelog
	                         WHERE change_number = 77
	                         AND delta_set = 'Main';
-- Fragment ends: 77 --
-- Fragment begins: 76 --


ALTER TABLE `users` DROP `hw_version`;
ALTER TABLE `image_update_settings` DROP `hardware_version_contains`;

--
DELETE FROM changelog
	                         WHERE change_number = 76
	                         AND delta_set = 'Main';
-- Fragment ends: 76 --
-- Fragment begins: 75 --


ALTER TABLE `tv_reminder` DROP `tv_program_name`;

--
DELETE FROM changelog
	                         WHERE change_number = 75
	                         AND delta_set = 'Main';
-- Fragment ends: 75 --
-- Fragment begins: 74 --


DROP TABLE `dvb_channels`;

--
DELETE FROM changelog
	                         WHERE change_number = 74
	                         AND delta_set = 'Main';
-- Fragment ends: 74 --
-- Fragment begins: 73 --


ALTER TABLE `image_update_settings` DROP `prefix`;

--
DELETE FROM changelog
	                         WHERE change_number = 73
	                         AND delta_set = 'Main';
-- Fragment ends: 73 --
-- Fragment begins: 72 --


ALTER TABLE `users` DROP `show_after_loading`;
ALTER TABLE `users` DROP `play_in_preview_by_ok`;

--
DELETE FROM changelog
	                         WHERE change_number = 72
	                         AND delta_set = 'Main';
-- Fragment ends: 72 --
-- Fragment begins: 71 --


ALTER TABLE `users` DROP `pri_audio_lang`;
ALTER TABLE `users` DROP `sec_audio_lang`;
ALTER TABLE `users` DROP `pri_subtitle_lang`;
ALTER TABLE `users` DROP `sec_subtitle_lang`;

--
DELETE FROM changelog
	                         WHERE change_number = 71
	                         AND delta_set = 'Main';
-- Fragment ends: 71 --
-- Fragment begins: 70 --


ALTER TABLE `users` DROP `hdmi_event_reaction`;

--
DELETE FROM changelog
	                         WHERE change_number = 70
	                         AND delta_set = 'Main';
-- Fragment ends: 70 --
-- Fragment begins: 69 --


DROP TABLE `tv_aspect`;

--
DELETE FROM changelog
	                         WHERE change_number = 69
	                         AND delta_set = 'Main';
-- Fragment ends: 69 --
-- Fragment begins: 68 --


ALTER TABLE `itv` DROP `tv_archive_duration`;

--
DELETE FROM changelog
	                         WHERE change_number = 68
	                         AND delta_set = 'Main';
-- Fragment ends: 68 --
-- Fragment begins: 67 --


ALTER TABLE `users` DROP `verified`;

--
DELETE FROM changelog
	                         WHERE change_number = 67
	                         AND delta_set = 'Main';
-- Fragment ends: 67 --
-- Fragment begins: 66 --


ALTER TABLE `users` DROP `device_id2`;

--
DELETE FROM changelog
	                         WHERE change_number = 66
	                         AND delta_set = 'Main';
-- Fragment ends: 66 --
-- Fragment begins: 65 --


ALTER TABLE `played_video` DROP INDEX video_id_playtime;

--
DELETE FROM changelog
	                         WHERE change_number = 65
	                         AND delta_set = 'Main';
-- Fragment ends: 65 --
-- Fragment begins: 64 --


ALTER TABLE `video` DROP `low_quality`;

--
DELETE FROM changelog
	                         WHERE change_number = 64
	                         AND delta_set = 'Main';
-- Fragment ends: 64 --
-- Fragment begins: 63 --


ALTER TABLE `users` DROP `video_clock`;

--
DELETE FROM changelog
	                         WHERE change_number = 63
	                         AND delta_set = 'Main';
-- Fragment ends: 63 --
-- Fragment begins: 62 --


ALTER TABLE `last_id` DROP index ident;

--
DELETE FROM changelog
	                         WHERE change_number = 62
	                         AND delta_set = 'Main';
-- Fragment ends: 62 --
-- Fragment begins: 61 --


ALTER TABLE `itv` DROP `nginx_secure_link`;
ALTER TABLE `ch_links` DROP `nginx_secure_link`;

--
DELETE FROM changelog
	                         WHERE change_number = 61
	                         AND delta_set = 'Main';
-- Fragment ends: 61 --
-- Fragment begins: 60 --


ALTER TABLE `played_itv` DROP `user_locale`;

--
DELETE FROM changelog
	                         WHERE change_number = 60
	                         AND delta_set = 'Main';
-- Fragment ends: 60 --
-- Fragment begins: 59 --


ALTER TABLE `users` DROP `ts_enabled`;
ALTER TABLE `users` DROP `ts_enable_icon`;
ALTER TABLE `users` DROP `ts_path`;
ALTER TABLE `users` DROP `ts_max_length`;
ALTER TABLE `users` DROP `ts_buffer_use`;
ALTER TABLE `users` DROP `ts_action_on_exit`;
ALTER TABLE `users` DROP `ts_delay`;

ALTER TABLE `itv` DROP `allow_local_timeshift`;

--
DELETE FROM changelog
	                         WHERE change_number = 59
	                         AND delta_set = 'Main';
-- Fragment ends: 59 --
-- Fragment begins: 58 --


ALTER TABLE `users` DROP `device_id`;

--
DELETE FROM changelog
	                         WHERE change_number = 58
	                         AND delta_set = 'Main';
-- Fragment ends: 58 --
-- Fragment begins: 57 --


ALTER TABLE `epg_setting` DROP `status`;

--
DELETE FROM changelog
	                         WHERE change_number = 57
	                         AND delta_set = 'Main';
-- Fragment ends: 57 --
-- Fragment begins: 56 --


ALTER TABLE `epg` DROP `category`;
ALTER TABLE `epg` DROP `director`;
ALTER TABLE `epg` DROP `actor`;

--
DELETE FROM changelog
	                         WHERE change_number = 56
	                         AND delta_set = 'Main';
-- Fragment ends: 56 --
-- Fragment begins: 55 --


ALTER TABLE `users` DROP `plasma_saving`;

--
DELETE FROM changelog
	                         WHERE change_number = 55
	                         AND delta_set = 'Main';
-- Fragment ends: 55 --
-- Fragment begins: 54 --


DROP TABLE `played_timeshift`;

--
DELETE FROM changelog
	                         WHERE change_number = 54
	                         AND delta_set = 'Main';
-- Fragment ends: 54 --
-- Fragment begins: 53 --

DELETE FROM changelog
	                         WHERE change_number = 53
	                         AND delta_set = 'Main';
-- Fragment ends: 53 --
-- Fragment begins: 52 --


DROP TABLE `acl`;

ALTER TABLE `administrators` DROP `gid`;

DROP TABLE `admin_groups`;

--
DELETE FROM changelog
	                         WHERE change_number = 52
	                         AND delta_set = 'Main';
-- Fragment ends: 52 --
-- Fragment begins: 51 --


ALTER TABLE `video` DROP `comments`;

--
DELETE FROM changelog
	                         WHERE change_number = 51
	                         AND delta_set = 'Main';
-- Fragment ends: 51 --
-- Fragment begins: 50 --


DROP TABLE `played_tv_archive`;

--
DELETE FROM changelog
	                         WHERE change_number = 50
	                         AND delta_set = 'Main';
-- Fragment ends: 50 --
-- Fragment begins: 49 --

DELETE FROM changelog
	                         WHERE change_number = 49
	                         AND delta_set = 'Main';
-- Fragment ends: 49 --
-- Fragment begins: 48 --


ALTER TABLE `video` DROP `high_quality`;

--
DELETE FROM changelog
	                         WHERE change_number = 48
	                         AND delta_set = 'Main';
-- Fragment ends: 48 --
-- Fragment begins: 47 --

DELETE FROM changelog
	                         WHERE change_number = 47
	                         AND delta_set = 'Main';
-- Fragment ends: 47 --
-- Fragment begins: 46 --


ALTER TABLE `users` DROP `access_token`;

--
DELETE FROM changelog
	                         WHERE change_number = 46
	                         AND delta_set = 'Main';
-- Fragment ends: 46 --
-- Fragment begins: 45 --


ALTER TABLE `users` DROP `country`;

--
DELETE FROM changelog
	                         WHERE change_number = 45
	                         AND delta_set = 'Main';
-- Fragment ends: 45 --
-- Fragment begins: 44 --


ALTER TABLE `storages` DROP `user_agent_filter`;

--
DELETE FROM changelog
	                         WHERE change_number = 44
	                         AND delta_set = 'Main';
-- Fragment ends: 44 --
-- Fragment begins: 43 --


ALTER TABLE `vclub_ad` DROP `status`;

DROP TABLE `vclub_ad_deny_category`;

--
DELETE FROM changelog
	                         WHERE change_number = 43
	                         AND delta_set = 'Main';
-- Fragment ends: 43 --
-- Fragment begins: 42 --


ALTER TABLE `vclub_ad` DROP `weight`;

ALTER TABLE `moderators` DROP `disable_vclub_ad`;

--
DELETE FROM changelog
	                         WHERE change_number = 42
	                         AND delta_set = 'Main';
-- Fragment ends: 42 --
-- Fragment begins: 41 --


ALTER TABLE `itv` DROP `modified`;

DROP TABLE `vclub_ad`;
DROP TABLE `vclub_ads_log`;

--
DELETE FROM changelog
	                         WHERE change_number = 41
	                         AND delta_set = 'Main';
-- Fragment ends: 41 --
-- Fragment begins: 40 --


ALTER TABLE `ch_links` DROP `enable_balancer_monitoring`;
ALTER TABLE `ch_link_on_streamer` DROP `monitoring_status`;

--
DELETE FROM changelog
	                         WHERE change_number = 40
	                         AND delta_set = 'Main';
-- Fragment ends: 40 --
-- Fragment begins: 39 --


ALTER TABLE `storages` DROP `apache_port`;

DROP TABLE `pvr_storages`;

--
DELETE FROM changelog
	                         WHERE change_number = 39
	                         AND delta_set = 'Main';
-- Fragment ends: 39 --
-- Fragment begins: 38 --


ALTER TABLE `users_rec` DROP `local`;
ALTER TABLE `users_rec` DROP `file`;
ALTER TABLE `users_rec` DROP `internal_id`;
ALTER TABLE `itv` DROP `allow_local_pvr`;

--
DELETE FROM changelog
	                         WHERE change_number = 38
	                         AND delta_set = 'Main';
-- Fragment ends: 38 --
-- Fragment begins: 37 --


ALTER TABLE `services_package` DROP `rent_duration`;

DROP TABLE `video_rent`;
DROP TABLE `video_rent_history`;

ALTER TABLE `image_update_settings` DROP `stb_type`;

--
DELETE FROM changelog
	                         WHERE change_number = 37
	                         AND delta_set = 'Main';
-- Fragment ends: 37 --
-- Fragment begins: 36 --


ALTER TABLE `video` DROP `age`;
ALTER TABLE `video` DROP `rating_mpaa`;

ALTER TABLE `services_package` DROP `service_type`;

--
DELETE FROM changelog
	                         WHERE change_number = 36
	                         AND delta_set = 'Main';
-- Fragment ends: 36 --
-- Fragment begins: 35 --


ALTER TABLE `users` DROP `just_started`;
ALTER TABLE `users` DROP `last_watchdog`;
ALTER TABLE `users` DROP `created`;

--
DELETE FROM changelog
	                         WHERE change_number = 35
	                         AND delta_set = 'Main';
-- Fragment ends: 35 --
-- Fragment begins: 34 --


ALTER TABLE `tv_archive` ADD UNIQUE KEY (`ch_id`);

--
DELETE FROM changelog
	                         WHERE change_number = 34
	                         AND delta_set = 'Main';
-- Fragment ends: 34 --
-- Fragment begins: 33 --


ALTER TABLE `itv` DROP `allow_pvr`;
ALTER TABLE `video_log` DROP `video_name`;

--
DELETE FROM changelog
	                         WHERE change_number = 33
	                         AND delta_set = 'Main';
-- Fragment ends: 33 --
-- Fragment begins: 32 --


ALTER TABLE `services_package` DROP `all_services`;

--
DELETE FROM changelog
	                         WHERE change_number = 32
	                         AND delta_set = 'Main';
-- Fragment ends: 32 --
-- Fragment begins: 31 --


ALTER TABLE `itv` DROP INDEX base_ch;
ALTER TABLE `ch_links` DROP INDEX ch_id;
ALTER TABLE `ch_links` DROP INDEX ch_id_status;

ALTER TABLE `epg` DROP INDEX real_id;

ALTER TABLE `tv_reminder` DROP INDEX tv_program_real_id;
ALTER TABLE `tv_reminder` DROP INDEX ch_id_real_id;
ALTER TABLE `tv_reminder` DROP INDEX mac_time;

ALTER TABLE `storages` DROP INDEX status_simple;

ALTER TABLE `radio` DROP `volume_correction`;

--
DELETE FROM changelog
	                         WHERE change_number = 31
	                         AND delta_set = 'Main';
-- Fragment ends: 31 --
-- Fragment begins: 30 --


DROP TABLE `stream_zones`;

DROP TABLE `countries_in_zone`;

ALTER TABLE `streaming_servers` DROP `stream_zone`;

ALTER TABLE `ch_links` DROP `enable_monitoring`;

--
DELETE FROM changelog
	                         WHERE change_number = 30
	                         AND delta_set = 'Main';
-- Fragment ends: 30 --
-- Fragment begins: 29 --


DROP TABLE `ch_links`;
DROP TABLE `streaming_servers`;
DROP TABLE `ch_link_on_streamer`;

ALTER TABLE `users` DROP `now_playing_link_id`;
ALTER TABLE `users` DROP `now_playing_streamer_id`;

--
DELETE FROM changelog
	                         WHERE change_number = 29
	                         AND delta_set = 'Main';
-- Fragment ends: 29 --
-- Fragment begins: 28 --


ALTER TABLE `users` DROP `comment`;
ALTER TABLE `epg_setting` DROP `id_prefix`;

--
DELETE FROM changelog
	                         WHERE change_number = 28
	                         AND delta_set = 'Main';
-- Fragment ends: 28 --
-- Fragment begins: 27 --

DELETE FROM changelog
	                         WHERE change_number = 27
	                         AND delta_set = 'Main';
-- Fragment ends: 27 --
-- Fragment begins: 26 --


ALTER TABLE `last_id` DROP `uid`;
ALTER TABLE `last_id` ADD UNIQUE KEY (`ident`);

--
DELETE FROM changelog
	                         WHERE change_number = 26
	                         AND delta_set = 'Main';
-- Fragment ends: 26 --
-- Fragment begins: 25 --

ALTER TABLE `media_claims` DROP `no_epg`;
ALTER TABLE `media_claims` DROP `wrong_epg`;
ALTER TABLE `daily_media_claims` DROP `no_epg`;
ALTER TABLE `daily_media_claims` DROP `wrong_epg`;
--
DELETE FROM changelog
	                         WHERE change_number = 25
	                         AND delta_set = 'Main';
-- Fragment ends: 25 --
-- Fragment begins: 24 --

ALTER TABLE `tariff_plan` DROP `user_default`;
--
DELETE FROM changelog
	                         WHERE change_number = 24
	                         AND delta_set = 'Main';
-- Fragment ends: 24 --
-- Fragment begins: 23 --

ALTER TABLE `itv` DROP `correct_time`;
--
DELETE FROM changelog
	                         WHERE change_number = 23
	                         AND delta_set = 'Main';
-- Fragment ends: 23 --
-- Fragment begins: 22 --

ALTER TABLE `access_tokens` DROP `refresh_token`;
ALTER TABLE `users` DROP `tariff_plan_id`;
--
DELETE FROM changelog
	                         WHERE change_number = 22
	                         AND delta_set = 'Main';
-- Fragment ends: 22 --
-- Fragment begins: 21 --

ALTER TABLE `epg` DROP `real_id`;
ALTER TABLE `tv_reminder` DROP `tv_program_real_id`;
ALTER TABLE `users_rec` DROP `program_real_id`;
--
DELETE FROM changelog
	                         WHERE change_number = 21
	                         AND delta_set = 'Main';
-- Fragment ends: 21 --
-- Fragment begins: 20 --

DELETE FROM changelog
	                         WHERE change_number = 20
	                         AND delta_set = 'Main';
-- Fragment ends: 20 --
-- Fragment begins: 19 --


ALTER TABLE `storages` DROP `fake_tv_archive`;

ALTER TABLE `video` DROP `kinopoisk_id`;
ALTER TABLE `video` DROP `rating_kinopoisk`;
ALTER TABLE `video` DROP `rating_count_kinopoisk`;
ALTER TABLE `video` DROP `rating_imdb`;
ALTER TABLE `video` DROP `rating_count_imdb`;

ALTER TABLE `video` DROP `rating_last_update`;

--
DELETE FROM changelog
	                         WHERE change_number = 19
	                         AND delta_set = 'Main';
-- Fragment ends: 19 --
-- Fragment begins: 18 --


ALTER TABLE `itv` DROP `logo`;

ALTER TABLE `administrators` DROP `debug_key`;

--
DELETE FROM changelog
	                         WHERE change_number = 18
	                         AND delta_set = 'Main';
-- Fragment ends: 18 --
-- Fragment begins: 17 --


ALTER TABLE `access_tokens` DROP `secret_key`;
ALTER TABLE `access_tokens` DROP `time_delta`;
ALTER TABLE `access_tokens` DROP `started`;

--
DELETE FROM changelog
	                         WHERE change_number = 17
	                         AND delta_set = 'Main';
-- Fragment ends: 17 --
-- Fragment begins: 16 --

DELETE FROM changelog
	                         WHERE change_number = 16
	                         AND delta_set = 'Main';
-- Fragment ends: 16 --
-- Fragment begins: 15 --

DELETE FROM changelog
	                         WHERE change_number = 15
	                         AND delta_set = 'Main';
-- Fragment ends: 15 --
-- Fragment begins: 14 --


ALTER TABLE `users` DROP `num_banks`;

--
DELETE FROM changelog
	                         WHERE change_number = 14
	                         AND delta_set = 'Main';
-- Fragment ends: 14 --
-- Fragment begins: 13 --


ALTER TABLE `users` DROP `stb_type`;
ALTER TABLE `users` DROP `serial_number`;
ALTER TABLE `events` DROP `auto_hide_timeout`;
ALTER TABLE `storages` DROP `not_for_mag100`;

--
DELETE FROM changelog
	                         WHERE change_number = 13
	                         AND delta_set = 'Main';
-- Fragment ends: 13 --
-- Fragment begins: 12 --


ALTER TABLE `users` DROP `login`;
ALTER TABLE `users` DROP `password`;

--
DELETE FROM changelog
	                         WHERE change_number = 12
	                         AND delta_set = 'Main';
-- Fragment ends: 12 --
-- Fragment begins: 11 --


ALTER TABLE `users` DROP `fname`;
ALTER TABLE `storages` DROP `wowza_server`;
ALTER TABLE `storages` DROP `archive_stream_server`;
ALTER TABLE `itv` ADD `quality` varchar(16) default 'high';
ALTER TABLE `itv` DROP `cmd_1`;
ALTER TABLE `itv` DROP `cmd_2`;
ALTER TABLE `itv` DROP `cmd_3`;
ALTER TABLE `stream_error` DROP `event`;

--
DELETE FROM changelog
	                         WHERE change_number = 11
	                         AND delta_set = 'Main';
-- Fragment ends: 11 --
-- Fragment begins: 10 --


ALTER TABLE `itv` DROP `enable_wowza_load_balancing`;
ALTER TABLE `itv` DROP `quality`;
ALTER TABLE `users` DROP `tv_quality`;

--
DELETE FROM changelog
	                         WHERE change_number = 10
	                         AND delta_set = 'Main';
-- Fragment ends: 10 --
-- Fragment begins: 9 --


ALTER TABLE `video` DROP `for_sd_stb`;

--
DELETE FROM changelog
	                         WHERE change_number = 9
	                         AND delta_set = 'Main';
-- Fragment ends: 9 --
-- Fragment begins: 8 --


ALTER TABLE `users` DROP `phone`;

--

DELETE FROM changelog
	                         WHERE change_number = 8
	                         AND delta_set = 'Main';
-- Fragment ends: 8 --
-- Fragment begins: 7 --


ALTER TABLE `itv` DROP `wowza_tmp_link`;
ALTER TABLE `itv` DROP `wowza_dvr`;
ALTER TABLE `itv` DROP `monitoring_status`;
ALTER TABLE `itv` DROP `monitoring_status_updated`;
ALTER TABLE `itv` DROP `enable_monitoring`;
ALTER TABLE `itv` DROP `monitoring_url`;

--
DELETE FROM changelog
	                         WHERE change_number = 7
	                         AND delta_set = 'Main';
-- Fragment ends: 7 --
-- Fragment begins: 6 --


ALTER TABLE `users` DROP `playback_limit`;
ALTER TABLE `users` DROP `screensaver_delay`;

--
DELETE FROM changelog
	                         WHERE change_number = 6
	                         AND delta_set = 'Main';
-- Fragment ends: 6 --
-- Fragment begins: 5 --


ALTER TABLE `storages` DROP `external`;

--

DELETE FROM changelog
	                         WHERE change_number = 5
	                         AND delta_set = 'Main';
-- Fragment ends: 5 --
-- Fragment begins: 4 --


ALTER TABLE `itv` DROP `enable_tv_archive`;

--
DELETE FROM changelog
	                         WHERE change_number = 4
	                         AND delta_set = 'Main';
-- Fragment ends: 4 --
-- Fragment begins: 3 --


ALTER TABLE `storages` DROP `for_simple_storage`;

--

DELETE FROM changelog
	                         WHERE change_number = 3
	                         AND delta_set = 'Main';
-- Fragment ends: 3 --
-- Fragment begins: 2 --


TRUNCATE `countries`;
TRUNCATE `cities`;

--
DELETE FROM changelog
	                         WHERE change_number = 2
	                         AND delta_set = 'Main';
-- Fragment ends: 2 --
-- Fragment begins: 1 --


TRUNCATE `genre`;
TRUNCATE `cat_genre`;
TRUNCATE `itv`;
TRUNCATE `tv_genre`;
TRUNCATE `karaoke_genre`;
TRUNCATE `administrators`;
TRUNCATE `media_category`;
TRUNCATE `generation_time`;

--
DELETE FROM changelog
	                         WHERE change_number = 1
	                         AND delta_set = 'Main';
-- Fragment ends: 1 --
