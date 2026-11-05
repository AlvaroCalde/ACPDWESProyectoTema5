

CREATE DATABASE IF NOT EXISTS DBACPDWESProyectoTema5;
USE DBACPDWESProyectoTema5;

CREATE TABLE IF NOT EXISTS T02_Departamento (
    T02_CodDepartamento CHAR(3) NOT NULL,
    T02_DescDepartamento VARCHAR(255) NOT NULL,
    T02_FechaCreacionDepartamento DATETIME NOT NULL,
    T02_VolumenDeNegocio FLOAT NOT NULL,
    T02_FechaBajaDepartamento DATETIME NULL,
    PRIMARY KEY (T02_CodDepartamento)
);

CREATE TABLE T01_Usuario (
    T01_CodUsuario VARCHAR(50) NOT NULL,
    T01_Password VARCHAR(255) NOT NULL,
    T01_DescUsuario VARCHAR(255),
    T01_NumConexiones INT DEFAULT 0,
    T01_FechaHoraUltimaConexion DATETIME,
    T01_Perfil VARCHAR(50),
    T01_ImagenUsuario VARCHAR(255),
    PRIMARY KEY (T01_CodUsuario)
) ENGINE=InnoDB;

CREATE USER 'userACPDWESProyectoTema5'@'%' IDENTIFIED BY 'paso';
GRANT ALL ON DBACPDWESProyectoTema5.* to 'userACPDWESProyectoTema5'@'%';
