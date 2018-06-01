

DROP TABLE IF EXISTS clientes;

CREATE TABLE IF NOT EXISTS clientes (
    idCliente INT(5) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(150) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    contrasenya VARCHAR(50) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    numTarjeta INT(50) NOT NULL,
    fechaTarjeta DATE NOT NULL,
    cvvTarjeta INT(3) NOT NULL
) engine=InnoDB;


