SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `customers`;
--
-- Table structure for table products
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_url` text NOT NULL,
  `product_title` text NOT NULL, 
  `product_img` text NOT NULL,  
  `product_price` int(10) NOT NULL,  
  `product_desc` text NOT NULL,
  `product_featured` boolean NOT NULL DEFAULT false,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`product_title`, `product_url`, `product_img`, `product_price`, `product_desc`, `product_featured`) VALUES
('cama de matrimonio', 'product-url-1', 'product-1.jpeg', '1299', 'decripcion1', true),
('cama doble diseño', 'product-url-2', 'product-2.jpeg', '1599', 'decripcion2', true),
('cama doble tradicional', 'product-url-3', 'product-3.jpeg', '999', 'decripcion3', true),
('cama doble 3', 'product-url-4', 'product-4.jpeg', '1199', 'decripcion3',false);

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL, 
  `customer_password` text NOT NULL,
  PRIMARY KEY (`customer_id`)    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `customers` (`customer_name`, `customer_email`, `customer_password`) VALUES
('pepito perez', 'pepito_perez@yahoo.com', SHA1('password'));
