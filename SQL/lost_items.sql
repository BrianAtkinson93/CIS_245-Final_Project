create table lost_items
(
    id                int auto_increment
        primary key,
    crime_type        varchar(255)                        not null,
    crime_location    varchar(255)                        not null,
    crime_description text                                not null,
    email             varchar(255)                        not null,
    created_at        timestamp default CURRENT_TIMESTAMP not null
);

INSERT INTO OCRS.lost_items (id, crime_type, crime_location, crime_description, email, created_at) VALUES (1, 'Stolen Wallet', 'Downtown', 'Black wallet with credit cards and driver\'s license', 'test@example.com', '2023-04-02 18:25:47');
INSERT INTO OCRS.lost_items (id, crime_type, crime_location, crime_description, email, created_at) VALUES (2, 'Lost Phone', 'Central Park', 'White iPhone 12 with a green case', 'user@example.com', '2023-04-02 18:25:47');
INSERT INTO OCRS.lost_items (id, crime_type, crime_location, crime_description, email, created_at) VALUES (3, 'Stolen Bicycle', 'City Library', 'Blue mountain bike, Trek brand', 'bikeowner@example.com', '2023-04-02 18:25:47');
