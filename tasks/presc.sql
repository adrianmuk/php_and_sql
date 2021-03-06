DROP DATABASE IF EXISTS prescriptions;
CREATE DATABASE prescriptions;
USE prescriptions;


-- NAME: MUKISA ADRIAN
-- REG NO. 2019/A/KCS/0012/G/F


CREATE TABLE Doctors(
    SSN INT NOT NULL AUTO_INCREMENT,
    Names VARCHAR(32) NOT NULL,
    Speciality VARCHAR(16) NOT NULL,
    Years_of_Experience VARCHAR(10) NOT NULL,
    PRIMARY KEY(SSN)
);

CREATE TABLE Patients(
    SSN INT NOT NULL AUTO_INCREMENT,
    Names VARCHAR(32) NOT NULL,
    Addresses VARCHAR(16) NOT NULL,
    Age VARCHAR(10) NOT NULL,
    Primary_Physician INT NOT NULL,
    PRIMARY KEY(SSN),
    FOREIGN KEY(Primary_Physician) REFERENCES Doctors(SSN)
);

CREATE TABLE Doctor_to_Patient(
    TabID INT NOT NULL AUTO_INCREMENT,
    Doctor INT NOT NULL,
    Patient INT NOT NULL,
    PRIMARY KEY(TabID),
    FOREIGN KEY(Doctor) REFERENCES Doctors(SSN),
    FOREIGN KEY(Patient) REFERENCES Patients(SSN)
);

CREATE TABLE Pharma_Co(
    PharmaID INT NOT NULL AUTO_INCREMENT,
    Names VARCHAR(100) NOT NULL,
    TelNo VARCHAR(15) NOT NULL,
    PRIMARY KEY(PharmaID)
);

CREATE TABLE Drug(
    Trade_Name VARCHAR(32) NOT NULL,
    Formula VARCHAR(100) NOT NULL,
    PharmaID INT NOT NULL,
    PRIMARY KEY(Trade_Name),
    FOREIGN KEY (PharmaID) REFERENCES Pharma_Co(PharmaID) ON DELETE CASCADE
);

CREATE TABLE Pharmacy(
    PharmID INT NOT NULL AUTO_INCREMENT,
    Names VARCHAR(100) NOT NULL,
    Addresses VARCHAR(16) NOT NULL,
    TelNo VARCHAR(20) NOT NULL,
    PRIMARY KEY(PharmID)
);

CREATE TABLE Pharmacy_to_Drug(
    TabID INT NOT NULL AUTO_INCREMENT,
    Drug VARCHAR(32) NOT NULL,
    PharmID INT NOT NULL,
    Price VARCHAR(100) NOT NULL,
    PRIMARY KEY(TabID),
    FOREIGN KEY(PharmID) REFERENCES Pharmacy(PharmID),
    FOREIGN KEY(Drug) REFERENCES Drug(Trade_Name)
);

CREATE TABLE Prescription(
    PresID INT NOT NULL AUTO_INCREMENT,
    PresDate DATE NOT NULL,
    Quantity VARCHAR(32) NOT NULL,
    Patient INT NOT NULL, 
    Drug VARCHAR(32) NOT NULL,
    Doctor INT NOT NULL,
    PRIMARY KEY(PresID),
    FOREIGN KEY(Patient) REFERENCES Patients(SSN),
    FOREIGN KEY(Drug) REFERENCES Drug(Trade_Name),
    FOREIGN KEY(Doctor) REFERENCES Doctors(SSN)
);

CREATE TABLE Contracts(
    ContID INT NOT NULL AUTO_INCREMENT,
    PharmaID INT NOT NULL,
    PharmID INT NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    ContractText VARCHAR(200) NOT NULL,
    Supervisor VARCHAR(32) NOT NULL,
    PRIMARY KEY(ContID),
    FOREIGN KEY(PharmaID) REFERENCES Pharma_Co(PharmaID),
    FOREIGN KEY(PharmID) REFERENCES Pharmacy(PharmID)
);