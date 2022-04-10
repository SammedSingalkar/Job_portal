use online_job_portal;

CREATE TABLE registration (
  `Registration_no` int(7) NOT NULL AUTO_INCREMENT,
  `Registration_name` varchar(25) NOT NULL,
  `Company_name` varchar(25) NOT NULL,
  `Date` date,
  Post varchar(20) NOT NULL,
  primary key (`Registration_no`)
);

INSERT INTO registration VALUES (1919135, 'Swati Annadate', 'TCS', '2021-10-05', 'Software Developer');
INSERT INTO registration VALUES (1919136, 'Sakshi Jain', 'Infosys', '2021-10-21', 'Data Scientist');
INSERT INTO registration VALUES (1919137, 'Harsh Wakle', 'TATA Motors', '2021-10-26', 'Manager');
INSERT INTO registration VALUES (1919138, 'Shital Soni', 'Byjus\'s', '2021-11-01', 'Professor');
INSERT INTO registration VALUES (1919139, 'Urvashi Uttarwar', 'Zomato', '2021-10-25', 'Application manager');
INSERT INTO registration VALUES (1919140, 'Kalpesh Deshmukh', 'JIO', '2021-10-30', 'Website Manager');

select * from registration;
drop table registration;

