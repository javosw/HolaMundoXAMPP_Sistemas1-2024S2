CREATE DATABASE equipo DEFAULT CHARACTER SET = 'utf8mb4' COLLATE utf8mb4_unicode_ci;
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

ALTER DATABASE equipo DEFAULT CHARSET=utf8mb4;

INSERT INTO Competiciones (competicion) VALUES 
('Liga Nacional de Guatemala 2022-23'),
('Primera División de España 2023-24'),
('Liga de Campeones de la Concacaf 2023');

INSERT INTO Personas (nit, nombre, nacimiento) VALUES 
(4954141319858,'Carlos Contreras Barela','1988-07-20'),
(9885549841356,'Tomás Corona Cruz','1995-07-07'),
(3477608272784,'Hernán Córdova Gallegos','1996-04-07'),
(2587691573851,'Alan Alanis Garrido','1994-03-29'),
(2353303881284,'Alfredo Cedillo Sánchez','1997-06-18'),
(5795382876948,'Juan Manuel Kamat Montemayor','1995-05-04'),
(4033500241803,'Aarón Zepeda Montemayor','1988-09-17'),
(7197324301914,'Rodrigo Aguilera Tafoya','1997-09-24'),
(3603220552288,'Tadeo Orosco Hidalgo','1990-03-12'),
(7233584035552,'Arturo Zavala Chávez','1986-05-10'),
(3436067870085,'Uriel Chavarría Cedillo','1990-09-20'),
(1394646065501,'Emilio Centeno Kranz sans','1987-05-03'),
(6477845605886,'Emmanuel Batista Amaya','1993-10-21'),
(2592733710432,'Felipe Cruz Varela','1989-06-03'),
(8120827783630,'Rodrigo Paz Cotto','1985-05-16'),
(2211837836413,'Mariano Ibarra de Gálvez','1988-10-06'),
(1697109554002,'Juan Pablo Salcido Jurado','1995-03-02'),
(1258199373471,'Octavio Martínez Sedillo','1988-04-25'),
(4168706498456,'Ignacio Pedroza Caraballo','1992-05-20'),
(1153563748919,'Gerardo Marroquín Quiroz','1996-08-12'),
(5796960326354,'Gilberto Olivera Magaña','1988-02-03'),
(5092226503351,'Andrés Pagan Roque','1994-04-07'),
(2439281273424,'Raúl Domínquez Delrío','1996-09-25'),
(8238791590185,'Abraham Rodrígez Abrego','1994-07-19'),
(4369279033945,'Gilberto Prieto Yunta','1990-05-12');

INSERT INTO Jugadores (dorsal, nit) VALUES
(1,4954141319858),
(2,9885549841356),
(3,3477608272784),
(4,2587691573851),
(5,2353303881284),
(6,5795382876948),
(7,4033500241803),
(8,7197324301914),
(9,3603220552288),
(10,7233584035552),
(11,3436067870085),
(12,1394646065501),
(13,6477845605886),
(14,2592733710432),
(15,8120827783630),
(16,2211837836413),
(17,1697109554002),
(18,1258199373471),
(19,4168706498456),
(20,1153563748919),
(21,5796960326354),
(22,5092226503351),
(23,2439281273424),
(24,8238791590185),
(25,4369279033945);

INSERT INTO Partidos (fecha, competicion, rival, estadio) VALUES 
('2022-11-12','Liga Nacional de Guatemala 2022-23','Achuapa','Winston Pineda'),
('2022-05-16','Liga Nacional de Guatemala 2022-23','Antigua GFC','Pensativo'),
('2022-08-18','Liga Nacional de Guatemala 2022-23','Cobán Imperial','José Ángel Rossi'),
('2022-07-08','Liga Nacional de Guatemala 2022-23','Comunicaciones','Doroteo Guamuch Flores'),
('2022-12-20','Liga Nacional de Guatemala 2022-23','Guastatoya','David Cordón Hichos'),
('2022-06-11','Liga Nacional de Guatemala 2022-23','Iztapa','El Morón'),
('2022-09-11','Liga Nacional de Guatemala 2022-23','Malacateco','Santa Lucía'),
('2022-08-11','Liga Nacional de Guatemala 2022-23','Mixco','Santo Domingo'),
('2022-08-07','Liga Nacional de Guatemala 2022-23','Municipal','El Trébol'),
('2022-02-23','Liga Nacional de Guatemala 2022-23','Santa Lucía','Santa Lucía Cotzumalguapa'),
('2022-03-01','Liga Nacional de Guatemala 2022-23','Xelajú MC','Mario Camposeco'),
('2022-01-02','Liga Nacional de Guatemala 2022-23','Xinabajul Huehue ','Los Cuchumatanes '),
('2023-04-11','Liga de Campeones de la Concacaf 2023','León','Mexico'),
('2023-07-21','Liga de Campeones de la Concacaf 2023','Los Angeles','Estados Unidos'),
('2023-09-30','Liga de Campeones de la Concacaf 2023','Tigres','Mexico'),
('2023-10-30','Liga de Campeones de la Concacaf 2023','Philadelphia Union','Estados Unidos'),
('2023-10-07','Liga de Campeones de la Concacaf 2023','Violette','Haití'),
('2023-09-14','Liga de Campeones de la Concacaf 2023','Atlas','Mexico'),
('2023-07-16','Liga de Campeones de la Concacaf 2023','Vancouver Whitecaps','Canadá'),
('2023-12-28','Liga de Campeones de la Concacaf 2023','Motagua','Honduras'),
('2023-09-01','Liga de Campeones de la Concacaf 2023','Olimpia','Honduras'),
('2023-08-06','Liga de Campeones de la Concacaf 2023','Alajuelense','Costa Rica'),
('2023-03-20','Liga de Campeones de la Concacaf 2023','Real España','Honduras'),
('2023-06-23','Liga de Campeones de la Concacaf 2023','Austin','Estados Unidos'),
('2023-01-02','Liga de Campeones de la Concacaf 2023','Orlando City','Estados Unidos'),
('2023-07-22','Liga de Campeones de la Concacaf 2023','Pachuca','Mexico'),
('2023-03-17','Liga de Campeones de la Concacaf 2023','Alianza','El Salvador'),
('2023-04-27','Liga de Campeones de la Concacaf 2023','Tauro','Panamá'),
('2023-08-02','Primera División de España 2023-24','Athletic Club','San Mamés'),
('2023-09-24','Primera División de España 2023-24','Atlético de Madrid','Cívitas Metropolitano'),
('2023-03-14','Primera División de España 2023-24','Barcelona','Olímpico Lluís Companys'),
('2024-04-08','Primera División de España 2023-24','Celta de Vigo','Abanca-Balaídos'),
('2023-09-25','Primera División de España 2023-24','Getafe','Coliseum17​'),
('2024-02-26','Primera División de España 2023-24','Granada','Nuevo Los Cármenes'),
('2023-06-29','Primera División de España 2023-24','Las Palmas','Gran Canaria'),
('2023-04-05','Primera División de España 2023-24','Mallorca','Mallorca Son Moix'),
('2023-03-10','Primera División de España 2023-24','Rayo Vallecano','Estadio de Vallecas'),
('2023-02-01','Primera División de España 2023-24','Real Betis','Benito Villamarín'),
('2024-01-03','Primera División de España 2023-24','Real Madrid','Santiago Bernabéu'),
('2023-01-20','Primera División de España 2023-24','Real Sociedad','Reale Arena'),
('2024-04-28','Primera División de España 2023-24','Sevilla','Ramón Sánchez-Pizjuán'),
('2023-05-08','Primera División de España 2023-24','Valencia','Mestalla'),
('2023-02-25','Primera División de España 2023-24','Villarreal ','La Cerámica');

SELECT Jugadores.dorsal, Personas.nombre FROM Jugadores INNER JOIN Personas ON Jugadores.nit = Personas.nit;
