CREATE DATABASE cadastro_miguelrocha;

USE cadastro_miguelrocha;

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(45) NOT NULL,
    cpf VARCHAR(15) NOT NULL,
    tel VARCHAR(15) NOT NULL,
    email VARCHAR(110) NOT NULL
);

SELECT * FROM usuarios

/*DELETE FROM usuarios
WHERE id = 4;
Apagar dados de uma tabela*/ 