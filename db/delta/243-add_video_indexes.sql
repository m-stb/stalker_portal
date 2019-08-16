--

ALTER TABLE `media_claims` ADD INDEX `media_type_id` (`media_type` ASC, `media_id` ASC);
ALTER TABLE `video_series_files` ADD INDEX `video_id_idx` (`video_id` ASC);

-- //@UNDO

ALTER TABLE `media_claims` DROP INDEX `media_type_id`;
ALTER TABLE `video_series_files` DROP INDEX `video_id_idx`;

--