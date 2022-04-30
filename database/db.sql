CREATE DATABASE IF NOT EXISTS voting_app;

use voting_app;

CREATE TABLE IF NOT EXISTS users(
    id int not null auto_increment primary key,
    username varchar(255) not null,
    password varchar(255) not null
);

CREATE TABLE IF NOT EXISTS candidates(
    id int not null auto_increment primary key,
    name varchar(255) not null
);

CREATE TABLE IF NOT EXISTS candidate_votes(
    id int not null auto_increment primary key,
    user_id int not null,
    candidate_id int not null,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (candidate_id) REFERENCES candidates(id)
);

CREATE USER 'devops'@'%' IDENTIFIED BY 'lalaqwe';
GRANT ALL ON voting_app.* TO 'devops'@'%';