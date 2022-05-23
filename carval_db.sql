SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `products`;
--
-- Table structure for table products
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_title` text NOT NULL, 
  `product_img` text NOT NULL,  
  `product_price` int(10) NOT NULL,  
  `product_desc` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`product_title`, `product_img`, `product_price`, `product_desc`) VALUES
('cama de matrimonio', 'product-1.jpeg', '1299', 'decripcion1'),
('cama doble diseño', 'product-2.jpeg', '1599', 'decripcion2'),
('cama doble tradicional', 'product-3.jpeg', '999', 'decripcion3');
