drop database if exists guests_Booked;

create database guests_Booked;

use guests_Booked;

create table guests_status(
	guest_id int auto_increment primary key,
	guest_fullname CHAR(50),
    guest_email VARCHAR(50),
    guest_roomType CHAR(50),
    guest_specialRequests CHAR(100),
    guest_checkin datetime, 
    guest_checkout date
);


