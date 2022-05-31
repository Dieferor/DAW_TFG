SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `customers`;
DROP TABLE IF EXISTS `admins`;
DROP TABLE IF EXISTS `manufacturers`;
--
-- Table structure for table products
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,  
  `product_title` text NOT NULL, 
  `product_img` text NOT NULL,  
  `product_price` int(10) NOT NULL,  
  `product_desc` text NOT NULL,
  `product_featured` boolean NOT NULL DEFAULT false,
  `manufacturer_id` int(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`product_title`, `product_img`, `product_price`, `product_desc`, `product_featured`, `manufacturer_id`) VALUES
('cama de matrimonio', 'product-1.jpeg', '1299', 'decripcion1', true, 3),
('cama doble dise&ntildeo', 'product-2.jpeg', '1599', 'decripcion2', true, 3),
('cama doble tradicional', 'product-3.jpeg', '999', 'decripcion3', true, 2),
('cama doble moderna', 'product-4.jpeg', '1199', 'decripcion3',false, 2);

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL, 
  `customer_password` text NOT NULL,
  PRIMARY KEY (`customer_id`)    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `customers` (`customer_name`, `customer_email`, `customer_password`) VALUES
('pepito perez', 'pepito@test.es', SHA1('password'));

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admins` (`admin_name`, `admin_email`, `admin_pass`) VALUES
('Administrator', 'admin', '1234');

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT,
  `manufacturer_title` text NOT NULL,    
  PRIMARY KEY (`manufacturer_id`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `manufacturers` AUTO_INCREMENT=2;

INSERT INTO `manufacturers` (`manufacturer_title`) VALUES
('Flex'),
('Salgar');

