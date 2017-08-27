create database if not exists scoresystem;

use scoresystem;

drop table if exists score_admin_users;

create table if not exists score_admin_users(
id int(8) unsigned not null auto_increment primary key,
email varchar(255) default null comment '邮箱',
name  varchar(255) not null comment '姓名',
password varchar(255) not null comment '密码');

insert into score_admin_users (id,email,name,password) values ('1','','admin','admin');

drop table if exists score_teachers;

create table not exists score_teachers(
id int(8) unsigned not null auto_increment primary key,
email varchar(255) default null comment '邮箱',
name varchar(255) not null comment '姓名',
password varchar(255) not null comment '密码');

create table not exists score_student_users(
id int(8) unsigned not null auto_increment primary key,
number int(255) unsigned not null unique key comment '学号',
name varchar(255) not null comment '姓名',
password varchar(255) not null comment '密码');