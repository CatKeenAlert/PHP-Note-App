## 创建mysql数据库的sql语句

0.登录mysql数据库
> mysql -uroot -p


1.创建数据库
create database think default set character set utf8;

2.创建表
create table user(id int unsigned not null primary key auto_increment, username char(20) not null default '');

--创建note表
create table frank_note(id int unsigned not null primary key auto_increment, username varchar(20) 
not null default '', content varchar(255) not null default '', time int(10) not null default 0)
engine myisam charset utf8;


create table frank_note(id int unsigned not null primary key auto_increment, username varchar(20) 
not null default '', content varchar(255) not null default '', time int(10) not null default 0)
engine myisam charset utf8;

3.往表中插入几条测试数据
insert into frank_note(username,content,time) values('fanyong','Hello world','2014-3-8 11:11:11');
insert into frank_note(username,content,time) values('Frank','我的todo list','2014-3-9 11:11:11');
insert into frank_note(username,content,time) values('My Note','内容','2014-3-7 11:11:11');
insert into frank_note(username,content,time) values('hi','我的什么','2014-3-6 11:11:11');
insert into frank_note(username,content,time) values('哈哈哈','终于完成了','2014-3-5 11:11:11');


4.timestamp时间戳
update frank_note set time = '2014-3-8;
