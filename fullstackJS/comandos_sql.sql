
use fseletro;

-- um aprendizado: criar o banco de dados no código permite que outras pessoas execute o código e não tenha a responsabilidade de criar um banco de dados baseado no comando do php
create schema fseletro;

create table comentario(
id int auto_increment,
nome varchar (255) not null,
mensagem varchar (300) not null,
data datetime default now(), 
primary key (id)
);

select * from comentario;
