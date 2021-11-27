CREATE DATABASE resortdb;
USE resortdb;

CREATE TABLE resort(
    ResortID INT,
    ResortName CHAR(20),
    Region CHAR(10), 
    LowestRoomPrice INT,
    PRIMARY KEY (ResortID)
);

CREATE TABLE employee(
    EmployeeID INT,
    EmployeeName CHAR(20),
    MobileNumber INT,
    Email CHAR(20),
    BasicSalary DOUBLE NOT NULL,
    PRIMARY KEY (EmployeeID)
);