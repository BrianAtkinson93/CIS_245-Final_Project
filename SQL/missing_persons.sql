create table missing_persons
(
    id                 int auto_increment
        primary key,
    name               varchar(100) not null,
    gender             varchar(10)  not null,
    last_seen_location varchar(100) not null,
    image_path         varchar(255) not null,
    description        text         null
);

INSERT INTO OCRS.missing_persons (id, name, gender, last_seen_location, image_path, description) VALUES (1, 'John Doe', 'male', 'New York', 'images/missing_persons/johndoe.jpg', 'John Doe is a 45-year-old man who was last seen wearing a blue jacket and jeans.');
INSERT INTO OCRS.missing_persons (id, name, gender, last_seen_location, image_path, description) VALUES (2, 'Jane Smith', 'female', 'Los Angeles', 'images/missing_persons/janesmith.jpg', 'Jane Smith is a 25-year-old woman who was last seen wearing a red dress and white sneakers.');
INSERT INTO OCRS.missing_persons (id, name, gender, last_seen_location, image_path, description) VALUES (3, 'Mark Johnson', 'male', 'Chicago', 'images/missing_persons/markjohnson.jpg', 'Mark Johnson is a 32-year-old man who was last seen wearing a green shirt and black pants.');
