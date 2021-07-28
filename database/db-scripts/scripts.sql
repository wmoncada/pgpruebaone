CREATE TABLE pg_sexo
(
	id int UNSIGNED AUTO_INCREMENT primary KEY,
	nombre varchar(25)
) ENGINE=InnoDB

CREATE TABLE pg_tipo_persona
(
	id int UNSIGNED AUTO_INCREMENT primary KEY,
	nombre varchar(50)
)


CREATE TABLE pg_prospectos
(
	id bigint(20) UNSIGNED AUTO_INCREMENT primary KEY,
	nombres varchar(100),
	apellidos varchar(100),
	idsexo int UNSIGNED,
	fechanacimiento date,
	correo varchar(255),
	telefono varchar(25),
	idtipopersona int UNSIGNED,
	nombrecomercial varchar(100),
	website varchar(100),
	mensaje text,
	fecharegistro datetime,
	FOREIGN KEY (idsexo) REFERENCES pg_sexo(id),
	FOREIGN KEY (idtipopersona) REFERENCES pg_tipo_persona(id)
) ENGINE=InnoDB


-- DATOS 
INSERT INTO `pg_sexo` (`id`, `nombre`) VALUES (NULL, 'Masculino'), (NULL, 'Femenino');

INSERT INTO `pg_tipo_persona` (`id`, `nombre`) VALUES (NULL, 'Persona Natural');
