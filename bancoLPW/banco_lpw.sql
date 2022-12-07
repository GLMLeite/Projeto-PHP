## Criação do banco
create database if not exists banco_lpw;

create table if not exists cadastro(
	id int not null primary key auto_increment,
    nome varchar(255) not null,
    senha varchar(255) not null,
    email varchar(255) not null,
    estado varchar(255) not null
);

use banco_lpw;
#### apenas testes
SELECT * FROM banco_lpw.cadastro;
use banco_lpw;


SELECT email FROM banco_lpw.cadastro  WHERE email like 'GuilhermeLeite@gmail.com';