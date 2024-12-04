create database sports141;
use sports141;


CREATE TABLE estado (
  id int primary key,
  estado varchar(100) not null
);
CREATE TABLE funcionario (
  emailFunc varchar(100) not null primary key,
  nomeFunc varchar(100) not null,
  senhaFunc varchar(20) not null,
  teleFunc varchar(30) not null,
  setorFunc varchar(60) not null,
  adminVerify bool not null
);
CREATE TABLE contato (
  id int primary key auto_increment,
  nomeCtt varchar(100) not null,
  emailCtt varchar(100) not null ,
  mensagem varchar(300) not null
);
CREATE TABLE cidade (
  id int primary key,
  cidade varchar(100) not null,
  idEstado int,
  foreign key (idEstado) references estado(id)
);
CREATE TABLE endereco (
  id int auto_increment primary key,
  cep varchar(20) not null,
  idCidade int not null,
  foreign key (idCidade) references cidade(id),
  idEstado int not null,
  foreign key (idEstado) references estado(id),
  tipoLogradouro varchar(50),
  nomeLogradouro varchar(100),
  bairro varchar(100),
  complemento varchar(50),
  numero varchar(30)
);
CREATE TABLE cliente (
  id int auto_increment primary key,
  cpfCli varchar(11) not null unique,
  nomeCli varchar(100) not null,
  dataNsc date not null,
  emailCli varchar(100) not null,
  telefoneCli varchar(15) not null,
  genero varchar(25) not null,
  senhaCli varchar(20) not null,
  idEndereco int,
  foreign key (idEndereco) references endereco(id)
);
CREATE TABLE suporte (
  id int primary key auto_increment,
  idCli int,
  foreign key (idCli) references cliente(id), 
  mensagemSup varchar(300) not null,
  imagemSup blob
);

CREATE TABLE statusAvaliacao (
  id int primary key auto_increment,
  idCli int,
  foreign key (idCli) references cliente(id), 
  status bool not null
);
CREATE TABLE catalogo (
  id int auto_increment primary key,
  nomeCatalogo varchar(40)
);
CREATE TABLE produto (
  id int primary key auto_increment,
  tamanhoProd varchar(10) not null,
  imagemProd blob,
  valorProd decimal(10,2) not null,
  nomeProd varchar(40) not null,
  descricaoProd varchar(100) not null,
  idCatalogo int not null,
  foreign key (idCatalogo) references catalogo(id)
);
CREATE TABLE avaliacao (
  id int primary key auto_increment,
  nota int not null,
  idProduto int not null,
  foreign key (idProduto) references produto(id),
  idStatus int not null,
  foreign key (idStatus) references statusAvaliacao(id)
);
CREATE TABLE carrinho (
  id int primary key auto_increment,
  idProduto int not null,
  foreign key (idProduto) references produto(id),
  idCli int,
  foreign key (idCli) references cliente(id), 
  quantidadeCarrinho int not null
);
CREATE TABLE pagamentoStatus (
  id int primary key auto_increment,
  statusPagamento varchar (60),
  statusPag bool not null
);
CREATE TABLE pagamento (
  id int primary key auto_increment,
  idCarrinho int not null,
  idStatus int not null,
  idCliente int not null
);
CREATE TABLE historicoCompra (
  id int primary key auto_increment,
  idPagamento int not null,
  idCli int not null
);
CREATE TABLE estoque (
  id int primary key auto_increment,
  qtdEstoque int not null,
  idProduto int not null
);