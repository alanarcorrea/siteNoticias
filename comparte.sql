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
  photo VARCHAR(100),
  description VARCHAR(1000) NOT NULL,

  PRIMARY KEY (idNews)
 );

-- -----------------------------------------------------
-- Table clients
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS clients (
  idClients INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  PRIMARY KEY (idClients)  
);

-- -----------------------------------------------------
-- Insert into table News
-- -----------------------------------------------------
INSERT INTO news (title, photo, description) VALUES
	('Noticia 1', NUll, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat voclutpat. Ut wisi enim ad minim veniam, quis nostrud exercimagna.'),
	('Noticia 2', NUll, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat voclutpat. Ut wisi enim ad minim veniam, quis nostrud exercimagna.'),
	('Noticia 3', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat voclutpat. Ut wisi enim ad minim veniam, quis nostrud exercimagna.'),
	('Noticia 4', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat voclutpat. Ut wisi enim ad minim veniam, quis nostrud exercimagna.'),
	('Noticia 5', NUll, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat voclutpat. Ut wisi enim ad minim veniam, quis nostrud exercimagna.');

-- -----------------------------------------------------
-- Insert into table Clients
-- -----------------------------------------------------
INSERT INTO clients (name, email) VALUES
	('Monica Botelho', 'monicaa@comparte.com.br'),
	('Alana Corrêa', 'alanarcorrea@gmail.com'),
	('Lucas Alves', 'lucaslimapel@gmail.com');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
