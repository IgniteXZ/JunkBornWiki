create database cadastro;

use cadastro;

create table usuario(
idUsuario int primary key auto_increment,
nomeUsuario varchar(100) not null,
email varchar (70) not null unique,
senha varchar(255) 
);

create table perfil(
    biografia varchar(100) not null,
	endpasta varchar(255) not null,
    idUsuario int not null,
    foreign key (idUsuario) references usuario(idUsuario)
	

	
);

select * from usuario;
select * from perfil
;

