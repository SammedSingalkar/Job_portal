use online_job_portal;

CREATE TABLE interview (`Interview Date` date NOT NULL,
  `Interview Id` int(6) NOT NULL,
  `Company name` varchar(12) NOT NULL,
  `Interview Type` varchar(15) NOT NULL,
  `Interview place` varchar(10) NOT NULL,
  `Interviewer name` varchar(50),
  `Interviewee` varchar(25) NOT NULL
);

INSERT INTO interview values ('2021-11-07', 1001, 'TCS', 'Online', 'Pune', 'Mrs. Mansi Shah, Mr. Manoj Dhale', 'Swati Annadate');
INSERT INTO interview values ('2021-11-07', 1002, 'Infosys', 'Offline', 'Mumbai', 'Mr. Rajesh Kumar, Mr. Dev Datta, Mr. Nikhil Jain', 'Sakshi Jain');
INSERT INTO interview values ('2021-11-08', 1003, 'TATA Motors', 'Online', 'Aurangabad', 'Mr. Aditya Jain, Mrs. Vishal Yogi', 'Harsh Wakle');
INSERT INTO interview values ('2021-11-10', 1004, 'Byju\'s', 'Online', 'Kolkata', 'Mrs. Samiksha Patil, Mrs. Harshit Kumar', 'Shital Soni');
INSERT INTO interview values ('2021-11-11', 1005, 'Zomato', 'offline', 'Hydrabad', 'Mr. Rajesh Kumar, Mrs. Kritika Doiphode', 'Urvashi Uttarwar');
INSERT INTO interview values ('2021-11-20', 1006, 'JIO', 'Offline', 'Pune', 'Mrs. Swati Kulkarni, Mr. Raghu Rajput. ', 'Kalpesh Deshmukh');

select * from interview;
truncate table interview;