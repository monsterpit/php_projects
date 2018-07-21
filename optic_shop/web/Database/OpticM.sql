CREATE DATABASE OpticM;

GRANT ALL PRIVILEGES ON OpticM.* TO 'jonny'@'localhost' IDENTIFIED BY 'bravo';

SHOW DATABASES;

USE OpticM;

CREATE TABLE users(id INT(10) NOT NULL AUTO_INCREMENT,name VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL,contact DOUBLE NOT NULL,username VARCHAR(50) NOT NULL,password VARCHAR(50) NOT NULL,PRIMARY KEY(id));

CREATE TABLE admins(id INT(10) NOT NULL AUTO_INCREMENT,username VARCHAR(50) NOT NULL,password VARCHAR(50) NOT NULL,PRIMARY KEY(id));

CREATE TABLE glassbook(id INT(10) NOT NULL AUTO_INCREMENT,username VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL,contact DOUBLE NOT NULL,glassname VARCHAR(50) NOT NULL,prl DOUBLE NOT NULL,prr DOUBLE NOT NULL, paymentmethod VARCHAR(50) NOT NULL,cardnumber DOUBLE ,cvc DOUBLE,expiresdate date ,totalamount DOUBLE NOT NULL,quantity DOUBLE NOT NULL,paid VARCHAR(50) NOT NULL,PRIMARY KEY(id));

CREATE TABLE feedbacks(id INT(10) NOT NULL AUTO_INCREMENT,username VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL ,contact DOUBLE NOT NULL, message VARCHAR(500) NOT NULL,PRIMARY KEY(id));

CREATE TABLE glass(id INT(10) NOT NULL AUTO_INCREMENT,glass VARCHAR(50) NOT NULL,rate DOUBLE NOT NULL,PRIMARY KEY(id));

INSERT INTO glass(glass,rate) VALUES('MLG MICRON Onyx',120);

INSERT INTO glass(glass,rate) VALUES('VINYL Onyx z',180);

INSERT INTO glass(glass,rate) VALUES('Desmo - Onyx',210);

INSERT INTO glass(glass,rate) VALUES('Penta - Mercury',170);


INSERT INTO glass(glass,rate) VALUES('INTERCEPT Raven Grey',160);

INSERT INTO glass(glass,rate) VALUES('Sparrow - Onyx / Red',150);

INSERT INTO glass(glass,rate) VALUES('RAZER CERBERUS Onyx Grey',100);

INSERT INTO glass(glass,rate) VALUES('DEmissary - Onyx',110);

INSERT INTO admins(username,password) VALUES('admin','secret');