CREATE DATABASE centro_medico;

use centro_medico;


CREATE TABLE pacientes(
nombre VARCHAR(30),
fecha_nacimiento date,
genero VARCHAR(30),
direccion VARCHAR(500),
telefono INT(20),
email VARCHAR(30),
nombre_contacto VARCHAR(30),
relacion_contacto VARCHAR(30),
telefono_contacto INT(20),
sintomas_paciente VARCHAR(500)
);