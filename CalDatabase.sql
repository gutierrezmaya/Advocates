DROP DATABASE IF EXISTS CAL;

GRANT ALL PRIVILEGES ON CAL.* to elizabeth@localhost IDENTIFIED BY 'riffle';

CREATE DATABASE CAL;

USE CAL;

CREATE TABLE advocateInformation (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,   
  name VARCHAR(256) NOT NULL,
  email VARCHAR(256) NOT NULL,
  password VARCHAR(256) NOT NULL,
  bio VARCHAR(2000) NOT NULL, 
  image VARCHAR(256) NOT NULL
); 

CREATE TABLE events (
  id  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(256) COLLATE utf8_unicode_ci NOT NULL,
  client_name VARCHAR(256) NOT NULL,
  advocate_id INT UNSIGNED NOT NULL,
  FOREIGN KEY (advocate_id) REFERENCES advocateInformation(id),
  date1 date NOT NULL,
  created  datetime NOT NULL,
  modified datetime NOT NULL,
  status  tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
);

INSERT INTO ADVOCATEINFORMATION (name, email, password, bio, image) Values 
('Kira Weiss', 'kweiss20@cmc.edu', 'Kittens123', 'My name is Kira and I like coding.', 'carnival1.jpg');

INSERT INTO EVENTS (title, client_name, advocate_id, date1, created, modified, status) Values 
('PHP : Today PHP Event Calendar Class', 'Kira Weiss', '1', '2017-04-22', '2017-04-22 06:15:17', '2017-04-22 06:15:17', 1);





