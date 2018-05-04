




create database ajax;


use ajax;


create table usuario(
	id int primary key auto_increment,
	nombre varchar(30),
	email varchar(50),
	password varchar(50),
	edad int(2)
);