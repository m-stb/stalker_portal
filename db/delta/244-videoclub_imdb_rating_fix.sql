--

UPDATE `video` SET `rating_imdb` = `rating_kinopoisk`, `rating_kinopoisk` = '' WHERE NOT(`rating_imdb`) AND `autocomplete_provider` = 'tmdb';
UPDATE `video` SET `rating_count_imdb` = `rating_count_kinopoisk`, `rating_count_kinopoisk` = '' WHERE NOT(`rating_count_imdb`) AND `autocomplete_provider` = 'tmdb';

-- //@UNDO

--