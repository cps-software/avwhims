-- Create table: user_account
-- describe table

USE avwhims;

CREATE TABLE user_account
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username varchar(20),
   password varchar(32),
   email_address varchar(32) NOT NULL,
   create_date date
);