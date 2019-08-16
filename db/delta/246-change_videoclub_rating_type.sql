--

ALTER TABLE `video` MODIFY `rating_kinopoisk` FLOAT(7,5) DEFAULT 0;
ALTER TABLE `video` MODIFY `rating_count_kinopoisk` INTEGER UNSIGNED DEFAULT 0;
ALTER TABLE `video` MODIFY `rating_imdb` FLOAT(7,5) DEFAULT 0;
ALTER TABLE `video` MODIFY `rating_count_imdb` INTEGER UNSIGNED DEFAULT 0;

-- //@UNDO

ALTER TABLE `video` MODIFY `rating_kinopoisk` VARCHAR(64);
ALTER TABLE `video` MODIFY `rating_count_kinopoisk` VARCHAR(64);
ALTER TABLE `video` MODIFY `rating_imdb` VARCHAR(64);
ALTER TABLE `video` MODIFY `rating_count_imdb` VARCHAR(64);

--