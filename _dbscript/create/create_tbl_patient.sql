-- Create patient table

USE avwhims;

CREATE TABLE patient
(
  patient_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	patient_va_icn varchar(32) NULL,
	patient_dfn varchar(128) NULL,
	patient_ssn varchar(10) NULL,
	patient_firstname varchar(50) NULL,
	patient_lastname varchar(50) NULL,
	patient_middlename varchar(50) NULL,
	patient_maiden_name varchar(50) NULL,
	patient_preferred_name varchar(50) NULL,
	patient_pronoun_code varchar(16) NULL,
	patient_gender_code varchar(16) NULL,
	patient_race varchar(128) NULL,
	patient_ethnicity varchar(128) NULL,
	patient_date_of_birth datetime NOT NULL,
	patient_date_of_death datetime NULL,
	patient_marital_status int NULL,
	patient_rel_to_insured int NULL,
	patient_birthplace_city varchar(50) NULL,
	patient_birthplace_state varchar(50) NULL,
	patient_birthplace_zipcode varchar(50) NULL,
	patient_birthplace_country varchar(50) NULL,
	patient_preferred_language varchar(50) NULL,
	patient_interpreter_needed tinyint(1) NULL,
	patient_multiple_birth tinyint(1) NULL,
	patient_gravidity int NOT NULL,
	patient_parity int NOT NULL,
	patient_vietnam_veteran tinyint(1) NULL,
	patient_gulf_war_veteran tinyint(1) NULL,
	patient_other_veteran tinyint(1) NULL,
	patient_pharmacy_id varchar(32) NULL,
	mpi_sync tinyint(1) NOT NULL,
	created_date datetime NOT NULL,
	created_by_id int NOT NULL,
	last_modified_date datetime NOT NULL,
	last_modified_by_id int NOT NULL,
	file_location_id int NOT NULL,
    INDEX
    (
        patient_va_icn
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
        patient_dfn
    )
);
