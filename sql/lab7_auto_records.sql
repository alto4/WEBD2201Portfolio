/*
Name:           Scott Alton
Filename:       lab7_auto_records.sql
Last Modified:  27 March 2020
Course:         WEBD2201
*/

-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE automobiles(
	id INTEGER PRIMARY KEY,
	make VARCHAR(15) NOT  NULL,
    model VARCHAR(20) NOT  NULL,
    year INTEGER NOT NULL,
    owner VARCHAR(120) NOT NULL,
    msrp NUMERIC(9, 2) NOT NULL,
    purchase_date DATE NOT NULL
);

 -- Grant access to professor to view data
GRANT ALL ON automobiles TO faculty;

INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	1,
	'Subaru',
    'BRZ',
    2014,
    'Billy Smith',
    32450.00,
    '2015-03-30');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	2,
	'Ford',
    'Fusion',
    2011,
    'Dahlia Jenkins',
    1550.00,
    '2011-02-01');
    INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	3,
	'Nissan',
    'Ultima',
    2000,
    'Bill Peterson',
    2450.00,
    '2011-03-30');
    INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	4,
	'Pontiac',
    'G5',
    2011,
    'Shannon Doyle',
    2100.00,
    '2015-03-30');
    INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	5,
	'Dodge',
    'Charger',
    1962,
    'Glenn Murray',
    32450.00,
    '2011-03-30');
    SELECT make, model, year, msrp FROM automobiles ORDER BY year ASC;

    UPDATE automobiles SET owner = 'Scott Alton' WHERE make = 'Pontiac';

    DELETE FROM automobiles WHERE id = 3;

    SELECT * FROM automobiles ORDER BY id;

    