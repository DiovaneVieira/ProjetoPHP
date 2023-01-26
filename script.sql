mysql -u root

create database avaliacao1;
use avaliacao1;

create table avaliacao1(
    id int primary key auto_increment,
    nome varchar (220),
    materia varchar(50),
    nota varchar (20)
);

insert into avaliacao1 values(null,'Diovane','Programacao','7');
insert into avaliacao1 values(null,'Fulano','Programacao','9');
insert into avaliacao1 values(null,'Ciclano','Programacao','10');
insert into avaliacao1 values(null,'Beltrano','Programacao','10');

select * from avaliacao1;