DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	userEmail VARCHAR(30),
	userPass VARCHAR(30),
	firstName VARCHAR(30),
	lastName VARCHAR(30),
  	userRank VARCHAR(10)
);

insert into users (id, userEmail, userPass, firstName, lastName, userRank) values
(1, 'donald@trumpsta.gov', 'password', 'Donald', 'Trump', '1'),
(1, 'andreashenriksen95@live.dk', 'pass', 'Andreas', 'Madum', '1'),
(1, 'duckshopdwp@gmail.com', 'teacherpassword', 'Duck', 'Shop', '2'),
(1, 'pleb@mail.dk', 'pass', 'Pleb', 'User', '3');
