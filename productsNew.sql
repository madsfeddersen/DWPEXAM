DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `products` (`id`, `name`, `code`, `price`, `description`) VALUES
(1, 'Standard', 'DS0021', 25.00, 'This is your standard average duck. A true classic, if you will!'),
(2, 'Mermaid', 'DS0022', 75.00,'Because, why not'),
(3, 'Arnold', 'DS0023', 150.00, 'DILLOOON! GET TO ZE CHOPPA!'),
(4, 'Sunglasses', 'DS0024', 80.00, 'It’s even cool than you!'),
(5, 'Trump', 'DS0025',  30.00,'A Trump-ified rubber duck (Wall and bad politics not included'),
(6, 'Turtle', 'DS0025',  30.00,'Now, you might be thinking “Hey, that’s not a duck! That’s a turtle”, and that’s not entirely untrue, however, we’ve decided to frankenstein a duck and a turtle to make this incredible creation.'),
(7, 'Bat', 'DS0025',  30.00,'“I have one power. I never give up.” – Batman'),
(8, 'Female', 'DS0025',  30.00,'A female version of the standard duck. Just look at those luscious eyelashes!'),
(9, 'Ninja', 'DS0025',  30.00,'It’s not very good at its job as it can be seen quite easily on this page…'),
(10, 'Danish Dynamite', 'DS0025',  30.00,'A proud red and white duck that symbolizes tradition and patriotism!'),
(11, 'Sweden', 'DS0025',  30.00,'Aka. Faggot Duck. The mortal enemy of the Dansken Duck.'),
(12, 'McDeeJay', 'DS0025',  30.00,'His beats are so slick that they will make you go quackers!'),
(13, 'Grandma', 'DS0025',  30.00,'Might ship with homemade cookies!');
