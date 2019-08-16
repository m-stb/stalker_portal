--

ALTER TABLE `smac_codes` MODIFY `status` ENUM("Not Activated", "Activated", "Blocked", "Manually entered") DEFAULT "Not Activated";

-- //@UNDO

ALTER TABLE `smac_codes` MODIFY `status` ENUM("Not Activated", "Activated", "Blocked") DEFAULT "Not Activated";

--