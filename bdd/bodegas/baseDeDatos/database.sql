DROP DATABASE IF EXISTS bodegas;
CREATE DATABASE IF NOT EXISTS bodegas;
USE bodegas;

CREATE TABLE bodegas (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    direccion VARCHAR(80) NOT NULL,
    email VARCHAR(50),
    telefono VARCHAR(20),
    contacto VARCHAR(20),
    fundacion VARCHAR(20),
    restaurante INT(1) DEFAULT 0,
    hotel INT(1) DEFAULT 0
);

CREATE TABLE vinos (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    bodega INT(6) NOT NULL,
    descripcion VARCHAR(80) NOT NULL,
    ano VARCHAR(4),
    tipo VARCHAR(20),
    alcohol VARCHAR(4),
    FOREIGN KEY (bodega) REFERENCES bodegas(id)
);

INSERT INTO bodegas (nombre, direccion, email, telefono, contacto, fundacion, restaurante, hotel)
    VALUES ('vascongadas', 'barrio bajo, Araba', 'bodega@vascongadas.com', '945945945', 'patxi txakurra', '1952-11-22', 1, 1);

INSERT INTO bodegas (nombre, direccion, email, telefono, contacto, fundacion, restaurante, hotel)
    VALUES ('paco', 'Eskuernaga, Araba', 'bodegas@paco.com', '945123122', 'bertin osborne', '1952-11-22', 1, 0);

INSERT INTO vinos (nombre, bodega, descripcion, ano, tipo, alcohol)
    VALUES ('menendez', 1, 'que locura de vino no', '1952-11-22', 'Tinto', '12,1%'); 