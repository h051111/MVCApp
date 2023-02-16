CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(64) NOT NULL
);

CREATE TABLE advertisements (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userid int NOT NULL,
	title VARCHAR(64) NOT NULL,
    FOREIGN KEY(userid) REFERENCES users(id)
);

INSERT INTO users (name) VALUES
('Bob'),
('Dilan'),
('Beatrice'),
('Tom'),
('Kate');

INSERT INTO advertisements (userid, title) VALUES
(1, 'Drill'),
(1, 'Screwdriver'),
(2, 'BMW E36'),
(3, 'PC'),
(3, 'Chair'),
(5, 'Monitor'),
(4, 'Laptop');
