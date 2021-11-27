CREATE TABLE `customer` (
  `customer_Id` int(11) NOT NULL,
  `customer_hobbies` varchar(60) NOT NULL,
  `best_dish` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `discount_record` (
  `Discount_Id` int(11) NOT NULL,
  `CustomerName` varchar(45) NOT NULL,
  `DiscountDate` date DEFAULT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `discount_record` (`Discount_Id`, `CustomerName`, `DiscountDate`, `Amount`) VALUES
(1, 'Kateregga Musa', '2012-06-10', 20000),
(2, 'Juma Adams', '2012-07-15', 15000),
(3, 'Hatimah Namugga', '2012-08-10', 30000);


CREATE TABLE `employee` (
  `Employee_id` int(11) DEFAULT NULL,
  `Employee_Name` varchar(45) NOT NULL,
  `employeeSport` varchar(40) NOT NULL,
  `employee_Medals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee1`
--

CREATE TABLE `employee1` (
  `Employee_id` int(11) DEFAULT NULL,
  `EmployeeName` varchar(30) NOT NULL,
  `MobileNumber` varchar(30) DEFAULT NULL,
  `basicSalary` double NOT NULL,
  `employeeSport` varchar(30) DEFAULT NULL,
  `employeeMedals` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee1`
--

INSERT INTO `employee1` (`Employee_id`, `EmployeeName`, `MobileNumber`, `basicSalary`, `employeeSport`, `employeeMedals`) VALUES
(1, 'Kato Hussein', '256701758855', 250000, 'Hockey', '2'),
(2, 'Adam Sebbit', '256741585552', 300000, NULL, NULL),
(3, 'Okell Joseph', NULL, 200000, 'Rugby', '1'),
(4, 'Adunga Juma', NULL, 100000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeees`
--

CREATE TABLE `employeees` (
  `EmployeeID` int(11) NOT NULL,
  `employeeName` varchar(30) NOT NULL,
  `BasicSalary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeees`
--

INSERT INTO `employeees` (`EmployeeID`, `employeeName`, `BasicSalary`) VALUES
(1, 'KAKOOZA A', 3000000),
(2, 'KIGGUNDU ALI', 4000000),
(3, 'ALVAN SETH WANI', 500000),
(4, 'YAHYA GUGGWA', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `golfclubmember`
--

CREATE TABLE `golfclubmember` (
  `MemberId` int(11) NOT NULL,
  `MemberName` varchar(30) NOT NULL,
  `MemberMobile` varchar(30) DEFAULT NULL,
  `ExpirelyDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `employeeID` int(11) NOT NULL,
  `salaryMonth` char(10) NOT NULL,
  `basicSalary` double NOT NULL,
  `nssf` double NOT NULL,
  `paye` double NOT NULL,
  `netPay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salesdata`
--

CREATE TABLE `salesdata` (
  `SalesId` int(11) NOT NULL,
  `SDate` date NOT NULL,
  `FoodID` int(11) NOT NULL,
  `Amount` double NOT NULL,
  `EmployeeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesdata`
--

INSERT INTO `salesdata` (`SalesId`, `SDate`, `FoodID`, `Amount`, `EmployeeId`) VALUES
(1, '2012-05-31', 1, 3000, 1),
(2, '2012-05-31', 2, 5000, 2),
(3, '2012-04-30', 1, 6000, 1),
(4, '2012-04-30', 2, 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `studentid` int(255) NOT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `course_work` int(255) DEFAULT NULL,
  `exam_marks` int(255) DEFAULT NULL,
  `Final_marks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`studentid`, `studentName`, `course_work`, `exam_marks`, `Final_marks`) VALUES
(1, 'KABUGO ALI', 80, 80, 80),
(2, 'MATOVU JOSHUA', 60, 90, 81),
(3, 'MUTEBI PETER', 75, 89, 85),
(4, 'NIWAMANYA JAMES', 90, 80, 83),
(5, 'NAMUTEBI AISHA', 79, 96, 91),
(6, 'BYAMUKAMA JOHN', 75, 89, 85),
(7, 'KAWEESI JUMA', 60, 50, 53),
(8, 'NINSIIMA JANE', 65, 69, 68),
(9, 'MUKISA PAUL', 55, 65, 62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_Id`);

--
-- Indexes for table `discount_record`
--
ALTER TABLE `discount_record`
  ADD PRIMARY KEY (`Discount_Id`);

--
-- Indexes for table `employeees`
--
ALTER TABLE `employeees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `golfclubmember`
--
ALTER TABLE `golfclubmember`
  ADD PRIMARY KEY (`MemberId`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`employeeID`,`salaryMonth`);

--
-- Indexes for table `salesdata`
--
ALTER TABLE `salesdata`
  ADD PRIMARY KEY (`SalesId`,`FoodID`,`EmployeeId`);

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount_record`
--
ALTER TABLE `discount_record`
  MODIFY `Discount_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeees`
--
ALTER TABLE `employeees`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `golfclubmember`
--
ALTER TABLE `golfclubmember`
  MODIFY `MemberId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesdata`
--
ALTER TABLE `salesdata`
  MODIFY `SalesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentmarks`
--
ALTER TABLE `studentmarks`
  MODIFY `studentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
