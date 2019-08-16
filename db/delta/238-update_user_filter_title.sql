--

UPDATE `filters` SET `title`= 'Status' WHERE `title` = 'State' AND `method` = 'getUsersByStatus';
UPDATE `filters` SET `title`= 'State'  WHERE `title` = 'Status'  AND `method` = 'getUsersByState';

-- //@UNDO

--