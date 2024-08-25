-- Create table: patient_email

USE avwhims;

CREATE TABLE patient_email
(
  patient_email_id  int         NOT NULL PRIMARY KEY AUTO_INCREMENT,
  patient_id        int         NOT NULL,
  email_type        int         NOT NULL, /* e.g., personal, work */
  priority          int         NOT NULL, /* first, second, etc. */
  email_address     varchar(32) NOT NULL,
    INDEX
    (
        patient_id
    ),
    INDEX
    (
        email_address
    )
);
