-- Populate table: patient

USE avwhims;

INSERT INTO patient (patient_va_icn, patient_ssn, patient_firstname, patient_lastname, patient_middlename, patient_maiden_name, patient_gender_code, patient_race, patient_ethnicity, patient_date_of_birth, patient_date_of_death, patient_zipcode, patient_icn, patient_dfn, patient_gravidity, patient_parity, created_date, created_by_id, last_modified_date, last_modified_by_id, file_location_id, patient_gender_id, mpi_sync)
VALUES
('55555550001', '111110001', 'tina', 'renolds', 'q', 'smith', '2', 'White', 'Not Hispanic or Latino', '1946-03-05', NULL, '54321', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '1', '1', b'1'),

('55555550002', '111110002', 'hanna', 'burke', 'q', '', '2', 'Black', 'Not Hispanic or Latino', '1981-03-10', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '2', '1', b'1'),

('55555550003', '111110003', 'freida', 'berry', 'q', '', '2', 'Black', 'Not Hispanic or Latino', '1965-03-15', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '2', '1', b'1'),

('55555550004', '111110004', 'jenny', 'long', 'q', 'chi', '2', 'Asian', 'Not Hispanic or Latino', '2000-03-05', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'0'),

('55555550005', '111110005', 'jamie', 'perez', 'q', '', '2', 'White', 'Hispanic or Latino', '2005-03-10', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550006', '111110006', 'wanda', 'ernestine', 'q', '', '2', 'Black', 'Not Hispanic or Latino', '1986-03-15', '2203-06-15', '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550007', '111110007', 'sheila', 'walters', 'q', '', '2', 'Asian', 'Not Hispanic or Latino', '1973-03-05', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550008', '111110008', 'tracy', 'sullivan', 'q', 'bonakowski', '2', 'White', 'Not Hispanic or Latino', '1973-03-10', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'0'),

('55555550009', '111110009', 'rhoda', 'miles', 'q', 'allen', '2', 'White', 'Not Hispanic or Latino', '1950-03-15', '2001-06-01', '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550010', '111110010', 'jennifer', 'lawson', 'q', '', '2', 'Asian', 'Not Hispanic or Latino', '1963-03-05', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550011', '111110011', 'sandra', 'carter', 'q', 'smith', '2', 'White', 'Hispanic or Latino', '1974-03-10', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550012', '111110012', 'anita', 'wilson', 'q', 'johnson', '2', 'Black', 'Not Hispanic or Latino', '1945-03-15', '2023-06-30', '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'0'),

('55555550013', '111110013', 'jasmine', 'lawson', 'q', '', '2', 'White', 'Not Hispanic or Latino', '1963-03-05', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550014', '111110014', 'jane', 'yi', 'q', 'calverton', '2', 'Black', 'Not Hispanic or Latino', '1963-03-10', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1'),

('55555550015', '111110015', 'lisa', 'myers', 'q', 'anderson', '2', 'White', 'Not Hispanic or Latino', '1963-03-15', NULL, '12345', '', '', '1', '1', '2024-04-10 15:20:00', '1', '2024-04-10 15:20:00', '1', '3', '1', b'1');