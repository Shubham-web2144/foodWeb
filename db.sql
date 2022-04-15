-- database name is `organicFood`

-- first table for product list and its data
CREATE TABLE `organicfood`.`products` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(50) NOT NULL , `product_desc` VARCHAR(120) NOT NULL , `product_img` VARCHAR(255) NOT NULL , `product_price` INT(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- <<<<<<<CREATE 'product_id' ROW AFTER ID ALSO UNIQUE ID >>>>>>>>


-- second table for subscriber
CREATE TABLE `organicfood`.`subscribers` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `email` VARCHAR(40) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



-- third table for user registraion
CREATE TABLE `organicfood`.`userreg` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `unique_id` INT(40) NOT NULL , `name` VARCHAR(40) NOT NULL , `mail` VARCHAR(30) NOT NULL , `phone` INT(12) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


-- order order placement table
CREATE TABLE `organicfood`.`userorder` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `unique_id` INT(30) NOT NULL , `product_id` VARCHAR(60) NOT NULL , `payment_method` VARCHAR(30) NOT NULL , `address` VARCHAR(255) NOT NULL , `currTime` VARCHAR(20) NOT NULL , `status` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
​
-- <<<<<< CREATE TWO ROW FIRST IS 'customer' AFTER UNIQUE_ID AND SECOND IS 'phone' AFTER 'customer' ROW>>>>>>

-- contact us table 
CREATE TABLE `organicfood`.`contact` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `message` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



