use online_job_portal;

CREATE TABLE company ( Company_name varchar(15) NOT NULL,
   `Company_Id` int(6) NOT NULL ,
  Pincode int(6),
   `Establishment_date` date NOT NULL,
   `Website_url` varchar(35) CHARACTER SET ascii COLLATE ascii_bin,
   `Company_stream` varchar(15) NOT NULL,
  Location varchar(12), 
-- logo blob, 
 
  primary key (`Company_Id`)
);

insert into company values ('Infosys', 40054, 560100, '1981-06-02', 'https://www.infosys.com/', 'IT', 'Bengaluru');
insert into company values ('TCS', 110216, 400001, '1968-04-01', 'https://www.tcs.com/', 'IT', 'Mumbai');
insert into company values ('TATA Motors', 112035, 400001, '1945-03-01', 'https://www.tatamotors.com/', 'Automobile', 'Mumbai');
insert into company values ('Zomato', 192463, 110019, '2008-01-18', 'https://www.zomato.com/', 'Food Delivery', 'New Delhi');
insert into company values ('Byjus\'s', 200213, 560029, '2011-03-01', 'https://byjus.com/', 'Education', 'Bengaluru');
insert into company values ('JIO', 456322, 400021, '2007-05-10', 'https://www.jio.com/', 'Telecom', 'Mumbai');
select * from company;
select count(*) from company;
select distinct company_name from company;
drop table company; 
delete from company where company_name = 'accenture';
