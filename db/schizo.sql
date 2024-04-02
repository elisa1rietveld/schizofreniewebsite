CREATE DATABASE schizo;
USE schizo;

CREATE TABLE Users (
	UserId int NOT NULL AUTO_INCREMENT,
    Username varchar(128) UNIQUE NOT NULL,
    password varchar(128) NOT NULL,
    userRole int, -- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
    PRIMARY KEY (userId)   
);

CREATE TABLE Questions(
TestId int NOT NULL AUTO_INCREMENT,
UserId int,
Q1 int(1),
Q2 int(1),
Q3 int(1),
Q4 int(1),
Q5 int(1),
-- we're not using these question slots.
-- Q6 int(1),
-- Q7 int(1),
-- Q8 int(1),
-- Q9 int(1),
-- Q10 int(1),
PRIMARY KEY(TestId),
FOREIGN KEY(UserId) REFERENCES Users(UserId)
);

INSERT INTO Users (Username,password,userRole)
VALUES
  ("Gay Benson","IUO67LMF8ID",1),
  ("Kay Peterson","RWO83TFC2LW",1),
  ("Keelie Barnes","RQY26BRF7MM",1),
  ("Basil Waters","ZRZ48OBK8VX",1),
  ("Chiquita Torres","VEU44ILG1QB",1),
  ("admin","$2y$10$qOz/yV0aYnFu8S6FS9XIE.60Hvj3Uj1DGQtqgReV3EBpWhgbJl0wS",88),
  ('Barbara Rodriquez','change this',1);
  -- pass for admin is "Pass". This admin account can elevate users and change their passwords.
  -- You can create a new user for the user profile.
  
DROP TABLE Questions;