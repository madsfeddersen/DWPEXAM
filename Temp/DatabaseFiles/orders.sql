DROP TABLE IF EXISTS orders;
CREATE TABLE IF NOT EXISTS orders (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30),
	email VARCHAR(30),
	shipping_address VARCHAR(30),
	city VARCHAR(30),
	zip VARCHAR(30),
	cname VARCHAR(30),
	ccnum VARCHAR(30),
	expmonth VARCHAR(30),
	expyear VARCHAR(30),
	cvv VARCHAR(30)
);

INSERT INTO `orders` (id, fullname, email, shipping_address, city, zip, cname, ccnum, expmonth, expyear, cvv) VALUES
(1, 'Ma name', 'email', 'road 32', 'esbjerg', '6710', 'Card namez', '1111-2222-3333-4444', 'November', '1995', '352');
                   