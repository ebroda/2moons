INSERT INTO  `prefix_cronjobs` (`cronjobID` ,`name` ,`isActive` ,`min` ,`hours` ,`dom` ,`month` ,`dow` ,`class` ,`nextTime` ,`lock`) VALUES (NULL, 'databasedump', 1, '30', '1', '*', '*', '1', 'DumpCronjob', 0, NULL);