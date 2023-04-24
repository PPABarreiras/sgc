/*drop schema sgc;*/
create schema SGC;
use SGC;

create table cliente (
	id_cliente integer auto_increment primary key,
	nome varchar(50) not null,
	matricula varchar(15) not null unique,
	senha varchar(255) not null,
    tipo_func varchar(55) not null, 
    email varchar(55) not null unique
);

create table administrador (
	id_administrador integer auto_increment primary key,
	nome varchar(200) not null,
	matricula varchar(15) not null unique,
	senha varchar(255) not null,
	tipo_func varchar(55) not null, 
    email varchar(55) not null unique
);

create table predio ( 
	idPredio integer primary key
); 

/*
SITUAÇÕES CHAVE:
0 - DISPONIVEL
1 - AGENDADA/EM USO
2 - RETIRADA/EM USO
3 - MANUTENÇÃO
*/
create table chave ( 
	idChave integer primary key,  
	situacao integer not null,  
	idPredio integer not null,
    descricao varchar(50) not null,
    foreign key(idPredio) references predio(idPredio)
);
 
create table agendar (
	idChave integer,
    id_cliente varchar(15), 
	turno integer not null, 
    data_agendar date not null,  
	foreign key(idChave) references chave(idChave),
    foreign key(id_cliente) references cliente(matricula),
    primary key(idChave, id_cliente)
);


create table retirar(
    idChave integer,
    id_cliente varchar(15),
    hora time,
    senha varchar(255) not null,
    foreign key(idChave) references chave(idChave),
    foreign key(id_cliente) references cliente(matricula),
    primary key(idChave, id_cliente)
);


create table emprestimo (
	id_emprestimo integer auto_increment primary key,
    idChave integer,
    id_cliente varchar(15), 
    id_funcionario integer,
	foreign key(idChave, id_cliente) references agendar(idChave, id_cliente),
    foreign key(id_funcionario) references administrador(id_administrador)
);