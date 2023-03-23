-- Create users table
CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(255) NOT NULL,
                       email VARCHAR(255) NOT NULL,
                       password VARCHAR(255) NOT NULL,
                       role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data into users table
INSERT INTO users (username, email, password, role)
VALUES ('testuser', 'testuser@example.com', 'testuserpassword', 'user'),
       ('admin', 'admin@example.com', 'adminpassword', 'admin');

-- Create crimes table
CREATE TABLE crimes (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        user_id INT,
                        title VARCHAR(255) NOT NULL,
                        description TEXT NOT NULL,
                        location VARCHAR(255) NOT NULL,
                        reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert sample data into crimes table
INSERT INTO crimes (user_id, title, description, location)
VALUES (1, 'Burglary', 'A house was broken into and several items were stolen.', '123 Main St, Springfield'),
       (1, 'Vandalism', 'Graffiti was found on the side of a building.', '456 Oak St, Springfield');

-- Create missing_persons table
CREATE TABLE missing_persons (
                                 id INT AUTO_INCREMENT PRIMARY KEY,
                                 user_id INT,
                                 name VARCHAR(255) NOT NULL,
                                 age INT,
                                 last_seen VARCHAR(255) NOT NULL,
                                 description TEXT NOT NULL,
                                 image_filename VARCHAR(255) NOT NULL,
                                 reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                 FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert sample data into missing_persons table
INSERT INTO missing_persons (name, age, last_seen, description, image_filename, reported_at)
VALUES ('John Doe', 34, '2023-01-10', 'Description for John Doe', 'image1.jpg', '2023-01-11'),
       ('Jane Smith', 28, '2023-02-15', 'Description for Jane Smith', 'image2.jpg', '2023-02-16'),
       ('Robert Brown', 45, '2023-03-01', 'Description for Robert Brown', 'image3.jpg', '2023-03-02');

-- Create lost_and_found table
CREATE TABLE lost_and_found (
                                id INT AUTO_INCREMENT PRIMARY KEY,
                                user_id INT,
                                item_name VARCHAR(255) NOT NULL,
                                description TEXT NOT NULL,
                                location VARCHAR(255) NOT NULL,
                                is_lost BOOLEAN NOT NULL,
                                reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert sample data into lost_and_found table
INSERT INTO lost_and_found (user_id, item_name, description, location, is_lost)
VALUES (1, 'Black Wallet', 'A black leather wallet containing a driver''s license and several credit cards.', '123 Main St, Springfield', true),
       (1, 'Red Umbrella', 'A red umbrella with a wooden handle.', '456 Oak St, Springfield', false);
