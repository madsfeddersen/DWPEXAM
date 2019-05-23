DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `for_duck` varchar(255)  NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`image_id`)
);

INSERT INTO `images` (`image_id`, `file_name`, `for_duck`, `uploaded_on`, `status`) VALUES
(1, 'Grandma.jpeg', '', '2019-05-22 14:28:14', '1');


