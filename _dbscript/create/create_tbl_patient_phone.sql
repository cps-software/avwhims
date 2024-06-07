-- Create table: patient_phone

USE avwhims;

CREATE TABLE patient_phone
(
  patient_phone_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  patient_id int NOT NULL,
  patient_phone_type int NOT NULL,
  patient_phone_priority int NOT NULL,
  patient_phone_country varchar(4) NOT NULL,
  patient_phone_area varchar(3) NOT NULL,
  patient_phone_number varchar(16) NOT NULL,
    INDEX
    (
        patient_id
    ),
    INDEX
    (
        patient_phone_type
    )
);
