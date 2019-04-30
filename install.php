<?
// Erstellt die User
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `tbl_user` (
    `user_id`          int(11) unsigned NOT NULL auto_increment,
    `user_passwort`    varchar(255) NOT NULL default '',
	`vorname`          varchar(255) NOT NULL default '',
    `nachname`         varchar(255) NOT NULL default '',
    `telefon`          varchar(255) NOT NULL default '',
    `user_email`       varchar(255) NOT NULL default '',
    `session`          varchar(255) NOT NULL default '',
    `status`            tinyint(1) unsigned NOT NULL default '1',
    `aktiv`            tinyint(1) unsigned NOT NULL default '1',
    `admin`            tinyint(1) unsigned NOT NULL default '0',
    `member`           tinyint(1) unsigned NOT NULL default '1'
    PRIMARY KEY  (`user_id`)
)";
$res = mysql_query($queryCreateUsersTable);
var_dump($res);
die;
// Im Aufbau
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `tbl_user_data` (
    `user_data_id`     int(11)  unsigned NOT NULL auto_increment,
    `user_id`          int(11)  unsigned default 'NULL',
	`theme_id`         int(11) NOT NULL default '',
    `user_code`        varchar(255) NOT NULL default '',
    `nachname`         varchar(255) NOT NULL default '',
    `user_email`       varchar(255) NOT NULL default '',
    `session`          varchar(255) NOT NULL default '',
    `aktiv`            tinyint(1) unsigned NOT NULL default '1',
    `admin`            tinyint(1) unsigned NOT NULL default '0',
    `member`           tinyint(1) unsigned NOT NULL default '1'
    PRIMARY KEY  (`user_data_id`)
)";
$res = mysql_query($queryCreateUsersTable);
var_dump($res);
die;
// Tabelle welche die Themes verwaltet
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `tbl_themes` (
    `theme_id`          int(11) unsigned NOT NULL auto_increment,
    `user_passwort`    varchar(255) NOT NULL default '',
	`vorname`          varchar(255) NOT NULL default '',
    `nachname`         varchar(255) NOT NULL default '',
    `user_email`       varchar(255) NOT NULL default '',
    `session`          varchar(255) NOT NULL default '',
    `aktiv`            tinyint(1) unsigned NOT NULL default '1',
    `admin`            tinyint(1) unsigned NOT NULL default '0',
    `member`           tinyint(1) unsigned NOT NULL default '1'
    PRIMARY KEY  (`theme_id`)
)";
$res = mysql_query($queryCreateUsersTable);
var_dump($res);
die;
// Mapping Tabelle zwischen user und user
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `tbl_user_chats` (
    `user_chat_id`       int(11) unsigned NOT NULL auto_increment,
    `user_id_a`          int(11)  unsigned default 'NULL',
    `user_id_b`          int(11)  unsigned default 'NULL',
    PRIMARY KEY  (`user_chat_id`)
)";
$res = mysql_query($queryCreateUsersTable);
var_dump($res);
die;
// Tabelle welcher die Messages verwaltet
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `tbl_messages` (
    `messages_id`    int(11) unsigned NOT NULL auto_increment,
    `user_id_b`      int(11)  unsigned default 'NULL',
	`message`        varchar(255) NOT NULL default '',
    `timestamp`      timestamp`   NOT NULL default 'current_timestamp',
	`read`   		 tinyint(1)   unsigned NOT NULL default '0'
    PRIMARY KEY  (`messages_id`)
)";
$res = mysql_query($queryCreateUsersTable);
var_dump($res);
die;
// Mapping Tabelle zwischen user und seinen favoriten
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `tbl_favorites` (
    `favorite_id`       int(11) unsigned NOT NULL auto_increment,
    `user_id`           int(11)  unsigned default 'NULL',
    `user_favorite_id`  int(11)  unsigned default 'NULL',
    PRIMARY KEY  (`favorite_id`)
)";
$res = mysql_query($queryCreateUsersTable);
var_dump($res);
die;
?>