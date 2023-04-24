-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.
DROP DATABASE BD_PETSHOP;
CREATE DATABASE BD_PETSHOP;
USE BD_PETSHOP;



CREATE TABLE ADM (
ID_ADM INT(5) auto_increment PRIMARY KEY,
NOME VARCHAR(50),
SOBRENOME VARCHAR(100)
);

CREATE TABLE FUNCIONARIO (
ID_FUNCIONARIO INT(5) auto_increment PRIMARY KEY,
SOBRENOME VARCHAR(250),
NOME VARCHAR(50),
CPF CHAR(11),
EMAIL VARCHAR(200),
DATA_NASCIMENTO DATE,
PROFISSAO VARCHAR(50),
DATA_ENTRADA DATETIME,
DATA_SAIDA DATETIME
);

CREATE TABLE ENDERECO_FUNCIONARIO (
ID_ENDERECO_FUNCIONARIO INT(5) auto_increment PRIMARY KEY,
BAIRRO VARCHAR(10),
CEP CHAR(8),
COMPLETO VARCHAR(50),
LOGADOURO VARCHAR(250),
NUMERO VARCHAR(200),
UF CHAR(2),
CIDADE VARCHAR(200),
FK_FUN_END INT(4),
FOREIGN KEY(FK_FUN_END) REFERENCES FUNCIONARIO (ID_FUNCIONARIO)
);

CREATE TABLE CLIENTE (
ID_CLIENTE INT(5) auto_increment PRIMARY KEY,
NOME VARCHAR(100),
SOBRENOME VARCHAR(100),
CPF CHAR(11),
DATA_NASCIMENTO DATE,
EMAIL VARCHAR(250),
PROFISSAO VARCHAR(50),
DATA_ENTRADA DATETIME,
DATA_SAIDA DATETIME
);

CREATE TABLE LOGIN_FUNCIONARIO (
ID_LOGIN_FUNCIONARIO INT(5) auto_increment PRIMARY KEY,
USERNAME VARCHAR(50),
SENHA VARCHAR(10),
DATA_DE_ENTRADA DATETIME,
DATA_DE_SAIDA DATETIME,
FK_FUN_LOG INT(4),
FOREIGN KEY(FK_FUN_LOG) REFERENCES FUNCIONARIO (ID_FUNCIONARIO)
);

CREATE TABLE ENDERECO_CLIENTE (
ID_ENDERECO_FUNCIONARIO INT(5) auto_increment PRIMARY KEY,
BAIRRO VARCHAR(250),
CEP CHAR(8),
COMPLETO VARCHAR(50),
LOGADOURO VARCHAR(250),
NUMERO INT(6),
UF VARCHAR(2),
CIDADE VARCHAR(250),
FK_CLI_END INT(4),
FOREIGN KEY(FK_CLI_END) REFERENCES CLIENTE (ID_CLIENTE)
);

CREATE TABLE PET (
ID_PET INT(5) auto_increment PRIMARY KEY,
NOME VARCHAR(200),
DATA_CADASTRO DATETIME,
PET VARCHAR(50),
COR VARCHAR(250),
PESO VARCHAR(4),
SEXO CHAR(2),
DATA_NASCIMENTO DATETIME,
FK_PET_CLI INT(4),
FOREIGN KEY(FK_PET_CLI) REFERENCES CLIENTE (ID_CLIENTE)
);

CREATE TABLE SERVICOS (
ID_AGED_CLST INT(5) auto_increment PRIMARY KEY,
SERVIÇO VARCHAR(50),
DATA_SERVICOS DATE,
HORARIO TIME,
FK_CLI_AGE INT(4),
FOREIGN KEY(FK_CLI_AGE) REFERENCES CLIENTE (ID_CLIENTE)
);

CREATE TABLE HISTORICO (
ID_HISTORICO INT(5) auto_increment PRIMARY KEY,
SERVIÇO VARCHAR(50),
DATA_HISTORICO DATE,
HORARIO TIME,
FK_SERV_HIST INT(4),
FOREIGN KEY(FK_SERV_HIST) REFERENCES SERVICOS (ID_AGED_CLST)
);

CREATE TABLE LOGIN_ADM (
ID_LOGIN INT(5) auto_increment PRIMARY KEY,
SENHA VARCHAR(50),
USERNAME VARCHAR(50),
FK_LOGIN INT(4),
FOREIGN KEY(FK_LOGIN) REFERENCES ADM (ID_ADM)
);

CREATE TABLE AMIGOS_REC (
ID_AMG_REC INT(5) auto_increment PRIMARY KEY,
NOME VARCHAR(50),
SOBRENOME VARCHAR(50),
FK_AMG_SER INT(4),
FOREIGN KEY(FK_AMG_SER) REFERENCES SERVICOS (ID_AGED_CLST)
);

CREATE TABLE ENDERECO_AMIGOS (
ID_ENDERECO_FUNCIONARIO INT(5) auto_increment PRIMARY KEY,
BAIRRO VARCHAR(250),
CEP CHAR(8),
NUMERO INT(6),
UF CHAR(2),
CIDADE VARCHAR(200),
FK_AMG_END INT(4),
FOREIGN KEY(FK_AMG_END) REFERENCES AMIGOS_REC (ID_AMG_REC)
);

CREATE TABLE LOGIN_CLIENTE (
ID_LOGIN_CLIENTE INT(5) auto_increment PRIMARY KEY,
USERNAME VARCHAR(50),
SENHA VARCHAR(50),
DATA_DE_ENTRADA DATETIME,
DATA_DE_SAIDA DATETIME,
FK_CLI_LOG INT(4),
FOREIGN KEY(FK_CLI_LOG) REFERENCES CLIENTE (ID_CLIENTE)
);
