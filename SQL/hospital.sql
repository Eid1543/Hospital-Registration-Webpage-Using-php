/* Creating tables */

CREATE TABLE DEPARTMENT (

Dnum INT  NOT NULL , 
name VARCHAR(20) NOT NULL ,

PRIMARY KEY (Dnum)
); 

 

CREATE TABLE Nurse (

Ssn INT NOT NULL , 
name VARCHAR(20) NOT NULL  , 
Dnum INT   , 

PRIMARY KEY (Ssn) ,
foreign key (Dnum) references Department (Dnum) on delete set null 

); 


CREATE TABLE Doctor (

Ssn INT PRIMARY KEY NOT NULL , 
name VARCHAR(20) NOT NULL  , 
Speciality VARCHAR(20) NOT NULL  , 
Dnum INT , 

foreign key (Dnum) references Department (Dnum) on delete set null 

); 


CREATE TABLE Patient (

Ssn INT PRIMARY KEY NOT NULL , 
Fname VARCHAR(20) NOT NULL  , 
Lname VARCHAR(20) NOT NULL , 
age int not null , 
sex VARCHAR(20) NOT NULL ,
Dssn INT , 

foreign key (Dssn) references Doctor (ssn) on delete set null 

); 


CREATE TABLE Medical_Record (

id INT PRIMARY KEY NOT NULL , 
problem VARCHAR(20) NOT NULL , 
Pssn INT , 

foreign key (Pssn) references Patient (ssn) on delete set null 

); 