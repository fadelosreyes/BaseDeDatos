DROP TABLE IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
    id BIGSERIAL PRIMARY KEY,
    codigo VARCHAR(2) NOT NULL UNIQUE,
    denominacion VARCHAR(255) NOT NULL
);

INSERT INTO departamentos (codigo, denominacion)
VALUES ('10', 'Informatica'),
       ('40', 'Administracion'),
       ('30', 'Matematicas');