/*
Name:           Scott Alton
Filename:       lab9_users.sql
Last Modified:  April 5, 2020
Course:         WEBD2201
*/


-- Clear out any existing data
DROP TABLE IF EXISTS users;

-- CREATE the table
CREATE TABLE users(
   
	id VARCHAR(15) PRIMARY KEY NOT NULL,
    password VARCHAR(15) NOT NULL,
	first_name VARCHAR(20) NOT  NULL,
    last_name VARCHAR(30) NOT  NULL,
    email_address VARCHAR(255) NOT NULL,
    enrol_date DATE NOT NULL,
    last_access DATE NOT NULL

); 

-- Grant access to professor to view data
    GRANT ALL ON users TO faculty;

-- Insert 3 user login records
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jdoe',
    'testpass',
    'John',
    'Doe',
    'jdoe@durhamcollege.ca',
    '2020-1-1',
    '2020-2-1' );

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'altons',
    'testpass',
    'Scott',
    'Alton',
    'scott.alton@dcmail.ca',
    '2020-1-1',
    '2020-2-1' );

    INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'sdoyle',
    'testpass',
    'Shannon',
    'Doyle',
    'sdoyle@durhamcollege.ca',
    '2020-1-1',
    '2020-2-1' );