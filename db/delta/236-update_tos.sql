--

UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, 'Middleware Stalker', 'Ministra TV Platform');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, 'Stalker', 'Ministra');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, '174 Bay 49</span><sup><span>th</span></sup><span> Street, Brooklyn, NY 11214', 'Route de Chêne 30, 1207 Geneva, Switzerland');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, 'Infomir, LLC', 'Infomir, SA');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, '2015 Infomir', '2017 Infomir');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, '2016 Infomir', '2017 Infomir');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, 'October 1, 2015', 'Effective as of January 26, 2018');
UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`, 'July 1, 2016', 'Effective as of January 26, 2018');

UPDATE `apps_tos` SET `tos_en`=replace(`tos_en`,
'<p>
<span><b>4. Miscellaneous</b></span>
</p>',
'<h2>
<span>4. Miscellaneous</span>
</h2>'
);

-- //@UNDO

--