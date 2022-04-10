use online_job_portal;

CREATE TABLE job_seeker (
  `Job_seeker_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Job_Seeker_name` varchar(30) NOT NULL,
  `Email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL unique,
  `Gender` varchar(10) NOT NULL,
  `Contact_Details` bigint(10) NOT NULL,
  `Date_of_birth` date,
  `password` varchar(25) NOT NULL,
  primary key (`Job_seeker_ID`)
);

INSERT INTO job_seeker values (1, 'Swati Annadate', 'swatiannadate@gmail.com', 'Female', 9456872361, '2000-05-02', 'Swati@123');
INSERT INTO job_seeker values (2, 'Sakshi Jain', 'jainsakshi1@yahoo.in', 'Female', 8495682130, '1991-07-14', 'Sakshi@jain34');
INSERT INTO job_seeker values (3, 'Harsh Wakle', 'wakleharsh@gmail.com', 'Male', 7496853749, '1996-11-23', 'harsh12wakle');
INSERT INTO job_seeker values (4, 'Shital Soni', 'shitalsoni@gmail.com', 'Female', 8895643015, '2000-08-16', 'Soni11@shital43');
INSERT INTO job_seeker values (5, 'Kalpesh Deshmukh', 'deshmukhkd@gmail.com', 'Male', 7879764565, '2000-05-05', 'kd47mukh');
 INSERT INTO job_seeker values (6, 'Urvashi Uttarwar', 'urvashiuttarwar@gmail.com', 'Female', 7979765122, '1995-05-30', 'urvautt78'); 
 INSERT INTO job_seeker values (7, 'Sammed Singalkar', 'sammedsingalkar@gmail.com', 'Male', 8308497059, '2000-09-12', 'sammed@48'); 
select * from job_seeker;
select count(*) from job_seeker;
drop table job_seeker;
