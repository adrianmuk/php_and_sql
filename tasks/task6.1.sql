DROP DATABASE IF EXISTS SALES;
CREATE DATABASE SALES;
USE SALES;


-- NAME: MUKISA ADRIAN
-- REG NO. 2019/A/KCS/0012/G/F


CREATE TABLE DISCOUNTRECORD(
    DiscountID INT AUTO_INCREMENT,
    CustomerName CHAR(36) NOT NULL,
    DiscountDate Date NOT NULL,
    Amount DOUBLE NOT NULL,
    PRIMARY KEY(DiscountID)
);

INSERT INTO DISCOUNTRECORD(CustomerName, DiscountDate, Amount) VALUES
('Kateregga Musa', '2012-10-06', 20000),
('Juma Adams', '2012-07-15', 15000),
('Hatimah Namugga', '2012-08-10', 30000);


SELECT *, DATE_FORMAT(DiscountDate, '%D   %M,  %Y') AS Dates,
DATEDIFF(SYSDATE(), DiscountDate) AS No_of_DiscountDays,
DATE_ADD(DiscountDate, INTERVAL 30 DAY) AS Month_After_DIscount,
CONCAT(DiscountID,'-', SUBSTRING(CustomerName, 1, 3))  AS DiscountCode  FROM  DISCOUNTRECORD;
SELECT AVG(Amount) AS AverageDiscount,
COUNT(*) AS Number_Of_Discounts FROM DISCOUNTRECORD;
