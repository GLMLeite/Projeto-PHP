## Criação do banco
create database if not exists banco_lpw;

create table if not exists cadastro(
	id int not null primary key auto_increment,
    nome varchar(255) not null,
    senha varchar(255) not null,
    email varchar(255) not null,
    estado varchar(255) not null,
    telefone varchar (255) , 
    endereco varchar (255) 
);
create table if not exists produtos(
  id_prod int not null primary key auto_increment, 
  nome varchar(255) not null, 
  tipo varchar(255) not null, 
  descricao varchar(255) not null,
  qtd int not null,
  preco float not null,
  imagem varchar(255) not null
);

create table if not exists PV (
qtd int not null,
codigo int not null,
id_prod int not null,

 FOREIGN KEY (`id_prod`) 
	REFERENCES `produtos` (`id_prod`), 
 FOREIGN KEY (`codigo`)
	REFERENCES `compra` (`codigo`)
);


create table if not exists compra(
codigo int not null primary key auto_increment,
metodopag varchar(255) not null,
total float not null,    
id_prod  int not null   

);

ALTER TABLE produtos  ADD COLUMN imagem VARCHAR(255) NOT NULL AFTER preco;

update produtos set descricao = "O novo Kyle Walker Pro da Vans, é feito com cabedal de lona e camurça. O sistema de absorção de impacto ULTRACUSH HD mantém o pé próximo ao skate, proporcionando o mais alto nível de absorção de impacto, e a construção revolucionária Wafflecup oferece a sustentação de uma sola montada, sem sacrificar a aderência ou boardfeel de um tênis vulcanizado tradicional." where id_prod = 6 ;

select max(id_prod) from produtos; 
SELECT * from produtos WHERE tipo = 'lixa';
insert into produtos (nome, tipo, descricao, qtd, preco)
   values ( 'tenis vans', 'vestuario', 'confortavel', '15', '400.00');
   
   SELECT * FROM banco_lpw.produtos;
use banco_lpw;
#### apenas testes
SELECT * FROM banco_lpw.compra;
SELECT * FROM banco_lpw.cadastro;
use banco_lpw;

SELECT email FROM banco_lpw.cadastro  WHERE email like 'GuilhermeLeite@gmail.com';