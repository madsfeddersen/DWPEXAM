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

insert into duck_shop (id, shop_name, street_address, zipcode, phone, email, opening_hours, daily_product, news, shop_description) values (1, 'DuckYou!', 'Duck Street 1', '6710 Esbjerg V', '+45 13377331', 'duck@duck.dk', '08-18', 'Trump Duck', 'New products in store, check them out here!', 'We are your number 1 stop rubber duck shop. My name is Bob. Ill find the way out myself xD');

