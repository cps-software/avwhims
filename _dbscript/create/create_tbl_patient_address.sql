-- Create table: patient_address

USE avwhims;

CREATE TABLE patient_address
(
  patient_address_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  patient_id int NOT NULL,
  patient_address_priority int NOT NULL,
  patient_address_street1 varchar(32) NOT NULL,
  patient_address_street2 varchar(32) NOT NULL,
  patient_address_city varchar(32) NOT NULL,
  patient_address_state varchar(32) NOT NULL,
  patient_address_zipcode varchar(16) NOT NULL,
  patient_address_country int NOT NULL,
    INDEX
    (
        patient_id
    )
);
