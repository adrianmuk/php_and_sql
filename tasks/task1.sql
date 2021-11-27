CREATE DATABASE companydb;
USE companydb;

CREATE TABLE payroll(
    EmployeeID INT, 
    SalaryMonth CHAR(10),
    BasicSalary DOUBLE NOT NULL,
    NSSF DOUBLE NOT NULL,
    PAYE DOUBLE NOT NULL, 
    NetPay DOUBLE NOT NULL, 
    PRIMARY KEY(employeeID, salaryMonth) 
);


