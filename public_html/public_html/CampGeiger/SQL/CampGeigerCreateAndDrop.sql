#Creating database
DROP DATABASE IF EXISTS`CampGeiger2019`;
CREATE DATABASE CampGeiger2019;

#If the table exist delete it and then create it
USE bsmith257_my_guitar_shop1;
#USE CampGeiger2019;
DROP TABLE IF EXISTS `Geiger2019`;
#Creating table after the drop
CREATE TABLE `Geiger2019`(
ActivityName 					VARCHAR (50)  	UNIQUE,
Location 							VARCHAR (50) 	NULL,
ActivityTime						VARCHAR (100) NULL,
ActivityLength					VARCHAR (25) 	NULL,
RecommendedFor			VARCHAR (100) NULL,
Materials 						VARCHAR (100) NULL,
Costs 								VARCHAR (20) 	NULL,
PreReq							VARCHAR (400) NULL
);

SELECT * FROM Geiger2019;

USE CampGeiger2019;
SELECT COUNT(ActivityName) AS TotalActivities
FROM Geiger2019;