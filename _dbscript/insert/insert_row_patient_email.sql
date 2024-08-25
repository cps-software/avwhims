-- Populate table: patient_email

USE avwhims;

INSERT INTO patient_email (patient_id, email_type, priority, email_address)
VALUES
('1', '1', '1', 'patient1-1@example.com'),
('1', '2', '2', 'patient1-2@example.com'),
('2', '1', '1', 'patient2-1@example.com'),
('2', '2', '2', 'patient2-2@example.com'),
('3', '1', '1', 'patient3-1@example.com'),
('3', '3', '2', 'patient3-3@example.com');