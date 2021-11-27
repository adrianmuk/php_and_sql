USE companydb;

CREATE TABLE agent(
    AgentID INT,
    AgentName CHAR(20),
    MobileNumber CHAR(15),
    Email CHAR(20),
    PhysicalAddress CHAR(20),
    CountryOfSpeciality CHAR(10),
    PRIMARY KEY (AgentID)
);