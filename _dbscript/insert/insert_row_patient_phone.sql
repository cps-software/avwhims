-- Populate table: patient_phone

USE avwhims;

INSERT INTO patient_phone (patient_id, phone_type, priority, country_code, area_code, phone_number)
VALUES
('1', '1', '1', '1', '808', '5551111'),
('1', '2', '2', '1', '808', '5552222'),
('1', '3', '2', '1', '808', '5553333'),
('2', '1', '1', '1', '202', '2221111'),
('2', '2', '2', '1', '202', '2222222'),
('3', '2', '1', '1', '321', '3331111');