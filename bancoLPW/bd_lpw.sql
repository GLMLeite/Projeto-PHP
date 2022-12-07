Create DATABASE if not exists Banco_lpw;

use Banco_lpw;

Create table cadastro(
	id int not null primary key auto_increment,
	nome varchar(255) not null,
    Email varchar(255) not null,
    Senha varchar(255) not null

);
show tables;
describe cadastro;
select * from banco_lpw.cadastro;