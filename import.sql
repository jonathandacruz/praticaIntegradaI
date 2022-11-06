DROP TABLE IF EXISTS orders_items;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS items;

CREATE TABLE items (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    img_url VARCHAR(1000),
    unit VARCHAR(4),
    description VARCHAR(1000)
);

INSERT INTO `items` (`id`, `name`, `category`, `price`, `img_url`, `unit`) VALUES
(NULL, 'Morango Diamante', 'Frutas', '12.50', 'https://acientistaagricola.pt/wp-content/uploads/2021/05/novo-3-1024x576.png', 'BDJ', ''),
(NULL, 'Morango Albion', 'Frutas', '10.48', 'https://acientistaagricola.pt/wp-content/uploads/2021/05/novo-1-1024x576.png', 'KG', ''),
(NULL, 'Abacaxi Roxo', 'Frutas', '9.99', 'https://i2.wp.com/files.agro20.com.br/uploads/2020/05/Tipos-de-abacaxi-2.jpg?w=1024&ssl=1', 'UN', ''),
(NULL, 'Laranja-Pera', 'Frutas', '5.58', 'https://lh4.googleusercontent.com/DwkEOvRjTncrLTwcXuUmr765sCMZQ8IERT6flWfH1h7BrUnCs1Y8-Un_aJQS72VILtOVtqdwL-FDT-lNQiy8Mzp9sTq8gpv2ChRBPaX_SSwd9A8TtLWV7Y5atyKxb-5_XgOIBCqi', 'KG', ''),
(NULL, 'Alface Lisa', 'Verduras', '1.52', 'https://static.significados.com.br/foto/salad-771059-960-720.jpg', 'PC', ''),
(NULL, 'Tomate', 'Frutas', '2.00', 'https://www.infoescola.com/wp-content/uploads/2011/01/tomate_345187874.jpg', 'KG', ''),
(NULL, 'Banana Nanica', 'Frutas', '5.00', 'https://www.infoescola.com/wp-content/uploads/2021/09/banana-nanica-1218133_1920-600x450.png', 'KG', '');

CREATE TABLE orders (
	id INT AUTO_INCREMENT PRIMARY KEY,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    username VARCHAR(50) NOT NULL,
    status VARCHAR(10)
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