create table users
(
    id         int auto_increment
        primary key,
    first_name text                       null,
    last_name  text                       null,
    email      varchar(100)               not null,
    password   varchar(255)               not null,
    user_role  varchar(50) default 'user' not null,
    constraint email
        unique (email)
);

INSERT INTO OCRS.users (id, first_name, last_name, email, password, user_role) VALUES (2, 'Brian', 'Atkinson', 'BrianAtkinson72@gmail.com', 'test123', 'admin');
