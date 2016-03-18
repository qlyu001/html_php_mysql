<?php
//这里可以查看php configuration

// phpinfo();
//char(12)  varchar 长度可变，空间可以回收
create table user1(
id unsgined primary key auto_increment,
name varchar(32) not null,
passwd varchar(64) not null,
email varchar(128)not null,
age tinyint unsigned not null
?>