CREATE TABLE books (
  bookID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  bookName varchar(255) NOT NULL,
  author varchar(255) NOT NULL,
  dateFinished date NOT NULL,
  rating int NOT NULL
  review mediumtext NOT NULL
);

INSERT INTO books (bookName, author, dateFinished, rating, review) VALUES
('The Great Gatsby', 'F. Scott Fitzgerald', '2020-01-01', 5, 'This book was amazing!'),
('The Catcher in the Rye', 'J.D. Salinger', '2020-01-02', 4, 'This book was pretty good.'),
('To Kill a Mockingbird', 'Harper Lee', '2020-01-03', 5, 'This book was amazing!'),
('1984', 'George Orwell', '2020-01-04', 3, 'This book was okay.'),
('Pride and Prejudice', 'Jane Austen', '2020-01-05', 4, 'This book was pretty good.');

