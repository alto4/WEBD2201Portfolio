-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS finaltest;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE finaltest(
	reservation_id INTEGER PRIMARY KEY,
	name VARCHAR(20),
    age INTEGER(2),
    gender CHAR(1),
    start_city VARCHAR(20),
    destination_city VARCHAR(20),
    airline VARCHAR(10),
    reservation_date DATE
);

 -- Grant access to professor to view data
GRANT ALL ON finaltest TO faculty;

INSERT INTO finaltest(reservation_id, name, age, gender, start_city, destination_city, airline, reservation_date) VALUES(
	1,
	'Scott Alton',
    25,
    'M',
    'Toronto',
    'Havana',
    'Air Canada',
    '2020-04-15');

INSERT INTO finaltest(reservation_id, name, age, gender, start_city, destination_city, airline, reservation_date) VALUES(
	2,
	'Shannon Doyle',
    26,
    'F',
    'Toronto',
    'Havana',
    'Air Canada',
    '2020-04-15');

INSERT INTO finaltest(reservation_id, name, age, gender, start_city, destination_city, airline, reservation_date) VALUES(
	3,
	'Lance Alton',
    55,
    'M',
    'Toronto',
    'Havana',
    'Air Canada',
    '2020-04-15');






