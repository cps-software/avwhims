-- Create patient table

USE avwhims;

CREATE TABLE patient
(
  patient_id					int						NOT NULL PRIMARY KEY AUTO_INCREMENT,
	va_icn							varchar(32)		NULL, /* va-wide veteran integration control number (9999999999V999999) */
	va_dfn							varchar(128)	NULL,	/* local vista assigned internal entry number / data file number */
	ssn									varchar(10)		NULL,
	firstname						varchar(50)		NULL,
	lastname						varchar(50)		NULL,
	middlename					varchar(50)		NULL,
	maiden_name					varchar(50)		NULL,
	preferred_name			varchar(50)		NULL,
	pronoun_code				varchar(16)		NULL,
	gender_code					varchar(16)		NULL,
	race_code						varchar(16)		NULL,
	ethnicity_code			varchar(16)		NULL,
	rel_to_veteran			int						NULL,
	marital_status			int						NULL,
	birth_date					datetime			NOT NULL,
	death_date					datetime			NULL,
	birth_city					varchar(50)		NULL,
	birth_state					varchar(50)		NULL,
	birth_zipcode				varchar(50)		NULL,
	birth_country				varchar(50)		NULL,
	preferred_language	varchar(50)		NULL,
	interpreter_needed	tinyint(1)		NULL,
	multiple_birth			tinyint(1)		NULL, /* patient was part of multiple birth, e.g., twin or triplet */
	gravidity						int NOT				NULL, /* number of times a female has been pregnant */
	parity							int NOT				NULL, /* number of pregnancies carried for at least 20 weeks */
	pharmacy_id					varchar(32)		NULL,
	mpi_sync						tinyint(1)		NOT NULL,
	created_date				datetime			NOT NULL,
	created_by_id				int						NOT NULL,
	last_mod_date				datetime			NOT NULL,
	last_mod_by_id			int						NOT NULL,
	file_location_id		int						NOT NULL,
    INDEX
    (
        va_icn
    ),
    INDEX
    (
        ssn
    ),
    INDEX
    (
        lastname
    ),
    INDEX
    (
        va_dfn
    )
);
