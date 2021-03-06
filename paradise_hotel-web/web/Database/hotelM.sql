CREATE DATABASE hotelM;

GRANT ALL PRIVILEGES ON hotelM.* TO 'jonny'@'localhost' IDENTIFIED BY 'bravo';

SHOW DATABASES;

USE hotelM;

CREATE TABLE users(id INT(10) NOT NULL AUTO_INCREMENT,name VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL,contact DOUBLE NOT NULL,username VARCHAR(50) NOT NULL,password VARCHAR(50) NOT NULL,PRIMARY KEY(id));

CREATE TABLE admins(id INT(10) NOT NULL AUTO_INCREMENT,username VARCHAR(50) NOT NULL,password VARCHAR(50) NOT NULL,PRIMARY KEY(id));

CREATE TABLE roombook(id INT(10) NOT NULL AUTO_INCREMENT,username VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL,contact DOUBLE NOT NULL,roomtype VARCHAR(50) NOT NULL,paymentmethod VARCHAR(50) NOT NULL,cardnumber DOUBLE ,cvc DOUBLE,expiresdate date ,totalamount DOUBLE NOT NULL,totaldays DOUBLE NOT NULL,paid VARCHAR(50) NOT NULL,PRIMARY KEY(id));

CREATE TABLE feedbacks(id INT(10) NOT NULL AUTO_INCREMENT,username VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL ,contact DOUBLE NOT NULL, message VARCHAR(500) NOT NULL,PRIMARY KEY(id));

CREATE TABLE room(id INT(10) NOT NULL AUTO_INCREMENT,room VARCHAR(50) NOT NULL,rate DOUBLE NOT NULL,PRIMARY KEY(id));

INSERT INTO room(room,rate) VALUES('single',120);

INSERT INTO room(room,rate) VALUES('double',180);

INSERT INTO room(room,rate) VALUES('suite',210);

INSERT INTO admins(username,password) VALUES('admin','secret');