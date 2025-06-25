CREATE TABLE carros(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    marca VARCHAR(128),
    estado CHAR(3)
) COMMENT 'Tabla de carros de la flota de ventas';