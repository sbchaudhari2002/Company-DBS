DROP TABLE DEPARTMENT;
DROP TABLE EMPLOYEE;
DROP TABLE TEAM;
DROP TABLE PROJECT;
DROP TABLE PRODUCT;
DROP TABLE CUSTOMER;
CREATE TABLE DEPARTMENT(dept_id int primary key,department_name varchar(20),manager_id INT,location varchar(20));

CREATE TABLE EMPLOYEE(
empid int primary key,first_name varchar(20),middle_name varchar(20),last_name varchar(20),username varchar(25),
pass varchar(20),phone_number varchar(20),hire_date date not null ,job_title varchar(10) not null,salary INT,
department_id int,manager_id int,address varchar(50),skills varchar(20),FOREIGN KEY (department_id) REFERENCES
DEPARTMENT(dept_id));

CREATE TABLE PRODUCT(proid int primary key,pro_name varchar(20),pro_price float);

CREATE TABLE CUSTOMER(
cid int primary key,cfirst_name varchar(20),cmiddle_name varchar(20),clast_name varchar(20),cemail varchar(25),
custusername varchar(25),contact varchar(20),prodid int ,FOREIGN KEY (prodid) REFERENCES PRODUCT(proid));

CREATE TABLE PROJECT(
pr_id int primary key,pr_name varchar(20),date_of_start date not null , deadline date not null , pid int,
FOREIGN KEY (pid) REFERENCES CUSTOMER(cid)
);

CREATE TABLE TEAM(
team_id int primary key,team_name varchar(20),teamemp_id int , teammgr_id int , tpr_id int ,
FOREIGN KEY (teamemp_id) REFERENCES EMPLOYEE(empid),FOREIGN KEY (teammgr_id) REFERENCES EMPLOYEE(empid),
FOREIGN KEY (tpr_id) REFERENCES PROJECT(pr_id));



insert into DEPARTMENT values(20, 'Marketing' , 201, 'TORONTO');
insert into DEPARTMENT values(10, 'Administration' , 200, 'SEATTLE');
insert into DEPARTMENT values(50, 'Shipping' , 124 ,'SOUTH SAN FRANSCISCO');
insert into DEPARTMENT values(60, 'IT' , 103, 'SOUTHLAKE');
insert into DEPARTMENT values(80, 'Sales' ,149 ,'OXFORD');
insert into DEPARTMENT values(90, 'Executive' ,100,'SEATTLE');
insert into DEPARTMENT values(110, 'Accounting' , 205,'SEATTLE');
insert into DEPARTMENT values(190, 'Contracting' ,null ,'SEATTLE');


insert into EMPLOYEE values(100,'Steven','Alexander','king','SKING','SKING','515.123.4567','1987-07-17','AD_PRES',24000,90, null ,'New York','C');
insert into EMPLOYEE values(101,'Neena','Arun','Kochhar','NKOCHHAR','NKOCHHAR','515.123.4568','1989-09-21','AD_VP',17000,90,100,'Washington DC','Java');
insert into EMPLOYEE values(102,'Lex','Zeu','De Haan','LDEHAAN','LDEHAAN','515.123.4569','1993-01-13','AD_VP',17000,90,100,'New York','Python');
insert into EMPLOYEE values(103,'Alexander','Alars','Hunold','AHUNOLD','AHUNOLD','590.423.4567','1990-01-03','IT_PROG',9000,60,102,'Chicago','SQL');
insert into EMPLOYEE values(104,'Bruce','Banner','Ernst','BERNST','BERNST','590.423.4568','1991-05-21','IT_PROG',6000,60 ,103,'Boston','ReactJS');
insert into EMPLOYEE values(107,'Diana','James','Lorentz','DLORENTZ','DLORENTZ','590.423.5567','1999-02-07','IT_PROG',42000,60,103,'Washington DC','NodeJS');
insert into EMPLOYEE values(124,'Kevin','William','Mourgos','KMOURGOS','KMOURGOS','650.123.5234','1999-11-16','ST_MAN',5800,50,100,'New York','SQL');
insert into EMPLOYEE values(141,'Trenna','William','Rajs','TRAJS','TRAJS','650.123.8009','1995-10-17','ST_CLERK',3500,50, 124,'Houston','C#');
insert into EMPLOYEE values(142,'Curtis','James','Davies','CDAVIES','CDAVIES','650.121.2994','1997-01-29','ST_CLERK',3100,50,124,'Washington DC','Java');
insert into EMPLOYEE values(143,'Randall','Oliver','Matos','RMATOS','RMATOS','650.121.2874','1998-03-15','ST_CLERK',2600,50 , 124,'Italy','Accountancy');
insert into EMPLOYEE values(144,'Peter','Noah','Vargas','PVARGAS','PVARGAS','650.123.8009','1998-07-09','ST_CLERK',2500,50, 124 ,'Chicago','Accountancy');
insert into EMPLOYEE values(149,'Eleni','Liam','Zlotkey','PVARGAS','PVARGAS','650.123.8009','1998-07-09','SA_MAN',10500,80, 100,'New York','Web Developer');
insert into EMPLOYEE values(174,'Ellen','Roger','Abel','PVARGAS','PVARGAS','650.123.8009','1998-07-09','SA_REP',11000,80, 149,'Boston','Excel');
insert into EMPLOYEE values(176,'Jonathon','Odin','Taylor','PVARGAS','PVARGAS','650.123.8009','1998-07-09','SA_REP',8600,80 , 149,'Houston','Excel');
insert into EMPLOYEE values(178,'Kimberely','Oliver','Grant','RGRANI','RGRANI','011.44.1044.425200','1999-05-04','SA_REP',7040,NULL,149,'Houston','Data Scientist');
insert into EMPLOYEE values(200,'Jennifer','James','Whalen','JWHALEN','JWHALEN','515.123.4444','1987-09-17','AD_ASST',4400,10,101,'New York','Management');
insert into EMPLOYEE values(201,'Michalen','Michael','Hartstein','MHARTSTE','MHARTSTE','515.123.5555','1996-02-17','MK_MAN',13000,20,100,'Chicago','Data Analytics');
insert into EMPLOYEE values(202,'Pat','Dray','Fay','PFAY','PFAY','603.123.6666','1997-08-17','MK_REP',6000,20,201,'Washington DC','SQL');
insert into EMPLOYEE values(205,'Shelley','Drew','Higgins','SHIGGINS','SHIGGINS','515.123.8080','1994-06-07','AC_MGR' ,12000 ,110,101,'Boston','Accountancy');
insert into EMPLOYEE values(206,'William','Kewin','Gietz','WGIETZ','WGIETZ','515.123.8181','1994-07-07','AC_ACCOUNT',8300,110,205,'New York','Android');


INSERT INTO PRODUCT VALUES(1010,'Laptop',45000.00);
INSERT INTO PRODUCT VALUES(1020,'PCs',54000.00);
INSERT INTO PRODUCT VALUES(1030,'Hard Drive',25000.00);
INSERT INTO PRODUCT VALUES(1040,'Graphic Card',35000.00);
INSERT INTO PRODUCT VALUES(1050,'Optical Drive',35000.00);
INSERT INTO PRODUCT VALUES(1060,'Motherboard',40000.00);
INSERT INTO PRODUCT VALUES(1070,'RAM Modules',20000.00);
INSERT INTO PRODUCT VALUES(1080,'Preprocessors (CPU)',32000.00);
INSERT INTO PRODUCT VALUES(1090,'Printers',56000.00);
INSERT INTO PRODUCT VALUES(1110,'System Fans',34000.00);
INSERT INTO PRODUCT VALUES(1120,'Webcam',10000.00);
INSERT INTO PRODUCT VALUES(1130,'Scanners',60000.00);
INSERT INTO PRODUCT VALUES(1140,'Headphones',25000.00);
INSERT INTO PRODUCT VALUES(1150,'Memory Card',8000.00);
INSERT INTO PRODUCT VALUES(1160,'Speakers',12000.00);
INSERT INTO PRODUCT VALUES(1170,'Digital Camera',47000.00);
INSERT INTO PRODUCT VALUES(1180,'Microphone',5000.00);
INSERT INTO PRODUCT VALUES(1190,'Power Supply',51000.00);
INSERT INTO PRODUCT VALUES(1210,'USB Devices',400.00);
INSERT INTO PRODUCT VALUES(1220,'Network Card',43000.00);



INSERT INTO CUSTOMER VALUES(1530,'Amit','Kailash','Singh','ak@gmail.com','AMSI','91.1222.3456.21',1090);
INSERT INTO CUSTOMER VALUES(1531,'Anuj','Rakesh','Goel','ar@gmail.com','ANGO','91.1256.3786.24',1140);
INSERT INTO CUSTOMER VALUES(1532,'Akshay','Sannat','Malhotra','as@gmail.com','AKMA','91.6822.7856.34',1010);
INSERT INTO CUSTOMER VALUES(1533,'Amar','Yogesh','Tripathi','ay@gmail.com','AMTR','91.3256.7956.56',1010);
INSERT INTO CUSTOMER VALUES(1534,'Nitin','Eehwar','Pradsad','ne@gmail.com','NIPR','91.2567.3786.71',1020);
INSERT INTO CUSTOMER VALUES(1535,'Sanket','Jatin','Hirani','sj@gmail.com','SAHI','91.4521.3442.81',1090);
INSERT INTO CUSTOMER VALUES(1536,'Dhruv','Yashwant','Yadav','dya@gmail.com','DHYA','91.7222.3856.11',1120);
INSERT INTO CUSTOMER VALUES(1537,'Dipesh','Yuvraj','Yadav','dyu@gmail.com','DIYA','91.1625.7946.61',1120);
INSERT INTO CUSTOMER VALUES(1538,'Karan','Shantanu','Dutt','ks@gmail.com','KADU','91.3452.3455.91',1140);
INSERT INTO CUSTOMER VALUES(1539,'Sumit','Arjun','Singh','sa@gmail.com','SUSI','91.9012.3455.41',1170);
INSERT INTO CUSTOMER VALUES(1540,'Frank','William','Anthony','fw@gmail.com','FRAN','91.7842.3454.57',1040);
INSERT INTO CUSTOMER VALUES(1541,'Rajesh','Sundar','Verma','rs@gmail.com','RAVE','91.5782.3453.19',1220);
INSERT INTO CUSTOMER VALUES(1542,'Kaushal','Naman','Sharma','kn@gmail.com','KASH','91.2312.3453.25',1090);
INSERT INTO CUSTOMER VALUES(1543,'Arun','Shaam','Kishore','ash@gmail.com','ARKI','91.0709.3452.26',1130);
INSERT INTO CUSTOMER VALUES(1544,'Varun','Dawid','Dhawan','vd@gmail.com','VADH','91.3923.3451.64',1170);
INSERT INTO CUSTOMER VALUES(1545,'Jayant','Vinod','Verma','jv@gmail.com','JAVE','91.4013.3450.63',1010);
INSERT INTO CUSTOMER VALUES(1546,'Vedant','Mangesh','Sarnobat','vm@gmail.com','VESA','91.5646.3457.14',1020);
INSERT INTO CUSTOMER VALUES(1547,'Devansh','Chandrakant','Deshmukh','dc@gmail.com','DEDE','91.2134.3454.09',1130);
INSERT INTO CUSTOMER VALUES(1548,'Avneesh','Swapnil','Zarekar','asw@gmail.com','AVZA','91.5745.3452.28',1140);
INSERT INTO CUSTOMER VALUES(1549,'Bhuvan','Avnidra','Bam','bb@gmail.com','BBKI','91.3455.8956.95',1020);


INSERT INTO PROJECT VALUES (001,'TECH-SAVVY','2019-08-12','2020-06-13',1536);
INSERT INTO PROJECT VALUES (002,'TECHNOFY','2019-03-24','2020-05-12',1537);
INSERT INTO PROJECT VALUES (003,'IAMGLABS','2019-01-13','2020-04-15',1530);
INSERT INTO PROJECT VALUES (004,'OYSTER','2019-04-21','2020-03-24',1546);
INSERT INTO PROJECT VALUES (005,'FORSK','2019-05-13','2021-06-25',1549);
INSERT INTO PROJECT VALUES (006,'NEWTON','2019-07-11','2021-10-12',1548);
INSERT INTO PROJECT VALUES (007,'IOTLABS','2019-08-09','2020-12-02',1533);
INSERT INTO PROJECT VALUES (008,'TECHLABS','2019-09-01','2020-01-28',1539);
INSERT INTO PROJECT VALUES (009,'KINGDOM','2019-12-12','2022-09-13',1546);
INSERT INTO PROJECT VALUES (010,'TECHWORLD','2019-11-24','2021-11-17',1532);



INSERT INTO TEAM VALUES (1700,'HOF',107,100,002);
INSERT INTO TEAM VALUES (1705,'GAMECHANGER',202,103,004);
INSERT INTO TEAM VALUES (1710,'STARKEXPO',103,101,001);
INSERT INTO TEAM VALUES (1715,'INNOVATION',176,103,003);
INSERT INTO TEAM VALUES (1720,'BESTOFALL',206,201,008);
INSERT INTO TEAM VALUES (1725,'ALLROUNDER',143,205,009);
INSERT INTO TEAM VALUES (1730,'DEMANDING',149,141,010);
INSERT INTO TEAM VALUES (1735,'REWARDED',144,102,005);
INSERT INTO TEAM VALUES (1740,'LIMITLESS',200,149,006);
INSERT INTO TEAM VALUES (1745,'FUTURISTIC',178,124,007);