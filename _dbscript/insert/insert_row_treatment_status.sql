-- Populate treatment_status table
-- Author:  CPS
-- Created: 4/11/24
-- Comment: 

USE avdrms;

INSERT INTO treatment_status (id, treatment_status_name, treatment_status_description)
VALUES
('1', 'Active', 'Active Treatment Status'),
('2', 'Discontinued', 'Discontinued Treatment Status'),
('3', 'Unknown', 'Unknown Treatment Status');
