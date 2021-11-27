-- CREATING THE DATABASE
CREATE DATABASE kab;

USE kab;

-- CREATING THE FACULTIES TABLE
CREATE TABLE faculties(
    fac_ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    birthdate DATE,
    phone VARCHAR(20),
    street_number VARCHAR(100),
    apartment_num VARCHAR(100),
    city VARCHAR(50),
    street VARCHAR(100),
    zipcode VARCHAR(10),
    address VARCHAR(200) AS (CONCAT_WS(", ", apartment_num, street_number, street, city, zipcode)),
    kind ENUM('Professor', 'Lecturer'),
    PRIMARY KEY(fac_ID)
);

-- PROFESSORS TABLE
CREATE TABLE professors(
    prof_name VARCHAR(100) UNIQUE,
    rank ENUM("Full", "Associate", "Assistant"),
    FOREIGN KEY(prof_name) REFERENCES faculties(name)
);

-- LECTURERS TABLE
CREATE TABLE lecturers(
    lec_name VARCHAR(100) UNIQUE,
    rank ENUM("Junior", "Senior"),
    FOREIGN KEY(lec_name) REFERENCES faculties(name)
);

-- CREATING THE ROLES TABLE
CREATE TABLE roles(
    
)

-- CREATING THE STAFF TABLE
CREATE TABLE staff(
    staff_ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    birthdate DATE,
    phone VARCHAR(20),
    street_number VARCHAR(100),
    apartment_num VARCHAR(100),
    city VARCHAR(50),
    street VARCHAR(100),
    zipcode VARCHAR(10),
    address VARCHAR(200) AS (CONCAT_WS(", ",apartment_num, street_number, street, city, zipcode)),
    job_kind ENUM('Secretarial', 'IT-Support'),
    PRIMARY KEY(staff_ID)
);

-- CREATING THE ASSISTANTS TABLE
CREATE TABLE assistants(
    assist_ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    birthdate DATE,
    phone VARCHAR(20),
    street_number VARCHAR(100),
    apartment_num VARCHAR(100),
    city VARCHAR(50),
    street VARCHAR(100),
    zipcode VARCHAR(10),
    address VARCHAR(200) AS (CONCAT_WS(", ",apartment_num, street_number, street, city, zipcode)),
    kind ENUM('Teaching Assistant', 'Research Assistant'),

    PRIMARY KEY(assist_ID)
);

-- TEACHING ASSISTANTS
CREATE TABLE teaching_assistants(
    id INT,
    assist_name VARCHAR(100) UNIQUE,
    PRIMARY KEY(id),
    FOREIGN KEY(assistnat_name) REFERENCES assistants(name)
);

-- SOFT SKILLS TABLE
CREATE TABLE soft_skills(
    teaching_assistant VARCHAR(100),
    soft_skill VARCHAR(100) NOT NULL,
    FOREIGN KEY(teaching_assistant) REFERENCES teaching_assistants(assist_name)
);


-- CREATING THE STUDENTS TABLE
CREATE TABLE students(
    std_ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    birthdate DATE,
    phone VARCHAR(20),
    street_number VARCHAR(100),
    apartment_num VARCHAR(100),
    city VARCHAR(50),
    street VARCHAR(100),
    zipcode VARCHAR(10),
    address VARCHAR(200) AS (CONCAT_WS(", ",apartment_num, street_number, street, city, zipcode)),
    PRIMARY KEY(std_ID)
);

-- CREATING THE COURSES TABLE
CREATE TABLE courses(
    course_code INT CHECK(course_code BETWEEN 101 AND 705),
    course_name VARCHAR(50) UNIQUE,
    credit_hour VARCHAR(50),
    PRIMARY KEY(course_code)
);

-- CREATING THE DEPARTMENTS TABLE
CREATE TABLE departments(
    dept_name VARCHAR(100),
    num_courses INT,
    num_students INT,
    deputy_dean VARCHAR(100),
    chair VARCHAR(100),
    PRIMARY KEY(dept_name),
    FOREIGN KEY(deputy_dean) REFERENCES professors(prof_name),
    FOREIGN KEY(chair) REFERENCES professors(prof_name)
);

-- FACULTIES PER DEPARTMENT TABLE
CREATE TABLE fac_per_dept(
    id INT AUTO_INCREMENT,
    department VARCHAR(100) NOT NULL,
    faculty_name VARCHAR(100) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(department) REFERENCES departments(dept_name),
    FOREIGN KEY(faculty_name) REFERENCES faculties(name),

);

-- DEPARTMENT PROFESSORS
CREATE TABLE dept_profs(
    prof_name VARCHAR(100),
    dept_name VARCHAR(100),
    FOREIGN KEY(prof_name) REFERENCES professors(prof_name),
    FOREIGN KEY(dept_name) REFERENCES departments(dept_name)
);

-- IT SUPPORT TABLE
CREATE TABLE it_support(
    id INT AUTO_INCREMENT,
    staff_name VARCHAR(100) UNIQUE,
    technical_licenece_no INT CHECK(technical_licenece_no < 9550),
    PRIMARY KEY(id),
    FOREIGN KEY(staff_name) REFERENCES staff(name),
);

-- STUDENTS PER COURSE
CREATE TABLE studets_per_course(
    student VARCHAR(100) ,
    course VARCHAR(100),
    FOREIGN KEY(course) REFERENCES courses(course_code),
    FOREIGN KEY(student) REFERENCES students(name)
);

-- COURSES PER DEPARTMENT TABLE
CREATE TABLE courses_per_dept(
    course_name VARCHAR(100),
    department VARCHAR(100),
    FOREIGN KEY(course_name) REFERENCES courses(course_name),
    FOREIGN KEY(department) REFERENCES departments(dept_name)
);


-- IT SUPPORTS PER DEPARTMENT
CREATE TABLE it_supports_per_dept(
    it_support VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    FOREIGN KEY(it_support) REFERENCES it_support(staff_name),
    FOREIGN KEY(department) REFERENCES departments(dept_name)
);


-- CREATING A TRIGGER TO CHECK IF THE TABLE 
DELIMITER $$
CREATE TRIGGER max_five
BEFORE INSERT ON it_supports_per_dept
FOR EACH ROW
BEGIN
    DECLARE cnt INT;

    SELECT count(*) INTO cnt FROM it_supports_per_dept WHERE department = @NEW.it_support;

    IF cnt >=5 THEN
        SET @NEW.it_support = NULL;
    END IF;
END$$
