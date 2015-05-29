grant all privileges on *.* to `webapp`@`%` identified by 'password' with grant option;
flush privileges;

create database blog default character set utf8;
create database test_blog default character set utf8;
