-- Create patient table
-- describe table

USE avwhims;

CREATE TABLE patient
(
  patient_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	patient_rems_id varchar(12) NULL,
	patient_nccc_id varchar(10) NULL,
	patient_ssn varchar(10) NULL,
	patient_firstname varchar(50) NULL,
	patient_lastname varchar(50) NULL,
	patient_middlename varchar(50) NULL,
	patient_race varchar(128) NULL,
	patient_ethnicity varchar(128) NULL,
	patient_date_of_birth datetime NOT NULL,
	patient_date_of_death datetime NULL,
	patient_zipcode varchar(32) NULL,
	patient_icn varchar(128) NULL,
	patient_dfn varchar(128) NULL,
	created datetime NOT NULL,
	created_by_id int NOT NULL,
	last_modified datetime NOT NULL,
	last_modified_by_id int NOT NULL,
	file_location_id int NOT NULL,
	patient_gender_id int NOT NULL,
	mpi_sync bit NOT NULL,
    INDEX
    (
        patient_rems_id
    ),
    INDEX
    (
        patient_ssn
    ),
    INDEX
    (
        patient_lastname
    ),
    INDEX
    (
        patient_icn
    )
);
