-- Populate patient table
-- Author:  CPS
-- Created: 4/10/24
-- Comment: 

USE avdrms;

INSERT INTO patient (patient_rems_id, patient_nccc_id, patient_ssn, patient_firstname, patient_lastname, patient_middlename, patient_race, patient_ethnicity, patient_date_of_birth, patient_date_of_death, patient_zipcode, patient_icn, patient_dfn, created, created_by_id, last_modified, last_modified_by_id, file_location_id, patient_gender_id, mpi_sync)
VALUES
('11111110001', 'NC10001', '111110001', 'travis', 'renolds', 'q', 'White', 'Not Hispanic or Latino', '1946-03-05', NULL, '54321', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '1', '1', b'1'),

('11111110002', 'NC10002', '111110002', 'hanna', 'burke', 'q', 'Black', 'Not Hispanic or Latino', '1981-03-10', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '2', '1', b'1'),

('11111110003', 'NC10003', '111110003', 'alfredo', 'berry', 'q', 'Black', 'Not Hispanic or Latino', '1965-03-15', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '2', '1', b'1'),

('11111110004', 'NC10004', '111110004', 'jenny', 'long', 'q', 'Asian', 'Not Hispanic or Latino', '2000-03-05', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'0'),

('11111110005', 'NC10005', '111110005', 'jamie', 'perez', 'q', 'White', 'Hispanic or Latino', '2005-03-10', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110006', 'NC10006', '111110006', 'wilson', 'ernest', 'q', 'Black', 'Not Hispanic or Latino', '1986-03-15', '2203-06-15', '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110007', 'NC10007', '111110007', 'walters', 'sheila', 'q', 'Asian', 'Not Hispanic or Latino', '1973-03-05', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110008', 'NC10008', '111110008', 'sullivan', 'tracy', 'q', 'White', 'Not Hispanic or Latino', '1973-03-10', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'0'),

('11111110009', 'NC10009', '111110009', 'miles', 'rodney', 'q', 'White', 'Not Hispanic or Latino', '1950-03-15', '2001-06-01', '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110010', 'NC10010', '111110010', 'lawson', 'jeremy', 'q', 'Asian', 'Not Hispanic or Latino', '1963-03-05', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110011', 'NC10011', '111110011', 'carter', 'sergo', 'q', 'White', 'Hispanic or Latino', '1974-03-10', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110012', 'NC10012', '111110012', 'wilson', 'anita', 'q', 'Black', 'Not Hispanic or Latino', '1945-03-15', '2023-06-30', '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'0'),

('11111110013', 'NC10013', '111110013', 'lawson', 'jeremy', 'q', 'White', 'Not Hispanic or Latino', '1963-03-05', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110014', 'NC10014', '111110014', 'lawson', 'jeremy', 'q', 'Black', 'Not Hispanic or Latino', '1963-03-10', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('11111110015', 'NC10015', '111110015', 'lawson', 'jeremy', 'q', 'White', 'Not Hispanic or Latino', '1963-03-15', NULL, '12345', '', '', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1');
