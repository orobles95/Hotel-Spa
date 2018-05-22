DROP DATABASE IF EXISTS hotelspa;
CREATE DATABASE IF NOT EXISTS hotelspa;
USE hotelspa;

CREATE TABLE IF NOT EXISTS personal (
	dni varchar(15) primary key,
	nom varchar(50) not null,
	cognoms varchar(100) not null,
	estat enum('0','1','2') not null
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS habitacion (
	id varchar(15) primary key,
	nom varchar(50) not null,
	estat enum('0','1','2') not null
) ENGINE=InnoDB;