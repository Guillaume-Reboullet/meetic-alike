DROP DATABASE meetic;
DROP TABLE user;
CREATE DATABASE meetic;

USE meetic;

CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(255) NOT NULL, 
    firstname VARCHAR(255) NOT NULL, 
    birthdate DATE NOT NULL, 
    gender VARCHAR(255) NOT NULL, 
    city VARCHAR(255) NOT NULL, 
    email VARCHAR(255) UNIQUE NOT NULL, 
    pwd VARCHAR(255) NOT NULL,
    loisir VARCHAR(255) NOT NULL);

    