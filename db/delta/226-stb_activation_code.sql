--

ALTER TABLE `users` ADD `activation_code_auto_issue` tinyint default 1;

-- //@UNDO

ALTER TABLE `users` DROP `activation_code_auto_issue`;

--