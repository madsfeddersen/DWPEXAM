DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
	id INT,
	name VARCHAR(50),
	price DECIMAL(5,2),
	description VARCHAR(1000)
);

insert into products (id, name, price, description) values (1, 'Standard', 31.17, 'This is your standard average duck. A true classic, if you will!');
insert into products (id, name, price, description) values (2, 'Mermaid', 78.41, 'Because, why not?');
insert into products (id, name, price, description) values (3, 'Arnold', 45.06, 'Put that duckie down - NOW! STOP WHINING!');
insert into products (id, name, price, description) values (4, 'Sunglasses', 27.85, 'It’s even cool than you!');
insert into products (id, name, price, description) values (5, 'Trump', 48.46, 'A Trump-ified rubber duck (Wall and bad politics not included)');
insert into products (id, name, price, description) values (6, 'Turtle', 1.35, 'Now, you might be thinking “Hey, that’s not a duck! That’s a turtle”, and that’s not entirely untrue, however, we’ve decided to frankenstein a duck and a turtle to make this incredible creation.');
insert into products (id, name, price, description) values (7, 'Bat', 97.21, 'He’s batduck!');
insert into products (id, name, price, description) values (8, 'Female', 35.86, 'A female version of the standard duck. Just look at those luscious eyelashes!');
insert into products (id, name, price, description) values (9, 'Ninja', 61.99, 'It’s not very good at its job as it can be seen quite easily on this page…');
insert into products (id, name, price, description) values (10, 'Dansken', 74.25, 'A proud red and white duck that symbolizes tradition and patriotism!');
insert into products (id, name, price, description) values (11, 'Svensken', 66.5, 'The mortal enemy of the Dansken Duck');
insert into products (id, name, price, description) values (12, 'Deejay', 22.07, 'His beats are so slick that they will make you go quackers!');
insert into products (id, name, price, description) values (13, 'Grandma', 42.25, 'Might ship with homemade cookies!');
