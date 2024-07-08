
CREATE DATABASE IF NOT EXISTS message_portafolio;

USE message_portafolio;

CREATE TABLE IF NOT EXISTS users(

id          int(255) auto_increment not null,
name        varchar(100) not null,
username    varchar(100) not null,
email       varchar(100) not null,
message     text,
created_at  date,   

PRIMARY KEY(id)

)ENGINE = InnoDB;