CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Nama VARCHAR(30) NOT NULL,
	Alamat VARCHAR(50) NOT NULL,
	Jabatan VARCHAR(50) NOT NULL
);

INSERT INTO users (Nama, Alamat, Jabatan)
VALUES
	('John Smith', '123 Main St, Anytown', 'Sales Associate'),
	('Sarah Lee', '456 Oak Ave, Somewhere', 'Marketing Manager'),
	('Mike Johnson', '789 Elm St, Nowhere', 'Software Engineer'),
	('Lisa Chen', '321 Maple Blvd, Here', 'HR Coordinator'),
	('David Kim', '555 Pine St, There', 'Financial Analyst'),
	('Rachel Wong', '777 Cedar St, Anywhere', 'Operations Manager'),
	('Tom Adams', '888 Birch Ln, Everywhere', 'Customer Service Rep'),
	('Michelle Liu', '999 Spruce Dr, Nowhere', 'Graphic Designer'),
	('Alex Nguyen', '111 Oak St, Here', 'IT Support Specialist'),
	('Emily Brown', '222 Maple Ave, There', 'Project Manager');