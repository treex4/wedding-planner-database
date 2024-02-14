-- Drop any existing tables
drop table vendors1 cascade constraints;
drop table vendors2 cascade constraints;
drop table vendors3 cascade constraints;
drop table vendors4 cascade constraints;
drop table vendors5 cascade constraints;
drop table vendors6 cascade constraints;
drop table vendors7 cascade constraints;
drop table floral_decor cascade constraints;
drop table photo_video cascade constraints;
drop table catering cascade constraints;
drop table music cascade constraints;
drop table employ_employee1 cascade constraints;
drop table employ_employee2 cascade constraints;
drop table employ_employee3 cascade constraints;
drop table venue cascade constraints;
drop table outsource cascade constraints;
drop table location_at cascade constraints;
drop table permits_obtains cascade constraints;
drop table event_offer cascade constraints;
drop table attendees cascade constraints;
drop table getting_married_1 cascade constraints;
drop table getting_married_2 cascade constraints;
drop table host cascade constraints;
drop table has cascade constraints;
drop table contract cascade constraints;

-- Create tables
CREATE TABLE vendors1 (
    service_id      CHAR(10) PRIMARY KEY,
	company_name    VARCHAR(20)
);

CREATE TABLE vendors2 (
    service_id      CHAR(10) PRIMARY KEY,
	cost            VARCHAR(10),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE vendors3 (
    service_id      CHAR(10) PRIMARY KEY,
	building_num    VARCHAR(6),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE vendors4 ( 
	city 		    VARCHAR(20) PRIMARY KEY,
	prov 		    VARCHAR(20)
);

CREATE TABLE vendors5 (
    pcode 		    VARCHAR(6) PRIMARY KEY,
	city 		    VARCHAR(20),
	FOREIGN KEY(city) REFERENCES vendors4(city)
);

CREATE TABLE vendors6 (
    street          VARCHAR(20) PRIMARY KEY,
	pcode 		    VARCHAR(6),
	FOREIGN KEY(pcode) REFERENCES vendors5(pcode)
);

CREATE TABLE vendors7 (
    service_id      CHAR(10) PRIMARY KEY,
	street          VARCHAR(20), 
	FOREIGN KEY(street) REFERENCES vendors6(street),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE floral_decor (
    service_id 	CHAR(10) PRIMARY KEY,
	flower 		VARCHAR(20),
	colour		VARCHAR(20),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE photo_video (
    service_id	CHAR(10) PRIMARY KEY,
	camera 	    VARCHAR(20),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE catering (
    service_id	CHAR(10) PRIMARY KEY,
	num_orders	INTEGER, 
	cuisine 	VARCHAR(20),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE music (
    service_id	CHAR(10) PRIMARY KEY,
	genre 		VARCHAR(20),
	FOREIGN KEY(service_id) REFERENCES vendors1(service_id)
);

CREATE TABLE employ_employee1 (
    employee_id		    CHAR(8) PRIMARY KEY,
	employer_id 		CHAR(10),
    FOREIGN KEY(employer_id) REFERENCES vendors1(service_id) 
);

CREATE TABLE employ_employee2 (
    employee_id		    CHAR(8) PRIMARY KEY,
	name 			    VARCHAR(20),
    FOREIGN KEY(employee_id) REFERENCES employ_employee1(employee_id) ON DELETE CASCADE
);

CREATE TABLE employ_employee3 (
    employee_id		    CHAR(8) PRIMARY KEY,
	employer_address	VARCHAR(30),
    FOREIGN KEY(employee_id) REFERENCES employ_employee1(employee_id) ON DELETE CASCADE
);
	

CREATE TABLE venue (
    venue_id 	CHAR(10) PRIMARY KEY,
	capacity 	INTEGER,
	name		VARCHAR(30)
);

CREATE TABLE outsource (
    service_id	CHAR(10),
    venue_id 	CHAR(10),
    date_time 	DATE,
	PRIMARY KEY(service_id, venue_id),
    FOREIGN KEY(service_id) REFERENCES vendors1(service_id) ON DELETE CASCADE,
	FOREIGN KEY(venue_id) REFERENCES venue(venue_id) ON DELETE CASCADE
);

CREATE TABLE location_at (
	building_num	INTEGER,
	street_name 	VARCHAR(20),
	city		    VARCHAR(20),
	province  	    VARCHAR(20),
    postal_code 	VARCHAR(6), 
	venue_id 	    CHAR(10) NOT NULL,
    PRIMARY KEY (building_num, street_name, postal_code),
    FOREIGN KEY  (venue_id)
	    REFERENCES venue (venue_id)
		    ON DELETE CASCADE
);

CREATE TABLE permits_obtains (
	permit_id	CHAR(10) PRIMARY KEY,
	type	 	CHAR(20),
	cost		FLOAT,
	issue_date  DATE,
	validity 	INTEGER, 
	venue_id 	CHAR(10) NOT NULL,
    FOREIGN KEY  (venue_id)
	    REFERENCES venue (venue_id)
		    ON DELETE CASCADE
);

CREATE TABLE event_offer (
	event_id	CHAR(10) PRIMARY KEY,
    type	 	CHAR(20),
	cost		FLOAT,
	date_time  	DATE,
	venue_id 	CHAR(10) NOT NULL,
    FOREIGN KEY  (venue_id)
	    REFERENCES venue (venue_id)
		    ON DELETE CASCADE
);

CREATE TABLE attendees (
    guest_id	CHAR(10) PRIMARY KEY,
	first_name	VARCHAR(20),
    last_name	VARCHAR(20),
    table_num	INTEGER,
    diet		VARCHAR(20)
);

CREATE TABLE getting_married_1 (
    guest_id	CHAR(10) PRIMARY KEY,
    phone_num   INTEGER,
	email		VARCHAR(20),
	address		VARCHAR(30),
    credit_num	INTEGER,
	budget		INTEGER,
	FOREIGN KEY(guest_id) REFERENCES attendees (guest_id) ON DELETE CASCADE
); 

CREATE TABLE getting_married_2 (
    guest_id	CHAR(10) PRIMARY KEY,
    phone_num   INTEGER,
	email		VARCHAR(20),
	address		VARCHAR(30),
	FOREIGN KEY(guest_id) REFERENCES attendees (guest_id) ON DELETE CASCADE
);

CREATE TABLE host (
    guest_id	CHAR(10) PRIMARY KEY,
	phone_num	INTEGER,
	FOREIGN KEY(guest_id) REFERENCES attendees (guest_id) ON DELETE CASCADE
);

CREATE TABLE has (
    event_id	CHAR(10),
	guest_id	CHAR(10),
	guests_num	INTEGER,
	PRIMARY KEY(event_id, guest_id),
	FOREIGN KEY(event_id) REFERENCES event_offer (event_id) ON DELETE CASCADE,
	FOREIGN KEY(guest_id) REFERENCES attendees (guest_id) 
);

CREATE TABLE contract (
    venue_id	CHAR(10),
	guest_id	CHAR(10),
	date_time	DATE,
	PRIMARY KEY(venue_id, guest_id),
	FOREIGN KEY(venue_id) REFERENCES venue (venue_id) ON DELETE CASCADE,
	FOREIGN KEY(guest_id) REFERENCES attendees (guest_id) ON DELETE CASCADE
);


-- Insert into tables
INSERT INTO vendors1 VALUES ('1000000001', 'Vancouver Catering');
INSERT INTO vendors1 VALUES ('2000000002', 'Surrey Catering');
INSERT INTO vendors1 VALUES ('3000000003', 'Toronto Music');
INSERT INTO vendors1 VALUES ('4000000004', 'Toronto Floral');
INSERT INTO vendors1 VALUES ('5000000005', 'Richmond Photography');

INSERT INTO vendors2 VALUES ('1000000001', '1000');
INSERT INTO vendors2 VALUES ('2000000002', '2000');
INSERT INTO vendors2 VALUES ('3000000003', '3000');
INSERT INTO vendors2 VALUES ('4000000004', '4000');
INSERT INTO vendors2 VALUES ('5000000005', '5000');

INSERT INTO vendors3 VALUES ('1000000001', '123');
INSERT INTO vendors3 VALUES ('2000000002', '1234');
INSERT INTO vendors3 VALUES ('3000000003', '345');
INSERT INTO vendors3 VALUES ('4000000004', '125');
INSERT INTO vendors3 VALUES ('5000000005', '923');

INSERT INTO vendors4 VALUES ('Vancouver', 'BC');
INSERT INTO vendors4 VALUES ('Surrey', 'BC');
INSERT INTO vendors4 VALUES ('Richmond', 'BC');
INSERT INTO vendors4 VALUES ('Toronto', 'ON');
INSERT INTO vendors4 VALUES ('Edmonton', 'AB');

INSERT INTO vendors5 VALUES ('V6N2S1', 'Vancouver');
INSERT INTO vendors5 VALUES ('V6N2S3', 'Vancouver');
INSERT INTO vendors5 VALUES ('V6N2S2', 'Vancouver');
INSERT INTO vendors5 VALUES ('T7X0A4', 'Edmonton');
INSERT INTO vendors5 VALUES ('T7X0A5', 'Edmonton');

INSERT INTO vendors6 VALUES ('Smithe Street', 'V6N2S1');
INSERT INTO vendors6 VALUES ('Dunbar Street', 'V6N2S2');
INSERT INTO vendors6 VALUES ('Johnston Street', 'V6N2S3');
INSERT INTO vendors6 VALUES ('Collingwood Street', 'V6N2S3');
INSERT INTO vendors6 VALUES ('Drake Street', 'V6N2S1');

INSERT INTO vendors7 VALUES ('1000000001', 'Smithe Street');
INSERT INTO vendors7 VALUES ('2000000002', 'Smithe Street');
INSERT INTO vendors7 VALUES ('3000000003', 'Dunbar Street');
INSERT INTO vendors7 VALUES ('4000000004', 'Collingwood Street');
INSERT INTO vendors7 VALUES ('5000000005', 'Drake Street');

INSERT INTO floral_decor VALUES ('1000000001', 'Rose', 'Blue');
INSERT INTO floral_decor VALUES ('2000000002', 'Daisy', 'Red');
INSERT INTO floral_decor VALUES ('3000000003', 'Leaf', 'Gold');
INSERT INTO floral_decor VALUES ('4000000004', 'Rose', 'Red');
INSERT INTO floral_decor VALUES ('5000000005', 'Petunia', 'Purple');

INSERT INTO photo_video VALUES ('100000001', 'Sony');
INSERT INTO photo_video VALUES ('200000002', 'Sony');
INSERT INTO photo_video VALUES ('300000003', 'Canon');
INSERT INTO photo_video VALUES ('400000004', 'Sony');
INSERT INTO photo_video VALUES ('500000005', 'Canon');

INSERT INTO catering VALUES ('1000000001', 10, 'Canadian');
INSERT INTO catering VALUES ('2000000002', 40, 'Italian');
INSERT INTO catering VALUES ('3000000003', 100, 'Chinese');
INSERT INTO catering VALUES ('4000000004', 200,  'Thai');
INSERT INTO catering VALUES ('5000000005', 150, 'Indian');

INSERT INTO music VALUES ('1000000001', 'Pop');
INSERT INTO music VALUES ('2000000002', 'Pop');
INSERT INTO music VALUES ('3000000003', 'Hip-Hop');
INSERT INTO music VALUES ('4000000004', 'Jazz');
INSERT INTO music VALUES ('5000000005', 'EDM');

INSERT INTO employ_employee1 VALUES ('10000000', '1000000001');
INSERT INTO employ_employee1 VALUES ('20000000', '2000000002');
INSERT INTO employ_employee1 VALUES ('30000000', '3000000003');
INSERT INTO employ_employee1 VALUES ('40000000', '4000000004');
INSERT INTO employ_employee1 VALUES ('50000000', '5000000005');

INSERT INTO employ_employee2 VALUES ('10000000', 'Jasmine');
INSERT INTO employ_employee2 VALUES ('20000000', 'Sam');
INSERT INTO employ_employee2 VALUES ('30000000', 'Ramdiyal');
INSERT INTO employ_employee2 VALUES ('40000000', 'Jasleen');
INSERT INTO employ_employee2 VALUES ('50000000', 'Jasleen');

INSERT INTO employ_employee3 VALUES ('10000000', '123 Smithe Street');
INSERT INTO employ_employee3 VALUES ('20000000', '1234 Smithe Street');
INSERT INTO employ_employee3 VALUES ('30000000', '345 Dunbar Street');
INSERT INTO employ_employee3 VALUES ('40000000', '125 Collingwood Avenue');
INSERT INTO employ_employee3 VALUES ('50000000', '923 Fenton Avenue');

INSERT INTO venue VALUES ('1111111111', 10, 'Vancouver Weddings');
INSERT INTO venue VALUES ('2111111111', 100, 'Richmond Weddings');
INSERT INTO venue VALUES ('3111111111', 200, 'Seaside Weddings');
INSERT INTO venue VALUES ('4111111111', 50, 'Surrey Weddings');
INSERT INTO venue VALUES ('5111111111', 1000, 'MooseJaw Weddings');

INSERT INTO outsource VALUES ('1000000001', '1111111111', TO_DATE ('05-OCT-2023', 'DD-MM-YYYY'));
INSERT INTO outsource VALUES ('2000000002', '2111111111', TO_DATE ('30-OCT-2023', 'DD-MM-YYYY'));
INSERT INTO outsource VALUES ('3000000003', '3111111111', TO_DATE ('05-DEC-2023', 'DD-MM-YYYY'));
INSERT INTO outsource VALUES ('4000000004', '4111111111', TO_DATE ('10-JAN-2023', 'DD-MM-YYYY'));
INSERT INTO outsource VALUES ('5000000005', '5111111111', TO_DATE ('05-SEP-2023', 'DD-MM-YYYY'));

INSERT INTO location_at VALUES (1256, 'Robson', 'Vancouver', 'British Columbia', 'V6N2A8', '1111111111');
INSERT INTO location_at VALUES (6300, 'Alder', 'Richmond', 'British Columbia', 'V6Y4G5', '2111111111');
INSERT INTO location_at VALUES (5790, 'Teredo', 'Sechelt', 'British Columbia', 'V0N3A0', '3111111111');
INSERT INTO location_at VALUES (18119, '83 Ave', 'Surrey', 'British Columbia', 'V4N6A8', '4111111111');
INSERT INTO location_at VALUES (276, 'Home', 'MooseJaw', 'Saskatchewan', 'S6H4X6', '5111111111');

INSERT INTO permits_obtains VALUES ('0000000111', 'Liquor', 200, TO_DATE ('10-OCT-2022', 'DD-MM-YYYY'), 0, '1111111111');
INSERT INTO permits_obtains VALUES ('0000000211', 'Liquor', 300, TO_DATE ('10-OCT-2023', 'DD-MM-YYYY'), 1, '1111111111');
INSERT INTO permits_obtains VALUES ('0000000311', 'Noise', 250, TO_DATE ('30-AUG-2023', 'DD-MM-YYYY'), 1, '2111111111');
INSERT INTO permits_obtains VALUES ('0000000411', 'Fireworks', 150, TO_DATE ('28-DEC-2022', 'DD-MM-YYYY'), 0, '3111111111');
INSERT INTO permits_obtains VALUES ('0000000511', 'Liquor', 400, TO_DATE ('20-OCT-2023', 'DD-MM-YYYY'), 1, '5111111111');

INSERT INTO event_offer VALUES ('0000000001', 'Engagement Party', 10000, TO_DATE ('20-OCT-2022', 'DD-MM-YYYY'), '1111111111');
INSERT INTO event_offer VALUES ('0000000002', 'Engagement Party', 45500, TO_DATE ('20-JAN-2023', 'DD-MM-YYYY'), '2111111111');
INSERT INTO event_offer VALUES ('0000000003', 'Bachelorette Party', 60000, TO_DATE ('30-JUN-2022', 'DD-MM-YYYY'), '3111111111');
INSERT INTO event_offer VALUES ('0000000004', 'Wedding', 100000, TO_DATE ('20-OCT-2017', 'DD-MM-YYYY'), '4111111111');
INSERT INTO event_offer VALUES ('0000000005', 'Rehearsal Dinner', 8000, TO_DATE ('31-MAY-2022', 'DD-MM-YYYY'), '4111111111');

INSERT INTO attendees VALUES ('1000000001', 'Bob', 'Smith', '1', 'gluten-free');
INSERT INTO attendees VALUES ('1000000002', 'Samantha', 'Smith', '1', 'none');
INSERT INTO attendees VALUES ('2000000001', 'Andrea', 'Wong', '2', 'vegan');
INSERT INTO attendees VALUES ('2000000002', 'John', 'Snow', '2', 'vegetarian');
INSERT INTO attendees VALUES ('3000000001', 'Sue', 'Cheng', '3', 'pescatarian');
INSERT INTO attendees VALUES ('3000000002', 'Andy', 'Cheng', '3', 'none');
INSERT INTO attendees VALUES ('4000000001', 'Julie', 'Moffatt', '4', 'pescatarian');
INSERT INTO attendees VALUES ('4000000002', 'Aaron', 'Creed', '4', 'nut-free');
INSERT INTO attendees VALUES ('5000000001', 'Barbara', 'Walter', '5', 'pescatarian');
INSERT INTO attendees VALUES ('5000000002', 'Walter', 'Andrews', '5', 'none');

INSERT INTO getting_married_1 VALUES ('1000000001', 6041234567, 'bobsmith@gmail.com', '123 Maple St', 1234, 30000);
INSERT INTO getting_married_1 VALUES ('2000000001', 7781234567, 'andreaw@gmail.com', '4567 Cherry Rd', 4321, 50000);
INSERT INTO getting_married_1 VALUES ('3000000001', 6047654321, 'suecheng@gmail.com', '1001 Meadow Crt', 5678, 35000);
INSERT INTO getting_married_1 VALUES ('4000000001', 7787654321, 'juliem@gmail.com', '2323 Cornucopia St', 8765, 40000);
INSERT INTO getting_married_1 VALUES ('5000000001', 6041111111, 'bwalter@gmail.com', '789 Oak Rd', 0101, 100000);

INSERT INTO getting_married_2 VALUES ('1000000002', 7782222222, 'samsmith@gmail.com', '9000 Walnut St');
INSERT INTO getting_married_2 VALUES ('2000000002', 6041211212, 'jjsnow@gmail.com', '2323 Balaclava Rd');
INSERT INTO getting_married_2 VALUES ('3000000002', 7788881212, 'andycheng@gmail.com', '1001 Meadow Crt');
INSERT INTO getting_married_2 VALUES ('4000000002', 6049998787, 'juliem@gmail.com', '2324 Cornucopia St');
INSERT INTO getting_married_2 VALUES ('5000000002', 7783451212, 'bwalter@gmail.com', '789 Oak Rd');

INSERT INTO host VALUES ('1000000002', 7782222222);
INSERT INTO host VALUES ('2000000001', 7781234567);
INSERT INTO host VALUES ('3000000002', 7788881212);
INSERT INTO host VALUES ('4000000001', 7787654321);
INSERT INTO host VALUES ('5000000002', 7783451212);

INSERT INTO has VALUES ('0000000001', '1000000001', 100);
INSERT INTO has VALUES ('0000000002', '2000000001', 120);
INSERT INTO has VALUES ('0000000003', '3000000001', 110);
INSERT INTO has VALUES ('0000000004', '4000000001', 75);
INSERT INTO has VALUES ('0000000005', '5000000001', 150);

INSERT INTO contract VALUES ('1111111111', '1000000001', TO_DATE ('05-MAY-2023', 'DD-MM-YYYY'));
INSERT INTO contract VALUES ('2111111111', '2000000001', TO_DATE ('29-NOV-2022', 'DD-MM-YYYY')); 
INSERT INTO contract VALUES ('3111111111', '3000000001', TO_DATE ('10-JAN-2023', 'DD-MM-YYYY'));
INSERT INTO contract VALUES ('4111111111', '4000000001', TO_DATE ('12-MAY-2023', 'DD-MM-YYYY'));
INSERT INTO contract VALUES ('5111111111', '5000000001', TO_DATE ('21-DEC-2022', 'DD-MM-YYYY'));
