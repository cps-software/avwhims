-- Populate table: patient_address

USE avwhims;

INSERT INTO patient_address (patient_id, patient_address_priority, patient_address_street1, patient_address_street2, patient_address_city, patient_address_state, patient_address_zipcode, patient_address_country)
VALUES
('1', '1', '738 Ullrich Valleys Rd', 'Apt. 591', 'Lake Curtberg', 'OK', '54321', '1'),
('1', '2', '5797 Bradtke Shoals Ln', '', 'Chimouth', 'MT', '54321', '1'),
('2', '1', '60504 Lake Side Island', 'Apt. 840', 'Wakeford', 'NC', '54321', '1'),
('3', '1', '9094 Walter St', '', 'Oakmart', 'GA', '54321', '1');
