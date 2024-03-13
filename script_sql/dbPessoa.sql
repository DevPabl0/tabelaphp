drop database dbPessoa;

create database dbPessoa;


use dbPessoa;

CREATE TABLE Pessoa(
codigo int not null auto_increment,
nome VARCHAR(100),
sobrenome VARCHAR(100),
idade INT,
primary key(codigo));

INSERT INTO `pessoa` (`nome`, `sobrenome`, `idade`) VALUES ('Maria', 'Joaquina', 45);





