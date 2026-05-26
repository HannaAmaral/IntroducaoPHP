CREATE DATABASE escola_nome;
use escola_nome;

CREATE TABLE escola_hanna(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(70),
    idade INT,
    uf CHAR(2),
    cidade VARCHAR(50)
);

INSERT INTO escola_hanna (id, nome, idade, uf, cidade)
VALUES (1, "Hanna Amaral", 17,"SP", "Marilia"),
		(2, "Edson", 10, "SP", "Bauru"),
        (3, "Laura", 12, "SP", "planeta lua")