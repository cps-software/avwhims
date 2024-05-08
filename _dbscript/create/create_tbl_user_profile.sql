-- Create user_profile table
-- describe table

USE avwhims;

CREATE TABLE user_profile
(
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   user_account_id int NOT NULL,
   firstname varchar(32) NOT NULL,
   lastname varchar(32) NOT NULL,
   station_id varchar(8) NOT NULL,
   work_phone varchar(24) NULL,
   mobile_phone varchar(24) NULL,
   user_role varchar(32) NOT NULL,
   profile_picture varchar(50) NULL,
   primary_computer varchar(20) NULL,
   expand_sidebar tinyint(1) NOT NULL,
   play_timeout_sound tinyint(1) NOT NULL,
   color_theme int NOT NULL,
   INDEX
   (
   	user_account_id,
   	lastname
   )
);