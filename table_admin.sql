
create table About(titre_1 varchar(150) Not NUll,descr_1 varchar(300) Not NULL,titre_2 varchar(150) Not NUll,descr_2 varchar(300) Not NULL,title_image varchar(150),status varchar(150) DEFAULT "YES");
create table Stati(id INT Not NULL ,titre varchar(150) Not NUll,pourcentage INT NOT NULL ,statu varchar(150) DEFAULT "disabled");
create table Cards(titre1 varchar(300) Not NUll,desc1 varchar(300) Not NUll,titre2 varchar(300) Not NUll,desc2 varchar(300) Not NUll,titre3 varchar(300) Not NUll,desc3 varchar(300) Not NUll,statu varchar(150) DEFAULT "enabled");
