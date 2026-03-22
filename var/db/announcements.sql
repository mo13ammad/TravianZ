CREATE TABLE IF NOT EXISTS `%PREFIX%announcements` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `text` text NOT NULL,
    `time` int(10) unsigned NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
