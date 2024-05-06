-- Create treatment_status table
-- Author:  CPS
-- Created: 4/11/24
-- Comment: Initial create

USE avdrms;

CREATE TABLE treatment_status
(
    id int NOT NULL PRIMARY KEY,
    treatment_status_name varchar(128) NOT NULL,
    treatment_status_description varchar(256) NOT NULL,
    INDEX
    (
        treatment_status_name
    )
);
