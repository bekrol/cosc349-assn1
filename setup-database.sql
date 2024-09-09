CREATE TABLE books (
  bookID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  bookName varchar(255) NOT NULL,
  author varchar(255) NOT NULL,
  genre varchar(255) NOT NULL,
  dateFinished date NOT NULL,
  rating int NOT NULL,
  review text NOT NULL
);

INSERT INTO books (bookName, author, genre, dateFinished, rating, review) VALUES
('The Great Gatsby', 'F. Scott Fitzgerald', 'Classic', '2020-01-01', 5, 'This book was amazing!'),
('A Court of Thorns and Roses', 'Sarah J. Maas', 'Romantasy', '2024-01-01', 5, 'This book was amazing!'),
('The Hunger Games', 'Suzanne Collins', 'Dystopian', '2023-10-5', 5, 'This book was amazing!'),
('The Night Circus', 'Erin Morgenstern', 'Fantasy', '2023-9-12', 5, 'This book was amazing!'),
('Throne of Glasss', 'Sarah J. Maas', 'Fantasy', '2024-07-04', 2, 'A bit boring, and the main character was not great'),
('The Rage of Dragons', 'Evan Winter', 'Fantasy', '2024-24-06', 5, 'Fast paced and very exciting. A lot of action and great characters'),
('The Song of Achilles', 'Madeline Miller', 'Historical Fiction', '2023-06-08', 5, 'A lovely perspective of a mythology classic'),
('Circe', 'Madeline Miller', 'Historical Fiction', '2023-11-05', 4, 'A little bit slow but beautiful character development'),
('Before the Coffee Gets Cold', 'Toshikazu Kawaguchi', 'Urban Fiction', '2023-05-09', 3, 'A comforting story'),
('Testament', 'Wilbur Smith', 'Historical Fiction', '2023-12-10', 4, 'Exciting and fun - want to read the other books in the series'),
('The Silent Patient', 'Alex Michaelides', 'Thriller', '2024-05-09', 4, 'The twist at the end of the book left my jaw on the floor!');

