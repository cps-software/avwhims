-- Populate user_profile table

USE avwhims;

INSERT INTO user_profile (user_account_id,firstname,lastname,station_id,work_phone,mobile_phone,user_role,profile_picture,primary_computer,expand_sidebar, play_timeout_sound, color_theme)
VALUES
('1','Chuck','Sylvester','872','','','System Administrator','profile-user-1.jpeg','MacBook Pro','1','1','1'),
('2','Heather','Chatwin','888','','','System Administrator','profile-user-0.png','MacBook Pro','1','1','1'),
('3','Test','User','911','','','System Administrator','profile-user-0.png','MacBook Pro','1','1','1'),
('4','Lucy','Palmer','911','','','System Administrator','profile-user-4.jpg','MacBook Pro','1','1','1');