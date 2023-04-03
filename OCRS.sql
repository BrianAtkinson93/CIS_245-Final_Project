CREATE DATABASE OCRS;

use OCRS;

CREATE TABLE users (
                       id INT(11) NOT NULL AUTO_INCREMENT,
                       name VARCHAR(100) NOT NULL,
                       email VARCHAR(100) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL,
                       PRIMARY KEY (id)
);
CREATE TABLE most_wanted (
                             id INT AUTO_INCREMENT PRIMARY KEY,
                             name VARCHAR(255) NOT NULL,
                             image_path VARCHAR(255) NOT NULL,
                             offence_details TEXT NOT NULL
);
INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Vladimir Putin', 'images/putin.jpg', 'Wanted for multiple human rights violations, corruption, and undermining democracy.');

INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Ruja Ignatova', 'images/ruja.jpg', 'Wanted for her role in orchestrating the OneCoin scam, a massive Ponzi scheme.');

INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Dawood Ibrahim', 'images/dawood.jpg', 'Wanted for organized crime, terrorism, drug trafficking, and money laundering.');

INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Samantha Lewthwaite', 'images/samantha.jpg', 'Wanted for her alleged involvement in terrorist activities.');

INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Joaquín "El Chapo" Guzmán', 'images/el_chapo.jpg', 'Wanted for drug trafficking, money laundering, and organized crime.');
ALTER TABLE users ADD COLUMN user_role VARCHAR(50) NOT NULL DEFAULT 'user';
DELETE FROM most_wanted WHERE name NOT IN ('Vladimir Putin', 'Ruja Ignatova');
INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Omar Alexander Cardenas', 'images/omar.jpg', 'Wanted for murder, drug trafficking, and organized crime.');
INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Yulan Adonay Archaga Carias', 'images/yulan.jpg', 'Wanted for human trafficking and smuggling.');
INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Michael James Pratt', 'images/michael.jpg', 'Wanted for embezzlement, fraud, and money laundering.');
INSERT INTO most_wanted (name, image_path, offence_details)
VALUES ('Alejandro Rosales Castillo', 'images/alejandro.jpg', 'Wanted for drug trafficking, money laundering, and organized crime.');
CREATE TABLE missing_persons (
                                 id INT(11) NOT NULL AUTO_INCREMENT,
                                 name VARCHAR(100) NOT NULL,
                                 last_seen_location VARCHAR(100) NOT NULL,
                                 image_path VARCHAR(255) NOT NULL,
                                 PRIMARY KEY (id)
);
INSERT INTO missing_persons (name, last_seen_location, image_path) VALUES ('John Doe', 'New York', 'images/johndoe.jpg');
INSERT INTO missing_persons (name, last_seen_location, image_path) VALUES ('Jane Smith', 'Los Angeles', 'images/janesmith.jpg');
INSERT INTO missing_persons (name, last_seen_location, image_path) VALUES ('Mark Johnson', 'Chicago', 'images/markjohnson.jpg');
ALTER TABLE missing_persons ADD description TEXT AFTER image_path;
UPDATE missing_persons SET description='John Doe is a 45-year-old man who was last seen wearing a blue jacket and jeans.' WHERE name='John Doe';
UPDATE missing_persons SET description='Jane Smith is a 25-year-old woman who was last seen wearing a red dress and white sneakers.' WHERE name='Jane Smith';
UPDATE missing_persons SET description='Mark Johnson is a 32-year-old man who was last seen wearing a green shirt and black pants.' WHERE name='Mark Johnson';
ALTER TABLE missing_persons ADD gender VARCHAR(10) NOT NULL AFTER name;
UPDATE missing_persons SET gender='male' WHERE name='John Doe';
UPDATE missing_persons SET gender='female' WHERE name='Jane Smith';
UPDATE missing_persons SET gender='male' WHERE name='Mark Johnson';
CREATE TABLE lost_found (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            title VARCHAR(255) NOT NULL,
                            description TEXT NOT NULL,
                            image_path VARCHAR(255) NOT NULL,
                            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO lost_found (title, description, image_path)
VALUES
    ('Lost Key', 'I lost my house key somewhere in the park', 'images/lost_key.jpg'),
    ('Found Phone', 'I found an iPhone in the mall parking lot', 'images/found_phone.jpg'),
    ('Lost Dog', 'My dog ran away in the neighborhood', 'images/lost_dog.jpg'),
    ('Found Wallet', 'I found a wallet on the sidewalk', 'images/found_wallet.jpg'),
    ('Lost Ring', 'I lost my wedding ring while hiking', 'images/lost_ring.jpg'),
    ('Found Bike', 'I found a bike in the park', 'images/found_bike.jpg');

ALTER TABLE users ADD first_name TEXT AFTER id;
ALTER TABLE users ADD last_name TEXT AFTER first_name;
ALTER TABLE users DROP name;

CREATE TABLE lost_items (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            crime_type VARCHAR(255) NOT NULL,
                            crime_location VARCHAR(255) NOT NULL,
                            crime_description TEXT NOT NULL,
                            email VARCHAR(255) NOT NULL,
                            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO lost_items (crime_type, crime_location, crime_description, email)
VALUES ('Stolen Wallet', 'Downtown', 'Black wallet with credit cards and driver\'s license', 'test@example.com');

INSERT INTO lost_items (crime_type, crime_location, crime_description, email)
VALUES ('Lost Phone', 'Central Park', 'White iPhone 12 with a green case', 'user@example.com');

INSERT INTO lost_items (crime_type, crime_location, crime_description, email)
VALUES ('Stolen Bicycle', 'City Library', 'Blue mountain bike, Trek brand', 'bikeowner@example.com');
