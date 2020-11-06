
use fseletro;

create table comentario(
id int auto_increment,
nome varchar (255) not null,
mensagem varchar (300) not null,
data datetime default now(), 
primary key (id)
);

select * from comentario;