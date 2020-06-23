create database ecommerce;
use ecommerce;

create TABLE pedidos(
id_pedido int primary key auto_increment,
id_produto int not null,
quantidade int not null, 
preco float not null,
total float not null
);

create TABLE usuario(
id_usuario int primary key auto_increment,
nome varchar(100) not null,
telefone varchar(20) not null, 
email varchar(50) not null,
senha varchar(200) not null
);

create TABLE produtos(
id int primary key auto_increment,
nome varchar(50) not null,
quantidade int not null, 
preco decimal(10,0) not null
);