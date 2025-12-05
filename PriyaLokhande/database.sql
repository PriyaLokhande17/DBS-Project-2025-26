-- SQL for restaurant_db
CREATE DATABASE IF NOT EXISTS restaurant_db;
USE restaurant_db;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS menu_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item_name VARCHAR(100),
  price DECIMAL(10,2),
  image VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  item_id INT,
  quantity INT,
  order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (item_id) REFERENCES menu_items(id) ON DELETE CASCADE
);

-- sample menu
INSERT INTO menu_items (item_name, price, image) VALUES
('Margherita Pizza', 249.00, 'pizza.jpg'),
('Classic Burger', 149.00, 'burger.jpg'),
('Creamy Pasta', 199.00, 'pasta.jpg'),
('Cappuccino', 99.00, 'coffee.jpg');
