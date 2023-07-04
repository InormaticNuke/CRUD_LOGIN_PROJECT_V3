Create database nukedb;
use nukedb;

CREATE TABLE Usuario (
    Rut VARCHAR(12) PRIMARY KEY,
    nombres VARCHAR(50),
    apellido1 VARCHAR(50),
    apellido2 VARCHAR(50),
    direccion VARCHAR(50),
    fono varchar(9),
    clave varchar(20));

CREATE TABLE Perfil (
    ID int PRIMARY KEY,
    UserType varchar(10),
    Rut varchar(12) References usuario);
    
    
INSERT INTO `usuario` (`Rut`, `Nombres`, `apellido1`, `apellido2`, `direccion`, `fono`, `clave`) VALUES ('20.907.416-8', 'Manuel', 'Rengifo', 'Taffe', 'Av Providencia 2640', 91786048,'nuke');

INSERT INTO `usuario` (`Rut`, `Nombres`, `apellido1`, `apellido2`, `direccion`, `fono`, `clave`) VALUES ('69.420.420-9', 'Cosme', 'Fulanito', 'Fulanito', 'SpringField', 11069335,'incognito');

INSERT INTO `perfil` (`ID`, `UserType`, `Rut`) VALUES(10,'Admin','20.907.416-8');
INSERT INTO `perfil` (`ID`, `UserType`, `Rut`) VALUES(69,'Normal','69.420.42-9');

SELECT * FROM Usuario;
SELECT * FROM Perfil;
