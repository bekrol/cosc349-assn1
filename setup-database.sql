CREATE TABLE books (
  bookID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  bookName varchar(255) NOT NULL,
  author varchar(255) NOT NULL,
  genre varchar(255) NOT NULL,
  dateFinished date NOT NULL,
  rating int NOT NULL
  review mediumtext NOT NULL
);

INSERT INTO books (bookName, author, genre, dateFinished, rating, review) VALUES
('The Great Gatsby', 'F. Scott Fitzgerald', 'Classic', '2020-01-01', 5, 'This book was amazing!'),
('A Court of Thorns and Roses', 'Sarah J. Maas', 'Romantasy', '2024-01-01', 5, 'This book was amazing!'),
('The Hunger Games', 'Suzanne Collins', 'Dystopian', '2023-10-5', 5, 'This book was amazing!'),
('The Night Circus', 'Erin Morgenstern', 'Fantasy', '2023-9-12', 5, 'This book was amazing!');

