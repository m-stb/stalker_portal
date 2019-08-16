--

DELETE `f1`.* FROM `filters` AS `f1`
  LEFT JOIN (SELECT `id` FROM `filters` GROUP BY `method`, `values_set`) AS `f2`
    ON `f1`.`id` = `f2`.`id`
WHERE `f2`.`id` IS NULL;

-- //@UNDO

--