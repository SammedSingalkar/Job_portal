use online_job_portal;
CREATE TABLE job (No_Of_Vacancies int(7) NOT NULL,
   `Company_name` varchar(15) NOT NULL,
   `Job_id` int(6) NOT NULL auto_increment,
    salary varchar(15),
   `Skills_required` text NOT NULL,
   `Job_Location_city` varchar(15),
    job_type varchar(40) Not NULL,
     primary key (`Job_id`)
);

INSERT INTO job values (54, 'TCS', 9090, '5 lakh', 'Python, SQL', 'Mumbai','Backend Developer');
INSERT INTO job values (60, 'Infosys', 9091, '8 lakh', 'Java, Javascript', 'Bengaluru','Web-developement');
INSERT INTO job values (34, 'TATA Motors', 9092, '5 lakh', 'Communication', 'Mumbai','Graphic Design');
INSERT INTO job values (45, 'Byjus\'s', 9093, '7 lakh', 'Communication skills', 'Mumbai','Web-developement');
INSERT INTO job values (59, 'Zomato', 9094, '6 lakh', 'Decision Making and Problem Solving', 'Bengaluru','Front-end Developer');
INSERT INTO job values (21, 'JIO', 9095, '10 lakh', 'Cloud computing,Programming', 'Mumbai','Communication');
select * from job;
drop table job; 

