CREATE DATABASE web_project;
USE web_project;

CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    DESCRIPTION TEXT
);

CREATE TABLE blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(255) NOT NULL
);

INSERT INTO gallery (image_url, title, DESCRIPTION) VALUES
('image/img01.jpg', 'Image 1', 'Description for image 1'),
('image/img02.jpg', 'Image 2', 'Description for image 2'),
('image/img03.jpg', 'Image 3', 'Description for image 3'),
('image/img04.jpg', 'Image 4', 'Description for image 4');

INSERT INTO blog (image_url, title, content, author) VALUES
('image/ikai01.jpg', 'Ikai', 'Content for Ikai', 'Raekel'),
('image/ftf02.jpg', 'Fears To Fathom', 'Content for Fears To Fathom', 'Raekel'),
('image/parasos03.jpg', 'Parasocial', 'Content for Parasocial', 'Raekel'),
('image/hsh04.jpg', 'Home Sweet Home', 'Content for Home Sweet Home', 'Raekel');

SELECT * FROM gallery;

SELECT * FROM blog;