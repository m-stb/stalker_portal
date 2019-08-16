--

ALTER TABLE users ADD COLUMN clock_format ENUM('12h', '24h') NULL DEFAULT NULL;

-- //@UNDO

ALTER TABLE users DROP COLUMN clock_format;

--