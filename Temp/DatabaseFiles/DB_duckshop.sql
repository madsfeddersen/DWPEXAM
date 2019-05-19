DROP DATABASE IF EXISTS DuckShopDB;
CREATE DATABASE DuckShopDB;
USE DuckShopDB;

DROP TABLE IF EXISTS duck_shop;
CREATE TABLE IF NOT EXISTS duck_shop (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    shop_name varchar(20),
    street_address varchar(30),
	  zipcode varchar(20),
    phone varchar(12),
    email varchar(20),
    opening_hours varchar(10),
    daily_product varchar(10),
    news varchar(100),
    shop_description varchar(1000)
);

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  userEmail VARCHAR(30),
	userPass VARCHAR(30),
	firstName VARCHAR(30),
	lastName VARCHAR(30),
  userRank VARCHAR(10)
);

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
);

insert into duck_shop (id, shop_name, street_address, zipcode, phone, email, opening_hours, daily_product, news, shop_description) values
(1, 'DuckYou!', 'Duck Street 1', '6710 Esbjerg V', '+45 13377331', 'duck@duck.dk', '08-18', 'Trump Duck', 'New products in store, check them out here!', 'THE DUCKINGLY GOOD DESCRIPTION AYE');


insert into users (id, userEmail, userPass, firstName, lastName) values
(1, 'donald@trumpsta.gov', 'password', 'Donald', 'Trump', 'superAdmin');

INSERT INTO `products` (`id`, `name`, `code`, `price`, `description`) VALUES
(1, 'Standard', 'DS0021', 25.00, 'This is your standard average duck. A true classic, if you will!'),
(2, 'Mermaid', 'DS0022', 75.00,'Because, why not'),
(3, 'Arnold', 'DS0023', 150.00, 'DILLOOON! GET TO ZE CHOPPA!'),
(4, 'Sunglasses', 'DS0024', 80.00, 'It’s even cool than you!'),
(5, 'Trump', 'DS0025',  30.00,'A Trump-ified rubber duck (Wall and bad politics not included');
