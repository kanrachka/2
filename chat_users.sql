CREATE TABLE chat_users (
id int(10) NOT NULL auto_increment,
login text NOT NULL,
password text NOT NULL,
privat text NOT NULL,
active tinyint(2) NOT NULL default '0',
PRIMARY KEY (id)
) TYPE=MyISAM;
