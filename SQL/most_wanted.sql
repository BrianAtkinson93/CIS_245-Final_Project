create table most_wanted
(
    id              int auto_increment
        primary key,
    name            varchar(255) not null,
    image_path      varchar(255) not null,
    offence_details text         not null
);

INSERT INTO OCRS.most_wanted (id, name, image_path, offence_details) VALUES (2, 'Ruja Ignatova', 'images/most_wanted/ruja.jpg', 'Wanted for her role in orchestrating the OneCoin scam, a massive Ponzi scheme.');
INSERT INTO OCRS.most_wanted (id, name, image_path, offence_details) VALUES (6, 'Omar Alexander Cardenas', 'images/most_wanted/omar.jpg', 'Wanted for murder, drug trafficking, and organized crime.');
INSERT INTO OCRS.most_wanted (id, name, image_path, offence_details) VALUES (7, 'Yulan Adonay Archaga Carias', 'images/most_wanted/yulan.jpg', 'Wanted for human trafficking and smuggling.');
INSERT INTO OCRS.most_wanted (id, name, image_path, offence_details) VALUES (9, 'Alejandro Rosales Castillo', 'images/most_wanted/alejandro.jpg', 'Wanted for drug trafficking, money laundering, and organized crime.');
INSERT INTO OCRS.most_wanted (id, name, image_path, offence_details) VALUES (12, 'Vladimir Putin', 'images/most_wanted/putin.jpg', 'Wanted for multiple human rights violations, corruption, and undermining democracy.');
