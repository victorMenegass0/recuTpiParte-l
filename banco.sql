create database db_recuTpi;
use db_recuTpi;

create table tb_funcionario(
cd_funcionario int not null auto_increment primary key,
nm_nome varchar(55) not null, 
dt_nascimento date not null,
nr_cpf varchar(11) not null,
nr_rg varchar(14) not null,
nm_estadoCivil enum('solteiro', 'casado', 'viuvo') default 'solteiro' not null,
vl_salarioBruto decimal(10,2) not null
);

create table tb_dependente(
cd_dependente int not null primary key auto_increment,
nm_dependente varchar(66) not null,
dt_nascimento date not null,
grau_parentesco enum('pai', 'mae', 'tio', 'irmao') default 'tio' not null,
id_funcionario int not null,
foreign key (id_funcionario) references tb_funcionario(cd_funcionario)
);