use cadastro;

create table categoria (
    idCategoria int primary key auto_increment,
    nomeCategoria varchar(50) not null unique
);

create table subCategoria (
    idSubCategoria int primary key auto_increment,
    nomeSubCategoria varchar(50) not null,
    idCategoria int not null,
    dataVersion date not null,
    status boolean not null,
    foreign key (idCategoria) references categoria(idCategoria),
    unique (nomeSubCategoria, idCategoria)
);

create table info (
    idInfo int primary key auto_increment,
    nomeInfo varchar(67) not null,
    textoDaInfo varchar(677) not null,
    idCategoria int not null,
    idSubCategoria int not null,
    foreign key (idCategoria) references categoria(idCategoria),
    foreign key (idSubCategoria) references subCategoria(idSubCategoria)
);

insert into categoria (nomeCategoria)
values ('Personagens');

insert into subCategoria (nomeSubCategoria, idCategoria, dataVersion, status)
values
('Protagonista', 1, curdate(), true),
('Antagonista', 1, curdate(), true);

insert into info (nomeInfo, textoDaInfo, idCategoria, idSubCategoria)
values
('Protagonista', 'Personagem principal da história.', 1, 1),
('Vilão', 'Principal inimigo do jogo.', 1, 2);

select * from categoria;
select * from subCategoria;
select * from info;

select 
    i.idInfo,
    i.nomeInfo,
    i.textoDaInfo,
    c.nomeCategoria,
    s.nomeSubCategoria
from info i
inner join categoria c on i.idCategoria = c.idCategoria
inner join subCategoria s on i.idSubCategoria = s.idSubCategoria;