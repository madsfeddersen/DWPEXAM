DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50),
	price DECIMAL(5,2),
	description VARCHAR(1000)
);

INSERT INTO `products` (id, name, price, description, code) VALUES
(1, 'Standard', 31.17, 'This is your standard average duck. A true classic, if you will!', 'DS0021');
(2, 'Mermaid', 78.41, 'Because, why not?', 'DS0022');
(3, 'Arnold', 45.06, 'Put that duckie down - NOW! STOP WHINING!', 'DS0023');
(4, 'Sunglasses', 27.85, 'It’s even cool than you!', 'DS0024');
(5, 'Trump', 48.46, 'A Trump-ified rubber duck (Wall and bad politics not included)', 'DS0025');
(6, 'Turtle', 1.35, 'Now, you might be thinking “Hey, that’s not a duck! That’s a turtle”, and that’s not entirely untrue, however, we’ve decided to frankenstein a duck and a turtle to make this incredible creation.', 'DS0026');
(7, 'Bat', 97.21, 'He’s batduck!', 'DS0027');
(8, 'Female', 35.86, 'A female version of the standard duck. Just look at those luscious eyelashes!', 'DS0028');
(9, 'Ninja', 61.99, 'It’s not very good at its job as it can be seen quite easily on this page…', 'DS0029');
(10, 'Danish Dynamite', 74.25, 'A proud red and white duck that symbolizes tradition and patriotism!', 'DS0030');
(11, 'Sweden', 66.5, 'The mortal enemy of the Dansken Duck', 'DS0031');
(12, 'Deejay', 22.07, 'His beats are so slick that they will make you go quackers!', 'DS0032');
(13, 'Grandma', 42.25, 'Might ship with homemade cookies!', 'DS0033');
