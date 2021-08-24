-- psql -h 127.0.0.1 -U admin db
create table users(
	id bigint,
	nama varchar(30),
	email varchar(100)
);

insert into users values (1,'ozai','ozai@gmail.com');
insert into users values (2,'Azula','Azula@gmail.com');
insert into users values (3,'Aang','aang@gmail.com');
insert into users values (4,'Balmond','balmond@gmail.com');
insert into users values (5,'Budi','budi@gmail.com');
insert into users values (6,'Agus','agus@gmail.com');
insert into users values (7,'Laks','laks@gmail.com');