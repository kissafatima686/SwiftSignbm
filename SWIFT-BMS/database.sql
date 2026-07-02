CREATE DATABASE IF NOT EXISTS bms;
USE bms;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    role_id INT,
    company_id INT DEFAULT 1
);

INSERT INTO users (name,email,password,role_id)
VALUES ('Admin','admin@gmail.com',
'$2y$10$wH1vW8KzK9QJzYk0QJxwUu7sWqS5nJ3gQ2FJ5q8m3zKk2F8YvJY2G',1);
