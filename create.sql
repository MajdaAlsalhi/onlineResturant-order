create database onlinerestaurant;
use onlinerestaurant;

create table user( 
id int(11)primary key uniqe,
username varchar(20),
password  varchar(20),
email varchar(20),
gender ENUM ('M','F'))Engine=InnoDB;

create table booking (
id int(10) primary key,
resturantN varchar(20),
plase varchar(20),
time varchar(10), 
regest ENUM (''))Engine=InnoDB;








