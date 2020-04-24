-- Clear out any existing data
DROP TABLE IF EXISTS login;

-- CREATE the table
CREATE TABLE login(
    id VARCHAR(15) PRIMARY KEY NOT NULL,
    password VARCHAR(15) NOT NULL
); 

-- Grant access to professor to view data
    GRANT ALL ON login TO faculty;

-- Insert 3 user login records
INSERT INTO login(id, password) VALUES(
	'Scott Alton',
    '100762638');
