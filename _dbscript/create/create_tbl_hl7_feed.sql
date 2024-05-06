-- Create hl7_feed table
-- Author:  CPS
-- Created: 4/9/24
-- Comment: Initial create

USE avdrms;

CREATE TABLE hl7_feed
(
	id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	content BLOB NULL,
	received datetime NOT NULL,
	processed datetime NOT NULL,
	message_type_id int NULL,
    INDEX
    (
        received
    ),
    INDEX
    (
        processed
    )
);