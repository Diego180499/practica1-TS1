create database adivinamaya;

create table user(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username  VARCHAR(20) NOT NULL,
    password  VARCHAR (20) NOT NULL,
    email     VARCHAR(100) NULL,
    phone    VARCHAR(15) NULL,
    points   INT(3) NOT NULL,
);

CREATE TABLE figura(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    url  VARCHAR(100) NULL,
    valor_numerico  INT NULL
);


CREATE TABLE juego(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    fecha_juego DATE NULL,
    FOREIGN KEY (user_id) REFERENCES user(id)
);


create table detalle_juego(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    figura_id INT NOT NULL,
    juego_id INT NOT NULL,
    FOREIGN KEY (figura_id) REFERENCES figura(id),
    FOREIGN KEY (juego_id) REFERENCES juego(id)
);