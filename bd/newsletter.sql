-- -----------------------------------------------------
-- Schema newsletter
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS newsletter DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE newsletter ;

-- -----------------------------------------------------
-- Table news
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS news (
  idNews INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(250) NOT NULL,
  photo VARCHAR(60),
  description VARCHAR(1000) NOT NULL,

  PRIMARY KEY (idNews)
 );

-- -----------------------------------------------------
-- Table clients
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS clients (
  idClients INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(150) NOT NULL,
  email VARCHAR(45) NOT NULL,
  PRIMARY KEY (idClients)  
);

-- -----------------------------------------------------
-- Insert into table News
-- -----------------------------------------------------
INSERT INTO news (title, photo, description) VALUES
	('Noticia 1', '148700269258a1dc4425748.jpg', 'Descricao da noticia 1'),
	('Noticia 2', '148700277958a1dc9b60783.jpg', 'Descricao da noticia 2'),
	('Noticia 3', 'NULL', 'Descricao da noticia 3'),
	('Noticia 4', 'NULL', 'Descricao da noticia 4'),
	('Noticia 5', '148700307558a1ddc3219ef.jpg', 'Descricao da noticia 5');

-- -----------------------------------------------------
-- Insert into table Clients
-- -----------------------------------------------------
INSERT INTO clients (name, email) VALUES
	('Monica Botelho', 'monicaa@comparte.com.br'),
	('Alana Corrêa', 'alanarcorrea@gmail.com');

