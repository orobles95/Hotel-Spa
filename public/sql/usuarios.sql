

DROP TABLE IF EXISTS clientes;
DROP TABLE IF EXISTS suscritos;
DROP TABLE IF EXISTS empleados;

CREATE TABLE IF NOT EXISTS empleados (
    idEmp INT(5) PRIMARY KEY AUTO_INCREMENT,
    dniEmp VARCHAR(15) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(150) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    contrasenya VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    direccion VARCHAR(150) NOT NULL,
    cargo ENUM('Director/a', 'Administrador/a', 'Encargado/a', 'Recepcionista', 'Masajista', 'Esteticien', 'Cocinero/a', 'Camarero/a', 'Limpieza') NOT NULL,
    puesto ENUM('Hotel', 'Spa', 'Restaurante') NOT NULL,
    estado ENUM('Alta', 'Baja') NOT NULL
) engine=InnoDB;

CREATE TABLE IF NOT EXISTS clientes (
    idCliente INT(5) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(150) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    contrasenya VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    numTarjeta INT(50) NOT NULL,
    fechaTarjeta DATE NOT NULL,
    cvvTarjeta INT(3) NOT NULL
) engine=InnoDB;


CREATE TABLE IF NOT EXISTS suscritos (
    idSuscrito INT(5) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL
) engine=InnoDB;