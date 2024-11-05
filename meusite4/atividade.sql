CREATE TABLE Usuario (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL 
);

CREATE TABLE Favorito (
	usuario_id INT,
	PRIMARY KEY (usuario_id,filme_id),
	FOREIGN KEY (usuario_id) REFERENCES Usuario(id)
);


INSERT INTO Usuario(nome) values
('Usuário 1')
('Usuário 2')
('Usuário 3')
('Usuário 4')
('Usuário 5')
('Usuário 6')
('Usuário 7')
('Usuário 8')
('Usuário 9')
('Usuário 10')
('Usuário 11')
('Usuário 12')
('Usuário 13')
('Usuário 14')
('Usuário 15')
('Usuário 16')
('Usuário 17')
('Usuário 18')
('Usuário 19')
('Usuário 20')

SELECT * FROM Usuario;

SELECT * FROM Usuario WHERE id-10;

SELECT nome FROM Usuario;


UPDATE Usuario SET nome = 'Novo Nome' WHERE id = ?;  -- Substitua ? pelo ID desejado


DELETE FROM Usuario WHERE id = ?;  -- Substitua ? pelo ID desejado

