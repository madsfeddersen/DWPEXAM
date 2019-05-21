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
  price VARCHAR(30)
);

INSERT INTO `orders` (id, user_id, fullname, orderEmail, shipping_address, city, zip, cname, ccnum, expmonth, expyear, cvv, productname, quantity, price) VALUES
(1, 1, 'Ma name', 'email', 'road 32', 'esbjerg', '6710', 'Card namez', '1111-2222-3333-4444', 'November', '1995', '352', "Trump", 2, 30.00);
                   