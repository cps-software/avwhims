-- Create table: color_theme
-- (provide brief descriptioin of this table)

USE avdrms;

CREATE TABLE color_theme
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   theme_name varchar(32) NOT NULL,
   theme_description varchar(128) NOT NULL
);