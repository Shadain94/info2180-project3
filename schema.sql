DROP DATABASE IF EXISTS Cheapo;
CREATE DATABASE Cheapo;
USE Cheapo;

DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Message;
DROP TABLE IF EXISTS Message_Read;

CREATE TABLE User 
(
 user_id int not null,
 firstname varchar(255),
 lastname varchar(255),
 username varchar(255),
 password varchar(40),
 user_type varchar(255),
 primary key (user_id)
);


CREATE TABLE Message
(
  message_id int not null auto_increment,
  recipient_id varchar(40),
  user_id  varchar(40),
  subject  text,
  body      text,
  date_sent  date, 
  primary key (message_id),
  foreign key(user_id) references User(user_id)
);



CREATE TABLE Message_Read
(
  MR_id int not null,
  message_id varchar(255),
  reader_id varchar(255),
  date_read date,
  primary key(MR_id),
  foreign key(message_id) references Message(message_id) ON UPDATE CASCADE ON DELETE CASCADE
);




insert into User values (100, "Shadain", "Gooden","Dex-Factor","Madmaths1","admin");
insert into User values (101, "Brittane", "Reid", "BrittR","password", "admin");
insert into User values (102, "Simone", "Scott", "SimmyScott", "hey123", "admin");



 