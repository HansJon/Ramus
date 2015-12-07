CREATE TABLE chat
(
	message_id int NOT NULL PRIMARY KEY auto_increment,
	posted_on datetime NOT NULL,
	user_name varchar(255) NOT NULL,
	message text NOT NULL,
	color char(7) default '#000000',
);