<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Book Search</title>
</head>

<body>
    <center>
        <h1>YOUR BOOK KEEPER</h1>

        <p> Here is some insight into the books you ahve read and stored in your Book Keeper</p>

        <?php
    
            $db_host   = '192.168.56.12';
            $db_name   = 'fvision';
            $db_user   = 'webuser';
            $db_passwd = 'insecure_db_pw';

            $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

            // Check connection
                if($conn === false){
                    die("ERROR: Could not connect. " 
                        . mysqli_connect_error());
                    }

            // Total count of books read
            $sql_total_books = "SELECT COUNT(*) AS total_books FROM books";
            $result_total_books = $conn->query($sql_total_books);
            $total_books = $result_total_books->fetch_assoc()['total_books'];

            // Total count of each genre read
            $sql_total_genre = "SELECT genre, COUNT(*) AS total_genre FROM books GROUP BY genre ORDER BY total_genre DESC LIMIT 5";
            $result_total_genre = $conn->query($sql_total_genre);

            // Top 5 authors read
            $sql_top_authors = "SELECT author, COUNT(*) AS total_author FROM books GROUP BY author ORDER BY total_author DESC LIMIT 5";
            $result_top_authors = $conn->query($sql_top_authors);
            
            // Find 5 star books
            $sql_5_stars = "SELECT bookName, author, genre from books WHERE rating=5";
            $result_5_stars = $conn->query($sql_5_stars);

            // Select all books in database
            $sql_all_books = "SELECT * FROM books";
            $result_all_books = $conn->query($sql_all_books);


        ?>

        <!-- Total Count of Books Read -->
        <h2>Total Books Read</h2>
        <p>Total Books: <?php echo $total_books; ?></p>

        <!-- Total Count of Each Genre Read -->
        <h2>Top 5 Genres Read</h2>
        <table border="1">
            <tr>
                <th>Genre</th>
                <th>Total Read</th>
            </tr>
            <?php while ($row = $result_total_genre->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                    <td><?php echo htmlspecialchars($row['total_genre']); ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- Top 5 Authors Read -->
        <h2>Top 5 Authors Read</h2>
        <table border="1">
            <tr>
                <th>Author</th>
                <th>Total Read</th>
            </tr>
            <?php while ($row = $result_top_authors->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['author']); ?></td>
                    <td><?php echo htmlspecialchars($row['total_author']); ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- 5 Star Books -->
        <h2>5 Star Books</h2>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
            <?php while ($row = $result_5_stars->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['bookName']); ?></td>
                    <td><?php echo htmlspecialchars($row['author']); ?></td>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- All books -->
        <h2> Complete list of all books read</h2>
        <table border="1">
            <tr><th>Book title</th><th>Author</th><th>Genre</th><th>Date finished</th><th>Rating</th><th>Review</th></tr>

            <?php
                while($row = $result_all_books->fetch_assoc()){
                echo "<tr><td>".$row["bookName"]."</td><td>".$row["author"]."</td><td>".$row["genre"]."</td><td>".$row["dateFinished"]."</td><td>".$row["rating"]."</td><td>".$row["review"]."</td></tr>\n";
                }

            ?>
            </table>

        <a href="http://127.0.0.1:8080/">Add more books here</a>

</body>
</html>

<?php
$conn->close();
?>