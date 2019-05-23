DROP TABLE IF EXISTS duck_shop;
CREATE TABLE IF NOT EXISTS duck_shop (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    shop_name varchar(20),
    street_address varchar(30),
	zipcode varchar(20),
    phone varchar(12),
    email varchar(20),
    opening_hours varchar(255),
    daily_product text(255),
    news text(10000),
    shop_description text(10000)
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

DROP TABLE IF EXISTS orders;
CREATE TABLE IF NOT EXISTS orders (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	user_id int NOT NULL,
  fullname VARCHAR(30),
	orderEmail VARCHAR(30),
	shipping_address VARCHAR(30),
	city VARCHAR(30),
	zip VARCHAR(30),
	cname VARCHAR(30),
	ccnum VARCHAR(30),
	expmonth VARCHAR(30),
	expyear VARCHAR(30),
	cvv VARCHAR(30),
  productname VARCHAR(30),
  quantity VARCHAR(30),
  size VARCHAR(30),
  color VARCHAR(30),
  price VARCHAR(30)
);

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `for_duck` varchar(255)  NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`image_id`)
);

CREATE VIEW getSite AS SELECT * FROM duck_shop;
CREATE VIEW productlist AS SELECT * FROM products;

CREATE PROCEDURE `getFooter`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT * FROM duck_shop;
CREATE PROCEDURE `getProducts`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT * FROM duck_shop;

insert into duck_shop (id, shop_name, street_address, zipcode, phone, email, opening_hours, daily_product, news, shop_description) 
values (1, 'DuckYou!', 'Duck Street 1', '6710 Esbjerg V', '+45 13377331', 'duck@duck.dk', 'In the quacking Hours', 1,
 'New products in store, check them out here!', 'We are your number 1 stop rubber duck shop. We have been crowned 
 "The best duckshop in the universe" for the seventh year in a row. Yes, by ourselves but that is besides the point!');

insert into users (id, userEmail, userPass, firstName, lastName, userRank) values
(1, 'donald@trumpsta.gov', 'password', 'Donald', 'Trump', '1'),
(2, 'andreashenriksen95@live.dk', 'pass', 'Andreas', 'Madum', '1'),
(3, 'duckshopdwp@gmail.com', 'teacherpassword', 'Duck', 'Shop', '2'),
(4, 'pleb@mail.dk', 'pass', 'Pleb', 'User', '3');

INSERT INTO `products` (`id`, `name`, `code`, `price`, `description`) VALUES
(1, 'Standard', 'DS0021', 25.00, 'This is your standard average duck. A true classic, if you will!'),
(2, 'Mermaid', 'DS0022', 75.00,'Because, why not'),
(3, 'Arnold', 'DS0023', 150.00, 'DILLOOON! GET TO ZE CHOPPA!'),
(4, 'Sunglasses', 'DS0024', 200.00, 'It’s even cool than you!'),
(5, 'Trump', 'DS0025',  25.00,'A Trump-ified rubber duck (Wall and bad politics not included'),
(6, 'Turtle', 'DS0026',  75.00,'Now, you might be thinking “Hey, that’s not a duck! That’s a turtle”, and that’s not entirely untrue, however, we’ve decided to frankenstein a duck and a turtle to make this incredible creation.'),
(7, 'Bat', 'DS0027',  125.00,'“I have one power. I never give up.” – Batman'),
(8, 'Female', 'DS0028',  75.00,'A female version of the standard duck. Just look at those luscious eyelashes!'),
(9, 'Ninja', 'DS0029',  125.00,'It’s not very good at its job as it can be seen quite easily on this page…'),
(10, 'Viking', 'DS0030',  150.00,'A proud red and white duck that symbolizes tradition and patriotism!'),
(11, 'Sweden', 'DS0031',  200.00,'Aka. Faggot Duck. The mortal enemy of the Dansken Duck.'),
(12, 'McDeeJay', 'DS0032',  50.00,'His beats are so slick that they will make you go quackers!'),
(13, 'Grandma', 'DS0033',  25.00,'Might ship with homemade cookies!');

INSERT INTO `orders` (id, `user_id`, fullname, orderEmail, shipping_address, city, zip, cname, ccnum, expmonth, expyear, cvv, productname, quantity, price) VALUES
(1, 1, 'Ma name', 'email', 'road 32', 'esbjerg', '6710', 'Card namez', '1111-2222-3333-4444', 'November', '1995', '352', "Trump", 2, 30.00);

INSERT INTO `images` (`image_id`, `file_name`, `for_duck`, `uploaded_on`, `status`) VALUES
(1, 'Grandma.jpeg', '', '2019-05-22 14:28:14', '1');