create database N8_site_tfc
use N8_site_tfc

create table regiao
(
	id_regiao int not null auto_increment primary key,
	uf_regiao char(2) not null,
	mapa_regiao longblob not null, 
	nome_regiao varchar(50) not null unique,
	descricao_regiao varchar(100) not null, 
	cadastro_regiao timestamp not null, 
	cep_regiao char(9) not null, 
	obs_regiao varchar(255) null, 
	status_regiao varchar(10) not null
)

select *from regiao
drop table regiao

create table area
(
	id_area int not null auto_increment primary key,
	id_regiao int not null, 
	id_reciclador int not null, 
	uf_area char(2) not null, 
	mapa_area longblob not null, 
	nome_area varchar(30) not null unique,
	codigo_area varchar(10) not null, 
	cadastro_area timestamp not null, 
	cep_area char(9) not null, 
	obs_area varchar(255) null, 
	status_area varchar(10) not null
)
select *from area
dropo table area

create table reciclador
(
	id_reciclador int not null auto_increment primary key,
	id_area int not null, 
	id_material int not null, 
	nome_reciclador varchar(50) not null unique,
	email_reciclador varchar(30) not null, 
	cpf_reciclador varchar(50) not null, 
	dataNascimento_reciclador date not null, 
	endereco_reciclador varchar(100) not null, 
	telefone_reciclador varchar(13) not null unique,
	obs_reciclador varchar(255) null, 
	status_reciclador varchar(10)  
)
select *from reciclador
drop table reciclador

create table solicitacaoColeta
(
	id_solicitacaoColeta int not null auto_increment primary key,
	id_reciclador int not null, 
	id_mensageiro int not null, 
	local_solicitacaoColeta varchar(50) not null, 
	data_solicitacaoColeta datetime not null, 
	dia_solicitacaoColeta varchar(30) not null, 
	obs_solicitacaoColeta char(255) null, 
	status_solicitacaoColeta varchar(10) not null 
)
select *from solicitacaoColeta
drop table solicitacaoColeta

create table material
(
	id_material int not null auto_increment primary key,
	id_pontoCompra int not null, 
	id_reciclador int not null, 
	imagem_material longblob null, 
	descricao_material varchar(100) not null, 
	nome_material varchar(30) not null, 
	cadastro_material timestamp not null, 
	unidadeMedida_material char(10) not null, 
	peso_material decimal(5,2) not null, 
	valorVenda_material decimal(5,3) not null, 
	obs_material varchar(255) null, 
	status_material varchar(10) not null 
)
select *from material
drop table material

create table pontoColeta
(
	id_pontoColeta int not null auto_increment primary key,
	id_regiao int not null, 
	id_material int not null,
    cadastro_pontoColeta timestamp not null,
	nome_pontoColeta varchar(40) not null unique,
	endereco_pontoColeta varchar(100) not null, 
	cep_pontoColeta char(9) not null, 
	uf_pontoColeta char(2) not null, 
	obs_pontoColeta varchar(255) null, 
	status_pontoColerta varchar(10) not null
)
select *from pontoColeta
drop table pontoColeta

create table mensageiro
(
	id_mensageiro int not null auto_increment primary key,
	id_solicitacaoColeta int not null, 
	cadastro_mensageiro timestamp not null, 
	nome_mensageiro varchar(50) not null unique,
	cpf_mensageiro varchar(100) not null, 
	endereco_mensageiro varchar(80) not null, 
	telefone_mensageiro char(14) not null, 
	login_mensageiro varchar(50) not null unique,
	senha_mensageiro varchar(50) not null, 
	logradouro_mensageiro varchar(100) not null, 
	obs_mensageiro varchar(255) null, 
	status_mensageiro varchar(10) not null 
)
select *from mensageiro
drop table mensageiro