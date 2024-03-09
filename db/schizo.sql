CREATE DATABASE schizo;
USE schizo;

CREATE TABLE Users (
	UserId int NOT NULL AUTO_INCREMENT,
    Username varchar(128) UNIQUE NOT NULL,
    password varchar(128) NOT NULL,
<<<<<<< Updated upstream
=======
    userRole int, -- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
>>>>>>> Stashed changes
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
Q6 int(1),
Q7 int(1),
Q8 int(1),
Q9 int(1),
Q10 int(1),
PRIMARY KEY(TestId),
FOREIGN KEY(UserId) REFERENCES Users(UserId)
);

INSERT INTO Users(username, password) VALUES ('piet','$2y$10$KWWvOLHp/sFLCmFxY7eAjOKViN3Sbg1SUlD34VXCFITcbELzUcCsu');
INSERT INTO Questions(UserId,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) VALUES (2,3,4,2,1,4,1,5,3,1,3);
INSERT INTO Questions(UserId,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9) VALUES (1,3,5,3,2,1,3,5,3,2);
INSERT INTO Questions(UserId) VALUES (1);


SELECT Users.UserId,Questions.Q1,Questions.Q2,Questions.Q3,Questions.Q4,Questions.Q5,Questions.Q6,Questions.Q7,Questions.Q8,Questions.Q9,Questions.Q10
FROM Users
RIGHT JOIN Questions
ON Questions.UserId = Users.UserId;

select * from Users;

UPDATE Users
SET password = '$2y$10$Fs/PHZjoeBMyOJNEdGgm3Ocmy4aJM0MRKGhhrLpvu/JHuLfEp4GV2'
WHERE password = '$2y$10$NbPB8zDOqqAfu.S0uvhkouO.YS1s8oP8se5ukqJx/J8ht2bnYA3ya';

SET userRole = 88
WHERE Username = 'Admin';

DELETE FROM Users
WHERE username = 'Admin';

DELETE FROM Questions
WHERE userId = 1;

DROP DATABASE schizo;

DROP TABLE Questions;