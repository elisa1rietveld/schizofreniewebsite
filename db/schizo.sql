CREATE DATABASE schizo;
USE schizo;

CREATE TABLE Users (
	userId int NOT NULL AUTO_INCREMENT,
    username varchar(128) NOT NULL,
    password varchar(128) NOT NULL,
    PRIMARY KEY (userId)   
);

INSERT INTO Users(username, password) VALUES ('piet','$2y$10$KWWvOLHp/sFLCmFxY7eAjOKViN3Sbg1SUlD34VXCFITcbELzUcCsu');

select * from Users;