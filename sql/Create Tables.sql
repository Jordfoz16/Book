CREATE TABLE users(
	userID int AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255),
	password VARCHAR(255),
	email VARCHAR(255),
	fullname VARCHAR(255),
	gender CHAR(1),
	picture VARCHAR(255)
);

CREATE TABLE books(
	bookID int AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	author VARCHAR(255),
	pages INT,
	genre VARCHAR(255),
	rating FLOAT,
	picture VARCHAR(255)
);

CREATE TABLE readList(
	readID int AUTO_INCREMENT PRIMARY KEY,
	userID INT,
	bookID INT,
	progress FLOAT,
	rating FLOAT,
	FOREIGN KEY (userID) REFERENCES users(userID),
	FOREIGN KEY (bookID) REFERENCES books(bookID)
)
