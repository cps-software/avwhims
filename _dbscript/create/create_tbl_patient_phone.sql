-- Create table: patient_phone

USE avwhims;

CREATE TABLE patient_phone
(
  patient_phone_id  int         NOT NULL PRIMARY KEY AUTO_INCREMENT,
  patient_id        int         NOT NULL,
  phone_type        int         NOT NULL, /* e.g., home, work, mobile */
  priority          int         NOT NULL, /* first, second, etc. */
  country_code      varchar(4)  NOT NULL,
  area_code         varchar(3)  NOT NULL,
  phone_number      varchar(16) NOT NULL,
    INDEX
    (
        patient_id
    ),
    INDEX
    (
        phone_type
    )
);
