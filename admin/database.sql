CREATE TABLE admins (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
email VARCHAR(255),
password VARCHAR(255)
);

INSERT INTO admins(name,email,password)
VALUES('Admin','admin@swiftsignbm.com',MD5('admin123'));
