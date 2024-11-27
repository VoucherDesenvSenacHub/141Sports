create database sports141;
use sports141;

create table estado (
  id_estado int primary key,
  estado varchar(100) not null
);

create table contato (
  id_contato int primary key auto_increment,
  nome varchar(100) not null,
  email varchar(100) not null,
  mensagem varchar(300) not null
);

create table funcionario (
  email varchar(100) primary key not null,
  nome varchar(100) not null,
  senha varchar(20) not null,
  telefone varchar(12) not null,
  admin_verify bool not null
);

create table suporte (
  id_suporte int primary key auto_increment,
  id_cliente_cpf varchar(11) not null,
  mensagem varchar(300) not null,
  imagem blob
  #foreign key (id_cliente_cpf) references cliente(id_cpf)
);
alter table suporte add foreign key (id_cliente_cpf) references cliente(id_cpf);
describe suporte;

create table cliente (
  id_cpf varchar(11) primary key,
  nome varchar(100) not null,
  data_nascimento date not null,
  email varchar(100) not null,
  telefone varchar(15) not null,
  genero varchar(25) not null,
  senha varchar(20) not null,
  id_endereco int
  #foreign key (id_endereco) references endereco(id_endereco)
);
ALTER TABLE cliente
ADD CONSTRAINT fk_cliente_endereco
FOREIGN KEY (id_endereco) REFERENCES endereco(id_endereco);
describe cliente;

create table avaliacao (
  id_avaliacao int primary key auto_increment,
  quantidade int not null,
  id_produto int not null,
  id_status_avaliacao int not null
  #foreign key (id_produto) references produto(id_produto),
  #foreign key (id_status_avaliacao) references status_avaliacao(id_status)
);
alter table avaliacao add foreign key (id_produto) references produto(id_produto);
alter table avaliacao add foreign key (id_status_avaliacao) references status_avaliacao(id_status);
describe avaliacao;

create table endereco (
  id_endereco int primary key auto_increment,
  cep varchar(20) not null,
  id_cidade int not null,
  id_estado int not null,
  tipo_logradouro varchar(50),
  nome_logradouro varchar(100),
  bairro varchar(100),
  complemento varchar(50),
  numero varchar(30)
  #foreign key (id_cidade) references cidade(id_cidade),
  #foreign key (id_estado) references estado(id_estado)
);
alter table endereco add foreign key (id_cidade) references cidade(id_cidade);
alter table endereco add foreign key (id_estado) references estado(id_estado);
describe endereco;



create table cidade (
  id_cidade int primary key,
  cidade varchar(100) not null,
  id_estado int not null,
  foreign key (id_estado) references estado(id_estado)
);
describe cidade;

create table pagamento (
  id_pagamento int primary key auto_increment,
  id_carrinho int not null,
  id_status_pagamento int not null,
  id_cliente_cpf varchar(11) not null
  #foreign key (id_carrinho) references carrinho(id_carrinho),
  #foreign key (id_status_pagamento) references pagamento_status(id_status),
  #foreign key (id_cliente_cpf) references cliente(id_cpf)
);
alter table pagamento add foreign key (id_carrinho) references carrinho(id_carrinho);
alter table pagamento add foreign key (id_status_pagamento) references pagamento_status(id_status);
alter table pagamento add foreign key (id_cliente_cpf) references cliente(id_cpf);


create table produto (
  id_produto int primary key auto_increment,
  cod_fornecedor int not null,
  tamanho varchar(1) not null,
  imagem blob,
  valor decimal(10,2) not null,
  nome_prod varchar(40) not null,
  descricao varchar(100) not null,
  id_catalogo int not null
  #foreign key (cod_fornecedor) references fornecedor(cod_fornecedor),
  #foreign key (id_catalogo) references catalogo(id_catalogo)
);
alter table produto add foreign key (cod_fornecedor) references fornecedor(cod_fornecedor);
alter table produto add foreign key (id_catalogo) references catalogo(id_catalogo);


create table fornecedor (
  cod_fornecedor int primary key,
  nome_fornecedor varchar(100),
  cnpj char(18),
  contato varchar(70),
  telefone char(14),
  inscricao varchar(50)
);

create table catalogo (
  id_catalogo int primary key,
  nome_catalogo varchar(40)
);

create table pagamento_status (
  id_status int primary key auto_increment,
  status varchar(30),
  status_pag bool not null
);

create table historico_compra (
  id_historico int primary key auto_increment,
  id_pagamento int not null,
  id_cliente_cpf varchar(11) not null,
  foreign key (id_pagamento) references pagamento(id_pagamento),
  foreign key (id_cliente_cpf) references cliente(id_cpf)
);

create table estoque (
  id_estoque int primary key auto_increment,
  quantidade int not null,
  id_produto int not null,
  foreign key (id_produto) references produto(id_produto)
);
DESCRIBE estoque;

create table carrinho (
  id_carrinho int primary key auto_increment,
  id_produto int not null,
  id_cliente_cpf varchar(11),
  quantidade int not null,
  foreign key (id_produto) references produto(id_produto),
  foreign key (id_cliente_cpf) references cliente(id_cpf)
);

create table status_avaliacao (
  id_status int primary key auto_increment,
  id_cliente int not null,
  status bool not null
);