use online_job_portal;

CREATE TABLE administrator (user_name varchar(25) NOT NULL,
password varchar(25) NOT NULL,
`Email` varchar(30) NOT NULL,
primary key (Email)
);

INSERT INTO administrator VALUES ('Sammed Singalkar', 'sammed@48', 'sammedsingalkar@gmail.com');
INSERT INTO administrator VALUES ('Aditya Waykos', 'aditya@45', 'Aswaykos@gmail.com');
INSERT INTO administrator VALUES ('Sakshi Nagarkar', 'sakshi@59', 'sakshi07nagarkar@gmail.com');

select * from administrator;
drop table administrator; 
update administrator set user_name = 'sammed' where Email = 'sammedsingalkar@gmail.com'