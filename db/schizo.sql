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

-- until here for the creation of the database, rest is testing

INSERT INTO Users(username, password) VALUES ('piet','$2y$10$KWWvOLHp/sFLCmFxY7eAjOKViN3Sbg1SUlD34VXCFITcbELzUcCsu');
INSERT INTO Questions(UserId,Q1,Q2,Q3,Q4,Q5) VALUES (2,3,4,2,1,4);
INSERT INTO Questions(UserId,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9) VALUES (1,3,5,3,2,1,3,5,3,2);
INSERT INTO Questions(UserId) VALUES (2);

INSERT INTO Users (Username,password,userRole)
VALUES
  ("Gay Benson","IUO67LMF8ID",88),
  ("Kay Peterson","RWO83TFC2LW",88),
  ("Keelie Barnes","RQY26BRF7MM",88),
  ("Basil Waters","ZRZ48OBK8VX",88),
  ("Chiquita Torres","VEU44ILG1QB",88);


SELECT UserId,Q1,Q2,Q3,Q4,Q5
FROM Questions
WHERE UserId = 2;

select * from Users;

select * from questions;

UPDATE Users
SET password = '$2y$10$Fs/PHZjoeBMyOJNEdGgm3Ocmy4aJM0MRKGhhrLpvu/JHuLfEp4GV2'
WHERE password = '$2y$10$NbPB8zDOqqAfu.S0uvhkouO.YS1s8oP8se5ukqJx/J8ht2bnYA3ya';

UPDATE Users
SET userRole = 88
WHERE Username = 'Admin';

UPDATE questions
SET Q1 = 5
WHERE UserId = '2';

DELETE FROM Users
WHERE username = 'Admin';

DELETE FROM Questions
WHERE userId = 2;

SELECT Users.userId, Users.username, TestId
FROM Users
RIGHT JOIN Questions
ON UserId = Users.UserId
WHERE Users.userId = 2;

DROP DATABASE schizo;

DROP TABLE Questions;