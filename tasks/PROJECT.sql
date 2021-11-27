DROP DATABASE IF EXISTS myproject;
CREATE DATABASE myproject;
USE myproject;

-- AMPEIRE RICHARD
-- ***MUKISA ADRIAN
-- MUSIIME ALOZIOUS

--staff table
CREATE TABLE staff(
    staffID INT AUTO_INCREMENT,
    staff_name char(35) NOT NULL,
    street_number varchar(35),
    apart_num varchar(35),
    city char(35),
    street varchar(35),
    zip_code varchar(35),
    staff_address varchar(100) AS (CONCAT_WS('-',street_number, apart_num, city,street,zip_code)),
    staff_dob date NOT NULL,
    staff_phonenumber int NOT NULL,
    job_type ENUM('Secretarial', 'IT-Support'),
    PRIMARY KEY(staffID)
);

--IT-Supports table
CREATE TABLE IT_Support(
    IT_SupportID int NOT NULL AUTO_INCREMENT,
    staff_name char(35) NOT NULL,
    technical_license int CHECK(technical_license<9550),
    PRIMARY KEY(IT_SupportID),
    FOREIGN KEY staff_name REFERENCES staff(staff_name)
);

--assistants table
CREATE TABLE assistants(
    assistID int AUTO_INCREMENT UNIQUE,
    assist_name char(35) NOT NULL,
    street_number varchar(35),
    apart_num varchar(35),
    city char(35),
    street varchar(35),
    zip_code varchar(35),
    assist_address varchar(100) AS (CONCAT_WS('-',street_number, apart_num, city,street,zip_code)),
    assist_dob date NOT NULL,
    assist_phonenumber int NOT NULL,
    PRIMARY KEY(assistID)
);

--faculties table
CREATE TABLE faculties(
    facID int AUTO_INCREMENT UNIQUE,
    fac_name char(35) NOT NULL,
    title char(35) NOT NULL,
    fac_rank ENUM('Professor','Lecturer'),
    street_number varchar(35),
    apart_num varchar(35),
    city char(35),
    street varchar(35),
    zip_code varchar(35),
    fac_address varchar(100) AS (CONCAT_WS('-',street_number, apart_num, city,street,zip_code)),
    fac_dob date NOT NULL,
    fac_phonenumber int NOT NULL,
    PRIMARY KEY(facID)
);

--professors table
CREATE TABLE professors(
    prof_name char(35) NOT NULL,
    fac_name char(35) NOT NULL,
    prof_rank ENUM('Full','Associate','Assistant'),
    PRIMARY KEY(prof_name),
    FOREIGN KEY fac_name REFERENCES faculties(fac_name)
);

--lecturers table
CREATE TABLE lecturers(
    lect_name char(35) NOT NULL,
    fac_name char(35) NOT NULL,
    lect_rank ENUM('Junior', 'Senior'),
    PRIMARY KEY(lect_name),
    FOREIGN KEY fac_name REFERENCES faculties(fac_name)
);

--students table
CREATE TABLE students(
    stdID int AUTO_INCREMENT UNIQUE,
    std_name char(35) NOT NULL,
    street_number varchar(35),
    apart_num varchar(35),
    city char(35),
    street varchar(35),
    zip_code varchar(35),
    std_address varchar(100) AS (CONCAT_WS('-',street_number, apart_num, city,street,zip_code)),
    std_dob date NOT NULL,
    std_phonenumber int NOT NULL,
    PRIMARY KEY(stdID)
);

--departments table
CREATE TABLE departments(
    deptID int,
    dept_name char(35) NOT NULL,
    num_of_courses int NOT NULL,
    num_of students int NOT NULL,
    facID INT ,
    PRIMARY KEY(deptID),
    FOREIGN KEY(facID) REFERENCES faculties(facID)
);

-- faculties per department table
CREATE TABLE fac_to_dept(
    fodID INT,
    facID INT,
    deptID INT,
    PRIMARY KEY(fodID),
    FOREIGN KEY (facID) REFERENCES faculties(facID),
    FOREIGN KEY (deptID) REFERENCES departments(deptID)
);

-- Trigger to count number of faculties per department
DELIMITER $$
CREATE TRIGGER fac_per_dept
BEFORE INSERT ON fac_to_dept
FOR EACH ROW
BEGIN
DECLARE num INT;
DECLARE min_fac = 15;

SELECT COUNT(*) INTO num FROM fac_to_dept WHERE facID = :NEW.facID;

IF :OLD.facID = :NEW.facID THEN RETURN;
ELSEIF num < min_fac THEN RAISE_APPLICATION_ERROR(-20000, 'Number of faculties per department should be at least 15.');
END IF;
END$$
DELIMITER ;

-- professors per department table
CREATE TABLE prof_to_dept(
    profdeptID INT,
    prof_name VARCHAR(),
    deptID INT,
    PRIMARY KEY(profdeptID),
    FOREIGN KEY(prof_name) REFERENCES professors(prof_name),
    FOREIGN KEY (deptID) REFERENCES departments(deptID)
);

--trigger for professors per dept
DELIMITER $$
CREATE TRIGGER prof_per_dept
BEFORE INSERT ON prof_to_dept
FOR EACH ROW
BEGIN
DECLARE num INT;
DECLARE min_prof INT = 5;

SELECT COUNT(*) INTO num FROM prof_to_dept WHERE prof_name = :NEW.prof_name;

IF :OLD.prof_name = :NEW.prof_name THEN RETURN;
ELSEIF num < min_prof THEN RAISE_APPLICATION_ERROR(-20000, 'Number of Professors per department should be at least 5.');
END IF;
END$$
DELIMITER ;

--courses table
CREATE TABLE courses(
    course_code varchar(35) NOT NULL,
    course_name char(35) NOT NULL,
    credit_hours time NOT NULL,
    facID int AUTO_INCREMENT UNIQUE,
    PRIMARY KEY(course_code, facID),
    FOREIGN KEY facID REFERENCES faculties(facID)
);
--courses per department
CREATE TABLE course_per_dept(
    course_code int NOT NULL,
    course_name char(35) NOT NULL,
    deptID int NOT NULL,
    PRIMARY KEY(course_code, deptID),
    FOREIGN KEY course_code REFERENCES course(course_code),
    FOREIGN KEY course_name REFERENCES course(course_name),
    FOREIGN KEY deptID REFERENCES departments(deptID)
);

--trigger for courses per department
DELIMITER $$
CREATE TRIGGER course_to_dept
BEFORE INSERT ON course_per_dept
FOR EACH ROW
BEGIN
DECLARE num int;
DECLARE min_courses int = 20;

SELECT COUNT(*) INTO num FROM course_per_dept WHERE course_name = :NEW.course_name;

IF :OLD.course_name = :NEW.course_name THEN RETURN;
ELSEIF num<min_courses THEN RAISE_APPLICATION_ERROR(-20000,'Number of courses must be atleast 20');
END IF;
END $$
DELIMITER ;

--Teaching assistants table
CREATE TABLE Teaching_assist(
    TA_ID int NOT NULL AUTO_INCREMENT,
    TA_name char(35) NOT NULL,
    soft_skill char(35) NOT NULL,
    PRIMARY KEY(TA_ID)
);

--teaching assistants per course table
CREATE TABLE TA_per_course(
    TA_ID int NOT NULL AUTO_INCREMENT,
    TA_name char(35) NOT NULL,
    course_name char(35) NOT NULL,
    PRIMARY KEY(TA_ID),
    FOREIGN KEY TA_ID REFERENCES Teaching_assist(TA_ID),
    FOREIGN KEY course_name REFERENCES course(course_name)
);

--trigger for teaching assistants per course
DELIMITER $$
CREATE TRIGGER TA_to_course
BEFORE INSERT ON TA_per_course
FOR EACH ROW
BEGIN
DECLARE num int
DECLARE max_courses int = 3;

SELECT COUNT(*) INTO num FROM TA_per_course WHERE TA_name = :NEW.TA_name;

IF :OLD.TA_name = :NEW.TA_name THEN RETURN;
ELSEIF num> maxcourses THEN RAISE_APPLICATION_ERROR(-20000,'Number of teaching assistants should not be more than 3');
END IF;
END $$
DELIMITER ;