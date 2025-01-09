-- Active: 1735811685898@@127.0.0.1@3306@biblio_school
show DATABASES;

CREATE Table users (
    id int AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(50) NOT NULL,
    pwd VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);

SELECT * from users;

create table role (
    id int,
    Foreign Key (id) REFERENCES users(id),
    name VARCHAR(20)
)


create table reservation (
    id int,
    Foreign Key (id) REFERENCES users(id),
    date_debut DATE,
    date_fin DATE,
    status VARCHAR(20)
)

create table apprenant (
    id int,
    Foreign Key (id) REFERENCES users(id)
)

create table admin (
    id int,
    Foreign Key (id) REFERENCES users(id)
)

create table gerant (
    id int,
    Foreign Key (id) REFERENCES users(id)
)


create table livre (
    id int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50),
    auteur VARCHAR(50),
    stock int,
    dispnible VARCHAR(30)
)

create TABLE categorie(
    id int,
    Foreign Key (id) REFERENCES users(id),
    name VARCHAR(50),
    description VARCHAR(300)
)

create table tag (
    id int,
    Foreign Key (id) REFERENCES users(id),
    name VARCHAR(50)
)

create table test (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20)
)