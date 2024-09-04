CREATE DATABASE equipo;

USE equipo;

CREATE TABLE Competiciones (
    competicion VARCHAR(255) PRIMARY KEY
);

CREATE TABLE Personas (
    nit BIGINT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    nacimiento DATE NOT NULL
);

CREATE TABLE Jugadores (
    dorsal INT PRIMARY KEY,
    nit BIGINT UNIQUE,
    FOREIGN KEY (nit) REFERENCES Personas(nit)
);

CREATE TABLE Partidos (
    fecha DATE PRIMARY KEY,
    competicion VARCHAR(255),
    rival VARCHAR(255) NOT NULL,
    estadio VARCHAR(255) NOT NULL,
    FOREIGN KEY (competicion) REFERENCES Competiciones(competicion)
);

ALTER DATABASE equipo charset=utf8;

INSERT INTO Competiciones (competicion) VALUES 
('Liga Nacional'),
('Copa del Rey'),
('Champions League');
INSERT INTO Personas (nit, nombre, nacimiento) VALUES 
(123456789, 'Juan Pérez', '1990-05-14'),
(987654321, 'Carlos López', '1985-10-23'),
(192837465, 'Ana Gómez', '1992-03-02');
INSERT INTO Jugadores (dorsal, nit) VALUES
(10, 123456789),
(7, 987654321),
(5, 192837465);
INSERT INTO Partidos (fecha, competicion, rival, estadio) VALUES 
('2024-09-15', 'Liga Nacional', 'Real Madrid', 'Camp Nou'),
('2024-10-01', 'Copa del Rey', 'Atlético Madrid', 'Santiago Bernabéu'),
('2024-11-20', 'Champions League', 'Manchester City', 'Wanda Metropolitano');


SELECT Jugadores.dorsal, Personas.nombre FROM Jugadores INNER JOIN Personas ON Jugadores.nit = Personas.nit;
