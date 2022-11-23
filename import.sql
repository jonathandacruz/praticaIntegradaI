CREATE DATABASE IF NOT EXISTS `shopDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

DROP TABLE IF EXISTS orders_items;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS items;

CREATE TABLE customers (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    address VARCHAR(50) NOT NULL,
    number INT NOT NULL,
    complement VARCHAR(50),
    district VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(2) NOT NULL,
    zipcode VARCHAR(8) NOT NULL
);

CREATE TABLE items (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    img_url VARCHAR(1000),
    unit VARCHAR(4),
    description VARCHAR(1000)
);

CREATE TABLE orders (
	id INT AUTO_INCREMENT PRIMARY KEY,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    username VARCHAR(50) NOT NULL,
    id_customer INT NOT NULL ,
    status VARCHAR(10),
    CONSTRAINT fk_customers FOREIGN KEY (id_customer) REFERENCES customers(id)
);


CREATE TABLE orders_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity DECIMAL(10,2) NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    order_id INT NOT NULL,
    CONSTRAINT fk_items FOREIGN KEY (item_id) REFERENCES items(id),
    CONSTRAINT fk_orders FOREIGN KEY (order_id) REFERENCES orders(id)
);

INSERT INTO `items` (`id`, `name`, `category`, `price`, `img_url`, `unit`, `description`) VALUES
(NULL, 'Morango Diamante', 'Frutas', '12.50', 'https://acientistaagricola.pt/wp-content/uploads/2021/05/novo-3-1024x576.png', 'BDJ', ''),
(NULL, 'Morango Albion', 'Frutas', '10.48', 'https://acientistaagricola.pt/wp-content/uploads/2021/05/novo-1-1024x576.png', 'KG', ''),
(NULL, 'Abacaxi Roxo', 'Frutas', '9.99', 'https://i2.wp.com/files.agro20.com.br/uploads/2020/05/Tipos-de-abacaxi-2.jpg?w=1024&ssl=1', 'UN', ''),
(NULL, 'Laranja-Pera', 'Frutas', '5.58', 'https://lh4.googleusercontent.com/DwkEOvRjTncrLTwcXuUmr765sCMZQ8IERT6flWfH1h7BrUnCs1Y8-Un_aJQS72VILtOVtqdwL-FDT-lNQiy8Mzp9sTq8gpv2ChRBPaX_SSwd9A8TtLWV7Y5atyKxb-5_XgOIBCqi', 'KG', ''),
(NULL, 'Alface Lisa', 'Verduras', '1.52', 'https://static.significados.com.br/foto/salad-771059-960-720.jpg', 'PC', ''),
(NULL, 'Tomate', 'Frutas', '2.00', 'https://www.infoescola.com/wp-content/uploads/2011/01/tomate_345187874.jpg', 'KG', ''),
(NULL, 'Banana Nanica', 'Frutas', '5.00', 'https://www.infoescola.com/wp-content/uploads/2021/09/banana-nanica-1218133_1920-600x450.png', 'KG', '');

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `number`, `complement`, `district`, `city`, `state`, `zipcode`) VALUES
(NULL, 'João da Silva', '', '11999999999', 'Rua dos Bobos', '0', '', 'Sé', 'São Paulo', 'SP', '00000000'),
(NULL, 'Maria da Silva', '', '11999999999', 'Rua dos Bobos', '0', '', 'Sé', 'São Paulo', 'SP', '00000000'),
(NULL, 'José da Penha', '', '11999999999', 'Rua dos Lobos', '0', '', 'Sé', 'São Paulo', 'SP', '00000000'),
(NULL, 'Joana da Penha', '', '11999999999', 'Rua dos Lobos', '0', '', 'Sé', 'São Paulo', 'SP', '00000000');
