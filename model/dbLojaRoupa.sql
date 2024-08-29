 -- Eduardo Felix, Pedro Diniz, Igor Primo e Pedro Freitas
create database dbLojaRoupa
default character set utf8
default collate utf8_general_ci;

use dbLojaRoupa;

create table produto(
	idProduto int auto_increment primary key not null,
    corProduto varchar(20) not null,
    nomeProduto varchar(70) not null,
    modeloProduto varchar(70) not null,
    tecidoProduto varchar(50) not null,
    marcaProduto varchar(70) not null
);

create table estoque(
	idEstoque int auto_increment not null primary key,
    loteEstoque int not null,
    dataEstoque datetime not null,
    qtdEstoque int not null,
    precoCusto decimal(8,2) not null,
    precoVenda decimal(8,2) not null,
    constraint uqEstoque unique (dataEstoque, loteEstoque)
);

create table tamanho(
	idTamanho int auto_increment not null primary key,
    nomeTamanho varchar(10) not null
);

create table cliente(
	idCliente int auto_increment not null primary key,
	nomeCliente varchar(100) not null,
    cpfCliente char(11) not null unique,
    telCliente char(11) not null unique,
    emailCliente varchar(70) not null unique,
    numResidCliente varchar(10) not null,
    complResidCliente varchar(70) not null,
    obsResidCliente varchar(70) not null
);

create table endereco(
	idEndereco int auto_increment not null primary key,
    cepEndereco char(8) not null,
    tipoEndereco varchar(20) not null,
    ruaEndereco varchar(35) not null,
    cidadeEndereco varchar(29) not null,
    bairroEndereco varchar(35) not null,
    ufEndereco varchar(20) not null
);

create table venda(
	nfVenda varchar(7) not null primary key,
    dataVenda datetime not null
);

create table vItem(
	idvItem int auto_increment not null primary key,
    qtdadevItem int not null,
    precovItem decimal(8,2) not null
);

create table tamProd(
	idEstoque int not null,
    idTamanho int not null,
    primary key (idEstoque, idTamanho),
    constraint fkidEst foreign key (idEstoque) references estoque(idEstoque),
    constraint fkidT foreign key (idTamanho) references tamanho(idTamanho)
);

create table cliEnd(
	idCliente int not null,
    idEndereco int not null,
	primary key (idCliente, idEndereco),
    constraint fkidC foreign key (idCliente) references cliente(idCliente),
    constraint fkidEnd foreign key (idEndereco) references endereco(idEndereco)
);

alter table estoque add idProduto int not null;
alter table estoque add constraint fkprodutoestoque
foreign key(idProduto) references produto(idProduto);

alter table venda add idCliente int not null;
alter table venda add constraint fkclientevenda
foreign key(idCliente) references cliente(idCliente);

alter table vItem add nfVenda varchar(7) not null unique;
alter table vItem add constraint fkvendavItem
foreign key(nfVenda) references venda(nfVenda);

alter table vItem add idEstoque int not null unique;
alter table vItem add constraint fkprodutovItem
foreign key(idEstoque) references estoque(idEstoque);