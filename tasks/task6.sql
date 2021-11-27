DROP DATABASE IF EXISTS schools;
CREATE DATABASE schools;
USE schools;


-- NAME: MUKISA ADRIAN
-- REG NO. 2019/A/KCS/0012/G/F


CREATE TABLE students(
    StdID INT NOT NULL AUTO_INCREMENT, 
    StdName VARCHAR(32) NOT NULL,
    RegNo VARCHAR(32) NOT NULL,
    Gender CHAR(2) NOT NULL,
    Marks DOUBLE NOT NULL,
    PRIMARY KEY(StdID)
);

INSERT INTO students(StdName, RegNo, Gender, Marks) VALUES
('MUKISA ADRIAN', '2019/A/KCS/0012/G/F', 'M', 91),
('MUSIIME ALOZIOUS', '2019/A/KCS/0013/G/F', 'M', 77),
('MURUNGI JOHNBREBEUF', '2019/A/KCS/0011/G/F', 'M', 88),
('KAKOOZA AZIZI', '2019/A/KCS/0010/G/F', 'M', 100),
('MUSASIZI STUART', '2019/A/KCS/0005/G/F', 'M', 98),
('MUSIMENTA FRED', '2019/A/KCS/0016/G/F', 'M', 63),
('KAKOOZA DAVID', '2019/A/KCS/0019/G/F', 'M', 79),
('MURUNGI EMMANUEL', '2019/A/KCS/0018/G/F', 'M', 80);

DELIMITER $$
CREATE FUNCTION Grades(Marks DOUBLE) RETURNS CHAR(20)

BEGIN

IF Marks>=80 && Marks<=100 THEN RETURN 'A';
ELSEIF Marks>=75 THEN RETURN 'B+';
ELSEIF Marks>=70 THEN RETURN 'B';
ELSEIF Marks>=65 THEN RETURN 'C+';
ELSEIF Marks>=60 THEN RETURN 'C';
ELSEIF Marks>=55 THEN RETURN 'C-';
ELSEIF Marks>=50 THEN RETURN 'D';
ELSEIF Marks>=00 THEN RETURN 'F';
ELSE RETURN 'WRONG MARK';
END IF;

END $$

DELIMITER ;
SELECT *, Grades(Marks) AS Grade FROM `students`;